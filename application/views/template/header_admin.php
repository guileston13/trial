<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Classes</title>
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
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md bg-white border-right navbar-custom" id="sidenav-main">
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
                    <li class="nav-item active border-bottom py-2">
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
                    <li class="nav-item border-bottom py-2">
                        <a class="nav-link" href="create_book">
                            <i class="fa fa-server text-primary"></i> Books
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