<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
		}

	public function index(){
		$this->lang->load("user_ui","english");
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'About | Schicher',
			   'content' => 'About',
			   
          );

		// $template['content'] = $this->load->view('About',$contents,TRUE);
		$this->load->view('template',$template, $contents);
	
	}
	
}