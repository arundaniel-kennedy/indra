<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger d-none d-md-block" href="index.php">
      <img src="<?php echo base_url(); ?>assets/img/favi/logo.png" class="d-inline-block align-top ima" height="55" width="55" id="imag" alt="">
      IndraTrust
    </a>
    <a class="navbar-brand js-scroll-trigger d-xs-block d-md-none" href="index.php">
      <img src="<?php echo base_url(); ?>assets/img/favi/logo.png" class="d-inline-block align-top ima" height="40" width="40" id="smallimg" alt="">
      IndraTrust
    </a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      Menu
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav text-uppercase ml-auto">
        <li class="nav-item d-block d-md-none d-xl-block">
          <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>events/">Events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>#news">News</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown10" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Teams
          </a>
          <div class="dropdown-menu bg-dark text-light" aria-labelledby="navbarDropdown10">
            <a class="dropdown-item text-light" href="<?php echo base_url(); ?>greenwing">Green Wing</a>
            <a class="dropdown-item text-light" href="<?php echo base_url(); ?>servicewing">Service Wing</a>
            <a class="dropdown-item text-light" href="<?php echo base_url(); ?>socialwing">Social Wing</a>
            <a class="dropdown-item text-light" href="<?php echo base_url(); ?>techowing">Techo Wing</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>/gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>ina">INA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link js-scroll-trigger" href="<?php echo base_url(); ?>contactus">Contact</a>
        </li>
        <?php if(isset($this->session->userdata['logged_in'])){ ?>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-truncate" href="" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <?php echo $this->session->userdata['logged_in']['name']?>
            </a>
            <div class="dropdown-menu dropdown-menu-lg-right bg-dark text-light" aria-labelledby="navbarDropdown1">
              <?php if($this->session->userdata['logged_in']['admin']){ ?>
                <a class="dropdown-item text-light" href="<?php echo base_url(); ?>homer">
                  Admin Page
                </a>
              <?php }else{ ?>
                <a class="dropdown-item text-light" href="<?php echo base_url(); ?>home">
                  User Home
                </a>
              <?php } ?>
              <a class="dropdown-item text-light" href="<?php echo base_url(); ?>logout">
                Logout
              </a>
            </div>
          </li>

        <?php }else{ ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url(); ?>login">Login</a>
          </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</nav>
