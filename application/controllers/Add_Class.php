<?php

class Add_Class extends CI_Controller
{
	public function index()
	{
		$data['query'] = $this->db->query("SELECT * from tbl_subject")->result();
			$d = date('Y');
			$data['school_year'] = $this->db->query("SELECT * from tbl_schoolyear order by schoolyear_id desc")->result();
			$sch = $this->db->query("SELECT * from tbl_schoolyear order by schoolyear_id desc")->result();
			$new_ss = $this->input->post('school_year');
			$data['new_ss'] = $this->input->post('school_year');
			$data['classes'] = $this->db->query("SELECT tbl_section.subj_grade_level,tbl_class.section_id,tbl_section.section_name,tbl_schoolyear.schoolyear_start,tbl_instructor.firstname,tbl_instructor.lastname,tbl_class.class_id
			from tbl_class,tbl_section,tbl_schoolyear,tbl_instructor
					where tbl_class.section_id = tbl_section.section_id
					AND tbl_class.schoolyear_id = tbl_schoolyear.schoolyear_id
					AND tbl_instructor.teacher_id = tbl_class.teacher_id
					AND tbl_schoolyear.schoolyear_id = '$new_ss'")->result();
			$data['school_year_display'] = $this->db->query("SELECT * from tbl_schoolyear where tbl_schoolyear.schoolyear_id = '$new_ss'")->result();
		$data['s'] = $this->db->query("SELECT * from tbl_schoolyear order by schoolyear_id desc")->result();	
		$this->load->view('template/latest/header');
		$this->load->view("update/class",$data);
		$this->load->view('template/latest/footer');
	}

	public function section_view_2(){
		
		$this->load->view('Admin/view_section_2');
	}

	public function view_classes($id)
	{
		$data['query'] = $this->db->query("SELECT * from tbl_subject")->result();
		$data['classes'] = $this->db->query("
				SELECT * FROM tbl_class,tbl_assignteacher,tbl_instructor,tbl_subject
				where
					tbl_class.class_id = tbl_assignteacher.class_id
				AND tbl_instructor.teacher_id = tbl_assignteacher.teacher_id
				AND tbl_subject.subj_id = tbl_assignteacher.subj_id
				AND tbl_class.class_id = $id
				")->result();
		echo "string";
		$this->load->view('template/latest/header');
		$this->load->view("update/view_section_2",$data);
		$this->load->view('template/latest/footer');
	}


	public function view_subject(){
		$data['query'] = $this->db->query("SELECT * from tbl_subject")->result();
		
		$this->load->view('template/header');
		 $this->load->view('view_subject',$data);
		$this->load->view('template/footer');
		
	}

	public function update_change_instructor($id,$subj_id,$section_id){
		$data['instructor'] = $this->db->query("SELECT * from tbl_assignteacher,
			tbl_section,tbl_instructor,tbl_subject
			where  tbl_assignteacher.teacher_id = '$id'
			AND tbl_section.section_id = tbl_assignteacher.section_id
			AND tbl_instructor.teacher_id = tbl_assignteacher.teacher_id 
			AND tbl_subject.subj_id = tbl_assignteacher.subj_id
			AND tbl_assignteacher.subj_id = '$subj_id'
			AND tbl_assignteacher.section_id = '$section_id'")->result();
		//var_dump($data['instructor']);
		$data['classes'] = $this->db->query("SELECT * from tbl_instructor where status = 1")->result();
		$this->load->view('template/latest/header');
		$this->load->view('update/update_change_instructor',$data);
		$this->load->view('template/latest/footer');
	}

	public function final_change_instructor(){
		$teacher_id = $this->input->post('teacher_id');
		$section_id = $this->input->post('section_id');
		$subj_id = $this->input->post('subj_id');
		$change_to = $this->input->post('change_to');
		$data =    array('teacher_id'=>$change_to);
		$this->db->where('teacher_id',$teacher_id);
		$this->db->where('section_id',$section_id);
		$this->db->where('subj_id',$subj_id);
		$this->db->update('tbl_assignteacher',$data);
		redirect('add_class/update_change_instructor/'.$change_to.'/'.$subj_id.'/'.$section_id);
	}
}