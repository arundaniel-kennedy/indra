<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function index()
  {
    if(isset($this->session->userdata['logged_in'])){
      if($this->session->userdata['logged_in']['admin']){
        $this->load->view('includes/head');
        $this->load->view('includes/nav');
        $this->load->view('admin/nav');
        $this->load->view('admin/index');
        $this->load->view('includes/foot');
      }else{
        redirect('home');
      }
    }
    else{
      redirect('login');
    }
  }

  public function view_events($page = '1'){
    //viewing events
    if(isset($this->session->userdata['logged_in'])){
      if($this->session->userdata['logged_in']['admin']){
        $num_rows = $this->events_model->get_num();
        $num_of_res = 20;
        $num_pages = ceil($num_rows/$num_of_res);

        $first_res = ($page-1)*$num_of_res;

        $data['events'] = $this->events_model->get_by_num($first_res,$num_of_res);
        $data['num_pages'] = $num_pages;
        $data['cur_page'] = $page;

        $this->load->view('includes/head');
        $this->load->view('includes/nav');
        $this->load->view('admin/nav');
        $this->load->view('admin/events/view',$data);
        $this->load->view('includes/foot');
      }else{
        redirect('home');
      }
    }
    else{
      redirect('login');
    }
  }

  public function new_event($operation = ''){
    //create events
    if(isset($this->session->userdata['logged_in'])){
      if($this->session->userdata['logged_in']['admin']){
        if ($operation === 'add') {
          $this->load->view('includes/head');
          $this->load->view('includes/nav');
          $this->load->view('admin/events/add');
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
              redirect('new_event/add');
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
                redirect('view_events');
              }
          }
          redirect('new_event/add');
        }
      }else{
        redirect('home');
      }
    }
    else{
      redirect('login');
    }

    //end of create events
  }

  public function alter_event($operation = ''){
    //edit events
    if(isset($this->session->userdata['logged_in'])){
      if($this->session->userdata['logged_in']['admin']){
        if ($operation === 'edit') {
          $slno = $this->input->post('slno');
          $data['row'] = $this->events_model->get_one($slno);

          $this->load->view('includes/head');
          $this->load->view('includes/nav');
          $this->load->view('admin/events/edit',$data);
          $this->load->view('includes/foot');
        }

        if($operation === 'update'){
          $slno = $this->input->post('slno');

          if(basename($_FILES["img"]['name']) != "" ){

            $img = $this->events_model->get_image($slno);

            if(!unlink(FCPATH."assets".$img["image"])){
              $_SESSION['error'] = array("error");
              redirect('alter_event/edit',$slno);
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
                redirect('alter_event/edit',$slno);
            } else {
                $dir = "/img/events/";
                $imgdata = $this->upload->data();

                $filename = $dir.$imgdata['file_name'];
                $data = array(
                  'image'    =>  $filename
                );
                $result = $this->events_model->update_event($data,$slno);
            }
          }
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
            redirect('view_events');
          }
        }

        if($operation === 'delete'){
          $slno = $this->input->post('slno');
          $img = $this->events_model->get_image($slno);

          if(!unlink(FCPATH."assets".$img["image"])){
            $_SESSION['error'] = array("Couldn't unlink");
            redirect('view_events');
          }

          $result = $this->events_model->delete_event($slno);
          if($result){
            $_SESSION['success'] = "Event successfully Deleted";
          }
          redirect('view_events');
        }
      }else{
        redirect('home');
      }
    }
    else{
      redirect('login');
    }
    //end of edit events
  }

  public function view_news($page = '1'){
    // view all news
    if(isset($this->session->userdata['logged_in'])){
      if($this->session->userdata['logged_in']['admin']){
        $num_rows = $this->news_model->get_num();

        $num_of_res = 20;
        $num_pages = ceil($num_rows/$num_of_res);

        $first_res = ($page-1)*$num_of_res;

        $data['news'] = $this->news_model->get_by_num($first_res,$num_of_res);
        $data['num_pages'] = $num_pages;
        $data['cur_page'] = $page;

        $this->load->view('includes/head');
        $this->load->view('includes/nav');
        $this->load->view('admin/nav');
        $this->load->view('admin/news/view',$data);
        $this->load->view('includes/foot');
      }else{
        redirect('home');
      }
    }
    else{
      redirect('login');
    }
  }

  public function new_news($operation = ''){
    //create news
    if(isset($this->session->userdata['logged_in'])){
      if($this->session->userdata['logged_in']['admin']){
        if ($operation === 'add') {
          $this->load->view('includes/head');
          $this->load->view('includes/nav');
          $this->load->view('admin/news/add');
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
              redirect('new_news/add');
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
                redirect('view_news');
              }
          }
          redirect('new_news/add');
        }
      }else{
        redirect('home');
      }
    }
    else{
      redirect('login');
    }
    //end of create news
  }

  public function alter_news($operation = ''){
    //edit news
    if(isset($this->session->userdata['logged_in'])){
      if($this->session->userdata['logged_in']['admin']){
        if ($operation === 'edit') {
          $slno = $this->input->post('slno');
          $data['row'] = $this->news_model->get_one($slno);

          $this->load->view('includes/head');
          $this->load->view('includes/nav');
          $this->load->view('admin/news/edit',$data);
          $this->load->view('includes/foot');
        }

        if($operation === 'update'){
          $slno = $this->input->post('slno');

          if(basename($_FILES["img"]['name']) != "" ){

            $img = $this->news_model->get_image($slno);

            if(!unlink(FCPATH."assets".$img["image"])){
              $_SESSION['error'] = array("error");
              redirect('alter_news/edit',$slno);
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
                redirect('alter_news/edit',$slno);
            } else {
                $dir = "/img/news/";
                $imgdata = $this->upload->data();

                $filename = $dir.$imgdata['file_name'];
                $data = array(
                  'image'    =>  $filename
                );
                $result = $this->news_model->update_news($data,$slno);
            }
          }
          $data = array(
            'title'    =>  $this->input->post('title'),
            'date'     =>  $this->input->post('date'),
            'location' =>  $this->input->post('location'),

          );
          $result = $this->news_model->update_news($data,$slno);
          if($result){
            $_SESSION['success'] = "News successfully updated";
            redirect('view_news');
          }
        }

        if($operation === 'delete'){
          $slno = $this->input->post('slno');
          $img = $this->news_model->get_image($slno);

          if(!unlink(FCPATH."assets".$img["image"])){
            $_SESSION['error'] = array("Couldn't unlink");
            redirect('view_news');
          }

          $result = $this->news_model->delete_news($slno);
          if($result){
            $_SESSION['success'] = "News successfully Deleted";
          }
          redirect('view_news');
        }

        if($operation === 'hide'){
          $slno = $this->input->post('slno');
          $data = array(
            'visi' => $this->input->post('visi'),
          );
          $result = $this->news_model->update_news($data,$slno);
          if($result){
            $_SESSION['success'] = "News updated";
            redirect('view_news');
          }
        }
      }else{
        redirect('home');
      }
    }
    else{
      redirect('login');
    }
    //end of edit news
  }

  public function view_gallery($page = '1'){
    // view all news
    if(isset($this->session->userdata['logged_in'])){
      if($this->session->userdata['logged_in']['admin']){
        $num_rows = $this->gallery_model->get_num();

        $num_of_res = 20;
        $num_pages = ceil($num_rows/$num_of_res);

        $first_res = ($page-1)*$num_of_res;

        $data['gallery'] = $this->gallery_model->get_by_num($first_res,$num_of_res);
        $data['num_pages'] = $num_pages;
        $data['cur_page'] = $page;

        $this->load->view('includes/head');
        $this->load->view('includes/nav');
        $this->load->view('admin/nav');
        $this->load->view('admin/gallery/view',$data);
        $this->load->view('includes/foot');
      }else{
        redirect('home');
      }
    }
    else{
      redirect('login');
    }
  }

  public function new_gallery($operation = ''){
    //create gallery
    if(isset($this->session->userdata['logged_in'])){
      if($this->session->userdata['logged_in']['admin']){
        if ($operation === 'add') {
          $this->load->view('includes/head');
          $this->load->view('includes/nav');
          $this->load->view('admin/gallery/add');
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
                redirect('view_gallery');
              }
          }
          redirect('new_gallery/add');
        }
      }else{
        redirect('home');
      }
    }
    else{
      redirect('login');
    }
    //end of create gallery
  }

  public function alter_gallery($operation = ''){
    //edit gallery
    if(isset($this->session->userdata['logged_in'])){
      if($this->session->userdata['logged_in']['admin']){
        if ($operation === 'edit') {
          $slno = $this->input->post('slno');
          $data['row'] = $this->gallery_model->get_one($slno);

          $this->load->view('includes/head');
          $this->load->view('includes/nav');
          $this->load->view('admin/gallery/edit',$data);
          $this->load->view('includes/foot');
        }

        if($operation === 'update'){
          $slno = $this->input->post('slno');

          if(basename($_FILES["topimg"]['name']) != "" ){

            $img = $this->gallery_model->get_top_image($slno);

            if(!unlink(FCPATH."assets".$img["topimg"])){
              $_SESSION['error'] = "Can't unlink image";
              redirect('view_gallery');
            }

            $image = time().$_FILES["topimg"]['name'];

            $config['upload_path'] = './assets/img/gallery/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['file_name'] = $image;
            /*$config['max_size'] = 2000;
            $config['max_width'] = 1500;
            $config['max_height'] = 1500;*/

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('topimg')) {
                $_SESSION['error'] = $this->upload->display_errors();
                redirect('alter_gallery/edit',$snlo);
            } else {
                $dir = "/img/gallery/";
                $imgdata = $this->upload->data();

                $filename = $dir.$imgdata['file_name'];
                $data = array(
                  'topimg'    =>  $filename
                );
                $result = $this->gallery_model->update_gallery($data,$slno);
                if($result){
                  $_SESSION['success'] = "Gallery successfully updated";
                }
            }
          }
          if(basename($_FILES["img"]['name'][0]) != "" ){

            $img = $this->gallery_model->get_image($slno);
            $images = explode(',',$img['img']);

            foreach($images as $image ) {
              if(!unlink(FCPATH."assets".$image)){
                $_SESSION['error'] = "Couldn't unlink image";
                redirect('view_gallery');
              }
            }

            $config['upload_path'] = './assets/img/gallery/';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            /*$config['max_size'] = 2000;
            $config['max_width'] = 1500;
            $config['max_height'] = 1500;*/

            $this->load->library('upload', $config);

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

              $img = '';
              foreach ($_FILES['img']['name'] as $nam) {
                $img = $img.",".$dir.time().$nam;
              }
              $img = substr($img,1);

              $data = array(
                'img'    =>  $img
              );

              $result = $this->gallery_model->update_gallery($data,$slno);
              if($result){
                $_SESSION['success'] = "Gallery successfully updated";
              }
            }
            redirect('view_gallery');
          }

        }

        if($operation === 'delete'){
          $slno = $this->input->post('slno');
          $image = $this->gallery_model->get_top_image($slno);

          if(!unlink(FCPATH."assets".$image["topimg"])){
            $_SESSION['error'] = "Couldn't unlink image";
            redirect('view_gallery');
          }

          $img = $this->gallery_model->get_image($slno);
          $images = explode(',',$img['img']);

          foreach($images as $image ) {
            if(!unlink(FCPATH."assets".$image)){
              $_SESSION['error'] = "Couldn't unlink image";
              redirect('view_gallery');
            }
          }

          $result = $this->gallery_model->delete_gallery($slno);
          if($result){
            $_SESSION['success'] = "Gallery successfully Deleted";
          }
          redirect('view_gallery');
        }
      }else{
        redirect('home');
      }
    }
    else{
      redirect('login');
    }
    //end of edit gallery
  }

  public function view_users($page = '1'){
    //viewing events
    if(isset($this->session->userdata['logged_in'])){
      if($this->session->userdata['logged_in']['admin']){
        $num_rows = $this->user_model->get_num();
        $num_of_res = 20;
        $num_pages = ceil($num_rows/$num_of_res);

        $first_res = ($page-1)*$num_of_res;

        $data['users'] = $this->user_model->get_by_num($first_res,$num_of_res);
        $data['num_pages'] = $num_pages;
        $data['cur_page'] = $page;

        $this->load->view('includes/head');
        $this->load->view('includes/nav');
        $this->load->view('admin/nav');
        $this->load->view('admin/users/view',$data);
        $this->load->view('includes/foot');
      }else{
        redirect('home');
      }
    }
    else{
      redirect('login');
    }
  }

}
