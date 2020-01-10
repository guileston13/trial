<?php  var_dump($chiro);?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta http-equiv="Cache-control" content="no-cache">
    <meta name="author" content="Creative Tim">
    <title>Teacher</title>
    <!-- Favicon -->
    <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Icons -->
    <link href="./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="./assets/css/argon.css?v=1.0.0" rel="stylesheet">
</head>

<body>
    <!-- Sidenav -->
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand pt-0" href="teacher_dashboard">
                <h1>Teacher</h1>
            </a>
            <!-- User -->
            <ul class="nav align-items-center d-md-none">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media align-items-center">
                            <span class="avatar avatar-sm rounded-circle">
                                <img alt="Image placeholder" src="./assets/img/theme/team-1-800x800.jpg">
                            </span>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome!</h6>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="ni ni-user-run"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>
            </ul>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Collapse header -->
                <div class="navbar-collapse-header d-md-none">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="<?php echo base_url(); ?>">
                                <img src="./assets/img/brand/blue.png">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Form -->
                <form class="mt-4 mb-3 d-md-none">
                    <div class="input-group input-group-rounded input-group-merge">
                        <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fa fa-search"></span>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="nav-item " style="bacgkround-color: gray;">
                        <a class="nav-link" href="teacher_dashboard">
                            <i class="fa fa-home" style="color: #010101;"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">
                            <i class="fa fa-user-tie" style="color: #010101;"></i> My Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="honorsandawards">
                            <i class="fa fa-thumbs-up" style="color: #010101;"></i> Honors and Awards
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="schoolforms">
                            <i class="fa fa-envelope" style="color: #010101;"></i> School Forms
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content">
        <!-- Top navbar -->
        <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand -->
                <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="<?php echo base_url(); ?>">My Profile</a>
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
        <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8" style="height: 86vh;">
            <div class="container-fluid">
                <div class="header-body">
                    <!-- Card stats -->

                    <div class="card shadow">
                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                    <form method="POST">
                                   
                                        <?php foreach($chiro as $marix) { ?>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <!-- Username -->
                                                    <div style="padding: 5px 5px 5px 15px;">
                                                        <div class="row">
                                                            <h3>Username</h3>
                                                        </div>
                                                        <div class="row">
                                                            <input style="padding: 3px;" type="input" value="<?php echo $marix->username?>" name="username" required>
                                                        </div>
                                                    </div>
                                                    <!-- Password -->
                                                    <div style="padding: 5px 5px 5px 15px;">
                                                        <div class="row">
                                                            <h3>Password</h3>
                                                        </div>
                                                        <div class="row">
                                                            <input style="padding: 3px;" type="password" name="password" required>
                                                        </div>
                                                    </div>
                                                    <!-- Confirm Password -->
                                                    <div style="padding: 5px 5px 5px 15px;">
                                                        <div class="row">
                                                            <h3>Age</h3>
                                                        </div>
                                                        <div class="row">
                                                            <input style="padding: 3px;" type="number" value="<?php echo $marix->age?>"  name="age" required>
                                                        </div>
                                                    </div>
                                                    <!-- Contact Number -->
                                                    <div style="padding: 5px 5px 5px 15px;">
                                                        <div class="row">
                                                            <h3>Contact Number</h3>
                                                        </div>
                                                        <div class="row">
                                                            <input style="padding: 3px;" type="input" name="contactnumber" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <!-- First Name -->
                                                    <div style="padding: 5px 5px 5px 15px;">
                                                        <div class="row">
                                                            <h3>First Name</h3>
                                                        </div>
                                                        <div class="row">
                                                            <input style="padding: 3px;" type="input" name="firstname" required>
                                                        </div>
                                                    </div>
                                                    <!-- Last Name -->
                                                    <div style="padding: 5px 5px 5px 15px;">
                                                        <div class="row">
                                                            <h3>Middle Name</h3>
                                                        </div>
                                                        <div class="row">
                                                            <input style="padding: 3px;" type="input" name="middlename">
                                                        </div>
                                                    </div>
                                                    <!-- Age -->
                                                    <div style="padding: 5px 5px 5px 15px;">
                                                        <div class="row">
                                                            <h3>Last Name</h3>
                                                        </div>
                                                        <div class="row">
                                                            <input style="padding: 3px;" type="input" name="lastname" required>
                                                        </div>
                                                    </div>
                                                    <!-- Gender -->
                                                    <div style="padding: 5px 5px 5px 15px;">
                                                        <div class="row">
                                                            <h3>Gender</h3>
                                                        </div>
                                                        <div class="row">
                                                           <select name="gender" style="padding: 3px;" required>
                                                               <option>Male</option>
                                                               <option>Female</option>
                                                           </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <!-- Address -->
                                                    <div style="padding: 5px 5px 5px 15px;">
                                                        <div class="row">
                                                            <h3>Address</h3>
                                                        </div>
                                                        <div class="row">
                                                           <textarea rows=4 cols=30 name="address" required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-top: 7px;">
                                                <input style="margin: 0 10px 0 auto;" class="btn btn-flat btn-success" type="submit" name="updateinstructor" value="Update"/>
                                            </div>
                                            <?php } ?>
                                        </form>
                                 </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <!-- Page content -->
        <div class="container-fluid mt--7">
            <div class="row">
                <hr>
            </div>
            <!-- Footer -->
            <footer class="footer">
                <div class="row align-items-center justify-content-xl-between">
                    <div class="col-xl-12">
                        <div class="copyright text-center text-xl-left text-muted">
                            &copy; 2019 <a href="#" class="font-weight-bold ml-1" target="_blank">USTP</a>
                        </div>
                    </div>
                </div>
            </footer>
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
</body>

</html>