<?php if(! defined('BASEPATH'))exit('No direct script access allowed');
class Mail extends CI_Controller{
 function __construct()
  {
  parent::__construct();

   $config = array();
   $config['protocol']  = 'POP3';
   $config['smtp_host'] = 'mail.smartsure.co.th';
   $config['mailtype']  = 'html';
   $config['smtp_port'] = 587;
   $config['smtp_user'] = 'info@smartsure.co.th';
   $config['smtp_pass'] = 'SBwlGBX61O';
   $config['charset']   = 'utf-8';
   $config['wordwrap']  = TRUE;
   $config['starttls'] = TRUE;
   $this->load->library('email');
   $this->email->set_newline("\r\n");
   $this->email->initialize($config);
  }

  function send()
  {
    $this->_send_mail();
    //echo "<meta http-equiv=\"refresh\" content=\"1;url='".base_url()."success'\">";
  }

  private function load_view($data){
    $contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'Thank You | Smart Sure',
			   'content' => 'Success',
			   
          );

		// $template['content'] = $this->load->view('About',$contents,TRUE);
		$this->load->view('template',$template, $contents, $data);
  }

  private function _send_mail()
  { 
    $name = $_POST["name"];
    $email = $_POST["email"];
    $headline = $_POST["headline"];
    $message = $_POST["message"];
    

    $data = array(
      'name'    => $name,
      'email'   => $email,
      'headline'   => $headline,
      'message' => $message
    );

    $user = array('info@smartsure.co.th');
    $this->email->from($email);//ชื่อผู้ส่ง
    $this->email->to('smartsureinfo@gmail.com'); //เมล์ของบริษัท
    $this->email->subject($headline);//หัวเรื่อง

    $this->email->message($this->load->view('templateMail',$data, TRUE));//ข้อความ
    $this->load_view($data);
    
    if ($this->email->send()){
      return true;
    }
  
  }

}
