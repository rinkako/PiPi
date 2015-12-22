<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('begin');
// 		$this->load->model('moa_log_model');
// 		$paras['dash_wid'] = 0;
// 		$paras['affect_wid'] = 1;
// 		$paras['description'] = 'lallalaallal';
// 		$paras['logtimestamp'] = date('Y-m-d H:i:s');
// 		$this->moa_log_model->add($paras);
	}
	
	public function test()
	{
		$this->load->view('oa_index');
	}
}
