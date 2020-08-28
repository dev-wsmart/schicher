<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Partner extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
		}

	public function index(){
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'Partner ',
			   'content' => 'Partner'
			   
          );

		// $template['content'] = $this->load->view('home',$contents,TRUE);
		$this->load->view('template',$template);
	
	}
	public function view($id=null){

		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template=array(
			'title'   => 'Partner show',
			'content' => 'Partner_show',
			'id' => $id
		 );
	   
		$contents['id'] = $id;
		// $template['content'] = $this->load->view('Partner_show',$contents,true);
		$this->load->view('template',$template);

		}
	
}
?>
