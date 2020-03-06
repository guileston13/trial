<script src="<?php echo base_url(); ?>assets/js/student_class.js"></script>

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
        <li class="nav-item py-1 ">
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
        <li class="nav-item py-1">
          <a href="<?php echo base_url()?>manage_students" class="nav-link" href="list.html">
            <i class="fas fa-users"></i>
            <span class="ml-2">Add / Enroll Students</span>
          </a>
        </li>

        <li class="nav-item py-1 nav-active">
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
            <div class="container-fluid mt-5 mb-5">
                <div class="card col-md-12">
                <div class="card-body">
                        <!-- Instructor Body -->
                        <h1 class="text-muted">Enrolled Student </h1>
                        <hr>
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                        <!-- Table Students -->
                                        <form action="<?php echo base_url()?>student_class" method="POST">
                                          <div class="row">
                                            <div class="col-md-3">
                                              <label for="">School Year</label>
                                              <select name="school_year" id="school_year1" class="form-control">
                                                <?php foreach($school_year as $sy) {?>
                                                  <option value="<?php echo $sy->schoolyear_id?>"><?php echo $sy->schoolyear_start?></option>
                                                <?php }?>
                                              </select>
                                            </div>
                                            <div class="col-md-3">
                                              <label for="">Grade Level</label>
                                              <select name="grade_level" id="grade_level1" class="form-control">
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                              </select>
                                            </div>
                                            <div class="col-md-3">
                                              <label for="">Section</label>
                                              <select name="section" id="section1" class="form-control">
                                                  <option></option>
                                              </select>
                                            </div>
                                            <div class="col-md-3">
                                              <label for="">Click to Search </label>
                                              <button class="form-control" type="submit">Search</button>
                                            </div>
                                          </div>
                                        </form>
                                        <hr>
                                        <h2 class="text-center">School Year: <?php echo $class?$class[0]->schoolyear_start:null?></h2>
                                        <div>
                                            <table class="table table-bordered table-striped" id="instructorTable" style="text-align: center">
                                                <thead>
                                                  <tr>
                                                      <th style="font-size: 12px">Student</th>
                                                      <th style="font-size: 12px">Section</th>
                                                      <th style="font-size: 12px">Grade Level</th>
                                                      <th style="font-size: 12px">Action</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <?php foreach($class as $key) {?>
                                                      <tr>
                                                      <td><?php echo $key->firstname?> <?php echo $key->lastname?>  </td>
                                                      <td><?php echo $key->section_name?></td>
                                                      <td><?php echo $key->subj_grade_level?></td>
                                                      <td><a href="<?php echo base_url()?>student_class/change_section/<?php echo $key->studentid ?>" class="btn btn-danger">Change Section</a></td>
                                                      </tr>
                                                  <?php }?>
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