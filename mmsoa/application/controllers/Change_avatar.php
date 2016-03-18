<?php
header("Content-type: text/html; charset=utf-8");

require_once('Public_methods.php');

/**
 * 更换头像控制类
 * @author 伟
 */
Class Change_avatar extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('moa_user_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
		$this->load->helper('cookie');
	}
	
	/*
	 * 进入更换头像页面
	 */
	public function index() {
		if (isset($_SESSION['user_id'])) {
			// 获取个人信息
			$obj = $this->moa_user_model->get($_SESSION['user_id']);
			$data['username'] = $obj->username;
			$this->load->view('view_change_avatar', $data);
		} else {
			// 未登录的用户请先登录
			Public_methods::requireLogin();
		}
	}
	
	
}