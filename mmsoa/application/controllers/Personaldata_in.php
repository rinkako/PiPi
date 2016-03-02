<?php
header("Content-type: text/html; charset=utf-8");

require_once('Public_methods.php');

/**
 * 坐班日志控制类
 * @author 伟
 */
Class Personaldata_in extends CI_Controller {
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
	 * 发布坐班日志
	 */
	public function personalDataUpdate() {
		if (isset($_SESSION['user_id'])) {
			if (isset($_POST['pd_phone'])) {
				$pd_paras['phone'] = $_POST['pd_phone'];
			}
			if (isset($_POST['pd_shortphone'])) {
				$pd_paras['shortphone'] = $_POST['pd_shortphone'];
			}
			if (isset($_POST['pd_qq'])) {
				$pd_paras['qq'] = $_POST['pd_qq'];
			}
			if (isset($_POST['pd_wechat'])) {
				$pd_paras['wechat'] = $_POST['pd_wechat'];
			}
			if (isset($_POST['pd_studentid'])) {
				$pd_paras['studentid'] = $_POST['pd_studentid'];
			}
			if (isset($_POST['pd_school'])) {
				$pd_paras['school'] = $_POST['pd_school'];
			}
			if (isset($_POST['pd_address'])) {
				$pd_paras['address'] = $_POST['pd_address'];
			}
			if (isset($_POST['pd_creditcard'])) {
				$pd_paras['creditcard'] = $_POST['pd_creditcard'];
			}
			
			$res = $this->moa_user_model->update($_SESSION['user_id'], $pd_paras);
			
			if ($res != FALSE) {
				echo json_encode(array("status" => TRUE, "msg" => "保存成功"));
				return;
			} else {
				echo json_encode(array("status" => FALSE, "msg" => "保存失败"));
				return;
			}
			
		} else {
			echo json_encode(array("status" => FALSE, "msg" => "保存失败"));
				return;
		}
	}
	
}