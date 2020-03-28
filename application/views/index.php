
  <!-- Header -->
  <header class="masthead mt-4">
    <div class="container">
      <div class="intro-text" data-aos="zoom-out-down" data-aos-duration="2000">
        <div class="intro-lead-in text-dark">Welcome To IndraTrust!</div>
        <div class="intro-heading text-uppercase text-dark">It's Nice To Meet You</div>
        <br /><br />
        <a class="js-scroll-trigger" href="#view">
          <span class="fas fa-angle-down" style="font-size:7rem"></span>
        </a>
      </div>
    </div>
  </header>

  <!-- Services -->
  <section class="page-section mt-3" id="view">
    <div class="container">
      <div class="row text-center">
        <div class="col-lg-4 col-md-4 col-sm-12" data-aos="fade-up" data-aos-duration="1000">
          <a class="norm" href = "aboutus.php">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-users fa-stack-1x fa-inverse"></i>
          </span>
        </a>
          <h4 class="service-heading">About-us</h4>
          <p class="text-muted">Indian National Development Reformation Association(INDRA Trust) a Non-Governmental Organization, works with motto "Be the Change" to render India 2020 A vision of the New Millennium the dream of our former honourable President Dr. A.P.J. Abdul Kalam sir!</p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12" data-aos="fade-up" data-aos-duration="1500">
          <a class="norm" href = "events.php">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="far fa-calendar-alt fa-stack-1x fa-inverse"></i>
          </span>
        </a>
          <h4 class="service-heading">Events</h4>
          <p class="text-muted">INDRA studies the respective state and it's need ond organize events accordingly to the needs! Without narrowing down INDRA does all it can to make our hero's dream, into reality.</p>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12" data-aos="fade-up" data-aos-duration="2000">
          <a href="login.php" class="norm">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-hands-helping fa-stack-1x fa-inverse"></i>
            </span>
          </a>
          <h4 class="service-heading">Get Involved</h4>
          <p class="text-muted">Volunteers from all over India serve through INDRA and Help in acheiving our hero's dream irrespective of weekdays and weekends, all INDRA have is mind to do, and no reasons not to!</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Grid -->
  <section class="bg-light page-section" id="portfolio" data-aos="fade-up-right" data-aos-duration="1000">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center mb-5">
          <h2 class="section-heading text-uppercase">Events</h2>
        </div>
      </div>
      <div class="row">
        <?php
        if(isset($events)){
          foreach($events as $row){
        ?>
        <div class="col-md-4 col-sm-12 col-lg-4 portfolio-item" data-aos="fade-up-left" data-aos-duration="1000">
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
        echo "no events yet";
      } ?>
      </div>
      <div class="d-flex justify-content-end" data-aos="fade-up" data-aos-duration="1000">
        <a href="events.php" class="btn btn-outline-warning">See more</a>
      </div>
    </div>
  </section>

  <!-- About -->
  <section class="page-section" id="news" data-aos="zoom-in" data-aos-duration="800">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">news</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            <?php
              $count = 0;
              if(isset($news)){
                foreach($news as $row) :
                  if($count%2==0){
            ?>
                  <li onclick="show(<?php echo $row['slno'];?>)" data-aos="fade-up" data-aos-duration="1000">
                    <div class="timeline-image">
                      <img class="rounded-circle img-fluid" src="<?php echo base_url(); ?>assets<?php echo $row['image'];?>" alt="">
                    </div>
                    <div class="timeline-panel">
                      <div class="timeline-heading">
                        <h4><?php echo $row['date'];?></h4>
                        <h4 class="subheading"><?php echo $row['title'];?></h4>
                      </div>
                      <div class="timeline-body">
                        <p class="text-muted"><?php echo $row['location'];?></p>
                      </div>
                    </div>
                  </li>
            <?php }else{ ?>

                <li class="timeline-inverted" onclick="show(<?php echo $row['slno'];?>)" data-aos="fade-up" data-aos-duration="1000">
                  <div class="timeline-image">
                    <img class="rounded-circle img-fluid" src="<?php echo base_url(); ?>assets<?php echo $row['image'];?>" alt="">
                  </div>
                  <div class="timeline-panel">
                    <div class="timeline-heading">
                      <h4><?php echo $row['date'];?></h4>
                      <h4 class="subheading"><?php echo $row['title'];?></h4>
                    </div>
                    <div class="timeline-body">
                      <p class="text-muted"><?php echo $row['location'];?></p>
                    </div>
                  </div>
                </li>

            <?php
                  }
                  $count+=1;
                endforeach;
            ?>
            <li class="timeline-inverted" data-aos="fade-up" data-aos-duration="1000">
              <div class="timeline-image">
                <h4>End
                  <br>of
                  <br>Info!</h4>
              </div>
            </li>
          <?php
              }else{
            ?>
            <li class="timeline-inverted" data-aos="fade-up" data-aos-duration="1000">
              <div class="timeline-image">
                <h4>Nothing
                  <br>Happening
                  <br>Yet!</h4>
              </div>
            </li>
            <?php
          }
            ?>

          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  <section class="bg-light page-section" id="team" data-aos="zoom-in-down" data-aos-duration="1000">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Our Amazing Team</h2><br /><br />
          <!--<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>-->
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-3" data-aos="fade-up-right" data-aos-duration="1000">
          <a class="norm" href = "greenwing.php">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url(); ?>assets/img/team/1.jpg" alt="">
            <h4>Green Wing</h4>
          </div>
        </a>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="1300">
          <a class="norm" href = "servicewing.php">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url(); ?>assets/img/team/2.png" alt="">
            <h4>Service Wing</h4>
          </div>
          </a>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="1600">
          <a class="norm" href = "socialwing.php">
          <div class="team-member">
            <img class="mn-auto rounded-circle" src="<?php echo base_url(); ?>assets/img/team/3.jpg" alt="">
            <h4>Social Wing</h4>
          </div>
          </a>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-3" data-aos="fade-up-left" data-aos-duration="1900">
          <a class="norm" href ="techowing.php">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url(); ?>assets/img/team/4.jpg" alt="">
            <h4>Techo Wing</h4>
          </div>
        </a>
        </div>
  </section>


  <!-- Contact -->
  <section class="page-section" id="contact" data-aos="zoom-in-up" data-aos-duration="1000">
    <div class="container">
      <div class="row d-flex content-align-center">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contact Us</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->


  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
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

  <!-- Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
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
              <div class="modal-body" id="body2">

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

    function show(slno) {
      //alert(slno);
      $('#portfolioModal2').modal('show')

      var xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          console.log(this.responseText);
          document.getElementById('body2').innerHTML = this.responseText;
        }
      };
      xhttp.open("POST", "views/admin/api/shownews.php", true);
      xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
      xhttp.send("slno="+slno);
    }
  </script>
