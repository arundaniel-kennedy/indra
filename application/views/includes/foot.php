<footer class="footer">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-4">
        <span class="copyright">Copyright &copy; IndraTrust Website <?php echo Date("Y") ?></span>
        <?php if(!isset($this->session->userdata['logged_in'])){ ?>
        <form action="<?php echo base_url(); ?>/users/login" method="post" class="d-inline-flex">
            <input type="email" name="useremail" value="ad@g.com" hidden>
            <input type="password" name="password" value="h" hidden>
            <input type="submit" value="a" class="btn btn-outline-light">
        </form>
        <form action="<?php echo base_url(); ?>/users/login" method="post" class="d-inline-flex">
            <input type="email" name="useremail" value="sa@g.com" hidden>
            <input type="password" name="password" value="Poi" hidden>
            <input type="submit" value="u" class="btn btn-outline-light">
        </form>
      <?php } ?>
      </div>
      <div class="col-md-4">
        <ul class="list-inline social-buttons">
          <li class="list-inline-item">
            <a href="https://www.facebook.com/indratrustngo/">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="https://www.instagram.com/indra_india/">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="https://www.youtube.com/channel/UC52mmXikFyF0eU65gAncKBQ">
              <i class="fab fa-youtube"></i>
            </a>
          </li>
          <li class="list-inline-item">
            <a href="mailto:info@indratrust.in">
              <i class="fa fa-envelope"></i>
            </a>
          </li>
        </ul>
      </div>
      <div class="col-md-4">
        <ul class="list-inline quicklinks">
          <li class="list-inline-item">
            <a href="#">Privacy Policy</a>
          </li>
          <li class="list-inline-item">
            <a href="#">Terms of Use</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<!-- Bootstrap core JavaScript -->

<script src="<?php echo base_url(); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<link href="<?php echo base_url(); ?>toastr/toastr.css" rel="stylesheet"/>
<script type="text/javascript" src="<?php echo base_url(); ?>toastr/toastr.js"></script>

<!-- Plugin JavaScript -->
<script src="<?php echo base_url(); ?>/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/aos.js"></script>
<!-- Contact form JavaScript -->
<script src="<?php echo base_url(); ?>assets/js/jqBootstrapValidation.js"></script>
<script src="<?php echo base_url(); ?>assets/js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="<?php echo base_url(); ?>assets/js/agency.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/agency.js"></script>

<script>
AOS.init({
easing: 'ease',
once: true
});
</script>

<script>
  toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": true,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": true,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "3000",
    "extendedTimeOut": "2000",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
  }
</script>

<?php
  if(isset($_SESSION['error'])){
    if(is_array($_SESSION['error'])){
      foreach ($_SESSION['error'] as $error) {
        echo "<script>toastr.error('".$error."')</script>";
      }
    }else{
      echo "<script>toastr.error('".$_SESSION['error']."')</script>";
    }
    unset($_SESSION['error']);
  }
  if(isset($_SESSION['success'])){
    echo "<script>toastr.success('".$_SESSION['success']."')</script>";
    unset($_SESSION['success']);
  }
?>


</body>

</html>
