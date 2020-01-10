<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Admin</title>
    <!-- Favicon -->
    <link href="<?php echo base_url()?>/assets/img/brand/favicon.png" rel="icon" type="image/png">
    <!-- Icons -->
    <link href="<?php echo base_url()?>/assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
    <link href="<?php echo base_url()?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="<?php echo base_url()?>/assets/css/argon.css?v=1.0.0" rel="stylesheet">
    <!-- Data Tables -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/datatables/datatables.min.css"/>
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>/assets/css/custom_css.css">
</head>

<body>
    <!-- Sidenav -->
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white border-right" id="sidenav-main">
        <div class="container-fluid">
            <!-- Brand -->
            <div class="text-center navbar-logo"> 
                <img src="<?php echo base_url()?>/assets/img/brand/blue.png" alt="Logo">
            </div>

            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Navigation -->
                <ul class="navbar-nav">
                    <li class="nav-item border-bottom py-2">
                        <a class="nav-link" href="<?php echo base_url();?>teacher_dashboard">
                            <i class="fa fa-home text-primary"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item border-bottom py-2">
                        <a class="nav-link" href="<?php echo base_url()?>teacher_dashboard/advisory">
                            <i class="fa fa-user-tie text-primary"></i> Advisory
                        </a>
                    </li>
                    <li class="nav-item border-bottom py-2">
                        <a class="nav-link" href="<?php echo base_url()?>teacher_dashboard/final_grade">
                            <i class="fa fa-thumbs-up text-primary"></i> View Final Grade
                        </a>
                    </li>
                    <li class="nav-item border-bottom py-2">
                        <a class="nav-link" href="form1" target="_blank">
                            <i class="fa fa-envelope text-primary"></i> School Forms
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>