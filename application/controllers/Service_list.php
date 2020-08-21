<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_list extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
		}

	public function index(){

		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'Service_list ',
			   'content' => 'Service_list'
			   
          );

		// $template['content'] = $this->load->view('home',$contents,TRUE);
		$this->load->view('template',$template);
	
	}
	
}
?>
