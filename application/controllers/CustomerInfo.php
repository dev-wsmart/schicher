<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerInfo extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
		}

	public function index(){
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'ฝากข้อมูลติดต่อกลับ | Smart Sure',
			   'content' => 'Customerinfo',
			   
          );

		// $template['content'] = $this->load->view('About',$contents,TRUE);
		$this->load->view('template',$template, $contents);
	
	}
	
}