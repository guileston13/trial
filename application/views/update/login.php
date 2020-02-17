<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
  <!--<![endif]-->
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Formgen</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php echo base_url()?>assets_login/css/style.min.css" />
  </head>
  <body class="page-login">
    <div class="container-fluid p-0 pl-5 height-full">
      <div class="row no-gutters height-full">
        <div class="col-md-9 py-5 pl-5 ion-left-panel">
            <img src="<?php echo base_url()?>assets_login/img/login.png" class="ion-img" />

          <header class="header mb-5">
            <h1 class="header-title">
              <span class="header-title__mainText">Form</span>gen
              <span class="header-title__subText text-muted">
                
                <a href="" target="_blank"
                  >School System</a
                ></span
              >
            </h1>
          </header>

          <main class="main">
            <h2 class="main-title">
                Login
            </h2>
            <span style="color:red"><?php echo $this->session->flashdata('chiro');?></span>
            <div class="row">
              <div class="col-md-5">
                <form class="mt-4" action="<?php  echo site_url('login/verify')?>" method="POST">
                  <div class="form-group ion-form-group mb-4">
                    <input
                        type="text"
                        class="form-control"
                        id="username"
                        placeholder=" "
                        name="username"
                    />
                    <label for="username">Username</label>
                  </div>

                  <div class="form-group ion-form-group mb-4">
                    <input
                      type="password"
                      class="form-control"
                      id="password"
                      placeholder=" "
                      name="password"
                    />
                    <label for="password">Password</label>
                  </div>
                  <button
                    type="submit"
                    class="btn btn-primary btn-lg btn-block"
                  >
                    Sign In
                  </button>
                </form>
              </div>
            </div>
          </main>
        </div>
        <!-- <div
          class="col-md-3 ion-right-panel height-full"
          id="particles-js"
        ></div> -->
      </div>
    </div>
  </body>
  <script src="<?php echo base_url()?>assets_login/js/particle.min.js"></script>
  <script src="<?php echo base_url()?>assets_login/js/particle.config.js"></script>
</html>
