<?php
class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->model("admin");
		$li = $this->session->userdata('username');
		if($li){
			redirect('Dashboard');
		}
		
	}
	public function hellworld(){
		echo md5("hello");
		
	}
	public function index()
	{
		$this->load->view("update/login");
	}
	function verify()
	{
		$data['error'] ="Invalid Login";

		$user = $this->input->post('username');
		$pass = md5($this->input->post('password'));
		$checklogin = $this->admin->validate($user,$pass);
		if($checklogin){
		
			foreach($checklogin as $row);
			$this->session->set_userdata('username', $row->username);
			$this->session->set_userdata('user_type', $row->user_type);
			$this->session->set_userdata('user_id', $row->user_id);
			

			if($this->session->userdata('user_type') == '0'){
				redirect('dashboard');
			}
			else if($this->session->userdata('user_type') == '1'){
				redirect('teacher_dashboard');
			}
			else{
				redirect('student_dashboard');
			}
		}
		else
		{
			$this->session->set_flashdata('chiro', 'Incorrect Username or Password');
			redirect("login");
		}	
	}
}
