<?php

class Student_class extends CI_Controller
{
	public function index()
	{
		$data['s'] = $this->db->query("SELECT * from tbl_schoolyear order by schoolyear_id desc")->result();
		$sch = $this->db->query("SELECT * from tbl_schoolyear order by schoolyear_id desc")->result();
		$new_ss =$sch?$sch[0]->schoolyear_id:null; //must change
		$data['school_year'] = $this->db->query("SELECT * from tbl_schoolyear")->result();
		$data['section']     = $this->db->query("SELECT * from tbl_section")->result();

		$gl	 = $this->input->post('grade_level');
		$sy  = $this->input->post('school_year');
		$sec = $this->input->post('section');
 		$data['class'] = $this->db->query("SELECT * from tbl_studentunderclass,tbl_student,tbl_class ,tbl_schoolyear,tbl_section
		where tbl_studentunderclass.studentid = tbl_student.studentid
		AND tbl_class.class_id = tbl_studentunderclass.class_id
		AND tbl_schoolyear.schoolyear_id = tbl_class.schoolyear_id
		AND tbl_section.section_id = tbl_class.section_id
		AND tbl_schoolyear.schoolyear_id = '$sy'
		AND tbl_section.subj_grade_level = '$gl'
		AND tbl_section.section_id = '$sec'")->result();
		//$this->load->view('template/header_admin');
		$this->load->view('template/latest/header');
		$this->load->view("update/student_class",$data);
		$this->load->view('template/latest/footer');
		//$this->load->view('template/footer_admin');
	}

	public function change_section($id){
		$dat = date('Y -');
		
		$data['student'] = $this->db->query("SELECT * from tbl_student,tbl_studentunderclass,tbl_schoolyear,tbl_class,tbl_section
				where tbl_studentunderclass.studentid = '$id' 
				AND tbl_studentunderclass.studentid = tbl_student.studentid
				AND tbl_class.class_id = tbl_studentunderclass.class_id
				AND tbl_class.schoolyear_id  = tbl_schoolyear.schoolyear_id
				AND tbl_class.section_id = tbl_section.section_id
				AND tbl_schoolyear.schoolyear_start LIKE  '%$dat%'
			")->result();

		$data['section'] = $this->db->query("SELECT * from tbl_section,tbl_class,tbl_schoolyear where tbl_class.section_id = tbl_section.section_id
		AND tbl_section.schoolyear_id = tbl_schoolyear.schoolyear_id
        AND tbl_schoolyear.schoolyear_start LIKE '%$dat%'					
			")->result();
		$this->load->view('template/latest/header');
		$this->load->view('update/change_section',$data);	
		//$this->load->view('change_section',$data);
		$this->load->view('template/latest/footer');	

	}

	public function final_change(){
		$class_id = $this->input->post('class_id');
		$studentid = $this->input->post('studentid');
		$prev_class_id = $this->input->post('prev_class_id');
		var_dump($class_id);
		echo "<br>";
		var_dump($studentid);
		var_dump($prev_class_id);
		$data = array('class_id' => $class_id);
		$this->db->where('studentid',$studentid);
		$this->db->where('class_id',$prev_class_id);
		$this->db->update('tbl_studentunderclass',$data);
		redirect('student_class/change_section/'.$studentid);
	}
}