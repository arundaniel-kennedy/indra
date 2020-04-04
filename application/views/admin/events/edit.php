
<div class="container toppush3">
<div class="jumbotron boxer box2">
  <a href="../homer.php" class="btn btn-outline-dark">Cancel Edit</a> <br><br>
  <h4>Edit Events</h4><br>

<form enctype="multipart/form-data" action="<?php echo base_url(); ?>alter_event/update" method="post">

  <input type="text" name="slno" value="<?php echo $row['slno']?>" hidden>

  <div class="form-group">
    <label>Image:</label><br>
    <input type="file" name="img" class="file-control" style="padding-bottom:15px;">
  </div>

  <div class="form-group">
    <label>Title:</label>
    <input type="text" class="form-control" name="title" value="<?php echo $row['title']?>">
  </div>

  <div class="form-group">
    <label>Date:</label>
    <input type="text" class="form-control" name="date" value="<?php echo $row['date']?>">
  </div>

  <div class="form-group">
    <label>City:</label>
    <input type="text" class="form-control" name="city" value="<?php echo $row['city']?>">
  </div>

  <div class="form-group">
    <label>Location:</label>
    <textarea name="location" rows="4" class="form-control"><?php echo $row['location']?></textarea>
  </div>

  <div class="form-group">
    <label>Content:</label>
    <textarea name="content" rows="4" class="form-control"><?php echo $row['content']?></textarea>
  </div>

  <center>
    <button type="submit" class="btn btn-success" name="button">Update</button>
  </center>

</form>

</div>
</div>
