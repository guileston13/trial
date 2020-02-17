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
           <span class="user__name">  <h6><?php $it = $this->session->userdata('user_id');
                    $net = $this->db->query("SELECT * from tbl_instructor where user_id = '$it'")->result();
                        
               ?><?php echo $net[0]->firstname?> <?php echo $net[0]->lastname?>!</span></h6>
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
        <!-- <-------------------Setting-------------------- -->
        <li class="nav-header">
         Component Settings
        </li>
        <li class="nav-item py-1 nav-active">
          <a href="<?php echo base_url()?>teacher_dashboard" class="nav-link" href="logs.html">
            <i class="far fa-clock"></i>
            <span class="ml-2">Dashboard</span>
          </a>
        </li>
        <li class="nav-item py-1">
          <a href="<?php echo base_url()?>teacher_dashboard/advisory" class="nav-link" href="logs.html">
            <i class="far fa-clock"></i>
            <span class="ml-2">Advisory</span>
          </a>
        </li>
        <li class="nav-item py-1">
          <a href="<?php echo base_url()?>teacher_dashboard/final_grade" class="nav-link" href="logs.html">
            <i class="far fa-clock"></i>
            <span class="ml-2">View Grades</span>
          </a>
        </li>
        <!-- <-------------------Enrollment-------------------- --> 
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
                <div class="card-body">
                    <form action="<?php echo base_url()?>teacher_dashboard" method="POST">
                        <div class="row">
                            <div class="col-md-3">
                                <select name="school_year" id="school_year" class="form-control">
                                    <?php foreach($class as $sy){?>
                                        <option value="<?php echo $sy->schoolyear_id?>"><?php echo $sy->schoolyear_start?></option>
                                    <?php }?>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <button type=submit class="btn"> Search</button>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <h3><?php echo $classes?$classes[0]->schoolyear_start:null;?></h3>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Section</th> 
                                <th>Subject Code</th> 
                                <th>View Students</th> 
                                <th>Add Attendance</th>
                                <th>Attendance</th>
                                <th>Book</th>
                            </tr> 
                        </thead>
                        <tbody> 
                            <?php foreach($classes as $class){?>
                                <tr class="text-center">
                                    <td><?php echo $class->section_name?></td>
                                    <td><?php echo $class->subj_code?></td>
                                    <td><a target = "_blank" class="btn btn-primary btn-block" href="<?php echo base_url()?>teacher_dashboard/teacher_specific_classes/<?php echo $class->class_id?>/<?php echo $class->section_id?>/<?php echo $class->subj_id?>">View</a> </td>
                                    <td><a target = "_blank" class="btn btn-info btn-block" href="<?php echo base_url()?>teacher_dashboard/add_list_attendance/<?php echo $class->class_id?>/<?php echo $class->section_id?>/<?php echo $class->subj_id?>">Daily Attendance</a></td>
                                    <td><a target = "_blank" class="btn btn-info btn-block" href="<?php echo base_url()?>teacher_dashboard/form2/<?php echo $class->class_id?>/<?php echo $class->section_id?>/<?php echo $class->subj_id?>">School Form 2</a></td>
                                    <td><a target = "_blank" class="btn" style="background-color: #29dc27; color: white" href="<?php echo base_url()?>teacher_dashboard/add_book/<?php echo $class->class_id?>/<?php echo $class->section_id?>/<?php echo $class->subj_id?>/<?php echo $classes[0]->schoolyear_id; ?>"> Add Book</a></td>
                                </tr>
                            <?php }?>
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>
    </div>