<div class="container">
  <div class="jumbotron toppush3">
    <div class="row">
      <h3 class="col-lg-2 col-sm-12">Gallery</h3>
      <div class="col-lg-3 col-sm-12 mb-2">
        <a href="<?php echo base_url(); ?>new_gallery/add" class="ml-2 btn btn-success">Add Images</a>
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

            if(!empty($gallery)){
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
              <form action="<?php echo base_url(); ?>alter_gallery/edit" method="post">
                <input type="text" name="slno" value="<?php echo $row['slno'] ?>" hidden>
                <button type="submit" class="btn btn-warning"><span class='fa fa-pencil-alt'></span></button>
              </form>
            </td>
            <td>
              <form action="<?php echo base_url(); ?>alter_gallery/delete" method="post">
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
    <br>
    <nav aria-label="">
      <ul class="pagination justify-content-end">
          <?php for($page=1;$page<=$num_pages;$page++){
                  if($page == $cur_page){
          ?>
          <li class="page-item active" aria-current="page">
            <a class="page-link" herf="<?php echo base_url(); ?>view_gallery/<?php echo $page ?>">
              <?php echo $page ?>
            </a>
          </li>
          <?php }else{ ?>
          <li class="page-item">
            <a class="page-link bg-dark text-light" href="<?php echo base_url(); ?>view_gallery/<?php echo $page ?>">
              <?php echo $page ?>
            </a>
          </li>
        <?php }} ?>
      </ul>
    </nav>
  </div>
</div>
