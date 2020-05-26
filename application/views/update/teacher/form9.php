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
body{
	margin:2% 15% 2% 13%;
  font-size: 12px;
  color: black !important;
  text-align: center;
}td, th {
  text-align: justify;
  padding: 8px;
  color: black;
  border: 1px black solid;

}
th{
  text-align: center;
}
input{
    border: none;
    border-bottom: 1px solid black;
    text-align: center;
}
h2,h3,h4{
  color: black;
  text-align: center;
}
label{
	color: black !important;
}
.rotate {
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  width: 1.5em;
  padding: 20px 11px 20px 20px;
  font-size: 11px;
}
.rotate div {
     -moz-transform: rotate(-90.0deg);  /* FF3.5+ */
       -o-transform: rotate(-90.0deg);  /* Opera 10.5 */
  -webkit-transform: rotate(-90.0deg);  /* Saf3.1+, Chrome */
             filter:  progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083);  /* IE6,IE7 */
         -ms-filter: "progid:DXImageTransform.Microsoft.BasicImage(rotation=0.083)"; /* IE8 */
         margin-left: -10em;
         margin-right: -10em;
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
	<div  id="print_container">
			<div class="row" style="min-height: 750px;max-height: 750">
				<div class="col-md-6">
					<h2>ATTENDANCE RECORD</h2>
							<div class="row">

								<table>

								    <tr>
								        <td></td>
								        <td class="rotate "><div>June</div></td>
								        <td class="rotate "><div>July</div></td>
								        <td class="rotate "><div>August</div></td>
								        <td class="rotate "><div>September</div></td>
								        <td class="rotate "><div>October</div></td>
								        <td class="rotate "><div>November</div></td>
								        <td class="rotate "><div>December</div></td>
								        <td class="rotate "><div>January</div></td>
								        <td class="rotate "><div>February</div></td>
								        <td class="rotate "><div>March</div></td>
								        <td class="rotate "><div>April</div></td>
								        <td class="rotate "><div>May</div></td>
								        <td class="rotate "><b><div>TOTAL</div></td></b>
								    </tr>
								    <tr>
								        <td>School Days</td>
								        <td></td>
								        <td></td>
								        <td></td>
								        <td></td>
								        <td></td>
								        <td></td>
								        <td></td>
								        <td></td>
								        <td></td>
								        <td></td>
								        <td></td>
								        <td></td>
								        <td></td>
								    </tr>
								    <tr>
								        <td>No. of Days Present</td>
								        <td></td>
								        <td></td>
								        <td></td>
								        <td></td>
								        <td></td>
								        <td></td>
								        <td></td>
								        <td></td>
								        <td></td>
								        <td></td>
								        <td></td>
								        <td></td>
								        <td></td>
								    </tr>
								    <tr>
								        <td>No. of Days Present</td>
								        <td></td>
								        <td></td>
								        <td></td>
								        <td></td>
								        <td></td>
								        <td></td>
								        <td></td>
								        <td></td>
								        <td></td>
								        <td></td>
								        <td></td>
								        <td></td>
								        <td></td>
								    </tr>
								    
								   
								</table>
							</div>
							<br>
							<div class="row">
								<div class="col-md-12">
									<br>
									<h3>PARENT / GUARDIAN'S SIGNATURE</h3>
								</div>
							<br><br>	
							</div>
							<div class="row">
								<div class="col-md-10">1st Quarter:
									<input type="" name="">
								</div>
							</div>
							<div class="row">
								<div class="col-md-10">2nd Quarter
								<input type="" name="">
							</div>
							</div>
							<div class="row">
								<div class="col-md-10">3rd Quarter
								<input type="" name="">
							</div>
							</div>
							<div class="row">
								<div class="col-md-10">4th Quarter
								<input type="" name="">
							</div>
							</div>
							<br>
							<div >
							<h3>Certificate Of Transfer</h3>
								<div <div style="text-align: left;">	
									<label >Admitted to Grade:</label>										
									<input size="20" type="text" name="" >
									<label>Section:</label>	
									<input size="20" type="text" name="" >
								</div>
								<div>
									<div <div style="text-align: left;"> 
										<label><b>Eligible for Administration to Grade:</b></label>
										<input size="35" type="text" name="" >								
									</div>
								</div>
								<div style="text-align: left;">
									<label >Approved:</label>
								</div>
									<div class="row">	
										<div class="col-md-6" >
											<input size="30" type="text" name="" value="<?php echo $as?$as[0]->principal:null?>">
										</div>
										<div class="col-md-6">
											<input size="30" type="text" name="" >	
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<label>Principal</label>
										</div>
										<div class="col-md-6" >
											<label >Teacher</label>
										</div>								
									</div>
									<h3>Certification of Eligibility to Transfer:</h3>
									<div class="row">
										<div class="col-md-6" style="text-align: left;">
											<b>Admitted in:</b>
											<input size="15" type="text" name="">									
										</div>
									</div>	
									<div class="row">
										<div class="col-md-6" >
											<label >Date:</label>
											<input size="20" type="text" name="" value="<?php echo(date("M/d/Y"))?>" >
										</div>
										<div class="col-md-6">
											<input size="30" type="text" name="" value="<?php echo $as?$as[0]->principal:null?>">	
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<label></label>
										</div>
										<div class="col-md-6" >
											<label >Principal</label>
										</div>								
									</div>
					</div>
				</div>			
			<div class="col-md-6">
					<b><p>Republic of the Philippines</p></b>		
					<b><p>Department of Education</p></b>
					<div>
						<div>
							<label>Region</label>
							<input style="border-bottom: 0px" size="2" type="text" name="" value="<?php echo $as?$as[0]->region:null?>" >
						</div>
						<div>
							<label >Division of</label>
							<input size="3" type="text" name="" value="<?php echo $as?$as[0]->division:null?>" >
						</div>
						<div>
							<input size="15" type="text" name="" value="<?php echo $as?$as[0]->district:null?>" >
						</div>
						<div>
							<label  >District</label>
						</div>
						<div>
							<input type="text" name="" value="<?php echo $as?$as[0]->school_name:null?>">
						</div>
						<div>
							<label  >School</label>
						</div>
					</div>
					<br>
					<div>
						<h2>LEARNER'S PROGRESS REPORT CARD</h2>
					</div>
					<br>
					<div style="text-align: left">
						<div>
							<label >Name:</label>								
							<input size="65"  type="text" name=""  value="<?php echo $form->firstname, $form->lastname?>">
						</div>
						<div>								
							<label >Lerner's Reference Number:</label>
							<input size="45" type="text" name="" value="<?php echo $form->lrn?>">
						</div>
						<div>	
							<label >Age:</label>										
							<input size="30" type="text" name="" value="<?php echo $form->age?>">
							<label>Sex:</label>	
							<input size="25" type="text" name="" value="<?php echo $form->gender?>">
						</div>
						<div >

							<label >Grade:</label>
							<?php $query1 = $this->db->query("SELECT * from tbl_section where section_id = '$form->section_id'")->result();
									
							?>
							<input type="text" name="" value="<?php echo $query1[0]->subj_grade_level ?>">
							<?php $query1 = $this->db->query("SELECT * from tbl_section where section_id = '$form->section_id'")->result();
									
							?>
							<label >Section: </label>
							<input size="30" type="text" value="<?php echo $query1[0]->section_name ?>" name="">		
						</div>
						<div>
							<?php $query1 = $this->db->query("SELECT * from tbl_schoolyear 
							where schoolyear_id = '$form->schoolyear_id'
							
							")->result();
							?>		
							<label>School Year:</label>	
							<input type="text" name="" value="<?php echo $query1[0]->schoolyear_start ?>">
						</div>	
					</div>	
					<br>
					<p style="text-align: justify;">Dear Parent,</p>
								<p style="text-align: center;">
										This report card shows the ability and progress of your child has made  in the different learning areas as well as his/her
									    core values.
									    This school welcomes you if you desire to know more
										about your child progress.		

								<br>
							<div class="row">	
								<div class="col-md-6">
									<?php $query1 = $this->db->query("SELECT * from tbl_instructor 
									where teacher_id = '$form->teacher_id'
							
									")->result();
								?>
									<input size="20" type="text" name="" value="<?php echo $as?$as[0]->principal:null?>" >
								</div>
									
								<div class="col-md-6">
									<input size="20" type="text" name="" value="<?php echo $query1[0]->firstname?>">	
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<label>Principal</label>
								</div>
								<div class="col-md-6">
									<label >Teacher</label>
								</div>								
							</div>
				</div>
			</div>
							<br><br>
			<div class="row" style="min-height: 750px;max-height: 750">
				<div class="col-md-6">
					<table align="center" style="width: 100%;margin-bottom: 10%">			
						<h3>REPORT ON LEARNING PROGRESS AND ACHIEVEMENT</h3>
						<tr>
							<th rowspan="2">Learning Areas</th>
							<th colspan="4">Quarter</th>
							<th rowspan="2">Final Rating</th>
							<th rowspan="2">Remarks</th>
						</tr>
						<tr>
							<td>1</td>
							<td>2</td>
							<td>3</td>
							<td>4</td>
						</tr>
						<?php 
						$average_grade = 0;
						$count = 1;
						$generalAve = 0;
						$subject_number = 0;
						foreach($query as $key){?>
						<tr>
							<td><?php echo $key->subj_code?></td>
							<td><?php echo $key->quarter1?></td>
							<td><?php echo $key->quarter2?></td>
							<td><?php echo $key->quarter3?></td>
							<td><?php echo $key->quarter4?></td>
							<td><?php echo $key->totalall?></td>
							<td>
							<?php
								if ($key->totalall<75) {
									echo "Failed";
								} else {
									echo "Passed";
								}
							?>	
							 	
							 </td>
						</tr>

						<?php $average_grade += $key->totalall;
								$con = $count++;
								$subject_number++;
							$generalAve = $generalAve  += $key->totalall;	
						?>
						<?php } ?>
						<tr>
							<td colspan="5" style="text-align: center;">General Average</td>
							<td><?php if($generalAve!=0){
								echo round($generalAve/$subject_number, 2);
								}else{
									
								}
							?></td>
						</tr>
					</table>
					<table align="center">
						<tr>
							<th>Descriptors</th>
							<th>Grading Scale</th>
							<th>Remarks</th>
						</tr>
						<tr>
							<td>Outstanding</td>
							<td>90-100</td>
							<td>Passed</td>
						</tr>
						<tr>
							<td>Very Satisfactory</td>
							<td>85-89</td>
							<td>Passed</td>
						</tr>
						<tr>
							<td>Satisfactory</td>
							<td>80-84</td>
							<td>Passed</td>
						</tr>
						<tr>
							<td>Fairly Satisfactory</td>
							<td>75-79</td>
							<td>Passed</td>
						</tr>
						<tr>
							<td>Did Not Meet Expectations</td>
							<td>Below 75</td>
							<td>Failed</td>
						</tr>
					</table>
				</div>

				<div class="col-md-6">
					<b><center><h3>REPORT ON LEARNER'S OBSERVES VALUES</center></b></h3>
						<table align="center" style="width: 100%;margin-bottom: 10% ">
							<tr>
								<th rowspan="2">Core Values</th>
								<th rowspan="2">Behavior Statements</th>
								<th colspan="4">Quarter</th>
							</tr>
							<tr>
								<td>1</td>
								<td>2</td>
								<td>3</td>
								<td>4</td>
							</tr>
							<tr>
								<td rowspan="2">1.Maka-diyos</td>
								<td>Expresses one’s spiritual beliefs while respecting the spiritual beliefs of others.</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>Shows adherence to ethical principles by upholding truth in all undertakings.</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>  
						  	<tr>
								<td rowspan="2">2.Maka-tao</td>
								<td>In sensitive to individual, social, and cultural diffrences;</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>Demonstrates contributions towards solidarity.</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>3.Makakalikasan</td>
								<td>Cares for environment and utilizes resources wisely, judiciosly and economically. </td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td rowspan="2">4.Makabansa</td>
								<td>Demonstrates pride in being a Filipino;exercises the rights and responsibilities of a Filipino citizen.</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>
							<tr>
								<td>Demonstrate appropriate behavior in carrying out activities in school, community and country.</td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
							</tr>  
						</table>
						<table align="center" style="margin-bottom: 5%">
							<tr>
								<th>Marking</th>
								<th>Non-Numerical Rating</th>
							</tr>
							<tr>
								<td>AO</td>
								<td>Always Observed</td>
							</tr>
							<tr>
								<td>SO</td>
								<td>Sometimes Observed</td>
							</tr>
							<tr>
								<td>RO</td>
								<td>Rarely Observed</td>
							</tr>
							<tr>
								<td>NO</td>
								<td>Not Observed</td>
							</tr>
						</table>

							
		</div>
	</div>				
		<?php }?>
</body>
</html>