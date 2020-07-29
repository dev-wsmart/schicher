<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promotion extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
		}

	public function index(){
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'Promotion | Smart Sure',
			   'content' => 'Promotion'
			   
          );

		// $template['content'] = $this->load->view('home',$contents,TRUE);
		$this->load->view('template',$template);
	
	}

	public function view($id=null){

		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template=array(
		 'title'   => 'Promotion Show | Smart Sure',
		 'content' => 'promotion_show'
		 ,
		 'id' => $id
		 );
	   
		$contents['id'] = $id;
		$this->load->view('template',$template);
	}
	
}
?>