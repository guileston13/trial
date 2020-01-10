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
		$this->load->view('template/latest/header');
		$this->load->view("update/dashboard",$data);
		$this->load->view('template/latest/footer');
	}
}