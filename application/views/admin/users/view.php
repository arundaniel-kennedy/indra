<div class="col-sm-12 col-lg-9">
  <div class="jumbotron box2" style="background-color:white">
    <h3>Users</h3>
    <hr>
    <div class="contain">
      <table class="table table-striped table-hover">
        <thead class="thead-dark">
          <tr>
            <th scope="col" class="text-nowrap">First Name</th>
            <th scope="col" class="text-nowrap">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Admin</th>
            <th scope="col">Wings</th>
            <th scope="col">Age</th>
            <th scope="col">City</th>
            <th scope="col" class="text-nowrap">State</th>
          </tr>
        </thead>
        <tbody>
          <?php
            if(!empty($users)){
              foreach($users as $row){
          ?>
          <tr>
            <th scope="row" class="text-nowrap"><?php echo $row['name'] ?></th>
            <td class="text-nowrap"><?php echo $row['ln'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['admin'] ?></td>
            <td class="text-nowrap"><?php
                    if($row['wings'][0]==1){
                      echo "Green Wing<br />";
                    }
                    if($row['wings'][1]==1){
                      echo "Service Wing<br />";
                    }
                    if($row['wings'][2]==1){
                      echo "Social Wing<br />";
                    }
                    if($row['wings'][3]==1){
                      echo "Techno Wing<br />";
                    }
            ?></td>
            <td><?php echo $row['age'] ?></td>
            <td><?php echo $row['city'] ?></td>
            <td><?php echo $row['state_code'] ?></td>
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
</div>
</div>
