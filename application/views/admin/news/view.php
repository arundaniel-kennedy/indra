<div class="container">
  <div class="jumbotron toppush3">
    <a href="<?php echo base_url(); ?>homer" class="btn btn-outline-dark">Back to home</a>
    <br><br>
    <div class="row">
      <h3 class="col-lg-2 col-sm-12">News</h3>
      <div class="col-lg-2 col-sm-12 mb-2">
        <a href="<?php echo base_url(); ?>new_news/add" class="ml-2 btn btn-success">Add News</a>
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

            if(!empty($news)){
              foreach($news as $row){
          ?>
          <tr>
            <th scope="row"><?php echo $row['title'] ?></th>
            <td><?php echo $row['date'] ?></td>
            <td><?php echo $row['location'] ?></td>
            <td><img src="<?php echo base_url(); ?>assets<?php echo $row['image'] ?>" height="50" width="50"></td>
            <td>
              <?php if($row['visi']=='1'){ ?>
                <form action="<?php echo base_url(); ?>alter_news/hide" method="post">
                  <input type="text" name="slno" value="<?php echo $row['slno'] ?>" hidden>
                  <input type="text" name="visi" value="0" hidden>
                  <button type="submit" class="btn btn-success"><span class='fa fa-check'></span></button>
                </form>
              <?php }else{ ?>
                <form action="<?php echo base_url(); ?>alter_news/hide" method="post">
                  <input type="text" name="slno" value="<?php echo $row['slno'] ?>" hidden>
                  <input type="text" name="visi" value="1" hidden>
                  <button type="submit" class="btn btn-danger"><span class='fa fa-check'></span></button>
                </form>
              <?php } ?>
            </td>
            <td>
              <form action="<?php echo base_url(); ?>alter_news/edit" method="post">
                <input type="text" name="slno" value="<?php echo $row['slno'] ?>" hidden>
                <button type="submit" class="btn btn-warning"><span class='fa fa-pencil-alt'></span></button>
              </form>
            </td>
            <td>
              <form action="<?php echo base_url(); ?>alter_news/delete" method="post">
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
    <br>
    <nav aria-label="">
      <ul class="pagination justify-content-end">
          <?php for($page=1;$page<=$num_pages;$page++){
                  if($page == $cur_page){
          ?>
          <li class="page-item active" aria-current="page">
            <a class="page-link" herf="<?php echo base_url(); ?>view_news/<?php echo $page ?>">
              <?php echo $page ?>
            </a>
          </li>
          <?php }else{ ?>
          <li class="page-item">
            <a class="page-link bg-dark text-light" href="<?php echo base_url(); ?>view_news/<?php echo $page ?>">
              <?php echo $page ?>
            </a>
          </li>
        <?php }} ?>
      </ul>
    </nav>
  </div>
</div>
