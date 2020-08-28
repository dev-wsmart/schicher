<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_back extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
		}

	public function index(){
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'Contact_back | Schicher',
			   'content' => 'Contact_back',
			   
          );

		// $template['content'] = $this->load->view('Contact_back',$contents,TRUE);
		$this->load->view('template',$template, $contents);
	
	}
	
}
