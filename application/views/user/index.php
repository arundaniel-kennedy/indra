  <div class="d-none d-lg-block " data-aos="fade-in" data-aos-duration="1000">

    <center>
      <div style="margin-left:20%;margin-right:20%;margin-top:5%">
        <img src="<?php echo base_url(); ?>assets/img/indra.png" class="w-80" alt="" height="200">
      </div><br><br>
      <p class="font-weight-bolder h8 mb-5">Welcome <?php echo $this->session->userdata['logged_in']['name']; ?></p>
    </center>

    <div style="margin-left:35%;margin-right:35%">
        <div class="d-flex justify-content-center">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable" style="font-size:1.5em">
            Donate
            <hr>
            <p class="h2">What </p>
          </button>
        </div>
    </div>

  </div>

  <div class="d-sm-block d-lg-none" data-aos="fade-in" data-aos-duration="1000">

    <center>
      <div style="margin-left:10%;margin-right:10%" class="mt-5 pt-5">
        <img src="<?php echo base_url(); ?>assets/img/indra.png" class="w-100" alt="">
      </div><br><br><br>
      <p class="font-weight-bolder h2 mb-5">Welcome, <?php echo $this->session->userdata['logged_in']['name']; ?></p>
    </center>

    <div style="margin-left:25%;margin-right:25%">
        <div class="d-flex justify-content-center">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalScrollable" style="font-size:1.5em">
            Donate
          </button>
        </div>
    </div>

  </div>

  <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalScrollableTitle">Donation information</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="text-center h2">Donation</p>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


<br><br><br>
