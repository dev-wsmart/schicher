<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Language extends CI_Controller {

    function index(){


			$previousUrl = $_GET["url"];
			$language = $_GET["lang"];

		// $this->session->set_userdata("service", $service);

        $this->session->set_userdata("language", $language);

        redirect($previousUrl);
    }

}
?>
