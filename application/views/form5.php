<!DOCTYPE html>
<html>
<head>
    <title>School form 5</title>
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
  margin:2% 10% ;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  border-radius: 100px;
}

td, th {
  border: 1px solid #1e4f8e;
  text-align: justify;
  padding: 8px;
  color: black;

}
th{
  color: white;
  background-color: dodgerblue
}
input{
    border: none;
    border-bottom: 1px solid black;
    text-align: center;
}
h2{
  color: black
}

tr:nth-child(even) {
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
  <div class="container-fluid" id="print_container">
    <h2 class="text-center">School Form 5(SF5) Report on Promotion & Level of Proficiency</h2>
    <br>
    <div class="row">
      <div class="col-md-4">
        <div >
          <label for="" class="form-control-label mr-2">Region:</label>
          <input size="10"  type="text" name="" value="<?php echo $form5[0]->region?>">
        </div> 
      </div>
      <div class="col-md-4">
        <div >
          <label for="" class="form-control-label mr-2">Division:</label>
          <input size="10"  type="text" name="" value="<?php echo $form5[0]->division?>" >
        </div> 
      </div>
      <div class="col-md-4">
        <div >
          <label for="" class="form-control-label mr-2">District:</label>
          <input size="10"  type="text" name="" value="<?php echo $form5[0]->district?>">
        </div> 
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-md-4 ">
        <div >
          <label for="" class="form-control-label mr-2">School ID:</label>
          <input size="10"  type="text" name="" value="<?php echo $form5[0]->school_id?>">
        </div> 
      </div>
      <div class="col-md-4">
        <div >
          <label for="" class="form-control-label mr-2">School Year:</label>
          <input size="10" type="text" name="" value="<?php echo $infos[0]->schoolyear_start?>">
        </div> 
      </div>
    </div>

    <div class="row mt-4">
      <div class="col-md-4">
        <div >
          <label for="" class="form-control-label mr-2">School Name:</label>
          <input size="10" type="text" name="" value="<?php echo $form5[0]->school_name?>">
        </div> 
      </div>
      <div class="col-md-4">
        <div >
          <label for="" class="form-control-label mr-2">Grade Level:</label>
          <input size="10" type="text" name="" value="<?php echo $infos[0]->grade_level?>" >
        </div> 
      </div>
      <div class="col-md-4">
        <div >
          <label for="" class="form-control-label mr-2">Section:</label>
          <input size="10" type="text" name="" value="<?php echo $infos[0]->section_name?>">
        </div> 
      </div>
    </div>
    <br>
    <table style="width: 100%">
  <thead>
    <tr>
      <th>#</th>
      <th>LRN</th>
      <th>LEARNERS NAME  </th>
      <th>GENERAL AVERAGE </th>
      <th>ACTION TAKEN: PROMOTED, *IRREGULAR or RETAINED</th>
      <th>INCOMPLETE SUBJECT/S </th>
    </tr>
  </thead>
  <tbody>
    <?php 
      $promote = 0;
      $promote_male = 0;
      $promote_female = 0;
      $irregular = 0;
      $irregular_male = 0;
      $irregular_female = 0;
      $retained = 0;
      $retained_male = 0;
      $retained_female = 0;

      $beggining  = 0;
      $developing  = 0;
      $approaching  = 0;
      $profocient  = 0;
      $advanced  = 0;

      $beggining_male = 0;
      $beggining_female = 0;
      $developing_male =0;
      $developing_female =0;
      $approaching_male = 0;
      $approaching_female = 0;
      $profocient_male = 0;
      $profocient_female = 0;
      $advanced_male = 0;
      $advanced_female = 0;
      $num = 1;
    foreach($students as $st){
      ?>
  <tr>
    <td><?php echo $num; $num++;?></td>
    <td><?php echo $st->lrn;?></td>
    <td><?php echo $st->firstname;?><?php echo $st->middlename;?><?php echo " "?><?php echo $st->lastname;?> </td>
    <td>
        <?php $student = $this->db->query("SELECT * from tbl_student where studentid = '$st->studentid'")->result();?>
        
        <?php 
        $sy_id = $this->uri->segment(4);
        
        $first_quarter = $this->db->query("SELECT * from tbl_finalgrade,tbl_student 
                                                            where tbl_finalgrade.studentid = '$st->studentid'
                                                            AND tbl_student.studentid = tbl_finalgrade.studentid 
                                                            AND tbl_finalgrade.quarter = '1'
                                                            AND tbl_finalgrade.schoolyear_id = '$sy_id'
                                                            order by tbl_finalgrade.subj_id");
        $second_quarter = $this->db->query("SELECT * from tbl_finalgrade,tbl_student 
                                                            where tbl_finalgrade.studentid = '$st->studentid'
                                                            AND tbl_student.studentid = tbl_finalgrade.studentid 
                                                            AND tbl_finalgrade.quarter = '2'
                                                            AND tbl_finalgrade.schoolyear_id = '$sy_id'
                                                            order by tbl_finalgrade.subj_id");
        $third_quarter = $this->db->query("SELECT * from tbl_finalgrade,tbl_student 
                                                            where tbl_finalgrade.studentid = '$st->studentid'
                                                            AND tbl_student.studentid = tbl_finalgrade.studentid 
                                                            AND tbl_finalgrade.quarter = '3'
                                                            AND tbl_finalgrade.schoolyear_id = '$sy_id'
                                                            order by tbl_finalgrade.subj_id");
        $fourth_quarter = $this->db->query("SELECT * from tbl_finalgrade,tbl_student 
                                                            where tbl_finalgrade.studentid = '$st->studentid'
                                                            AND tbl_student.studentid = tbl_finalgrade.studentid 
                                                            AND tbl_finalgrade.quarter = '4'
                                                            AND tbl_finalgrade.schoolyear_id = '$sy_id'
                                                            order by tbl_finalgrade.subj_id");
        $total_fq = 0;
        $total_sq = 0;
        $total_tq = 0;
        $total_foq = 0;
        $second_quarter->num_rows();
        foreach($first_quarter->result() as $fq){
           $total_fq = $total_fq + $fq->finalgrade;
          $fq_t = $total_fq / $first_quarter->num_rows();
        }
        
        if($second_quarter->result()){
        foreach($second_quarter->result() as $sq){
           $total_sq = $total_sq + $sq->finalgrade;
          $sq_t = $total_sq / $second_quarter->num_rows();
        }
        }else{
          $sq_t = 0;
        }
        if($third_quarter->result()){
        foreach($third_quarter->result() as $tq){
           $total_tq = $total_tq + $tq->finalgrade;
          $tq_t = $total_tq / $third_quarter->num_rows();
        }
        }else{
          $tq_t = 0;
        }
        if($fourth_quarter->result()){
        foreach($fourth_quarter->result() as $foq){
           $total_foq = $total_foq + $foq->finalgrade;
          $foq_t = $total_foq / $fourth_quarter->num_rows();
        }
        }else{
          $foq_t = 0;
        }
        
        if(isset($fq_t)){
          $total = $fq_t + $sq_t + $tq_t + $foq_t;
          $tot = $total /4 ;
          if($tot == 30){
            echo $tot = 0;
            
          }else{
            echo number_format($tot, 2,'.',',');
          }
        }else{

        }
        ?>  

    </td>
    <td >       
      <?php 
      if(isset($tot)){
      if($tot>=75){
        echo "<p style=\"color: darkblue\">Promoted</p>";
        $promote++;
       // $g = $first_quarter->result();
        
        if($student[0]->gender == 'male'){
          $promote_male++;
        }else{
          $promote_female++;
        }
      }else{
        echo "<p style=\"color: red\">Irregular / Retained</p>";
        $irregular++;

       // $g = $first_quarter->result();
        if($student[0]->gender == 'male'){
          $irregular_male++;
        }else{
          $irregular_female++;
        }
      }


      if( $student[0]->gender == 'male'){
        if($tot < 74.99 ){
          $beggining_male++;
          $beggining++;
        }else if($tot >= 75 && $tot < 79.99){
          $developing_male++;
          $developing++;
        }else if($tot >= 80 && $tot < 84.99){
          $approaching_male++;
          $approaching++;
        }else if($tot >= 85 && $tot < 89.99){
          $profocient_male++;
          $profocient++;
        }else if($tot > 90){
          $advanced_male++;
          $advanced++;
        }
      }else{
        if($tot < 74.99 ){
          $beggining_female++;
          $beggining++;
        }else if($tot >= 75 && $tot < 79.99){
          $developing_female++;
          $developing++;
        }else if($tot >= 80 && $tot < 84.99){
          $approaching_female++;
          $approaching++;
        }else if($tot >= 85 && $tot < 89.99){
          $profocient_female++;
          $profocient++;
        }else if($tot > 90){
          $advanced_female++;
          $advanced++;
        }
      }
      }else{
        
      }
      
      ?>
    </td>
    <td>
      <?php $retaines =  $this->db->query("SELECT (SUM(finalgrade)/4) AS fees,subj_code from tbl_finalgrade,tbl_subject where studentid = '$st->studentid' AND tbl_subject.subj_id = tbl_finalgrade.subj_id GROUP BY tbl_finalgrade.subj_id")->result();
        
       if($retaines){
        foreach($retaines as $ret){
          
          if($ret->fees < 74.99){
            echo $ret->subj_code; echo " ,";
          }
          else{
            
          }
        }
        }else{  
          if($tot >=75){
          
          }else{echo "No Final Grade";}
        }?>
        
    </td>    
    
  </tr>
  <?php } ?>


  </table>
  <br>

  <div class="row">
  <div class="col-md-6">
  <table style="width: 100%;">
    <thead>
      <tr>
          <th colspan="4">SUMMARY TABLE</th>
      </tr>
      <tr>
        <th>STATUS</th>
        <th style="background-color: #364f6b">MALE</th>
        <th style="background-color: #3fc1c9">FEMALE</th>
        <th style="background-color: lightcoral">TOTAL</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>PROMOTED</td>
        <td><?php echo $promote_male;?></td>
        <td><?php echo $promote_female;?></td>
        <td><?php echo $promote;?></td>
     </tr>
      <tr>
        <td>IRREGULAR</td>
        <td><?php echo $irregular_male;?></td>
        <td><?php echo $irregular_female;?></td>
        <td><?php echo $irregular;?></td>
      </tr>
      <tr>
        <td>RETAINED</td>
        <td><?php echo $retained_male;?></td>
        <td><?php echo $retained_female;?></td>
        <td><?php echo $retained;?></td>
      </tr>
    </tbody>
  </table>
  </div>
<br>
  <div class="col-md-6">
    <table style="width: 100%;">
  <thead>
    <tr>
     <th colspan="4">LEVEL OF PROFICIENCY</th>
    </tr>
    <tr>
      <th></th>
      <th style="background-color: #364f6b">MALE</th>
      <th style="background-color: #3fc1c9">FEMALE</th>
      <th style="background-color: lightcoral">TOTAL</th>
   </tr>
  </thead>
  <tbody>
   <tr>     
    <td>BEGINNING  (B: 74% and below)</td>
    <td><?php echo $beggining_male;?> </td>
    <td><?php echo $beggining_female;?></td>
    <td><?php echo $beggining;?></td>
 </tr>
  <tr>
    <td>DEVELOPING (D: 75%-79%)</td>
    <td><?php echo $developing_male;?></td>
    <td><?php echo $developing_female;?></td>
    <td><?php echo $developing;?></td>
  </tr>
  <tr>
    <td>APPROACHING PROFICIENCY (AP: 80%-84%)</td>
    <td><?php echo $approaching_male;?></td>
    <td><?php echo $approaching_female;?></td>
    <td><?php echo $approaching;?></td>
  </tr>
  <tr>
    <td>PROFOCIENT (P: 85% -89%)</td>
    <td><?php echo $profocient_male;?></td>
    <td><?php echo $profocient_female;?></td>
    <td><?php echo $profocient;?></td>
  </tr> 
  <tr>
    <td>ADVANCED (A: 90%  and above)</td>
    <td><?php echo $advanced_male;?></td>
    <td><?php echo $advanced_female;?></td>
    <td><?php echo $advanced;?></td>
  </tr> 
  </tbody>
  </table>
  </div>
</div>
<br><br>

    <div class="row">
      <div class="col-md-4">
          <div class="row">
              <div class="col-md-3">
                   <label class="form-control-sm" for="" class="form-control-label mr-2">Prepared by:</label>
              </div>
              <div class="col-md-4">
                  <input   type="text" name="" size="20"  >
              </div>
          </div>
      </div>
      <div class="col-md-4">
          <div class="row">
              <div class="col-md-3">
                   <label class="form-control-sm" for="" class="form-control-label mr-2">Certified Correct and Submitted:</label>
              </div>
              <div class="col-md-4">
                  <input type="text" name="" size="20">
              </div>
          </div>
      </div>
      <div class="col-md-4">
          <div class="row">
              <div class="col-md-3">
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
