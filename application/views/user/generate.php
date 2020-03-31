<section class="page-section mt-5" id="events">
  <div class="container">
    <div class="jumbotron box2 pt-4 boxer">
      <a href="<?php echo base_url();?>home" class="btn btn-outline-dark">Go back</a><hr>
      <h2 class="section-heading">Generate Id</h2>
      <h5 class="text-muted mb-5">Verify your details</h5>


        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo $user['name']?>" class="form-control" readonly>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
            <label>Blood Group:</label>
            <input type="text" name="bloodgroup" value="<?php echo $user['bloodgroup']?>" class="form-control" readonly>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
            <label>Mobile Number:</label>
            <input type="text" name="mobile" value="<?php echo $user['mobile']?>" class="form-control">
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
            <label>Email:</label>
            <input type="text" name="email" value="<?php echo $user['email']?>" class="form-control" readonly>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
            <div class="form-group">
              <label>Choose Wings:</label><br>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" name="greenwing" value="greenwing" id="greenwing" <?php if($user['wings'][0]){?> checked <?php } ?> >
                <label class="custom-control-label" for="greenwing">
                  Green Wing
                </label>
              </div>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" name="servicewing" value="servicewing" id="servicewing" <?php if($user['wings'][1]){?> checked <?php } ?> >
                <label class="custom-control-label" for="servicewing">
                  Service Wing
                </label>
              </div>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" name="socialwing" value="socialwing" id="socialwing" <?php if($user['wings'][2]){?> checked <?php } ?> >
                <label class="custom-control-label" for="socialwing">
                  Social Wing
                </label>
              </div>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" name="techowing" value="techowing" id="techowing" <?php if($user['wings'][3]){?> checked <?php } ?> >
                <label class="custom-control-label" for="techowing">
                  Techno Wing
                </label>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
            <label>Address:</label>
            <textarea name="address" class="form-control" rows="3"><?php echo $user['email']?></textarea>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
            <label>Father Name:</label>
            <input type="text" name="fn" value="<?php echo $user['fn']?>" class="form-control" readonly>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
            <label>Father Occupation:</label>
            <input type="text" name="fo" value="<?php echo $user['fo']?>" class="form-control">
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
            <label>Mother Name:</label>
            <input type="text" name="mn" value="<?php echo $user['mn']?>" class="form-control" readonly>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
            <label>Mother Occupation:</label>
            <input type="text" name="mo" value="<?php echo $user['mo']?>" class="form-control">
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
            <img src="<?php echo base_url();?>assets<?php echo $user['profileimg']?>" alt="" class="w-100">
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 mb-4">
            <label>Change Profile Img:</label>
            <input type="file" name="profileimg" class="file-input-control">
          </div>
        </div>


    </div>
  </div>
</section>
