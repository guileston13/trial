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
</head>
<body>
  <div class="container-fluid" id="print_container">
     <h3 class="text-center">School Form 6 (SF6) Summarized Report on Promotion <br> and Level of Proficiency</h3>

     <div class="row mb-3">
       <div class="col-md-3 offset-2">
          <div class="input-group form-inline">
            <label for="" class="form-control-label mr-2">School ID:</label>
            <input type="text" name="" value="<?php echo $form6[0]->school_id?>">
          </div> 
       </div>
       <div class="col-md-3">
           <div class="input-group form-inline">
            <label for="" class="form-control-label mr-2">Region:</label>
            <input type="text" name="" value="<?php echo $form6[0]->region?>" >
          </div> 
       </div>
       <div class="col-md-3">
          <div class="input-group form-inline">
            <label for="" class="form-control-label mr-2">Division:</label>
            <input type="text" name="" value="<?php echo $form6[0]->division?>" >
          </div> 
       </div>
     </div>

     <div class="row mb-3">
       <div class="col-md-3 offset-2">
          <div class="input-group form-inline">
            <label for="" class="form-control-label mr-2">School Name:</label>
            <input type="text" name="" value="<?php echo $form6[0]->school_name?>">
          </div> 
       </div>
       <div class="col-md-3">
           <div class="input-group form-inline">
            <label for="" class="form-control-label mr-2">District:</label>
            <input type="text" name="" value="<?php echo $form6[0]->district?>" >
          </div> 
       </div>
       <div class="col-md-3">
          <div class="input-group form-inline">
            <label for="" class="form-control-label mr-2">School Year: </label>
            <input type="text" value="<?php echo $school_year[0]->schoolyear_start; ?>" name="">
          </div> 
       </div>
     </div>

<table class="my-5 table table-bordered">
  <thead>
  <tr>
    <th>SUMMARY TABLE</th>
    <th colspan="3">Grade 7</th>  
    <th colspan="3">Grade 8</th>  
    <th colspan="3 ">Grade 9</th> 
    <th colspan="3 ">Grade 10</th> 
    <th colspan="3 ">Grade 11</th> 
    <th colspan="3 ">Grade 12</th> 
  </tr>

  <tr>
    <th>SUMMARY TABLE</th>
    <th>MALE</th>
    <th>FEMALE</th>
    <th>TOTAL</th>
    <th>MALE</th>
    <th>FEMALE</th>
    <th>TOTAL</th>
    <th>MALE</th>
    <th>FEMALE</th>
    <th>TOTAL</th>
    <th>MALE</th>
    <th>FEMALE</th>
    <th>TOTAL</th>
    <th>MALE</th>
    <th>FEMALE</th>
    <th>TOTAL</th>
    <th>MALE</th>
    <th>FEMALE</th>
    <th>TOTAL</th>
 </tr>
