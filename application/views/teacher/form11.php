<!DOCTYPE html>
<html>
<head id="dprint_container">
	<title>Form11</title>
	<link href="<?php echo base_url()?>/assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Icons -->
    <link href="<?php echo base_url()?>/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
		<link type="text/css" href="<?php echo base_url()?>/assets/css/argon.css?v=1.0.0" rel="stylesheet">
		<link type="text/css" href="<?php echo base_url()?>/assets/css/custom_css.css" rel="stylesheet">
		<script src="<?php echo base_url(); ?>assets/js/angular-1.6.4/angular.min.js"></script>
	  <script src="<?php echo base_url(); ?>assets/js/angularjs/main.js?"></script>

    <link rel="icon" type="image/png" href="<?php echo base_url()?>assets3/img/logo-transparent-sm.png">
<style>
body{
  margin:2% 3% ;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  border-radius: 100px;
  width: 100%
}

td, th {
  border: 1px solid #1e4f8e;
  text-align: justify;
  padding: 8px;
  color: black;

}

input{
    border: none;
    border-bottom: 1px solid black;
    text-align: center;
}
h2{
  color: black
}
tr:nth-child(even){
  background-color: #dddddd;
}
tr:nth-child(n):hover {
  background-color: lemonchiffon;
}
h2{
  color: black
}
</style>
	
