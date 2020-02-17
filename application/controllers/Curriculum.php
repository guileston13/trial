<?php
class Curriculum extends CI_Controller 
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	$this->load->model("subject", "", TRUE);
	$this->load->model("schoolyear", "", TRUE);

	}

	public function index()
	{
		if($this->input->post("subjectCode") != NULL)
		{
			if($this->input->post("subjectComponent") != "select" && $this->input->post("gradeLevel") != "select")
			{
				$this->subject->createNewSubject(
					$this->input->post("subjectCode"),
					$this->input->post("subjectDescription"),
					$this->input->post("gradeLevel"),
					$this->input->post("subjectComponent")
				);
			}
			redirect("curriculum");
		}
		
		if($this->input->post('add_schoolyear'))
		{
			$schoolyear_start=$this->input->post('schoolyear_start');
			$start = $this->input->post('start');
			$end = $this->input->post('end');
				$que=$this->db->query("select * from tbl_schoolyear where schoolyear_start='".$schoolyear_start."'");
				$row = $que->num_rows();	
			if($row)
			{
				$data['error']="<h3 style='color:red'>This SchoolYear already exists</h3>";
			}
			else
			{
				$que=$this->db->query("insert into tbl_schoolyear values('','$start - $end','1')");
				$data['error']="<h3 style='color:blue'>Your account created successfully</h3>";
			}			
				
		}

				$data['schoolyear_start']  = $this->db->query("SELECT * from tbl_schoolyear")->result();
				$data['school_component'] = $this->db->query("SELECT * from tbl_percentage")->result();
				$this->load->view('template/latest/header');
				
				$this->load->view('update/academicyear',@$data);	
				$this->load->view('template/latest/footer');
	}

	public function create_school_year(){
		$start = $this->input->post('start');
		$end   = $this->input->post('end');
		$ee = $end - $start;
		$ea = "$start - $end";
		$qu = $this->db->query("SELECT * from tbl_schoolyear where schoolyear_start = '$ea'")->num_rows();
		if($start>=$end || $ee > 1 || $qu >= 1){
			$this->session->set_flashdata('fail','Invalid School Year');
			redirect('curriculum');
		}else{
			$data = array(
				'schoolyear_start' => "$start - $end",
				'schoolyear_status'=> 1
			);
			//$this->db->insert('tbl_schoolyear',$data);
			$this->session->set_flashdata('success','This School Year Successfully Created');
			redirect('curriculum');
		}
	
		
	}
	public function api()
	{
		if(isset($_GET["grade_level"]))
		{
			echo json_encode($this->subject->getAllSubjectsByGradeLevel($_GET["grade_level"]));
		}
	}
}
?>