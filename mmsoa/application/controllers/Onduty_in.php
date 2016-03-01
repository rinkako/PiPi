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
		$this->load->model('moa_attend_model');
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
			
			if (isset($_POST['time_from']) && isset($_POST['time_to'])) {
				// 1-周一  2-周二  ... 6-周六  7-周日
				$weekday = date("w") == 0 ? 7 : date("w");
				$periods_list = Public_methods::get_duty_periods($weekday, $_POST['time_from'], $_POST['time_to']);
				if ($periods_list == NULL) {
					echo json_encode(array("status" => FALSE, "msg" => "请选取有效的值班时间段"));
					return;
				}
				
				$attend_paras['wid'] = $wid;
				$attend_paras['timestamp'] = date('Y-m-d H:i:s');
				// 周次，周一为一周的第一天
				$attend_paras['weekcount'] = Public_methods::cal_week();
				// 1-周一  2-周二  ... 6-周六  7-周日
				$attend_paras['weekday'] = date("w") == 0 ? 7 : date("w");
				// 签到type: 0-值班  1-早检 2-午检 3-晚检 4-周检
				$attend_paras['type'] = 0;
				// 是否迟到：0-否 1-是
				$attend_paras['isLate'] = 0;
				
				if (isset($_POST['is_replaced']) && isset($_POST['replaced_wid'])) {
					// 没有代班
					if ($_POST['is_replaced'] == 0) {
						// 是否代班：0 - 否   1 - 是
						$attend_paras['isSubstitute'] = 0;
						// 多个时间段分别插入数据库
						for ($i = 0; $i < count($periods_list); $i++) {
							$attend_paras['dutyPeriod'] = $periods_list[$i];
							$attend_id = $this->moa_attend_model->add($attend_paras);
							if (!($attend_id)) {
								echo json_encode(array("status" => FALSE, "msg" => "登记失败"));
								return;
							}
						}
						echo json_encode(array("status" => TRUE, "msg" => "登记成功"));
						return;
					} 
					else if ($_POST['is_replaced'] == 1) {
						$attend_paras['isSubstitute'] = 1;
						if (!$_POST['replaced_wid']) {
							echo json_encode(array("status" => FALSE, "msg" => "请选择原值班助理"));
							return;
						}
						$attend_paras['substituteFor'] = $_POST['replaced_wid'];
						// 多个时间段分别插入数据库
						for ($i = 0; $i < count($periods_list); $i++) {
							$attend_paras['dutyPeriod'] = $periods_list[$i];
							$attend_id = $this->moa_attend_model->add($attend_paras);
							if (!($attend_id)) {
								echo json_encode(array("status" => FALSE, "msg" => "登记失败"));
								return;
							}
						}
						echo json_encode(array("status" => TRUE, "msg" => "登记成功"));
						return;
					}
				}
				
			}
		}
	}
	
}