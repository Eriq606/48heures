        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="<?php echo site_url('assets/images/faces/face1.jpg'); ?>" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2"><?php echo $user->nom; ?></span>
                </div>
                <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
              </a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="<?php echo site_url('loginAdmin/accueil'); ?>">
                <span class="menu-title">Dashboard</span>
                <i class="mdi mdi-view-dashboard menu-icon"></i>
              </a>
              <a class="nav-link" href="<?php echo site_url('code/toValidate'); ?>">
                <span class="menu-title">Validation code</span>
                <i class="mdi mdi-check-circle menu-icon"></i>
              </a>
              <a class="nav-link" href="<?php echo site_url('regime/create'); ?>">
                <span class="menu-title">Creer regime</span>
                <i class="mdi mdi-library-plus menu-icon"></i>
              </a>
              <a class="nav-link" href="<?php echo site_url('regime/liste'); ?>">
                <span class="menu-title">liste des regimes</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
              <a class="nav-link" href="<?php echo site_url('plat/toCreate'); ?>">
                <span class="menu-title">Creer un plat</span>
                <i class="mdi mdi-library-plus menu-icon"></i>
              </a>
              <a class="nav-link" href="<?php echo site_url('plat/liste'); ?>">
                <span class="menu-title">liste des plats</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
              <a class="nav-link" href="<?php echo site_url('activite'); ?>">
                <span class="menu-title">Activites sportives</span>
                <i class="mdi mdi-vector-triangle menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>