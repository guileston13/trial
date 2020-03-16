<html>
<head>
    <title>School form 10</title>
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
  margin:3%;
  color: black
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  border-radius: 100px;
}

td, th {
  border: 1px solid #1e4f8e;
  text-align: center;
  padding: 8px;
  color: black;

}
input{
    border: none;
    border-bottom: 1px solid black;
    text-align: center;
}
h1{
  text-align: center;
  color: black
}
h2{
  background-color: dodgerblue;
  color: white;
  text-align: center;
  margin: 2% 0% 2% 0%;
}
tr:nth-child(n):hover {
  background-color: lemonchiffon;
}
p{
  text-align: center;
  color: black;
}
</style>
</head>
<body>
  <div  id="print_container" >
    <div style="min-height: 750px;max-height: 750">
      <div>
  		  <p>REPUBLIC OF THE PHILIPPINES</p>
      </div>
      <div>
  		  <p>DEPARTMENT OF EDUCATION</p>
      </div>
      <div>
  		  <h1>Learner Permanent Record for Junior High School (SF10-JHS)</h1>
      </div>
      <div>
  		  <h2>LEARNER'S INFORMATION</h2>
      </div>
      <div class="row">
        <div class="col-md-3">
          <label>LAST NAME:</label>
          <input size="10" type="" name="">
        </div>
        <div class="col-md-3">
          <label>FIRST NAME</label>
          <input size="10" type="" name="">
        </div>
        <div class="col-md-3">
          <label>NAME(Jr,I,II):</label>
          <input size="10" type="" name="">
        </div>
        <div class="col-md-3">
          <label>MID NAME:</label>
          <input size="10" type="" name="">
        </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <label>Learner Reference Number:</label>
          <input size="15" type="" name="">
        </div>
        <div class="col-md-3">
          <label>Birthdate:</label>
          <input size="10" type="" name="">
        </div>
        <div class="col-md-3">
          <label>Sex:</label>
          <input size="15" type="" name="">
        </div>
      </div>
      <div>
  		  <h2>ELIGIBITY FOR JHS ENROLMENT</h2>
      </div>
      <div class="row">
        <hr>
        <div class="col-md-4">
          <input type="checkbox" name="">
          <label>Elementary School Completer</label>
        </div>
        <div class="col-md-3">
          <label>General Ave:</label>
          <input size="10" type="" name="">        
        </div>
        <div class="col-md-5">
          <label>Citation: (if Any)</label>
          <input type="" name="">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <label>Other Credential Presented</label>
        </div>
      </div>
        <div class="row">
          <div class="col-md-2">
            <input type="checkbox" name="">
            <label>PEPT Passer</label>    
          </div>
          <div class="col-md-2">
            <label>Rating:</label>
            <input size="5" type="" name="">
          </div>
          <div class="col-md-2">
            <input type="checkbox" name="">
            <label>ALS A & E Passer</label>    
          </div>
          <div class="col-md-2">
            <label>Rating:</label>
            <input size="5" type="" name="">
          </div>
          <div class="col-md-4">
            <input type="checkbox" name="">
            <label>Others(Pls. Specify):</label> 
            <input  type="" name="">   
          </div>
        </div>
        <div class="row">
        <div class="col-md-5">
          <label>Date of Examination/Assessment:</label>
          <input size="13" type="" name="">
        </div>
        <div class="col-md-6">
          <label>Name and Address of Testing Center:</label>
          <input size="20" type="" name="">
        </div>
      </div>
      <div>
        <h2>Scholastic Record</h2>
      </div>
      <div class="row">
        <div class="col-md-3">
          <label>School:</label>
          <input size="15" type="" name="">    
        </div>
        <div class="col-md-3">
          <label>School ID:</label>
          <input size="10" type="" name="">  
        </div>
        <div class="col-md-2">
          <label>District:</label>
          <input size="5" type="" name="">  
        </div>
        <div class="col-md-2">
          <label>Division:</label>
          <input size="5" type="" name="">  
        </div>
        <div class="col-md-2">
          <label>Region:</label>
          <input size="3" type="" name="">  
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <label>Classified as Grade:</label>
          <input size="2" type="" name="">    
        </div>
        <div class="col-md-2">
          <label>Section:</label>
          <input size="5" type="" name="">  
        </div>
        <div class="col-md-2">
          <label>School Year:</label>
          <input size="10" type="" name="">  
        </div>
        <div class="col-md-3">
          <label>Name of Adviser/Teacher:</label>
          <input size="20" type="" name="">  
        </div>
        <div class="col-md-2">
          <label>Signature:</label>
          <input size="10" type="" name="">  
        </div>
      </div>
    <br>
    </div>
		<table align="center">     
            <tr>
              <th rowspan="2">Learning Areas</th>
              <th colspan="4">Quarterly Rating</th>
              <th rowspan="2">Final Rating</th>
              <th rowspan="2">Remarks</th>
            </tr>
            <tr>
              <td>1</td>
              <td>2</td>
              <td>3</td>
              <td>4</td>
            </tr>
            <tr>
              <td>z</td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="6" type="" name=""></td>
            </tr>
            <tr>
              <td>z</td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="6" type="" name=""></td>
            </tr>
            <tr>
              <td>z</td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="6" type="" name=""></td>
            </tr>
            <tr>
              <td colspan="5" style="text-align: center;">General Average</td>
              <td></td>
            </tr>
    </table>
    <div class="row">
      <div class="col-md-1">
      </div>
      <div class="col-md-2">
        <label>Remedial Classes</label>
      </div>
      <div class="col-md-9">
        <label>Conducted from (mm/dd/yyyy)</label>
        <input type="" name="">
        <label>to(mm/dd/yyyy)</label>
        <input type="" name="">
      </div> 
    </div>
    <table>
      <tr>
        <th>Learning Areas</th>
        <th>Final Rating</th>
        <th>Remedial Class Mark</th>
        <th>Recomputed Final Grade</th>
        <th>Remarks</th>
      </tr>
      <tr>
        <td>z</td>
        <td><input size="4" type="" name=""></td>
        <td><input size="4" type="" name=""></td>
        <td><input size="4" type="" name=""></td>
        <td><input size="6" type="" name=""></td>
      </tr>
      </tr>
      <tr>
        <td>z</td>
        <td><input size="4" type="" name=""></td>
        <td><input size="4" type="" name=""></td>
        <td><input size="4" type="" name=""></td>
        <td><input size="6" type="" name=""></td>
      </tr>
      </tr>
    </table>
    </div>
    <div class="row">
      <div class="col-md-3">
        <label>School:</label>
        <input size="10" type="" name="">    
      </div>
      <div class="col-md-3">
        <label>School ID:</label>
        <input size="10" type="" name="">  
      </div>
      <div class="col-md-2">
        <label>District:</label>
        <input size="3" type="" name="">  
      </div>
      <div class="col-md-2">
        <label>Division:</label>
        <input size="3" type="" name="">  
      </div>
      <div class="col-md-2">
        <label>Region:</label>
        <input size="3" type="" name="">  
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <label>Classified as Grade:</label>
        <input size="2" type="" name="">    
      </div>
      <div class="col-md-2">
        <label>Section:</label>
        <input size="5" type="" name="">  
      </div>
      <div class="col-md-2">
        <label>School Year:</label>
        <input size="10" type="" name="">  
      </div>
      <div class="col-md-3">
        <label>Name of Adviser/Teacher:</label>
        <input size="20" type="" name="">  
      </div>
      <div class="col-md-2">
        <label>Signature:</label>
        <input size="10" type="" name="">  
      </div>
    </div>
    <br>
    <table align="center">     
            <tr>
              <th rowspan="2">Learning Areas</th>
              <th colspan="4">Quarterly Rating</th>
              <th rowspan="2">Final Rating</th>
              <th rowspan="2">Remarks</th>
            </tr>
            <tr>
              <td>1</td>
              <td>2</td>
              <td>3</td>
              <td>4</td>
            </tr>
            <tr>
              <td>z</td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="6" type="" name=""></td>
            </tr>
            <tr>
              <td>z</td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="6" type="" name=""></td>
            </tr>
            <tr>
              <td>z</td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="6" type="" name=""></td>
            </tr>
            <tr>
              <td colspan="5" style="text-align: center;">General Average</td>
              <td></td>
            </tr>
    </table>
    <div class="row">
      <div class="col-md-1">
      </div>
      <div class="col-md-2">
        <label>Remedial Classes</label>
      </div>
      <div class="col-md-9">
        <label>Conducted from (mm/dd/yyyy)</label>
        <input type="" name="">
        <label>to(mm/dd/yyyy)</label>
        <input type="" name="">
      </div> 
    </div>
    <table>
      <tr>
        <th>Learning Areas</th>
        <th>Final Rating</th>
        <th>Remedial Class Mark</th>
        <th>Recomputed Final Grade</th>
        <th>Remarks</th>
      </tr>
      <tr>
        <td>z</td>
        <td><input size="4" type="" name=""></td>
        <td><input size="4" type="" name=""></td>
        <td><input size="4" type="" name=""></td>
        <td><input size="6" type="" name=""></td>
      </tr>
      </tr>
      <tr>
        <td>z</td>
        <td><input size="4" type="" name=""></td>
        <td><input size="4" type="" name=""></td>
        <td><input size="4" type="" name=""></td>
        <td><input size="6" type="" name=""></td>
      </tr>
      </tr>
    </table>
    <div class="row">
        <div class="col-md-3">
          <label>School:</label>
          <input size="15" type="" name="">    
        </div>
        <div class="col-md-3">
          <label>School ID:</label>
          <input size="10" type="" name="">  
        </div>
        <div class="col-md-2">
          <label>District:</label>
          <input size="5" type="" name="">  
        </div>
        <div class="col-md-2">
          <label>Division:</label>
          <input size="5" type="" name="">  
        </div>
        <div class="col-md-2">
          <label>Region:</label>
          <input size="3" type="" name="">  
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <label>Classified as Grade:</label>
          <input size="2" type="" name="">    
        </div>
        <div class="col-md-2">
          <label>Section:</label>
          <input size="5" type="" name="">  
        </div>
        <div class="col-md-2">
          <label>School Year:</label>
          <input size="10" type="" name="">  
        </div>
        <div class="col-md-3">
          <label>Name of Adviser/Teacher:</label>
          <input size="20" type="" name="">  
        </div>
        <div class="col-md-2">
          <label>Signature:</label>
          <input size="10" type="" name="">  
        </div>
      </div>
    <br>
    </div>
    <table align="center">     
            <tr>
              <th rowspan="2">Learning Areas</th>
              <th colspan="4">Quarterly Rating</th>
              <th rowspan="2">Final Rating</th>
              <th rowspan="2">Remarks</th>
            </tr>
            <tr>
              <td>1</td>
              <td>2</td>
              <td>3</td>
              <td>4</td>
            </tr>
            <tr>
              <td>z</td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="6" type="" name=""></td>
            </tr>
            <tr>
              <td>z</td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="6" type="" name=""></td>
            </tr>
            <tr>
              <td>z</td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="6" type="" name=""></td>
            </tr>
            <tr>
              <td colspan="5" style="text-align: center;">General Average</td>
              <td></td>
            </tr>
    </table>
    <div class="row">
      <div class="col-md-1">
      </div>
      <div class="col-md-2">
        <label>Remedial Classes</label>
      </div>
      <div class="col-md-9">
        <label>Conducted from (mm/dd/yyyy)</label>
        <input type="" name="">
        <label>to(mm/dd/yyyy)</label>
        <input type="" name="">
      </div> 
    </div>
    <table>
      <tr>
        <th>Learning Areas</th>
        <th>Final Rating</th>
        <th>Remedial Class Mark</th>
        <th>Recomputed Final Grade</th>
        <th>Remarks</th>
      </tr>
      <tr>
        <td>z</td>
        <td><input size="4" type="" name=""></td>
        <td><input size="4" type="" name=""></td>
        <td><input size="4" type="" name=""></td>
        <td><input size="6" type="" name=""></td>
      </tr>
      </tr>
      <tr>
        <td>z</td>
        <td><input size="4" type="" name=""></td>
        <td><input size="4" type="" name=""></td>
        <td><input size="4" type="" name=""></td>
        <td><input size="6" type="" name=""></td>
      </tr>      </tr>
    </table>
    </div>
    <div class="row">
      <div class="col-md-3">
        <label>School:</label>
        <input size="10" type="" name="">    
      </div>
      <div class="col-md-3">
        <label>School ID:</label>
        <input size="10" type="" name="">  
      </div>
      <div class="col-md-2">
        <label>District:</label>
        <input size="3" type="" name="">  
      </div>
      <div class="col-md-2">
        <label>Division:</label>
        <input size="3" type="" name="">  
      </div>
      <div class="col-md-2">
        <label>Region:</label>
        <input size="3" type="" name="">  
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <label>Classified as Grade:</label>
        <input size="2" type="" name="">    
      </div>
      <div class="col-md-2">
        <label>Section:</label>
        <input size="5" type="" name="">  
      </div>
      <div class="col-md-2">
        <label>School Year:</label>
        <input size="10" type="" name="">  
      </div>
      <div class="col-md-3">
        <label>Name of Adviser/Teacher:</label>
        <input size="20" type="" name="">  
      </div>
      <div class="col-md-2">
        <label>Signature:</label>
        <input size="10" type="" name="">  
      </div>
    </div>
    <br>
    <table align="center">     
            <tr>
              <th rowspan="2">Learning Areas</th>
              <th colspan="4">Quarterly Rating</th>
              <th rowspan="2">Final Rating</th>
              <th rowspan="2">Remarks</th>
            </tr>
            <tr>
              <td>1</td>
              <td>2</td>
              <td>3</td>
              <td>4</td>
            </tr>
            <tr>
              <td>z</td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="6" type="" name=""></td>
            </tr>
            <tr>
              <td>z</td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="6" type="" name=""></td>
            </tr>
            <tr>
              <td>z</td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="4" type="" name=""></td>
              <td><input size="6" type="" name=""></td>
            </tr>
            <tr>
              <td colspan="5" style="text-align: center;">General Average</td>
              <td></td>
            </tr>
    </table>
    <div class="row">
      <div class="col-md-1">
      </div>
      <div class="col-md-2">
        <label>Remedial Classes</label>
      </div>
      <div class="col-md-9">
        <label>Conducted from (mm/dd/yyyy)</label>
        <input type="" name="">
        <label>to(mm/dd/yyyy)</label>
        <input type="" name="">
      </div> 
    </div>
    <table>
      <tr>
        <th>Learning Areas</th>
        <th>Final Rating</th>
        <th>Remedial Class Mark</th>
        <th>Recomputed Final Grade</th>
        <th>Remarks</th>
      </tr>
      <tr>
        <td>z</td>
        <td><input size="4" type="" name=""></td>
        <td><input size="4" type="" name=""></td>
        <td><input size="4" type="" name=""></td>
        <td><input size="6" type="" name=""></td>
      </tr>
      <tr>
        <td>z</td>
        <td><input size="4" type="" name=""></td>
        <td><input size="4" type="" name=""></td>
        <td><input size="4" type="" name=""></td>
        <td><input size="6" type="" name=""></td>
      </tr>
      </tr>
    </table>
    <div>
      <h2>CERTIFICATION</h2>
    </div>
    <div class="row">
      <div class="col-md-12">
        <label>I CERTIFY that this is a true record of</label>
          <input type="" name="">
        <label>with LRN</label>
          <input type="" name="">
        <label>and that he/she is eligible for admission to Grade</label>
          <input size="26" type="" name="">
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <label>Name of School:</label>
        <input type="" name="">
      </div>
      <div class="col-md-3">
        <label>School Id:</label>
        <input type="" name="">
      </div>
      <div class="col-md-6">
        <label>Last School Year Attended:</label>
        <input type="" name="">
      </div>
    </div>
    <div class="row">
    </div>
    <div class="row">
      <div class="col-md-3">
        <input type="" name="">
      </div>
      <div class="col-md-3">
        <input size="45" type="" name="">
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <label>Date</label>
      </div>
      <div class="col-md-6">
        <label>Signature of Principal/School Head over Printed Name</label>
      </div>
      <div class="col-md-3">
        <label>(Affix School Seal Here)</label>
      </div>
    </div>


  </div>
</body>	
</html>