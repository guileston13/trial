
    <!-- Main content -->
    <div class="main-content">
        <!-- Top navbar -->
        <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand -->
                <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="<?php echo base_url(); ?>">Final Grades</a>
                <!-- User -->
                <ul class="navbar-nav align-items-center d-none d-md-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src="../assets/img/theme/avatar.png">
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
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                    <div class="tables">
                            <div class="row">
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
                                        <label>Section Name</label>
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
                            <?php var_dump($classes);?> 
                            <table class="table table-bordered"> 
                                <thead> 
                                    <tr>
                                        <th>First Name</th> 
                                        <th>Last Name </th> 
                                        <th>Quiz </th> 
                                        <th>Quiz total</th> 
                                        <th>Exam</th>
                                        <th>Exam Total</th>
                                        <th>Assignment</th>
                                        <th>Assignment Total</th>
                                        <th>Project</th>
                                    </tr> 
                                </thead>
                                <tbody> 
                                    <?php foreach($classes as $class){?>
                                    
                                    <tr>
                                        <td><?php echo $class->firstname?></td>
                                        <td><?php echo $class->lastname?></td>
                                        <td><?php echo $class->quiz?></td>
                                        <td><?php echo $class->quiz_total?></td>
                                        <td><?php echo $class->exam?></td>
                                        <td><?php echo $class->exam_total?></td>
                                        <td><?php echo $class->assignment?></td>
                                        <td><?php echo $class->assignment_total?></td>
                                        <td><?php echo $class->project?></td>
                                        <td><?php echo $class->project_total?></td>
                                        
                                    </tr>  

                                    <?php }?>
                                </tbody> 
                            </table>

                            <h2>Hello</h2>
                            <table class="table table-bordered">
                                
                                <thead> 
                                    <tr>
                                        <th>First Na11111me</th> 
                                        <th>Last Name </th> 
                                        <th>Written </th> 
                                        <th>Performance Task </th> 
                                        <th>Quarter Assestment </th>
                                    </tr> 
                                </thead>
                                <tbody> 
                                    <?php foreach($classes as $class) { ?>
                                    <tr>
                                        <td><?php echo $class->firstname?></td>
                                        <td><?php echo $class->lastname?></td>
                                        <td>
                                            <?php 
                                            $written = ($class->quiz + $class->assignment);
                                            $written_p =($class->quiz_total + $class->assignment_total);
                                                $w = ($written / $written_p * 20);
                                            echo number_format($w,2);
                                            ?>
                                        </td>
                                        <td><?php 
                                            $performance = $class->project ;
                                            $performance_p = $class->project_total;
                                                $a = ($performance / $performance_p * 60);
                                            echo number_format($a,2);
                                            ?>
                                        </td>
                                        <td>
                                            <?php 
                                            $exam = $class->exam;
                                            $exam_p = $class->exam_total;
                                            $ex = ($exam / $exam_p * 20);
                                            echo number_format($ex,2);
                                            ?>
                                        </td>
                                        <td><?php $e =  $w + $a + $ex;
                                        echo number_format($e,2);
                                        ?></td>
                                    </tr>  

                                        <?php } ?>
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
        <!-- Page content -->
        <div class="container-fluid mt--7">
            <div class="row">
                <hr>
            </div>
    