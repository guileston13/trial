<body ng-app="starter">
  <div class="row no-gutters">
    <aside class="col-md-2 fixed-sidebar p-0 d-flex flex-column">
      <ul class="nav flex-column">
        <li class="nav-header">
          Admin Panel
        </li>
      </ul>
      <div class="px-3">
        <figure class="figure d-flex align-items-center mt-3">
          <div class="user__img">
            <img class="img__logo" src="<?php echo base_url() ?>assets/img/logo.jpg" alt="logo">
          </div>
          <figcaption class="user__status ml-3 d-flex flex-column justify-content-between">
            <h6 class="user__name">Superuser</h6>
            <span class="user__state"><i class="fas fa-circle text-success"></i> Online</span>
          </figcaption>
        </figure>

        <form action="">
          <div class="form-group">
            <input type="text" class="form-control search__input" id="search" placeholder="Search..." autocomplete="off">
          </div>
        </form>
      </div>

      <ul class="nav flex-column">
        <!-- <-------------------Setting-------------------- -->
        <li class="nav-header">
         Component Settings
        </li>
        <li class="nav-item py-1 nav-active">
          <a href="<?php echo base_url()?>teacher_dashboard" class="nav-link" href="logs.html">
            <i class="far fa-clock"></i>
            <span class="ml-2">Dashboard</span>
          </a>
        </li>
        <li class="nav-item py-1">
          <a href="<?php echo base_url()?>teacher_dashboard/advisory" class="nav-link" href="logs.html">
            <i class="far fa-clock"></i>
            <span class="ml-2">Advisory</span>
          </a>
        </li>
        <li class="nav-item py-1">
          <a href="<?php echo base_url()?>teacher_dashboard/final_grade" class="nav-link" href="logs.html">
            <i class="far fa-clock"></i>
            <span class="ml-2">View Grades</span>
          </a>
        </li>
        
        
        <!-- <-------------------Enrollment-------------------- --> 
   
        <li class="nav-item py-1">
          <a href="<?php echo base_url()?>logout" class="nav-link" href="#">
            <i class="fas fa-sign-out-alt"></i>
            <span class="ml-2">Logout</span>
          </a>
        </li>
      </ul>
      <footer class="footer mt-auto text-center text-light py-2">
        &copy; 2018-2019
      </footer>
    </aside>
    <main class="col-md-10 offset-2">
      <!-- Content Start -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">Academic</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03"
         aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </nav>
      <div class="body pt-6 pb-6">
        <div class="container-fluid mt-5 mb-5">
            <div class="card col-md-12">
                <div class="card-body">
                    <h3>Subject :<?php echo $subject; ?></h3>
                <form action="<?php echo base_url();?>teacher_dashboard/add_book_final/<?php echo $this->uri->segment(3)?>/<?php echo $this->uri->segment(4)?>/<?php echo $this->uri->segment(5)?>" method="POST">
                                <input class="btn btn-primary mb-3" type="submit" value="Give books">
                                <span>This button only works if your student dont have books</span>
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
                                                            <a class="btn btn-warning" href="<?php echo base_url();?>teacher_dashboard/return_book/<?php echo $q?$q[0]->book_id:null?>/<?php echo $four."/"; echo $five."/"; echo $six?>">Return</a>
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
                                                        <select class="form-control" name="book_id[]" id="">
                                                              <?php if(isset($list[$i]->book_id)){ ?>
                                                                <option value="<?php echo isset($list)?$list[$i]->book_id:null?>" selected><?php echo $list?$list[$i]->book_name:null?></option>
                                                              <?php }else{ ?>
                                                                 <option value="0">Empty</option> 
                                                              <?php }?>
                                                                <option value="0">Absent
                                                                </option>
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