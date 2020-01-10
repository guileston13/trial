
    <!-- Main content -->
    <div class="main-content">
        <!-- Top navbar -->
        <nav class="navbar navbar-top navbar-expand-md bg-white" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand -->
                <a class="h4 mb-0 text-primary text-uppercase d-none d-lg-inline-block" href="#">Students</a>
                <!-- User -->
                <ul class="navbar-nav align-items-center d-none d-md-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src="./assets/img/theme/avatar.png">
                                </span>
                                <div class="media-body ml-2 d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold">
                                        Admin
                                    </span>
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
        <div class="body pt-6 pb-6">
            <div class="container-fluid mt-5 mb-5">
                <div class="card col-md-12">
                    <div class="card-body">
                        <!-- Instructor Body -->

                        <h1 class="text-muted">Enrolled Student</h1>
                        <hr>
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                        <!-- Table Students -->
                                        <h2 class="text-center">School Year: <?php echo $s?$s[0]->schoolyear_start:null?></h2>
                                        <div>
                                            <table class="table table-bordered table-striped" id="instructorTable" style="text-align: center">
                                                <thead>
                                                    <tr>
                                                        
                                                        <th style="font-size: 12px">Student</th>
                                                        <th style="font-size: 12px">Section</th>
                                                        <th style="font-size: 12px">Grade Level</th>
                                                        <th style="font-size: 12px">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                        <?php foreach($class as $key) {?>
                                                            <tr>
                                                           
                                                            <td><?php echo $key->firstname?> <?php echo $key->lastname?>  </td>
                                                            <td><?php echo $key->section_name?></td>
                                                            <td><?php echo $key->subj_grade_level?></td>
                                                            <td><a href="<?php echo base_url()?>student_class/change_section/<?php echo $key->studentid ?>" class="btn btn-danger">Change Section</a></td>
                                                            </tr>
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
        </div>
