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
        <li class="nav-item py-1">
          <a href="<?php echo base_url()?>assign_subject" class="nav-link" href="logs.html">
            <i class="far fa-clock"></i>
            <span class="ml-2">Section</span>
          </a>
        </li>
        <li class="nav-item py-1 nav-active">
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
      <div class="body pt-6 pb-6">
            <div class="container-fluid mt-5">
                <div class="card col-md-12">
                    <div class="card-body">
                        <!-- Instructor Body -->
                        <div class="nav-wrapper">
                            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="fa fa-plus mr-2"></i>Classes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="fa fa-plus mr-2"></i>View Subjects</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card shadow mt-5">
                            
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                        <div>
                                          <div class="row">
                                            <form action="<?php echo base_url()?>add_class" method="POST">
                                              <div class="col">
                                                <select name="school_year" id="school_year" class="form-control">
                                                  <?php foreach($school_year as $sy){ ?>  
                                                    <option value="<?php echo $sy->schoolyear_id?>"><?php echo $sy->schoolyear_start?></option>
                                                  <?php }?>
                                                </select>
                                                <br>
                                                <button class="form-control" type="submit">Search</button>
                                              </div>
                                            </form>
                                          </div>
                                            <h2 class="text-center">School Year: <?php echo $school_year_display?$school_year_display[0]->schoolyear_start:null ?></h2>
                                            <?php if($new_ss!=0){
                                              for($i=7;$i<=10;$i++){ ?>
                                                Grade <?php echo $i;
                                                  $trial = $this->db->query("SELECT tbl_section.subj_grade_level,tbl_class.section_id,tbl_section.section_name,tbl_schoolyear.schoolyear_start,tbl_instructor.firstname,tbl_instructor.lastname,tbl_class.class_id
                                                  from tbl_class,tbl_section,tbl_schoolyear,tbl_instructor
                                                      where tbl_class.section_id = tbl_section.section_id
                                                      AND tbl_class.schoolyear_id = tbl_schoolyear.schoolyear_id
                                                      AND tbl_instructor.teacher_id = tbl_class.teacher_id
                                                      AND tbl_section.subj_grade_level = '$i'
                                                      AND tbl_schoolyear.schoolyear_id = '$new_ss'")->result();
                                                ?>
                                            <table class="table table-bordered table-striped" id="instructorTable" style="text-align: center">
                                                <thead>
                                                    <tr>
                                                        <th style="font-size: 15px">Grade Level</th>
                                                        <th style="font-size: 15px">Section</th>
                                                        <th style="font-size: 15px">Adviser</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($trial as $class){ ?>
                                                    <tr>
                                                        <td><?php echo $class->subj_grade_level?></td>
                                                        <td><?php echo $class->section_name?></td>
                                                        <td><?php echo $class->firstname.' '.$class->lastname?></td>
                                                        <td><a  href="<?php echo base_url()?>add_class/view_classes/<?php echo $class->class_id?>"><button class="btn btn-success">View</button></a></td>
                                                    </tr>
                                                    <?php }?>
                                                </tbody>
                                            </table>

                                                    <?php }
                                                  }?>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                    <div>
                                            <table class="table table-bordered table-striped" id="subjectTable" style="text-align: center">
                                                <thead>
                                                    <tr>
                                                        <th style="font-size: 12px">Subject Code</th>
                                                        <th style="font-size: 12px">Description</th>
                                                        <th style="font-size: 12px">GradeLevel</th>
                                                     
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($query as $q):?>
                                                    <tr>
                                                        <td><?php echo $q->subj_code?></td>
                                                        <td><?php echo $q->subj_desc?></td>
                                                        <td><?php echo $q->subj_grade_level?></td>
                                                    </tr>
                                                    <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>