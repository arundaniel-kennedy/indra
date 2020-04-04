
      <section class="page-section mt-5" id="events">
        <div class="container">
          <section class="bg-light page-section" id="portfolio">
            <div class="container">
              <div class="row">
                <div class="col-lg-12 text-center mb-5">
                  <h2 class="section-heading text-uppercase">Events</h2>
                </div>
              </div>
              <div class="row">
                <?php

                if(!empty($events)){
                  foreach($events as $row){
                ?>
                <div class="col-md-4 col-sm-12 col-lg-4 portfolio-item">
                  <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1" onclick="sho(<?php echo $row['slno'] ?>);">
                    <div class="portfolio-hover">
                      <div class="portfolio-hover-content">
                        <i class="fas fa-plus fa-3x"></i>
                      </div>
                    </div>
                    <img class="w-100" height="230" src="<?php echo base_url(); ?>assets<?php echo $row['image'] ?>" alt="">
                  </a>
                  <div class="portfolio-caption">
                    <h4><?php echo $row['title'] ?></h4>
                    <p class="text-muted"><?php echo $row['city'] ?></p>
                  </div>
                </div>
              <?php
                  }
                }else{
                echo "<span class='h3 text-center'>No Events Here Yet!</span>";
                } ?>
              </div>

              <nav aria-label="">
                <ul class="pagination justify-content-end">
                    <?php for($page=1;$page<=$num_pages;$page++){
                            if($page == $cur_page){
                    ?>
                    <li class="page-item active" aria-current="page">
                      <a class="page-link" herf="<?php echo base_url(); ?>events/<?php echo $page ?>">
                        <?php echo $page ?>
                      </a>
                    </li>
                    <?php }else{ ?>
                    <li class="page-item">
                      <a class="page-link bg-dark text-light" href="<?php echo base_url(); ?>events/<?php echo $page ?>">
                        <?php echo $page ?>
                      </a>
                    </li>
                  <?php }} ?>
                </ul>
              </nav>
            </div>
          </section>
        </div>
</section>

<!-- Portfolio Modals -->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="close-modal" data-dismiss="modal">
        <div class="lr">
          <div class="rl"></div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <div class="modal-body" id="body">
              <h2 class="text-uppercase" id="title"></h2>
              <p class="item-intro text-muted" id="city"></p>
              <img class="img-fluid d-block mx-auto" id="image" src="" alt="">
              <p id="content"></p>
              <ul class="list-inline">
                <li id="date"></li>
                <li id="location"></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
function sho(slno) {
  $.ajax({
   url:"<?php echo base_url(); ?>views/api/showevent",
   method:"POST",
   dataType:'json',
   cache : false,
   data:{slno:slno},
   success:function(data)
   {
     console.log(data);
     $('#title').html(data.title);
     $('#city').html(data.city);
     $('#image').attr('src',"<?php echo base_url(); ?>assets"+data.image);
     $('#content').html(data.content);
     $('#date').html(data.date);
     $('#location').html(data.location);
   }
  });
}
</script>
