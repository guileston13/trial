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
            <span class="user__name">  <h6><?php $it = $this->session->userdata('user_id');
                    $net = $this->db->query("SELECT * from tbl_student where user_id = '$it'")->result();
                        
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
        <a href="<?php echo base_url()?>student_dashboard" class="nav-link" href="logs.html">
            <i class="far fa-clock"></i>
            <span class="ml-2">Dashboard</span>
        </a>
        </li>
        <!-- <li class="nav-item py-1">
        <a href="<?php echo base_url()?>student_profile" class="nav-link" href="logs.html">
            <i class="far fa-clock"></i>
            <span class="ml-2">My Profile</span>
        </a> -->
        
        
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
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8" style="height: 150vh;">
            <div class="container-fluid">
                <div class="header-body">
                    <!-- Card stats -->
                    <div class="card shadow">
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                        <!-- Table Students -->
                                        <div>
                                            <form action="<?php echo base_url();?>student_dashboard" method="POST">
                                              <div class="col-md-3">
                                                <label>School Year:</label>
                                                  <select name="school_year" class="form-control">
                                                    <?php foreach($school_year as $sy){ ?>
                                                      <option value="<?php echo $sy->schoolyear_id; ?>"><?php echo $sy->schoolyear_start; ?></option>
                                                    <?php }?>
                                                  </select>
                                                  <br>
                                                  <input type="submit" class="form-control"><br>
                                              </div>
                                            </form>
                                            <h2>School Year: <?php echo $display?$display_year[0]->schoolyear_start:'';?></h2><br><br><br>
                                            <table class="table table-bordered table-striped" id="instructorTable" style="text-align: center">
                                                <thead>
                                                    <tr>
                                                        <th>Subjects</th>
                                                        <th>Teacher</th>
                                                        <th>1ST QUARTER</th>
                                                        <th>2ND QUARTER</th>
                                                        <th>Final Grade</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                    $average_grade = 0;
                                                    $count = 1;
                                                    foreach($display as $key){?>
                                                    <tr>
                                                        <td><?php echo $key->subj_code?></td>
                                                        <td><?php echo $key->subj_code?></td>
                                                        <td><?php echo $key->quarter1?></td>
                                                        <td><?php echo $key->quarter2?></td>
                                                        <td><?php echo $key->totalall?></td>
                                                    </tr>

                                                    <?php $average_grade += $key->totalall;
                                                          $con = $count++;
                                                    ?>
                                                    <?php } ?>
                                                    <?php 
                                                    if(isset($con)){ ?>
                                                      <h3><?php echo "Average Grade: ",number_format($average_grade/$con, 2, '.',',');?></h3>  
                                                    <?php }else{ ?>
                                                    
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
