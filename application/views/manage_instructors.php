<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Add Instructors</title>
    <!-- Favicon -->
    <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Icons -->
    <link href="./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="./assets/css/argon.css?v=1.0.0" rel="stylesheet">
    <!-- Data Tables -->
    <link rel="stylesheet" type="text/css" href="./assets/datatables/datatables.min.css"/>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="./assets/css/custom_css.css">
</head>

<body>
    <!-- Sidenav -->
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white border-right navbar-custom" id="sidenav-main">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <div class="text-center navbar-logo"> 
                <img src="./assets/img/brand/blue.png" alt="Logo">
            </div>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="nav-item border-bottom py-2">
                        <a class="nav-link" href="dashboard">
                            <i class="fa fa-home text-primary"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item border-bottom py-2">
                        <a class="nav-link" href="add_class">
                            <i class="fa fa-file text-primary"></i> Classes
                        </a>
                    </li>
                    <li class="nav-item border-bottom py-2">
                        <a class="nav-link" href="student_class">
                            <i class="fa fa-users text-primary"></i> Enrolled Students
                        </a>
                    </li>
                    <li class="nav-item active border-bottom py-2">
                        <a class="nav-link" href="manage_instructors">
                            <i class="fa fa-user-tie text-primary"></i> Add Instructors
                        </a>
                    </li>
                    <li class="nav-item border-bottom py-2">
                        <a class="nav-link" href="manage_students">
                            <i class="fa fa-user text-primary"></i> Add / Enroll Students
                        </a>
                    </li>
                    <li class="nav-item border-bottom py-2">
                        <a class="nav-link" href="assign_subject">
                            <i class="fa fa-book text-primary"></i> Add Section
                        </a>
                    </li>
                    <li class="nav-item border-bottom py-2">
                        <a class="nav-link" href="manage_subjects">
                            <i class="fa fa-book text-primary"></i> Add Curriculum
                        </a>
                    </li>
                    <li class="nav-item border-bottom py-2">
                        <a class="nav-link" href="curriculum">
                            <i class="fa fa-server text-primary"></i> Add School Year / Subject
                        </a>
                    </li>
                </ul>

                <!-- Footer -->
                <footer class="footer">
                    <div class="copyright text-center text-muted">
                        &copy; 2019 <a href="#" class="font-weight-bold ml-1" target="_blank">USTP</a>
                    </div>
                </footer>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content">
        <!-- Top navbar -->
        <nav class="navbar navbar-top navbar-expand-md bg-white" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand -->
                <a class="h4 mb-0 text-primary text-uppercase d-none d-lg-inline-block" href="./index.php">Instructor</a>
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
                                    <a class="nav-link mb-sm-3 mb-md-0 " id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="false"><i class="fa fa-plus mr-2"></i>Add New Instructor</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0 active" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="true"><i class="fa fa-list mr-2"></i>View All Instructors</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade " id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                        <!-- Add New Instructor Tab -->
                                        <form  method="POST">
                                            <h3 class="text-danger"><?php echo$this->session->flashdata('message');?></h3>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="username" class="form-control-label">Username</label>
                                                        <input class="form-control"  type="text" name="username" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="firstname" class="form-control-label">Firstname</label>
                                                        <input class="form-control" type="text" name="firstname" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="middlename" class="form-control-label">Middlename</label>
                                                        <input class="form-control" type="text" name="middlename">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="lastname" class="form-control-label">Lastname</label>
                                                        <input class="form-control" type="text" name="lastname" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="lastname" class="form-control-label">Age</label>
                                                        <input class="form-control" type="number" name="age" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="lastname" class="form-control-label">Gender</label>
                                                        <select class="form-control" name="gender" required>
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label for="lastname" class="form-control-label">Contact number</label>
                                                        <input class="form-control" type="text" name="contactnumber" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <label for="address" class="form-control-label">Address</label>
                                                    <textarea class="form-control" rows=4 cols=30 name="address" required></textarea>
                                                </div>
                                            </div>
                                            <div class="clearfix mt-3">
                                                <input class="btn btn-flat btn-success float-right" type="submit" name="submitinstructor" value="Add Instructor"/>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade show active" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                    <?php if($error){  echo $error;}else{}?>
                                        <!-- Table Students -->
                                        <table class="table table-bordered table-striped table-custom" id="instructorTable">
                                            <thead class="text-center">
                                                <tr>
                                                    <th style="font-size: 12px">Instructor</th>
                                                    <th style="font-size: 12px">Contact</th>
                                                    <th style="font-size: 12px">Address</th>
                                                    <th style="font-size: 12px">Username</th>
                                                    <th style="font-size: 12px">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach($instructor_rows as $instructor): ?>
                                                    <tr>
                                                        <td><?php echo $instructor->firstname?> <?php echo $instructor->lastname?>  </td>
                                                        <td><?php echo $instructor->contactnumber; ?></td>
                                                        <td><?php echo $instructor->address; ?></td>
                                                        <td><?php echo $instructor->username; ?></td>
                                                        <td>
                                                        <?php if($instructor->status == 1){?>
                                                            <a class="btn btn-danger" href="<?php echo base_url()?>manage_instructors/update_status/<?php echo $instructor->teacher_id?>">Deactivate</a>
                                                        <?php }else{?>                           
                                                                <a class="btn btn-danger" href="<?php echo base_url()?>manage_instructors/update_status/<?php echo $instructor->teacher_id?>">Active</a>
                                                        <?php } ?> 
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>    
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
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Optional JS -->
    <script src="./assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="./assets/vendor/chart.js/dist/Chart.extension.js"></script>
    <!-- Argon JS -->
    <script src="./assets/js/argon.js?v=1.0.0"></script>
    <!-- Data Tables -->
    <script type="text/javascript" src="./assets/datatables/datatables.min.js"></script>
    <!-- Custom Script -->
    <script type="text/javascript" src="./assets/js/custom_script.js"></script>
    <script type="text/javascript">
        initializeTable("instructorTable");
        initializeTable("instructorSubjectTable");
    </script>
</body>

</html>