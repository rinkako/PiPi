<?php
header("Content-type: text/html; charset=utf-8");

require_once('Public_methods.php');

/**
 * 添加新用户控制类
 * @author 伟
 */
Class User_management extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('moa_user_model');
		$this->load->model('moa_worker_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
		$this->load->helper('cookie');
	}
	
	public function index() {
		
	}
	
	/*
	 * 添加新用户
	 */
	public function add_new_user() {
		if (isset($_SESSION['user_id'])) {
			if (isset($_POST['username'])) {
				$user_record = $this->moa_user_model->get_by_username($_POST['username']);
				// 确保用户名的唯一性
				if (!$user_record) {
					$user_paras['username'] = $_POST['username'];
					if (isset($_POST['password']) && isset($_POST['confirm_password'])) {
						if ($_POST['password'] == $_POST['confirm_password']) {
							$user_paras['password'] = md5($_POST['password']);
							$user_paras['name'] = $_POST['name'];
							$user_paras['level'] = $_POST['level'];
							$user_paras['indate'] = $_POST['indate'];
							// state: 0-正常  1-锁定  2-已删除
							$user_paras['state'] = 0;
							$uid = $this->moa_user_model->add($user_paras);
							
							if ($uid != FALSE) {
								// 若为普通助理，还应插入MOA_Worker表
								if ($_POST['level'] == 0) {
									if (isset($_POST['group']) && isset($_POST['classroom']) && isset($_POST['week_classroom'])) {
										$worker_paras['uid'] = $uid;
										$worker_paras['level'] = 0;
										$worker_paras['group'] = $_POST['group'];
										$worker_paras['classroom'] = $_POST['classroom'];
										$worker_paras['week_classroom'] = $_POST['week_classroom'];
										$wid = $this->moa_worker_model->add($worker_paras);
										
										if ($wid != FALSE) {
											echo json_encode(array("status" => TRUE, "msg" => "添加成功"));
											return;
										} else {
											echo json_encode(array("status" => FALSE, "msg" => "添加失败"));
											return;
										}
									}
									
								} else {
									echo json_encode(array("status" => TRUE, "msg" => "添加成功"));
									return;
								}
								
							} else {
								echo json_encode(array("status" => FALSE, "msg" => "添加失败"));
								return;
							}
							
						} else {
							echo json_encode(array("status" => FALSE, "msg" => "两次输入的密码不一致"));
							return;
						}
					}
				} else {
					echo json_encode(array("status" => FALSE, "msg" => "该用户名已存在"));
					return;
				}
			}
		} else {
			echo json_encode(array("status" => FALSE, "msg" => "添加失败"));
				return;
		}
	}
	
	
}