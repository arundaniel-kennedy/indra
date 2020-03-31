<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
  public function index()
  {
    $data['events']  = $this->events_model->get_all();
    $data['news']    = $this->news_model->get_al();
    $data['gallery'] = $this->gallery_model->get_all();

    $this->load->view('includes/head');
    $this->load->view('includes/nav');
    $this->load->view('admin/index',$data);
    $this->load->view('includes/foot');
  }

  public function events($operation = ''){
    if ($operation === 'add') {
      $this->load->view('includes/head');
      $this->load->view('includes/nav');
      $this->load->view('admin/events/add');
      $this->load->view('includes/foot');
    }

    if ($operation === 'edit') {
      $slno = $this->input->post('slno');
      $data['row'] = $this->events_model->get_one($slno);

      $this->load->view('includes/head');
      $this->load->view('includes/nav');
      $this->load->view('admin/events/edit',$data);
      $this->load->view('includes/foot');
    }

    if($operation === 'store'){
      $image = time().$_FILES["img"]['name'];

      $config['upload_path'] = './assets/img/events/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['file_name'] = $image;
      /*$config['max_size'] = 2000;
      $config['max_width'] = 1500;
      $config['max_height'] = 1500;*/

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('img')) {
          $_SESSION['error'] = array($this->upload->display_errors());
          redirect('admin/events/add');
      } else {
          $dir = "/img/events/";
          $imgdata = $this->upload->data();
          $filename = $dir.$imgdata['file_name'];
          $data = array(
            'title'    =>  $this->input->post('title'),
            'date'     =>  $this->input->post('date'),
            'content'  =>  $this->input->post('content'),
            'image'    =>  $filename,
            'city'     =>  $this->input->post('city'),
            'location' =>  $this->input->post('location'),

          );
          $result = $this->events_model->create_event($data);
          if($result){
            $_SESSION['success'] = "Event successfully added";
            redirect('homer');
          }
      }
      redirect('admin/events/add');
    }

    if($operation === 'update'){
      $slno = $this->input->post('slno');

      if(basename($_FILES["img"]['name']) != "" ){

        $img = $this->events_model->get_image($slno);

        if(!unlink(FCPATH."assets".$img["image"])){
          $_SESSION['error'] = array("error");
          redirect('admin/events/edit',$slno);
        }

        $image = time().$_FILES["img"]['name'];

        $config['upload_path'] = './assets/img/events/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name'] = $image;
        /*$config['max_size'] = 2000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;*/

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('img')) {
            $_SESSION['error'] = array($this->upload->display_errors());
            redirect('admin/events/edit');
        } else {
            $dir = "/img/events/";
            $imgdata = $this->upload->data();

            $filename = $dir.$imgdata['file_name'];
            $data = array(
              'image'    =>  $filename
            );
            $result = $this->events_model->update_event($data,$slno);
            if($result){
              $_SESSION['success'] = "Event successfully updated";
              redirect('homer');
            }
        }
      }else{
        $data = array(
          'title'    =>  $this->input->post('title'),
          'date'     =>  $this->input->post('date'),
          'content'  =>  $this->input->post('content'),
          'city'     =>  $this->input->post('city'),
          'location' =>  $this->input->post('location'),

        );
        $result = $this->events_model->update_event($data,$slno);
        if($result){
          $_SESSION['success'] = "Event successfully updated";
          redirect('homer');
        }
      }

    }

    if($operation === 'delete'){
      $slno = $this->input->post('slno');
      $img = $this->events_model->get_image($slno);

      if(!unlink(FCPATH."assets".$img["image"])){
        $_SESSION['error'] = array("Couldn't unlink");
        redirect('homer');
      }

      $result = $this->events_model->delete_event($slno);
      if($result){
        $_SESSION['success'] = "Event successfully Deleted";
      }
      redirect('homer');
    }

  }

  public function news($operation = ''){
    if ($operation === 'add') {
      $this->load->view('includes/head');
      $this->load->view('includes/nav');
      $this->load->view('admin/news/add');
      $this->load->view('includes/foot');
    }

    if ($operation === 'edit') {
      $slno = $this->input->post('slno');
      $data['row'] = $this->news_model->get_one($slno);

      $this->load->view('includes/head');
      $this->load->view('includes/nav');
      $this->load->view('admin/news/edit',$data);
      $this->load->view('includes/foot');
    }

    if($operation === 'store'){
      $image = time().$_FILES["img"]['name'];

      $config['upload_path'] = './assets/img/news/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['file_name'] = $image;
      /*$config['max_size'] = 2000;
      $config['max_width'] = 1500;
      $config['max_height'] = 1500;*/

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('img')) {
          $_SESSION['error'] = array($this->upload->display_errors());
          redirect('admin/news/add');
      } else {
          $dir = "/img/news/";
          $imgdata = $this->upload->data();
          $filename = $dir.$imgdata['file_name'];
          $data = array(
            'title'    =>  $this->input->post('title'),
            'date'     =>  $this->input->post('date'),
            'image'    =>  $filename,
            'location' =>  $this->input->post('location'),

          );
          $result = $this->news_model->create_news($data);
          if($result){
            $_SESSION['success'] = "News successfully added";
            redirect('homer');
          }
      }
      redirect('admin/news/add');
    }

    if($operation === 'update'){
      $slno = $this->input->post('slno');

      if(basename($_FILES["img"]['name']) != "" ){

        $img = $this->news_model->get_image($slno);

        if(!unlink(FCPATH."assets".$img["image"])){
          $_SESSION['error'] = array("error");
          redirect('homer');
        }

        $image = time().$_FILES["img"]['name'];

        $config['upload_path'] = './assets/img/news/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name'] = $image;
        /*$config['max_size'] = 2000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;*/

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('img')) {
            $_SESSION['error'] = array($this->upload->display_errors());
            redirect('homer');
        } else {
            $dir = "/img/news/";
            $imgdata = $this->upload->data();

            $filename = $dir.$imgdata['file_name'];
            $data = array(
              'image'    =>  $filename
            );
            $result = $this->news_model->update_news($data,$slno);
            if($result){
              $_SESSION['success'] = "News successfully updated";
              redirect('homer');
            }
        }
      }else{
        $data = array(
          'title'    =>  $this->input->post('title'),
          'date'     =>  $this->input->post('date'),
          'location' =>  $this->input->post('location'),

        );
        $result = $this->news_model->update_news($data,$slno);
        if($result){
          $_SESSION['success'] = "News successfully updated";
          redirect('homer');
        }
      }

    }

    if($operation === 'delete'){
      $slno = $this->input->post('slno');
      $img = $this->news_model->get_image($slno);

      if(!unlink(FCPATH."assets".$img["image"])){
        $_SESSION['error'] = array("Couldn't unlink");
        redirect('homer');
      }

      $result = $this->news_model->delete_news($slno);
      if($result){
        $_SESSION['success'] = "Event successfully Deleted";
      }
      redirect('homer');
    }

    if($operation === 'hide'){
      $slno = $this->input->post('slno');
      $data = array(
        'visi' => $this->input->post('visi'),
      );
      $result = $this->news_model->update_news($data,$slno);
      if($result){
        $_SESSION['success'] = "News successfully updated";
        redirect('homer');
      }
    }

  }

  public function gallery($operation = ''){
    if ($operation === 'add') {
      $this->load->view('includes/head');
      $this->load->view('includes/nav');
      $this->load->view('admin/gallery/add');
      $this->load->view('includes/foot');
    }

    if ($operation === 'edit') {
      $slno = $this->input->post('slno');
      $data['row'] = $this->gallery_model->get_one($slno);

      $this->load->view('includes/head');
      $this->load->view('includes/nav');
      $this->load->view('admin/gallery/edit',$data);
      $this->load->view('includes/foot');
    }

    if($operation === 'store'){
      $flag = 0;
      $image = time().$_FILES["topimg"]['name'];

      $config['upload_path'] = './assets/img/gallery/';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['file_name'] = $image;
      /*$config['max_size'] = 2000;
      $config['max_width'] = 1500;
      $config['max_height'] = 1500;*/

      $this->load->library('upload', $config);

      if (!$this->upload->do_upload('topimg')) {
          $_SESSION['error'] = array($this->upload->display_errors());
          $flag++;
      }else{
        $imgdata = $this->upload->data();
      }

      foreach ($_FILES['img']['name'] as $key => $image)
      {
         $_FILES['images[]']['name']= $_FILES['img']['name'][$key];
         $_FILES['images[]']['type']= $_FILES['img']['type'][$key];
         $_FILES['images[]']['tmp_name']= $_FILES['img']['tmp_name'][$key];
         $_FILES['images[]']['error']= $_FILES['img']['error'][$key];
         $_FILES['images[]']['size']= $_FILES['img']['size'][$key];

         $config['file_name'] = time().$_FILES['images[]']['name'];

         $this->upload->initialize($config);
         if (!$this->upload->do_upload('images[]')) {
             $_SESSION['error'] = array($this->upload->display_errors());
             $flag++;
         }
      }

      if(!$flag){
          $dir = "/img/gallery/";
          $filename = $dir.$imgdata['file_name'];

          $img = '';
          foreach ($_FILES['img']['name'] as $nam) {
            $img = $img.",".$dir.time().$nam;
          }
          $img = substr($img,1);

          $data = array(
            'topimg'    =>  $filename,
            'img'     =>  $img
          );

          $result = $this->gallery_model->create_gallery($data);
          if($result){
            $_SESSION['success'] = "Gallery successfully added";
            redirect('homer');
          }
      }
      redirect('admin/gallery/add');
    }

    if($operation === 'update'){
      $slno = $this->input->post('slno');

      if(basename($_FILES["topimg"]['name']) != "" ){

        $img = $this->gallery_model->get_image($slno);

        if(!unlink(FCPATH."assets".$img["image"])){
          $_SESSION['error'] = array("error");
          redirect('admin/gallery/edit',$slno);
        }

        $image = time().$_FILES["topimg"]['name'];

        $config['upload_path'] = './assets/img/gallery/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name'] = $image;
        /*$config['max_size'] = 2000;
        $config['max_width'] = 1500;
        $config['max_height'] = 1500;*/

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('img')) {
            $_SESSION['error'] = array($this->upload->display_errors());
            redirect('admin/events/edit');
        } else {
            $dir = "/img/gallery/";
            $imgdata = $this->upload->data();

            $filename = $dir.$imgdata['file_name'];
            $data = array(
              'image'    =>  $filename
            );
            $result = $this->events_model->update_event($data,$slno);
            if($result){
              $_SESSION['success'] = "Event successfully updated";
              redirect('homer');
            }
        }
      }

    }

    if($operation === 'delete'){
      $slno = $this->input->post('slno');
      $img = $this->events_model->get_image($slno);

      if(!unlink(FCPATH."assets".$img["image"])){
        $_SESSION['error'] = array("Couldn't unlink");
        redirect('homer');
      }

      $result = $this->events_model->delete_event($slno);
      if($result){
        $_SESSION['success'] = "Event successfully Deleted";
      }
      redirect('homer');
    }

  }
}
