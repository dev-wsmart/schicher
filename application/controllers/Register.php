<?php 
class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index(){
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'Register ',
			   'content' => 'Register'
			   
          );

		// $template['content'] = $this->load->view('home',$contents,TRUE);
		$this->load->view('template',$template);
	
    }
    
    public function sendinfo(){

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $mail = $_POST['email'];
		$tel = $_POST['tel'];

		$data = array(
			'name' => $name,
			'surname' => $surname,
			'email' => $mail,
			'telephone' => $tel
		);
		
		$query = $this->db->insert('userinfo',$data);

		if ($query){
			redirect('/registercomplete');
		}else{
			echo 'Error! to insert please try again!';
		}
    }
	
}
?>
