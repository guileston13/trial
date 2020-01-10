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
        <form action="<?php echo base_url()?>teacher_dashboard/create_something/<?php echo $this->uri->segment(3)?>/<?php echo $this->uri->segment(4)?>" method="POST">
            <div class="card col-md-12">
                <div class="card-body">
                <h3>
                    <?php $class_id = $this->uri->segment(4);
                        $q = $this->db->query("SELECT * from tbl_section")->result();
                        echo $q[0]->section_name;
                        $user = $this->session->userdata('user_id');
                        $people = $this->db->query("SELECT * from tbl_instructor where user_id = '$user'")->result();
                        $nice = $people[0]->teacher_id;
                        $qu = $this->db->query("SELECT * from tbl_assignteacher where teacher_id = '$nice' ")->result();
                        
                    ?>
                </h3>
                <label>Quarter</label>
                <select name="quarter_id" id="querter_id" >  
                    <option value="1">1</option>
                    <option value="2">2</option>
                </select>
                
                <div class="row">
                    <div class="col-md-4">
                    <?php
                        $ne =  $this->uri->segment(4);
                    
                        if($ne == 'quiz'){ ?>
                            <input class="form-control" type="text" name="quiz_item" placeholder="Quiz Total" required>
                        
                        <?php }else if($ne == 'assignment'){?>
                            
                            <input class="form-control" type="text" name="assignment_item" placeholder="Assignment Total" required>
                        <?php }else if($ne == 'project'){?>
                            
                            <input class="form-control" type="text" name="project_item" placeholder="Project Total" required>
                        <?php }else if($ne == 'exam'){?>
                            
                            <input class="form-control" type="text" name="exam_item" placeholder="Exam Total" required>
                        <?php }else if($ne == 'recitation'){?>
                            
                            <input class="form-control" type="text" name="recitation_item" placeholder="Recitation Total" required>
                        <?php }else{?>
                            none 
                    <?php }?>
                    </div>
                    <div class="col-md-3">
                        <input class="btn btn-primary" type="submit"> 
                        <input type="hidden" name="subj_id" value="<?php echo $qu[0]->subj_id;?>">
                    </div>
                </div>
                <table class="table table-bordered mt-4"> 
                    <thead> 
                        <tr>
                            <th>Student #</th> 
                            <th>First Name</th> 
                            <th>Last Name</th>
                            <th>Grade</th>
                        </tr> 
                    </thead>
                    <tbody> 
                        <?php foreach($quiz as $key){ ?>   
                        <tr>
                            <td><?php echo $key->studentid?></td>
                            <td><?php echo $key->firstname?></td>
                        
                            <td><?php echo $key->lastname?></td>
                            <td width="100px"><input class="form-control" type="text" name="grade[]"> 
                            <input type="hidden" name="user_id[]" value="<?php echo $key->studentid?>"></td>
                        </tr>
                        <?php } ?>
                    </tbody> 
                </table>
                </div>
            </div>
        </div>
        </form>
    </div>
</div>
    
