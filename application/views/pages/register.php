
<section class="page-section mt-5" id="login">
  <div class="container py-5" data-aos="zoom-out-up" data-aos-duration="1000">
    <div class="jumbotron box2 pt-4 boxer">

      <h2 class="section-heading text-center">Register</h2>
      <sup style="color:red">* All Fields are Required</sup>
      <br><br>

      <form enctype="multipart/form-data" action="views/add.php" method="post" name="myForm" onsubmit="return validateForm();">

        <input type="hidden" name="MAX_FILE_SIZE" value="9000000" />

        <h4>A little about you</h4><br>
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="form-group">
              <label>First Name<sup style="color:red">*</sup>:</label>
              <input type="text" name="name" class="form-control" placeholder="Given Name"   pattern="[a-zA-Z]*" required autocomplete="given-name">
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="form-group">
              <label>Last Name<sup style="color:red">*</sup>:</label>
              <input type="text" name="ln" class="form-control" placeholder="Family Name or Initials"   pattern="[a-zA-Z]*" required autocomplete="given-name">
            </div>
          </div>
        </div>

        <div class="row">
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
              <input type="text" name="age" class="form-control" placeholder="Enter Age"   pattern="[a-zA-Z]*" required autocomplete="given-name">
            </div>
          </div>
        </div>

        <div class="row">
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

        <h4>Where can you serve</h4><br>
        <div class="row">
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
              <textarea name="address" rows="3" class="form-control" required placeholder="Enter your address"></textarea>
            </div>
          </div>
        </div>
        <br><br>

        <h4>Your Contact Information</h4><br>
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="form-group">
              <label>Mobile Number<sup style="color:red">*</sup>:</label>
              <input type="text" name="mnumber" class="form-control" placeholder="Enter Phone Number" required pattern="[5-9]{1}[0-9]{9}" autocomplete="mobile">
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

        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="form-group">
              <label>Set Password<sup style="color:red">*</sup>:</label>
              <input type="password" name="password" class="form-control" value="" required placeholder="Enter Password" pattern="{8,12}">
            </div>
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="form-group">
              <label>Re-Enter Password<sup style="color:red">*</sup>:</label>
              <input type="password" name="repassword" class="form-control" value="" required placeholder="Re-Enter Password" pattern="{8,12}" oninput="checkpass()">
              <p class="small ml-2" id="rer"></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="form-group">
              <label for="img">Upload Profile Image<sup style="color:red">*</sup>:</label><br>
              <input type="file" class="form-control-file" name="img">
            </div>
          </div>
        </div>
        <center>
          <input type="submit" class="btn btn-dark" value="submit">
        </center>
      </form>
  <br>
      Are you a Existing User? <a href="login.php" style="text-decoration:underline">Login Here</a>
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

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          //console.log(this.responseText);
          if(this.responseText==1){
            toastr.error("This email address already exists! Proceed to Login");
            document.getElementById('err').style.color="red";
            document.getElementById('err').innerHTML='This email address already exists! Proceed to Login';
          }
      }
    };
    xhttp.open("POST", "views/admin/api/checkemail.php", true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("email="+email);
  }
  </script>
