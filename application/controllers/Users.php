<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
  public function view()
  {
    if(!$this->session->userdata['logged_in']['admin']){
      $this->load->view('includes/head');
      $this->load->view('includes/nav');
      $this->load->view('user/index');
      $this->load->view('includes/foot');
    }else{
      redirect('homer');
    }
  }

  public function generate(){
    $id = $this->session->userdata['logged_in']['id'];
    $data['user'] = $this->user_model->get_user($id);

    $this->load->view('includes/head');
    $this->load->view('includes/nav');
    $this->load->view('user/generate',$data);
    $this->load->view('includes/foot');
  }

  public function login()
  {

      $data = array(
        'email' => $this->input->post('useremail'),
        'password' => $this->input->post('password')
      );

      $result = $this->user_model->check_user($data);
      if ($result == TRUE) {

        $email = $this->input->post('useremail');
        $result = $this->user_model->user_info($email);
        if ($result != false) {
          $session_data = array(
            'id'    => $result[0]['id'],
            'name'  => $result[0]['name'],
            'admin' => $result[0]['admin']
          );
          $this->session->set_userdata('logged_in', $session_data);
          redirect('users/view');
        }

      } else {
        $this->load->view('includes/head');
        $this->load->view('includes/nav');
        $this->load->view('pages/login');
        $this->load->view('includes/foot');
      }

  }

  public function logout()
  {
    if(isset($this->session->userdata['logged_in'])){
      $this->session->unset_userdata('logged_in');
    }
    redirect('views/index');
  }
}
