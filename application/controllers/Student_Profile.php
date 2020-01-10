<?php

class Student_Profile extends CI_Controller
{
	public function index()
	{
		$user_type = $this->session->userdata('user_type');
		$username = $this->session->userdata('username');
		$data['profile']  = $this->db->query("SELECT * from tbl_user,tbl_student where  
														  tbl_user.user_id = tbl_student.user_id 
														AND user_type = $user_type 
														AND username = '$username' ")->result();
		
		$this->load->view("student_profile",$data);
		
	}
}