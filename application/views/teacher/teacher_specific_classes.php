<div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md bg-white" id="navbar-main">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="h4 mb-0 text-primary text-uppercase d-none d-lg-inline-block" href="./index.php">List of Students</a>
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
                   <?php  $class_id = $this->uri->segment(3); $query = $this->db->query("SELECT * from tbl_class,tbl_section 
                                                            where tbl_section.section_id = tbl_class.section_id
                                                            AND tbl_class.class_id = '$class_id'
                                                            ")->result();
                    ?>

                    <h1 class="text-muted">Section Name: <?php   echo  $query[0]->section_name;?></h1>
                    <hr>
                            <?php 
                                $ided = $this->session->userdata('user_id');
                                $instructor_id = $this->db->query("SELECT * from tbl_instructor where user_id = '$ided'")->result();

                                $insu = $instructor_id[0]->teacher_id;
                                $section_id = $this->uri->segment(4);
                                $re_announce = $this->db->query("SELECT * from tbl_assignteacher where tbl_assignteacher.teacher_id = '$insu' AND tbl_assignteacher.section_id = '$section_id'")->result();
                                
                            ?>
                            <?php if($re_announce){ ?>
                            <div class="mb-3">
                                <a class="btn btn-primary" href="<?php echo base_url  ()?>teacher_dashboard/create_quiz/<?php echo $this->uri->segment(3); ?>/quiz">Create Quiz</a>
                                <a class="btn btn-secondary" href="<?php echo base_url()?>teacher_dashboard/create_quiz/<?php echo $this->uri->segment(3); ?>/assignment">Create Assignment</a>
                                <a class="btn btn-info" href="<?php echo base_url()?>teacher_dashboard/create_quiz/<?php echo $this->uri->segment(3); ?>/recitation">Recitation</a>
                                <a class="btn btn-warning" href="<?php echo base_url()?>teacher_dashboard/create_quiz/<?php echo $this->uri->segment(3); ?>/project">Create Project</a>
                                <a class="btn btn-twitter" href="<?php echo base_url()?>teacher_dashboard/create_quiz/<?php echo $this->uri->segment(3); ?>/exam">Create Exam</a>
                            </div>  

                            <?php }else{ ?>
                                
                            <?php } ?>
                            <table
                            class="table table-bordered"> 
                                <thead> 
                                    <tr>
                                        <th>Student ID</th> 
                                        <th>Firstname </th> 
                                        <th>MiddleNAme</th> 
                                        <th>LastName</th> 
                                        
                                    </tr> 
                                </thead>
                                <tbody> 
                                        <?php foreach($students as $class){?>
                                        
                                        <tr>
                                            <td><?php echo $class->studentid?></td>
                                            <td><?php echo $class->firstname?></td>
                                            <td><?php echo $class->middlename?></td>
                                            <td><?php echo $class->lastname?></td>
                                        </tr>  

                                        <?php } ?>
                                </tbody> 
                            </table>
                </div>
            </div>
        </div>
    </div>
</div>
    
