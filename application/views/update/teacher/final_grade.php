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
        <li class="nav-item py-1">
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
        <li class="nav-item py-1 nav-active">
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
                    <form action="<?php echo base_url()?>teacher_dashboard/final_grade" method="POST">
                        <div class="row">
                            <div class="col-md-3">
                                <select name="school_year" id="school_year" class="form-control">
                                    <?php foreach($school_year as $sy){ ?>
                                        <option value="<?php echo $sy->schoolyear_id ?>"><?php echo $sy->schoolyear_start?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <button class="form-control" type="submit">Search</button>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <?php  if($classes=="NO"){ ?>
                        NO advisory
                    <?php }else{?>
                      <h3><?php echo $year_level?$year_level[0]->schoolyear_start:null;?></h3>
                        <?php foreach($year_level as $c){ ?>
                        <table class="table table-bordered"> 
                            <thead>
                                <tr style="text-align: center;">
                                    <th>#</th> 
                                    <th>Section </th> 
                                    <th>Subject Code</th>                                    
                                    <th colspan="2" class="text-center">Actions</th>
                                </tr> 
                            </thead>
                            <tbody style="text-align: center;"> 
                                <?php $num = 1; foreach($classes as $class){?>
                                    <?php if($c->schoolyear_start == $class->schoolyear_start ){?>
                                        <tr>
                                            <td><?php echo $num; $num++;?></td>
                                            <td><?php echo $class->section_name?></td>
                                            <td><?php echo $class->subj_code?></td>
                                            <td><a target = "_blank" class="btn btn-block btn-primary" href="<?php echo base_url();?>teacher_dashboard/trial/<?php echo $class->class_id?>/<?php echo $class->section_id?>/<?php echo $class->subj_id?>/1">Class Record</a></td>
                                            <td><a target = "_blank" class="btn btn-block btn-danger" href="<?php echo base_url();?>teacher_dashboard/specific_final_grade/<?php echo $class->class_id?>/<?php echo $class->section_id?>/<?php echo $class->subj_id?>">Final Grades</a></td>
                                        </tr> 
                                    <?php }else {
                                    }?>
                                <?php }?>
                            </tbody> 
                        </table>
                    <?php }?>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>