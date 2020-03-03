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
        <form action="<?php echo base_url()?>teacher_dashboard/create_something/<?php echo $this->uri->segment(3)?>/<?php echo $this->uri->segment(4)?>" method="POST">
            <div class="card col-md-12">
                <div class="card-body">
                <h3>
                    <?php   $class_id = $this->uri->segment(3);
                        $q = $this->db->query("SELECT * from tbl_class,tbl_section 
                        where tbl_section.section_id = tbl_class.section_id
                        AND tbl_class.class_id = '$class_id' ")->result();
                          
                        echo $q[0]->section_name;
                        $user = $this->session->userdata('user_id');
                        $people = $this->db->query("SELECT * from tbl_instructor where user_id = '$user'")->result();
                        $nice = $people[0]->teacher_id;
                        $qu = $this->db->query("SELECT * from tbl_assignteacher where teacher_id = '$nice' ")->result();
                        
                    ?>
                </h3>
                <label>Quarter</label>
                <div class="row">
                    <div class="col-md-4">
                        <select name="quarter_id2" id="querter_id2" class="form-control" >  
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <div class="">
                          <h3>Quiz #: <span class="hide" id="subject_id"><?php echo $this->uri->segment(5);?></span>
                                      <span class="hide" id="event"><?php echo $this->uri->segment(4);?></span>
                                      <span id="quiz_nu">1</span></h3>
                        </div>
                    </div>
                </div>
                
                <hr>
                <div class="row">
                    <div class="col-md-4">
                    <?php
                        $ne =  $this->uri->segment(4);
                    
                        if($ne == 'quiz'){ ?>
                            <input class="form-control" type="text" name="quiz_item" placeholder="Quiz Total" required>
                        
                        <?php }else if($ne == 'assignment'){?>
                            
                            <input class="form-control" type="text" name="assignment_item" placeholder="Assignment Total" required>
                        <?php }else if($ne == 'project'){?>
                            
                            <input class="form-control" type="text" name="project_item" placeholder="Project Total" required>
                        <?php }else if($ne == 'exam'){?>
                            
                            <input class="form-control" type="text" name="exam_item" placeholder="Exam Total" required>
                        <?php }else if($ne == 'recitation'){?>
                            
                            <input class="form-control" type="text" name="recitation_item" placeholder="Recitation Total" required>
                        <?php }else{?>
                            none 
                    <?php }?>
                    </div>
                    <div class="col-md-3">
                        <input class="btn btn-primary" type="submit"> 
                        <input type="hidden" name="subj_id" value="<?php echo $this->uri->segment(5);?>">
                    </div>
                </div>
                <table class="table table-bordered mt-4"> 
                    <thead> 
                        <tr>
                            <th>Student #</th> 
                            <th>First Name</th> 
                            <th>Last Name</th>
                            <th>Grade</th>
                        </tr> 
                    </thead>
                    <tbody> 
                        <?php foreach($quiz as $key){ ?>   
                        <tr>
                            <td><?php echo $key->studentid?></td>
                            <td><?php echo $key->firstname?></td>
                        
                            <td><?php echo $key->lastname?></td>
                            <td width="100px"><input class="form-control" type="text" name="grade[]"> 
                            <input type="hidden" name="user_id[]" value="<?php echo $key->studentid?>"></td>
                        </tr>
                        <?php } ?>
                    </tbody> 
                </table>
                </div>
            </div>
        </div>
        </form>
    </div>