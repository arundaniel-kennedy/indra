
<div class="container toppush3">
<div class="jumbotron boxer box2">
  <a href="../homer.php" class="btn btn-outline-dark">Cancel Edit</a> <br><br>
  <h4>Edit Gallery</h4><br>

<form enctype="multipart/form-data" action="<?php echo base_url(); ?>admin/gallery/update" method="post">

  <input type="text" name="slno" value="<?php echo $row['slno']?>" hidden>

  <div class="form-group">
    <label>Top Image:</label><br>
    <input type="file" name="topimg" class="form-control-file" style="padding-bottom:15px;">
  </div>

  <div class="form-group">
    <label>Sub Images:</label><br>
    <input type="file" name="img[]" class="form-control-file" id="exampleFormControlFile2" multiple>
  </div>

  <center>
    <button type="submit" class="btn btn-success" name="button">Update</button>
  </center>

</form>

</div>
</div>
