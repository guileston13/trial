<!DOCTYPE html>
<html>
<head>
    <title>School form 2</title>
    <link href="<?php echo base_url(); ?>/assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Icons -->
    <link href="<?php echo base_url(); ?>/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="<?php echo base_url(); ?>/assets/css/argon.css?v=1.0.0" rel="stylesheet">
    <link type="text/css" href="<?php echo base_url(); ?>/assets/css/custom_css.css" rel="stylesheet">
    
   <link rel="icon" type="image/png" href="<?php echo base_url()?>assets3/img/logo-transparent-sm.png">
       <style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  border-radius: 100px;
}

td, th {
  border: 1px solid #1e4f8e !important;
  text-align: left;
  padding: 8px;
  color: black;

}
th{
  text-align: center;
}
input{
    border: none;
    border-bottom: 1px solid black;
    text-align: center;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
  <div class="container-fluid" id="print_container">
    <h3 class="text-center">School Form 2 (SF2) Daily Attendance Report of Learners</h3>
    <br><br>
    
    <div class="row">
      <div class="col-md-3 offset-1">
        <div class="input-group form-inline">
          <label for="" class="form-control-label mr-2">School ID:</label>
          <input  type="text" value="<?php echo $form2?$form2[0]->school_id:null ?>" name="">
        </div>  
      </div>
      <div class="col-md-3">
        <div class="input-group form-inline">
          <label for="" class="form-control-label mr-2">School Year:</label>
          <input  type="text" value="<?php echo $info?$info[0]->schoolyear_start:null;?>" name="">
        </div>  
      </div>
      <div class="col-md-4">
        <div class="input-group form-inline">
          <label for="" class="form-control-label mr-2">Report of the Month of:</label>
          <input  type="text" name="">
        </div> 
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-md-4 offset-1">
            <div class="input-group form-inline">
                <label for="" class="form-control-label mr-2">Name of School:</label>
                <input  type="text" class="w-50" name="" value="<?php echo $form2?$form2[0]->school_name:null ?>">
            </div>  
      </div>
      <div class="col-md-3">
            <div class="input-group form-inline">
                <label for="" class="form-control-label mr-2">Grade Level:</label>
                <input  type="text" name="" value="<?php echo $top_info?$top_info[0]->grade_level:null ?>" >
            </div> 
      </div>
      <div class="col-md-3">
            <div class="input-group form-inline">
                <label for="" class="form-control-label mr-2">Section:</label>
                <input  type="text" name=""  value="<?php echo $top_info?$top_info[0]->section_name:null ?>">
            </div> 
      </div>
  </div>
  <?php if($students){?>
    <table class="my-5 table table-bordered">
      <?php  $st = $students[0]->studentid;
        $q = $this->db->query("SELECT * from tbl_attendance where studentid = '$st'")->result();
        $i = 0;
        foreach($q as $qu){
          $i++;
        }
        $subj_id = $this->uri->segment(5);
                    $section_id = $this->uri->segment(4);
        $as = $this->db->query("SELECT * from tbl_attendance where studentid = '$st' AND subj_id = '$subj_id' AND section_id  ='$section_id' ")->result();
        $a = 0;
        foreach($as as $qa){
          $a++;
        }
        
        ?>
        <thead class="text-center">
            <tr>
                <th rowspan="3"  ><h5>LEARNER'S NAME </th></h5>
                <th colspan="<?php echo $a;?>"><h5>(1st row for date, 2nd row for Day: M,T,W,TH,F)</th></h5> 
                <th colspan="2"><h5>Total for the month</th></h5>
                <th colspan="1"><h5>REMARK/S</th></h5>
            </tr>
        </thead>
  
        <tbody>
              <tr>
              
              <td></td>
                <?php 
                    $subj_id = $this->uri->segment(5);
                    $section_id = $this->uri->segment(4);
                    
                    $st = $students[0]->studentid;
                    $q = $this->db->query("SELECT * from tbl_attendance where studentid = '$st' AND subj_id = '$subj_id' AND section_id  ='$section_id' ")->result();?>
                <?php $Pa=0 ; $A=0; $La=0; foreach($q as $key){ ?>
                <td >
                  <?php echo date("F-d-Y", strtotime(  $key->date_attendance ))?>
                </td>
                
                <?php }?>
                <td></td>
               <td></td>
               <td></td>
              </tr>

              <tr>
                  <td></td>
                <?php 
                    $st = $students[0]->studentid;
                    $q = $this->db->query("SELECT * from tbl_attendance where studentid = '$st' AND subj_id = '$subj_id' AND section_id  ='$section_id'")->result();?>
                <?php $Pa=0 ; $A=0; $La=0; foreach($q as $key){?>
                <td colspan="1"><h5>
                  <?php echo date("l", strtotime(  $key->date_attendance ))?>
                </td></h5>
                <?php }?>
                <td><h5>ABSENT</td></h5>
                <td><h5>TARDY</td></h5>
                <td></td>
              </tr>
              <?php foreach($students as $st){ ?>
              <tr>
                <td style="padding: 15px;border: 1px solid #1e4f8e;text-align: left;padding: 8px;"><?php echo $st->firstname.' '.$st->lastname?></td>
                   <?php $q = $this->db->query("SELECT * from tbl_attendance where studentid = '$st->studentid' AND subj_id = '$subj_id' AND section_id  ='$section_id' ")->result();?>
                  <?php $Pa=0 ; $A=0; $La=0; foreach($q as $key){?>
                <td>
                    <?php if($key->status==1){ 
                          echo $P = "P"; $Pa++; 
                    }else if($key->status==2){ 
                          echo $Aa = "A"; $A++ ; 
                    }else if($key->status==3){ 
                          echo $L = "L";   $La++;
                    }?>
                </td>
                  <?php }?>
                  <td><?php echo $A?></td>
                  <td><?php echo $La?></td> 
                  <td></td>
              </tr>
             <?php }?> 
        </tbody>
    </table>
  <?php }else{ ?>
    <hr>
    <br><br><br>
    <h4>Empty</h4>
    <br><br><br>
    <hr>
  <?php }?>
      <br><br>
              <div class="row">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-2">
                                 <label class="form-control-sm" for="" class="form-control-label mr-2">Prepared by:</label>
                            </div>
                            <div class="col-md-4">
                                <input   type="text" name="" size="30"  >
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-2">
                                 <label class="form-control-sm" for="" class="form-control-label mr-2">Certified by:</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="" size="30">
                            </div>
                        </div>
                    </div>  
              </div> 

            <br><br><br>
                <button id="print_data" class="btn btn-success btn-print btn-rounded" onClick = "this.style.visibility= 'hidden';">
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

