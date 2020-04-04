<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Views extends CI_Controller {
  public function index()
  {
      if(!file_exists(APPPATH.'views/index.php')){
        show_404();
      }

      $data['news'] = $this->news_model->get_all();
      $data['events'] = $this->events_model->get_all();

      $this->load->view('includes/head');
      $this->load->view('includes/nav');
      $this->load->view('index',$data);
      $this->load->view('includes/foot');
  }

  public function register()
  {
    $data['states'] = $this->register_model->get_states();

    $this->load->view('includes/head');
    $this->load->view('includes/nav');
    $this->load->view('pages/register',$data);
    $this->load->view('includes/foot');
  }

  public function events($page = '1'){

    $num_rows = $this->events_model->get_num();
    $num_of_res = 20;
    $num_pages = ceil($num_rows/$num_of_res);

    $first_res = ($page-1)*$num_of_res;

    $data['events'] = $this->events_model->get_by_num($first_res,$num_of_res);
    $data['num_pages'] = $num_pages;
    $data['cur_page'] = $page;

    $this->load->view('includes/head');
    $this->load->view('includes/nav');
    $this->load->view('pages/events',$data);
    $this->load->view('includes/foot');
  }

  public function gallery($page = '1'){

    $num_rows = $this->gallery_model->get_num();
    $num_of_res = 20;
    $num_pages = ceil($num_rows/$num_of_res);

    $first_res = ($page-1)*$num_of_res;

    $data['gallery'] = $this->gallery_model->get_by_num($first_res,$num_of_res);
    $data['num_pages'] = $num_pages;
    $data['cur_page'] = $page;

    $this->load->view('includes/head');
    $this->load->view('includes/nav');
    $this->load->view('pages/gallery',$data);
    $this->load->view('includes/foot');
  }

  public function view($page = '')
  {
    if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
      show_404();
    }

    $this->load->view('includes/head');
    $this->load->view('includes/nav');
    $this->load->view('pages/'.$page);
    $this->load->view('includes/foot');
  }

  public function api($content = '')
  {
    if($content === 'showevent'){
      $slno = $this->input->post("slno");
      $data['event'] = $this->events_model->get_one($slno);
      header('Content-Type: application/json');
      echo json_encode($data['event']);
    }

    if($content === 'shownews'){
      $slno = $this->input->post("slno");
      $data['news'] = $this->news_model->get_one($slno);
      header('Content-Type: application/json');
      echo json_encode($data['news']);
    }

    if($content === 'showgallery'){
      $slno = $this->input->post("slno");
      $data['gallery'] = $this->gallery_model->get_one($slno);
      header('Content-Type: application/json');
      echo json_encode($data['gallery']["img"]);
    }

    if($content === 'getcities'){
      $state = $this->input->post("state");
      $data['cities'] = $this->register_model->get_cities($state);
      header('Content-Type: application/json');
      echo json_encode($data['cities']);
    }
  }
}
