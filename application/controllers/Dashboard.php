<?php

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model("user", "", TRUE);
		$this->load->model("subject", "", TRUE);
		$li = $this->session->userdata('username');
	
	}

	public function index()
	{
		$data["instructors"] = $this->user->countUsers(User::INSTRUCTOR);
		$data["students"] = $this->user->countUsers(User::STUDENT);
		$data["subjects"] = $this->subject->countSubjects();
		$data["percentage"] = $this->user->percentage();
		$data["school"] = $this->user->school();
		$this->load->view('template/latest/header');
		$this->load->view("update/dashboard",$data);
		$this->load->view('template/latest/footer');
	}

	public function update_weight(){
		$i = 0;
		foreach($_POST['id'] as $newid){
			$data = array(
				'acad_name' 					=> $_POST['acadname'][$i],
				'written'   					=> $_POST['written'][$i],
				'performance_task'				=> $_POST['performance'][$i],
				'quarterly_assessment'	=> $_POST['quarter'][$i]
			);
			$this->db->where('acad_id',$_POST['id'][$i]);
			$this->db->update('tbl_percentage',$data);
			$i++;
		}
		redirect('dashboard');
	}

	public function update_school(){
		$i = 0;
		foreach($_POST['id'] as $newid){
			$data = array(
				'school_name' 		=> $_POST['schoolname'][$i],
				'region'   			=> $_POST['region'][$i],
				'division'			=> $_POST['division'][$i],
				'school_id'			=> $_POST['school_id'][$i],
				'district'			=> $_POST['district'][$i],
				'principal'			=> $_POST['principal'][$i]
			);
			$this->db->where('school_id',$_POST['id'][$i]);
			$this->db->update('tbl_school',$data);
			$i++;
		}
		redirect('dashboard');
	}
	
}