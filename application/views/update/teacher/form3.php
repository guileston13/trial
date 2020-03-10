<!DOCTYPE html>
<html>
<head>
  <title>School form 3</title>

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
  border: 1px solid #1e4f8e;
  text-align: left;
  padding: 8px;
  color: black;

}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
  <div class="container-fluid" id="print_container">
     <h3 class="text-center">School Form 3 (SF3) Books Issued and Returned</h3>
     <br><br>
    
    <div class="row">

      <div class="col-md-3 offset-3">
          <div class="input-group form-inline">
            <label for="" class="form-control-label mr-2">School ID:</label>
            <input class="form-control-sm" type="hidden" name=""  value="<?php echo $form3?$form3[0]->school_id:null?>">
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
            <label for="" class="form-control-label mr-2">School Name:</label>
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
    <!--  -->
    <!-- <table class="my-5 table table-bordered">
      <thead>
        <tr>
            <th rowspan="3">LEARNER'S NAME (Last Name, First Name, Middle Name)</th>
            <?php foreach($students as $st){?>
              <?php 
              $qu = $this->db->query("SELECT * from tbl_bookborrowed,tbl_book,tbl_subject
                                            where student_id = '$st->studentid'
                                            AND tbl_book.book_id = tbl_bookborrowed.book_id
                                            AND tbl_subject.subj_id = tbl_book.subj_id")->result(); 
            foreach($qu as $q){?>
            <th colspan="2"> <?php echo $q->subj_code?> </th>
            <?php }?>
            <?php }?>
            
            <th rowspan="3" colspan="10">REMARK/ACTION TAKEN          (Please refer to the legend on last page)</th>
        </tr>
      </thead>
      <tbody>
     
         <tr style="text-align: center">
          <td></td>
          <td colspan="2">Date</td>
        
      </tr>
      <tr>
        <td></td>
        <td>Issued</td>
        <td>Returned</td>
      
      </tr>
      <?php foreach($students as $st){?>
      <tr>
        <td ><?php echo $st->firstname.' '.$st->lastname?></td>
        <?php 
           $qu = $this->db->query("SELECT * from tbl_bookborrowed where student_id = '$st->studentid'")->result(); 
        foreach($qu as $q){?>
        <td>
        <?php echo
          date("d-m-Y", strtotime($q->date));
        ?>
        </td>
        <td><?php echo $q->date_return?></td>
        <?php }?>
        
        
      </tr>
      <?php }?>
      </tbody>
    </table> -->
    <br><br>
    <table>

    
      <tr>
              <th  rowspan="2" >#</th>
              <th  rowspan="2" >Learner's Name</th>
          <?php foreach($subjects as $subj){?> 
              <th colspan=2 ><?php echo $subj->subj_code?></th>
          <?php }?>
      </tr>
    
      <tr>
              
          <?php foreach($subjects as $subj){?> 
              <th >Issued</th>
              <th >Returned</th>
          <?php }?>
      </tr> 
        <?php $num = 1; foreach($students as $st){ ?>
      <tr>    
              <td > <?php echo $num; $num++;?></td>
              <td ><?php echo $st->firstname ?> <?php echo $st->lastname ?></td>
          <?php foreach($subjects as $subj){?>
          <?php $select_borrowed_id = $this->db->query("SELECT * from tbl_bookborrowed where subj_id = '$subj->subj_id' AND student_id = '$st->studentid' ")->result();?>
              <td ><?php echo $select_borrowed_id?$select_borrowed_id[0]->date:null; ?></td>
              <td ><?php echo $select_borrowed_id?$select_borrowed_id[0]->date_return:null; ?></td>
          <?php }?>
      </tr>
        <?php }?>

    </table>
    <br><br>

              <div class="row mb-3">
                    <div class="col-md-4">
                        <div class="row">
                            <div class="col-md-4">
                                 <label class="form-control-sm" for="" class="form-control-label mr-2">Prepared and Submitted by:</label>
                            </div>
                            <div class="col-md-8">
                                <input style="text-decoration: underline; color: black" class="form-control " type="text" name="" class="w-100">
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

