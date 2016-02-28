<?php
header("Content-type: text/html; charset=utf-8");

require_once('Public_methods.php');

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
			// 取所有普通助理的wid与name, level: 0-普通助理  1-组长  2-负责人助理  3-助理负责人  4-管理员  5-办公室负责人
			$level = 0;
			$common_worker = $this->moa_user_model->get_by_level($level);
				
			for ($i = 0; $i < count($common_worker); $i++) {
				$uid_list[$i] = $common_worker[$i]->uid;
				$name_list[$i] = $common_worker[$i]->name;
				$wid_list[$i] = $this->moa_worker_model->get_wid_by_uid($uid_list[$i]);
			}
			
			$wid = $this->moa_worker_model->get_wid_by_uid($_SESSION['user_id']);
			$data['wid'] = $wid;
			$data['name_list'] = $name_list;
			$data['wid_list'] = $wid_list;
			// 传入wid列表用于选择被代班助理
			$this->load->view('view_onduty', $data);
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
	
	/*
	 * 发布坐班日志
	 */
	public function writejournal() {
		if (isset($_SESSION['user_id'])) {
			// 取所有普通助理的wid与name, level: 0-普通助理  1-组长  2-负责人助理  3-助理负责人  4-管理员  5-办公室负责人
			$level = 0;
			$common_worker = $this->moa_user_model->get_by_level($level);
			
			for ($i = 0; $i < count($common_worker); $i++) {
				$uid_list[$i] = $common_worker[$i]->uid;
				$name_list[$i] = $common_worker[$i]->name;
				$wid_list[$i] = $this->moa_worker_model->get_wid_by_uid($uid_list[$i]);
			}
			$data['name_list'] = $name_list;
			$data['wid_list'] = $wid_list;
			$this->load->view('view_writejournal', $data);
		} else {
			// 未登录的用户请先登录
			echo "<script language=javascript>alert('要访问的页面需要先登录！');</script>";
			$_SESSION['user_url'] = $_SERVER['REQUEST_URI'];
			echo '<script language=javascript>window.location.href="../Login"</script>';
		}
	}
	
	/*
	 * 查看/修改个人资料
	 */
	public function personaldata() {
		if (isset($_SESSION['user_id'])) {
			// 获取个人信息
			$obj = $this->moa_user_model->get($_SESSION['user_id']);
			$data['personal_data'] = $obj;
			$this->load->view('view_personaldata', $data);
		} else {
			// 未登录的用户请先登录
			echo "<script language=javascript>alert('要访问的页面需要先登录！');</script>";
			$_SESSION['user_url'] = $_SERVER['REQUEST_URI'];
			echo '<script language=javascript>window.location.href="../Login"</script>';
		}
	}
	
	/*
	 * 修改密码
	 */
	public function changepassword() {
		if (isset($_SESSION['user_id'])) {
			// 获取个人信息
			$obj = $this->moa_user_model->get($_SESSION['user_id']);
			$data['username'] = $obj->username;
			$this->load->view('view_changepassword', $data);
		} else {
			// 未登录的用户请先登录
			echo "<script language=javascript>alert('要访问的页面需要先登录！');</script>";
			$_SESSION['user_url'] = $_SERVER['REQUEST_URI'];
			echo '<script language=javascript>window.location.href="../Login"</script>';
		}
	}
	
	/*
	 * 添加新用户
	 */
	public function adduser() {
		if (isset($_SESSION['user_id'])) {
			$data['daily_classrooms'] = Public_methods::get_daily_classrooms();
			$data['weekly_classrooms'] = Public_methods::get_weekly_classrooms();
			$this->load->view('view_adduser', $data);
		} else {
			// 未登录的用户请先登录
			echo "<script language=javascript>alert('要访问的页面需要先登录！');</script>";
			$_SESSION['user_url'] = $_SERVER['REQUEST_URI'];
			echo '<script language=javascript>window.location.href="../Login"</script>';
		}
	}
	
	/*
	 * 查看用户列表
	 */
	public function searchuser() {
		if (isset($_SESSION['user_id'])) {
			// state: 0-正常  1-锁定  2-已删除
			$state = 0;
			// 取状态为正常的所有用户
			$users = $this->moa_user_model->get_by_state($state);
			// 获取普通助理的常检周检课室列表
			$workers = array();
			for ($i = 0; $i < count($users); $i++) {
				if ($users[$i]->level == 0) {
					$tmp_wid = $this->moa_worker_model->get_wid_by_uid($users[$i]->uid);
					$workers[$i] = $this->moa_worker_model->get($tmp_wid);
				}
			}
			$data['users'] = $users;
			$data['workers'] = $workers;
			$this->load->view('view_searchuser', $data);
		} else {
			// 未登录的用户请先登录
			echo "<script language=javascript>alert('要访问的页面需要先登录！');</script>";
			$_SESSION['user_url'] = $_SERVER['REQUEST_URI'];
			echo '<script language=javascript>window.location.href="../Login"</script>';
		}
	}
	
	
}