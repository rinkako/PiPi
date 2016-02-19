<?php
header("Content-type: text/html; charset=utf-8");

/**
 * 后台控制类
 * @author 伟
 */
Class Backend extends CI_Controller {
	public function __construct() {
		parent::__construct();
 		$this->load->model('moa_user_model');
 		$this->load->model('moa_worker_model');
 		$this->load->model('moa_check_model');
 		$this->load->helper(array('form', 'url'));
 		$this->load->library('session');
 		$this->load->helper('cookie');
	}

	public function index() {
		$this->load->view('view_homepage');
	}
	
	public function homepage() {
		$this->load->view('view_homepage');
	}
	
	/*
	 * 常检签到、课室情况登记页面
	 * 常检课室列表加载
	 */
	public function dailycheck() {
		if (isset($_SESSION['user_id'])) {
			// 获取常检课室
			$uid = $_SESSION['user_id'];
			$wid = $this->moa_worker_model->get_wid_by_uid($uid);
			$classrooms = $this->moa_worker_model->get($wid)->classroom;
			$classroom_list = explode(',', $classrooms);
			$data['classroom_list'] = $classroom_list;
			$this->load->view('view_dailycheck', $data);
		} else {
			// 未登录的用户请先登录
			echo "<script language=javascript>alert('要访问的页面需要先登录！');</script>";
			$_SESSION['user_url'] = $_SERVER['REQUEST_URI'];
			echo '<script language=javascript>window.location.href="../Login"</script>';
		}
	}
	
	/*
	 * 周检签到、课室情况登记页面
	 * 周检课室列表加载
	 */
	public function weeklycheck() {
		if (isset($_SESSION['user_id'])) {
			// 获取周检课室
			$uid = $_SESSION['user_id'];
			$wid = $this->moa_worker_model->get_wid_by_uid($uid);
			$classrooms = $this->moa_worker_model->get($wid)->week_classroom;
			$classroom_list = explode(',', $classrooms);
			$data['classroom_list'] = $classroom_list;
			$this->load->view('view_weeklycheck', $data);
		} else {
			// 未登录的用户请先登录
			echo "<script language=javascript>alert('要访问的页面需要先登录！');</script>";
			$_SESSION['user_url'] = $_SERVER['REQUEST_URI'];
			echo '<script language=javascript>window.location.href="../Login"</script>';
		}
	}
	
	/*
	 * 值班
	 */
	public function onduty() {
		if (isset($_SESSION['user_id'])) {
			$this->load->view('view_onduty');
		} else {
			// 未登录的用户请先登录
			echo "<script language=javascript>alert('要访问的页面需要先登录！');</script>";
			$_SESSION['user_url'] = $_SERVER['REQUEST_URI'];
			echo '<script language=javascript>window.location.href="../Login"</script>';
		}
	}
	
	/*
	 * 拍摄
	 */
	public function filming() {
		if (isset($_SESSION['user_id'])) {
			$this->load->view('view_filming');
		} else {
			// 未登录的用户请先登录
			echo "<script language=javascript>alert('要访问的页面需要先登录！');</script>";
			$_SESSION['user_url'] = $_SERVER['REQUEST_URI'];
			echo '<script language=javascript>window.location.href="../Login"</script>';
		}
	}
	
	public function writejournal() {
		$this->load->view('view_writejournal');
	}
	
}