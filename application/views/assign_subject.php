
    <!-- Main content -->
    <div class="main-content">
        <!-- Top navbar -->
        <nav class="navbar navbar-top navbar-expand-md bg-white" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand -->
                <a class="h4 mb-0 text-primary text-uppercase d-none d-lg-inline-block" href="#">Section</a>
                <!-- User -->
                <ul class="navbar-nav align-items-center d-none d-md-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src="./assets/img/theme/avatar.png">
                                </span>
                                <div class="media-body ml-2 d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold">
                                       Admin
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
                        <!-- Instructor Body -->
                        <h1 class="text-muted">Add Section</h1>
                        <hr>
                        <div class="card shadow" ng-controller="alertCtrl">
                            <div class="card-body p-5">
                                <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                                <!-- Add New Instructor Tab -->
                                                <form action="<?php echo base_url()?>Assign_Subject/add_section" method="POST">

                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="form-control-label">School Year</label>
                                                                
                                                                <select name="schoolyear_id" ng-model="schoolyear_id" class="form-control">
                                                                    <?php  foreach($schoolyear as $sy){?>
                                                                    <option value="<?php echo $sy->schoolyear_start?>"><?php echo $sy->schoolyear_start?></option>
                                                                    <?php }?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="form-control-label">Grade Level</label>
                                                                <select ng-model="grade_level" name="grade_level" class="form-control">
                                                                    <option value="seven">7</option>
                                                                    <option value="eight">8</option>
                                                                    <option value="nine">9</option>
                                                                    <option value="ten">10</option>
                                                                    <option value="eleven">11</option>
                                                                    <option value="twelve">12</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="form-control-label">Adviser</label>
                                                                <select class="form-control" name="adviser" style="padding: 3px;">
                                                                    <?php foreach($teacher as $adviser){ ?>
                                                                        <option value="<?php echo $adviser->teacher_id; ?>"><?php echo $adviser->firstname?> <?php echo $adviser->lastname?></option>
                                                                    <?php } ?>    
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label class="form-control-label">Section Name</label>
                                                                <input type="text" name="section_naming" class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                <div>
                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-md-5 offset-md-3">
                                                    <table class="table table-hover text-center">
                                                        <thead>
                                                            <tr>
                                                                <th>Subject</th>
                                                                <th>Teacher</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr ng-repeat="x in curriculum | filter :grade_level | filter : schoolyear_id">
                                                                <td>{{x.subj_code}} <input type="hidden" name="subj_code[]" value="{{x.subj_id}}"></td>
                                                                <td>
                                                                        <select class="form-control" name="teacher[]" style="padding: 3px;">
                                                                            <?php foreach($teacher as $teach){ ?>
                                                                                <option value="<?php echo $teach->teacher_id; ?>">
                                                                                    <?php echo $teach->firstname?> <?php echo $teach->lastname?></option>
                                                                            <?php } ?>    
                                                                        </select>
                                                                </td>
                                                            </tr>                  
                                                        </tbody>
                                                    </table>                    
                                                </div>
                                            </div>
                                            
                                            <div class="clearfix">
                                                <input class="btn btn-flat btn-success float-right" type="submit" name="add_section" value="Create" >
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- The Modal -->
        <div class="modal fade" id="instructorListModal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Assigned Instructors</h4>
                        <span style="margin: auto; font-weight: bold;">MATH 101 - Fundamental Mathematics</span>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body pr-6">
                        <table class="my-table-responsive" id="instructorTable" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Instructor</th>
                                    <th>Section</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Chiro Del Puerto</td>
                                    <td>Einstein</td>
                                    <td>
                                        <button class="btn btn-danger btn-sm mb-3">Unassign</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Chiro Del Puerto</td>
                                    <td>Einstein</td>
                                    <td>
                                        <button class="btn btn-danger btn-sm mb-3">Unassign</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
   