<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
		}

	public function index(){
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'News | Smart Sure',
			   'content' => 'News'
			   
          );

		// $template['content'] = $this->load->view('home',$contents,TRUE);
		$this->load->view('template',$template);
	
	}
	
	public function view($id=null){

		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template=array(
		 'title'   => 'News Show | Smart Sure',
		 'content' => 'news_show',
		 'id' => $id
		 );
	   
		$contents['id'] = $id;
		$this->load->view('template',$template);
		}
}
?>