<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lost_found extends CI_Controller {

	public function index()
	{
		$this->load->view('view_lost_found');
	}
	
}
