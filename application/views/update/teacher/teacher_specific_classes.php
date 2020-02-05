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
            <div class="card col-md-12">
                <div class="card-body">
                   <?php  $class_id = $this->uri->segment(3); $query = $this->db->query("SELECT * from tbl_class,tbl_section 
                                                            where tbl_section.section_id = tbl_class.section_id
                                                            AND tbl_class.class_id = '$class_id'
                                                            ")->result();
                    ?>

                    <h1 class="text-muted">Section Name: <?php   echo  $query[0]->section_name;?></h1>
                    <hr>
                            <?php 
                                $ided = $this->session->userdata('user_id');
                                $instructor_id = $this->db->query("SELECT * from tbl_instructor where user_id = '$ided'")->result();

                                $insu = $instructor_id[0]->teacher_id;
                                $section_id = $this->uri->segment(4);
                                $re_announce = $this->db->query("SELECT * from tbl_assignteacher where tbl_assignteacher.teacher_id = '$insu' AND tbl_assignteacher.section_id = '$section_id'")->result();
                                
                            ?>
                            <?php if($re_announce){ ?>
                            <div class="mb-3">
                                <a class="btn btn-primary" href="<?php echo base_url  ()?>teacher_dashboard/create_quiz/<?php echo $this->uri->segment(3); ?>/quiz/<?php echo $this->uri->segment(5); ?>">Create Quiz</a>
                                <a class="btn btn-secondary" href="<?php echo base_url()?>teacher_dashboard/create_quiz/<?php echo $this->uri->segment(3); ?>/assignment/<?php echo $this->uri->segment(5); ?>">Create Assignment</a>
                                <a class="btn btn-info" href="<?php echo base_url()?>teacher_dashboard/create_quiz/<?php echo $this->uri->segment(3); ?>/recitation/<?php echo $this->uri->segment(5); ?>">Recitation</a>
                                <a class="btn btn-warning" href="<?php echo base_url()?>teacher_dashboard/create_quiz/<?php echo $this->uri->segment(3); ?>/project/<?php echo $this->uri->segment(5); ?>">Create Project</a>
                                <a class="btn btn-warning" href="<?php echo base_url()?>teacher_dashboard/create_quiz/<?php echo $this->uri->segment(3); ?>/exam/<?php echo $this->uri->segment(5); ?>">Create Exam</a>
                            </div>  

                            <?php }else{ ?>
                                
                            <?php } ?>
                            <table
                            class="table table-bordered"> 
                                <thead> 
                                    <tr>
                                        <th>Student ID</th> 
                                        <th>Firstname </th> 
                                        <th>MiddleNAme</th> 
                                        <th>LastName</th> 
                                        
                                    </tr> 
                                </thead>
                                <tbody> 
                                        <?php foreach($students as $class){?>
                                        
                                        <tr>
                                            <td><?php echo $class->studentid?></td>
                                            <td><?php echo $class->firstname?></td>
                                            <td><?php echo $class->middlename?></td>
                                            <td><?php echo $class->lastname?></td>
                                        </tr>  

                                        <?php } ?>
                                </tbody> 
                            </table>
                </div>
            </div>
        </div>
    </div>