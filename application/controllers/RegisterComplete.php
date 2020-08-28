<?php

class RegisterComplete extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

    public function index(){
        $contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'Complete Registration ',
			   'content' => 'RegisterComplete'
			   
          );

		// $template['content'] = $this->load->view('home',$contents,TRUE);
		$this->load->view('template',$template);
    }

}
?>