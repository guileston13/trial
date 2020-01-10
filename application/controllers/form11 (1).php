<!DOCTYPE html>
<html>
<head>
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
	
</head>
<body>
	<div class="container-fluid" ng-app="starter">
		<div class="card my-3">
			<div class="card-title pt-2">
				  <h1 class="text-center">CLASS RECORD</h1>
			</div>
			<?php
				
			$st = $student[0]->section_id; $section = $this->db->query("SELECT * from tbl_section where section_id = '$st'")->result();
			$tr = $student[0]->teacher_id; $teacher = $this->db->query("SELECT * from tbl_instructor where teacher_id = '$tr'")->result();
			$sb = $student[0]->subj_id; $subject = $this->db->query("SELECT * from tbl_subject where subj_id ='$sb'")->result();
		
			?>
			
			<div class="card-body">
					<table class="table table-record">
						<thead>
							<tr>
								<th class="text-right">School ID</th>
								<th><input class="form-control form-control-sm" value="Carmen National High School" type="text" name=""></th>
								<th class="text-right">Region</th>
								<th><input class="form-control form-control-sm" value="X" type="text" name=""></th>
								<th class="text-right">Division</th>
								<th><input class="form-control form-control-sm" value="Cagayan de Oro City Division" type="text" name=""></th>
								<th class="text-right">District</th>
								<th><input class="form-control form-control-sm" value="Misamis Oriental" type="text" name=""></th>
							</tr>
							<tr>
								<th class="text-right">School Name</th>
								<th><input class="form-control form-control-sm" type="text" value="Carmen National High School" name=""></th>
								<th class="text-right">School Year</th>
								<th><input class="form-control form-control-sm" type="text" value="2016-2017" name=""></th>
								<th class="text-right">Grade Level</th>
								<th><input class="form-control form-control-sm" type="text" value="Grade 11" name=""></th>
								<th class="text-right">Section</th>
								<th><input class="form-control form-control-sm" type="text" value="<?php echo $section[0]->section_name;?>" name=""></th>
							</tr>
						</thead>
					</table>

					<table class="table table-record mt-3">
						<thead>
							<tr>
								<th class="text-right">Grading Period</th>
								<th><input class="form-control form-control-sm" value="1" type="text" name=""></th>
								<th class="text-right">Subject</th>
								<th><input class="form-control form-control-sm" type="text" value="<?php echo $subject[0]->subj_code?>" name=""></th>
								<th class="text-right">Teacher</th>
								<th><input class="form-control form-control-sm" type="text" value="<?php echo $teacher[0]->firstname.' '.$teacher[0]->lastname?>"></th>
							</tr>
						</thead>
					</table>

					<!-- table-start -->

					<div class="row my-5">
						<div class="col table-data">
						<table class="table table-bordered" ng-controller="alertCtrl">
						<thead class="text-center">
							<tr>
								<th rowspan="3" colspan="10">Name of The Students</th>
								<th colspan="10" >Written Work</th>
								<th colspan="5">Performance Task</th>
								<th colspan="4">Quarterly Assessment</th>
								<th rowspan="3">Initial Grade</th>
								<th rowspan="3">Quarterly Grade</th>
								<th rowspan="4" colspan="4" >Description</th>
							</tr>
							
							<tr>
								<?php foreach($qu as $key){ ?>
									<td colspan="10"><?php echo $key->written?>%</td>
									<td colspan="5"><?php echo $key->performance_task?>%</td>
									<td colspan="4"><?php echo $key->quarterly_assessment?>%</td>
								<?php } ?>
							</tr>
							
							<tr>
								<?php foreach($student as $st) { ?>
								<?php
									$d = $this->session->userdata('user_id');
									$qq = $this->db->query("SELECT * from tbl_instructor where user_id = '$d'")->result();
									$teacher_id = $qq[0]->teacher_id;
									$qt = $this->db->query(
									"SELECT  user_id,assignment_score from tbl_assignteacher,tbl_assignment,tbl_student_assignment
									WHERE tbl_assignteacher.subj_id = tbl_assignment.subj_id
											AND tbl_student_assignment.assignment_id = tbl_assignment.assignment_id
											AND tbl_assignteacher.teacher_id ='$st->assign_teacher'
											AND tbl_assignteacher.subj_id = '$st->subj_id'
											AND tbl_student_assignment.user_id = '$st->studentid'
									UNION ALL
									SELECT user_id,quiz_score from tbl_assignteacher,tbl_quiz,tbl_student_quiz
											WHERE tbl_assignteacher.subj_id = tbl_quiz.subj_id
													AND tbl_student_quiz.quiz_id = tbl_quiz.quiz_id
													AND tbl_assignteacher.teacher_id ='$st->assign_teacher'
													AND tbl_assignteacher.subj_id = '$st->subj_id'
													AND tbl_student_quiz.user_id = '$st->studentid'
									")->result();		
								$recitation_project = $this->db->query(
									"SELECT  user_id,project_score,project_item from tbl_assignteacher,tbl_project,tbl_student_project
									WHERE tbl_assignteacher.subj_id = tbl_project.subj_id
											AND tbl_student_project.project_id = tbl_project.project_id
											AND tbl_assignteacher.teacher_id ='$st->assign_teacher'
											AND tbl_assignteacher.subj_id = '$st->subj_id'
											AND tbl_student_project.user_id = '$st->studentid'
									UNION ALL
									SELECT user_id,recitation_score,recitation_item from tbl_assignteacher,tbl_recitation,tbl_student_recitation
											WHERE tbl_assignteacher.subj_id = tbl_recitation.subj_id
													AND tbl_student_recitation.recitation_id = tbl_recitation.recitation_id
													AND tbl_assignteacher.teacher_id ='$st->assign_teacher'
													AND tbl_assignteacher.subj_id = '$st->subj_id'
													AND tbl_student_recitation.user_id = '$st->studentid'
									")->result();
									$quarter_exam = $this->db->query(
										"SELECT  user_id,exam_score,exam_item from tbl_assignteacher,tbl_exam,tbl_student_exam
										WHERE tbl_assignteacher.subj_id = tbl_exam.subj_id
												AND tbl_student_exam.exam_id = tbl_exam.exam_id
												AND tbl_assignteacher.teacher_id ='$st->assign_teacher'
												AND tbl_assignteacher.subj_id = '$st->subj_id'
												AND tbl_student_exam.user_id = '$st->studentid'
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
							<?php for($id = 1;$id<= $cout_written_work;$id++) {	 ?>
								<td><?php echo $id;?></td>
							<?php } ?>
								<td>Total</td>
								<td>PS</td>
								<td>WS</td>
							<?php for($id = 1;$id<= $count_performance;$id++) {	 ?>
								<td><?php echo $id;?></td>
							<?php } ?>
								<td>Total</td>
								<td>PS</td>
								<td>WS</td>
							<?php for($id = 1;$id<= $count_exam;$id++) {	 ?>
								<td><?php echo $id;?></td>
							<?php } ?>
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
										"SELECT  user_id,assignment_score,assignment_item from tbl_assignteacher,tbl_assignment,tbl_student_assignment
										WHERE tbl_assignteacher.subj_id = tbl_assignment.subj_id
												AND tbl_student_assignment.assignment_id = tbl_assignment.assignment_id
												AND tbl_assignteacher.teacher_id ='$assign_teacher'
												AND tbl_assignteacher.subj_id 	 = '$subj_id'
												AND tbl_student_assignment.user_id = '$studentid'
										UNION ALL
										SELECT user_id,quiz_score,quiz_item from tbl_assignteacher,tbl_quiz,tbl_student_quiz
												WHERE tbl_assignteacher.subj_id = tbl_quiz.subj_id
														AND tbl_student_quiz.quiz_id = tbl_quiz.quiz_id
														AND tbl_assignteacher.teacher_id ='$assign_teacher'
														AND tbl_assignteacher.subj_id = '$subj_id'
														AND tbl_student_quiz.user_id = '$studentid'
										")->result();	
									$recitation_project = $this->db->query(
										"SELECT  user_id,project_score,project_item from tbl_assignteacher,tbl_project,tbl_student_project
										WHERE tbl_assignteacher.subj_id = tbl_project.subj_id
												AND tbl_student_project.project_id = tbl_project.project_id
												AND tbl_assignteacher.teacher_id ='$assign_teacher'
												AND tbl_assignteacher.subj_id = '$subj_id'
												AND tbl_student_project.user_id = '$studentid'
										UNION ALL
										SELECT user_id,recitation_score,recitation_item from tbl_assignteacher,tbl_recitation,tbl_student_recitation
												WHERE tbl_assignteacher.subj_id = tbl_recitation.subj_id
														AND tbl_student_recitation.recitation_id = tbl_recitation.recitation_id
														AND tbl_assignteacher.teacher_id ='$assign_teacher'
														AND tbl_assignteacher.subj_id = '$subj_id'
														AND tbl_student_recitation.user_id = '$studentid'
										")->result();
									$quarter_exam = $this->db->query(
										"SELECT  user_id,exam_score,exam_item from tbl_assignteacher,tbl_exam,tbl_student_exam
										WHERE tbl_assignteacher.subj_id = tbl_exam.subj_id
												AND tbl_student_exam.exam_id = tbl_exam.exam_id
												AND tbl_assignteacher.teacher_id ='$assign_teacher'
												AND tbl_assignteacher.subj_id = '$subj_id'
												AND tbl_student_exam.user_id = '$studentid'
										")->result();
									
											$need = 0;
											$cout_written_work_total = 0; 
											$recitation_project_need = 0;
											$count_performance = 0;
											$need_exam = 0;
											$count_exam = 0;
											foreach($qt as $key){
								?>
								<td><?php echo $key->assignment_item;
									$need = $need + $key->assignment_item;
									$cout_written_work_total++;
								?></td>
											<?php }?>
								<td><?php echo $need;?></td>
								<td>100</td>
								<td>20</td>
								<?php foreach($recitation_project as $rp){?>
									<td><?php echo $rp->project_item;
									$recitation_project_need = $recitation_project_need + $rp->project_item;
									$count_performance++;
								?></td>
								<?php }?>
								<td><?php echo $recitation_project_need;?></td>
								<td>100</td>
								<td><?php echo $qu[0]->performance_task?></td>
								<?php foreach($quarter_exam as $qe){?>
									<td><?php echo $qe->exam_item;
									$need_exam = $need_exam + $qe->exam_item;
									$count_exam++;
								?></td>
								<?php }?>
								<td><?php echo $need_exam?></td>
								<td>100</td>
								<td><?php echo $qu[0]->quarterly_assessment?></td>
								<td>100</td>
							</tr>
							<?php foreach($student as $st) { ?>
							<tr>
								
								<td colspan="3"><?php echo $st->lastname?></td>
								<td colspan="4" ><?php echo $st->firstname?></td>
								<td colspan="3">M</td>
								
								<?php
									$d = $this->session->userdata('user_id');
									$qq = $this->db->query("SELECT * from tbl_instructor where user_id = '$d'")->result();
									$teacher_id = $qq[0]->teacher_id;
									$assignment_quiz = $this->db->query(
									"SELECT  user_id,assignment_score,assignment_item from tbl_assignteacher,tbl_assignment,tbl_student_assignment
									WHERE tbl_assignteacher.subj_id = tbl_assignment.subj_id
											AND tbl_student_assignment.assignment_id = tbl_assignment.assignment_id
											AND tbl_assignteacher.teacher_id ='$st->assign_teacher'
											AND tbl_assignteacher.subj_id = '$st->subj_id'
											AND tbl_student_assignment.user_id = '$st->studentid'
									UNION ALL
									SELECT user_id,quiz_score,quiz_item from tbl_assignteacher,tbl_quiz,tbl_student_quiz
											WHERE tbl_assignteacher.subj_id = tbl_quiz.subj_id
													AND tbl_student_quiz.quiz_id = tbl_quiz.quiz_id
													AND tbl_assignteacher.teacher_id ='$st->assign_teacher'
													AND tbl_assignteacher.subj_id = '$st->subj_id'
													AND tbl_student_quiz.user_id = '$st->studentid'
									")->result();
									$recitation_project = $this->db->query(
										"SELECT  user_id,project_score,project_item from tbl_assignteacher,tbl_project,tbl_student_project
										WHERE tbl_assignteacher.subj_id = tbl_project.subj_id
												AND tbl_student_project.project_id = tbl_project.project_id
												AND tbl_assignteacher.teacher_id ='$st->assign_teacher'
												AND tbl_assignteacher.subj_id = '$st->subj_id'
												AND tbl_student_project.user_id = '$st->studentid'
										UNION ALL
										SELECT user_id,recitation_score,recitation_item from tbl_assignteacher,tbl_recitation,tbl_student_recitation
												WHERE tbl_assignteacher.subj_id = tbl_recitation.subj_id
														AND tbl_student_recitation.recitation_id = tbl_recitation.recitation_id
														AND tbl_assignteacher.teacher_id ='$st->assign_teacher'
														AND tbl_assignteacher.subj_id = '$st->subj_id'
														AND tbl_student_recitation.user_id = '$st->studentid'
										")->result();
									$quarter_exam = $this->db->query(
										"SELECT  user_id,exam_score,exam_item from tbl_assignteacher,tbl_exam,tbl_student_exam
										WHERE tbl_assignteacher.subj_id = tbl_exam.subj_id
												AND tbl_student_exam.exam_id = tbl_exam.exam_id
												AND tbl_assignteacher.teacher_id ='$st->assign_teacher'
												AND tbl_assignteacher.subj_id = '$st->subj_id'
												AND tbl_student_exam.user_id = '$st->studentid'
										")->result();

													
													$need = 0;
													$cout_written_work_total = 0;
													$cout_written_work = 0;
													
													foreach($assignment_quiz as $key){
								?>
								<td>
									<?php echo $key->assignment_score;
									$need = $need + $key->assignment_score;
									$cout_written_work_total = $cout_written_work_total + $key->assignment_item;
									$cout_written_work++;
								?></td>
													<?php  } ?>
								<td><?php echo $need?> </td>
								<td><?php  $total_AQ = $need / $cout_written_work_total * 100; echo $total = number_format((float)$total_AQ, 2, '.', '');?> </td>
								<td><?php  $nii = $qu[0]->written / 100	 ;$nee =	$total * $nii; echo $total_need_quiz = number_format((float)$nee, 2, '.', '');?></td>
								
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
										<td><?php echo $pro_score?> </td>
								<td><?php  $total_PS = $pro_score / $pro_score_task_total * 100; echo $total = number_format((float)$total_PS, 2, '.', '');?> </td>
								<td><?php  $nii = $qu[0]->performance_task / 100	 ;$nee =	$total * $nii; echo $total_need_project = number_format((float)$nee, 2, '.', '');?></td>
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
								<td><?php echo $need_exam?></td>
								<td><?php  $total_PS = $exam_s / $need_exam * 100; echo $total = number_format((float)$total_PS, 2, '.', '');?> </td>
								<td><?php  $nii = $qu[0]->quarterly_assessment / 100	 ;$nee =	$total * $nii; echo $total_need_exam = number_format((float)$nee, 2, '.', '');?></td>				
								<td><?php echo $final_total =  $total_need_exam + $total_need_project + $total_need_quiz  ?></td>
								<td>
							<?php	switch ($final_total) { // malihog kog edit gaw or tiwas gaw
							case $final_total = 100:
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
							case $final_total >= 90.40 && $final_total <= 91.99:
							$last = "91"; // last = last_count
							break;
							case $final_total >= 90.40 && $final_total <= 91.99:
							$last = "90"; // last = last_count
							break;
									default:
									$last = "ff";
					} ?>
								<?php echo $last;?>	<!-- echo na part gaw -->
								</td>
								<td></td>
							<?php }?>
							</tbody>
						</table>	
					</div>
					</div>

					<!-- table-end -->

					<!-- remarks start -->
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label class="form-control-label">REMARKS: </label>
								<input class="form-control" type="text" name="">
							</div>
						</div>
					</div>
					<!-- remarks end -->

					<div class="row mb-3">	
						<div class="col-md-4">
							Prepared by: 
							<hr>
							<p class="text-center">Subject teacher:</p><input type="hidden" name=""></div>		
						<div class="col-md-4">
							Certified True and Correct: 
							<hr>
							<p class="text-center">Department Coordinator:</p><input type="hidden" name=""></div>
						<div class="col-md-4">
							Date Checked (MM/DD/YYYY): 
							<hr>
							<p class="text-center">Date Checked (MM/DD/YYYY):</p><input type="hidden" name=""></div>
					</div>

					<div class="row">	
						<div class="col-md-6 text-center">Signature of adviser overprinted name</div>
						<div class="col-md-6 text-center">Signature of Authorized Person Over Printed Name, Designation</div>
					</div>
			</div>
		</div>
	<div>
</div>
</body>
</html>