<?php
header("Content-type: text/html; charset=utf-8");

Class login extends CI_Controller {
	public function __construct() {
		parent::__construct();
 		$this->load->model('moa_user_model');
 		$this->load->helper(array('form', 'url'));
 		$this->load->library('session');
 		$this->load->helper('cookie');
	}

	public function index() {
		// If the user is logged in, delete the session vars to log them out
		if (isset($_SESSION['user_id'])) {
			// Delete the session vars by clearing the $_SESSION array
			$_SESSION = array();
			
			// Delete the session cookie by setting its expiration to an hour ago (3600)
			if (isset($_COOKIE[session_name()])) {
				setcookie(session_name(), '', time() - 3600);
			}
			
			// Destroy the session
			session_destroy();
		}
		
		// Delete the user ID and username cookies by setting their expirations to an hour ago (3600)
		setcookie('user_id', '', time() - 3600);
		setcookie('username', '', time() - 3600);
		
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
				$uid = $this->moa_user_model->get_uid($username, $password);
				$_SESSION['user_id'] = $uid;
				$_SESSION['username'] = $username;
				set_cookie('user_id', $uid, time() + (60 * 60 * 24 * 30));        // expires in 30 days
				set_cookie('username', $username, time() + (60 * 60 * 24 * 30));  // expires in 30 days
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