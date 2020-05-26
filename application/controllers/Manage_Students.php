<?php
class Manage_Students extends CI_Controller 
{
	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	$this->load->model('student');
	}

	public function index()
	{
		
		if($this->input->post('submitstudent'))
		{
			$username=$this->input->post('username');
			$password=md5('1234');
			$age=$this->input->post('age');	
			$contactnumber=$this->input->post('contactnumber');
			$firstname=$this->input->post('firstname');
			$middlename=$this->input->post('middlename');
			$lastname=$this->input->post('lastname');	
			$gender=$this->input->post('gender');
			$lrn=$this->input->post('lrn');
			$birthdate=$this->input->post('birthdate');
			$fathersname=$this->input->post('fathersname');
			$mothersname=$this->input->post('mothersname');
			$guardiansname=$this->input->post('guardiansname');
			$relationship=$this->input->post('relationship');
			$birthplace=$this->input->post('birthplace');
			$mothertongue=$this->input->post('mothertongue');
			$ip=$this->input->post('ip');
			$religion=$this->input->post('religion');
			$house=$this->input->post('house');
			$barangay=$this->input->post('barangay');
			$city=$this->input->post('city');
			$province=$this->input->post('province');
			$remarks=$this->input->post('remarks');
			
			
				$que=$this->db->query("select * from tbl_user where username='".$username."'");
				$que_t=$this->db->query("SELECT * from tbl_student where firstname= '$firstname' AND lastname='$lastname'");
				$row = $que->num_rows();
				$row1 = $que_t->num_rows();
			if($row || $row1)
			{
				//$data['error']="This user already exists";
				$this->session->set_flashdata('message', 'This user already exists.');
			}
			else	
			{
				$que=$this->db->query("insert into tbl_user values('','$username','$password','2')");
				$userid = $this->db->insert_id();
				$data = array(
					'firstname' 	=> $firstname,
					'lastname'  	=> $lastname,
					'age'	    	=> $age,
					'user_id'		=> $userid,
					'contactnumber' => $contactnumber,
					'gender'		=> $gender,
					'middlename'	=> $middlename,
					'lrn'		=> $lrn,
					'birthdate'		=> $birthdate,
					'fathersname'		=> $fathersname,
					'mothersname'		=> $mothersname,
					'guardiansname'		=> $guardiansname,
					'relationship'		=> $relationship,
					'birthplace'		=> $birthplace,
					'mothertongue'		=> $mothertongue,
					'ip'		=> $ip,
					'religion'		=> $religion,
					'house'		=> $house,
					'city'		=> $city,
					'province'		=> $province,
					'remarks'		=> $remarks,
					'barangay'		=> $barangay
				);
				$this->db->insert('tbl_student',$data);

				$data['error']="<h3 style='color:blue'>Your account created successfully</h3>";
			}		
					
		}	 		
				// $sch = $this->db->query("SELECT * from tbl_schoolyear order by schoolyear_id desc limit 1")->result();
				// $new_ss =$sch?$sch[0]->schoolyear_id:null;
				//var_dump($new_ss);
				$data['school_year'] = $this->db->query("SELECT * from tbl_schoolyear order by schoolyear_start desc")->result();
				$sy = $this->input->post('school_year');
				echo $sy;
				$data['section'] = $this->db->query("SELECT * from tbl_section,tbl_class,tbl_schoolyear where tbl_section.section_id = tbl_class.section_id
					AND tbl_schoolyear.schoolyear_id = '$sy'
					AND tbl_schoolyear.schoolyear_id = tbl_section.schoolyear_id")->result();
					
				$data["student_rows"] = $this->student->getAllStudent();
				$this->load->view('template/latest/header');
				$this->load->view('update/enroll',@$data);
				$this->load->view('template/latest/footer');	
	}
	public function AllStudent(){
		$query = $this->db->query("SELECT * from tbl_student, tbl_user 

									WHERE tbl_user.user_id = tbl_student.user_id
									and tbl_student.status = 1")
								->result();
		$this->output->set_content_type('application/json')
		->set_output(json_encode(array($query)));
	}
	public function enroll_student(){
		
		
		$stud = $_POST['studentid'];
		$class = $this->input->post('class_id');
		$sy_di = $this->input->post("school_year_id");
		foreach($stud as $key){
			$dat = date('Y -');
			// echo $dat; echo "<br>";
			// echo $class;echo "<br>";
			// echo $key;echo "<br>";
			
			$ss = $this->db->query("SELECT * from tbl_studentunderclass,tbl_class,tbl_section,tbl_student where 
							tbl_studentunderclass.class_id = '$class'
							AND tbl_studentunderclass.studentid ='$key'
							AND tbl_studentunderclass.class_id = tbl_class.class_id
							AND tbl_class.section_id = tbl_section.section_id
							AND tbl_studentunderclass.studentid = tbl_student.studentid
							")->result();
			$s  = $this->db->query("SELECT * from tbl_studentunderclass,tbl_class,tbl_schoolyear where tbl_studentunderclass.class_id = '$class' AND 
				tbl_studentunderclass.studentid ='$key' AND 
				tbl_schoolyear.schoolyear_id = tbl_class.schoolyear_id
                    AND 
					tbl_schoolyear.schoolyear_id = '$sy_di'
				");
			$sad = $this->db->query("SELECT * from tbl_studentunderclass,tbl_class,tbl_schoolyear,tbl_student,tbl_section
			where tbl_studentunderclass.class_id = tbl_class.class_id 
			aND tbl_studentunderclass.studentid = '$key'
			AND tbl_student.studentid =  tbl_studentunderclass.studentid
			AND tbl_class.section_id = tbl_section.section_id
			AND tbl_class.schoolyear_id = tbl_schoolyear.schoolyear_id
			AND tbl_schoolyear.schoolyear_id = '$sy_di'
				");
			// var_dump("class=>".$class);
			// var_dump("dat=>".$dat);
			
			//exit();
			$soo = $s->result();
			var_dump("S =>".$s->num_rows());echo "<br>";

			var_dump("SAD =>".$sad->num_rows());
			
			
			// if(){
				
			// }
			if($s->num_rows()>=1 && $sad->num_rows()>=1){
				$note = $sad->result();
			
				$nc = $note[0]->section_name;
				$firstname = $note[0]->firstname;
				$lastname  = $note[0]->lastname;
				$this->session->set_flashdata('narco','This student: '.$firstname.' '.$lastname.' is current enrolled at'.$nc.' ');
				redirect('manage_students');
			}
		}		
		foreach ($stud as $key) {
		$data = array(
			'class_id' => $class,
			'studentid'=> $key
		);
		$this->db->insert('tbl_studentunderclass',$data);
		}
		$this->session->set_flashdata('success','Successfully Enrolled');
		redirect('Manage_Students');


	}


}
?>