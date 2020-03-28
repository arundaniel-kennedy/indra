
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
                $sql = "SELECT * FROM events";
                $result = $conn->query($sql);

                $num_of_res = 20;
                $num_rows = $result->num_rows;
                $num_pages = ceil($num_rows/$num_of_res);

                if(!isset($_GET['page'])){
                  $page = 1;
                }else{
                  $page = $_GET['page'];
                }

                $first_res = ($page-1)*$num_of_res;

                $sql = "SELECT * FROM events ORDER BY created_at DESC limit ".$first_res.",".$num_of_res;
                $result = $conn->query($sql);

                if($result->num_rows>0){
                  while($row = $result->fetch_assoc()){
                ?>
                <div class="col-md-4 col-sm-12 col-lg-4 portfolio-item">
                  <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1" onclick="sho(<?php echo $row['slno'] ?>);">
                    <div class="portfolio-hover">
                      <div class="portfolio-hover-content">
                        <i class="fas fa-plus fa-3x"></i>
                      </div>
                    </div>
                    <img class="w-100" height="230" src="<?php echo $row['image'] ?>" alt="">
                  </a>
                  <div class="portfolio-caption">
                    <h4><?php echo $row['title'] ?></h4>
                    <p class="text-muted"><?php echo $row['city'] ?></p>
                  </div>
                </div>
              <?php
                  }
                }else{
                echo "no events yet";
                } ?>
              </div>
              <nav aria-label="">
                <ul class="pagination justify-content-end">
                    <?php for($page=1;$page<=$num_pages;$page++){
                          if(isset($_GET['page'])){
                            if($page == $_GET['page']){
                    ?>
                    <li class="page-item active" aria-current="page">
                      <a class="page-link" herf="events.php?page=<?php echo $page ?>">
                        <?php echo $page ?>
                      </a>
                    </li>
                    <?php }else{ ?>
                    <li class="page-item">
                      <a class="page-link bg-dark text-light" href="events.php?page=<?php echo $page ?>">
                        <?php echo $page ?>
                      </a>
                    </li>
                  <?php }}else{ ?>
                    <li class="page-item">
                      <a class="page-link bg-dark text-light" href="events.php?page=<?php echo $page ?>">
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
              <!-- Project Details Go Here -->

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
function sho(slno) {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      console.log(this.responseText);
      document.getElementById('body').innerHTML = this.responseText;
    }
  };
  xhttp.open("POST", "views/admin/api/showevents.php", true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("slno="+slno);
}
</script>

<?php include 'foot.php'; ?>
