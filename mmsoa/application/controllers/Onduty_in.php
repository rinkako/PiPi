<?php
header("Content-type: text/html; charset=utf-8");

require_once('Public_methods.php');

/**
 * 值班登记控制类
 * @author 伟
 */
Class Onduty_in extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('moa_user_model');
		$this->load->model('moa_worker_model');
		$this->load->model('moa_duty_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
		$this->load->helper('cookie');
	}
	
	public function index() {
		
	}
	
	/*
	 * 值班时间登记
	 */
	public function onduty_record() {
		if (isset($_SESSION['user_id'])) {
			$uid = $_SESSION['user_id'];
			$wid = $this->moa_worker_model->get_wid_by_uid($uid);
			if ($_POST['journal_body']) {
				$journal_paras['wid'] = $wid;
				
				// state： 0-正常  1-已删除
				$journal_paras['state'] = 0;
				
				// 周一为一周的第一天
				$journal_paras['weekcount'] = Public_methods::cal_week();
	
				// 1-周一  2-周二  ... 6-周六  7-周日
				$journal_paras['weekday'] = date("w") == 0 ? 7 : date("w");
				
				$journal_paras['timestamp'] = date('Y-m-d H:i:s');
				$journal_paras['body'] = implode(' ## ', $_POST['journal_body']);
				$lrid = $this->moa_leaderreport_model->add_report($journal_paras);
				
				if ($lrid) {
					echo json_encode(array("status" => TRUE, "msg" => "登记成功"));
					return;
				} else {
					echo json_encode(array("status" => FALSE, "msg" => "登记失败"));
					return;
				}
				
			} else {
				echo json_encode(array("status" => FALSE, "msg" => "登记失败"));
					return;
			}
		}
	}
	
}