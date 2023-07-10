<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Inscription</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo site_url('assets/vendors/mdi/css/materialdesignicons.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo site_url('assets/vendors/css/vendor.bundle.base.css'); ?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo site_url('assets/css/style.css'); ?>">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo site_url('assets/images/favicon.ico'); ?>" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                <img src="<?php echo site_url('assets/images/logo.svg'); ?>">
                </div>
                <h4>Première fois ?</h4>
                <h6 class="font-weight-light">Inscription simple. Plus que quelque étapes</h6>
                <form class="pt-3" method="post" action="<?php echo site_url('login/inscription'); ?>">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" name="nom" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="mdp" placeholder="Password">
                  </div>
                  <div class="mt-3">
                    <button class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" type="submit" >VALIDER</button>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Déjà membre ? <a href="<?php echo site_url('login'); ?>" class="text-primary">Se connecter</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo site_url('assets/vendors/js/vendor.bundle.base.js'); ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo site_url('assets/js/off-canvas.js'); ?>"></script>
    <script src="<?php echo site_url('assets/js/hoverable-collapse.js'); ?>"></script>
    <script src="<?php echo site_url('assets/js/misc.js'); ?>"></script>
    <!-- endinject -->
  </body>
</html>