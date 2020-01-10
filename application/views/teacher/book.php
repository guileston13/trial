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
                    <h3>Subject :<?php echo $subject; ?></h3>
                <form action="<?php echo base_url();?>teacher_dashboard/add_book_final/<?php echo $this->uri->segment(3)?>/<?php echo $this->uri->segment(4)?>/<?php echo $this->uri->segment(5)?>" method="POST">
                                <input class="btn btn-primary mb-3" type="submit">
                                    <table class="table table-bordered"> 
                                <thead> 
                                    <tr>
                                        <th>Student ID</th> 
                                        <th>First Name</th> 
                                        <th>Last Name</th> 
                                        <th>Own Book</th>
                                        <th>Select Book</th> 
                                        <th>Return</th>
                                    </tr> 
                                </thead>
                                <tbody> 
                                        <?php 
                                            $i = 0;
                                        foreach($book as $st){?>
                                        
                                        <tr>
                                            <td><?php echo $st->st;?>  </td>
                                            <td><?php echo $st->firstname?></td>
                                            <td><?php echo $st->lastname?></td>
                                            <td><?php 
                                                $q = $this->db->query("SELECT * from tbl_book where book_id  ='$st->book_id' ")->result();

                                            echo $q?$q[0]->book_name:$names ='No Book' ?></td>
                                            
                                                <?php if($q?$q[0]->book_id:null){
                                                    $ww = $q?$q[0]->book_id:null;
                                                    $collect = $this->db->query("SELECT * from tbl_bookborrowed where book_id = $ww")->result();
                                                ?>
                                                    
                                                    <?php if($collect[0]->date_return == NULL){?>
                                                        <td>
                                                            Own
                                                        </td>
                                                        <td>
                                                            <?php 
                                                                $four = $this->uri->segment(3);
                                                                $five = $this->uri->segment(4);
                                                                $six = $this->uri->segment(5);
                                                            ?>
                                                            <a href="<?php echo base_url();?>teacher_dashboard/return_book/<?php echo $q?$q[0]->book_id:null?>/<?php echo $four."/"; echo $five."/"; echo $six?>">Return</a>
                                                        </td>
                                                    <?php }else{?>
                                                        <td> 
                                                            Returned
                                                        </td>
                                                        <td>Returned</td>
                                                    <?php }?>
                                                <?php }else{?>
                                                    <td>
                                                        <input type="hidden"  name="studentid[]" value="<?php echo $st->st;?>">
                                                        <input type="hidden" name="subj_id" value="<?php echo $list?$list[0]->subj_id:null?>">
                                                        <select class="form-co  ntrol" name="book_id[]" id="">
                                                                <option value="<?php echo $list?$list[$i]->book_id:null?>" selected><?php echo $list?$list[$i]->book_name:null?></option>
                                                                <option value="0">Absent</option>
                                                            <?php foreach($list as $l) { ?>
                                                                <option value="<?php echo $l?$l->book_id:null?>"><?php echo $l?$l->book_name:null?></option>
                                                            <?php }?>
                                                        </select>
                                                    </td>
                                                    <td>
                                                        No Books
                                                    </td>
                                                <?php   } ?>
                                            
                                            
                                            
                                        </tr>  
                                            
                                        <?php
                                        $i++;
                                        }?>
                                        
                                </tbody> 
                            </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
