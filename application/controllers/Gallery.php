<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
		}

	public function index(){
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'Gallery',
			   'content' => 'Gallery'
			   
          );

		// $template['content'] = $this->load->view('home',$contents,TRUE);
		$this->load->view('template',$template);
	
	}
	public function view($id=null){

		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template=array(
			'title'   => 'Gallery show',
			'content' => 'Gallery_show',
			'id' => $id
		 );
	   
		$contents['id'] = $id;
		// $template['content'] = $this->load->view('Gallery_show',$contents,true);
		$this->load->view('template',$template);

		}
	
}

