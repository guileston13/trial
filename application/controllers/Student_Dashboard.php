<?php

class Student_Dashboard extends CI_Controller
{
	public function index()
	{
		$this->load->model('Student');
		$data['display'] = $this->Student->display_grade();
		$scy = $data['display']?$data['display'][0]->schoolyear_id : '';
		$scy = $this->input->post('school_year');
		$data['school_year'] = $this->db->query("SELECT * from tbl_schoolyear")->result();
		$data['display_year'] = $this->db->query("SELECT * from tbl_schoolyear where schoolyear_id ='$scy'")->result();
		$data['info']    = $this->Student->info();
		$this->load->view("template/latest/header");
		$this->load->view("update/student/student_dashboard",$data);
		$this->load->view("template/latest/footer");

	}
}