<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index(){
		$this->load->view('Contact.php'); 
		$this->load->helper('html');
	}

}
