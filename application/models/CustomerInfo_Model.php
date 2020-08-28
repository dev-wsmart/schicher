<?php
class CustomerInfo_Model extends CI_Model 
{
	/*Insert*/
	/*Insert*/
	function insert_customer($data)
	{
          $this->db->insert('customer_contact',$data);
		  return $this->db->insert_id();
		  $this->load->view('Contact_back');

	}
	
}
?>