</head>
<body>
	<div class="container-fluid" ng-app="starter" id="print_container">
		<div class="card my-3">
			<div>
				<h2 class="text-center">CLASS RECORD</h2>
			</div>
			<?php
			$quarter = $this->uri->segment(6);
			
			if(!$student){
		
			}else{
				$st = $student[0]->section_id; $section = $this->db->query("SELECT * from tbl_section where section_id = '$st'")->result();
				$tr = $student[0]->teacher_id; $teacher = $this->db->query("SELECT * from tbl_instructor where teacher_id = '$tr'")->result();
				$sb = $student[0]->subj_id; $subject = $this->db->query("SELECT * from tbl_subject where subj_id ='$sb'")->result();
			
			}
			?>
			<div class="card-body">
			<form action="<?php echo base_url()?>teacher_dashboard/submit_final_grade/" method="POST">
				<input style="color: white !important" type="submit" class="btn btn-primary btn-print">
				<a class="btn btn-info btn-print" href="<?php echo base_url()?>teacher_dashboard/trial/<?php echo $this->uri->segment(3)?>/<?php echo $this->uri->segment(4)?>/<?php echo $this->uri->segment(5)?>/1">First</a>
				<a class="btn btn-warning btn-print" href="<?php echo base_url()?>teacher_dashboard/trial/<?php echo $this->uri->segment(3)?>/<?php echo $this->uri->segment(4)?>/<?php echo $this->uri->segment(5)?>/2">Second</a>
				<a class="btn btn-success btn-print" href="<?php echo base_url()?>teacher_dashboard/trial/<?php echo $this->uri->segment(3)?>/<?php echo $this->uri->segment(4)?>/<?php echo $this->uri->segment(5)?>/3">Third</a>
				<a class="btn btn-light btn-print" href="<?php echo base_url()?>teacher_dashboard/trial/<?php echo $this->uri->segment(3)?>/<?php echo $this->uri->segment(4)?>/<?php echo $this->uri->segment(5)?>/4">Fourth</a>
				<br><br>
					<div class="row mt-3">
						<div class="col-md-3">
                    		<div class="input-group form-inline">
                    			<label  for="" class="form-control-label mr-2">School ID:</label>
                    			<input size="10"  value="<?php echo $school_info?$school_info[0]->school_id:null?>" type="text" name="">
                    		</div>
                    	</div>
                    	<div class="col-md-3">
                    		<div class="input-group form-inline">
                    			<label  for="" class="form-control-label mr-2">Region:</label>
                    			<input  size="10" value="<?php echo $school_info?$school_info[0]->region:null?>" type="text" name="">
                    		</div>
                    	</div>
                    	<div class="col-md-3">
                    		<div class="input-group form-inline">
                    			<label  for="" class="form-control-label mr-2">Division:</label>
                    			<input size="10" value="<?php echo $school_info?$school_info[0]->division:null?>" type="text" name="">
                    		</div>
                    	</div>
                    	<div class="col-md-3">
                    		<div class="input-group form-inline">
                    			<label  for="" class="form-control-label mr-2">District:</label>
                    			<input size="10" value="<?php echo $school_info?$school_info[0]->district:null?>" type="text" name="">
                    		</div>
                    	</div>
					</div>
					<div class="row mt-3">
						<div class="col-md-3">
                    		<div class="input-group form-inline">
                    			<label  for="" class="form-control-label mr-2">School Name:</label>
                    			<input  size="10" value="<?php echo $school_info?$school_info[0]->school_name:null?>" type="text" name="">
                    		</div>
                    	</div>
                    	<div class="col-md-3">
                    		<div class="input-group form-inline">
                    			<label  for="" class="form-control-label mr-2">School Year:</label>
                    			<input size="10" value="<?php echo $infos[0]->schoolyear_start?>" type="text" name="">
                    		</div>
                    	</div>
                    	<div class="col-md-3">
                    		<div class="input-group form-inline">
                    			<label  for="" class="form-control-label mr-2">Grade Level:</label>
                    			<input size="10" value="<?php echo $infos[0]->grade_level?>" type="text" name="">
                    		</div>
                    	</div>
                    	<div class="col-md-3">
                    		<div class="input-group form-inline">
                    			<label  for="" class="form-control-label mr-2">Section:</label>
                    			<input size="10" value="<?php echo $section[0]->section_name;?>" type="text" name="">
                    		</div>
                    	</div>
					</div>
					<div class="row mt-3">
						<div class="col-md-3">
                    		<div class="input-group form-inline">
                    			<label  for="" class="form-control-label mr-2">Grading Period:</label>
                    			<input size="10" value="<?php echo $quarter;?> Quarter" type="text" name="">
                    		</div>
                    	</div>
                    	<div class="col-md-3">
                    		<div class="input-group form-inline">
                    			<label  for="" class="form-control-label mr-2">Subject:</label>
                    			<input size="10"  value="<?php echo $subject[0]->subj_code?>" type="text" name="">
                    		</div>
                    	</div>
                    	<div class="col-md-3">
                    		<div class="input-group form-inline">
                    			<label  for="" class="form-control-label mr-2">Teacher:</label>
								<?php 
								$user_id =  $this->session->userdata('user_id');
								$teacher_info = $this->db->query("SELECT * from tbl_instructor where user_id = '$user_id'")->result();
								?>
                    			<input value="<?php echo $teacher_info[0]->firstname.' '.$teacher_info[0]->lastname?>"type="text" name="">
                    		</div>
                    	</div>	
					</div>
					<!-- table-start -->
					<?php foreach($student as $st) { ?>
					<?php
				

							$qt = $this->db->query(
								"SELECT  user_id,assignment_score from tbl_assignteacher,tbl_assignment,tbl_student_assignment,tbl_class
								WHERE tbl_assignteacher.subj_id = tbl_assignment.subj_id
										AND tbl_student_assignment.assignment_id = tbl_assignment.assignment_id
										AND tbl_assignteacher.teacher_id ='$st->assign_teacher'
										AND tbl_assignteacher.subj_id = '$st->subj_id'
										AND tbl_student_assignment.user_id = '$st->studentid'
										AND tbl_class.class_id = tbl_assignteacher.class_id
										AND tbl_class.class_id = '$class_id_sam'
										AND tbl_assignment.quarter_id ='$quarter'
									
								UNION ALL
								SELECT user_id,quiz_score from tbl_assignteacher,tbl_quiz,tbl_student_quiz,tbl_class
										WHERE tbl_assignteacher.subj_id = tbl_quiz.subj_id
												AND tbl_student_quiz.quiz_id = tbl_quiz.quiz_id
												AND tbl_assignteacher.teacher_id ='$st->assign_teacher'
												AND tbl_assignteacher.subj_id = '$st->subj_id'
												AND tbl_student_quiz.user_id = '$st->studentid'
												AND tbl_class.class_id = tbl_assignteacher.class_id
												AND tbl_class.class_id = '$class_id_sam'
												AND tbl_quiz.quarter_id ='$quarter'
										
								")->result();		
							
							$recitation_project = $this->db->query(
								"SELECT  user_id,project_score,project_item from tbl_assignteacher,tbl_project,tbl_student_project,tbl_class
								WHERE tbl_assignteacher.subj_id = tbl_project.subj_id
										AND tbl_student_project.project_id = tbl_project.project_id
										AND tbl_assignteacher.teacher_id ='$st->assign_teacher'
										AND tbl_assignteacher.subj_id = '$st->subj_id'
										AND tbl_student_project.user_id = '$st->studentid'
										AND tbl_class.class_id = tbl_assignteacher.class_id
										AND tbl_class.class_id = '$class_id_sam'
										AND tbl_project.quarter_id = '$quarter'
								UNION ALL
								SELECT user_id,recitation_score,recitation_item from tbl_assignteacher,tbl_recitation,tbl_student_recitation,tbl_class
										WHERE tbl_assignteacher.subj_id = tbl_recitation.subj_id
												AND tbl_student_recitation.recitation_id = tbl_recitation.recitation_id
												AND tbl_assignteacher.teacher_id ='$st->assign_teacher'
												AND tbl_assignteacher.subj_id = '$st->subj_id'
												AND tbl_student_recitation.user_id = '$st->studentid'
												AND tbl_class.class_id = tbl_assignteacher.class_id
										AND tbl_class.class_id = '$class_id_sam'
										AND tbl_recitation.quarter_id = '$quarter'
								")->result();
								$quarter_exam = $this->db->query(
									"SELECT  user_id,exam_score,exam_item from tbl_assignteacher,tbl_exam,tbl_student_exam,tbl_class
									WHERE tbl_assignteacher.subj_id = tbl_exam.subj_id
											AND tbl_student_exam.exam_id = tbl_exam.exam_id
											AND tbl_assignteacher.teacher_id ='$st->assign_teacher'
											AND tbl_assignteacher.subj_id = '$st->subj_id'
											AND tbl_student_exam.user_id = '$st->studentid'
											AND tbl_class.class_id = tbl_assignteacher.class_id
										AND tbl_class.class_id = '$class_id_sam'
										AND tbl_exam.quarter_id = '$quarter'
									")->result();
									$need = 0;
									$cout_written_work = 0; 
									$recitation_project_need = 0;
									$count_performance = 0;
									$need_exam = 0;
									$count_exam = 0;
									//var_dump($quarter_exam);
									foreach($quarter_exam as $key){
										$need = $need_exam + $key->exam_score;
										$count_exam++;
									}
									foreach($recitation_project as $key){
										$need = $recitation_project_need + $key->project_score;
										$count_performance++;	
									}
									foreach($qt as $key){
										$need = $need + $key->assignment_score;
										$cout_written_work++;
									}
								
									
					?>
					<?php }?>
					<br><br>
					<div >
						<div >
						<table>
						<thead >
							<tr >
								<th rowspan="3" colspan="10">Name of Students</th>
								<th colspan="<?php echo $cout_written_work+3?>" >Written Work</th>
								<th colspan="<?php echo $count_performance+3?>">Performance Task</th>
								<th colspan="<?php echo $count_exam+3?>">Quarterly Assessment</th>
								<th rowspan="3">Initial Grade</th>
								<th rowspan="3">Quarterly Grade</th>
							</tr>
							
							<tr>
								<?php foreach($qu as $key){ ?>
									<td colspan="<?php echo $cout_written_work+3?>"><?php echo $key->written?>%</td>
									<td colspan="<?php echo $count_performance+3?>"><?php echo $key->performance_task?>%</td>
									<td colspan="<?php echo $count_exam+3?>"><?php echo $key->quarterly_assessment?>%</td>
								<?php } ?>
							</tr>
							
							<tr>
								<?php foreach($student as $st) { ?>
								<?php
									$d = $this->session->userdata('user_id');
									$qq = $this->db->query("SELECT * from tbl_instructor where user_id = '$d'")->result();
									$teacher_id = $qq[0]->teacher_id;
									$qt = $this->db->query(
									"SELECT  user_id,assignment_score from tbl_assignteacher,tbl_assignment,tbl_student_assignment,tbl_class
									WHERE tbl_assignteacher.subj_id = tbl_assignment.subj_id
											AND tbl_student_assignment.assignment_id = tbl_assignment.assignment_id
											AND tbl_assignteacher.teacher_id ='$st->assign_teacher'
											AND tbl_assignteacher.subj_id = '$st->subj_id'
											AND tbl_student_assignment.user_id = '$st->studentid'
											AND tbl_class.class_id = tbl_assignteacher.class_id
											AND tbl_class.class_id = '$class_id_sam'
											AND tbl_assignment.quarter_id ='$quarter'
											
									UNION ALL
									SELECT user_id,quiz_score from tbl_assignteacher,tbl_quiz,tbl_student_quiz,tbl_class
											WHERE tbl_assignteacher.subj_id = tbl_quiz.subj_id
													AND tbl_student_quiz.quiz_id = tbl_quiz.quiz_id
													AND tbl_assignteacher.teacher_id ='$st->assign_teacher'
													AND tbl_assignteacher.subj_id = '$st->subj_id'
													AND tbl_student_quiz.user_id = '$st->studentid'
													AND tbl_class.class_id = tbl_assignteacher.class_id
													AND tbl_class.class_id = '$class_id_sam'
													AND tbl_quiz.quarter_id ='$quarter'
													
									")->result();		
									
								$recitation_project = $this->db->query(
									"SELECT  user_id,project_score,project_item from tbl_assignteacher,tbl_project,tbl_student_project,tbl_class
									WHERE tbl_assignteacher.subj_id = tbl_project.subj_id
											AND tbl_student_project.project_id = tbl_project.project_id
											AND tbl_assignteacher.teacher_id ='$st->assign_teacher'
											AND tbl_assignteacher.subj_id = '$st->subj_id'
											AND tbl_student_project.user_id = '$st->studentid'
											AND tbl_class.class_id = tbl_assignteacher.class_id
											AND tbl_class.class_id = '$class_id_sam'
											AND tbl_project.quarter_id = '$quarter'
									UNION ALL
									SELECT user_id,recitation_score,recitation_item from tbl_assignteacher,tbl_recitation,tbl_student_recitation,tbl_class
											WHERE tbl_assignteacher.subj_id = tbl_recitation.subj_id
													AND tbl_student_recitation.recitation_id = tbl_recitation.recitation_id
													AND tbl_assignteacher.teacher_id ='$st->assign_teacher'
													AND tbl_assignteacher.subj_id = '$st->subj_id'
													AND tbl_student_recitation.user_id = '$st->studentid'
													AND tbl_class.class_id = tbl_assignteacher.class_id
											AND tbl_class.class_id = '$class_id_sam'
											AND tbl_recitation.quarter_id = '$quarter'
									")->result();
									$quarter_exam = $this->db->query(
										"SELECT  user_id,exam_score,exam_item from tbl_assignteacher,tbl_exam,tbl_student_exam,tbl_class
										WHERE tbl_assignteacher.subj_id = tbl_exam.subj_id
												AND tbl_student_exam.exam_id = tbl_exam.exam_id
												AND tbl_assignteacher.teacher_id ='$st->assign_teacher'
												AND tbl_assignteacher.subj_id = '$st->subj_id'
												AND tbl_student_exam.user_id = '$st->studentid'
												AND tbl_class.class_id = tbl_assignteacher.class_id
											AND tbl_class.class_id = '$class_id_sam'
											AND tbl_exam.quarter_id = '$quarter'
										")->result();									
													$need = 0;
													$cout_written_work = 0; 
													$recitation_project_need = 0;
													$count_performance = 0;
													$need_exam = 0;
													$count_exam = 0;
													//var_dump($quarter_exam);
													foreach($quarter_exam as $key){
														$need = $need_exam + $key->exam_score;
														$count_exam++;
													}
													foreach($recitation_project as $key){
														$need = $recitation_project_need + $key->project_score;
														$count_performance++;
													}
													foreach($qt as $key){
														$need = $need + $key->assignment_score;
														$cout_written_work++;
														?>
													<?php }?>
							<?php } ?>
							<?php ($cout_written_work); for($id = 1;$id<= $cout_written_work;$id++) {	 ?>
								<td><?php echo $id;?></td>
							<?php } ?>
								<td style="background-color: lightskyblue !important">Total</td>
								<td style="background-color: aquamarine !important">PS</td>
								<td style="background-color: navajowhite !important">WS</td>
							<?php for($id = 1;$id<= $count_performance;$id++) {	 ?>
								<td><?php echo $id;?></td>
							<?php } ?>
								<td style="background-color: lightskyblue !important">Total</td>
								<td style="background-color: aquamarine !important">PS</td>
								<td style="background-color: navajowhite !important">WS</td>
							<?php for($id = 1;$id<= $count_exam;$id++) {	 ?>
								<td><?php echo $id;?></td>
								<?php } ?>
								<td style="background-color: lightskyblue !important">Total</td>
								<td style="background-color: aquamarine !important">PS</td>
								<td style="background-color: navajowhite !important">WS</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td colspan="3">Family Name</td>
								<td colspan="4" >First Name</td>
								<td colspan="3">Sex</td>
								<?php 
									$assign_teacher = $student[0]->assign_teacher;
									$subj_id 				= $student[0]->subj_id;
									$studentid			= $student[0]->studentid;
									$qt = $this->db->query(
										"SELECT  user_id,assignment_score,assignment_item from tbl_assignteacher,tbl_assignment,tbl_student_assignment,tbl_class
										WHERE tbl_assignteacher.subj_id = tbl_assignment.subj_id
												AND tbl_student_assignment.assignment_id = tbl_assignment.assignment_id
												AND tbl_assignteacher.teacher_id ='$assign_teacher'
												AND tbl_assignteacher.subj_id 	 = '$subj_id'
												AND tbl_student_assignment.user_id = '$studentid'
												AND tbl_class.class_id = tbl_assignteacher.class_id
											AND tbl_class.class_id = '$class_id_sam'
											AND tbl_assignment.quarter_id ='$quarter'
										UNION ALL
										SELECT user_id,quiz_score,quiz_item from tbl_assignteacher,tbl_quiz,tbl_student_quiz,tbl_class
												WHERE tbl_assignteacher.subj_id = tbl_quiz.subj_id
														AND tbl_student_quiz.quiz_id = tbl_quiz.quiz_id
														AND tbl_assignteacher.teacher_id ='$assign_teacher'
														AND tbl_assignteacher.subj_id = '$subj_id'
														AND tbl_student_quiz.user_id = '$studentid'
														AND tbl_class.class_id = tbl_assignteacher.class_id
											AND tbl_class.class_id = '$class_id_sam'
											AND tbl_quiz.quarter_id ='$quarter'
										")->result();	
									
									$recitation_project = $this->db->query(
										"SELECT  user_id,project_score,project_item from tbl_assignteacher,tbl_project,tbl_student_project,tbl_class
										WHERE tbl_assignteacher.subj_id = tbl_project.subj_id
												AND tbl_student_project.project_id = tbl_project.project_id
												AND tbl_assignteacher.teacher_id ='$assign_teacher'
												AND tbl_assignteacher.subj_id = '$subj_id'
												AND tbl_student_project.user_id = '$studentid'
												AND tbl_class.class_id = tbl_assignteacher.class_id
											AND tbl_class.class_id = '$class_id_sam'
											AND tbl_project.quarter_id = '$quarter'
										UNION ALL
										SELECT user_id,recitation_score,recitation_item from tbl_assignteacher,tbl_recitation,tbl_student_recitation,tbl_class
												WHERE tbl_assignteacher.subj_id = tbl_recitation.subj_id
														AND tbl_student_recitation.recitation_id = tbl_recitation.recitation_id
														AND tbl_assignteacher.teacher_id ='$assign_teacher'
														AND tbl_assignteacher.subj_id = '$subj_id'
														AND tbl_student_recitation.user_id = '$studentid'
														AND tbl_class.class_id = tbl_assignteacher.class_id
											AND tbl_class.class_id = '$class_id_sam'
											AND tbl_recitation.quarter_id = '$quarter'
										")->result();
									$quarter_exam = $this->db->query(
										"SELECT  user_id,exam_score,exam_item from tbl_assignteacher,tbl_exam,tbl_student_exam,tbl_class
										WHERE tbl_assignteacher.subj_id = tbl_exam.subj_id
												AND tbl_student_exam.exam_id = tbl_exam.exam_id
												AND tbl_assignteacher.teacher_id ='$assign_teacher'
												AND tbl_assignteacher.subj_id = '$subj_id'
												AND tbl_student_exam.user_id = '$studentid'
												AND tbl_class.class_id = tbl_assignteacher.class_id
											AND tbl_class.class_id = '$class_id_sam'
											AND tbl_exam.quarter_id = '$quarter'
										")->result();
									
											$need = 0;
											$cout_written_work_total = 0; 
											$recitation_project_need = 0;
											$count_performance = 0;
											$need_exam = 0;
											$count_exam = 0;
											foreach($qt as $key){
								?>
								
								<td ><?php echo $key->assignment_item;
									$need = $need + $key->assignment_item;
									$cout_written_work_total++;
								?></td>
											<?php }?>
								<td style="background-color: lightskyblue !important"><?php echo $need;?></td>
								<td style="background-color: 	aquamarine !important">100</td>
								<td style="background-color: navajowhite !important"><?php echo $qu[0]->written?> </td>
								<?php foreach($recitation_project as $rp){?>
									<td><?php echo $rp->project_item;
									$recitation_project_need = $recitation_project_need + $rp->project_item;
									$count_performance++;
								?></td>
								<?php }?>
								<td style="background-color: lightskyblue !important"><?php echo $recitation_project_need;?></td>
								<td style="background-color: aquamarine !important">100</td>
								<td style="background-color: navajowhite !important"><?php echo $qu[0]->performance_task?></td>
								<?php foreach($quarter_exam as $qe){?>
									<td><?php echo $qe->exam_item;
									$need_exam = $need_exam + $qe->exam_item;
									$count_exam++;
								?></td>
								<?php }?>
								<td style="background-color: lightskyblue !important"><?php echo $need_exam?></td>
								<td style="background-color: aquamarine !important">100</td>
								<td style="background-color: navajowhite !important"><?php echo $qu[0]->quarterly_assessment?></td>
								<td >100</td>
								<td >100</td>
							</tr>
							<?php foreach($student as $st) { ?>
							<tr>
								
								<td colspan="3"><?php echo $st->lastname?></td>
								<td colspan="4" ><?php echo $st->firstname?></td>
								<td colspan="3"><?php echo $st->gender?></td>
								
								<?php
									$d = $this->session->userdata('user_id');
									$qq = $this->db->query("SELECT * from tbl_instructor where user_id = '$d'")->result();
									$teacher_id = $qq[0]->teacher_id;
									$assignment_quiz = $this->db->query(
									"SELECT  user_id,assignment_score,assignment_item from tbl_assignteacher,tbl_assignment,tbl_student_assignment,tbl_class
									WHERE tbl_assignteacher.subj_id = tbl_assignment.subj_id
											AND tbl_student_assignment.assignment_id = tbl_assignment.assignment_id
											AND tbl_assignteacher.teacher_id ='$st->assign_teacher'
											AND tbl_assignteacher.subj_id = '$st->subj_id'
											AND tbl_student_assignment.user_id = '$st->studentid'
											AND tbl_class.class_id = tbl_assignteacher.class_id
											AND tbl_class.class_id = '$class_id_sam'
											AND tbl_assignment.quarter_id ='$quarter'
									UNION ALL
									SELECT user_id,quiz_score,quiz_item from tbl_assignteacher,tbl_quiz,tbl_student_quiz,tbl_class
											WHERE tbl_assignteacher.subj_id = tbl_quiz.subj_id
													AND tbl_student_quiz.quiz_id = tbl_quiz.quiz_id
													AND tbl_assignteacher.teacher_id ='$st->assign_teacher'
													AND tbl_assignteacher.subj_id = '$st->subj_id'
													AND tbl_student_quiz.user_id = '$st->studentid'
													AND tbl_class.class_id = tbl_assignteacher.class_id
											AND tbl_class.class_id = '$class_id_sam'
											AND tbl_quiz.quarter_id ='$quarter'
									")->result();
									$recitation_project = $this->db->query(
										"SELECT  user_id,project_score,project_item from tbl_assignteacher,tbl_project,tbl_student_project,tbl_class
										WHERE tbl_assignteacher.subj_id = tbl_project.subj_id
												AND tbl_student_project.project_id = tbl_project.project_id
												AND tbl_assignteacher.teacher_id ='$st->assign_teacher'
												AND tbl_assignteacher.subj_id = '$st->subj_id'
												AND tbl_student_project.user_id = '$st->studentid'
												AND tbl_class.class_id = tbl_assignteacher.class_id
											AND tbl_class.class_id = '$class_id_sam'
											AND tbl_project.quarter_id = '$quarter'
										UNION ALL
										SELECT user_id,recitation_score,recitation_item from tbl_assignteacher,tbl_recitation,tbl_student_recitation,tbl_class
												WHERE tbl_assignteacher.subj_id = tbl_recitation.subj_id
														AND tbl_student_recitation.recitation_id = tbl_recitation.recitation_id
														AND tbl_assignteacher.teacher_id ='$st->assign_teacher'
														AND tbl_assignteacher.subj_id = '$st->subj_id'
														AND tbl_student_recitation.user_id = '$st->studentid'
														AND tbl_class.class_id = tbl_assignteacher.class_id
											AND tbl_class.class_id = '$class_id_sam'
											AND tbl_recitation.quarter_id = '$quarter'
										")->result();
									$quarter_exam = $this->db->query(
										"SELECT  user_id,exam_score,exam_item from tbl_assignteacher,tbl_exam,tbl_student_exam,tbl_class
										WHERE tbl_assignteacher.subj_id = tbl_exam.subj_id
												AND tbl_student_exam.exam_id = tbl_exam.exam_id
												AND tbl_assignteacher.teacher_id ='$st->assign_teacher'
												AND tbl_assignteacher.subj_id = '$st->subj_id'
												AND tbl_student_exam.user_id = '$st->studentid'
												AND tbl_class.class_id = tbl_assignteacher.class_id
											AND tbl_class.class_id = '$class_id_sam'
											AND tbl_exam.quarter_id = '$quarter'
										")->result();

													
													$need = 0;
													$cout_written_work_total = 0;
													$cout_written_work = 0;
													
													foreach($assignment_quiz as $key){
								?>
								<td >
									<?php echo $key->assignment_score;
									$need = $need + $key->assignment_score;
									$cout_written_work_total = $cout_written_work_total + $key->assignment_item;
									$cout_written_work++;
								?></td>
													<?php  } ?>
								<td style="background-color: lightskyblue !important"><?php echo $need?></td>
								<td style="background-color: aquamarine !important"><?php  
									if($cout_written_work_total){
										$total_AQ = $need / $cout_written_work_total * 100;  
										$total = number_format((float)$total_AQ, 2, '.', ''); echo $total?$total:null; 
									}else{
										$total_AQ = 0;
										$total = 0;
									}
									?>
								</td>
								<td style="background-color: navajowhite !important"><?php  $nii = $qu[0]->written / 100	 ;$nee =	$total * $nii; echo $total_need_quiz = number_format((float)$nee, 2, '.', '');?></td>
								
										<?php $pro_score = 0;
													$pro_score_task_total = 0;
													$pro_score_task = 0;
												foreach($recitation_project as $rp){ ?>
											<td>
												<?php echo $rp->project_score;
												$pro_score = $pro_score + $rp->project_score;
												$pro_score_task_total = $pro_score_task_total + $rp->project_item;
												$pro_score_task++;
											?></td>
										<?php }	?>
										<td style="background-color: lightskyblue !important"><?php echo $pro_score?> </td>
								<td style="background-color: aquamarine !important"><?php 
									if($pro_score_task_total){
										$total_PS = $pro_score / $pro_score_task_total * 100; 
										echo $total = number_format((float)$total_PS, 2, '.', '');
									}else{
										$total =0;
										$total_PS;
									}
								?> </td>
								<td style="background-color: navajowhite !important"><?php  $nii = $qu[0]->performance_task / 100	 ;$nee =	$total * $nii; echo $total_need_project = number_format((float)$nee, 2, '.', '');?></td>
								<?php 	
									$exam_s = 0;
									$need_exam = 0;
									$count_exam = 0;
								foreach($quarter_exam as $qe){ ?>
									<td>
												<?php echo $qe->exam_score;
												$exam_s = $exam_s + $qe->exam_score;
											
												$need_exam = $need_exam + $qe->exam_item;
												$count_exam++; 
											?></td>
								<?php }?>		
								<td style="background-color: lightskyblue !important"><?php echo $exam_s ;?> </td>
								<td style="background-color: aquamarine !important"><?php 
									if($need_exam){
										$total_PS = $exam_s / $need_exam * 100; 
										echo $total = number_format((float)$total_PS, 2, '.', '');
									}else{
										$total_PS = 0;
										$total = 0;
									}
								?> </td>
								<td style="background-color: navajowhite !important"><?php  $nii = $qu[0]->quarterly_assessment / 100	 ;$nee =	$total * $nii; echo $total_need_exam = number_format((float)$nee, 2, '.', '');?></td>				
								<td ><?php echo $final_total =  $total_need_exam + $total_need_project + $total_need_quiz  ?></td>
								<td >
								
							<?php	switch ($final_total) { // malihog kog edit gaw or tiwas gaw
							case $final_total == 100:
							$last = "100"; // last = last_count
							break;
							case $final_total >= 98.40 && $final_total <= 99.99:
							$last = "99"; // last = last_count
							break;
							case $final_total >= 96.80 && $final_total <= 98.39:
							$last = "98"; // last = last_count
							break;
							case $final_total >= 95.20 && $final_total <= 96.79:
							$last = "97"; // last = last_count
							break;
							case $final_total >= 93.60 && $final_total <= 95.19:
							$last = "96"; // last = last_count
							break;
							case $final_total >= 92.00 && $final_total <= 93.59:
							$last = "95"; // last = last_count
							break;
							case $final_total >= 90.40 && $final_total <= 91.99:
							$last = "94"; // last = last_count
							break;
							case $final_total >= 88.80 && $final_total <= 90.39:
							$last = "93"; // last = last_count
							break;
							case $final_total >= 87.20 && $final_total <= 88.79:
							$last = "92"; // last = last_count
							break;
							case $final_total >= 85.60 && $final_total <= 87.19:
							$last = "91"; // last = last_count
							break;
							case $final_total >= 84.00 && $final_total <= 85.59:
							$last = "90"; // last = last_count
							break;
							case $final_total >= 82.40 && $final_total <= 83.99:
							$last = "89"; // last = last_count
							break;
							case $final_total >= 80.80 && $final_total <= 82.39:
							$last = "88"; // last = last_count
							break;
							case $final_total >= 79.20 && $final_total <= 80.79:
							$last = "87"; // last = last_count
							break;
							case $final_total >= 77.60 && $final_total <= 79.19:
							$last = "86"; // last = last_count
							break;
							case $final_total >= 76.00 && $final_total <= 77.59:
							$last = "85"; // last = last_count
							break;
							case $final_total >= 74.40 && $final_total <= 75.99:
							$last = "84"; // last = last_count
							break;
							case $final_total >= 72.80 && $final_total <= 74.39:
							$last = "83"; // last = last_count
							break;
							case $final_total >= 71.20 && $final_total <= 72.79:
							$last = "82"; // last = last_count
							break;
							case $final_total >= 69.60 && $final_total <= 71.19:
							$last = "81"; // last = last_count
							break;
							case $final_total >= 68.00 && $final_total <= 69.59:
							$last = "80"; // last = last_count
							break;
							case $final_total >= 66.40 && $final_total <= 67.99:
							$last = "79"; // last = last_count
							break;
							case $final_total >= 64.80 && $final_total <= 66.39:
							$last = "78"; // last = last_count
							break;
							case $final_total >= 63.20 && $final_total <= 64.79:
							$last = "77"; // last = last_count
							break;
							case $final_total >= 61.60 && $final_total <= 63.19:
							$last = "76"; // last = last_count
							break;
							case $final_total >= 60.00 && $final_total <= 61.59:
							$last = "75"; // last = last_count
							break;
							case $final_total >= 56.00 && $final_total <= 59.99:
							$last = "74"; // last = last_count
							break;
							case $final_total >= 52.00 && $final_total <= 55.99:
							$last = "73"; // last = last_count
							break;
							case $final_total >= 48.00 && $final_total <= 51.99:
							$last = "72"; // last = last_count
							break;
							case $final_total >= 44.00 && $final_total <= 47.99:
							$last = "71"; // last = last_count
							break;
							case $final_total >= 40.00 && $final_total <= 43.99:
							$last = "70"; // last = last_count
							break;
							case $final_total >= 36.00 && $final_total <= 39.99:
							$last = "69"; // last = last_count
							break;
							case $final_total >= 32.00 && $final_total <= 35.99:
							$last = "68"; // last = last_count
							break;
							case $final_total >= 28.00 && $final_total <= 31.99:
							$last = "67"; // last = last_count
							break;
							case $final_total >= 24.00 && $final_total <= 27.99:
							$last = "66"; // last = last_count
							break;
							case $final_total >= 20.00 && $final_total <= 23.99:
							$last = "65"; // last = last_count
							break;
							case $final_total >= 16.00 && $final_total <= 19.99:
							$last = "64"; // last = last_count
							break;
							case $final_total >= 12.00 && $final_total <= 15.99:
							$last = "63"; // last = last_count
							break;
							case $final_total >= 8.00 && $final_total <= 11.99:
							$last = "62"; // last = last_count
							break;
							case $final_total >= 4.00 && $final_total <= 7.99:
							$last = "61"; // last = last_count
							break;
							case $final_total >= 0 && $final_total <= 3.99:
							$last = "60"; // last = last_count
							break;
									default:
									$last = "ff";
					} ?>
								<?php echo $last;?>	
								<input type="hidden" name="quarter" value="<?php echo $this->uri->segment(6)?>">
								<input type="hidden" name="section_id" value="<?php echo $section[0]->section_id;?>">
								<input type="hidden" name="subj_id_id" value="<?php echo $subject[0]->subj_id?>">
								<input type="hidden" name="studentid[]" value="<?php echo $st->studentid;?>">
								<input type="hidden" name="finalgrade[]" value="<?php echo $last;?>">
								<input type="hidden" name="schoolyear_id" value="<?php echo $infos[0]->schoolyear_id?>">
								</td>
							<?php }?>
							</tbody>
						</table>	
					</div>
					</div>

					<!-- table-end -->
					</form>
					<!-- remarks start -->
					<br><br>
					<div class="row">
      <div class="col-md-4">
          <div class="row">
              <div class="col-md-4">
                   <label class="form-control-sm" for="" class="form-control-label mr-2">Prepared by:</label>
              </div>
              <div class="col-md-4">
                  <input   type="text" name="" size="20"  >
              </div>
          </div>
      </div>
      <div class="col-md-4">
          <div class="row">
              <div class="col-md-4">
                   <label class="form-control-sm" for="" class="form-control-label mr-2">Certified Correct and Submitted:</label>
              </div>
              <div class="col-md-4">
                  <input type="text" name="" size="20">
              </div>
          </div>
      </div>
      <div class="col-md-4">
          <div class="row">
              <div class="col-md-4">
                   <label class="form-control-sm" for="" class="form-control-label mr-2">Reviewed by:</label>
              </div>
              <div class="col-md-4">
                  <input type="text" name="" size="20">
              </div>
          </div>
      </div> 
    </div> 
      <br><br>
                <button id="print_data" class="btn btn-success btn-print btn-rounded"
                           onClick = "this.style.visibility= 'hidden';">
                  <i class="fas fa-print"></i>
                </button>   
    <br><br><br><br><br>

</div>

<script>
      function printData() {
        var printContents = document.getElementById("print_container")
          .innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML =
          "<html><head><title></title></head><body>" +
          printContents +
          "</body>";
        window.print();
        document.body.innerHTML = originalContents;
        location.reload();
      }

      document
        .getElementById("print_data")
        .addEventListener("click", function(e) {
          e.preventDefault();
          printData();
        });
</script>

</body>
</html>