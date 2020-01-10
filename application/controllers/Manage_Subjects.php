<?php
class Manage_Subjects extends CI_Controller
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
		if($this->input->post('year')){
			// $data["year"] = $this->input->post('year');
			$data["school_year_row"] = $this->input->post('year');
		}
		else{
			$school_year =  $this->db->query("SELECT * from tbl_schoolyear")->result();
			if($school_year){
				$data["school_year_row"] = $school_year[0]->schoolyear_id;
			}else{
				$data["school_year_row"] = 0;
			}
		}
		$data['cur'] = $this->db->query("SELECT * from tbl_curriculum")->result();
		$subject = $this->input->post('grade_level');
		$data["schoolyear_rows"] = $this->schoolyear->getAllSchoolYear($subject);
		$data["subject_rows"] = $this->subject->getAllSubjects();
		$data['schoolyear']  = $this->db->query("SELECT * from tbl_schoolyear")->result();
		$data['subject']  = $this->db->query("SELECT * from tbl_subject")->result();
		$data['curriculum_rows'] = $this->db->query("SELECT * from tbl_curriculum,tbl_schoolyear,tbl_subject  
													where tbl_curriculum.schoolyear_id = tbl_schoolyear.schoolyear_id
														and tbl_curriculum.subj_id = tbl_subject.subj_id
				")->result();	
		$data["sy"] = $this->db->query("SELECT * from tbl_schoolyear")->result();
		
		$this->load->view('template/latest/header');
		$this->load->view("update/curriculum",$data);
		$this->load->view('template/latest/footer');
	}

	public function subject_row(){
		$query = $this->db->query("SELECT subj_grade_level,subj_code,subj_id,subj_desc from tbl_subject")->result();
		
		$this->output->set_content_type('application/json')
		->set_output(json_encode(array($query)));
	}

	public function view_curriculum(){
		
		$query = $this->db->query("SELECT tbl_schoolyear.schoolyear_id, tbl_subject.subj_grade_level,tbl_subject.subj_code,tbl_subject.subj_id
	
										from tbl_curriculum,tbl_subject,tbl_schoolyear
																where tbl_curriculum.subj_id = tbl_subject.subj_id
																	AND tbl_curriculum.schoolyear_id = tbl_schoolyear.schoolyear_id
							")->result();
		$this->output->set_content_type('application/json')
		->set_output(json_encode(array($query)));
	}

	public function select_latest_school_year(){
		$query = $this->db->query("SELECT * FROM tbl_schoolyear order by schoolyear_start desc limit 1")->result();
		$this->output->set_content_type('application/json')
		->set_output(json_encode(array($query)));
	}

	public function api()
	{
		if(isset($_GET["grade_level"]))
		{
			echo json_encode($this->subject->getAllSubjectsByGradeLevel($_GET["grade_level"]));
		}
	}
	public function assign_subjects(){
		
		foreach($_POST['subjects'] as $posting){
			$school_id = $this->input->post('schoolyear_id');
			$searching = $this->db->query("SELECT * from tbl_curriculum,tbl_subject where tbl_curriculum.subj_id = '$posting' AND schoolyear_id = '$school_id' AND tbl_subject.subj_id = tbl_curriculum.subj_id")->result();
			$search = $this->db->query("SELECT * from tbl_curriculum where subj_id = '$posting' AND schoolyear_id = '$school_id'");
			if($search->num_rows()>=1){
				
				$nc = $searching[0]->subj_code;
				$this->session->set_flashdata('narco','This subject is already used in this curriculum');
				redirect('manage_subjects');
			}
		}
		foreach($_POST['subjects'] as $posting){
			$que = array(
				'subj_id' => $posting,
				'subj_grade_level' => $this->input->post("grade_level"),
				'schoolyear_id'=> $this->input->post('schoolyear_id')
			);

			$this->db->insert('tbl_curriculum', $que);
			}


		redirect('Manage_Subjects');
	}
	public function UnassignSubject($curriculum_id){
		$this->db->where('curriculum_id', $curriculum_id);
		$this->db->delete('tbl_curriculum');

		redirect('manage_subjects');
	}
}