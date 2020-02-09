<!DOCTYPE html>
<html>
<head>
  <title>Final Grade</title>

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
     <h3 class="text-center">Final Grade</h3>
     <br><br>
    
    <div class="row">

      <div class="col-md-3 offset-3">
          <div class="input-group form-inline">
            <label for="" class="form-control-label mr-2">School ID:</label>
            <input class="form-control-sm" type="text" name=""  value="<?php echo $form3?$form3[0]->school_id:null?>">
          </div> 
      </div>
      <div class="col-md-4">
          <div class="input-group form-inline">
            <label for="" class="form-control-label mr-2">School Year:</label>
            <input class="form-control-sm" type="text" name="" value="<?php echo $info?$info[0]->schoolyear_start:null?>">
          </div> 
      </div>

    </div>
    
    <div class="row mt-3">
      
      <div class="col-md-3 offset-2">
          <div class="input-group form-inline">
            <label for="" class="form-control-label mr-2">Name of School:</label>
           <input class="form-control-sm" type="text" name="" value="<?php echo $form3?$form3[0]->school_name:null?>">
          </div> 
      </div>
      <div class="col-md-3">
          <div class="input-group form-inline">
            <label for="" class="form-control-label mr-2">Grade Level:</label>
            <input class="form-control-sm" type="text" name="" value="<?php echo $info?$info[0]->grade_level:null?>">
          </div> 
      </div>
      
      <div class="col-md-3">
          <div class="input-group form-inline">
            <label for="" class="form-control-label mr-2">Section:</label>
            <input class="form-control-sm" type="text" name="" value="<?php echo $info?$info[0]->section_name:null?>">
        </div> 
      </div>

    </div>
        <h1>Final Grade </h1>
        <a class="btn" style = "background-color: #2F4F4F; color: white" href="<?php echo base_url()?>teacher_dashboard/all_subject_final_grade/<?php echo $this->uri->segment(3)?>/1/<?php echo $this->uri->segment(5)?>">First Quarter</a>
        <a class="btn" style = "background-color: #696969; color: white" href="<?php echo base_url()?>teacher_dashboard/all_subject_final_grade/<?php echo $this->uri->segment(3)?>/2/<?php echo $this->uri->segment(5)?>">Second Quarter</a>
            <?php if(isset($student[0])){ ?>
            <table class="my-5 table table-bordered">
                <tr>
                    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><h4>Student</td></h4>
                    <?php 
                    $ss = $student[0]->studentid;
                    $quarter = $this->uri->segment(4);
                    $sy_id =  $this->uri->segment(5);
                    
                    $stud = $this->db->query("SELECT * from tbl_finalgrade,tbl_subject 
                                                where tbl_finalgrade.studentid = '$ss'
                                                AND tbl_subject.subj_id = tbl_finalgrade.subj_id 
                                                AND tbl_finalgrade.quarter = '$quarter'
                                                AND tbl_finalgrade.schoolyear_id = '$sy_id'
                                                order by tbl_finalgrade.subj_id")->result();?>
                    <?php foreach($stud as $st){ ?>
                        <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><h4><?php echo $st->subj_code?></h4></td>
                    <?php }?>
                </tr>
                <?php foreach($student as $st) { ?>
                <tr>
                    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><?php
                        $student_f = $this->db->query("SELECT * from tbl_student where studentid = '$st->studentid'")->result();
                    echo $student_f[0]->firstname.' '.$student_f[0]->lastname?></td>
                    <?php
                        $query = $this->db->query("SELECT * from tbl_finalgrade,tbl_student
                                                            where tbl_finalgrade.studentid = '$st->studentid'
                                                            AND tbl_student.studentid = tbl_finalgrade.studentid 
                                                            AND tbl_finalgrade.quarter = '$quarter'
                                                            AND tbl_finalgrade.schoolyear_id = '$sy_id'
                                                            order by tbl_finalgrade.subj_id")->result();
                    foreach($query as $q){ ?>
                    <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><?php echo $q->finalgrade;?> </td>
                    <?php }?>
                </tr>
                <?php }?>
            </table>
                    <?php }else{

                      
                    }?>
 