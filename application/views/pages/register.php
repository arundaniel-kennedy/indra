
<section class="page-section mt-5" id="login">
  <div class="container py-5">
    <div class="jumbotron box2 pt-4 boxer" data-aos="zoom-out-up" data-aos-duration="1000">

      <h2 class="section-heading text-center">Register</h2>
      <sup style="color:red">* All Fields are Required</sup>
      <br><br>

      <form enctype="multipart/form-data" action="<?php echo base_url();?>register-user" method="post" name="myForm" onsubmit="return validateForm();">

        <input type="hidden" name="MAX_FILE_SIZE" value="9000000" />

        <h4>A Little About You!</h4><br>
        <div class="form-row">
            <div class="form-group col-sm-12 col-md-12 col-lg-6">
              <label>First Name<sup style="color:red">*</sup>:</label>
              <input type="text" name="name" class="form-control" placeholder="Given Name"   pattern="[a-zA-Z]*" required autocomplete="given-name">
            </div>
            <div class="form-group col-sm-12 col-md-12 col-lg-6">
              <label>Last Name<sup style="color:red">*</sup>:</label>
              <input type="text" name="ln" class="form-control" placeholder="Family Name or Initials"   pattern="[a-zA-Z]*" required autocomplete="given-name">
            </div>
        </div>

        <div class="form-row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="form-group">
              <label>Blood Group<sup style="color:red">*</sup>:</label>
              <select class="custom-select" name="bloodgroup" required>
                <option value="">Select Blood Group</option>
                <option>O +ve</option>
                <option>O -ve</option>
                <option>A +ve</option>
                <option>A -ve</option>
                <option>B +ve</option>
                <option>B -ve</option>
                <option>AB +ve</option>
                <option>AB -ve</option>
              </select>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="form-group">
              <label>Age<sup style="color:red">*</sup>:</label>
              <input type="text" name="age" class="form-control" placeholder="Enter Age"   pattern="[0-9]*" required>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="form-group">
              <label>Education<sup style="color:red">*</sup>:</label>
              <input type="text" name="education" class="form-control" placeholder="Enter Educational Qualification" required>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6">

          </div>
        </div>
        <br><br>

        <h4>Where Can You Serve?</h4><br>
        <div class="form-row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="form-group">
              <label>Choose Wings<sup style="color:red">*</sup>:</label><br>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" name="greenwing" value="greenwing" id="greenwing">
                <label class="custom-control-label" for="greenwing">
                  Green Wing
                </label>
              </div>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" name="servicewing" value="servicewing" id="servicewing">
                <label class="custom-control-label" for="servicewing">
                  Service Wing
                </label>
              </div>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" name="socialwing" value="socialwing" id="socialwing">
                <label class="custom-control-label" for="socialwing">
                  Social Wing
                </label>
              </div>
              <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" name="techowing" value="techowing" id="techowing">
                <label class="custom-control-label" for="techowing">
                  Techno Wing
                </label>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="form-group">
              <label>Address<sup style="color:red">*</sup>:</label>
              <input type="text" name="address" class="form-control" placeholder="Door no, Street Name, Area" required>
              <div class="form-row mt-2">
                <div class="col-6">
                  <div class="form-group">
                    <label>State:</label>
                    <select class="custom-select" name="state_code" required onchange="getcities();">
                      <option value="">Your state</option>
                      <?php

                        if(!empty($states)){
                          foreach($states as $state){
                      ?>
                      <option value="<?php echo $state['state_code']?>"><?php echo $state['state_name']?></option>
                      <?php
                          }
                        }
                      ?>
                    </select>
                  </div>
                </div>
                <div class="col-6">
                  <div class="form-group">
                    <label>City:</label>
                    <select class="custom-select" name="city" required>
                      <option value="">Your City</option>

                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <br><br>

        <h4>Your Contact Information!</h4><br>
        <div class="form-row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="form-group">
              <label>Mobile Number<sup style="color:red">*</sup>:</label>
              <input type="text" name="mobile" class="form-control" placeholder="Enter Phone Number" required pattern="[5-9]{1}[0-9]{9}" autocomplete="mobile">
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="form-group">
              <label>Email<sup style="color:red">*</sup>:</label>
              <input type="email" name="useremail" class="form-control" placeholder="Enter Email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" onfocusout="checkemail()" autocomplete="email">
              <p class="small ml-2" id="err"></p>
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="form-group">
              <label>Set Password<sup style="color:red">*</sup>:</label>
              <input type="password" name="password" class="form-control" value="" required placeholder="Enter Password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$">
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="form-group">
              <label>Re-Enter Password<sup style="color:red">*</sup>:</label>
              <input type="password" name="repassword" class="form-control" value="" required placeholder="Re-Enter Password" oninput="checkpass()">
              <p class="small ml-2" id="rer"></p>
            </div>
          </div>
        </div>
        <small class="form-text text-muted mb-3">
           Password must be atleast 8 characters long with Uppercase, Lowercase and Number or Special characters.
         </small>
        <div class="form-row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="form-group">
              <label for="img">Upload Profile Image<sup style="color:red">*</sup>:</label><br>
              <input type="file" class="form-control-file" name="img" required>
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6">

          </div>
        </div>
        <center>
          <input type="submit" class="btn btn-dark" value="Submit">
        </center>
      </form>
  <br>
      Are you a Existing User? <a href="<?php echo base_url(); ?>login" style="text-decoration:underline">Login Here</a>
    </div>
  </div>

  <br>


  </section>

  <script>
  function validateForm() {
      var e = document.forms["myForm"]["useremail"].value;

      if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(e))
      {
        return true;
      }
      else{
        toastr.error("You have entered an invalid email address!");
        return false;
      }
  }
  function checkpass() {
    var pass = document.getElementsByName('password')[0];
    var repass = document.getElementsByName('repassword')[0];

    if (repass.value == '') {
      repass.style.borderColor="gray";
      document.getElementById('rer').innerHTML='';
    }
    else if(pass.value != repass.value){
      repass.style.borderColor="red";
      repass.style.color="red";
      document.getElementById('rer').style.color="red";
      document.getElementById('rer').innerHTML="Passwords don't match";
    }
    else if(pass.value == repass.value){
      repass.style.borderColor="green";
      repass.style.color="green";
      document.getElementById('rer').style.color="green";
      document.getElementById('rer').innerHTML='Passwords match';
    }
  }

  function checkemail() {
    var email = document.getElementsByName('useremail')[0].value;

    $.ajax({
     url:"<?php echo base_url(); ?>users/api/checkmail",
     method:"POST",
     dataType:'json',
     cache : false,
     data:{email:email},
     success:function(data)
     {
       console.log(data);
       if(data){
         toastr.error("This email address already exists! Proceed to Login");
         document.getElementById('err').style.color="red";
         document.getElementById('err').innerHTML='This email address already exists! Proceed to Login';
       }
     }
    });
  }

  function getcities() {
    var state = document.getElementsByName('state_code')[0].value;

    $.ajax({
     url:"<?php echo base_url(); ?>views/api/getcities",
     method:"POST",
     dataType:'json',
     cache : false,
     data:{state:state},
     success:function(data)
     {
       //console.log(data[0].city_name);
       option = '<option value="">Your City</option>'
       for(var i=0;i<data.length;i++){
         option += '<option value="'+data[i].city_name+'">'+data[i].city_name+'</option>'
       }
       //console.log(option);
       document.getElementsByName('city')[0].innerHTML = option;
     }
    });
  }
  </script>
