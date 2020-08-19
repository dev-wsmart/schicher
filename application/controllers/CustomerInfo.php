<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerInfo extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
			$this->load->Model('CustomerInfo_Model');
		}

	public function index(){
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'ฝากข้อมูลติดต่อกลับ | Schicher',
			   'content' => 'Customerinfo',
			   
          );

		// $template['content'] = $this->load->view('About',$contents,TRUE);
		$this->load->view('template',$template, $contents);
	
	}
	public function save_contactinput()
	{
		// print_r($this->input->post());

		$brand = $this->input->post('brand');
		$model = $this->input->post('model');
		$year = $this->input->post('year');
		$mileage = $this->input->post('mileage');
		$name = $this->input->post('name');
		$lname = $this->input->post('lname');
		$tel = $this->input->post('tel');
		$email = $this->input->post('email');

		$data = array(
			'brand'=>$brand,
			'model'=>$model,
			'year'=>$year,
			'mileage'=>$mileage,
			'name'=>$name,
			'lname'=>$lname,
			'tel'=>$tel,
			'email'=>$email,
		);
		$this->CustomerInfo_Model->insert_customer($data);
		redirect('Contact_back', 'refresh');

	
	}
	
}
