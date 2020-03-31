
  <div class="container mt-5 pt-5">
    <div class="jumbotron pt-5">
      <div class="row">
        <h3 class="col-lg-4 col-sm-12">Events & Activities</h3>
        <div class="col-lg-2 col-sm-12 mb-2">
          <a href="<?php echo base_url(); ?>admin/events/add" class="ml-2 btn btn-success">
            Add Events
          </a>
        </div>
        <div class="col-lg-2 col-sm-12">
          <a href="fullevents.php" class="ml-2 btn btn-primary ">
            All Events
          </a>
        </div>
        <div class="col-lg-4 col-sm-12"></div>
      </div>
      <hr>
      <br>
      <div class="contain">
        <table class="table table-striped table-hover">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Title</th>
              <th scope="col">Date</th>
              <th scope="col">Content</th>
              <th scope="col">Image</th>
              <th scope="col">City</th>
              <th scope="col">Location</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php
              if(!empty($events)){
                foreach($events as $row){
            ?>
            <tr>
              <th scope="row"><?php echo $row['title'] ?></th>
              <td><?php echo $row['date'] ?></td>
              <td><?php echo $row['content'] ?></td>
              <td><img src="<?php echo base_url(); ?>assets<?php echo $row['image'] ?>" height="50" width="50"></td>
              <td><?php echo $row['city'] ?></td>
              <td><?php echo $row['location'] ?></td>
              <td>
                <form action="<?php echo base_url(); ?>admin/events/edit" method="post">
                  <input type="text" name="slno" value="<?php echo $row['slno'] ?>" hidden>
                  <button type="submit" class="btn btn-warning"><span class='fa fa-pencil-alt'></span></button>
                </form>
              </td>
              <td>
                <form action="<?php echo base_url(); ?>admin/events/delete" method="post">
                  <input type="text" name="slno" value="<?php echo $row['slno'] ?>" hidden>
                  <button type="submit" class="btn btn-danger"><span class='fa fa-trash'></span></button>
                </form>
              </td>
            </tr>
            <?php
          }
        }else{
          echo "<tr>
          <td>-</td>
          <td>-</td>
          <td>no records here</td>
          <td>-</td>
          <td>-</td>
          <td>-</td>
          <td><span class='fa fa-pencil-alt'></span></td>
          <td><span class='fa fa-trash'></span></td>
          </tr>";
        }
            ?>
          </tbody>
        </table>
      </div>
      <hr>

      <div class="row">
        <h3 class="col-lg-2 col-sm-12">News</h3>
        <div class="col-lg-2 col-sm-12 mb-2">
          <a href="<?php echo base_url(); ?>admin/news/add" class="ml-2 btn btn-success">Add News</a>
        </div>
        <div class="col-lg-2 col-sm-12">
          <a href="fullnews.php" class="ml-2 btn btn-primary">All News</a>
        </div>
      </div>

      <hr> <br>
      <div class="contain">
        <table class="table table-striped table-hover">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Title</th>
              <th scope="col">Date</th>
              <th scope="col">Location</th>
              <th scope="col">Image</th>
              <th scope="col">Visibility</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php

              if(isset($news)){
                foreach($news as $row){
            ?>
            <tr>
              <th scope="row"><?php echo $row['title'] ?></th>
              <td><?php echo $row['date'] ?></td>
              <td><?php echo $row['location'] ?></td>
              <td><img src="<?php echo base_url(); ?>assets<?php echo $row['image'] ?>" height="50" width="50"></td>
              <td>
                <?php if($row['visi']=='1'){ ?>
                  <form action="<?php echo base_url(); ?>admin/news/hide" method="post">
                    <input type="text" name="slno" value="<?php echo $row['slno'] ?>" hidden>
                    <input type="text" name="visi" value="0" hidden>
                    <button type="submit" class="btn btn-success"><span class='fa fa-check'></span></button>
                  </form>
                <?php }else{ ?>
                  <form action="<?php echo base_url(); ?>admin/news/hide" method="post">
                    <input type="text" name="slno" value="<?php echo $row['slno'] ?>" hidden>
                    <input type="text" name="visi" value="1" hidden>
                    <button type="submit" class="btn btn-danger"><span class='fa fa-check'></span></button>
                  </form>
                <?php } ?>
              </td>
              <td>
                <form action="<?php echo base_url(); ?>admin/news/edit" method="post">
                  <input type="text" name="slno" value="<?php echo $row['slno'] ?>" hidden>
                  <button type="submit" class="btn btn-warning"><span class='fa fa-pencil-alt'></span></button>
                </form>
              </td>
              <td>
                <form action="<?php echo base_url(); ?>admin/news/delete" method="post">
                  <input type="text" name="slno" value="<?php echo $row['slno'] ?>" hidden>
                  <button type="submit" class="btn btn-danger"><span class='fa fa-trash'></span></button>
                </form>
              </td>
            </tr>
            <?php
          }
        }else{
          echo "<tr>
          <td>-</td>
          <td>-</td>
          <td>no records here</td>
          <td>-</td>
          <td><span class='fa fa-check'></span></td>
          <td><span class='fa fa-pencil-alt'></span></td>
          <td><span class='fa fa-trash'></span></td>
          </tr>";
        }
            ?>
          </tbody>
        </table>
      </div>
      <hr>

      <div class="row">
        <h3 class="col-lg-2 col-sm-12">Gallery</h3>
        <div class="col-lg-3 col-sm-12 mb-2">
          <a href="<?php echo base_url(); ?>admin/gallery/add" class="ml-2 btn btn-success">Add Images</a>
        </div>
        <div class="col-lg-3 col-sm-12">
          <a href="<?php echo base_url(); ?>admin/gallery/fullgallery" class="ml-2 btn btn-primary">All Images</a>
        </div>
      </div>

      <hr> <br>
      <div class="contain">
        <table class="table table-striped table-hover">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Top Image</th>
              <th scope="col">Sub Image</th>
              <th scope="col">Edit</th>
              <th scope="col">Delete</th>
            </tr>
          </thead>
          <tbody>
            <?php

              if(isset($gallery)){
                foreach($gallery as $row){
            ?>
            <tr>
              <th scope="row">
                <img src="<?php echo base_url(); ?>assets<?php echo $row['topimg'] ?>" height="100" width="100">
              </th>
              <td>
                <?php
                  $images = explode(',',$row['img']);

                  foreach($images as $image ) {
                ?>
                  <img src="<?php echo base_url(); ?>assets<?php echo $image ?>" height="100" width="100">
                <?php
                  }
                ?>
              </td>
              <td>
                <form action="<?php echo base_url(); ?>admin/gallery/edit" method="post">
                  <input type="text" name="slno" value="<?php echo $row['slno'] ?>" hidden>
                  <button type="submit" class="btn btn-warning"><span class='fa fa-pencil-alt'></span></button>
                </form>
              </td>
              <td>
                <form action="<?php echo base_url(); ?>admin/gallery/delete" method="post">
                  <input type="text" name="slno" value="<?php echo $row['slno'] ?>" hidden>
                  <button type="submit" class="btn btn-danger"><span class='fa fa-trash'></span></button>
                </form>
              </td>
            </tr>
            <?php
          }
        }else{
          echo "<tr>
          <td>-</td>
          <td>no records here</td>
          <td><span class='fa fa-pencil-alt'></span></td>
          <td><span class='fa fa-trash'></span></td>
          </tr>";
        }
            ?>
          </tbody>
        </table>
      </div>
      <hr>
    </div>
  </div>
<br><br><br>
