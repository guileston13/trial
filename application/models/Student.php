<?php

class Student extends CI_Model
{
	public function createNewInstructor($firstname, $contactnumber, $address, $username,$user_type)
	{
		$data = array(
			"firstname" => $firstname,
			"contactnumber" => $contactnumber,
			"address" => $address,
			"username" => $username,
			"user_type"  =>$user_type


		);

		$this->db->insert("tbl_user", $data);
		return $this->db->insert_id();
	}

	public function getAllStudent()
	{
		$query = $this->db->query("SELECT * from tbl_user,
												tbl_student 
											where 
												tbl_user.user_id = tbl_student.user_id
												AND tbl_student.status = 1")
								->result();
		return $query;
	}

	public function display_grade(){
		$id = $this->session->userdata('user_id');
		$student = $this->db->query("SELECT * from tbl_student where user_id = '$id'")->result();
		$student_id = $student[0]->studentid;
		$sy = $this->input->post('school_year');
		$query = $this->db->query("SELECT *,
		subj_id as sb,section_id as si,
        (SUM(finalgrade)/4) as totalall,
        
        (SELECT finalgrade from tbl_finalgrade where subj_id = sb AND studentid = '$student_id' 
			AND quarter = 1 AND schoolyear_id = '$sy' ) as quarter1,
        (SELECT finalgrade from tbl_finalgrade where subj_id = sb AND studentid = '$student_id' 
			AND quarter = 2 AND schoolyear_id = '$sy'  ) as quarter2,
		(SELECT finalgrade from tbl_finalgrade where subj_id = sb AND studentid = '$student_id' 
			AND quarter = 3 AND schoolyear_id = '$sy'  ) as quarter3,
		(SELECT finalgrade from tbl_finalgrade where subj_id = sb AND studentid = '$student_id' 
			AND quarter = 4 AND schoolyear_id = '$sy'  ) as quarter4,
		(SELECT subj_code from tbl_subject where subj_id = sb AND schoolyear_id = '$sy' limit 1) as subj_code
		
        
        from tbl_finalgrade where studentid = '$student_id' AND schoolyear_id = '$sy' GROUP by subj_id")->result();
		return $query;
	}

	public function info(){
		$query = $this->db->query("SELECT * from tbl_finalgrade");
		$id = $this->session->userdata('user_id');
		$student = $this->db->query("SELECT * from tbl_student where user_id = '$id'")->result();
		$student_id = $student[0]->studentid;
	}

	
}