</thead>
<tbody>
    <tr>
      <td>PROMOTED</td>
      <!-- PROMOTED Grade 7-->
      <td>
        <?php 
        $male_total_promoted_seven = 0;
        foreach($male_seven as $prom){
          if($prom->nude <= 100 && $prom->nude >= 75 ){
            // $re =  count($prom->nude);
            $male_total_promoted_seven++;
          }
        } echo $male_total_promoted_seven; ?>
      </td>
      <td>
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
      <td><?php echo $female_total_promoted_seven + $male_total_promoted_seven;?></td>
      <!-- PROMOTED -->
      <!-- PROMOTED Grade 8-->
      <td>
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
      <td>
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
      <td><?php echo $female_total_promoted_eight + $male_total_promoted_eight;?></td>
      <!-- PROMOTED -->
      <!-- PROMOTED Grade 9-->
      <td>
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
      <td>
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
      <td><?php echo $female_total_promoted_nine + $male_total_promoted_nine;?></td>
      <!-- PROMOTED -->
      <!-- PROMOTED Grade 10-->
      <td>
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
      <td>
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
      <td><?php echo $female_total_promoted_ten + $male_total_promoted_ten;?></td>
      <!-- PROMOTED -->
      <!-- PROMOTED Grade 11-->
      <td>
        <?php 
          $male_total_promoted_eleven = 0;
          foreach($male_eleven as $prom){
            if($prom->nude <= 100 && $prom->nude >= 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_eleven++;
            }
          } echo $male_total_promoted_eleven; ?>
      </td>
      <td>
        <?php 
          $female_total_promoted_eleven = 0;
          foreach($female_eleven as $prom){
            if($prom->nude <= 100 && $prom->nude >= 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_eleven++;
            }
          } echo $female_total_promoted_eleven; ?>
      </td>
      <td><?php echo $female_total_promoted_eleven + $male_total_promoted_eleven;?></td>
      <!-- PROMOTED Grade 12-->
      <td>
        <?php 
          $male_total_promoted_twelve = 0;
          foreach($male_twelve as $prom){
            if($prom->nude <= 100 && $prom->nude >= 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_twelve++;
            }
          } echo $male_total_promoted_twelve; ?>
      </td>
      <td>
        <?php 
          $female_total_promoted_twelve = 0;
          foreach($female_twelve as $prom){
            if($prom->nude <= 100 && $prom->nude >= 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_twelve++;
            }
          } echo $female_total_promoted_twelve; ?>
      </td>
      <td><?php echo $female_total_promoted_twelve + $male_total_promoted_twelve;?></td>
      <!-- PROMOTED -->
    </tr>
    <tr>
      <td>IRREGULAR</td>
      <!-- IRREGULAR Grade 7 -->
      <td>
        <?php 
          $male_total_promoted_seven = 0;
          foreach($male_seven as $prom){
            if($prom->nude <= 74 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_seven++;
            }
          } echo $male_total_promoted_seven; ?>
      </td>
      <td>
        <?php 
          $female_total_promoted_seven = 0;
          foreach($female_seven as $prom){
            if($prom->nude <= 74 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_seven++;
            }
          } echo $female_total_promoted_seven; ?>
      </td>
      <td><?php echo $female_total_promoted_seven + $male_total_promoted_seven;?></td>
      <!-- IRREGULAR -->
      <!-- IRREGULAR Grade 8 -->
      <td>
        <?php 
          $male_total_promoted_eight = 0;
          foreach($male_eight as $prom){
            if($prom->nude <= 74 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_eight++;
            }
          } echo $male_total_promoted_eight; ?>
      </td>
      <td>
        <?php 
          $female_total_promoted_eight = 0;
          foreach($female_eight as $prom){
            if($prom->nude <= 74 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_eight++;
            }
          } echo $female_total_promoted_eight; ?>
      </td>
      <td><?php echo $female_total_promoted_eight + $male_total_promoted_eight;?></td>
      <!-- IRREGULAR -->
      <!-- IRREGULAR grade 9 -->
      <td>
        <?php 
          $male_total_promoted_nine = 0;
          foreach($male_nine as $prom){
            if($prom->nude <= 74 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_nine++;
            }
          } echo $male_total_promoted_nine; ?>
      </td>
      <td>
        <?php 
          $female_total_promoted_nine = 0;
          foreach($female_nine as $prom){
            if($prom->nude <= 74 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_nine++;
            }
          } echo $female_total_promoted_nine; ?>
      </td>
      <td><?php echo $female_total_promoted_nine + $male_total_promoted_nine;?></td>
      <!-- IRREGULAR -->
      <!-- IRREGULAR Grade 10 -->
      <td>
        <?php 
          $male_total_promoted_ten = 0;
          foreach($male_ten as $prom){
            if($prom->nude <= 74 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_ten++;
            }
          } echo $male_total_promoted_ten; ?>
      </td>
      <td>
        <?php 
          $female_total_promoted_ten = 0;
          foreach($female_ten as $prom){
            if($prom->nude <= 74 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_ten++;
            }
          } echo $female_total_promoted_ten; ?>
      </td>
      <td><?php echo $female_total_promoted_ten + $male_total_promoted_ten;?></td>
      <!-- IRREGULAR -->
      <!-- IRREGULAR Grade 11 -->
      <td>
        <?php 
          $male_total_promoted_eleven = 0;
          foreach($male_eleven as $prom){
            if($prom->nude <= 74 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_eleven++;
            }
          } echo $male_total_promoted_eleven; ?>
      </td>
      <td>
        <?php 
          $female_total_promoted_eleven = 0;
          foreach($female_eleven as $prom){
            if($prom->nude <= 74 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_eleven++;
            }
          } echo $female_total_promoted_eleven; ?>
      </td>
      <td><?php echo $female_total_promoted_eleven + $male_total_promoted_eleven;?></td>
      <!-- IRREGULAR -->
      <!-- IRREGULAR Grade 12 -->
      <td>
        <?php 
          $male_total_promoted_twelve = 0;
          foreach($male_twelve as $prom){
            if($prom->nude <= 74 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_twelve++;
            }
          } echo $male_total_promoted_twelve; ?>
      </td>
      <td>
        <?php 
          $female_total_promoted_twelve = 0;
          foreach($female_twelve as $prom){
            if($prom->nude <= 74 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_twelve++;
            }
          } echo $female_total_promoted_twelve; ?>
      </td>
      <td><?php echo $female_total_promoted_twelve + $male_total_promoted_twelve;?></td>
      <!-- IRREGULAR -->
      
    </tr>
    <tr>
      <td>RETAINED</td>
      <!-- RETAINED Grade 7 -->
      <td>
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
      <td>
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
      <td><?php echo $female_total_promoted_seven + $male_total_promoted_seven;?></td>
      <!-- RETAINED -->
      <!-- RETAINED Grade 8 -->
      <td>
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
      <td>
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
      <td><?php echo $female_total_promoted_eight + $male_total_promoted_eight;?></td>
      <!-- RETAINED -->
      <!-- RETAINED grade 9 -->
      <td>
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
      <td>
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
      <td><?php echo $female_total_promoted_nine + $male_total_promoted_nine;?></td>
      <!-- RETAINED -->
      <!-- RETAINED Grade 10 -->
      <td>
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
      <td>
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
      <td><?php echo $female_total_promoted_ten + $male_total_promoted_ten;?></td>
      <!-- RETAINED -->
      <!-- RETAINED Grade 11 -->
      <td>
        <?php 
          $male_total_promoted_eleven = 0;
          foreach($male_eleven as $prom){
            if($prom->nude < 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_eleven++;
            }
          } echo $male_total_promoted_eleven; ?>
      </td>
      <td>
        <?php 
          $female_total_promoted_eleven = 0;
          foreach($female_eleven as $prom){
            if($prom->nude < 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_eleven++;
            }
          } echo $female_total_promoted_eleven; ?>
      </td>
      <td><?php echo $female_total_promoted_eleven + $male_total_promoted_eleven;?></td>
      <!-- RETAINED -->
      <!-- RETAINED Grade 12 -->
      <td>
        <?php 
          $male_total_promoted_twelve = 0;
          foreach($male_twelve as $prom){
            if($prom->nude < 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_twelve++;
            }
          } echo $male_total_promoted_twelve; ?>
      </td>
      <td>
        <?php 
          $female_total_promoted_twelve = 0;
          foreach($female_twelve as $prom){
            if($prom->nude < 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_twelve++;
            }
          } echo $female_total_promoted_twelve; ?>
      </td>
      <td><?php echo $female_total_promoted_twelve + $male_total_promoted_twelve;?></td>
      <!-- RETAINED -->
      
    </tr>

   <tr>
    <td>LEVEL OF PROFICIENCY </td>
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
    <td>Nos. of BEGINNNING              (B: 74% and below) </td>
    <!-- NO of Begginning Grade 7 -->
    <td>
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
      <td>
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
      <td><?php echo $female_total_promoted_seven + $male_total_promoted_seven;?></td>
      <!-- IRREGULAR -->
    <!-- NO of Begginning Grade 8 -->
    <td>
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
      <td>
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
      <td><?php echo $female_total_promoted_eight + $male_total_promoted_eight;?></td>
      <!-- IRREGULAR -->
      <!-- NO of Begginning Grade 9 -->
    <td>
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
      <td>
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
      <td><?php echo $female_total_promoted_nine + $male_total_promoted_nine;?></td>
      <!-- IRREGULAR -->
      <!-- NO of Begginning Grade 10 -->
    <td>
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
      <td>
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
      <td><?php echo $female_total_promoted_ten + $male_total_promoted_ten;?></td>
      <!-- IRREGULAR -->
      <!-- NO of Begginning Grade 11 -->
    <td>
        <?php 
          $male_total_promoted_eleven = 0;
          foreach($male_eleven as $prom){
            if($prom->nude < 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_eleven++;
            }
          } echo $male_total_promoted_eleven; ?>
      </td>
      <td>
        <?php 
          $female_total_promoted_eleven = 0;
          foreach($female_eleven as $prom){
            if($prom->nude < 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_eleven++;
            }
          } echo $female_total_promoted_eleven; ?>
      </td>
      <td><?php echo $female_total_promoted_eleven + $male_total_promoted_eleven;?></td>
      <!-- IRREGULAR -->
      <!-- NO of Begginning Grade 12 -->
    <td>
        <?php 
          $male_total_promoted_twelve = 0;
          foreach($male_twelve as $prom){
            if($prom->nude < 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_twelve++;
            }
          } echo $male_total_promoted_twelve; ?>
      </td>
      <td>
        <?php 
          $female_total_promoted_twelve = 0;
          foreach($female_twelve as $prom){
            if($prom->nude < 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_twelve++;
            }
          } echo $female_total_promoted_twelve; ?>
      </td>
      <td><?php echo $female_total_promoted_twelve + $male_total_promoted_twelve;?></td>
      <!-- IRREGULAR -->
      
  </tr>
  <tr>
    <td>Nos. of DEVELOPING        (D: 75%-79.99%) </td>
    <!--Nos. of DEVELOPING Grade 7 -->
    <td>
        <?php 
          $male_total_promoted_seven = 0;
          foreach($male_seven as $prom){
            if($prom->nude <= 79.99 && $prom->nude >= 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_seven++;
            }
          } echo $male_total_promoted_seven; ?>
    </td>
    <td>
        <?php 
          $female_total_promoted_seven = 0;
          foreach($female_seven as $prom){
            if($prom->nude <= 79.99 && $prom->nude >= 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_seven++;
            }
          } echo $female_total_promoted_seven; ?>
    </td>
    <td><?php echo $female_total_promoted_seven + $male_total_promoted_seven;?></td>
      <!-- IRREGULAR -->
    <!--Nos. of DEVELOPING Grade 8 -->
    <td>
        <?php 
          $male_total_promoted_eight = 0;
          foreach($male_eight as $prom){
            if($prom->nude <= 79.99 && $prom->nude >= 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_eight++;
            }
          } echo $male_total_promoted_eight; ?>
    </td>
    <td>
        <?php 
          $female_total_promoted_eight = 0;
          foreach($female_eight as $prom){
            if($prom->nude <= 79.99 && $prom->nude >= 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_eight++;
            }
          } echo $female_total_promoted_eight; ?>
    </td>
    <td><?php echo $female_total_promoted_eight + $male_total_promoted_eight;?></td>
      <!-- IRREGULAR -->
    <!--Nos. of DEVELOPING Grade 9 -->
    <td>
        <?php 
          $male_total_promoted_nine = 0;
          foreach($male_nine as $prom){
            if($prom->nude <= 79.99 && $prom->nude >= 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_nine++;
            }
          } echo $male_total_promoted_nine; ?>
    </td>
    <td>
        <?php 
          $female_total_promoted_nine = 0;
          foreach($female_nine as $prom){
            if($prom->nude <= 79.99 && $prom->nude >= 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_nine++;
            }
          } echo $female_total_promoted_nine; ?>
    </td>
    <td><?php echo $female_total_promoted_nine + $male_total_promoted_nine;?></td>
      <!-- IRREGULAR -->
    <!--Nos. of DEVELOPING Grade ten -->
    <td>
        <?php 
          $male_total_promoted_ten = 0;
          foreach($male_ten as $prom){
            if($prom->nude <= 79.99 && $prom->nude >= 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_ten++;
            }
          } echo $male_total_promoted_ten; ?>
    </td>
    <td>
        <?php 
          $female_total_promoted_ten = 0;
          foreach($female_ten as $prom){
            if($prom->nude <= 79.99 && $prom->nude >= 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_ten++;
            }
          } echo $female_total_promoted_ten; ?>
    </td>
    <td><?php echo $female_total_promoted_ten + $male_total_promoted_ten;?></td>
      <!-- IRREGULAR -->
    <!--Nos. of DEVELOPING Grade 11 -->
    <td>
        <?php 
          $male_total_promoted_eleven = 0;
          foreach($male_eleven as $prom){
            if($prom->nude <= 79.99 && $prom->nude >= 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_eleven++;
            }
          } echo $male_total_promoted_eleven; ?>
    </td>
    <td>
        <?php 
          $female_total_promoted_eleven = 0;
          foreach($female_eleven as $prom){
            if($prom->nude <= 84 && $prom->nude >= 80 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_eleven++;
            }
          } echo $female_total_promoted_eleven; ?>
    </td>
    <td><?php echo $female_total_promoted_eleven + $male_total_promoted_eleven;?></td>
      <!-- IRREGULAR -->
  <!--Nos. of DEVELOPING Grade 12 -->
  <td>
        <?php 
          $male_total_promoted_twelve = 0;
          foreach($male_twelve as $prom){
            if($prom->nude <= 79.99 && $prom->nude >= 75 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $male_total_promoted_twelve++;
            }
          } echo $male_total_promoted_twelve; ?>
    </td>
    <td>
        <?php 
          $female_total_promoted_twelve = 0;
          foreach($female_twelve as $prom){
            if($prom->nude <= 84 && $prom->nude >= 80 ){
              $prom->nude;
              // $re =  count($prom->nude);
              $female_total_promoted_twelve++;
            }
          } echo $female_total_promoted_twelve; ?>
    </td>
    <td><?php echo $female_total_promoted_twelve + $male_total_promoted_twelve;?></td>
      <!-- IRREGULAR -->
  </tr>
  <tr>
    <td>Nos. of APPROACHING PROFICIENCY                         (AP: 80%-84%)</td>
   <!--Nos. of APPROACHING PROFICIENCY Grade 7 -->
   <td>
      <?php 
        $male_total_promoted_seven = 0;
        foreach($male_seven as $prom){
          if($prom->nude <= 84 && $prom->nude >= 80 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $male_total_promoted_seven++;
          }
        } echo $male_total_promoted_seven; ?>
    </td>
    <td>
      <?php 
        $female_total_promoted_seven = 0;
        foreach($female_seven as $prom){
          if($prom->nude <= 84 && $prom->nude >= 80 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $female_total_promoted_seven++;
          }
        } echo $female_total_promoted_seven; ?>
    </td>
    <td><?php echo $female_total_promoted_seven + $male_total_promoted_seven;?></td>
      <!-- IRREGULAR -->
    <!--Nos. of APPROACHING PROFICIENCY Grade 8 -->
   <td>
      <?php 
        $male_total_promoted_eight = 0;
        foreach($male_eight as $prom){
          if($prom->nude <= 84 && $prom->nude >= 80 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $male_total_promoted_eight++;
          }
        } echo $male_total_promoted_eight; ?>
    </td>
    <td>
      <?php 
        $female_total_promoted_eight = 0;
        foreach($female_eight as $prom){
          if($prom->nude <= 84 && $prom->nude >= 80 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $female_total_promoted_eight++;
          }
        } echo $female_total_promoted_eight; ?>
    </td>
    <td><?php echo $female_total_promoted_eight + $male_total_promoted_eight;?></td>
      <!-- IRREGULAR -->
    <!--Nos. of APPROACHING PROFICIENCY Grade 9 -->
   <td>
      <?php 
        $male_total_promoted_nine = 0;
        foreach($male_nine as $prom){
          if($prom->nude <= 84 && $prom->nude >= 80 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $male_total_promoted_nine++;
          }
        } echo $male_total_promoted_nine; ?>
    </td>
    <td>
      <?php 
        $female_total_promoted_nine = 0;
        foreach($female_nine as $prom){
          if($prom->nude <= 84 && $prom->nude >= 80 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $female_total_promoted_nine++;
          }
        } echo $female_total_promoted_nine; ?>
    </td>
    <td><?php echo $female_total_promoted_nine + $male_total_promoted_nine;?></td>
      <!-- IRREGULAR -->  
    <!--Nos. of APPROACHING PROFICIENCY Grade 10 -->
   <td>
      <?php 
        $male_total_promoted_ten = 0;
        foreach($male_ten as $prom){
          if($prom->nude <= 84 && $prom->nude >= 80 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $male_total_promoted_ten++;
          }
        } echo $male_total_promoted_ten; ?>
    </td>
    <td>
      <?php 
        $female_total_promoted_ten = 0;
        foreach($female_ten as $prom){
          if($prom->nude <= 84 && $prom->nude >= 80 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $female_total_promoted_ten++;
          }
        } echo $female_total_promoted_ten; ?>
    </td>
    <td><?php echo $female_total_promoted_ten + $male_total_promoted_ten;?></td>
      <!-- IRREGULAR -->
   <!--Nos. of APPROACHING PROFICIENCY Grade 11-->
   <td>
      <?php 
        $male_total_promoted_eleven = 0;
        foreach($male_eleven as $prom){
          if($prom->nude <= 84 && $prom->nude >= 80 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $male_total_promoted_eleven++;
          }
        } echo $male_total_promoted_eleven; ?>
    </td>
    <td>
      <?php 
        $female_total_promoted_eleven = 0;
        foreach($female_eleven as $prom){
          if($prom->nude <= 84 && $prom->nude >= 80 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $female_total_promoted_eleven++;
          }
        } echo $female_total_promoted_eleven; ?>
    </td>
    <td><?php echo $female_total_promoted_eleven + $male_total_promoted_eleven;?></td>
      <!-- IRREGULAR -->
    <!--Nos. of APPROACHING PROFICIENCY Grade 12 -->
   <td>
      <?php 
        $male_total_promoted_twelve = 0;
        foreach($male_twelve as $prom){
          if($prom->nude <= 84 && $prom->nude >= 80 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $male_total_promoted_twelve++;
          }
        } echo $male_total_promoted_twelve; ?>
    </td>
    <td>
      <?php 
        $female_total_promoted_twelve = 0;
        foreach($female_twelve as $prom){
          if($prom->nude <= 84 && $prom->nude >= 80 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $female_total_promoted_twelve++;
          }
        } echo $female_total_promoted_twelve; ?>
    </td>
    <td><?php echo $female_total_promoted_twelve + $male_total_promoted_twelve;?></td>
      <!-- IRREGULAR -->
  </tr>
  <tr>
    <td>Nos. of PROFICIENT (P: 85% -89%) </td>
    <!--Nos. of PROFICIENT P: 85% -89% Grade 7 -->
   <td>
      <?php 
        $male_total_promoted_seven = 0;
        foreach($male_seven as $prom){
          if($prom->nude <= 89 && $prom->nude >= 85 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $male_total_promoted_seven++;
          }
        } echo $male_total_promoted_seven; ?>
    </td>
    <td>
      <?php 
        $female_total_promoted_seven = 0;
        foreach($female_seven as $prom){
          if($prom->nude <= 89 && $prom->nude >= 85 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $female_total_promoted_seven++;
          }
        } echo $female_total_promoted_seven; ?>
    </td>
    <td><?php echo $female_total_promoted_seven + $male_total_promoted_seven;?></td>
      <!-- IRREGULAR -->
    <!--Nos. of PROFICIENT P: 85% -89% Grade 8 -->
    <td>
      <?php 
        $male_total_promoted_eight = 0;
        foreach($male_eight as $prom){
          if($prom->nude <= 89 && $prom->nude >= 85 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $male_total_promoted_eight++;
          }
        } echo $male_total_promoted_eight; ?>
    </td>
    <td>
      <?php 
        $female_total_promoted_eight = 0;
        foreach($female_eight as $prom){
          if($prom->nude <= 89 && $prom->nude >= 85 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $female_total_promoted_eight++;
          }
        } echo $female_total_promoted_eight; ?>
    </td>
    <td><?php echo $female_total_promoted_eight + $male_total_promoted_eight;?></td>
      <!-- IRREGULAR -->
    <!--Nos. of PROFICIENT P: 85% -89% Grade 9 -->
   <td>
      <?php 
        $male_total_promoted_nine = 0;
        foreach($male_nine as $prom){
          if($prom->nude <= 89 && $prom->nude >= 85 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $male_total_promoted_nine++;
          }
        } echo $male_total_promoted_nine; ?>
    </td>
    <td>
      <?php 
        $female_total_promoted_nine = 0;
        foreach($female_nine as $prom){
          if($prom->nude <= 89 && $prom->nude >= 85 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $female_total_promoted_nine++;
          }
        } echo $female_total_promoted_nine; ?>
    </td>
    <td><?php echo $female_total_promoted_nine + $male_total_promoted_nine;?></td>
      <!-- IRREGULAR -->
    <!--Nos. of PROFICIENT P: 85% -89% Grade 10 -->
   <td>
      <?php 
        $male_total_promoted_ten = 0;
        foreach($male_ten as $prom){
          if($prom->nude <= 89 && $prom->nude >= 85 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $male_total_promoted_ten++;
          }
        } echo $male_total_promoted_ten; ?>
    </td>
    <td>
      <?php 
        $female_total_promoted_ten = 0;
        foreach($female_ten as $prom){
          if($prom->nude <= 89 && $prom->nude >= 85 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $female_total_promoted_ten++;
          }
        } echo $female_total_promoted_ten; ?>
    </td>
    <td><?php echo $female_total_promoted_ten + $male_total_promoted_ten;?></td>
      <!-- IRREGULAR -->
    <!--Nos. of PROFICIENT P: 85% -89% Grade 11 -->
   <td>
      <?php 
        $male_total_promoted_eleven = 0;
        foreach($male_eleven as $prom){
          if($prom->nude <= 89 && $prom->nude >= 85 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $male_total_promoted_eleven++;
          }
        } echo $male_total_promoted_eleven; ?>
    </td>
    <td>
      <?php 
        $female_total_promoted_eleven = 0;
        foreach($female_eleven as $prom){
          if($prom->nude <= 89 && $prom->nude >= 85 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $female_total_promoted_eleven++;
          }
        } echo $female_total_promoted_eleven; ?>
    </td>
    <td><?php echo $female_total_promoted_eleven + $male_total_promoted_eleven;?></td>
      <!-- IRREGULAR -->
    <!--Nos. of PROFICIENT P: 85% -89% Grade 12 -->
   <td>
      <?php 
        $male_total_promoted_twelve = 0;
        foreach($male_twelve as $prom){
          if($prom->nude <= 89 && $prom->nude >= 85 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $male_total_promoted_twelve++;
          }
        } echo $male_total_promoted_twelve; ?>
    </td>
    <td>
      <?php 
        $female_total_promoted_twelve = 0;
        foreach($female_twelve as $prom){
          if($prom->nude <= 89 && $prom->nude >= 85 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $female_total_promoted_twelve++;
          }
        } echo $female_total_promoted_twelve; ?>
    </td>
    <td><?php echo $female_total_promoted_twelve + $male_total_promoted_twelve;?></td>
      <!-- IRREGULAR -->
  </tr>
  <tr>
    <td>Nos. of ADVANCED                (A: 90%  and above) </td>
    <!--Nos. of ADVANCED  P: 90% Grade 7 -->
    <td>
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
    <td>
      <?php 
        $female_total_promoted_seven = 0;
        foreach($female_seven as $prom){
          if($prom->nude <= 74 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $female_total_promoted_seven++;
          }
        } echo $female_total_promoted_seven; ?>
    </td>
    <td><?php echo $female_total_promoted_seven + $male_total_promoted_seven;?></td>
      <!-- IRREGULAR -->
    <!--Nos. of ADVANCED  P: 90% Grade 8 -->
    <td>
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
    <td>
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
    <td><?php echo $female_total_promoted_eight + $male_total_promoted_eight;?></td>
      <!-- IRREGULAR -->
     <!--Nos. of ADVANCED  P: 90% Grade 9 -->
     <td>
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
    <td>
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
    <td><?php echo $female_total_promoted_nine + $male_total_promoted_nine;?></td>
      <!-- IRREGULAR -->
     <!--Nos. of ADVANCED  P: 90% Grade 10 -->
     <td>
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
    <td>
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
    <td><?php echo $female_total_promoted_ten + $male_total_promoted_ten;?></td>
      <!-- IRREGULAR -->
     <!--Nos. of ADVANCED  P: 90% Grade 11 -->
     <td>
      <?php 
        $male_total_promoted_eleven = 0;
        foreach($male_eleven as $prom){
          if($prom->nude >= 90 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $male_total_promoted_eleven++;
          }
        } echo $male_total_promoted_eleven; ?>
    </td>
    <td>
      <?php 
        $female_total_promoted_eleven = 0;
        foreach($female_eleven as $prom){
          if($prom->nude <= 90 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $female_total_promoted_eleven++;
          }
        } echo $female_total_promoted_eleven; ?>
    </td>
    <td><?php echo $female_total_promoted_eleven + $male_total_promoted_eleven;?></td>
      <!-- IRREGULAR -->
    <!--Nos. of ADVANCED  P: 90% Grade 12 -->
    <td>
      <?php 
        $male_total_promoted_twelve = 0;
        foreach($male_twelve as $prom){
          if($prom->nude >= 90 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $male_total_promoted_twelve++;
          }
        } echo $male_total_promoted_twelve; ?>
    </td>
    <td>
      <?php 
        $female_total_promoted_twelve = 0;
        foreach($female_twelve as $prom){
          if($prom->nude <= 90 ){
            $prom->nude;
            // $re =  count($prom->nude);
            $female_total_promoted_twelve++;
          }
        } echo $female_total_promoted_twelve; ?>
    </td>
    <td><?php echo $female_total_promoted_twelve + $male_total_promoted_twelve;?></td>
      <!-- IRREGULAR -->
  </tr>
</tbody>
  </table>

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

