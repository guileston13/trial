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
                    <form action="<?php echo base_url();?>teacher_dashboard/add_attendance_final/<?php echo $this->uri->segment(3)?>/<?php echo $this->uri->segment(4)?>/<?php echo $this->uri->segment(5)?>" method="POST">
                        <input class="btn btn-primary mb-3" type="submit">
                            <table class="table table-bordered"> 
                                <thead> 
                                    <tr>
                                        <th>School Year</th> 
                                        <th>Section Code</th> 
                                        <th>Subject Code</th> 
                                        <th>Present</th> 
                                        <th>Absent</th>
                                        <th>Late</th>
                                    </tr> 
                                </thead>
                                <tbody> 
                                        <?php foreach($student as $st){?>
                                        
                                        <tr>
                                            <td><?php echo $st->studentid;
                                            $teacher = $this->session->userdata('user_id');
                                            $teacher = $this->db->query("SELECT * from tbl_instructor where user_id = '$teacher'")->result();
                                            $teacher_id = $teacher[0]->teacher_id;
                                            $class_id = $this->uri->segment(3);
                                            $class = $this->db->query("SELECT * from tbl_class,tbl_assignteacher where tbl_class.class_id = '$class_id' 
                                                                                        AND tbl_assignteacher.class_id = tbl_class.class_id
                                                                                        AND tbl_assignteacher.teacher_id = '$teacher_id' ")->result();
                                            $section_id = $class[0]->section_id;
                                            $subj_id = $class[0]->subj_id;
                                            $nn = date('Y-m-d');
                                            
                                            $attendance = $this->db->query("SELECT * from tbl_attendance where 
                                                                                section_id = '$section_id'
                                                                                AND subj_id = '$subj_id'
                                                                                AND date_attendance = '$nn'
                                                                                AND instructorid ='$teacher_id'
                                                                                AND studentid ='$st->studentid'
                                            ")->result();
                                            $at = $attendance?$attendance[0]->status:null;
                                            ?></td>
                                            <td><?php echo $st->firstname?></td>
                                            <td><?php echo $st->lastname?></td>
                                            <td>
                                            <input class="form-control" type="checkbox" name="student_id[1][]" 
                                            value="<?php echo $st->studentid?>"
                                            <?php if($at == 1) { ?> checked="checked" <?php } ?>> 
                                            </td>
                                            <td>
                                            <input class="form-control" type="checkbox" name="student_id[2][]" 
                                            value="<?php echo $st->studentid?>"
                                            <?php if($at == 2) { ?> checked="checked" <?php } ?>> 
                                            </td>
                                            <td>
                                            <input class="form-control" type="checkbox" name="student_id[3][]" 
                                            value="<?php echo $st->studentid?>"
                                            <?php if($at == 3) { ?> checked="checked" <?php } ?>> 
                                            </td>
                                        </tr>  

                                        <?php }?>
                                        
                                </tbody> 
                            </table>
                    </form>
                </div>
            </div>
        </div>
    </div>