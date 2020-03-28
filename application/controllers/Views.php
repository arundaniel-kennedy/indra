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
}
