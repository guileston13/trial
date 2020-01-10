
    <div class="main-content">
        <!-- Top navbar -->
        <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand -->
                <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="#">Student Class</a>
                <!-- User -->
                <ul class="navbar-nav align-items-center d-none d-md-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src="<?php echo base_url()?>assets/img/theme/avatar.png">
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
        <div class="body bg-primary pt-6" style="height: 150vh;">
            <div class="container-fluid pb-3">
               

            </div>
        </div>
        <div class="modal fade" id="assignInstructorToSubjectModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Assign Instructor</h4>
                        <span style="margin: auto; font-weight: bold;">Select subject to assign</span>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <div class="modal-body pr-6">
                        <div class="row">
                            <div class="col-3">
                                <!-- School Year -->
                                <div style="padding: 12px 5px 5px 15px;">
                                    <div class="row">
                                        <h3>School Year</h3>
                                    </div>
                                    <div class="row">
                                        <select name="subjectUnit" style="padding: 3px;">
                                            <option>2019-2020</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Grade Level -->
                                <div style="padding: 12px 5px 5px 15px;">
                                    <div class="row">
                                        <h3>Grade Level</h3>
                                    </div>
                                    <div class="row">
                                        <select name="subjectUnit" style="padding: 3px;">
                                            <option>Select</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-9">
                                <!-- Section Name -->
                                <div style="padding: 12px 5px 5px 15px;">
                                    <div class="row">
                                        <h3>Section Name</h3>
                                    </div>
                                    <div class="row">
                                        <select name="subjectUnit" style="padding: 3px;">
                                            <option>Einstein</option>
                                            <option>Curie</option>
                                            <option>Faraday</option>
                                            <option>Hawking</option>
                                            <option>Watt</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Subject Code -->
                                <div style="padding: 12px 5px 5px 15px;">
                                    <div class="row">
                                        <h3>Subject Code</h3>
                                    </div>
                                    <div class="row">
                                        <select name="subjectUnit" style="padding: 3px;">
                                            <option>MATH1</option>
                                            <option>ENG1</option>
                                            <option>FIL1</option>
                                            <option>PE1</option>
                                            <option>SCI1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="#assignPopupAlertModal" class="btn btn-success" data-toggle="modal">Assign</a>
                        <a href="#" class="btn btn-danger" data-dismiss="modal">Close</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pop-up Alert Modal -->
        <div class="modal fade" id="assignPopupAlertModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Assign Instructor</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <span class="fa fa-check fa-3x" style="float: left; margin-right: 20px;"></span>
                        <h1>The instructor has been assigned</h1>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal">Okay</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
   