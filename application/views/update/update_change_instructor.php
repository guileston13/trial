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
                    <form action="<?php echo base_url()?>add_class/final_change_instructor" method="POST">
                        <table class="table table-bordered" id="instructorTable" style="text-align: center">
                            <thead>
                                <tr>
                                    <th>Teacher </th>
                                    <th>Section</th>
                                    <th>Subject</th>
                                    <th>Change to:</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($instructor as $class){ ?>
                                <tr>
                                    <td><?php echo $class->firstname?> <?php echo $class->lastname?> </td>
                                    <td><?php echo $class->section_name?></td>
                                    
                                    <td>
                                        <?php echo $class->subj_desc?>
                                        <input type="hidden" value="<?php echo $class->teacher_id ?>" name="teacher_id">
                                        <input type="hidden" name="section_id" value="<?php echo $class->section_id ?>">
                                        <input type="hidden" name="subj_id" value="<?php echo $class->subj_id ?>">
                                    </td>
                                        <td>                                    
                                    <select name="change_to" class="form-control" style="width: 200px;
                                    height: 40px;">
                                        <?php foreach ($classes as $key){ ?>
                                            <option value="<?php echo $key->teacher_id ?>"><?php echo $key->firstname.' '.$key->lastname ?></option>
                                        <?php } ?>
                                    </select>
                                    </td>
                                    <td><a href="<?php echo base_url()?>add_class/update_change"><button class="btn btn-success">Edit</button></a></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>  
        </div>
    </div>