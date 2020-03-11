<!DOCTYPE html>
<html>
<head>
  <title>Report Card</title>

    <link href="<?php echo base_url(); ?>/assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Icons -->
    <link href="<?php echo base_url(); ?>/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="<?php echo base_url(); ?>/assets/css/argon.css?v=1.0.0" rel="stylesheet">
   <link type="text/css" href="<?php echo base_url(); ?>/assets/css/custom_css.css" rel="stylesheet">
   <link rel="icon" type="image/png" href="<?php echo base_url()?>assets3/img/logo-transparent-sm.png">
   <style>

tr:nth-child(even) {
  background-color: #dddddd;
}
td, th{
	border: 1px solid #1e4f8e;text-align: left;padding: 8px;
}
body , h2 , h1 {
	color:black;
}
input{
	text-decoration: underline;
}


</style>
	<body>
		<?php foreach($form9 as $form){ 
			$query = $this->db->query("SELECT *,
			subj_id as sb,section_id as si,
			(SUM(finalgrade)/4) as totalall,
			
			(SELECT finalgrade from tbl_finalgrade where subj_id = sb AND studentid = '$form->studentid' 
				AND quarter = 1 AND schoolyear_id = '$form->schoolyear_id' ) as quarter1,
			(SELECT finalgrade from tbl_finalgrade where subj_id = sb AND studentid = '$form->studentid' 
				AND quarter = 2 AND schoolyear_id = '$form->schoolyear_id'  ) as quarter2,
			(SELECT finalgrade from tbl_finalgrade where subj_id = sb AND studentid = '$form->studentid' 
				AND quarter = 3 AND schoolyear_id = '$form->schoolyear_id'  ) as quarter3,
			(SELECT finalgrade from tbl_finalgrade where subj_id = sb AND studentid = '$form->studentid' 
				AND quarter = 4 AND schoolyear_id = '$form->schoolyear_id'  ) as quarter4,
			(SELECT subj_code from tbl_subject where subj_id = sb AND schoolyear_id = '$form->schoolyear_id' limit 1) as subj_code
			from tbl_finalgrade where studentid = '$form->studentid' AND schoolyear_id = '$form->schoolyear_id' GROUP by subj_id")->result();
		
		?>

		<div class="container-fluid" id="print_container" style="text-align: center;">

			<div class="row">
				
				<div class="col-md-2" style="background-color: silver">
					
				</div>
			
				<div class="col-md-8">
					<b><h2>Republic of the Philippines</h2></b>		
					<b><h2>Department of Education</h2></b>
					<div>
						<center>
							<input style="text-align: center;" class="form-control-sm" type="text" name="" value="<?php echo $as?$as[0]->region:null?>" >
						</center>
							<label class="form-control-label mr-2">Region</label>
						<center>
							<center>
							<input style="text-align: center;" class="form-control-sm" type="text" name="" value="<?php echo $as?$as[0]->division:null?>" >
						</center>
							<label class="form-control-label mr-2">Division</label>
						<center>
						<center>
							<input style="text-align: center;" class="form-control-sm" type="text" name="" value="<?php echo $as?$as[0]->district:null?>" >
						</center>
							<label  class="form-control-label mr-2">District</label>
						<center>
							<input style="text-align: center;" class="form-control-sm" type="text" name="" value="<?php echo $as?$as[0]->school_name:null?>">
						</center>
							<label  class="form-control-label mr-2">School</label>
							
					</div>
					<div>
						<h1>LEARNER'S PROGRESS REPORT CARD</h1>
					</div>
					<br>
					<div style="text-align: justify;margin-left: 20%;">
						<div>
							<label  class="form-control-label mr-2">Name:</label>								
							<input class="form-control-sm" type="text" name=""  value="<?php echo $form->firstname, $form->lastname?>">
						</div>
						<div>								
							<label  class="form-control-label mr-2">Lerner's Reference Number:</label>
							<input class="form-control-sm" type="text" name="" value="<?php echo $form->lrn?>">
						</div>
						<div>	
							<label  class="form-control-label mr-2">Age:</label>										
							<input class="form-control-sm" type="text" name="" value="<?php echo $form->age?>">
							<label style="margin-left: 140px"  class="form-control-label mr-2">Sex:</label>	
							<input class="form-control-sm" type="text" name="" value="<?php echo $form->gender?>">
						</div>
						<div >	
							<label  class="form-control-label mr-2">Grade:</label>
							<input class="form-control-sm" type="text" name="">
							<?php $query1 = $this->db->query("SELECT * from tbl_section where section_id = '$form->section_id'")->result();
									
							?>
							<label style="margin-left: 100px"  class="form-control-label mr-2">Section: </label>
							<input class="form-control-sm" type="text" value="<?php echo $query1[0]->section_name ?>" name="">		
						</div>
						<div>		
							<label class="form-control-label mr-2">School Year:</label>	
							<input class="form-control-sm" type="text" name="" >
						</div>	
					</div>	
					<br>
					<h2>Dear Parents,</h2>
								<p style="text-align: center;">
										This report card shows the ability and progress of your child has made  in the different learning areas as well as his/her
									    core values.		
								</p>
								<p style="text-align: center;">
									This school welcomes you if you desire to know more
										about your child progress.
								</p>
								<br>
							<div>
								<div >
									<input class="form-control-sm" type="text" name="" placeholder="_____________________">
									<input style="margin-left:100px" class="form-control-sm" type="text" name="" placeholder="_____________________">	
								</div>	
								<div>
									<label class="form-control-label mr-2">Principal</label>						
									<label style="margin-left: 240px"  class="form-control-label mr-2">Teacher</label>	
								</div>
							</div>
							<br><br>
							<div class="row">
								<div class="col-md-12">
									<h3>PARENT GUARDIAN'S SIGNATURE</h3>
								</div>
							<br><br>	
							</div>
							<div class="row">
								<div class="col-md-10">1st Quarter ______________________</div>
							</div><br>
							<div class="row">
								<div class="col-md-10">2nd Quarter ______________________</div>
							</div><br>
							<div class="row">
								<div class="col-md-10">3rd Quarter ______________________</div>
							</div><br>
							<div class="row">
								<div class="col-md-10">4th Quarter ______________________</div>
							</div>
							<br><br>
										<h2>Certificate Of Transfer</h2>
								<div class="row">
									<div class="col-md-6">
										<b>Admitted to Grade:</b>
										<input class="form-control-sm" type="text" name="" placeholder="_____________________">									
									</div>
									<div class="col-md-3">
										<b>Section:</b>
										<input class="form-control-sm" type="text" name="" placeholder="_____________________">									
									</div>
								</div>
								<div class="row">
									<div class="col-md-7">
										<b>Eligible for Administration to Grade:</b>
										<input class="form-control-sm" type="text" name="" placeholder="_____________________">									
									</div>
								</div>
									<h2>Approved:</h2>
									<div class="row">
										<div class="col-md-6">
											<input class="form-control-sm" type="text" name="" placeholder="_____________________">	
																			
										</div>
										<div class="col-md-6">
											<input class="form-control-sm" type="text" name="" placeholder="_____________________">							
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<label for="" class="form-control-label mr-2">Principal</label>
										</div>
										<div class="col-md-6">
											<label for="" class="form-control-label mr-2">Teacher</label>
										</div>	
									</div>
									<h2>Certification of Eligibility to Transfer:</h2>
									<div class="row">
										<div class="col-md-7">
											<b>Admitted in</b>
											<input class="form-control-sm" type="text" name="" placeholder="_____________________">									
										</div>
									</div>	
									<div class="row">
										<div class="col-md-6">
											<input class="form-control-sm" type="text" name="" placeholder="_____________________">	
																			
										</div>
										<div class="col-md-6">
											<input class="form-control-sm" type="text" name="" placeholder="_____________________">							
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<label for="" class="form-control-label mr-2">Date</label>
										</div>
										<div class="col-md-6">
											<label for="" class="form-control-label mr-2">Principal</label>
										</div>	
									</div>
							<b><center><h2>REPORT ON LEARNER'S OBSERVES VALUES</center></b></h2>
							<table align="center">
						  <tr>
							<th >Character Traits</th>
							<th>1</th>
							<th>2</th>
							<th>3</th>
							<th>4</th>
						  </tr>
						  <tr>
							<td>1. Honesty</td>
							<td>a</td>
							<td>b</td>
							<td>c</td>
							<td>d</td>
						  </tr>
						  <tr>
							 <td>2. Courtesy</td>
							 <td>a</td>
							 <td>b</td>
							 <td>c</td>
							 <td>d</td>
						  </tr>
						   <tr>
							 <td>3. Helpfulness & Cooperation</td>
							 <td>a</td>
							 <td>b</td>
							 <td>c</td>
							 <td>d</td>
						  </tr>  <tr>
							 <td>4. Resourcefulness & Creativity</td>
							 <td>a</td>
							 <td>b</td>
							 <td>c</td>
							 <td>d</td> 
						  </tr>
						  <tr>
							 <td>5. Consideration for Others</td>
							 <td>a</td>
							 <td>b</td>
							 <td>c</td>
							 <td>d</td>
						  </tr>
						  <tr>
							 <td>6. Sportsmanship</td>
							 <td>a</td>
							 <td>b</td>
							 <td>c</td>
							 <td>d</td>
						  </tr>
						  <tr>
							 <td>7. Obedience</td>
							 <td>a</td>
							 <td>b</td>
							 <td>c</td>
							 <td>d</td>
						  </tr>
						  <tr>
							 <td>8. Self-Reliance</td>
							 <td>a</td>
							 <td>b</td>
							 <td>c</td>
							 <td>d</td>
						  </tr>
						  <tr>
							 <td>9. Industry</td>
							 <td>a</td>
							 <td>b</td>
							 <td>c</td>
							 <td>d</td>
						  </tr>
						  <tr>
							 <td>10. Cleanliness & Orderliness</td>
							 <td>a</td>
							 <td>b</td>
							 <td>c</td>
							 <td>d</td>
						  </tr>
						  <tr>
							 <td>11. Promptness & Punctuality</td>
							 <td>a</td>
							 <td>b</td>
							 <td>c</td>
							 <td>d</td>
						  </tr>
						  <tr>
							 <td>12. Sense of Responsibility</td>
							 <td>a</td>
							 <td>b</td>
							 <td>c</td>
							 <td>d</td>
						  </tr>
						  <tr>
							 <td>13. Love of God</td>
							 <td>a</td>
							 <td>b</td>
							 <td>c</td>
							 <td>d</td>
						  </tr>
						  <tr>
							 <td>14. Patience & Love of Country</td>
							 <td>a</td>
							 <td>b</td>
							 <td>c</td>
							 <td>d</td>
						  </tr>
						  <tr>
							 <td>Average</td>
							 <td>a</td>
							 <td>b</td>
							 <td>c</td>
							 <td>d</td>
						  </tr>
						  
						</table>
							<br>
							<table align="center">
							
						<b><center><h2>REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</center></b></h2>
						<tr>
							<th>Learning Areas</th>
							<th>1</th>
							<th>2</th>
							<th>3</th>
							<th>4</th>
							<th>Final Rating</th>
						</tr>
						<?php 
						$average_grade = 0;
						$count = 1;
						foreach($query as $key){?>
						<tr>
							<td><?php echo $key->subj_code?></td>
							<td><?php echo $key->quarter1?></td>
							<td><?php echo $key->quarter2?></td>
							<td><?php echo $key->quarter3?></td>
							<td><?php echo $key->quarter4?></td>
							<td><?php echo $key->totalall?></td>
						</tr>

						<?php $average_grade += $key->totalall;
								$con = $count++;
						?>
						<?php } ?>

							</table>
							<br>
							<br>
							<br>
							

							<br><br><br>
				</div>

				<div class="col-md-2" style="background-color: silver">
				</div>
			</div>
		</div>
		<?php }?>
</body>
</html>