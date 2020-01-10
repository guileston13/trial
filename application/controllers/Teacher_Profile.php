<?php

class Teacher_Profile extends CI_Controller
{
	public function index()
	{
	
		$user_type = $this->session->userdata('user_type');
		$username = $this->session->userdata('username');
		$data['chiro']  = $this->db->query("SELECT * from tbl_user,tbl_instructor where  
														  tbl_user.user_id = tbl_instructor.user_id 
														AND user_type = $user_type 
														AND username = '$username' ")->result();
		
		$this->load->view("teacher_profile",$data);
	}
}