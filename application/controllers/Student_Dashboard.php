<?php

class Student_Dashboard extends CI_Controller
{
	public function index()
	{
		$this->load->model('Student');
		$data['school_year'] = $this->db->query("SELECT * from tbl_schoolyear")->result();
		$data['display'] = $this->Student->display_grade();
		$data['info']    = $this->Student->info();
		$this->load->view("template/latest/header");
		$this->load->view("update/student/student_dashboard",$data);
		$this->load->view("template/latest/footer");

	}
}