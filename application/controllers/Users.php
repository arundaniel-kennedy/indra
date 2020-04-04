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
    $email = $this->input->post('email');

    $result = $this->user_model->check_mail($email);
    if($result){
      $token = bin2hex(random_bytes(50));

      $data = array(
        'token' => $token
      );

      //$result = $this->users_model->update_user_token($data);
      $url = base_url()."reset?token=".$token."&email=".$email."";
      echo $url."<br />";

      $config = Array(
          'protocol' => 'smtp',
          'smtp_host' => 'a2plcpnl0311.prod.iad2.secureserver.net',
          'smtp_port' => 465,
          'smtp_user' => 'info@indratrust.in',
          'smtp_pass' => 'mav*CI@j+URv',
          'mailtype'  => 'html',
          'charset'   => 'iso-8859-1'
      );

      $this->email->initialize($config);
      $this->email->set_newline("\r\n");

      print_r($config);

      $this->email->from('info@indratrust.in', 'IndraTrust');
      $this->email->to($email);
      $this->email->subject('Reset Password');
      $msg = 'Use the Following link to reset your password: '.$url;
      $this->email->message($msg);
      $this->email->send();
      echo $this->email->print_debugger();
      /*if($this->email->send()){
        echo $this->email->print_debugger();
      }else{
        echo $this->email->print_debugger();
      }*/
    }else{
      echo json_encode("error_code_1");
    }

  }

  public function register(){

    $wings='';
    if($this->input->post('greenwing')==1){
      $wings[0] = 1;
    }
    else{
      $wings[0] = 0;
    }
    if($this->input->post('servicewing')==1){
      $wings[1] = 1;
    }
    else{
      $wings[1] = 0;
    }
    if($this->input->post('socialwing')==1){
      $wings[2] = 1;
    }
    else{
      $wings[2] = 0;
    }
    if($this->input->post('techowing')==1){
      $wings[3] = 1;
    }
    else{
      $wings[3] = 0;
    }

    $image = time().$_FILES["img"]['name'];

    $config['upload_path'] = './assets/img/profile/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['file_name'] = $image;
    /*$config['max_size'] = 2000;
    $config['max_width'] = 1500;
    $config['max_height'] = 1500;*/

    $this->load->library('upload', $config);

    if (!$this->upload->do_upload('img')) {
        $_SESSION['error'] = array($this->upload->display_errors());
        redirect('register');
    } else {
        $dir = "/img/profile/";
        $imgdata = $this->upload->data();
        $filename = $dir.$imgdata['file_name'];
    }

    $data = array(
      'name' => $this->input->post('name'),
      'ln' => $this->input->post('ln'),
      'bloodgroup' => $this->input->post('bloodgroup'),
      'age' => $this->input->post('age'),
      'education' => $this->input->post('education'),
      'wings' => $wings,
      'address' => $this->input->post('address'),
      'city' => $this->input->post('city'),
      'state_code' => $this->input->post('state_code'),
      'mobile' => $this->input->post('mobile'),
      'email' => $this->input->post('useremail'),
      'password' => $this->input->post('password'),
      'profileimg' => $filename
    );

    $result = $this->events_model->create_event($data);
    if($result){
      $_SESSION['success'] = "Registered Successfully";
      redirect('login');
    }
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
        $_SESSION['error'] = 'Check your Email/Password';
        $this->load->view('includes/head');
        $this->load->view('includes/nav');
        $this->load->view('pages/login');
        $this->load->view('includes/foot');
      }

  }

  public function api($content = ''){
    if($content === 'checkmail'){

      $email = $this->input->post('email');

      $result = $this->user_model->check_mail($email);
      header('Content-Type: application/json');

      if ($result == TRUE) {
        echo json_encode(TRUE);
      }else{
        echo json_encode(FALSE);
      }
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
