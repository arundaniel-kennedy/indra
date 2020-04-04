<div class="container py-5 toppush2" >
  <div class="jumbotron box2 pt-4" style="margin-left:15vw;margin-right:15vw;background-color:white;" data-aos="zoom-out-up" data-aos-duration="800">

    <p class="text-center font-weight-bolder h3">Forgot Password</p><br>
    <form action="<?php echo base_url(); ?>generate" autocomplete="on" method="post">
      <div class="form-group">
        <label>Email:</label>
        <input type="email" name="email" class="form-control" placeholder="Enter Email" required autocomplete="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
      </div>
      <center>
        <input type="submit" class="btn btn-dark" value="submit">
      </center>
    </form>
<br>
    Suddenly Remembered your Password? <a href="<?php echo base_url(); ?>login" style="text-decoration:underline">Login Here</a>
  </div>
</div>

<script>
function generate() {
  var email = document.getElementsByName('email')[0].value;

  $.ajax({
   url:"<?php echo base_url(); ?>generate",
   method:"POST",
   dataType:'json',
   cache : false,
   data:{email:email},
   success:function(data)
   {
     //console.log(data);
     if(data=="error_code_1"){
       toastr.error("User Email not registered!!");
     }
     else if(data=="success"){
       toastr.success("Mail has been sent to you!!");
     }
     else{
       alert(data);
     }
   }
  });
}
</script>
