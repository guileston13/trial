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
   <link rel="icon" type="image/png" href="<?php echo base_url()?>assets3/img/logo-transparent-sm.png">
   <style>
body{
  margin:2% 10% ;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #1e4f8e;
  text-align: justify;
  padding: 8px;
  color: black;

}
th{
  color: white;
  background-color: dodgerblue !important
}
input{
    border: none;
    border-bottom: 1px solid black;
    text-align: center;
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
     <h2 class="text-center">Final Grade</h2>
    <div class="row">

      <div class="col-md-4 offset-3">
          <div class="input-group form-inline">
            <label for="" class="form-control-label mr-2">School ID:</label>
            <input size = "10"  type="text" name=""  value="<?php echo $form3?$form3[0]->school_id:null?>">
          </div> 
      </div>
      <div class="col-md-4">
          <div class="input-group form-inline">
            <label for="" class="form-control-label mr-2">School Year:</label>
            <input size = "10" type="text" name="" value="<?php echo $info?$info[0]->schoolyear_start:null?>">
          </div> 
      </div>

    </div>
    
    <div class="row mt-3">
      
      <div class="col-md-3 offset-2">
          <div class="input-group form-inline">
            <label for="" class="form-control-label mr-2">Name of School:</label>
           <input size = "10" type="text" name="" value="<?php echo $form3?$form3[0]->school_name:null?>">
          </div> 
      </div>
      <div class="col-md-3">
          <div class="input-group form-inline">
            <label for="" class="form-control-label mr-2">Grade Level:</label>
            <input size = "10" type="text" name="" value="<?php echo $info?$info[0]->grade_level:null?>">
          </div> 
      </div>
      
      <div class="col-md-3">
          <div class="input-group form-inline">
            <label for="" class="form-control-label mr-2">Section:</label>
            <input size = "10"  type="text" name="" value="<?php echo $info?$info[0]->section_name:null?>">
        </div> 
      </div>

    </div>
        <h1>Final Grade </h1>
        <a class="btn" style = "background-color: royalblue; color: white" href="<?php echo base_url()?>teacher_dashboard/all_subject_final_grade/<?php echo $this->uri->segment(3)?>/1/<?php echo $this->uri->segment(5)?>">First Quarter</a>
        <a class="btn" style = "background-color: indianred; color: white" href="<?php echo base_url()?>teacher_dashboard/all_subject_final_grade/<?php echo $this->uri->segment(3)?>/2/<?php echo $this->uri->segment(5)?>">Second Quarter</a>
        <a class="btn" style = "background-color: #3CB371; color: white" href="<?php echo base_url()?>teacher_dashboard/all_subject_final_grade/<?php echo $this->uri->segment(3)?>/3/<?php echo $this->uri->segment(5)?>">Third Quarter</a>
        <a class="btn" style = "background-color: #778899; color: white" href="<?php echo base_url()?>teacher_dashboard/all_subject_final_grade/<?php echo $this->uri->segment(3)?>/4/<?php echo $this->uri->segment(5)?>">Fourth Quarter</a>
            <?php if(isset($student[0])){ ?>
            <br><br>
            <table >
                <tr>
                    <th>Student</th>
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
                        <th><?php echo $st->subj_code?></th>
                    <?php }?>
                </tr>
                <?php foreach($student as $st) { ?>
                <tr>
                    <td><?php
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
                    <td><?php echo $q->finalgrade;?> </td>
                    <?php }?>
                </tr>
                <?php }?>
            </table>
            <br><br>
            <button id="print_data" class="btn btn-success btn-print btn-rounded" onClick = "this.style.visibility= 'hidden';">
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
                    <?php }else{

                      
                    }?>
 