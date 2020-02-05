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

        <li class="nav-item py-1">
          <a href="<?php echo base_url()?>student_class" class="nav-link" href="logs.html">
            <i class="far fa-clock"></i>
            <span class="ml-2">List of Enrollees</span>
          </a>
        </li>
        
        <li class="nav-item py-1 nav-active">
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
                                    <a class="nav-link mb-sm-3 mb-md-0 " id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="false"><i class="fa fa-plus mr-2"></i>Add New Instructor</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="true"><i class="fa fa-list mr-2"></i>View All Instructors</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade " id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                        <!-- Add New Instructor Tab -->
                                        <form action="<?php echo base_url()?>manage_instructors"  method="POST">
                                            <h3 class="text-danger"><?php echo$this->session->flashdata('message');?></h3>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="username" class="form-control-label">Username</label>
                                                        <input class="form-control"  type="text" name="username" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="firstname" class="form-control-label">Firstname</label>
                                                        <input class="form-control" type="text" name="firstname" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="middlename" class="form-control-label">Middlename</label>
                                                        <input class="form-control" type="text" name="middlename">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="lastname" class="form-control-label">Lastname</label>
                                                        <input class="form-control" type="text" name="lastname" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="lastname" class="form-control-label">Age</label>
                                                        <input class="form-control" type="number" name="age" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="lastname" class="form-control-label">Gender</label>
                                                        <select class="form-control" name="gender" required>
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="lastname" class="form-control-label">Contact number</label>
                                                        <input class="form-control" type="text" name="contactnumber" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="address" class="form-control-label">Address</label>
                                                    <textarea class="form-control" rows=4 cols=30 name="address" required></textarea>
                                                </div>
                                            </div>
                                            <div class="clearfix mt-3">
                                                <input class="btn btn-flat btn-success float-right" type="submit" name="submitinstructor"  onclick="return confirm('Are you sure Add?')" value="Add Instructor"/>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade show active" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                    <?php if($error){  echo $error;}else{}?>
                                        <!-- Table Students -->
                                        <table class="table table-bordered table-striped table-custom" id="instructorTable">
                                            <thead class="text-center">
                                                <tr>
                                                    <th style="font-size: 12px">#</th>
                                                    <th style="font-size: 12px">Username</th>
                                                    <th style="font-size: 12px">Instructor</th>
                                                    <th style="font-size: 12px">Contact</th>
                                                    <th style="font-size: 12px">Age</th>
                                                    <th style="font-size: 12px">Gender</th>
                                                    <th style="font-size: 12px">Address</th>
                                                    
                                                    <th style="font-size: 12px">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($instructor_rows as $instructor): ?>
                                                    <tr>
                                                        <td></td>
                                                        <td><?php echo $instructor->username; ?></td>
                                                        <td><?php echo $instructor->firstname?> <?php echo $instructor->lastname?>  </td>
                                                        <td><?php echo $instructor->contactnumber; ?></td>
                                                        <td><?php echo $instructor->age; ?></td>
                                                        <td><?php echo $instructor->gender; ?></td>
                                                        <td><?php echo $instructor->address; ?></td>
                                                        
                                                        <td>
                                                        <?php if($instructor->status == 1){?>
                                                            <a class="btn btn-danger" href="<?php echo base_url()?>manage_instructors/update_status/<?php echo $instructor->teacher_id?>">Deactivate</a>
                                                        <?php }else{?>                           
                                                                <a class="btn btn-danger" href="<?php echo base_url()?>manage_instructors/update_status/<?php echo $instructor->teacher_id?>">Active</a>
                                                        <?php } ?> 
                                                        </td>
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