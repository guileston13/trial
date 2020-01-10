
    <!-- Main content -->
    <div class="main-content">
        <!-- Top navbar -->
        <nav class="navbar navbar-top navbar-expand-md bg-white" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand -->
                <a class="h4 mb-0 text-primary text-uppercase d-none d-lg-inline-block" href="#">Student Class</a>
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
            <div class="container-fluid mt-5">
                <div class="card col-md-12">
                    <div class="card-body">
                        <!-- Instructor Body -->
                        <div class="nav-wrapper">
                            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="fa fa-plus mr-2"></i>Classes</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="fa fa-plus mr-2"></i>View Subjects</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card shadow mt-5">
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                        <div>
                                            <h2 class="text-center">School Year: <?php echo $s[0]->schoolyear_start?></h2>
                                             <table class="table table-bordered table-striped" id="instructorTable" style="text-align: center">
                                                <thead>
                                                    <tr>
                                                    
                                                        <th style="font-size: 12px">Grade Level</th>
                                                        <th style="font-size: 12px">Section</th>
                                                        <th style="font-size: 12px">Adviser</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($classes as $class){ ?>
                                                    <tr>
                                                        
                                                        <td><?php echo $class->subj_grade_level?></td>
                                                        <td><?php echo $class->section_name?></td>
                                                        <td><?php echo $class->firstname.' '.$class->lastname?></td>
                                                        <td><a href="<?php echo base_url()?>add_class/view_classes/<?php echo $class->class_id?>">View</a></td>
                                                    </tr>
                                                    <?php }?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                    <div>
                                            <table class="table table-bordered table-striped" id="subjectTable" style="text-align: center">
                                                <thead>
                                                    <tr>
                                                        <th style="font-size: 12px">Subject Code</th>
                                                        <th style="font-size: 12px">Section</th>
                                                        <th style="font-size: 12px">GradeLevel</th>
                                                     
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($query as $q):?>
                                                    <tr>
                                                        <th><?php echo $q->subj_code?></th>
                                                        <td><?php echo $q->subj_desc?></td>
                                                        <td><?php echo $q->subj_grade_level?></td>
                                                    
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
        </div>
    </div>
   