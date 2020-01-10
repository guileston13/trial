<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Login</title>
  <!-- Favicon -->
  <link href="./assets/img/brand/favicon.png" rel="icon" type="image/png">
  <!-- Icons -->
  <link href="./assets/vendor/nucleo/css/nucleo.css" rel="stylesheet">
  <link href="./assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="./assets/css/argon.css?v=1.0.0" rel="stylesheet">
  <link type="text/css" href="./assets/css/custom_css.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">
  <div class="main-content">

    <!-- Page content -->
    <div class="container ">
      <div class="w-25 m-auto pt-5 pb-3">
        <img src="./assets/img/brand/white.png" alt="Logo" class="img-fluid">
      </div>
      <div class="row justify-content-center">
        <div class="col-md-5 ">
          <div class="card bg-secondary shadow-lg">
            <div class="card-body px-5">
              <form role="form" action="<?php  echo site_url('login/verify')?>" method="POST">
              <h1 class="text-center mb-4">Member Login</h1>
                <div class="form-group mb-4">
                  <div class="input-group input-group-alternative input-group-custom">
                    <div class="input-group-prepend">
                      <span class="input-group-text input-custom"><i class="fa fa-user"></i></span>
                    </div>
                    <input class="form-control input-custom" autocomplete="off" placeholder="Username" type="text" name="username" required>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative input-group-custom">
                    <div class="input-group-prepend">
                      <span class="input-group-text input-custom"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control input-custom" placeholder="Password" type="password" name="password" required>
                  </div>
                </div>
                <div class="text-center">
                  <input type="submit" class="btn btn-primary" value="SIGN IN"></button>
                    <?php if ($this->session->flashdata('chiro')) { ?>
                      <div class="alert alert-danger alert-toast"> <?= $this->session->flashdata('chiro') ?> </div>
                    <?php } ?>                  
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer class="py-1">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-12">
          <div class="copyright text-center text-muted">
            <h3 class="text-light">&copy; 2018-2019</h3>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="./assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="./assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Argon JS -->
  <script src="./assets/js/argon.js?v=1.0.0"></script>
</body>

</html>