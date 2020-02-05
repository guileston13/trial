<body ng-app="starter">
  <div class="row no-gutters">
    <aside class="col-md-2 fixed-sidebar p-0 d-flex flex-column">
      <ul class="nav flex-column">
        <li class="nav-header">
          Admin Panel
        </li>
      </ul>
      <div class="px-3">
        <figure class="figure d-flex align-items-center mt-3">
          <div class="user__img">
            <img class="img__logo" src="<?php echo base_url() ?>assets/img/logo.jpg" alt="logo">
          </div>
          <figcaption class="user__status ml-3 d-flex flex-column justify-content-between">
            <h6 class="user__name">Superuser</h6>
            <span class="user__state"><i class="fas fa-circle text-success"></i> Online</span>
          </figcaption>
        </figure>

        <form action="">
          <div class="form-group">
            <input type="text" class="form-control search__input" id="search" placeholder="Search..." autocomplete="off">
          </div>
        </form>
      </div>

      <ul class="nav flex-column">
        <li class="nav-item py-1">
          <a href="<?php echo base_url() ?>dashboard" class="nav-link" href="index.html">
            <i class="fas fa-tachometer-alt"></i>
            <span class="ml-2">Dashboard</span>
          </a>
        </li>
        <!-- <-------------------Setting-------------------- -->
        <li class="nav-header">
         Component Settings
        </li>
        <li class="nav-item py-1">
          <a href="<?php echo base_url()?>curriculum" class="nav-link" href="logs.html">
            <i class="far fa-clock"></i>
            <span class="ml-2">Add School Year / Subject</span>
          </a>
        </li>
        <li class="nav-item py-1">
          <a href="<?php echo base_url()?>manage_subjects" class="nav-link" href="logs.html">
            <i class="far fa-clock"></i>
            <span class="ml-2">Curriculum</span>
          </a>
        </li>
        <li class="nav-item py-1">
          <a href="<?php echo base_url()?>assign_subject" class="nav-link" href="logs.html">
            <i class="far fa-clock"></i>
            <span class="ml-2">Section</span>
          </a>
        </li>
        <li class="nav-item py-1">
          <a href="<?php echo base_url()?>add_class" class="nav-link" href="logs.html">
            <i class="far fa-clock"></i>
            <span class="ml-2">Classes</span>
          </a>
        </li>
        <li class="nav-item py-1">
          <a href="<?php echo base_url()?>create_book" class="nav-link" href="logs.html">
            <i class="far fa-clock"></i>
            <span class="ml-2">Books</span>
          </a>
        </li>
        
        
        <!-- <-------------------Enrollment-------------------- --> 
        <li class="nav-header">
          Registrar
        </li>
        <li class="nav-item py-1 nav-active">
          <a href="<?php echo base_url()?>manage_students" class="nav-link" href="list.html">
            <i class="fas fa-users"></i>
            <span class="ml-2">Add / Enroll Students</span>
          </a>
        </li>

        <li class="nav-item py-1 ">
          <a href="<?php echo base_url()?>student_class" class="nav-link" href="logs.html">
            <i class="far fa-clock"></i>
            <span class="ml-2">Lists of Enrollees</span>
          </a>
        </li>
        
        <li class="nav-item py-1">
          <a href="<?php echo base_url()?>manage_instructors"  class="nav-link" href="create.html">
            <i class="fas fa-user"></i>
            <span class="ml-2">Instructor</span>
          </a>
        </li>
        <!-- <-------------------Student-------------------- -->
        
        <li class="nav-item py-1">
          <a href="<?php echo base_url()?>logout" class="nav-link" href="#">
            <i class="fas fa-sign-out-alt"></i>
            <span class="ml-2">Logout</span>
          </a>
        </li>
      </ul>
      <footer class="footer mt-auto text-center text-light py-2">
        &copy; 2018-2019
      </footer>
    </aside>
    <main class="col-md-10 offset-2">
      <!-- Content Start -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">Academic</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03"
         aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
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
                                                        <input class="form-control" type="text" name="fathersname" required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Mothers Name</label>
                                                        <input class="form-control" type="text" name="mothersname" required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Guardians Name</label>
                                                        <input class="form-control" type="text" name="guardiansname" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Relationship of Guardian</label>
                                                        <input class="form-control" type="text" name="relationship" required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Contact Number(Parent/Guardian)</label>
                                                        <input class="form-control" type="text" name="contactnumber" required>
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
                                                        <input class="form-control" type="text" name="ip" required>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Religion</label>
                                                        <input class="form-control" type="text" name="religion" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">House#/Street/Sitio/Purok</label>
                                                        <input class="form-control" type="text" name="house" required>
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
                                                <input class="btn btn-flat btn-success" type="submit" name="submitstudent"  onclick="return confirm('Are you sure Enroll?')" value="Add Students"/>
                                            </div>
                                        </form>
                                    </div>
                                    
                                    <div class="tab-pane fade show active" id="tabs-icons-text-2" ng-controller="alertCtrl" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                        <form action="<?php echo base_url()?>manage_students" method="POST">
                                            <div class="row">
                                                <div class="col-md-3">
                                                
                                                    <select class="form-control" name="school_year">
                                                        <?php foreach($school_year as $sy){?>
                                                            <option value="<?php echo $sy->schoolyear_id?>"><?php echo $sy->schoolyear_start?></option>
                                                        <?php }?>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <button class="form-control" type="submit">
                                                        Search
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                                <h2 class="text-center">School Year: <?php   if($section){ echo $section[0]->schoolyear_start?><input type="hidden" name="school_year" value="<?php echo $section[0]->schoolyear_id?>" > <?php   }else{ echo " ";}?></h2>
                                        <!-- Table Students -->
                                        <div >
                                    <form action="<?php echo base_url();?>Manage_Students/enroll_student" method="POST">   
                                        <button class="btn" style="background-color:red;color:white"><?php echo $this->session->flashdata('narco');?></button class="btn"><br>
                                        <button class="btn" style="background-color:green;color:white"><?php echo $this->session->flashdata('success');?></button class="btn"><br>
                                        <div class="form-group">
                                            <label class="form-control-label">Available Section: </label>
                                            <div class="w-25 d-flex">
                                                <select name="class_id" ng-model="ban" class="form-control mr-3">    
                                                <!-- <select name="class_id" ng-model="ban" class="selectpicker" data-show-subtext="true" data-live-search="true"> -->
                                                    <?php foreach($section as $key){?>
                                                        <option value="<?php echo $key->class_id?>"> <?php echo $key->section_name?></option>
                                                    <?php  } ?>
                                                </select>
                                                <input class="btn btn-primary" type="submit" name="" onclick="return confirm('Are you sure Enroll?')" value="Enroll">
                                            </div>
                                        </div>
                                            <input type="text" placeholder="Input Student Name ..." ng-model="student_name" class="form-control"> <br>
                                            <input type="hidden" name="school_year_id" value="<?php echo $section?$section[0]->schoolyear_id:""?>">
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
                                                        <tr ng-repeat="x in student | filter : student_name ">
                                                            
                                                            <td>{{x.lrn}}</td>
                                                            <td>{{x.firstname}} {{x.lastname}}  </td>
                                                            <td>{{x.contactnumber}}</td>
                                                            <td>
                                                                <input class="form-control" type="checkbox" name="studentid[]" value="{{x.studentid}}" >
                                                            </td>
                                                        </tr>
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