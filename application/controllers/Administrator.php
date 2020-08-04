<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administrator extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		$this->load->library('Grocery_CRUD');
	}

	public function index()
	{
	echo	$this->session->userdata('username');
		$data = array( 'title' => 'Administrator ::   ',
								   'description' => "",
								   'keyword' => '',
								   'head' =>   '',
								   'content' => 'home_admin_view',
								  // 'queryPublic' => $this->pub->get_about_add()

								);

		$this->load->view('template_bas_admin',$data);
		}

	function statusDis($value)
	{
		if($value === 'เปิด' || $value === ''){


			return "<center><img src='".base_url()."assets/uploads/icon_status_green.png'></center>";
		}else{

			return "<center><img src='".base_url()."assets/uploads/icon_status_red.png'></center>";

		}
	}

	function home()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme("bootstrap");
		$crud->set_table('home')
	
		->order_by('id','content','date')
		->set_subject('home Content')
		->display_as('content','Content')
		->display_as('img','Images ')
		->display_as('date','Day ');

	
			// $crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('img','assets/uploads/Home');
			$output = $crud->render();
			$this->_example_output($output);
	}
	

	function items()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme("bootstrap");
		$crud->set_table('items')

		->order_by('id','title','description')
		->set_subject('items')
		->display_as('title','Title')
		->display_as('description','Description');

			// $crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			// $crud->set_field_upload('name_img','assets/uploads/intro');
			$output = $crud->render();
			$this->_example_output($output);
	}


	function about()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme("bootstrap");
		$crud->set_table('about')
	
		->order_by('id','content','date')
		->set_subject('About Content')
		->display_as('content',' Content')
		->display_as('img_name',' Images')
		->display_as('date',' Day');

	
		    $crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('img_name','assets/uploads/About');
			$output = $crud->render();
			$this->_example_output($output);
	}

	function product()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme("bootstrap");
		$crud->set_table('product')
	
		->order_by('id','content','date')
		->set_subject('product Content')
		->display_as('details','Content')
		->display_as('image','Images')
		->display_as('date','Day ');
	
			$crud->field_type('package','dropdown',array('Mini Basic 1' => 'Mini Basic 1', 'Mini Basic 3' => 'Mini Basic 3', 'Mini Standard 6' => 'Mini Standard 6', 'Bronze Standard' => 'Bronze Standard', 'Silver Standard' => 'Silver Standard', 'Gold Plus' => 'Gold Plus', 'TCL Standard' => 'TCL Standard', 'Bronze Standard SC' => 'Bronze Standard SC', 'Mittare Bronze Standard' => 'Mittare Bronze Standard', 'Mittare Bronze Standard SC' => 'Mittare Bronze Standard SC', '	
			Auto Smart Standard' => 'Auto Smart Standard', 'Auto Smart Diamond' => 'Auto Smart Diamond', 'Orico Standard' => 'Orico Standard', 'Orico Platinum' => 'Orico Platinum', 'CIMB Plus' => 'CIMB Plus', 'CIMB Premium' => 'CIMB Premium'));
			$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('image','assets/uploads/Product');
			$output = $crud->render();
			$this->_example_output($output);
	}


	function promotion()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme("bootstrap");
		$crud->set_table('promotion')
		
		->order_by('id','content','date')
		->set_subject('promotion Content')
		->display_as('content','Content')
		->display_as('img','Images')
		->display_as('date','Day ');
	
		
			$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('image','assets/uploads/Promotion');
			$output = $crud->render();
			$this->_example_output($output);
	}

	function news(){
		$crud = new grocery_CRUD();
		$crud->set_theme("bootstrap");
		$crud->set_table('news')
	
		->order_by('id','content','date')
		->set_subject('news Content')
		->display_as('news_detail','Detail')
		->display_as('news_image','Images')
		->display_as('date','Day');
	
	
			$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('news_image','assets/uploads/News');
			$output = $crud->render();
			$this->_example_output($output);
	}

	function menuSlide()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme("bootstrap");
		$crud->set_table('menu_slide')
	
		->order_by('id','content','date')
		->set_subject('Slideshow Content')
		->display_as('content',' Content')
		->display_as('image',' Images')
		->display_as('date',' Day');

	
		    $crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('image','assets/uploads/MenuSlide');
			$output = $crud->render();
			$this->_example_output($output);
	}

	function packages(){
		$crud = new grocery_CRUD();
		$crud->set_theme("bootstrap");
		$crud->set_table('package')
	
		->order_by('id','content','date')
		->set_subject('About Content')
		->display_as('package', 'Package')
		->display_as('detail', 'Details')
		->display_as('image',' Images')
		->display_as('date',' Day');

	
			$crud->set_field_upload('image','assets/uploads/Package');
			$output = $crud->render();
			$this->_example_output($output);
	}

	function rest_server()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme("bootstrap");
		$crud->set_table('rest_server')
	
		->order_by('id','content','date')
		->set_subject('rest_server Content')
		->display_as('content','Content')
		->display_as('img','Images ')
		->display_as('date','Day ');
	
	
			// $crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			$crud->set_field_upload('img','assets/uploads/Rest_server');
			$output = $crud->render();
			$this->_example_output($output);
	}









	function product1()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme("bootstrap");
		$crud->set_table('product1')
	

		->order_by('id','content','date')
		->set_subject('ซื้อผลิตภัณฑ์ง่าย ๆ กับ SMART SURE')
		->display_as('content','Content')
		->display_as('link_youtube','Link Youtube ')
		->display_as('date','Day ');
	
	
			$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			// $crud->set_field_upload('img','assets/uploads/product1');
			$output = $crud->render();
			$this->_example_output($output);
	}

	function product2()
	{
		$crud = new grocery_CRUD();
		$crud->set_theme("bootstrap");
		$crud->set_table('product2')
	
		->order_by('id','content','date')
		->set_subject('ชีวิตดี๊ดีเมื่อมี SMART SURE')
		->display_as('content','Content')
		->display_as('link_youtube','Link Youtube ')
		->display_as('date','Day ');
	
	
			$crud->field_type('status','dropdown',array('1' => 'Active', '0' => 'Inactive'));
			// $crud->set_field_upload('img','assets/uploads/product2');
			$output = $crud->render();
			$this->_example_output($output);
	}






		public function _example_output($output = null)
		{
			$this->load->view('example.php',$output);
		}




}




