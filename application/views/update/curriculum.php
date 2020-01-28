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
        <li class="nav-item py-1 nav-active">
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
        <li class="nav-item py-1">
          <a href="<?php echo base_url()?>manage_students" class="nav-link" href="list.html">
            <i class="fas fa-users"></i>
            <span class="ml-2">Add / Enroll Students</span>
          </a>
        </li>

        <li class="nav-item py-1">
          <a href="<?php echo base_url()?>student_class" class="nav-link" href="logs.html">
            <i class="far fa-clock"></i>
            <span class="ml-2">Enrolled</span>
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
                                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="fa fa-plus mr-2"></i>Add Curriculum</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="fa fa-list mr-2"></i>View All Curriculum</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card shadow" ng-controller="alertCtrl">
                            <div class="card-body p-5">
                                <div class="tab-content" id="myTabContent">
                                <span class="text-danger"> <?php echo $this->session->flashdata('narco'); ?></span>
                                    <!-- <div class="tab-pane fade " id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab"> -->
                                    <div class="tab-pane fade" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                        <!-- Add New Instructor Tab -->
                                        <form action="<?php echo base_url()?>Manage_Subjects/assign_subjects" method="POST">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">School Year</label>
                                                        <select class="form-control" name="schoolyear_id">
                                                            <?php foreach($schoolyear as $school){ ?>
                                                                <option value="<?php echo $school->schoolyear_id; ?>"><?php echo $school->schoolyear_start; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Grade Level</label>
                                                        <select ng-model="grade_level" name="grade_level" class = "form-control"  style="padding: 3px;">
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- <div class="row">
                                              <div class="col border mb-2 mr-2 py-3" ng-repeat="x in subject | filter : grade_level">
                                                  <div class="form-group text-center">
                                                      <input class="form-control" type="checkbox" name="subjects[]"  value="{{x.subj_id}}"> 
                                                      <span class="badge badge-primary">{{x.subj_code}}</span>
                                                  </div>
                                              </div>
                                            </div> -->
                                            <div class="row">
                                              <table class="table table-bordered table-striped" id="instructorTable" style="text-align: center">
                                                <thead>
                                                    <tr>
                                                        <th style="font-size: 12px">#</th>
                                                        <th style="font-size: 12px">Subject Code</th>
                                                        <th style="font-size: 12px">Description</th>
                                                    </tr>
                                                    <tr ng-repeat="x in subject | filter : { subj_grade_level : grade_level  }">
                                                        <td><input style="width:20px;height:20px;" type="checkbox" name="subjects[]"  value="{{x.subj_id}}"></td>
                                                        <td>{{x.subj_code}}</td>
                                                        <td>{{x.subj_desc}}</td>
                                                    </tr>
                                                </thead>
                                              </table>
                                            </div>
                                            <div class="clearfix">
                                                <input class="btn btn-flat btn-success float-right" type="submit" name="assign_subject" value="Create" >
                                            </div>
                                        </form>
                                    </div>
                                    <!-- <div class="tab-pane fade show active" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab"> -->
                                    <div class="tab-pane fade show active" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                        <div>
                                            <?php ?>
                                            <div class="row">
                                              <form action="<?php echo base_url()?>manage_subjects" method="POST">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Year</label>
                                                        <select name="year" class="form-control">
                                                            <?php foreach ($sy as $key): ?>
                                                                <option value="<?php echo $key->schoolyear_id?>"><?php echo $key->schoolyear_start?></option>
                                                            <?php endforeach ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <input class="form-control" type="submit">
                                                    </div>
                                                </div> 
                                              </form>
                                            </div>
                                            
                                            <?php 
                                            if($school_year_row != 0){
                                              
                                            
                                            for($i=7;$i<=12;$i++){ ?>
                                              Grade <?php echo $i;
                                                 $trial = $this->db->query("SELECT * from tbl_curriculum,tbl_schoolyear,tbl_subject  
                                                  where tbl_curriculum.schoolyear_id = tbl_schoolyear.schoolyear_id
                                                  and tbl_curriculum.subj_id = tbl_subject.subj_id
                                                  AND tbl_curriculum.subj_grade_level = $i
                                                  AND tbl_schoolyear.schoolyear_id = $school_year_row
                                                  ")->result();
                                                
                                              ?>
                                              
                                                <table class="table table-bordered table-striped"  id="subjectTable" style="text-align: center">
                                                  <thead>
                                                    <tr>
                                                      <th style="font-size: 12px">Subject Code</th>
                                                      <th style="font-size: 12px">Description</th>
                                                      <th style="font-size: 12px">Action</th>
                                                    </tr>
                                                  </thead>
                                                  <tbody>
                                                    <?php foreach($trial as $key){  ?>
                                                        <tr>
                                                          <td><?php echo $key->subj_code;?></td>
                                                          <td><?php echo $key->subj_desc?></td>
                                                          <td>
                                                            <a class="btn btn-danger" href="<?php echo base_url()?>manage_subjects/UnassignSubject/<?php echo $key->curriculum_id;?>">
                                                            Unassign
                                                            </a>
                                                          </td>                                                            
                                                        </tr>
                                                    <?php } ?>
                                                  </tbody>
                                                </table>
                                            <?php ?>
                                            
                                          
                                            <?php }
                                            }
                                            else {
                                              echo "Empty";
                                            } ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>