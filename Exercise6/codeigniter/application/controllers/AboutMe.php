<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class AboutMe extends CI_Controller {

	public function index(){
		$this->load->view('AboutMe.php'); 
		$this->load->helper('html');
	}

}
