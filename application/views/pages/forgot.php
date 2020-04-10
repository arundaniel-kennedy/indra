<div class="container py-5 toppush2" >
  <div class="jumbotron box2 pt-4" style="margin-left:15vw;margin-right:15vw;background-color:white;" data-aos="zoom-out-up" data-aos-duration="800">

    <p class="text-center font-weight-bolder h3">Forgot Password</p><br>
    <form id="forgotForm">
      <div class="form-group">
        <label>Email:</label>
        <input type="email" name="email" class="form-control" placeholder="Enter Email" required autocomplete="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
      </div>
      <center>
        <input type="button" class="btn btn-dark" value="Submit" onclick="generate();">
      </center>
    </form>
<br>
    Suddenly Remembered your Password? <a href="<?php echo base_url(); ?>login" style="text-decoration:underline">Login Here</a>
    <p class="text-muted mt-5 mb-0 d-none" id="emailed"></p>
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
       $("#emailed").html("It Might take a few Moments for the Email to arrive so please wait!");
       $("#emailed").attr("class","text-muted mt-5 mb-0");
       $('#forgotForm').trigger("reset");
     }
     else{
       alert(data);
     }
   }
  });
}
</script>
