<!DOCTYPE html>
<html>
<head>
    <title>School form 1</title>
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
    margin:2% 3% 2% 2%;
}

td {
  border: 1px solid #1e4f8e;
  text-align: center;
  padding: 5px;
  padding-bottom: 20px;
  padding-top: 20px;
  color: black;

}
th{
    color: white !important;
    background-color: dodgerblue;
    text-align: center;
    border: 1px solid #1e4f8e;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
input{
    border: none;
    border-bottom: 1px solid black;
    text-align: center;
}
tr:nth-child(n):hover {
  background-color: lemonchiffon;
}
h2{
    color: black;
}

</style>
</head>
    <body>
        <div class="container-fluid" id="print_container" >
            <h2 class="text-center">School Form 1(SF1)School Register</h2>
            <div class="row mt-3">
                <div class="col-md-3">
                    <div class="input-group form-inline">
                        <label  for="" class="form-control-label mr-2">School ID:</label>
                        <input size="10" type="text" name="" value="<?php echo $form[0]->school_id?>">
                    </div>
                </div>
                <div class="col-md-3">           
                    <div class="input-group form-inline">
                        <label for="" class="form-control-label mr-2">Region:</label>
                        <input size="10"  type="text" name="" value="<?php echo $form[0]->region?>">
                    </div>  
                </div>              
                <div class="col-md-3">
                    <div class="input-group form-inline">
                        <label for="" class="form-control-label mr-2">Division:</label>
                        <input size="10"  type="text" name="" value="<?php echo $form[0]->division?>" >
                    </div> 
                </div>
                <div class="col-md-3">
                    <div class="input-group form-inline">
                        <label for="" class="form-control-label mr-2">District:</label>
                        <input size="10" type="text" name="" value="<?php echo $form[0]->district?>">
                    </div> 
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-3">
                    <div class="input-group form-inline">
                        <label for="" class="form-control-label mr-2">School Name:</label>
                        <input size="10"  type="text" name="" value="<?php echo $form[0]->school_name?>">
                    </div> 
                </div>
                <div class="col-md-3">
                    <div class="input-group form-inline">
                        <label for="" class="form-control-label mr-2">School Year:</label>
                        <input size="10" type="text" name="" value="<?php echo $infos[0]->schoolyear_start?>">
                    </div>  
                </div>
                <div class="col-md-3">
                    <div class="input-group form-inline">
                        <label for="" class="form-control-label mr-2">Grade Level:</label>
                        <input size="10" type="text" name="" value="<?php echo $infos[0]->grade_level?>" >
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group form-inline">
                        <label for="" class="form-control-label mr-2">Section:</label>
                        <input size="10" type="text" name="" value="<?php echo $infos[0]->section_name?>">
                    </div> 
                </div>
            </div>
            <br>
            <table>
                <thead>
                    <tr>
                        <th >LRN</th>
                        <th >Name</th>
                        <th >Sex</th>
                        <th >Birth Date</th>
                        <th >Age</th>
                        <th >Birth Place</th>
                        <th >Mother Tongue</th>
                        <th >IP</th>
                        <th >Religion</th>
                        <th >House# / Street / Sitio / Purok</th>
                        <th >Barangay</th>
                        <th >Municipal / City</th>
                        <th >Province</th>
                        <th >Father</th>
                        <th >Mother</th>
                        <th >Guardian</th>
                        <th >Relation ship</th>
                        <th >Contact No.</th>
                        <th >REMARKS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $num = 1; foreach($form1 as $key) {?>
                    <tr>
                        <td ><?php echo $key->lrn?></td>
                        <td ><?php echo $key->firstname?><?php echo $key->middlename?><?php echo " "?><?php echo $key->lastname?></td>
                        <td ><?php echo $key->gender?></td>
                        <td ><?php
                                $date = new DateTime($key->birthdate);
                                echo $date->format('M-d-Y ');
                                ?>  
                        </td>
                        <td ><?php  
                            $from = new DateTime($key->birthdate);
                            $to   = new DateTime('today');
                            echo $from->diff($to)->y;
                            
                            # procedural
                            //echo date_diff(date_create($key->birthdate), date_create('today'))->y;
                        ?></td>
                        <td ><?php echo $key->birthplace?></td>
                        <td ><?php echo $key->mothertongue?></td>
                        <td ><?php echo $key->ip?></td>
                        <td ><?php echo $key->religion?></td>
                        <td ><?php echo $key->house?></td>
                        <td ><?php echo $key->barangay?></td>
                        <td ><?php echo $key->city?></td>
                        <td ><?php echo $key->province?></td>
                        <td ><?php echo $key->fathersname?></td>
                        <td ><?php echo $key->mothersname?></td>
                        <td ><?php echo $key->guardiansname?></td>
                        <td ><?php echo $key->relationship?></td>
                        <td ><?php echo $key->contactnumber?></td>
                        <td ><?php echo $key->remarks?></td>
                    </tr>
                    <?php }?>
                </tbody>
            </table>
            <br><br>
                
            <table>
                <tr>   
                    <th style="color: red !important ; background-color: white">Indicator</th>
                    <th style="color: blue !important ; background-color: white">Code</th>
                    <th style="color: green !important ; background-color: white">Required Information</th>
                    <th style="color: red !important ; background-color: white">Indicator</th>
                    <th style="color: blue !important ; background-color: white">Code</th>
                    <th style="color: green !important ; background-color: white">Required Information</th>
                </tr>
                <tr>
                    <td>Transferred Out</td>
                    <td>T/O</td>
                    <td>Name of  Public (P) Private (PR) School  & Effectivity Date</td>
                    <td>CCT Recipient</td>
                    <td>CCT</td>
                    <td>CCT Control/reference number & Effectivity Date</td>
                </tr>
                <tr>
                    <td>Transferred IN</td>
                    <td>T/I</td>
                    <td>Name of  Public (P) Private (PR) School  & Effectivity Date</td>
                    <td>Balik-Aral</td>
                    <td>B/A</td>
                    <td>Name of school last attended & Year</td>
                </tr>
                <tr>
                    <td>Dropped</td>
                    <td>DRP</td>
                    <td>Reason  and Effectivity Date</td>
                    <td>Learner With Dissability</td>
                    <td>LWD</td>
                    <td>Specify</td>
                </tr>
                <tr>
                    <td>Late Enrollment</td>
                    <td>LE</td>
                    <td>Reason (Enrollment beyond 1st Friday of June)</td>
                    <td>Accelarated</td>
                    <td>ACL</td>
                    <td>Specify Level & Effectivity Data</td>
                </tr>
            </table>
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

<!-- <!DOCTYPE html>
<html>
<head>
	<title>School form 1</title>
	<link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
    <link href="./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link type="text/css" href="./assets/css/argon.css?v=1.0.0" rel="stylesheet">
</head>
<body>
		<center ><strong><p>School form 1 (SF 1) School Register </p></strong></center></center>
		<center><div class="row" style="padding: 10px">
								<div class="col-md-10">
                                    School ID:<input type="text" name="" size="7" value="<?php echo $form[0]->school_id?>">  
                                    Region:<input type="text" name="" size=" 10" value="<?php echo $form[0]->region?>"> 
                                    Division:<input type="text" name="" size="15" value="<?php echo $form[0]->division?>"> 
                                    District:<input type="text" name="" size="15" value="<?php echo $form[0]->district?>">
								</div>
							</div></center>
							<center><div class="row">
								<br>

								<div class="col-md-10">
									School name:<input type="text" name="" size="20" value="<?php echo $form[0]->school_name?>">  
                                    School Year:<input type="text" name="" size=" 10" value="<?php echo $infos[0]->schoolyear_start ?>"> 
                                    Grade Level:<input type="text" name="" size="5"  value="<?php echo $infos[0]->grade_level?>"> 
                                    Section:<input type="text" name="" size="15"  value="<?php echo $infos[0]->section_name?>">
								</div>
							</div></center>
							<br>
							<br>
			<center><table id="table" border="2">
            <tr>
            	<th style="padding: 15px">LRN</th>
                <th style="padding: 15px">Name</th>
                <th style="padding: 15px">Sex</th>
                <th style="padding: 15px">Birth Date(mm/dd/yy)</th>
                <th style="padding: 15px">Age</th>
                <th style="padding: 15px">Birth Place</th>
                <th style="padding: 15px">Mother Tongue</th>
                <th style="padding: 15px">IP(Specific Ethnic Group)</th>
                <th style="padding: 15px">Religion</th>
                <th style="padding: 15px">House# / Street / Sitio / Purok</th>
                <th style="padding: 15px">Barangay</th>
                <th style="padding: 15px">Municipal / City</th>
                <th style="padding: 15px">Province</th>
                <th style="padding: 15px">Fathers Name</th>
                <th style="padding: 15px">Mothers Name</th>
                <th style="padding: 15px">Guardians Name</th>
                <th style="padding: 15px">Relationship</th>
                <th style="padding: 15px">Contact Number(Parent / Guardian)</th>
                <th style="padding: 15px">REMARKS</th>
            </tr>
            <?php foreach($form1 as $key) {?>
            <tr>
                
                <td style="padding: 15px"><?php echo $key->lrn?></td>
                <td style="padding: 15px"><?php echo $key->firstname?></td>
                <td style="padding: 15px"><?php echo $key->gender?></td>
                <td style="padding: 15px"><?php echo $key->birthdate?></td>
                <td style="padding: 15px"><?php echo $key->age?></td>
                <td style="padding: 15px"><?php echo $key->birthplace?></td>
                <td style="padding: 15px"><?php echo $key->mothertongue?></td>
                <td style="padding: 15px"><?php echo $key->ip?></td>
                <td style="padding: 15px"><?php echo $key->religion?></td>
                <td style="padding: 15px"><?php echo $key->house?></td>
                <td style="padding: 15px"><?php echo $key->barangay?></td>
                <td style="padding: 15px"><?php echo $key->city?></td>
                <td style="padding: 15px"><?php echo $key->province?></td>
                <td style="padding: 15px"><?php echo $key->fathersname?></td>
                <td style="padding: 15px"><?php echo $key->mothersname?></td>
                <td style="padding: 15px"><?php echo $key->guardiansname?></td>
                <td style="padding: 15px"><?php echo $key->relationship?></td>
                <td style="padding: 15px"><?php echo $key->remarks?></td>
                <td style="padding: 15px"><?php echo $key->remarks?></td>

            </tr>
            <?php }?>
        </table></center>



</body>
</html> -->