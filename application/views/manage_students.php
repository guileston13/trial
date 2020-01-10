
    <!-- Main content -->
    <div class="main-content">
        <!-- Top navbar -->
        <nav class="navbar navbar-top navbar-expand-md bg-white" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand -->
                <a class="h4 mb-0 text-primary text-uppercase d-none d-lg-inline-block" href="./index.php">Manage Students</a>
                <!-- User -->
                <ul class="navbar-nav align-items-center d-none d-md-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src="./assets/img/theme/avatar.png">
                                </span>
                                <div class="media-body ml-2 d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold">
                                        Admin
                                    </span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome!</h6>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a href="logout" class="dropdown-item">
                                <i class="ni ni-user-run"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="body pt-6 pb-6">
            <div class="container-fluid mt-5 mb-5">
                <div class="card col-md-12">
                    <div class="card-body">
                        <!-- Instructor Body -->
                        <div class="nav-wrapper">
                            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0 " id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="false"><i class="fa fa-plus mr-2"></i>Add New Student</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="true"><i class="fa fa-list mr-2"></i>View All Students</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade " id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                        <!-- Add New Instructor Tab -->
                                        <form  action="<?php echo base_url()?>manage_students" method="POST">
                                        
                                            <h1 class="border-bottom text-primary">Personal Information</h1>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Username</h3>
                                                        <input class="form-control" type="text" name="username" required> 
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">First Name</label>
                                                        <input class="form-control" type="text" name="firstname" required>
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Middle Name</label>
                                                        <input class="form-control" type="text" name="middlename" required>
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Last Name</label>
                                                        <input class="form-control" type="text" name="lastname" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">LRN</label>
                                                        <input class="form-control" type="text" name="lrn" required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Birth Date</label>
                                                        <input class="form-control" type="date" name="birthdate" required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Age</label>
                                                        <input class="form-control" type="number" name="age" required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Sex</label>
                                                        <select class="form-control" name="gender">
                                                            <option value="male">Male</option>
                                                            <option value="femail">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <h1 class="border-bottom text-primary">Guardian</h1>
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Fathers Name</label>
                                                        <input class="form-control" type="number" name="fathersname" required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Mothers Name</label>
                                                        <input class="form-control" type="number" name="mothersname" required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Guardians Name</label>
                                                        <input class="form-control" type="number" name="guardiansname" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Relationship of Guardian</label>
                                                        <input class="form-control" type="number" name="relationship" required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Contact Number(Parent/Guardian)</label>
                                                        <input class="form-control" type="number" name="contactnumber" required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Birth Place</label>
                                                        <input class="form-control" type="text" name="birthplace" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Mother Tongue</label>
                                                        <input class="form-control" type="text" name="mothertongue" required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">IP(Specify Ethnic Group)</label>
                                                        <input class="form-control" type="number" name="ip" required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Religion</label>
                                                        <input class="form-control" type="number" name="religion" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">House#/Street/Sitio/Purok</label>
                                                        <input class="form-control" type="number" name="house" required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Barangay</label>
                                                        <input class="form-control" type="text" name="barangay" required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Municipality/City</label>
                                                        <input class="form-control" type="text" name="city" required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Province</label>
                                                        <input class="form-control" type="text" name="province" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Remarks</label>
                                                        <select class="form-control" name="remarks">
                                                            <option value="T/O">T/O</option>
                                                            <option value="T/I">T/I</option>
                                                            <option value="DRP">DRP</option>
                                                            <option value="LE">LE</option>
                                                            <option value="CCT">CCT</option>
                                                            <option value="B/A">B/A</option>
                                                            <option value="LWD">LWD</option>
                                                            <option value="ACL">ACL</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                    
                                            <div class="clearfix text-center">
                                                <input class="btn btn-flat btn-success" type="submit" name="submitstudent" value="Add Students"/>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <div class="tab-pane fade show active" id="tabs-icons-text-2" ng-controller="alertCtrl" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                                <h2 class="text-center">School Year: <?php   if($section){ echo $section[0]->schoolyear_start;  }else{ echo " ";}?></h2>
                                        <!-- Table Students -->
                                        <div >
                                    <form action="<?php echo base_url();?>Manage_Students/enroll_student" method="POST">   
                                        <span><?php echo $this->session->flashdata('narco');?></span><br>
                                        
                                        <div class="form-group">
                                            <label class="form-control-label">Available Section: </label>
                                            <div class="w-25 d-flex">
                                                <select name="class_id" ng-model="ban" class="form-control mr-3">    
                                                    <?php foreach($section as $key){?>
                                                        <option value="<?php echo $key->class_id?>"> <?php echo $key->section_name?></option>
                                                    <?php  } ?>
                                                </select>
                                                <input class="btn btn-primary" type="submit" name="" value="Enroll">
                                            </div>

                                        </div>
                                      
                                        
                                               
                                            <table class="table table-bordered table-striped"  id="studentTable" style="text-align: center">
                                                <thead>
                                                    <tr>
                                                        <th style="font-size: 12px">LRN</th>
                                                        <th style="font-size: 12px">Students Name</th>
                                                        <th style="font-size: 12px">Contact Number</th>
                                                        <th style="font-size: 12px">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($student_rows as $student): ?>
                                                        <tr>
                                                            
                                                            <td><?php echo $student->lrn; ?></td>
                                                            <td><?php echo $student->firstname?> <?php echo $student->lastname?>  </td>
                                                            <td><?php echo $student->contactnumber; ?> </td>
                                                            <td>
                                                                <input class="form-control" type="checkbox" name="studentid[]" value="<?php echo $student->studentid?>" >
                                                             <!-- <a class="btn btn-primary btn-sm mb-3" href="<?php echo base_url();?>Manage_Students/enroll_student/{{ban}}/<?php echo $student->studentid?>">Enroll</a> -->
                                                               
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; ?> 
                                                </tbody>
                                            </table>
                                           
                                        </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Enroll Modal -->
        <div class="modal fade" id="enrollStudentModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Enroll Student</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-4">
                                <!-- School Year -->
                                <div style="padding: 12px 5px 5px 15px;">
                                    <div class="row">
                                        <h3>School Year</h3>
                                    </div>
                                    <div class="row">
                                        <select name="schoolyear" style="padding: 3px;">
                                            <option value="select">Select</option>
                                                <?php foreach($schoolyear_rows as $schoolyear): ?>
                                            <option value="<?php echo $schoolyear->schoolyear_id; ?>"><?php echo $schoolyear->schoolyear_start; ?>-<?php echo $schoolyear->schoolyear_end; ?></option>
                                                <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            
        <!-- Congrats Modal -->
        <div class="modal fade" id="congratsStudentModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Enroll Student</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <span class="fa fa-check fa-3x" style="float: left; margin-right: 20px;"></span>
                        <h1>The student has been enrolled!</h1>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Okay</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="footer">
            <div class="row align-items-center justify-content-xl-between">
                <div class="col-xl-12">
                    <div class="copyright text-center text-xl-left text-muted">
                        &copy; 2019 <a href="#" class="font-weight-bold ml-1" target="_blank">Chiro</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    