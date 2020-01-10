
    <!-- Main content -->
    <div class="main-content">
        <!-- Top navbar -->
        <nav class="navbar navbar-top navbar-expand-md bg-white" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand -->
                <a class="h4 mb-0 text-primary text-uppercase d-none d-lg-inline-block" href="#">Dashboard</a>
                <!-- User -->
                <ul class="navbar-nav align-items-center d-none d-md-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src="./assets/img/theme/avatar.png">
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
        <div class="body pt-6 pb-6">
            <div class="container-fluid mt-5">
                <div class="header-body">
                    <!-- Card stats -->
                    <div class="row">
                        
                        <form action="<?php echo base_url()?>create_book/create_book_final" method="POST">
                            <div class="form-group">
                            
                                <div class="col-md-12">
                                    <label>Subject Name</label>
                                        <select name="subj_id" class="form-control">
                                            <?php foreach($subj as $subject) { ?>
                                                <option value="<?php echo $subject->subj_id?>"><?php echo $subject->subj_code?></option>
                                            <?php } ?>
                                        </select>
                                </div>
                                <div class="col-md-12">
                                    <label>Number of Books</label>
                                        <input type="number" class="form-control" name="num_book">
                                </div>
                                <div class="col-md-12">
                                    <label></label>
                                        <input type="submit" class="form-control">
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
        <!-- Page content -->
    </div>
