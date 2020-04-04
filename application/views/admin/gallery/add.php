
<div class="container toppush3">
<div class="jumbotron boxer box2">
  <a href="<?php echo base_url(); ?>homer" class="btn btn-outline-dark">Go Back</a> <br><br>
  <h4>New Gallery</h4><br>

<form enctype="multipart/form-data" action='<?php echo base_url(); ?>new_gallery/store' method="post">

  <div class="form-group">
    <label>Top Image:</label><br>
    <input type="file" name="topimg" class="form-control-file" style="padding-bottom:15px;" required>
  </div>

  <div class="form-group">
    <label>Sub Images:</label><br>
    <input type="file" name="img[]" class="form-control-file" id="exampleFormControlFile2" multiple required>
  </div>

  <center>
    <button type="submit" class="btn btn-success" name="button">Save</button>
  </center>

</form>
</div>
</div>
