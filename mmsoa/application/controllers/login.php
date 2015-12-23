<?php
header("Content-type: text/html; charset=utf-8");

Class login extends CI_Controller {
	public function __construct() {
		parent::__construct();
 		$this->load->model('moa_user_model');
 		$this->load->helper(array('form', 'url'));
 		//$this->load->library('session');
	}

	public function index() {
		$this->load->view('view_login');
	}
	
	public function loginValidation() {
		if (isset($_POST['username']) && isset($_POST['password'])) {
 			$username = $_POST['username'];
 			$password = md5($_POST['password']);
			$result = $this->moa_user_model->login_check($username, $password);
			if ($result == false) {
				$error = "用户名或密码错误!";
				echo json_encode(array("status" => false, "msg" => $error));
				return;
			} else {
				$success = "登录成功";
				echo json_encode(array("status" => true, "msg" => $success));
				return;
			}
		}
	}
	
	public function showHomepage() {
		$this->load->view('view_homepage');
	}
	
	
}