<?php

class Instructor extends CI_Model
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

	public function getAllInstructors()
	{
		$query = $this->db->query("SELECT * from tbl_instructor,tbl_user where tbl_user.user_id = tbl_instructor.user_id ")->result();
		return $query;
	}

	public function display_under_classes(){
		$id = $this->session->userdata('user_id');
		$instructor= $this->db->query("SELECT * from tbl_instructor where user_id = '$id'")->result();	
		$ins = $instructor[0]->teacher_id;	
		$sy = $this->input->post('school_year');
		$assing_class = $this->db->query("SELECT * from tbl_assignteacher,tbl_class,tbl_schoolyear,tbl_section,tbl_subject 
		where tbl_assignteacher.section_id = tbl_class.section_id 
		AND  tbl_assignteacher.teacher_id = '$ins'
		AND tbl_schoolyear.schoolyear_id = '$sy'
		AND tbl_section.section_id = tbl_class.section_id
		AND tbl_assignteacher.subj_id = tbl_subject.subj_id
		AND tbl_class.schoolyear_id = tbl_schoolyear.schoolyear_id")->result();
		return $assing_class;
	}

	public function display_all_year_level(){
		$id = $this->session->userdata('user_id');
		$instructor= $this->db->query("SELECT * from tbl_instructor where user_id = '$id'")->result();	
		$ins = $instructor[0]->teacher_id;
		$sy = $this->input->post('school_year');
		$query = $this->db->query("SELECT tbl_schoolyear.schoolyear_start from tbl_assignteacher,tbl_class,tbl_schoolyear,tbl_section,tbl_subject 
		where tbl_assignteacher.section_id = tbl_class.section_id 
		AND  tbl_assignteacher.teacher_id = '$ins'
		AND tbl_schoolyear.schoolyear_id   = '$sy'
		AND tbl_class.schoolyear_id
		AND tbl_section.section_id = tbl_class.section_id
		AND tbl_assignteacher.subj_id = tbl_subject.subj_id
		AND tbl_class.schoolyear_id = tbl_schoolyear.schoolyear_id 
		GROUP BY tbl_schoolyear.schoolyear_start")->result();
		return $query;
	}

	public function advisory(){
		$id = $this->session->userdata('user_id');
		$sy = $this->input->post('school_year');
		$q = $this->db->query("SELECT * from tbl_instructor,tbl_user where tbl_instructor.user_id = tbl_user.user_id AND tbl_instructor.user_id = '$id'")->result();
		
		$ned = $q[0]->teacher_id;
		$query = $this->db->query("sELECT * from tbl_instructor,tbl_schoolyear,tbl_section,tbl_class where 
		tbl_class.teacher_id = tbl_instructor.teacher_id
		AND tbl_class.schoolyear_id = tbl_schoolyear.schoolyear_id 
		AND tbl_class.section_id = tbl_section.section_id
		AND tbl_schoolyear.schoolyear_id = '$sy'
		AND tbl_class.teacher_id = '$ned' order by tbl_schoolyear.schoolyear_id desc
		")->result();
		return $query;
	}

	public function list($class_id){
		$teacher = $this->session->userdata('user_id');
		$teacher = $this->db->query("SELECT * from tbl_instructor where user_id = '$teacher'")->result();
		$teacher_id = $teacher[0]->teacher_id;

		$class = $this->db->query("SELECT * from tbl_assignteacher where teacher_id = '$teacher_id' 
		AND class_id = '$class_id' ")->result();
		
		return $class[0]->subj_id;
	}

	public function teacher(){
		$id = $this->session->userdata('user_id');
		$query = $this->db->query("SELECT * from tbl_class,tbl_instructor, tbl_user
										where tbl_user.user_id = '$id'
										AND tbl_user.user_id = tbl_instructor.user_id 
										AND tbl_class.teacher_id = tbl_instructor.teacher_id")->result();
		$sectionid = $query[0]->section_id;
	
		$q = $this->db->query("SELECT * from tbl_section where section_id = '$sectionid'")->result();
		$query2 = $this->db->query("SELECT * from tbl_assignteacher,tbl_instructor, tbl_subject
		WHERE
        	tbl_assignteacher.teacher_id = tbl_instructor.teacher_id
            AND tbl_subject.subj_id = tbl_assignteacher.subj_id
            AND tbl_assignteacher.section_id ='$sectionid'")->result();
			
		return $query2;
	}

	

	public function specific_classes($id){
		$query = $this->db->query("SELECT * from tbl_student,tbl_studentunderclass 
										Where tbl_student.studentid = tbl_studentunderclass.studentid
										AND tbl_studentunderclass.class_id = '$id'
										")->result();
		return $query;
	}
	public function specific_classes_subject($id,$section_id,$subj_id){
		$query = $this->db->query("SELECT * from tbl_student,tbl_studentunderclass 
										Where tbl_student.studentid = tbl_studentunderclass.studentid
										AND tbl_studentunderclass.class_id = '$id'
										")->result();
		return $query;
	}
	public function specific_classes_for_books($id){
		$query = $this->db->query("SELECT tbl_class.class_id,tbl_subject.subj_id,tbl_subject.subj_code FROM tbl_class,tbl_section,tbl_curriculum,tbl_subject	 WHERE tbl_class.class_id = '$id'
											AND tbl_class.section_id  = tbl_section.section_id
											AND tbl_curriculum.schoolyear_id = tbl_class.schoolyear_id
											AND tbl_subject.subj_id	 = tbl_curriculum.subj_id
											AND tbl_class.grade_level = tbl_curriculum.subj_grade_level
										")->result();
		return $query;
	}

	public function specific_book($id,$subj_id){
		$query = $this->db->query("SELECT tbl_student.studentid as st,tbl_student.firstname,tbl_student.lastname,
		(SELECT tbl_bookborrowed.book_id from tbl_bookborrowed,tbl_book where tbl_bookborrowed.book_id = tbl_book.book_id AND 
		tbl_bookborrowed.student_id = st
		 AND tbl_book.subj_id = $subj_id) as book_id
		from tbl_student,tbl_studentunderclass 
												Where tbl_student.studentid = tbl_studentunderclass.studentid
												AND tbl_studentunderclass.class_id ='$id'")->result();
		return $query;
	}

	public function create_quiz($id,$section_id){
		$query = $this->db->query("SELECT * from tbl_student,tbl_studentunderclass 
									Where tbl_student.studentid = tbl_studentunderclass.studentid
									AND tbl_studentunderclass.class_id = '$id'
		")->result();
		return $query;
	}

	public function final_grade($class_id,$section_id,$subj_id){
		$teach_id = $this->session->userdata('user_id');
		$q = $this->db->query("SELECT * from tbl_instructor where user_id = '$teach_id'")->result();
		$nerd = $q[0]->teacher_id;
	
		$query = $this->db->query("SELECT tbl_studentunderclass.studentid as id, 

	(SELECT SUM(tbl_student_quiz.quiz_score) 
			from tbl_student_quiz,tbl_quiz
				where tbl_student_quiz.user_id = id AND tbl_student_quiz.quiz_id = tbl_quiz.quiz_id AND 
				tbl_quiz.subj_id = '$subj_id'  ) as quiz,
			
				
	(SELECT COUNT(tbl_student_quiz.quiz_score) 
			from tbl_student_quiz,tbl_quiz
				where tbl_student_quiz.user_id = id AND tbl_student_quiz.quiz_id = tbl_quiz.quiz_id AND 
				tbl_quiz.subj_id = '$subj_id'  ) as count_quiz,
			
	(SELECT SUM(tbl_quiz.quiz_item) 
			from tbl_student_quiz,tbl_quiz
				where tbl_student_quiz.user_id = id AND tbl_student_quiz.quiz_id = tbl_quiz.quiz_id AND
				tbl_quiz.subj_id = '$subj_id'  ) as quiz_total,
		
		(SELECT SUM(tbl_student_exam.exam_score) 
			from tbl_student_exam,tbl_exam
				where tbl_student_exam.user_id = id AND tbl_student_exam.exam_id = tbl_exam.exam_id AND
				tbl_exam.subj_id = '$subj_id'  ) as exam,
			
		(SELECT SUM(tbl_exam.exam_item) 
			from tbl_student_exam,tbl_exam
				where tbl_student_exam.user_id = id AND tbl_student_exam.exam_id = tbl_exam.exam_id AND
				tbl_exam.subj_id = '$subj_id'  ) as exam_total,
			
		(SELECT SUM(tbl_student_assignment.assignment_score) 
			from tbl_student_assignment,tbl_assignment
				where tbl_student_assignment.user_id = id AND tbl_student_assignment.assignment_id = 
			tbl_assignment.assignment_id AND tbl_assignment.subj_id = '$subj_id'  ) as assignment,
		
		
		(SELECT SUM(tbl_assignment.assignment_item) 
			from tbl_student_assignment,tbl_assignment
				where tbl_student_assignment.user_id = id AND tbl_student_assignment.assignment_id = 
			tbl_assignment.assignment_id AND tbl_assignment.subj_id = '$subj_id'  ) as assignment_total,

			(SELECT SUM(tbl_student_project.project_score) 
			from tbl_student_project,tbl_project
				where tbl_student_project.user_id = id AND tbl_student_project.project_id = tbl_project.project_id
				AND tbl_project.subj_id = '$subj_id'  ) as project,

		(SELECT SUM(tbl_project.project_item) 
			from tbl_student_project,tbl_project
				where tbl_student_project.user_id = id AND tbl_student_project.project_id = tbl_project.project_id
				AND tbl_project.subj_id = '$subj_id'  ) as project_total,
			
			tbl_student.firstname,tbl_student.lastname,tbl_subject.subj_id,tbl_subject.acad_id,
			tbl_percentage.acad_name,tbl_percentage.written,tbl_percentage.quarterly_assessment,tbl_percentage.performance_task
	
	from tbl_studentunderclass,tbl_student,tbl_class,tbl_assignteacher,tbl_subject,tbl_percentage
		where tbl_studentunderclass.studentid = tbl_student.studentid
        AND tbl_studentunderclass.class_id = tbl_class.class_id
        AND tbl_class.section_id = '$section_id'
		AND tbl_class.section_id = tbl_assignteacher.section_id
		AND tbl_assignteacher.teacher_id = '$nerd'
		AND tbl_assignteacher.subj_id = tbl_subject.subj_id
        AND tbl_percentage.acad_id = tbl_subject.acad_id
	
	

		")->result();
		
	return $query;	
	}

	public function trial($class_id,$section_id,$subj_id){
		
		$idd = $this->session->userdata('user_id');
		$q = $this->db->query("SELECT * from tbl_instructor where user_id = '$idd' ")->result();
		$id = $q[0]->teacher_id;
		$query =$this->db->query(
			"SELECT *,tbl_assignteacher.teacher_id as assign_teacher from tbl_assignteacher ,tbl_class,tbl_studentunderclass,tbl_student
			where tbl_assignteacher.teacher_id = '$id'
			AND tbl_assignteacher.subj_id = '$subj_id'
			AND tbl_class.section_id = '$section_id'
			AND tbl_class.class_id = tbl_assignteacher.class_id
			AND tbl_studentunderclass.class_id = tbl_class.class_id
			AND tbl_studentunderclass.studentid = tbl_student.studentid
			")->result();
		return $query;
	}

	public function infos($classid){
		$query = $this->db->query("SELECT * from tbl_class,tbl_schoolyear,tbl_section
					where tbl_class.schoolyear_id = tbl_schoolyear.schoolyear_id
					AND tbl_section.section_id = tbl_class.section_id
					AND tbl_class.class_id = '$classid' ")->result();
		return $query;

	}

	public function form_seven($class_id){
		$query = $this->db->query("SELECT * from tbl_class,tbl_studentunderclass,tbl_student,tbl_schoolyear
					where tbl_class.class_id = tbl_studentunderclass.class_id
					AND tbl_studentunderclass.studentid = tbl_student.studentid
					AND tbl_schoolyear.schoolyear_id = tbl_class.schoolyear_id
					AND grade_level = 'seven' 
					AND tbl_class.class_id = '$classid'
					AND tbl_schoolyear.schoolyear_start LIKE '%2019-%'")->result();
		return $query;
	}	
	public function form_eight($class_id){
		$query = $this->db->query("SELECT * from tbl_class,tbl_studentunderclass,tbl_student,tbl_schoolyear
					where tbl_class.class_id = tbl_studentunderclass.class_id
					AND tbl_studentunderclass.studentid = tbl_student.studentid
					AND tbl_schoolyear.schoolyear_id = tbl_class.schoolyear_id
					AND grade_level = 'eight' 
					AND tbl_class.class_id = '$classid'
					AND tbl_schoolyear.schoolyear_start LIKE '%2019-%'")->result();
		return $query;
	}
	
	public function male_promoted_seven($school_year){
		
		$query = $this->db->query("SELECT SUM(finalgrade) as summ, COUNT(tbl_finalgrade.finalgrade_id) as totalnet,
								(SUM(finalgrade)/COUNT(tbl_finalgrade.finalgrade_id)) as nude
								from tbl_schoolyear,tbl_finalgrade,tbl_class,tbl_student
								Where tbl_schoolyear.schoolyear_id = tbl_finalgrade.schoolyear_id
								AND tbl_finalgrade.section_id = tbl_class.section_id
								AND tbl_schoolyear.schoolyear_id = '$school_year'
								AND tbl_student.studentid = tbl_finalgrade.studentid
								AND tbl_student.gender = 'Male'
								AND tbl_class.grade_level = '7'
								GROUP BY tbl_finalgrade.studentid")->result();
		return $query;
	}

	public function female_promoted_seven($school_year){
		
		$query = $this->db->query("SELECT SUM(finalgrade) as summ, COUNT(tbl_finalgrade.finalgrade_id) as totalnet,
								(SUM(finalgrade)/COUNT(tbl_finalgrade.finalgrade_id)) as nude
								from tbl_schoolyear,tbl_finalgrade,tbl_class,tbl_student
								Where tbl_schoolyear.schoolyear_id = tbl_finalgrade.schoolyear_id
								AND tbl_finalgrade.section_id = tbl_class.section_id
								AND tbl_schoolyear.schoolyear_id = '$school_year'
								AND tbl_student.studentid = tbl_finalgrade.studentid
								AND tbl_student.gender = 'Female'
								AND tbl_class.grade_level = '7'
								GROUP BY tbl_finalgrade.studentid")->result();
		return $query;
	}

	public function male_promoted_eight($school_year){
		
		$query = $this->db->query("SELECT SUM(finalgrade) as summ, COUNT(tbl_finalgrade.finalgrade_id) as totalnet,
								(SUM(finalgrade)/COUNT(tbl_finalgrade.finalgrade_id)) as nude
								from tbl_schoolyear,tbl_finalgrade,tbl_class,tbl_student
								Where tbl_schoolyear.schoolyear_id = tbl_finalgrade.schoolyear_id
								AND tbl_finalgrade.section_id = tbl_class.section_id
								AND tbl_schoolyear.schoolyear_id = '$school_year'
								AND tbl_student.studentid = tbl_finalgrade.studentid
								AND tbl_student.gender = 'Male'
								AND tbl_class.grade_level = '8'
								GROUP BY tbl_finalgrade.studentid")->result();
		return $query;
	}

	public function female_promoted_eight($school_year){
		
		$query = $this->db->query("SELECT SUM(finalgrade) as summ, COUNT(tbl_finalgrade.finalgrade_id) as totalnet,
								(SUM(finalgrade)/COUNT(tbl_finalgrade.finalgrade_id)) as nude
								from tbl_schoolyear,tbl_finalgrade,tbl_class,tbl_student
								Where tbl_schoolyear.schoolyear_id = tbl_finalgrade.schoolyear_id
								AND tbl_finalgrade.section_id = tbl_class.section_id
								AND tbl_schoolyear.schoolyear_id = '$school_year'
								AND tbl_student.studentid = tbl_finalgrade.studentid
								AND tbl_student.gender = 'Female'
								AND tbl_class.grade_level = '8'
								GROUP BY tbl_finalgrade.studentid")->result();
		return $query;
	}

	public function male_promoted_nine($school_year){
		
		$query = $this->db->query("SELECT SUM(finalgrade) as summ, COUNT(tbl_finalgrade.finalgrade_id) as totalnet,
								(SUM(finalgrade)/COUNT(tbl_finalgrade.finalgrade_id)) as nude
								from tbl_schoolyear,tbl_finalgrade,tbl_class,tbl_student
								Where tbl_schoolyear.schoolyear_id = tbl_finalgrade.schoolyear_id
								AND tbl_finalgrade.section_id = tbl_class.section_id
								AND tbl_schoolyear.schoolyear_id = '$school_year'
								AND tbl_student.studentid = tbl_finalgrade.studentid
								AND tbl_student.gender = 'Male'
								AND tbl_class.grade_level = '9'
								GROUP BY tbl_finalgrade.studentid")->result();
		return $query;
	}

	public function female_promoted_nine($school_year){
		
		$query = $this->db->query("SELECT SUM(finalgrade) as summ, COUNT(tbl_finalgrade.finalgrade_id) as totalnet,
								(SUM(finalgrade)/COUNT(tbl_finalgrade.finalgrade_id)) as nude
								from tbl_schoolyear,tbl_finalgrade,tbl_class,tbl_student
								Where tbl_schoolyear.schoolyear_id = tbl_finalgrade.schoolyear_id
								AND tbl_finalgrade.section_id = tbl_class.section_id
								AND tbl_schoolyear.schoolyear_id = '$school_year'
								AND tbl_student.studentid = tbl_finalgrade.studentid
								AND tbl_student.gender = 'Female'
								AND tbl_class.grade_level = '9'
								GROUP BY tbl_finalgrade.studentid")->result();
		return $query;
	}

	public function male_promoted_ten($school_year){
		
		$query = $this->db->query("SELECT SUM(finalgrade) as summ, COUNT(tbl_finalgrade.finalgrade_id) as totalnet,
								(SUM(finalgrade)/COUNT(tbl_finalgrade.finalgrade_id)) as nude
								from tbl_schoolyear,tbl_finalgrade,tbl_class,tbl_student
								Where tbl_schoolyear.schoolyear_id = tbl_finalgrade.schoolyear_id
								AND tbl_finalgrade.section_id = tbl_class.section_id
								AND tbl_schoolyear.schoolyear_id = '$school_year'
								AND tbl_student.studentid = tbl_finalgrade.studentid
								AND tbl_student.gender = 'Male'
								AND tbl_class.grade_level = '10'
								GROUP BY tbl_finalgrade.studentid")->result();
		return $query;
	}	

	public function female_promoted_ten($school_year){
		
		$query = $this->db->query("SELECT SUM(finalgrade) as summ, COUNT(tbl_finalgrade.finalgrade_id) as totalnet,
								(SUM(finalgrade)/COUNT(tbl_finalgrade.finalgrade_id)) as nude
								from tbl_schoolyear,tbl_finalgrade,tbl_class,tbl_student
								Where tbl_schoolyear.schoolyear_id = tbl_finalgrade.schoolyear_id
								AND tbl_finalgrade.section_id = tbl_class.section_id
								AND tbl_schoolyear.schoolyear_id = '$school_year'
								AND tbl_student.studentid = tbl_finalgrade.studentid
								AND tbl_student.gender = 'Female'
								AND tbl_class.grade_level = '10'
								GROUP BY tbl_finalgrade.studentid")->result();
		return $query;
	}

	public function male_promoted_eleven($school_year){
		
		$query = $this->db->query("SELECT SUM(finalgrade) as summ, COUNT(tbl_finalgrade.finalgrade_id) as totalnet,
								(SUM(finalgrade)/COUNT(tbl_finalgrade.finalgrade_id)) as nude
								from tbl_schoolyear,tbl_finalgrade,tbl_class,tbl_student
								Where tbl_schoolyear.schoolyear_id = tbl_finalgrade.schoolyear_id
								AND tbl_finalgrade.section_id = tbl_class.section_id
								AND tbl_schoolyear.schoolyear_id = '$school_year'
								AND tbl_student.studentid = tbl_finalgrade.studentid
								AND tbl_student.gender = 'Male'
								AND tbl_class.grade_level = '11'
								GROUP BY tbl_finalgrade.studentid")->result();
		return $query;
	}

	public function female_promoted_eleven($school_year){
		
		$query = $this->db->query("SELECT SUM(finalgrade) as summ, COUNT(tbl_finalgrade.finalgrade_id) as totalnet,
								(SUM(finalgrade)/COUNT(tbl_finalgrade.finalgrade_id)) as nude
								from tbl_schoolyear,tbl_finalgrade,tbl_class,tbl_student
								Where tbl_schoolyear.schoolyear_id = tbl_finalgrade.schoolyear_id
								AND tbl_finalgrade.section_id = tbl_class.section_id
								AND tbl_schoolyear.schoolyear_id = '$school_year'
								AND tbl_student.studentid = tbl_finalgrade.studentid
								AND tbl_student.gender = 'Female'
								AND tbl_class.grade_level = '11'
								GROUP BY tbl_finalgrade.studentid")->result();
		return $query;
	}

	public function male_promoted_twelve($school_year){
		
		$query = $this->db->query("SELECT SUM(finalgrade) as summ, COUNT(tbl_finalgrade.finalgrade_id) as totalnet,
								(SUM(finalgrade)/COUNT(tbl_finalgrade.finalgrade_id)) as nude
								from tbl_schoolyear,tbl_finalgrade,tbl_class,tbl_student
								Where tbl_schoolyear.schoolyear_id = tbl_finalgrade.schoolyear_id
								AND tbl_finalgrade.section_id = tbl_class.section_id
								AND tbl_schoolyear.schoolyear_id = '$school_year'
								AND tbl_student.studentid = tbl_finalgrade.studentid
								AND tbl_student.gender = 'Male'
								AND tbl_class.grade_level = '12'
								GROUP BY tbl_finalgrade.studentid")->result();
		return $query;
	}

	public function female_promoted_twelve($school_year){
		
		$query = $this->db->query("SELECT SUM(finalgrade) as summ, COUNT(tbl_finalgrade.finalgrade_id) as totalnet,
								(SUM(finalgrade)/COUNT(tbl_finalgrade.finalgrade_id)) as nude
								from tbl_schoolyear,tbl_finalgrade,tbl_class,tbl_student
								Where tbl_schoolyear.schoolyear_id = tbl_finalgrade.schoolyear_id
								AND tbl_finalgrade.section_id = tbl_class.section_id
								AND tbl_schoolyear.schoolyear_id = '$school_year'
								AND tbl_student.studentid = tbl_finalgrade.studentid
								AND tbl_student.gender = 'Female'
								AND tbl_class.grade_level = '12'
								GROUP BY tbl_finalgrade.studentid")->result();
		return $query;
	}
	

}