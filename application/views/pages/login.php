
<section class="page-section mt-5" id="login">
  <div class="container py-5" data-aos="zoom-out-up" data-aos-duration="1000">
  <div class="jumbotron box2 pt-4 boxer">
    <h2 class="section-heading text-center">Login</h2>

    <?php echo validation_errors();?>

    <?php echo form_open('users/login'); ?>
      <div class="form-group">
        <label>Email:</label>
        <input type="email" name="useremail" class="form-control" placeholder="Enter Email" required autocomplete="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
      </div>
      <div class="form-group">
        <label>Password:</label>
        <input type="password" name="password" class="form-control" value="" required placeholder="Enter Password" autocomplete="current-password">
      </div>
      <center>
        <input type="submit" class="btn btn-dark" value="submit">
      </center>
    </form>
<br>
    Are you a New User? <a href="<?php echo base_url(); ?>register" style="text-decoration:underline">Register Here</a>
    <br>
    Forgot Password?<a href="<?php echo base_url(); ?>forgot" style="text-decoration:underline">Click Here</a>
  </div>
</div>


</section>
