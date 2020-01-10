<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Add Enroll Students</title>
    <!-- Favicon -->
    <link href="<?php echo base_url(); ?>/assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Icons -->
    <link href="<?php echo base_url(); ?>/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="<?php echo base_url(); ?>/assets/css/argon.css?v=1.0.0" rel="stylesheet">
    <!-- Data Tables -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/datatables/datatables.min.css"/>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/custom_css.css">
    <script src="<?php echo base_url(); ?>assets/js/angular-1.6.4/angular.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/angularjs/main.js?"></script>
</head>

<body ng-app="starter">
    <!-- Sidenav -->
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white border-right navbar-custom" id="sidenav-main">
        <div class="container-fluid">
            <!-- Brand -->
            <div class="text-center navbar-logo"> 
                <img src="<?php echo base_url(); ?>/assets/img/brand/blue.png" alt="Logo">
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
                    <li class="nav-item active border-bottom py-2">
                        <a class="nav-link" href="student_class">
                            <i class="fa fa-users text-primary"></i> Enrolled Students
                        </a>
                    </li>
                    <li class="nav-item border-bottom py-2">
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
                <a class="h4 mb-0 text-primary text-uppercase d-none d-lg-inline-block" href="./index.php">Change Section</a>
                <!-- User -->
                <ul class="navbar-nav align-items-center d-none d-md-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder" src="<?php echo base_url(); ?>/assets/img/theme/avatar.png">
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
                        <form action="<?php echo base_url()?>student_class/final_change" method="POST"> 
                            <table class="table table-bordered table-striped" id="instructorTable" style="text-align: center">
                                <thead>
                                    <tr>
                                        <th>Student</th>
                                        <th>Section</th>
                                        <th>Change</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                            <?php foreach($student as $key) { ?>
                                    <tr>
                                        <td><?php echo $key->firstname.' '.$key->lastname;?>
                                        <input type="hidden" name="studentid" value="<?php echo $key->studentid ?>"> 
                                            
                                        <input type="hidden" name="prev_class_id" value="<?php echo $key->class_id ?>">
                                        </td>
                                        <td>
                                            Current Section: <?php echo $key->section_name ?>
                                        </td>
                                        <td>
                                            <select name="class_id">
                                                <?php foreach($section as $sec){?>
                                                    <option value="<?php echo $sec->class_id ?>"><?php echo $sec->section_name ?>
                                                    </option>
                                                <?php } ?>
                                            </select>
                                        </td>
                                        <td>
                                            <input class="btn btn-success" type="submit" name="">
                                        </td>
                                    </tr>
                                
                            <?php } ?>
                                </tbody>
                            </table>
                        </form>        
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
        initializeTable("studentTable");
    </script>
</body>

</html>