
    <!-- Main content -->
    <div class="main-content">
        <!-- Top navbar -->
        <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand -->
                <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="<?php echo base_url(); ?>">List of Students</a>
                <!-- User -->
                <ul class="navbar-nav align-items-center d-none d-md-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src="./assets/img/theme/avatar.png">
                                </span>
                                <div class="media-body ml-2 d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold">Admin</span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome!</h6>
                            </div>
                            <div class="dropdown-divider"></div>
                            <a href="logout" class="dropdown-item">
                                <i class="ni ni-user-run"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Header -->
        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8" style="height: 86vh;">
            <div class="container-fluid">
                <div class="header-body">
                    <!-- Card stats -->
                <form action="<?php echo base_url()?>/teacher_dashboard/create_something/<?php echo $this->uri->segment(4)?>" method="POST">
                  
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                    <div class="tables">
                            <div class="row">
                                <h3></h3>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>School Year</label>
                                        <select class="form-control" name="yearlevel">
                                            <option>Select</option>
                                            <option>2018-2019</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Section Nam  e</label>
                                        <select class="form-control" name="yearlevel">
                                            <option>Select</option>
                                            <option>Sampaguita</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Subject</label>
                                        <select class="form-control" name="yearlevel">
                                            <option>Select</option>
                                            <option>Math</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <h3>
                                <?php $class_id = $this->uri->segment(4);
                                    $q = $this->db->query("SELECT * from tbl_section")->result();
                                    echo $q[0]->section_name;
                                ?>

                            </h3>
                            <div>
                            <form action="<?php echo base_url()?>teacher_dashboard/create_quiz_now/<?php echo $this->uri->segment(4);?>" method="POST">
                            <div style="padding: 5px 5px 5px 15px;">
                                <div class="row">
                                    <h3>Quiz Name</h3>
                                </div>
                                <div class="row">
                                    <input style="padding: 3px;" type="text" name="quiz_name" required>
                                </div>
                            </div>
                            <div style="padding: 5px 5px 5px 15px;">
                                <div class="row">
                                    <h3>Quiz Total</h3>
                                </div>
                                <div class="row">
                                    <input style="padding: 3px;" type="number" name="quiz_item" required>
                                </div>
                            </div>
                            </div>
                            </form>
                           
                        </div>

                                 </div>
                            </div>
                        </div>
                    </div> 
                 </form>
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--7">
            <div class="row">
                <hr>
            </div>
    