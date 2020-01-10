
    <!-- Main content -->
    <div class="main-content fix-content">
        <!-- Top navbar -->
        <nav class="navbar navbar-top navbar-expand-md bg-white" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand -->
                <a class="h4 mb-0 text-primary text-uppercase d-none d-lg-inline-block" href="./index.php">Student Class</a>
                <!-- User -->
                <ul class="navbar-nav align-items-center d-none d-md-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src="<?php echo base_url(); ?>/assets/img/theme/avatar.png">
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
                    <table class="table table-bordered table-striped" id="instructorTable" style="text-align: center">
                        <thead>
                            <tr>
                                <th style="font-size: 12px">Teacher </th>
                                <th style="font-size: 12px">Subject Name</th>
                                <th style="font-size: 12px">Action </th>
                            </tr>
                        </thead>
                            <tbody>
                                <?php foreach($classes as $class){ ?>
                                <tr>
                                    <td><?php echo $class->firstname?> <?php echo $class->lastname?> </td>
                                    <td><?php echo $class->subj_desc?></td>
                                    <td><a href="<?php echo base_url()?>add_class/update_change_instructor/<?php echo $class->teacher_id?>/<?php echo $class->subj_id ?>/<?php echo $class->section_id ?>"><button class="btn btn-success">Edit</button></a></td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>  
            </div>
        </div>
    </div>
    