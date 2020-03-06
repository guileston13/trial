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
    <style>

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
  <div class="container-fluid" id="print_container">
    <h3 class="text-center">School Form 5(SF5) Report on Promotion & Level of Proficiency</h3>
    <br><br>
    <div class="row">
      <div class="col-md-3 offset-2">
        <div class="input-group form-inline">
          <label for="" class="form-control-label mr-2">Region:</label>
          <input class="form-control-sm"  type="text" name="" value="<?php echo $form5[0]->region?>">
        </div> 
      </div>
      <div class="col-md-3">
        <div class="input-group form-inline">
          <label for="" class="form-control-label mr-2">Division:</label>
          <input class="form-control-sm"  type="text" name="" value="<?php echo $form5[0]->division?>" >
        </div> 
      </div>
      <div class="col-md-3">
        <div class="input-group form-inline">
          <label for="" class="form-control-label mr-2">District:</label>
          <input class="form-control-sm"  type="text" name="" value="<?php echo $form5[0]->district?>">
        </div> 
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-3 offset-3">
        <div class="input-group form-inline">
          <label for="" class="form-control-label mr-2">School ID:</label>
          <input class="form-control-sm"  type="text" name="" value="<?php echo $form5[0]->school_id?>">
        </div> 
      </div>
      <div class="col-md-3">
        <div class="input-group form-inline">
          <label for="" class="form-control-label mr-2">School Year:</label>
          <input class="form-control-sm"  type="text" name="" value="<?php echo $infos[0]->schoolyear_start?>">
        </div> 
      </div>
    </div>

    <div class="row mt-3">
      <div class="col-md-3 offset-2">
        <div class="input-group form-inline">
          <label for="" class="form-control-label mr-2">School Name:</label>
          <input class="form-control-sm"  type="text" name="" value="<?php echo $form5[0]->school_name?>">
        </div> 
      </div>
      <div class="col-md-3">
        <div class="input-group form-inline">
          <label for="" class="form-control-label mr-2">Grade Level:</label>
          <input class="form-control-sm"  type="text" name="" value="<?php echo $infos[0]->grade_level?>" >
        </div> 
      </div>
      <div class="col-md-3">
        <div class="input-group form-inline">
          <label for="" class="form-control-label mr-2">Section:</label>
          <input class="form-control-sm"  type="text" name="" value="<?php echo $infos[0]->section_name?>">
        </div> 
      </div>
    </div>

    <table class="my-5 table table-bordered">
  <thead>
    <tr>
      <th style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><h5>#</th></h5>
      <th style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><h5>LRN</th></h5>
      <th style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><h5>LEARNERS NAME  </th></h5>
      <th style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><h5>GENERAL AVERAGE </th></h5>
      <th style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><h5>ACTION TAKEN: PROMOTED, *IRREGULAR or RETAINED</th></h5>
      <th style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><h5>INCOMPLETE SUBJECT/S </th></h5>
    </tr>
  </thead>
  <tbody>
    <?php 
      $promote = 0;
      $promote_male = 0;
      $promote_female = 0;
      $irregular = 0;
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
    foreach($students as $st){?>
  <tr>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><?php echo $num; $num++;?></td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><?php echo $st->lrn;?></td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><?php echo $st->firstname;?><?php echo $st->middlename;?><?php echo " "?><?php echo $st->lastname;?> </td>
    
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;">
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
        $total_fq = 0;
        $total_sq = 0;
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
        
        if(isset($fq_t)){
          $total = $fq_t + $sq_t;
          $tot = $total /2 ;
          if($tot == 30){
            echo $tot = 0;
            
          }else{
            echo number_format($tot, 2,'.',',');
          }
        }else{

        }
        
        
        
        
        ?>
      
    </td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;">
       
      <?php 
      if(isset($tot)){
      if($tot>=75){
        echo "PROMOTED";
        $promote++;
       // $g = $first_quarter->result();
        
        if($student[0]->gender == 'male'){
          $promote_male++;
        }else{
          $promote_female++;
        }
      }else{
        echo "RETAINED";
        $retained++;

        $g = $first_quarter->result();
        if($student[0]->gender == 'male'){
          $retained_male++;
        }else{
          $retained_female++;
        }
      }
    
     
     
      
      
      
      if( $student[0]->gender == 'male'){
        if($tot < 74.99 ){
          $beggining_male++;
          $beggining++;
        }else if($tot > 75 && $tot < 79.99){
          $developing_male++;
          $developing++;
        }else if($tot > 80 && $tot < 84.99){
          $approaching_male++;
          $approaching++;
        }else if($tot > 85 && $tot < 89.99){
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
        }else if($tot > 75 && $tot < 79.99){
          $developing_female++;
          $developing++;
        }else if($tot > 80 && $tot < 84.99){
          $approaching_female++;
          $approaching++;
        }else if($tot > 85 && $tot < 89.99){
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
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;">
      <?php $retaines =  $this->db->query("SELECT (SUM(finalgrade)/4) AS fees,subj_code from tbl_finalgrade,tbl_subject where studentid = '$st->studentid' AND tbl_subject.subj_id = tbl_finalgrade.subj_id")->result();
        
       if($retaines){
        foreach($retaines as $ret){
          
          if($ret->fees < 75){
            echo $ret->subj_code;
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
  
  
    <tr>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;">-</td>  
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;">-</td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"></td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"> </td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"> </td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"> </td>
    </tr> 
    <tr>
      <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;">-</td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;">-</td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"></td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"></td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"> </td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"> </td>
  </tr> 
    <tr>
      <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;">-</td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;">-</td>
    
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"> </td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"> </td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"> </td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"> </td>
  </tr> 

  </table>
  
  <table class="mb-5 table table-bordered w-50">
  <thead>
    <tr>
        <th colspan="4" style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;">SUMMARY TABLE</th>
    </tr>
    <tr>
      <th style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;">STATUS</th>
      <th style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;">MALE</th>
      <th style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;">FEMALE</th>
      <th style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;">TOTAL</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;">PROMOTED</td>
      <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><?php echo $promote_male;?></td>
      <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><?php echo $promote_female;?></td>
      <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><?php echo $promote;?></td>
   </tr>
    <tr>
      <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;">IRREGULAR</td>
      <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;">0</td>
      <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;">0</td>
      <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;">0</td>
    </tr>
    <tr>
      <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;">RETAINED</td>
      <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><?php echo $retained_male;?></td>
      <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><?php echo $retained_female;?></td>
      <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><?php echo $retained;?></td>
    </tr>
  </tbody>
</table>

<table class="mb-5 table table-bordered w-50">
  <thead>
    <tr>
     <th colspan="4" style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;">LEVEL OF PROFICIENCY</th>
    </tr>
    <tr>
      <th style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"></th>
      <th style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;">MALE</th>
      <th style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;">FEMALE</th>
      <th style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;">TOTAL</th>
   </tr>
  </thead>
  <tbody>
   <tr>
   
     
     
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;">BEGINNING  (B: 74% and below)</td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><?php echo $beggining_male;?> </td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><?php echo $beggining_female;?></td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><?php echo $beggining;?></td>
 </tr>
  <tr>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;">DEVELOPING (D: 75%-79%)</td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><?php echo $developing_male;?></td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><?php echo $developing_female;?></td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><?php echo $developing;?></td>
  </tr>
  <tr>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;">APPROACHING PROFICIENCY (AP: 80%-84%)</td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><?php echo $approaching_male;?></td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><?php echo $approaching_female;?></td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><?php echo $approaching;?></td>
  </tr>
  <tr>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;">PROFOCIENT (P: 85% -89%)</td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><?php echo $profocient_male;?></td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><?php echo $profocient_female;?></td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><?php echo $profocient;?></td>
  </tr> 
  <tr>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;">ADVANCED (A: 90%  and above)</td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><?php echo $advanced_male;?></td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><?php echo $advanced_female;?></td>
    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><?php echo $advanced;?></td>
  </tr> 
  </tbody>
</table>

<div class="row mb-3">
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-3">
                     <label for="" class="form-control-label mr-2">Prepared by:</label>
                </div>
                <div class="col-md-8">
                    <input class="form-control" type="text" name="" class="w-100">
                </div>
            </div>
        </div> 
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-3">
                    <label for="" class="form-control-label mr-2">Certified Correct and Submitted:</label>
                </div>
                <div class="col-md-8">
                    <input class="form-control" type="text" name="" class="w-100">
                </div>
            </div> 
        </div>
        <div class="col-md-3">
            <div class="row">
                <div class="col-md-3">
                    <label for="" class="form-control-label mr-2">Reviewed by:</label>
                </div>
                <div class="col-md-8">
                    <input class="form-control" type="text" name="" class="w-100">
                </div>
            </div>  
        </div>
    </div>

    <br><br>
    <button id="print_data" class="btn btn-success btn-print btn-rounded">
      <i class="fas fa-print"></i>
    </button>
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
