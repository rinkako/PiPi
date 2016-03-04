<?php
header("Content-type: text/html; charset=utf-8");

require_once('Public_methods.php');

/**
 * 坐班日志录入控制类
 * @author 伟
 */
Class Journal_in extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('moa_user_model');
		$this->load->model('moa_worker_model');
		$this->load->model('moa_leaderreport_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
		$this->load->helper('cookie');
	}
	
	public function index() {
		
	}
	
	/*
	 * 发布坐班日志
	 */
	public function writeJournal() {
		if (isset($_SESSION['user_id'])) {
			$uid = $_SESSION['user_id'];
			$wid = $this->moa_worker_model->get_wid_by_uid($uid);
			if (isset($_POST['journal_body'])) {
				$journal_paras['wid'] = $wid;
				
				// state： 0-正常  1-已删除
				$journal_paras['state'] = 0;
				
				// group：0 - N  1 - A  2 - B
				$journal_paras['group'] = 0;
				if (isset($_POST['group'])) {
					$journal_paras['group'] = $_POST['group'];
				}
				
				// 周一为一周的第一天
				$journal_paras['weekcount'] = Public_methods::cal_week();
	
				// 1-周一  2-周二  ... 6-周六  7-周日
				$journal_paras['weekday'] = date("w") == 0 ? 7 : date("w");
				
				$journal_paras['timestamp'] = date('Y-m-d H:i:s');
				
				// 避免journal_body中含有指定分割字符串' ## '
				foreach ($_POST['journal_body'] as &$part) {
					$part = str_replace(' ## ', ' ', $part);
				}
				// 以' ## '作为分割记号存入数据库
				$journal_paras['body'] = implode(' ## ', $_POST['journal_body']);
				
				$journal_paras['bestlist'] = NULL;
				if (isset($_POST['bestlist']) && !empty($_POST['bestlist'])) {
					$journal_paras['bestlist'] = implode(',', $_POST['bestlist']);
				}
				$journal_paras['badlist'] = NULL;
				if (isset($_POST['badlist']) && !empty($_POST['badlist'])) {
					$journal_paras['badlist'] = implode(',', $_POST['badlist']);
				}
				$lrid = $this->moa_leaderreport_model->add($journal_paras);
				
				if ($lrid) {
					echo json_encode(array("status" => TRUE, "msg" => "发布成功"));
					return;
				} else {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
				
			} else {
				echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
			}
		}
	}
	
}