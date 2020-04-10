<div class="container py-5 toppush2" >
  <div class="jumbotron box2 pt-4 boxer" data-aos="zoom-out-up" data-aos-duration="1000">

    <p class="text-center font-weight-bolder h3">Reset Password</p><br>
    <form action="<?php echo base_url(); ?>update" method="post" autocomplete="on">
      <input type="text" name="id" value="<?= $id?>" hidden>
      <div class="form-group">
        <label>Set Password:</label>
        <input type="password" name="password" class="form-control" value="" required placeholder="Enter Password" pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" autocomplete="new-password">
      </div>
      <small class="text-muted mb-5">
         Password must be atleast 8 characters long with Uppercase, Lowercase and Number or Special characters.
       </small>
      <div class="form-group">
        <label>Re-Enter Password:</label>
        <input type="password" name="repassword" class="form-control" value="" required placeholder="Re-Enter Password" oninput="checkpass()" autocomplete="new-password">
        <p class="small ml-2" id="rer"></p>
      </div>
      <center>
        <input type="submit" class="btn btn-dark" value="Update">
      </center>
    </form>
<br>
    Suddenly Remembered your Password? <a href="/login.php" style="text-decoration:underline">Login Here</a>
  </div>
</div>
<script>
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
</script>
