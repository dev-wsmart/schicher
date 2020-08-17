<?php if(! defined('BASEPATH'))exit('No direct script access allowed');
class Mail extends CI_Controller{
 function __construct()
  {
  parent::__construct();

   $config = array();
   $config['protocol']  = 'smtp';
   $config['smtp_host'] = 'ssl://smtp.googlemail.com';
   $config['mailtype']  = 'html';
   $config['smtp_port'] = 465;
   $config['smtp_user'] = 'smartsure@smartsure.co.th';
   $config['smtp_pass'] = 'smartsure1234';
   $config['charset']   = 'utf-8';
   $config['wordwrap']  = TRUE;
   $config['starttls'] = TRUE;
   $this->load->library('email', $config);
   $this->email->set_newline("\r\n");
   $this->email->initialize($config);
  }

  function send()
  {
    $this->_send_mail();
    //echo "<meta http-equiv=\"refresh\" content=\"1;url='".base_url()."success'\">";
    
    $this->load_view();
  }

  private function load_view(){
    $contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'Thank You | Smart Sure',
			   'content' => 'Success',
			   
          );

		// $template['content'] = $this->load->view('About',$contents,TRUE);
		$this->load->view('template',$template, $contents);
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

    $user = array('smartsure@smartsure.co.th');
    $this->email->from($email);//ชื่อผู้ส่ง
    $this->email->to($user); //เมล์ของบริษัท
    $this->email->subject($headline);//หัวเรื่อง

    $this->email->message($this->load->view('Success',$data,TRUE));//ข้อความ
    
    if ($this->email->send()){
      return TRUE;
    }
  
  }			

}
