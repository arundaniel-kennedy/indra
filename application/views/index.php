
  <!-- Header -->
  <header class="masthead" id="firstpaint">
    <div class="container">
      <div class="d-none d-md-block">
        <div class="row">
          <div class="col-lg-6 col-sm-12 h-100" style="margin-top:25vh;">
              <div class="d-flex align-items-end" data-aos="fade-out" data-aos-duration="2000">
                <img src="<?php echo base_url(); ?>assets/img/apj1.jpeg" class="w-100" alt="">
              </div>
          </div>
          <div class="col-lg-6 col-sm-12 h-100">
            <div class="intro-text" data-aos="fade-out" data-aos-duration="2000">
              <div class="intro-lead-in text-dark">Welcome To IndraTrust!</div>
              <div class="intro-heading text-uppercase text-dark">It's Nice To Meet You</div>
              <a class="js-scroll-trigger" href="#view">
                <span class="fas fa-angle-down" style="font-size:5rem"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="d-block d-md-none">
        <div class="intro-text" data-aos="fade-out" data-aos-duration="2000">
          <div class="intro-lead-in text-dark">Welcome To IndraTrust!</div>
          <div class="d-flex align-items-end" data-aos="fade-out" data-aos-duration="2000">
            <img src="<?php echo base_url(); ?>assets/img/apj1.jpeg" class="w-100" alt="">
          </div>
          <div class="intro-heading text-uppercase text-dark">It's Nice To Meet You</div>
          <br /><br />
          <a class="js-scroll-trigger" href="#view">
            <span class="fas fa-angle-down" style="font-size:7rem"></span>
          </a>
        </div>
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
        if(!empty($events)){
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
        echo "<span class='h3 text-center'>No Events Here Yet!</span>";
      } ?>
      </div>
      <div class="d-flex justify-content-end" data-aos="fade-up" data-aos-duration="1000">
        <a href="events.php" class="btn btn-outline-warning">See more</a>
      </div>
    </div>
  </section>


  <!-- News -->
  <div class="" id="news"></div>
  <section class="page-section" data-aos="zoom-in" data-aos-duration="800">
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
              if(!empty($news)){
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
          <a class="norm" href = "<?php echo base_url(); ?>greenwing">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url(); ?>assets/img/team/1.jpg" alt="">
            <h4>Green Wing</h4>
          </div>
        </a>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="1300">
          <a class="norm" href = "<?php echo base_url(); ?>servicewing">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="<?php echo base_url(); ?>assets/img/team/2.png" alt="">
            <h4>Service Wing</h4>
          </div>
          </a>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-3" data-aos="fade-up" data-aos-duration="1600">
          <a class="norm" href = "<?php echo base_url(); ?>socialwing">
          <div class="team-member">
            <img class="mn-auto rounded-circle" src="<?php echo base_url(); ?>assets/img/team/3.jpg" alt="">
            <h4>Social Wing</h4>
          </div>
          </a>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-3" data-aos="fade-up-left" data-aos-duration="1900">
          <a class="norm" href ="<?php echo base_url(); ?>techowing">
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
          <form id="contactForm" class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6">
                <input type="hidden" id="url" value="<?php echo base_url();?>contact_mail">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Your Name *" required pattern="[A-Za-z ]*">
                  <p class="invalid-feedback">Please Enter a Name</p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Your Email *" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                  <p class="invalid-feedback">Please Enter a valid email</p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="text" pattern="[5-9]{1}[0-9]{9}" placeholder="Your Phone *" required>
                  <p class="invalid-feedback">A Valid phone Number please</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Your Message *" required></textarea>
                  <p class="invalid-feedback">A Message is required</p>
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
                <h2 class="text-uppercase" id="title1"></h2>
                <img class="img-fluid d-block mx-auto" id="image1" src="" alt="">
                <ul class="list-inline">
                  <li id="date1"></li>
                  <li id="location1"></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
  window.onload = rep;

  function rep(){
    setTimeout(function(){
        $('#firstpaint').replaceWith("<img src='<?php echo base_url(); ?>assets/img/bg.jpeg' style='margin-top:10vh;' width='100%' class='d-none d-md-block' height='660vh' data-aos='fade-in' data-aos-duration='1000'/><img src='<?php echo base_url(); ?>assets/img/bg1.jpeg' class='d-block d-md-none' style='margin-top:6vh;' width='100%' data-aos='fade-in' data-aos-duration='1000'/><img src='<?php echo base_url(); ?>assets/img/bg2.jpeg' class='d-block d-md-none' style='' width='100%' data-aos='fade-in' data-aos-duration='1000'/>");
      }, 5000);
  }

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

    function show(slno) {
      //alert(slno);
      $('#portfolioModal2').modal('show')

      $.ajax({
       url:"<?php echo base_url(); ?>views/api/shownews",
       method:"POST",
       dataType:'json',
       cache : false,
       data:{slno:slno},
       success:function(data)
       {
         console.log(data);
         $('#title1').html(data.title);
         $('#image1').attr('src',"<?php echo base_url(); ?>assets"+data.image);
         $('#date1').html(data.date);
         $('#location1').html(data.location);
       }
      });
    }
    function mail_me() {

      event.preventDefault();
      var uri = $("input#url").val();
      var name = $("input#name").val();
      var email = $("input#email").val();
      var phone = $("input#phone").val();
      var message = $("textarea#message").val();

      var firstName = name; // For Success/Failure Message
      // Check for white space in name for Success/Fail message
      if (firstName.indexOf(' ') >= 0) {
        firstName = name.split(' ').slice(0, -1).join(' ');
      }
      $this = $("#sendMessageButton");
      $this.prop("disabled", true);

      // $.ajax({
      //   url: uri,
      //   type: "POST",
      //   data: {
      //     name: name,
      //     phone: phone,
      //     email: email,
      //     message: message
      //   },
      //   cache: false,
      //   success: function(data) {
      //     console.log(data);
      //     // Success message
      //     if(data=="success"){
      //       $('#success').html("<div class='alert alert-success'>");
      //       $('#success > .alert-success').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
      //         .append("</button>");
      //       $('#success > .alert-success')
      //         .append("<strong>Your message has been sent. </strong>");
      //       $('#success > .alert-success')
      //         .append('</div>');
      //       //clear all fields
      //       $('#contactForm').trigger("reset");
      //     }else{
      //       $('#success').html("<div class='alert alert-danger'>");
      //       $('#success > .alert-danger').html("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;")
      //         .append("</button>");
      //       $('#success > .alert-danger').append($("<strong>").text("Sorry " + firstName + ", it seems that my mail server is not responding. Please try again later!"));
      //       $('#success > .alert-danger').append('</div>');
      //       //clear all fields
      //       $('#contactForm').trigger("reset");
      //     }
      //   },
      //   complete: function() {
      //     setTimeout(function() {
      //       $this.prop("disabled", false); // Re-enable submit button when AJAX call is complete
      //     }, 1000);
      //   }
      // });
    }
  </script>
