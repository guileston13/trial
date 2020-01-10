
    <!-- Main content -->
    <div class="main-content">
        <!-- Top navbar -->
        <nav class="navbar navbar-top navbar-expand-md bg-white" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand -->
                <a class="h4 mb-0 text-primary text-uppercase d-none d-lg-inline-block" href="./index.php">Curriculum</a>
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
                        <div class="nav-wrapper">
                            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="fa fa-plus mr-2"></i>Add Curriculum</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="fa fa-list mr-2"></i>View All Curriculum</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card shadow" ng-controller="alertCtrl">
                            <div class="card-body p-5">
                                <div class="tab-content" id="myTabContent">
                               <span class="text-danger"> <?php echo $this->session->flashdata('narco'); ?></span>
                                    <div class="tab-pane fade show active" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                        <!-- Add New Instructor Tab -->
                                        <form action="<?php echo base_url()?>Manage_Subjects/assign_subjects" method="POST">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">School Year</label>
                                                        <select class="form-control" name="schoolyear_id">
                                                            <?php foreach($schoolyear as $school){ ?>
                                                                <option value="<?php echo $school->schoolyear_id; ?>"><?php echo $school->schoolyear_start; ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Grade Level</label>
                                                        <select ng-model="grade_level" name="grade_level" class = "form-control"  style="padding: 3px;">
                                                            <option value="seven">7</option>
                                                            <option value="eight">8</option>
                                                            <option value="nine">9</option>
                                                            <option value="ten">10</option>
                                                            <option value="eleven">11</option>
                                                            <option value="twelve">12</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                               
                                            <div class="row">
                                                <div class="col border mb-2 mr-2 py-3" ng-repeat="x in subject | filter : grade_level">
                                                    <div class="form-group text-center">
                                                        <input class="form-control" type="checkbox" name="subjects[]"  value="{{x.subj_id}}"> 
                                                        <span class="badge badge-primary">{{x.subj_code}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="clearfix">
                                                <input class="btn btn-flat btn-success float-right" type="submit" name="assign_subject" value="Create" >
                                            </div>
                                           
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                        <div>
                                            <?php $sy = $this->db->query("SELECT * from tbl_schoolyear")->result();?>
                                            
                                            <div class="row">
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Year</label>
                                                        <select ng-model="yr" class="form-control">
                                                            <?php foreach ($sy as $key): ?>
                                                                <option value="<?php echo $key->schoolyear_start?>"><?php echo $key->schoolyear_start?></option>
                                                            <?php endforeach ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-group">
                                                        <label class="form-control-label">Level</label>
                                                        <select ng-model="g_level" class="form-control">    
                                                            <option value="seven">7</option>
                                                            <option value="eight">8</option>
                                                            <option value="nine">9</option>
                                                            <option value="ten">10</option>
                                                            <option value="eleven">11</option>
                                                            <option value="twelve">12<option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
           
                                            <table class="table table-bordered table-striped"  id="subjectTable" style="text-align: center">
                                                <thead>
                                                    <tr>
                                                      
                                                        <th style="font-size: 12px">Subject Code</th>
                                                        <th style="font-size: 12px">Description</th>
                                                        <th style="font-size: 12px">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                  
                                                        <tr ng-repeat="x in curriculum | filter : yr | filter : g_level ">
                                                            
                                                            <td>{{x.subj_code}}</td>
                                                            <td>{{x.subj_desc}}</td>
                                                            <td>
                                                              
                                                                <a class="btn btn-danger" href="<?php echo base_url()?>manage_subjects/UnassignSubject/{{x.curriculum_id}}">
                                                              
                                                               Unassign
                                                               </a>

                                                                   
                                                            </td>                                                            
                                                        </tr>
                                                          
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
        </div>
    </div>