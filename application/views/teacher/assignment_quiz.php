<?php 
 foreach($student as $st) {
    	$qt = $this->db->query(
			"SELECT  user_id,assignment_score,assignment_item from tbl_assignteacher,tbl_assignment,tbl_student_assignment
			WHERE tbl_assignteacher.subj_id = tbl_assignment.subj_id
					AND tbl_student_assignment.assignment_id = tbl_assignment.assignment_id
					AND tbl_assignteacher.teacher_id ='$st->assign_teacher'
					AND tbl_assignteacher.subj_id 	 = '$st->subj_id'
					AND tbl_student_assignment.user_id = '$st->studentid'
			UNION ALL
			SELECT user_id,quiz_score,quiz_item from tbl_assignteacher,tbl_quiz,tbl_student_quiz
					WHERE tbl_assignteacher.subj_id = tbl_quiz.subj_id
							AND tbl_student_quiz.quiz_id = tbl_quiz.quiz_id
							AND tbl_assignteacher.teacher_id ='$st->assign_teacher'
							AND tbl_assignteacher.subj_id = '$st->subj_id'
							AND tbl_student_quiz.user_id = '$st->studentid'
			")->result();	
        return $qt;
        $need = 0;
										$cout_written_work_total = 0; 
										foreach($qt as $key){
        
        
?>
            <td style="border:1px solid black"><?php echo $key->assignment_item;
								$need = $need + $key->assignment_item;
								$cout_written_work_total++;
            ?></td>
            <td style="border:1px solid black"><?php echo $need;?></td>
							<td style="border:1px solid black">100</td>
							<td style="border:1px solid black">20</td>
                                        <?php }?>

<?php }?>