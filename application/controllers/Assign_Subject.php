<?php
class Assign_Subject extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model("subject", "", TRUE);
		$this->load->model("schoolyear", "", TRUE);
	}
	public function index()
	{
		
		$data["schoolyear_rows"] = $this->schoolyear->getAllSchoolYear();
		$data["subject_rows"] = $this->subject->getAllSubjects();
		$data['schoolyear']  = $this->db->query("SELECT * FROM tbl_schoolyear order by schoolyear_start desc")->result();
		$data['teacher']  = $this->db->query("SELECT * from tbl_instructor where status = 1")->result();
		$data['subject']  = $this->db->query("SELECT * from tbl_subject")->result();
		$data['curriculum']  = $this->db->query("SELECT * from tbl_curriculum,tbl_subject 
												where tbl_curriculum.subj_id = tbl_subject.subj_id")->result();
																											
		$schoolyear = $this->input->post('schoolyear');
		$section = $this->input->post('section');
		$data['schoolyear'] = $this->input->post('schoolyear');
		$data['section'] = $this->input->post('section');
		$data['list_section'] = $this->db->query("SELECT * from tbl_assignteacher,tbl_section,tbl_instructor,tbl_subject,tbl_schoolyear where tbl_assignteacher.section_id = tbl_section.section_id
		AND tbl_section.section_id = '$section' AND tbl_instructor.teacher_id = tbl_assignteacher.teacher_id
		AND tbl_subject.subj_id	 = tbl_assignteacher.subj_id
		AND tbl_schoolyear.schoolyear_id = tbl_section.schoolyear_id
		AND tbl_section.schoolyear_id = '$schoolyear'
		")->result();
		$this->load->view('template/latest/header');
		$this->load->view("update/section",$data);
		$this->load->view('template/latest/footer');
	}

	public function view_specific_section($id){
		$data['add'] = $this->db->query("SELECT * from tbl_assignteacher,tbl_instructor,tbl_subject
									where tbl_assignteacher.section_id = '$id'
										AND tbl_assignteacher.teacher_id = tbl_instructor.teacher_id
										AND tbl_assignteacher.subj_id = tbl_subject.subj_id")->result();
	$this->load->view('Admin/view_specific_section',$data);
	}

	public function view_sections(){
		$data['add'] = $this->db->query("SELECT tbl_class.section_id,tbl_section.section_name,tbl_schoolyear.schoolyear_start,tbl_instructor.firstname,tbl_instructor.lastname
												from tbl_class,tbl_section,tbl_schoolyear,tbl_instructor
														where tbl_class.section_id = tbl_section.section_id
														AND tbl_class.schoolyear_id = tbl_schoolyear.schoolyear_id
														AND tbl_instructor.teacher_id = tbl_class.teacher_id")->result();
		$this->load->view('Admin/view_section',$data);
	}

	public function api()
	{
		if(isset($_GET["grade_level"]))
		{
			echo json_encode($this->subject->getAllSubjectsByGradeLevel($_GET["grade_level"]));
		}
	}
	public function add_section(){
		
	$teacher = $_POST['teacher'];
	$subject = $_POST['subj_code'];
	$c = 0;
	$nope =  $this->input->post('schoolyear_id');
	$d = $this->db->query("SELECT * from tbl_schoolyear where schoolyear_start = '$nope'")->result();
	$data_section = array(
		'section_name' => $this->input->post('section_naming'),
		'schoolyear_id' => $nope,
		'subj_grade_level' =>  $this->input->post('subj_grade_level'),
	);
	$this->db->insert('tbl_section',$data_section);
	$section = $this->db->insert_id();
	$data_class = array(
		'schoolyear_id' =>  $nope,
		'section_id' =>  $section,
		'grade_level' =>  $this->input->post('subj_grade_level'),
		'teacher_id' => $this->input->post('adviser')
	);
	$this->db->insert('tbl_class',$data_class);
		$class_id = $this->db->insert_id();
		
		
		foreach($teacher as $tech){
			$data_section_adviser = array(
				'section_id'  => $section,
				'teacher_id'  => $tech,
				'type'		  => 2,
				'subj_id'   => $subject[$c],
				'class_id'	=> $class_id
			);
			$this->db->insert('tbl_assignteacher',$data_section_adviser);
			$c++;
		}
		redirect('assign_subject');
	}

}