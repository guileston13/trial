<?php

class Teacher_Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
			$this->load->database();
			$this->load->helper('url');
			$this->load->model('Instructor');
	}

	public function index()
	{
		$data['classes'] = $this->Instructor->display_under_classes();

		$data['class'] = $this->db->query("SELECT * from tbl_schoolyear order by schoolyear_start desc")->result();
		$this->load->view('template/latest/header');
		$this->load->view('update/teacher/teacher_dashboard',$data);
		$this->load->view('template/latest/footer');
	}

	public function add_list_attendance($id){
		$data['student'] = $this->Instructor->specific_classes($id);
		$this->load->view('template/latest/header');
		$this->load->view('update/teacher/add_list_attendance',$data);
		$this->load->view('template/latest/footer');
	}

	public function add_attendance_final($class_id,$section_id,$subj_id){
		if(!$_POST){
			echo "no data";
		}else{
		
		
		$teacher = $this->session->userdata('user_id');
		$teacher = $this->db->query("SELECT * from tbl_instructor where user_id = '$teacher'")->result();
		$teacher_id = $teacher[0]->teacher_id;
		
		
		$class = $this->db->query("SELECT * from tbl_class,tbl_assignteacher where tbl_class.class_id = '$class_id' 
												AND tbl_assignteacher.class_id = tbl_class.class_id
												AND tbl_assignteacher.teacher_id = '$teacher_id' ")->result();
		
		
		$section_id = $class[0]->section_id;
		$subj_id = $class[0]->subj_id;
		$nn = date('Y-m-d');
		
		$attendance = $this->db->query("SELECT * from tbl_attendance where 
											section_id = '$section_id'
											AND subj_id = '$subj_id'
											AND date_attendance = '$nn'
											AND instructorid ='$teacher_id'
										");
	
		if($attendance->num_rows()>=1){
			// Insert
			echo "update";
			$posting = $_POST['student_id'];
			foreach($posting as $key => $value){
				foreach($value as $me){
				$data = array(
					'status' => $key,
					'studentid' => $me,
					'subj_id'=> $subj_id,
					'section_id'=> $section_id,
					'date_attendance'=> $nn,
					'instructorid' => $teacher_id
				);
				$this->db->where('date_attendance',$nn);
				$this->db->where('studentid',$me);
				$this->db->update('tbl_attendance',$data);
				}
			}
		}else{
			// Update
			echo "insert";
			
			$posting = $_POST['student_id'];
			
			$o = 0;
			 foreach($posting as $key => $value){
				foreach($value as $me){
						$data = array(
					'status' => $key,
					'studentid' => $me,
					'subj_id'=> $subj_id,
					'section_id'=> $section_id,
					'date_attendance'=> $nn,
					'instructorid' => $teacher_id
				);
				$this->db->insert('tbl_attendance',$data);
				
				}
		
			
			
			 }
			
			
		

		}
		redirect('teacher_dashboard/add_list_attendance/'.$class_id.'/'.$section_id.'/'.$subj_id.'/' );
		
	}
	}

	public function specific_classes($id){
		$data['students'] = $this->Instructor->specific_classes($id);
	
		$this->load->view('template/teacher_header');
		$this->load->view('teacher/create_specific_quiz',$data);
		$this->load->view('template/teacher_footer');
	}

	public function create_quiz_now($sectionid){
		$data = array(
			'quiz_item'	=> $this->input->post('quiz_item'),
			'quiz_name'	=> $this->input->post('quiz_name'),
			'subj_id'	=> $this->input->post('subj_id'),
		);
		$this->db->insert('tbl_quiz',$data);
	}

	public function quiz_counter(){
		$event = $this->input->post('event');
		//var_dump($event);
		$subject_id = $this->input->post('subject_id');
		$quarter_id = $this->input->post('quarter_id');
		$user_id = $this->session->userdata('user_id');
		$year_level = $this->input->post('year_level');
		$sectionion =  $this->input->post('sectionion');
		$new_event = 'tbl_'.$event;
		$result = $this->db->query("SELECT * from tbl_assignteacher,$new_event,tbl_class where tbl_assignteacher.section_id = '$sectionion'
			AND tbl_assignteacher.subj_id = '$subject_id'
			AND $new_event.subj_id = tbl_assignteacher.subj_id
			AND $new_event.quarter_id = '$quarter_id'
			AND $new_event.section_id = '$sectionion'
			AND tbl_class.class_id = tbl_assignteacher.class_id
			AND tbl_class.schoolyear_id = '$year_level'
			")->num_rows();
			
		echo json_encode($result);
		
	}

	public function create_quiz($id,$section_id){
		$data['quiz'] = $this->Instructor->create_quiz($id,$section_id);
		
		$this->load->view('template/latest/header');
		$this->load->view('update/teacher/create_quiz',$data);
		$this->load->view('template/latest/footer');
	}

	public function create_specific(){
		$data['quiz'] = $this->Instructor->create_quiz($id,$section_id);
		
		$this->load->view('template/teacher_header');
		$this->load->view('teacher/create_specific',$data);
		$this->load->view('template/teacher_footer');	
	}

	public function teacher_specific_classes($classid){
		$data['students'] = $this->Instructor->specific_classes($classid);
		$this->load->view('template/latest/header');
		$this->load->view('update/teacher/teacher_specific_classes',$data);
		$this->load->view('template/latest/footer');	
	}

	public function add_book($class_id){
		$subj_idHeader = $this->uri->segment(5);
		$data['sy'] = $this->uri->segment(6);
		$data['book'] = $this->Instructor->specific_book($class_id,$subj_idHeader);
		$datas = $this->db->query("SELECT * from tbl_subject where subj_id = '$subj_idHeader'")->result();
		
		$data['subject'] = $datas[0]->subj_code;
		$data['list'] = $this->db->query("SELECT * from tbl_book where subj_id = '$subj_idHeader' AND status = 1")->result();
		
		$this->load->view('template/latest/header');
		$this->load->view('update/teacher/book',$data);
		$this->load->view('template/latest/footer');
	}

	public function add_book_final($f,$s,$t){
		$posting = $_POST['studentid'];
		$book_id = $_POST['book_id'];
		
		$book = 0;
		foreach($posting as $pos){
		
			if($book_id[$book] == NULL){
					}else{
						echo "true";
					if($book_id[$book] == '0'){
						
					}else{
						$select = $this->db->query("SELECT * 
													from tbl_bookborrowed 
														where book_id = '$book_id[$book]' 
															AND student_id = '$pos'");
						if($select->num_rows() == 1){
						}else{
							$data = array(
								'book_id' 	=> $book_id[$book],	
								'student_id'=> $pos,
								'subj_id'   => $this->input->post('subj_id')
							);
							$this->db->insert('tbl_bookborrowed',$data);
							$id = $this->db->insert_id();
							
							$data2 = array('status' => 0 );
							$this->db->where('book_id', $book_id[$book]);
							$this->db->update('tbl_book',$data2);
						}
					}
				$book++;
				}
			}
		redirect('teacher_dashboard/add_book/'.$f.'/'.$s.'/'.$t);
	
	}

	public function form2($classid){
		$data['form2'] = $this->db->query("SELECT * from tbl_school")->result();
		$data['students'] = $this->Instructor->specific_classes($classid);
		$data['students']?$data['students']:null;
		$data['info'] = $this->db->query("SELECT * from tbl_class,tbl_schoolyear,tbl_section 
			where class_id = '$classid'
			AND tbl_schoolyear.schoolyear_id = tbl_class.schoolyear_id
			AND tbl_section.section_id = tbl_class.section_id")->result();
		$data['top_info'] = $this->Instructor->infos($classid);
		$this->load->view('teacher/form2',$data);
	}

	public function form3($classid){
		$data['form3'] = '';
		$data['students'] = $this->Instructor->specific_classes($classid);
		$data['subjects'] = $this->Instructor->specific_classes_for_books($classid);
		$data['info'] = $this->Instructor->infos($classid);
		$data['form3'] = $this->db->query("SELECT * from tbl_school")->result();
		
		$this->load->view('update/teacher/form3',$data);
	}

	public function form1($classid){
		$data['form1'] = $this->db->query("SELECT * from tbl_studentunderclass,tbl_student
						where tbl_studentunderclass.studentid = tbl_student.studentid 
						AND tbl_studentunderclass.class_id = '$classid'
		")->result();
		$data['form'] = $this->db->query("SELECT * from tbl_school")->result();
		$data['infos'] = $this->Instructor->infos($classid);
		$this->load->view("form1", $data);
	}

	// public function create_calculation(){

	// }

	public function student_specific_grade($studentid){
		
		$sevent_id = $this->uri->segment(5);
		$studentidNow = $this->uri->segment(4);
		$data['seven'] = $sevent_id;
		
		if($sevent_id == 'quiz'){
			$id = 'quiz_id';
			$table = 'tbl_quiz';
			$table_student = 'tbl_student_quiz';
		
		}else if($sevent_id =='assignment'){
			$id = 'assignment_id';
			$table = 'tbl_assignment';
			$table_student = 'tbl_student_assignment';

		}else if($sevent_id =='project'){
			$id = 'project_id';
			$table = 'tbl_project';
			$table_student = 'tbl_student_project';

		}else if($sevent_id =='exam'){
			$id = 'exam_id';
			$table = 'tbl_exam';
			$table_student = 'tbl_student_exam';			
		
		}else if($sevent_id =='recitation'){
			$id = 'recitation_id';
			$table = 'tbl_recitation';
			$table_student = 'tbl_student_recitation';			
		}

		
		$n = $this->session->userdata('user_id');
		$q = $this->db->query("SELECT * from tbl_instructor where user_id = '$n'")->result();
		$teach = $q[0]->teacher_id;
		$poo = $this->db->query("SELECT * from tbl_assignteacher where teacher_id = '$teach'")->result();
		$sub =$poo[0]->subj_id;
		
		$data['grade'] = $this->db->query("SELECT * from 
				$table,$table_student,tbl_student ,tbl_subject
					where $table.$id = $table_student.$id
					AND tbl_student.studentid = $table_student.user_id
					AND $table_student.user_id = '$studentidNow'
					And $table.subj_id = tbl_subject.subj_id
					AND tbl_subject.subj_id = '$sub'
						")->result();
		
		
		$this->load->view('template/teacher_header');
		$this->load->view('teacher/student_specific_grade',$data);
		$this->load->view('template/teacher_footer');
	}

	public function advisory(){
		$id = $this->session->userdata('user_id');
		$data['school_year'] = $this->db->query("SELECT * from tbl_schoolyear order by schoolyear_start desc")->result();
		$data['sy_id'] = $this->input->post('school_year');
		$user = $this->db->query("SELECT * from tbl_instructor where user_id = '$id' ")->result();
		$teach  =$user[0]->teacher_id;
		$qu = $this->db->query("SELECT * from tbl_class where teacher_id = '$teach' ")->result();
		if(!$qu){
			$data['classes'] = "NO";
			$data['section'] = "NO";
		}else{
			$data['classes'] = $this->Instructor->advisory();
			$data['section'] = $this->Instructor->teacher();
		}
		
		$this->load->view('template/latest/header');
		$this->load->view('update/teacher/teacher_advisory',$data);
		$this->load->view('template/latest/footer');
	}

	public function final_grade(){
		$data['school_year'] = $this->db->query("SELECT * from tbl_schoolyear order by schoolyear_start desc")->result();
		$data['classes'] = $this->Instructor->display_under_classes();
		$data['year_level'] = $this->Instructor->display_all_year_level();
		
		$this->load->view('template/latest/header');
		$this->load->view('update/teacher/final_grade',$data);
		$this->load->view('template/latest/footer');
	}

	public function final_grade_view_specific($class_id,$section_id,$subj_id){
		$data['classes'] = $this->Instructor->final_grade($class_id,$section_id,$subj_id);
		$this->load->view('template/teacher_header');
		$this->load->view('teacher/final_grade_view_specific',$data);
		$this->load->view('template/teacher_footer');		
	}

	public function trial($class_id,$section_id,$subj_id){
		
		$data['student'] = $this->Instructor->trial($class_id,$section_id,$subj_id);
	
		$q = $this->Instructor->trial($class_id,$section_id,$subj_id);
		//var_dump($q[0]->subj_id);
		if(!$q){
		echo "No Student Enroll";
		}else{
			
			$qq = $q[0]->subj_id;
			
			$data['qu'] = $this->db->query("SELECT * from tbl_subject,tbl_percentage 
			where tbl_subject.subj_id = '$qq' AND 
			tbl_percentage.acad_id = tbl_subject.acad_id
			")->result(); 
		$data['infos'] = $this->Instructor->infos($class_id);
		$data['school_info'] = $this->db->query("SELECT * from tbl_school")->result();
		$data['class_id_sam'] = $class_id;
		$this->load->view('teacher/form11',$data);
		}
	}	

	public function submit_final_grade(){
		
		$posting  = $_POST['finalgrade'];
		$student  = $_POST['studentid'];
		$subj_id =$this->input->post('subj_id_id');
		$section_id	= $this->input->post('section_id');
		$quarter = $this->input->post('quarter');
		$schoolyear_id = $this->input->post('schoolyear_id');
		$i = 0;
		foreach($posting as $post){
			$search = $this->db->query("SELECT * from tbl_finalgrade where studentid ='$student[$i]' 
					AND subj_id = '$subj_id' 
					AND section_id = '$section_id'
					AND quarter = '$quarter'
					AND schoolyear_id = '$schoolyear_id'");
			if($search->num_rows() == 1){
				$data = array(
					'studentid' => $student[$i],
					'subj_id'	=> $this->input->post('subj_id_id'),
					'section_id'=> $this->input->post('section_id'),
					'quarter'	=> $this->input->post('quarter'),
					'finalgrade'=> $post,
					'schoolyear_id'=> $this->input->post('schoolyear_id')
				);
				$this->db->where('studentid',$student[$i]);
				$this->db->where('subj_id',$subj_id);
				$this->db->where('section_id',$section_id);
				$this->db->where('quarter',$quarter);
				$this->db->where('schoolyear_id',$schoolyear_id);
				$this->db->update('tbl_finalgrade',$data);
			}else{
			$data = array(
				'studentid' 	=> $student[$i],
				'subj_id'		=> $this->input->post('subj_id_id'),
				'section_id'	=> $this->input->post('section_id'),
				'quarter'		=> $this->input->post('quarter'),
				'schoolyear_id' => $this->input->post('schoolyear_id'),
				'finalgrade'	=> $post,
			);
			$this->db->insert('tbl_finalgrade',$data);
			}
			
			$i++;
		}
		redirect('teacher_dashboard/final_grade');
		
	}

	public function all_subject_final_grade($classid){
		//$data['student'] = $this->Instructor->trial($class_id,$section_id,$subj_id);
		$data['info'] = $this->Instructor->infos($classid);
		$data['student'] = $this->Instructor->specific_classes($classid);
		$data['form3'] = $this->db->query("SELECT * from tbl_school")->result();

		//$q = $this->Instructor->trial($class_id,$section_id,$subj_id);	
		$this->load->view('update/teacher/all_subject_final_grade',$data);
	}
	public function specific_final_grade($classid){
		//$data['student'] = $this->Instructor->trial($class_id,$section_id,$subj_id);
		$data['student'] = $this->Instructor->specific_classes($classid);
		//$q = $this->Instructor->trial($class_id,$section_id,$subj_id);	
		$data['form3'] = $this->db->query("SELECT * from tbl_school")->result();
		$data['info'] = $this->Instructor->infos($classid);

		$this->load->view('update/teacher/specific_final_grade',$data);
	}

	public function form5($classid){
		$data['students'] = $this->Instructor->specific_classes($classid);
		$data['infos']  = $this->Instructor->infos($classid);
		$data['form5'] = $this->db->query("SELECT * from tbl_school")->result();
		$this->load->view('form5',$data);	
	}

	public function form6($classid){
		$school_year =  $this->uri->segment(4);
		$data['school_year'] = $this->db->query("SELECT * from tbl_schoolyear where schoolyear_id = '$school_year'")->result();
		$data['students'] = $this->Instructor->specific_classes($classid);
		$data['seven'] = $this->Instructor->specific_classes($classid);
		$data['form6'] = $this->db->query("SELECT * from tbl_school")->result();
		$data['male_seven'] = $this->Instructor->male_promoted_seven($school_year);
		$data['female_seven'] = $this->Instructor->female_promoted_seven($school_year);
		$data['male_eight'] = $this->Instructor->male_promoted_eight($school_year);
		$data['female_eight'] = $this->Instructor->female_promoted_eight($school_year);
		$data['male_nine'] = $this->Instructor->male_promoted_nine($school_year);
		$data['female_nine'] = $this->Instructor->female_promoted_nine($school_year);
		$data['male_ten'] = $this->Instructor->male_promoted_ten($school_year);
		$data['female_ten'] = $this->Instructor->female_promoted_ten($school_year);
		$data['male_eleven'] = $this->Instructor->male_promoted_eleven($school_year);
		$data['female_eleven'] = $this->Instructor->female_promoted_eleven($school_year);
		$data['male_twelve'] = $this->Instructor->male_promoted_twelve($school_year);
		$data['female_twelve'] = $this->Instructor->female_promoted_twelve($school_year);
		
		$data['infos']  = $this->Instructor->infos($classid);
		$data['form5'] = $this->db->query("SELECT * from tbl_school")->result();

		
		$this->load->view('form6',$data);
	}

	public function create_something($classid){
		$section_id_s = $this->db->query("SELECT * from tbl_class where class_id = '$classid'")->result();
		$subj_id = $this->input->post('subj_id');
		$obj = $this->uri->segment(4);
	
	
			$concept = $_POST['grade'];
			if($obj =='quiz'){
				$data_quiz = array(
					'quiz_item' =>  $this->input->post('quiz_item'),
					'subj_id'	=> $subj_id,
					'quarter_id'=> $this->input->post('querter_id23'),
					'teacher_id'=> $this->session->userdata('user_id'),
					'section_id'=> $section_id_s[0]->section_id
				);
				$this->db->insert('tbl_quiz',$data_quiz);
				$id = $this->db->insert_id();
				$c = 0;
				$need = $_POST['user_id'] ;
				
				foreach($concept as $grades){
		
					$data = array(
						'user_id'	=> $need[$c],
						'quiz_id' 	=> $id,
						'quiz_score'=> $grades,
						
					);
					$this->db->insert('tbl_student_quiz',$data);
					$c++;
				}
			}
			else if($obj == 'assignment'){
				$data_quiz = array(
					'assignment_item' =>  $this->input->post('assignment_item'),
					'subj_id'	=> $subj_id,
					'quarter_id'=> $this->input->post('querter_id23'),
					'teacher_id'=> $this->session->userdata('user_id'),
					'section_id'=> $section_id_s[0]->section_id
				);
				$this->db->insert('tbl_assignment',$data_quiz);
				$id = $this->db->insert_id();
				$c = 0;
				$need = $_POST['user_id'] ;

				foreach($concept as $grades){
		
					$data = array(
						'user_id'	=> $need[$c],
						'assignment_id' 	=> $id,
						'assignment_score'=> $grades,
					
					);
					$this->db->insert('tbl_student_assignment',$data);
					$c++;
				}
			}else if($obj =='project'){
				$data_quiz = array(
					'project_item' =>  $this->input->post('project_item'),
					'subj_id'	=> $subj_id,
					'quarter_id'=> $this->input->post('querter_id23'),
					'teacher_id'=> $this->session->userdata('user_id'),
					'section_id'=> $section_id_s[0]->section_id
				);
				$this->db->insert('tbl_project',$data_quiz);
				$id = $this->db->insert_id();
				$c = 0;
				$need = $_POST['user_id'] ;

				foreach($concept as $grades){
		
					$data = array(
						'user_id'	=> $need[$c],
						'project_id' 	=> $id,
						'project_score'=> $grades,
					
					);
					$this->db->insert('tbl_student_project',$data);
					$c++;
				}
			}else if($obj == 'exam'){
				$data_quiz = array(
					'exam_item' =>  $this->input->post('exam_item'),
					'subj_id'	=> $subj_id,
					'quarter_id'=> $this->input->post('querter_id23'),
					'teacher_id'=> $this->session->userdata('user_id'),
					'section_id'=> $section_id_s[0]->section_id
				);
				$this->db->insert('tbl_exam',$data_quiz);
				$id = $this->db->insert_id();
				$c = 0;
				$need = $_POST['user_id'] ;

				foreach($concept as $grades){
		
					$data = array(
						'user_id'	=> $need[$c],
						'exam_id' 	=> $id,
						'exam_score'=> $grades,
					
					);
					$this->db->insert('tbl_student_exam',$data);
					$c++;
				}
			}else if($obj == 'recitation'){
				$data_quiz = array(
					'recitation_item' =>  $this->input->post('recitation_item'),
					'subj_id'	=> $subj_id,
					'quarter_id'=> $this->input->post('querter_id23'),
					'teacher_id'=> $this->session->userdata('user_id'),
					'section_id'=> $section_id_s[0]->section_id
				);
				$this->db->insert('tbl_recitation',$data_quiz);
				$id = $this->db->insert_id();
				$c = 0;
				$need = $_POST['user_id'] ;

				foreach($concept as $grades){
					
					$data = array(
						'user_id'	   => $need[$c],
						'recitation_id' 	=> $id,
						'recitation_score'=> $grades,	
					);
					$this->db->insert('tbl_student_recitation',$data);
					$c++;
				}
			}
			
		redirect('teacher_dashboard');
		}
		public function return_book($id,$third,$four,$five,$six){
			$data = array(
				'book_status' => 0,
				'date_return' => date('Y-m-d H:i:s')
			);
			$this->db->where('book_id',$id);
			$this->db->update('tbl_bookborrowed',$data);

			// $data2 = array('status'=>1);
			// $this->db->where('book_id',$id);
			// $this->db->update('tbl_book',$data2);
			redirect('teacher_dashboard/add_book/'.$third.'/'.$four.'/'.$five."/".$six);
		}
		public function form137(){
			$this->load->view('update/teacher/form137');
		}
		
		public function form9($id){
			$data['form9']  = $this->db->query("SELECT * from tbl_studentunderclass,tbl_student,tbl_class 
			where tbl_class.class_id = tbl_studentunderclass.class_id  AND  tbl_studentunderclass.class_id = '$id' 
			AND tbl_studentunderclass.studentid  = tbl_student.studentid")->result();
			$data['as'] = $this->db->query("SELECT * from tbl_school")->result();
			$this->load->view('update/teacher/form9',$data);
		}

		public function view_form137(){
			$this->load->view('template/latest/header');
			$this->load->view('update/teacher/view_form137');
			$this->load->view('template/latest/footer');
		}
}