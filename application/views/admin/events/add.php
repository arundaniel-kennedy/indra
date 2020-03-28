
<div class="container toppush3">
<div class="jumbotron boxer box2">
  <a href="../homer.php" class="btn btn-outline-dark">Go Back</a> <br><br>
  <h4>New Events</h4><br>

<form enctype="multipart/form-data" action='<?php echo base_url(); ?>admin/events/store' method="post">

  <input type="hidden" name="MAX_FILE_SIZE" value="9000000" />

  <div class="form-group">
    <label>Image:</label><br>
    <input type="file" name="img" class="file-control" style="padding-bottom:15px;">
  </div>

  <div class="form-group">
    <label>Title:</label>
    <input type="text" class="form-control" name="title">
  </div>

  <div class="form-group">
    <label>Date:</label>
    <input type="text" class="form-control" name="date">
  </div>

  <div class="form-group">
    <label>City:</label>
    <input type="text" class="form-control" name="city">
  </div>

  <div class="form-group">
    <label>Location:</label>
    <textarea name="location" rows="4" class="form-control"></textarea>
  </div>

  <div class="form-group">
    <label>Content:</label>
    <textarea name="content" rows="4" class="form-control"></textarea>
  </div>

  <center>
    <button type="submit" class="btn btn-success" name="button">Save</button>
  </center>

</form>
</div>
</div>
