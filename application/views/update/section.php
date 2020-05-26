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
        <li class="nav-item py-1 nav-active">
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
            <span class="ml-2">List of Enrollees</span>
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

      
                    <!--////////////////////////// // -->
      <div class="body pt-6 pb-6">
            <div class="container-fluid mt-5 mb-5">
                <div class="card col-md-12">
                    <div class="card-body">
                        <!-- Instructor Body -->
                        <div class="nav-wrapper">
                            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0 " id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="fa fa-plus mr-2"></i>Add Section</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="fa fa-list mr-2"></i>Section List</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card shadow" ng-controller="alertCtrl">
                            <div class="card-body p-5">
                                <div class="tab-content" id="myTabContent">
                               <span class="text-danger"> <?php echo $this->session->flashdata('narco'); ?></span>
                                    <div class="tab-pane fade show " id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                      <!-- Add New Instructor Tab -->
                                      <form action="<?php echo base_url()?>Assign_Subject/add_section" method="POST">
                                          <div class="row">
                                              <div class="col-md-3">
                                                  <div class="form-group">
                                                      <h5><label class="form-control-label">School Year</label></h5>
                                                        
                                                      <select name="schoolyear_id" ng-model="schoolyear_id" class="form-control">
                                                          <?php  foreach($schoolyear as $sy){?>
                                                          <option value="<?php echo $sy->schoolyear_id?>"><?php echo $sy->schoolyear_start?></option>
                                                          <?php }?>
                                                      </select>
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="form-group">
                                                      <h5><label class="form-control-label">Grade Level</label></h5>
                                                      <select ng-model="subj_grade_level" name="subj_grade_level" class="form-control">
                                                          <option value="7">7</option>
                                                          <option value="8">8</option>
                                                          <option value="9">9</option>
                                                          <option value="10">10</option>
                                                      </select>
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="form-group">
                                                      <h5><label class="form-control-label">Adviser</label></h5>
                                                      <select class="form-control" name="adviser" style="padding: 3px;">
                                                          <?php foreach($teacher as $adviser){ ?>
                                                              <option value="<?php echo $adviser->teacher_id; ?>"><?php echo $adviser->firstname?> <?php echo $adviser->lastname?></option>
                                                          <?php } ?>    
                                                      </select>
                                                  </div>
                                              </div>
                                              <div class="col-md-3">
                                                  <div class="form-group">
                                                      <h5><label class="form-control-label">Section Name</label></h5>
                                                      <input type="text" name="section_naming" class="form-control" required>
                                                  </div>
                                              </div>
                                          </div>
                                          
                                          <div class="row">
                                          <div class="col-md-5 offset-md-3">
                                          <table class="table table-hover text-center">
                                              <thead>
                                                  <tr>
                                                      <th style="font-size: 20px;color: black">Subject</th>
                                                      <th style="font-size: 20px;color: black">Teacher</th>
                                                  </tr>
                                              </thead>
                                              <tbody>
                                                  <tr ng-repeat="x in curriculum | filter : { subj_grade_level : subj_grade_level } | filter : { schoolyear_id : schoolyear_id }">
                                                      <td> {{x.subj_code}} <input type="hidden" name="subj_code[]" value="{{x.subj_id}}"></td>
                                                      <td>
                                                              <select class="form-control" name="teacher[]" style="padding: 3px;">
                                                                  <?php foreach($teacher as $teach){ ?>
                                                                      <option value="<?php echo $teach->teacher_id; ?>">
                                                                          <?php echo $teach->firstname?> <?php echo $teach->lastname?></option>
                                                                  <?php } ?>    
                                                              </select>
                                                      </td>
                                                  </tr>                  
                                              </tbody>
                                          </table>                    
                                          </div>
                                          </div>

                                          <div class="clearfix">
                                          <input class="btn btn-flat btn-success float-right" type="submit" name="add_section" value="Create" >
                                          </div>
                                      </form>
                                    </div>
                                    <div class="tab-pane fade show active" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                      <div>
                                        <div class="row">
                                          <form action="<?php echo base_url()?>assign_subject" method="POST">
                                            <div class="col">
                                                <div class="form-group">
                                                    <select name="schoolyear" ng-model="schoolyear_id" class="form-control">
                                                      <?php $school_year = $this->db->query("SELECT * FROM tbl_schoolyear order by schoolyear_start desc ")->result();
                                                        foreach($school_year as $sy){
                                                      ?>
                                                      <option value="<?php echo $sy->schoolyear_id;?>"><?php echo $sy->schoolyear_start;?></option>
                                                        <?php }?>
                                                    </select>
                                                    <hr>
                                                    <select name="section" class="form-control" >
                                                      <option  ng-repeat="x in section | filter : { schoolyear_id : schoolyear_id }" value="{{x.section_id}}">{{ x.section_name }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                  <div class="form-group">
                                                      <input class="form-control" type="submit">
                                                  </div>
                                              </div>  
                                        </div>
                                        <h2 class="text-center">School Year: <?php echo $list_section?$list_section[0]->schoolyear_start:null ?></h2>
                                        <h3 class="text-center">Section: <?php echo $list_section?$list_section[0]->section_name:null ?></h3>

                                        <table class="table table-hover text-center">
                                                <tr>
                                                  <td style="font-size: 20px;color: black"><b>Subject Code</b></td>
                                                  <td style="font-size: 20px;color: black"><b>Description</b></td>
                                                  <td style="font-size: 20px;color: black"><b>Teacher</b></td>
                                                </tr>
                                                  <?php foreach($list_section as $ls){?>
                                                <tr>
                                                  <td><?php echo $ls->subj_code?></td>
                                                  <td><?php echo $ls->subj_desc?></td>
                                                  <td><?php echo $ls->lastname?>, <?php echo $ls->firstname?></td>
                                                </tr>
                                                  <?php }?>
                                        </table>
                                        </form>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
      </div>