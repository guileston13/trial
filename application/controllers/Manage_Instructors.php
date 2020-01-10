<?php
class Manage_Instructors extends CI_Controller 
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	$this->load->model('instructor');
	}

	public function index()
	{
		
		if($this->input->post('submitinstructor'))
		{
			$username=$this->input->post('username');
			$password=md5('1234');
			$age=$this->input->post('age');	
			$contactnumber=$this->input->post('contactnumber');
			$firstname=$this->input->post('firstname');
			$middlename=$this->input->post('middlename');
			$lastname=$this->input->post('lastname');	
			$gender=$this->input->post('gender');
			$address=$this->input->post('address');
		
				$que=$this->db->query("select * from tbl_user where username='".$username."'");
				$que_t=$this->db->query("SELECT * from tbl_instructor where firstname= '$firstname' AND lastname='$lastname'");
				$row = $que->num_rows();
				$row1 = $que_t->num_rows();
			if($row || $row1)
			{
			//	$data['error']="<h3 style='color:red'></h3>";
				$this->session->set_flashdata('message', 'This user already exists.');
				
			}
			else
			{
				$que=$this->db->query("insert into tbl_user values('','$username','$password','1')");
				$user_id = $this->db->insert_id();
				$data = array(
					'user_id' => $user_id,
					'firstname'=> $firstname,
					'lastname' => $lastname,
					'age'		=> $age,
					'middlename'=> $middlename,
					'contactnumber'=> $contactnumber,
					'gender' 	=> $gender,
					'address'	=> $address
				);	
				$this->db->insert('tbl_instructor',$data);
				
				$data['error']="<h3 style='color:blue'>Your account created successfully</h3>";
			}			
				
		}
				
				$data["instructor_rows"] = $this->instructor->getAllInstructors();
				$data['schoolyear']  = $this->db->query("SELECT * from tbl_schoolyear")->result();
				$data['section'] = $this->db->query("SELECT * from tbl_section")->result();
				$data['subject'] = $this->db->query("SELECT * from tbl_subject")->result();
				$data['error']="'";
				$this->load->view('template/latest/header');
				$this->load->view('update/manage_instructors',$data);	
				$this->load->view('template/latest/footer');
	}
	public function deleteInstructor($teacher_id){

		$this->db->where('teacher_id', $teacher_id);
		$this->db->delete('tbl_instructor');

		redirect('manage_instructors');	

	}

	public function update_status($id){
		$query = $this->db->query("SELECT * from tbl_instructor where teacher_id = '$id' ")->result();
		
		if($query[0]->status == 1){
			$data = array('status'=> 0);
		}else{
			$data = array('status'=>1);
		}
		$this->db->where('teacher_id',$id);
		$this->db->update('tbl_instructor',$data);
		redirect('manage_instructors');
	}

}
?>