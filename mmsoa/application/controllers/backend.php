<?php
header("Content-type: text/html; charset=utf-8");

Class backend extends CI_Controller {
	public function __construct() {
		parent::__construct();
 		$this->load->model('moa_user_model');
 		$this->load->helper(array('form', 'url'));
	}

	public function index() {
		$this->load->view('view_homepage');
	}
	
	public function homepage() {
		$this->load->view('view_homepage');
	}
	
	public function dailycheck() {
		$this->load->view('view_dailycheck');
	}
	
	public function writejournal() {
		$this->load->view('view_writejournal');
	}
	
	
}