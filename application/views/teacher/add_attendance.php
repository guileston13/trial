
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
                    <form action="<?php echo base_url();?>teacher_dashboard/add_attendance_final/<?php echo $this->uri->segment(3)?>/<?php echo $this->uri->segment(4)?>/<?php echo $this->uri->segment(5)?>" method="POST">
                        <input class="btn btn-primary mb-3" type="submit">
                            <table class="table table-bordered"> 
                                <thead> 
                                    <tr>
                                        <th>School Year</th> 
                                        <th>Section Code</th> 
                                        <th>Subject Code</th> 
                                        <th>Present</th> 
                                        <th>Absent</th>
                                        <th>Late</th>
                                    </tr> 
                                </thead>
                                <tbody> 
                                        <?php foreach($student as $st){?>
                                        
                                        <tr>
                                            <td><?php echo $st->studentid;
                                            $teacher = $this->session->userdata('user_id');
                                            $teacher = $this->db->query("SELECT * from tbl_instructor where user_id = '$teacher'")->result();
                                            $teacher_id = $teacher[0]->teacher_id;
                                            $class_id = $this->uri->segment(3);
                                            $class = $this->db->query("SELECT * from tbl_class,tbl_assignteacher where tbl_class.class_id = '$class_id' 
                                                                                        AND tbl_assignteacher.class_id = tbl_class.class_id
                                                                                        AND tbl_assignteacher.teacher_id = '$teacher_id' ")->result();
                                            $section_id = $class[0]->section_id;
                                            $subj_id = $class[0]->subj_id;
                                            $nn = date('Y-m-d');
                                            
                                            $attendance = $this->db->query("SELECT * from tbl_attendance where 
                                                                                section_id = '$section_id'
                                                                                AND subj_id = '$subj_id'
                                                                                AND date_attendance = '$nn'
                                                                                AND instructorid ='$teacher_id'
                                                                                AND studentid ='$st->studentid'
                                            ")->result();
                                            $at = $attendance?$attendance[0]->status:null;
                                            ?></td>
                                            <td><?php echo $st->firstname?></td>
                                            <td><?php echo $st->lastname?></td>
                                            <td>
                                            <input class="form-control" type="checkbox" name="student_id[1][]" 
                                            value="<?php echo $st->studentid?>"
                                            <?php if($at == 1) { ?> checked="checked" <?php } ?>> 
                                            </td>
                                            <td>
                                            <input class="form-control" type="checkbox" name="student_id[2][]" 
                                            value="<?php echo $st->studentid?>"
                                            <?php if($at == 2) { ?> checked="checked" <?php } ?>> 
                                            </td>
                                            <td>
                                            <input class="form-control" type="checkbox" name="student_id[3][]" 
                                            value="<?php echo $st->studentid?>"
                                            <?php if($at == 3) { ?> checked="checked" <?php } ?>> 
                                            </td>
                                        </tr>  

                                        <?php }?>
                                        
                                </tbody> 
                            </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
