<!DOCTYPE html>
<html>
<head>
    <title>School form 6</title>
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
  margin:2% 0%;
}

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  border-radius: 100px;
}

td, th {
  border: 1px solid #1e4f8e;
  padding: 4px;
  color: black;

}
th{
  color: white;
  background-color: dodgerblue;
  text-align: center;
}
input{
    border: none;
    border-bottom: 1px solid black;
    text-align: center;
}
h2{
  color: black
}

tr:nth-child(odd) {
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
     <h2 class="text-center">School Form 6 (SF6) Summarized Report on Promotion <br> and Level of Proficiency</h2>
     <div class="row ">
       <div class="col-md-4 ">
          <div class="input-group form-inline">
            <label for="" class="form-control-label mr-2">School ID:</label>
            <input  type="text" name="" value="<?php echo $form6[0]->school_id?>">
          </div> 
       </div>
       <div class="col-md-4">
           <div class="input-group form-inline">
            <label mr-2">Region:</label>
            <input  type="text" name="" value="<?php echo $form6[0]->region?>" >
          </div> 
       </div>
       <div class="col-md-4">
          <div class="input-group form-inline">
            <label mr-2">Division:</label>
            <input  type="text" name="" value="<?php echo $form6[0]->division?>" >
          </div> 
       </div>
     </div>
     <div class="row ">
       <div class="col-md-4 ">
          <div class="input-group form-inline">
            <label mr-2">School Name:</label>
            <input  type="text" name="" value="<?php echo $form6[0]->school_name?>">
          </div> 
       </div>
       <div class="col-md-4">
           <div class="input-group form-inline">
            <label mr-2">District:</label>
            <input  type="text" name="" value="<?php echo $form6[0]->district?>" >
          </div>  
       </div>
       <div class="col-md-4">
          <div class="input-group form-inline">
            <label mr-2">School Year: </label>
            <input  type="text" value="<?php echo $school_year[0]->schoolyear_start; ?>" name="">
          </div> 
       </div>
     </div>
     <br><br>
<table>
  <thead>
  <tr >
    <th rowspan="2" >SUMMARY TABLE</th>
    <th colspan="3" >Grade 7</th>  
    <th colspan="3" >Grade 8</th>  
    <th colspan="3 " >Grade 9</th> 
    <th colspan="3 " >Grade 10</th> 
  </tr>
  <tr>
    
    <th style="background-color: #364f6b">MALE</th>
    <th style="background-color: #3fc1c9">FEMALE</th>
    <th style="background-color: lightcoral">TOTAL</th>
    <th style="background-color: #364f6b">MALE</th>
    <th style="background-color: #3fc1c9">FEMALE</th>
    <th style="background-color: lightcoral">TOTAL</th>
    <th style="background-color: #364f6b">MALE</th>
    <th style="background-color: #3fc1c9">FEMALE</th>
    <th style="background-color: lightcoral">TOTAL</th>
    <th style="background-color: #364f6b">MALE</th>
    <th style="background-color: #3fc1c9">FEMALE</th>
    <th style="background-color: lightcoral">TOTAL</th>
 </tr>
</thead>
<tbody>
    <tr>
      <td >PROMOTED</td>
      <!-- PROMOTED Grade 7-->
      <td >
        <?php 
        $male_total_promoted_seven = 0;
        foreach($male_seven as $prom){
          if($prom->nude <= 100 && $prom->nude >= 75 ){
            // $re =  count($prom->nude);
            $male_total_promoted_seven++;
          }
        } echo $male_total_promoted_seven; ?>
      </td>
      <td >
        <?php   
        $female_total_promoted_seven = 0;
        foreach($female_seven as $prom){
          if($prom->nude <= 100 && $prom->nude >= 75 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $female_total_promoted_seven++;
          }
        } echo $female_total_promoted_seven; ?>
      </td>
      <td ><?php echo $female_total_promoted_seven + $male_total_promoted_seven;?></td>
      <!-- PROMOTED -->
      <!-- PROMOTED Grade 8-->
      <td >
        <?php 
          $male_total_promoted_eight = 0;
          foreach($male_eight as $prom){
            if($prom->nude <= 100 && $prom->nude >= 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_eight++;
            }
          } echo $male_total_promoted_eight; ?>
        </td>
      <td >
        <?php 
          $female_total_promoted_eight = 0;
          foreach($female_eight as $prom){
            if($prom->nude <= 100 && $prom->nude >= 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_eight++;
            }
          } echo $female_total_promoted_eight; ?>
      </td>
      <td ><?php echo $female_total_promoted_eight + $male_total_promoted_eight;?></td>
      <!-- PROMOTED -->
      <!-- PROMOTED Grade 9-->
      <td >
        <?php 
          $male_total_promoted_nine = 0;
          foreach($male_nine as $prom){
            if($prom->nude <= 100 && $prom->nude >= 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_nine++;
            }
          } echo $male_total_promoted_nine; ?>
      </td>
      <td >
        <?php 
            $female_total_promoted_nine = 0;
            foreach($female_nine as $prom){
              if($prom->nude <= 100 && $prom->nude >= 75 ){
                $prom->nude;
                // $re =  count($prom->nude);
                $female_total_promoted_nine++;
              }
            } echo $female_total_promoted_nine; ?>
      </td>
      <td ><?php echo $female_total_promoted_nine + $male_total_promoted_nine;?></td>
      <!-- PROMOTED -->
      <!-- PROMOTED Grade 10-->
      <td >
        <?php 
          $male_total_promoted_ten = 0;
          foreach($male_ten as $prom){
            if($prom->nude <= 100 && $prom->nude >= 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_ten++;
            }
          } echo $male_total_promoted_ten; ?>
      </td>
      <td >
      <?php 
          $female_total_promoted_ten = 0;
          foreach($female_ten as $prom){
            if($prom->nude <= 100 && $prom->nude >= 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_ten++;
            }
          } echo $female_total_promoted_ten; ?>
      </td>
      <td ><?php echo $female_total_promoted_ten + $male_total_promoted_ten;?></td>
      <!-- PROMOTED -->
   
    </tr>
    <tr>
      <td >IRREGULAR</td>
      <!-- IRREGULAR Grade 7 -->
      <td >
        <?php 
          $male_total_promoted_seven = 0;
          foreach($male_seven as $prom){
            if($prom->nude < 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_seven++;
            }
          } echo $male_total_promoted_seven; ?>
      </td>
      <td >
        <?php 
          $female_total_promoted_seven = 0;
          foreach($female_seven as $prom){
            if($prom->nude < 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_seven++;
            }
          } echo $female_total_promoted_seven; ?>
      </td>
      <td ><?php echo $female_total_promoted_seven + $male_total_promoted_seven;?></td>
      <!-- IRREGULAR -->
      <!-- IRREGULAR Grade 8 -->
      <td >
        <?php 
          $male_total_promoted_eight = 0;
          foreach($male_eight as $prom){
            if($prom->nude < 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_eight++;
            }
          } echo $male_total_promoted_eight; ?>
      </td>
      <td >
        <?php 
          $female_total_promoted_eight = 0;
          foreach($female_eight as $prom){
            if($prom->nude < 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_eight++;
            }
          } echo $female_total_promoted_eight; ?>
      </td>
      <td ><?php echo $female_total_promoted_eight + $male_total_promoted_eight;?></td>
      <!-- IRREGULAR -->
      <!-- IRREGULAR grade 9 -->
      <td >
        <?php 
          $male_total_promoted_nine = 0;
          foreach($male_nine as $prom){
            if($prom->nude < 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_nine++;
            }
          } echo $male_total_promoted_nine; ?>
      </td>
      <td >
        <?php 
          $female_total_promoted_nine = 0;
          foreach($female_nine as $prom){
            if($prom->nude < 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_nine++;
            }
          } echo $female_total_promoted_nine; ?>
      </td>
      <td ><?php echo $female_total_promoted_nine + $male_total_promoted_nine;?></td>
      <!-- IRREGULAR -->
      <!-- IRREGULAR Grade 10 -->
      <td >
        <?php 
          $male_total_promoted_ten = 0;
          foreach($male_ten as $prom){
            if($prom->nude < 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_ten++;
            }
          } echo $male_total_promoted_ten; ?>
      </td>
      <td >
        <?php 
          $female_total_promoted_ten = 0;
          foreach($female_ten as $prom){
            if($prom->nude < 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_ten++;
            }
          } echo $female_total_promoted_ten; ?>
      </td>
      <td ><?php echo $female_total_promoted_ten + $male_total_promoted_ten;?></td>
      <!-- IRREGULAR -->
      
    </tr>
    <tr>
      <td >RETAINED</td>
      <!-- RETAINED Grade 7 -->
      <td >
        <?php 
          $male_total_promoted_seven = 0;
          foreach($male_seven as $prom){
            if($prom->nude < 60 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_seven++;
            }
          } echo $male_total_promoted_seven; ?>
      </td>
      <td >
        <?php 
          $female_total_promoted_seven = 0;
          foreach($female_seven as $prom){
            if($prom->nude < 60 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_seven++;
            }
          } echo $female_total_promoted_seven; ?>
      </td>
      <td ><?php echo $female_total_promoted_seven + $male_total_promoted_seven;?></td>
      <!-- RETAINED -->
      <!-- RETAINED Grade 8 -->
      <td >
        <?php 
          $male_total_promoted_eight = 0;
          foreach($male_eight as $prom){
            if($prom->nude < 60 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_eight++;
            }
          } echo $male_total_promoted_eight; ?>
      </td>
      <td >
        <?php 
          $female_total_promoted_eight = 0;
          foreach($female_eight as $prom){
            if($prom->nude < 60 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_eight++;
            }
          } echo $female_total_promoted_eight; ?>
      </td>
      <td ><?php echo $female_total_promoted_eight + $male_total_promoted_eight;?></td>
      <!-- RETAINED -->
      <!-- RETAINED grade 9 -->
      <td >
        <?php 
          $male_total_promoted_nine = 0;
          foreach($male_nine as $prom){
            if($prom->nude < 60 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_nine++;
            }
          } echo $male_total_promoted_nine; ?>
      </td>
      <td >
        <?php 
          $female_total_promoted_nine = 0;
          foreach($female_nine as $prom){
            if($prom->nude < 60 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_nine++;
            }
          } echo $female_total_promoted_nine; ?>
      </td>
      <td ><?php echo $female_total_promoted_nine + $male_total_promoted_nine;?></td>
      <!-- RETAINED -->
      <!-- RETAINED Grade 10 -->
      <td >
        <?php 
          $male_total_promoted_ten = 0;
          foreach($male_ten as $prom){
            if($prom->nude < 60 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_ten++;
            }
          } echo $male_total_promoted_ten; ?>
      </td>
      <td >
        <?php 
          $female_total_promoted_ten = 0;
          foreach($female_ten as $prom){
            if($prom->nude < 60 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_ten++;
            }
          } echo $female_total_promoted_ten; ?>
      </td>
      <td ><?php echo $female_total_promoted_ten + $male_total_promoted_ten;?></td>
      <!-- RETAINED -->
    </tr>

   <tr>
    <td >LEVEL OF PROFICIENCY </td>
   <!-- <td></td>
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
    <td></td>
  <td></td>
    <td></td>
    <td></td>
      <td></td>
    <td></td>
    <td></td></td> -->
  </tr>
  <tr>
    <td >Nos. of BEGINNING              (B: 74% and below) </td>
    <!-- NO of Begginning Grade 7 -->
    <td >
        <?php 
          $male_total_promoted_seven = 0;
          foreach($male_seven as $prom){
            if($prom->nude < 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_seven++;
            }
          } echo $male_total_promoted_seven; ?>
      </td>
      <td >
        <?php 
          $female_total_promoted_seven = 0;
          foreach($female_seven as $prom){
            if($prom->nude < 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_seven++;
            }
          } echo $female_total_promoted_seven; ?>
      </td>
      <td ><?php echo $female_total_promoted_seven + $male_total_promoted_seven;?></td>
      <!-- IRREGULAR -->
    <!-- NO of Begginning Grade 8 -->
    <td >
        <?php 
          $male_total_promoted_eight = 0;
          foreach($male_eight as $prom){
            if($prom->nude < 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_eight++;
            }
          } echo $male_total_promoted_eight; ?>
      </td>
      <td >
        <?php 
          $female_total_promoted_eight = 0;
          foreach($female_eight as $prom){
            if($prom->nude < 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_eight++;
            }
          } echo $female_total_promoted_eight; ?>
      </td>
      <td ><?php echo $female_total_promoted_eight + $male_total_promoted_eight;?></td>
      <!-- IRREGULAR -->
      <!-- NO of Begginning Grade 9 -->
    <td >
        <?php 
          $male_total_promoted_nine = 0;
          foreach($male_nine as $prom){
            if($prom->nude < 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_nine++;
            }
          } echo $male_total_promoted_nine; ?>
      </td>
      <td >
        <?php 
          $female_total_promoted_nine = 0;
          foreach($female_nine as $prom){
            if($prom->nude < 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_nine++;
            }
          } echo $female_total_promoted_nine; ?>
      </td>
      <td ><?php echo $female_total_promoted_nine + $male_total_promoted_nine;?></td>
      <!-- IRREGULAR -->
      <!-- NO of Begginning Grade 10 -->
    <td >
        <?php 
          $male_total_promoted_ten = 0;
          foreach($male_ten as $prom){
            if($prom->nude < 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_ten++;
            }
          } echo $male_total_promoted_ten; ?>
      </td>
      <td >
        <?php 
          $female_total_promoted_ten = 0;
          foreach($female_ten as $prom){
            if($prom->nude < 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_ten++;
            }
          } echo $female_total_promoted_ten; ?>
      </td>
      <td ><?php echo $female_total_promoted_ten + $male_total_promoted_ten;?></td>
    
      
      <!-- IRREGULAR -->
      
  </tr>
  <tr>
    <td >Nos. of DEVELOPING        (D: 75%-79%) </td>
    <!--Nos. of DEVELOPING Grade 7 -->
    <td >
        <?php 
          $male_total_promoted_seven = 0;
          foreach($male_seven as $prom){
            if($prom->nude < 80 && $prom->nude >= 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_seven++;
            }
          } echo $male_total_promoted_seven; ?>
    </td>
    <td >
        <?php 
          $female_total_promoted_seven = 0;
          foreach($female_seven as $prom){
            if($prom->nude < 80 && $prom->nude >= 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_seven++;
            }
          } echo $female_total_promoted_seven; ?>
    </td>
    <td ><?php echo $female_total_promoted_seven + $male_total_promoted_seven;?></td>
      <!-- IRREGULAR -->
    <!--Nos. of DEVELOPING Grade 8 -->
    <td >
        <?php 
          $male_total_promoted_eight = 0;
          foreach($male_eight as $prom){
            if($prom->nude < 80 && $prom->nude >= 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_eight++;
            }
          } echo $male_total_promoted_eight; ?>
    </td>
    <td >
        <?php 
          $female_total_promoted_eight = 0;
          foreach($female_eight as $prom){
            if($prom->nude < 80 && $prom->nude >= 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_eight++;
            }
          } echo $female_total_promoted_eight; ?>
    </td>
    <td ><?php echo $female_total_promoted_eight + $male_total_promoted_eight;?></td>
      <!-- IRREGULAR -->
    <!--Nos. of DEVELOPING Grade 9 -->
    <td >
        <?php 
          $male_total_promoted_nine = 0;
          foreach($male_nine as $prom){
            if($prom->nude < 80 && $prom->nude >= 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_nine++;
            }
          } echo $male_total_promoted_nine; ?>
    </td>
    <td >
        <?php 
          $female_total_promoted_nine = 0;
          foreach($female_nine as $prom){
            if($prom->nude < 80 && $prom->nude >= 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_nine++;
            }
          } echo $female_total_promoted_nine; ?>
    </td>
    <td ><?php echo $female_total_promoted_nine + $male_total_promoted_nine;?></td>
      <!-- IRREGULAR -->
    <!--Nos. of DEVELOPING Grade ten -->
    <td >
        <?php 
          $male_total_promoted_ten = 0;
          foreach($male_ten as $prom){
            if($prom->nude < 80 && $prom->nude >= 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_ten++;
            }
          } echo $male_total_promoted_ten; ?>
    </td>
    <td >
        <?php 
          $female_total_promoted_ten = 0;
          foreach($female_ten as $prom){
            if($prom->nude < 80 && $prom->nude >= 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_ten++;
            }
          } echo $female_total_promoted_ten; ?>
    </td>
    <td ><?php echo $female_total_promoted_ten + $male_total_promoted_ten;?></td>
      <!-- IRREGULAR -->
  </tr>
  <tr>
    <td >Nos. of APPROACHING PROFICIENCY                         (AP: 80%-84%)</td>
   <!--Nos. of APPROACHING PROFICIENCY Grade 7 -->
   <td >
      <?php 
        $male_total_promoted_seven = 0;
        foreach($male_seven as $prom){
          if($prom->nude < 85 && $prom->nude >= 80 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $male_total_promoted_seven++;
          }
        } echo $male_total_promoted_seven; ?>
    </td>
    <td >
      <?php 
        $female_total_promoted_seven = 0;
        foreach($female_seven as $prom){
          if($prom->nude < 85 && $prom->nude >= 80 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $female_total_promoted_seven++;
          }
        } echo $female_total_promoted_seven; ?>
    </td>
    <td ><?php echo $female_total_promoted_seven + $male_total_promoted_seven;?></td>
      <!-- IRREGULAR -->
    <!--Nos. of APPROACHING PROFICIENCY Grade 8 -->
   <td >
      <?php 
        $male_total_promoted_eight = 0;
        foreach($male_eight as $prom){
          if($prom->nude < 85 && $prom->nude >= 80 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $male_total_promoted_eight++;
          }
        } echo $male_total_promoted_eight; ?>
    </td>
    <td >
      <?php 
        $female_total_promoted_eight = 0;
        foreach($female_eight as $prom){
          if($prom->nude < 85 && $prom->nude >= 80 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $female_total_promoted_eight++;
          }
        } echo $female_total_promoted_eight; ?>
    </td>
    <td ><?php echo $female_total_promoted_eight + $male_total_promoted_eight;?></td>
      <!-- IRREGULAR -->
    <!--Nos. of APPROACHING PROFICIENCY Grade 9 -->
   <td >
      <?php 
        $male_total_promoted_nine = 0;
        foreach($male_nine as $prom){
          if($prom->nude < 85 && $prom->nude >= 80 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $male_total_promoted_nine++;
          }
        } echo $male_total_promoted_nine; ?>
    </td>
    <td >
      <?php 
        $female_total_promoted_nine = 0;
        foreach($female_nine as $prom){
          if($prom->nude < 85 && $prom->nude >= 80 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $female_total_promoted_nine++;
          }
        } echo $female_total_promoted_nine; ?>
    </td>
    <td ><?php echo $female_total_promoted_nine + $male_total_promoted_nine;?></td>
      <!-- IRREGULAR -->  
    <!--Nos. of APPROACHING PROFICIENCY Grade 10 -->
   <td >
      <?php 
        $male_total_promoted_ten = 0;
        foreach($male_ten as $prom){
          if($prom->nude < 85 && $prom->nude >= 80 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $male_total_promoted_ten++;
          }
        } echo $male_total_promoted_ten; ?>
    </td>
    <td >
      <?php 
        $female_total_promoted_ten = 0;
        foreach($female_ten as $prom){
          if($prom->nude < 85 && $prom->nude >= 80 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $female_total_promoted_ten++;
          }
        } echo $female_total_promoted_ten; ?>
    </td>
    <td ><?php echo $female_total_promoted_ten + $male_total_promoted_ten;?></td>
      <!-- IRREGULAR -->
  </tr>
  <tr>
    <td >Nos. of PROFICIENT (P: 85% -89%) </td>
    <!--Nos. of PROFICIENT P: 85% -89% Grade 7 -->
   <td >
      <?php 
        $male_total_promoted_seven = 0;
        foreach($male_seven as $prom){
          if($prom->nude < 90 && $prom->nude >= 85 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $male_total_promoted_seven++;
          }
        } echo $male_total_promoted_seven; ?>
    </td>
    <td >
      <?php 
        $female_total_promoted_seven = 0;
        foreach($female_seven as $prom){
          if($prom->nude < 90 && $prom->nude >= 85 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $female_total_promoted_seven++;
          }
        } echo $female_total_promoted_seven; ?>
    </td>
    <td > <?php echo $female_total_promoted_seven + $male_total_promoted_seven;?></td>
      <!-- IRREGULAR -->
    <!--Nos. of PROFICIENT P: 85% -89% Grade 8 -->
    <td >
      <?php 
        $male_total_promoted_eight = 0;
        foreach($male_eight as $prom){
          if($prom->nude < 90 && $prom->nude >= 85 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $male_total_promoted_eight++;
          }
        } echo $male_total_promoted_eight; ?>
    </td>
    <td >
      <?php 
        $female_total_promoted_eight = 0;
        foreach($female_eight as $prom){
          if($prom->nude < 90 && $prom->nude >= 85 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $female_total_promoted_eight++;
          }
        } echo $female_total_promoted_eight; ?>
    </td>
    <td ><?php echo $female_total_promoted_eight + $male_total_promoted_eight;?></td>
      <!-- IRREGULAR -->
    <!--Nos. of PROFICIENT P: 85% -89% Grade 9 -->
   <td >
      <?php 
        $male_total_promoted_nine = 0;
        foreach($male_nine as $prom){
          if($prom->nude < 90 && $prom->nude >= 85 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $male_total_promoted_nine++;
          }
        } echo $male_total_promoted_nine; ?>
    </td>
    <td >
      <?php 
        $female_total_promoted_nine = 0;
        foreach($female_nine as $prom){
          if($prom->nude < 90 && $prom->nude >= 85 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $female_total_promoted_nine++;
          }
        } echo $female_total_promoted_nine; ?>
    </td>
    <td ><?php echo $female_total_promoted_nine + $male_total_promoted_nine;?></td>
      <!-- IRREGULAR -->
    <!--Nos. of PROFICIENT P: 85% -89% Grade 10 -->
   <td >
      <?php 
        $male_total_promoted_ten = 0;
        foreach($male_ten as $prom){
          if($prom->nude < 90 && $prom->nude >= 85 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $male_total_promoted_ten++;
          }
        } echo $male_total_promoted_ten; ?>
    </td>
    <td >
      <?php 
        $female_total_promoted_ten = 0;
        foreach($female_ten as $prom){
          if($prom->nude < 90 && $prom->nude >= 85 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $female_total_promoted_ten++;
          }
        } echo $female_total_promoted_ten; ?>
    </td>
    <td ><?php echo $female_total_promoted_ten + $male_total_promoted_ten;?></td>
      <!-- IRREGULAR -->
  </tr>
  <tr>
    <td >Nos. of ADVANCED                (A: 90%  and above) </td>
    <!--Nos. of ADVANCED  P: 90% Grade 7 -->
    <td >
      <?php 
        $male_total_promoted_seven = 0;
        foreach($male_seven as $prom){
          if($prom->nude >= 90 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $male_total_promoted_seven++;
          }
        } echo $male_total_promoted_seven; ?>
    </td>
    <td >
      <?php 
        $female_total_promoted_seven = 0;
        foreach($female_seven as $prom){
          if($prom->nude >= 90 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $female_total_promoted_seven++;
          }
        } echo $female_total_promoted_seven; ?>
    </td>
    <td ><?php echo $female_total_promoted_seven + $male_total_promoted_seven;?></td>
      <!-- IRREGULAR -->
    <!--Nos. of ADVANCED  P: 90% Grade 8 -->
    <td >
      <?php 
        $male_total_promoted_eight = 0;
        foreach($male_eight as $prom){
          if($prom->nude >= 90 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $male_total_promoted_eight++;
          }
        } echo $male_total_promoted_eight; ?>
    </td>
    <td >
      <?php 
        $female_total_promoted_eight = 0;
        foreach($female_eight as $prom){
          if($prom->nude <= 90 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $female_total_promoted_eight++;
          }
        } echo $female_total_promoted_eight; ?>
    </td>
    <td ><?php echo $female_total_promoted_eight + $male_total_promoted_eight;?></td>
      <!-- IRREGULAR -->
     <!--Nos. of ADVANCED  P: 90% Grade 9 -->
     <td >
      <?php 
        $male_total_promoted_nine = 0;
        foreach($male_nine as $prom){
          if($prom->nude >= 90 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $male_total_promoted_nine++;
          }
        } echo $male_total_promoted_nine; ?>
    </td>
    <td >
      <?php 
        $female_total_promoted_nine = 0;
        foreach($female_nine as $prom){
          if($prom->nude <= 90 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $female_total_promoted_nine++;
          }
        } echo $female_total_promoted_nine; ?>
    </td>
    <td ><?php echo $female_total_promoted_nine + $male_total_promoted_nine;?></td>
      <!-- IRREGULAR -->
     <!--Nos. of ADVANCED  P: 90% Grade 10 -->
     <td >
      <?php 
        $male_total_promoted_ten = 0;
        foreach($male_ten as $prom){
          if($prom->nude >= 90 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $male_total_promoted_ten++;
          }
        } echo $male_total_promoted_ten; ?>
    </td>
    <td >
      <?php 
        $female_total_promoted_ten = 0;
        foreach($female_ten as $prom){
          if($prom->nude <= 90 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $female_total_promoted_ten++;
          }
        } echo $female_total_promoted_ten; ?>
    </td>
    <td ><?php echo $female_total_promoted_ten + $male_total_promoted_ten;?></td>
      <!-- IRREGULAR -->
  </tr>
</tbody>
  </table>
  <br><br>
    <div class="row">
      <div class="col-md-4">
          <div class="row">
              <div class="col-md-3">
                   <label class="form-control-sm" for="" class="form-control-label mr-2">Prepared by:</label>
              </div>
              <div class="col-md-4">
                  <input   type="text" name="" size="30"  >
              </div>
          </div>
      </div>
      <div class="col-md-4">
          <div class="row">
              <div class="col-md-3">
                   <label class="form-control-sm" for="" class="form-control-label mr-2">Certified Correct and Submitted:</label>
              </div>
              <div class="col-md-4">
                  <input type="text" name="" size="30">
              </div>
          </div>
      </div>
      <div class="col-md-4">
          <div class="row">
              <div class="col-md-3">
                   <label class="form-control-sm" for="" class="form-control-label mr-2">Reviewed by:</label>
              </div>
              <div class="col-md-4">
                  <input type="text" name="" size="30">
              </div>
          </div>
      </div> 
    </div>
    <br>
    <button id="print_data" class="btn btn-success btn-print btn-rounded" onClick = "this.style.visibility= 'hidden';">
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

