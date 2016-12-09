<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends CI_Controller {

	public function index(){
		$this->load->view('Gallery.php'); 
		$this->load->helper('html');
	}

}
