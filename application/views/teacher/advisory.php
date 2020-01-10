<div class="main-content">
    <!-- Top navbar -->
    <nav class="navbar navbar-top navbar-expand-md bg-white" id="navbar-main">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="h4 mb-0 text-primary text-uppercase d-none d-lg-inline-block" href="./index.php">Classes you Handled</a>
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
                    <form action="<?php echo base_url();?>teacher_dashboard/advisory" method="POST">
                    <div class="row">
                        <div class="col-md-3">
                                <select class="form-control" name="school_year" id="school_year">
                                    <?php foreach($school_year as $sy){ ?>
                                        <option value="<?php echo $sy->schoolyear_id ?>"><?php echo $sy->schoolyear_start?></option>
                                    <?php }?>
                                </select>
                                
                            
                        </div>
                        <div class="col-md-3">
                            <button type="submit" class="form-control">Search</button>
                        </div>
                    </div>
                    </form>
                        
                    <hr>
                        
                    <table class="table table-bordered">
                        <thead> 
                            <tr>
                                <th>Section</th> 
                                <th>View Students</th> 
                                <th class="text-center" colspan="5">Actions</th>
                            </tr> 
                        </thead>
                        <tbody> 
                                <?php foreach($classes as $class){?>
                                    <tr>
                                        <td><?php echo $class->section_name?></td>
                                        <td><a class="btn btn-block btn-link" href="<?php echo base_url();?>teacher_dashboard/teacher_specific_classes/<?php echo $class->class_id?>">View</a></td>
                                        <td><a class="btn btn-block btn-link" href="<?php echo base_url();?>teacher_dashboard/form2/<?php echo $class->class_id?>">Attendance</a></td>
                                        <td><a class="btn btn-block btn-link" href="<?php echo base_url();?>teacher_dashboard/form3/<?php echo $class->class_id?>">Books</a></td>
                                        <td><a class="btn btn-block btn-link" href="<?php echo base_url();?>teacher_dashboard/form1/<?php echo $class->class_id?>">Form 1</a></td>
                                        <td><a class="btn btn-block btn-link" href="<?php echo base_url();?>teacher_dashboard/form5/<?php echo $class->class_id?>">Form 5</a></td>
                                        <td><a class="btn btn-block btn-link" href="<?php echo base_url();?>teacher_dashboard/form6/<?php echo $class->class_id?>">Form 6</a></td>
                                        <td><a class="btn btn-block btn-link" href="<?php echo base_url();?>teacher_dashboard/all_subject_final_grade/<?php echo $class->class_id?>/1">Subject</a></td>
                                    </tr> 
                                <?php }?>
                            </tbody> 
                    </table>
                    <!-- <?php  if($classes=="NO"){ ?>
                        NO advisory
                    <?php }else{?>
                        <?php foreach($classes as $c){?>
                            <h2><?php echo $c->schoolyear_start?></h2>
                        <table class="table table-bordered"> 
                            <thead> 
                                <tr>
                                    <th>Section</th> 
                                    <th>View Students</th> 
                                    <th class="text-center" colspan="5">Actions</th>
                                </tr> 
                            </thead>
                            <tbody> 
                                <?php foreach($classes as $class){?>
                                
                                    <?php if($c->schoolyear_start == $class->schoolyear_start ){?>
                                    <tr>
                                        <td><?php echo $class->section_name?></td>
                                        
                                        <td><a class="btn btn-block btn-link" href="<?php echo base_url();?>teacher_dashboard/teacher_specific_classes/<?php echo $class->class_id?>">View</a></td>
                                        <td><a class="btn btn-block btn-link" href="<?php echo base_url();?>teacher_dashboard/form2/<?php echo $class->class_id?>">Attendance</a></td>
                                        <td><a class="btn btn-block btn-link" href="<?php echo base_url();?>teacher_dashboard/form3/<?php echo $class->class_id?>">Books</a></td>
                                        <td><a class="btn btn-block btn-link" href="<?php echo base_url();?>teacher_dashboard/form1/<?php echo $class->class_id?>">Form 1</a></td>
                                        <td><a class="btn btn-block btn-link" href="<?php echo base_url();?>teacher_dashboard/form5/<?php echo $class->class_id?>">Form 5</a></td>
                                        <td><a class="btn btn-block btn-link" href="<?php echo base_url();?>teacher_dashboard/form6/<?php echo $class->class_id?>">Form 6</a></td>
                                        <td><a class="btn btn-block btn-link" href="<?php echo base_url();?>teacher_dashboard/all_subject_final_grade/<?php echo $class->class_id?>/1">Subject</a></td>
                                    </tr> 
                                    <?php }else {
                                        
                                    }?>
                                <?php }?>
                            </tbody> 
                        </table>
                    <?php }?>
                    <?php }?> -->
                </div>
            </div>
        </div>
    </div>
</div>
    
