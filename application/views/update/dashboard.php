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
        <li class="nav-item py-1 nav-active">
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
        <a class="navbar-brand">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03"
         aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
      <div class="container-fluid mt-3">
        <div class="row">
          <div class="col-md-4">
            <div class="card card__sm d-flex flex-row justify-content-between align-items-center">
              <div class="card__icon--1 d-flex justify-content-center align-items-center align-self-stretch">
                <i class="fas fa-users text-light"></i>
              </div>
              <div class="card__description ml-3">
                <h3 class="card__title--1">Instructor</h3>
                <h3 class="card__subtitle"><?php echo $instructors ?></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card__sm d-flex flex-row justify-content-between align-items-center">
              <div class="card__icon--2 d-flex justify-content-center align-items-center align-self-stretch">
                <i class="fas fa-plug text-light"></i>
              </div>
              <div class="card__description ml-3">
                <h3 class="card__title--2">Student</h3>
                <h3 class="card__subtitle"><?php echo $students; ?></h3>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card card__sm d-flex flex-row justify-content-between align-items-center">
              <div class="card__icon--3 d-flex justify-content-center align-items-center align-self-stretch">
                <i class="fas fa-chart-line text-light"></i>
              </div>
              <div class="card__description ml-3">
                <h3 class="card__title--3">Subject</h3>
                <h3 class="card__subtitle"><?php echo $subjects; ?></h3>
              </div>
            </div>
          </div>
        </div>
        <!-- Content End -->
    </main>
  </div>

  <!-- Create Subject -->
  <div class="modal fade" id="createSubject" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">

    


         <form action="<?php echo base_url();?>index.php/Angular/CreateSubject" method="POST" >
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Subject</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Subject</label>
            <input type="text" name="subjectName"  class="form-control">
          </div>
          <div class="form-group">
            <label>Section Code</label>
            <input type="text" name="subjectCode" class="form-control">
          </div>
          <div class="form-group">
            <label>Course</label>
            <select class="form-control" name="departmentid">
                              <?php foreach ($department as $key): ?>
                                  <option value="<?php echo $key->departmentid ?>"><?php  echo $key->departmentName ?></option>
                              <?php endforeach ?>
                            </select> 
            
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
      </form>
    </div>
  </div>

  <!-- Create Section-->
  <div class="modal fade" id="createSection" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
      <form action="<?php echo base_url();?>index.php/Angular/CreateSection" method="POST">
        <div class="modal-header">


          <h5 class="modal-title">Add Section</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Section Name</label>
            <input type="text" name="sectionname" class="form-control">
          </div>
          <div class="form-group">
            <label>Course</label>
            <select name="departmentid" class="form-control">
                              <?php foreach ($department as $key): ?>
                                  <option value="<?php echo $key->departmentid ?>"><?php  echo $key->departmentName ?></option>
                              <?php endforeach ?>
                            </select> 
            
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Create Department-->
  <div class="modal fade" id="createDepartment" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form action="<?php echo base_url();?>index.php/Angular/CreateDepartment" method="POST">  
                        
                        
                      
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Add Department</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Department Name</label>
            <input type="text" name="DepartmentName" class="form-control">
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
      </form>
    </div>
  </div>