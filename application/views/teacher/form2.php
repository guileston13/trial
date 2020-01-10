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
</head>
<body>
  <div class="container-fluid" id="print_container">
    <h3 class="text-center">School Form 2 (SF2) Daily Attendance Report of Learners</h3>
    
    <div class="row">
      <div class="col-md-3 offset-1">
        <div class="input-group form-inline">
          <label for="" class="form-control-label mr-2">School ID:</label>
          <input type="text" value="<?php echo $info?$info[0]->schoolyear_start:null;?>" name="">
        </div>  
      </div>
      <div class="col-md-3">
        <div class="input-group form-inline">
          <label for="" class="form-control-label mr-2">School Year:</label>
          <input type="text" value="<?php echo $info?$info[0]->schoolyear_start:null;?>" name="">
        </div>  
      </div>
      <div class="col-md-4">
        <div class="input-group form-inline">
          <label for="" class="form-control-label mr-2">Report of the Month of:</label>
          <input type="text" name="">
        </div> 
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-md-4 offset-1">
            <div class="input-group form-inline">
                <label for="" class="form-control-label mr-2">Name of School:</label>
                <input type="text" class="w-50" name="" value="<?php echo $form2?$form2[0]->school_name:null ?>">
            </div>  
      </div>
      <div class="col-md-3">
            <div class="input-group form-inline">
                <label for="" class="form-control-label mr-2">Grade Level:</label>
                <input type="text" name="" value="<?php echo $top_info?$top_info[0]->grade_level:null ?>" >
            </div> 
      </div>
      <div class="col-md-3">
            <div class="input-group form-inline">
                <label for="" class="form-control-label mr-2">Section:</label>
                <input type="text" name=""  value="<?php echo $top_info?$top_info[0]->section_name:null ?>">
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
        
        ?>
        <thead class="text-center">
            <tr>
                <th rowspan="3">LEARNER'S NAME (Last Name, First Name, Middle Name)</th>
                <th rowspan="1" colspan="<?php echo $i;?>">(1st row for date, 2nd row for Day: M,T,W,TH,F)</th>    
                <th rowspan="2" colspan="">Total for the month</th> 
                <th rowspan="3" colspan="">REMARK/S (If DROPPED OUT, state reason, please refer to legend number 2.</th>
            </tr>
        </thead>
  
        <tbody>
              <tr>
              
              <td></td>
                <?php 
                    $st = $students[0]->studentid;
                    $q = $this->db->query("SELECT * from tbl_attendance where studentid = '$st'")->result();?>
                <?php $Pa=0 ; $A=0; $La=0; foreach($q as $key){?>
                <td>
                  <?php echo date("m-d-Y", strtotime(  $key->date_attendance ))?>
                </td>
                
                <?php }?>
                <td></td><td></td>
              </tr>

              <tr>
                  <td></td>
                <?php 
                    $st = $students[0]->studentid;
                    $q = $this->db->query("SELECT * from tbl_attendance where studentid = '$st'")->result();?>
                <?php $Pa=0 ; $A=0; $La=0; foreach($q as $key){?>
                <td>
                  <?php echo date("l", strtotime(  $key->date_attendance ))?>
                </td>
                <?php }?>
                <td>ABSENT</td>
                <td>TARDY</td>
              </tr>
              <?php foreach($students as $st){ ?>
              <tr>
                <td><?php echo $st->firstname.' '.$st->lastname?></td>
                   <?php $q = $this->db->query("SELECT * from tbl_attendance where studentid = '$st->studentid'")->result();?>
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
                  <td>a</td>
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
    <div class="row mb-3">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-5">
                     <label for="" class="form-control-label mr-2">Prepared and Submitted by:</label>
                </div>
                <div class="col-md-5">
                    <input type="text" name="" class="w-100">
                </div>
            </div>
        </div> 
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-5">
                    <label for="" class="form-control-label mr-2">Reviewed & Validated by:</label>
                </div>
                <div class="col-md-5">
                    <input type="text" name="" class="w-100">
                </div>
            </div> 
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-5">
                    <label for="" class="form-control-label mr-2">Noted by:</label>
                </div>
                <div class="col-md-5">
                    <input type="text" name="" class="w-100">
                </div>
            </div>  
        </div>
    </div>

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

