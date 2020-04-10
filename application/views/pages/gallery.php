
<section class="page-section mt-5" id="view">
  <div class="container" data-aos="fade-in" data-aos-duration="1000">
    <div class="row">
      <div class="col-lg-12 text-center mb-5">
        <h2 class="section-heading text-uppercase">Gallery</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">

        <div id="mdb-lightbox-ui"></div>

        <div class="mdb-lightbox no-margin">
          <div class="row accordion" id="accordionExample">
            <?php
            $i=0;
            if(!empty($gallery)){
              foreach($gallery as $row){
            ?>

            <figure class="col-lg-4 col-sm-12 col-md-6" data-aos="fade-in" data-aos-duration="1300">
              <a onclick="sho(<?php echo $row['slno'] ?>,<?php echo $i ?>)" style="cursor:pointer">
                <img alt="<?php echo $row['topimg']?>" src="<?php echo base_url(); ?>assets<?php echo $row['topimg']?>" class="w-100">
              </a>
            </figure>
            <div class="collapse bg-gray mb-5 container-fluid" id="collapse<?php echo $i?>" data-parent="#accordionExample" data-aos="fade-in" data-aos-duration="1000">
              <div class="row" id="img<?php echo $i ?>">

              </div>
            </div>

            <?php
                $i++;
                }
              }else{
                echo "<span class='h3 text-center'>No Images Here Yet!</span>";
              }
            ?>
          </div>
        </div>
      </div>
    </div>

    <nav aria-label="">
      <ul class="pagination justify-content-end">
          <?php for($page=1;$page<=$num_pages;$page++){
                  if($page == $cur_page){
          ?>
          <li class="page-item active" aria-current="page">
            <a class="page-link bg-dark text-light" herf="<?php echo base_url(); ?>gallery/<?php echo $page ?>">
              <?php echo $page ?>
            </a>
          </li>
          <?php }else{ ?>
          <li class="page-item">
            <a class="page-link bg-dark text-light" href="<?php echo base_url(); ?>gallery/<?php echo $page ?>">
              <?php echo $page ?>
            </a>
          </li>
        <?php }} ?>
      </ul>
    </nav>
</div>
</section>

<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="" class="w-100" alt="" id="content">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<script>
function sho(slno,i) {
  if($( "#img"+i ).is( ":visible" )){
    $("#collapse"+i).collapse('hide');
  }else{
    $.ajax({
     url:"<?php echo base_url(); ?>views/api/showgallery",
     method:"POST",
     data:{slno:slno},
     success:function(data)
     {
       document.getElementById('img'+i).innerHTML = '';
       var img = data.split(",");
       var div = "";
       for (var j = 0; j < img.length; j++) {
         document.getElementById('img'+i).innerHTML +="<div class=\"col-lg-3 col-sm-12 col-md-6 p-4\"><a style=\"cursor:pointer\" data-toggle=\"modal\" href=\"#modal\" onclick=\"show('<?php echo base_url(); ?>assets"+img[j]+"');\"><img src=\"<?php echo base_url(); ?>assets"+img[j]+"\" class=\"img-fluid\" ></a></div>"
       }
       $("#collapse"+i).collapse('show');
     }
    });
  }
}
function show(image) {
  //alert(image);
  //$('#content').after(image);

  document.getElementById('content').src = image;
}
</script>
