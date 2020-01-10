<div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md bg-white" id="navbar-main">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="h4 mb-0 text-primary text-uppercase d-none d-lg-inline-block" href="./index.php">Grades</a>
            <!-- User -->
            <ul class="navbar-nav align-items-center d-none d-md-flex">
                <li class="nav-item dropdown">
                    <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media align-items-center">
                            <span class="avatar avatar-sm rounded-circle">
                                <img alt="user image" src="<?php echo base_url()?>/assets/img/theme/avatar.png">
                            </span>
                            <div class="media-body ml-2 d-none d-lg-block">
                                <span class="mb-0 text-sm  font-weight-bold">
                                <?php $it = $this->session->userdata('user_id');
                                        $net = $this->db->query("SELECT * from tbl_instructor where user_id = '$it'")->result();
                                            
                                ?><?php echo $net[0]->firstname?> <?php echo $net[0]->lastname?>
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
                <?php 
                $d = $this->uri->segment(4);
                $name = $this->db->query("SELECT * from tbl_student where studentid = '$d'")->result()?>

                <h1 class="text-muted">Name : <?php echo $name[0]->firstname ?> </h1>
                <hr>
                <div class="mb-3">
                    <a class="btn btn-primary" href="<?php echo base_url()?>teacher_dashboard/student_specific_grade/<?php echo $this->uri->segment(3); ?>/<?php echo $this->uri->segment(4)?>/quiz">Quiz </a>
                    <a class="btn btn-secondary" href="<?php echo base_url()?>teacher_dashboard/student_specific_grade/<?php echo $this->uri->segment(3); ?>/<?php echo $this->uri->segment(4)?>/assignment">Assignment </a>
                    <a class="btn btn-info" href="<?php echo base_url()?>teacher_dashboard/student_specific_grade/<?php echo $this->uri->segment(3); ?>/<?php echo $this->uri->segment(4)?>/project">Project </a>
                    <a class="btn btn-warning" href="<?php echo base_url()?>teacher_dashboard/student_specific_grade/<?php echo $this->uri->segment(3); ?>/<?php echo $this->uri->segment(4)?>/recitation">Recitation </a>
                    <a class="btn btn-twitter" href="<?php echo base_url()?>teacher_dashboard/student_specific_grade/<?php echo $this->uri->segment(3); ?>/<?php echo $this->uri->segment(4)?>/exam">Exam </a>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"> 1st Quarter</h5>
                        <table class="table table-bordered"> 
                            <thead> 
                                <tr>
                                    <?php if($seven =='quiz'){?>
                                    <th>Quiz ID</th> 
                                    <?php }else if($seven =='assignment'){?>
                                    <th>Assignment ID</th> 
                                    <?php }else if($seven =='exam'){?>
                                    <th>Exam ID</th> 
                                    <?php }else if($seven =='project'){?>
                                    <th>Project ID</th>
                                    <?php }else if($seven =='recitation'){?>
                                    <th>Recitation ID</th>    
                                    <?php }else{?>
                                    <?php } ?>
                                    <th>Score </th> 
                                    <th>Total</th> 
                                </tr> 
                            </thead>
                            <tbody> 
                                <?php foreach($grade as $class){?>
                                <?php if($class->quarter_id ==1){?>
                                <tr>
                                    <?php if($seven =='quiz'){?>
                                            <td><?php echo $class->quiz_id?></td>
                                            <td><?php echo $class->quiz_score?></td>
                                            <td><?php echo $class->quiz_item?></td>
                                        <?php }else if($seven =='assignment'){?>
                                                <td><?php echo $class->assignment_id?></td>
                                                <td><?php echo $class->assignment_score?></td>
                                                <td><?php echo $class->assignment_item?></td>
                                            <?php }else if($seven =='project'){?>
                                                    <td><?php echo $class->project_id?></td>
                                                    <td><?php echo $class->project_score?></td>
                                                    <td><?php echo $class->project_item?></td>
                                                <?php }else if($seven =='exam'){?>
                                                        <td><?php echo $class->exam_id?></td>
                                                        <td><?php echo $class->exam_score?></td>
                                                        <td><?php echo $class->exam_item?></td>
                                                    <?php }else if($seven =='recitation'){?>
                                                            <td><?php echo $class->recitation_id?></td>
                                                            <td><?php echo $class->recitation_score?></td>
                                                            <td><?php echo $class->recitation_item?></td>
                                    <?php }else{?>
                                    <?php } ?>
                                        
                                </tr>  
                                <?php }else{ }?>
                                <?php } ?>
                            </tbody> 
                        </table>
                    </div>
                </div>
                
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">2nd Quarter</h5>
                        <table
                    class="table table-bordered"> 
                    <thead> 
                        <tr>
                            <?php if($seven =='quiz'){?>
                            <th>Quiz ID</th> 
                            <?php }else if($seven =='assignment'){?>
                            <th>Assignment ID</th> 
                            <?php }else if($seven =='exam'){?>
                            <th>Exam ID</th> 
                            <?php }else if($seven =='project'){?>
                            <th>Project ID</th>
                            <?php }else if($seven =='recitation'){?>
                            <th>Recitation ID</th>    
                            <?php }else{?>
                            <?php } ?>
                            <th>Score </th> 
                            <th>Total</th> 
                        </tr> 
                    </thead>
                    <tbody> 
                        <?php foreach($grade as $class){?>
                        <?php if($class->quarter_id == 2){?>
                        <tr>
                            <?php if($seven =='quiz'){?>
                                    <td><?php echo $class->quiz_id?></td>
                                    <td><?php echo $class->quiz_score?></td>
                                    <td><?php echo $class->quiz_item?></td>
                                <?php }else if($seven =='assignment'){?>
                                        <td><?php echo $class->assignment_id?></td>
                                        <td><?php echo $class->assignment_score?></td>
                                        <td><?php echo $class->assignment_item?></td>
                                    <?php }else if($seven =='project'){?>
                                            <td><?php echo $class->project_id?></td>
                                            <td><?php echo $class->project_score?></td>
                                            <td><?php echo $class->project_item?></td>
                                        <?php }else if($seven =='exam'){?>
                                                <td><?php echo $class->exam_id?></td>
                                                <td><?php echo $class->exam_score?></td>
                                                <td><?php echo $class->exam_item?></td>
                                            <?php }else if($seven =='recitation'){?>
                                                    <td><?php echo $class->recitation_id?></td>
                                                    <td><?php echo $class->recitation_score?></td>
                                                    <td><?php echo $class->recitation_item?></td>
                            <?php }else{?>
                            <?php } ?>
                            
                        </tr>  
                        <?php }else{ } ?>
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
    
        