<?php
header("Content-type: text/html; charset=utf-8");

require_once('Public_methods.php');

/**
 * 排班控制类
 * @author 伟
 */
Class Duty_arrange extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('moa_user_model');
		$this->load->model('moa_worker_model');
		$this->load->model('moa_nschedule_model');
		$this->load->model('moa_duty_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
		$this->load->helper('cookie');
	}
	
	public function index() {
		
	}
	
	/*
	 * 排班
	 */
	public function dutyArrange() {
		if (isset($_SESSION['user_id'])) {
			// 每次存入新的排班表前清空旧排班表
			$this->moa_duty_model->clear();
			// 每个时段存入一条记录，共有36条记录
			$duty_paras['wids'] = NULL;
			// MON1
			if (isset($_POST['MON1_list']) && !empty($_POST['MON1_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['MON1_list']);
				$duty_paras['weekday'] = 1;
				$duty_paras['period'] = 1;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			// MON2
			if (isset($_POST['MON2_list']) && !empty($_POST['MON2_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['MON2_list']);
				$duty_paras['weekday'] = 1;
				$duty_paras['period'] = 2;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			// MON3
			if (isset($_POST['MON3_list']) && !empty($_POST['MON3_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['MON3_list']);
				$duty_paras['weekday'] = 1;
				$duty_paras['period'] = 3;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			// MON4
			if (isset($_POST['MON4_list']) && !empty($_POST['MON4_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['MON4_list']);
				$duty_paras['weekday'] = 1;
				$duty_paras['period'] = 4;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			// MON5
			if (isset($_POST['MON5_list']) && !empty($_POST['MON5_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['MON5_list']);
				$duty_paras['weekday'] = 1;
				$duty_paras['period'] = 5;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			// MON6
			if (isset($_POST['MON6_list']) && !empty($_POST['MON6_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['MON6_list']);
				$duty_paras['weekday'] = 1;
				$duty_paras['period'] = 6;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			
			// TUE1
			if (isset($_POST['TUE1_list']) && !empty($_POST['TUE1_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['TUE1_list']);
				$duty_paras['weekday'] = 2;
				$duty_paras['period'] = 1;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			// TUE2
			if (isset($_POST['TUE2_list']) && !empty($_POST['TUE2_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['TUE2_list']);
				$duty_paras['weekday'] = 2;
				$duty_paras['period'] = 2;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			// TUE3
			if (isset($_POST['TUE3_list']) && !empty($_POST['TUE3_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['TUE3_list']);
				$duty_paras['weekday'] = 2;
				$duty_paras['period'] = 3;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			// TUE4
			if (isset($_POST['TUE4_list']) && !empty($_POST['TUE4_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['TUE4_list']);
				$duty_paras['weekday'] = 2;
				$duty_paras['period'] = 4;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			// TUE5
			if (isset($_POST['TUE5_list']) && !empty($_POST['TUE5_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['TUE5_list']);
				$duty_paras['weekday'] = 2;
				$duty_paras['period'] = 5;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			// TUE6
			if (isset($_POST['TUE6_list']) && !empty($_POST['TUE6_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['TUE6_list']);
				$duty_paras['weekday'] = 2;
				$duty_paras['period'] = 6;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			
			// WED1
			if (isset($_POST['WED1_list']) && !empty($_POST['WED1_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['WED1_list']);
				$duty_paras['weekday'] = 3;
				$duty_paras['period'] = 1;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			// WED2
			if (isset($_POST['WED2_list']) && !empty($_POST['WED2_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['WED2_list']);
				$duty_paras['weekday'] = 3;
				$duty_paras['period'] = 2;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			// WED3
			if (isset($_POST['WED3_list']) && !empty($_POST['WED3_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['WED3_list']);
				$duty_paras['weekday'] = 3;
				$duty_paras['period'] = 3;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			// WED4
			if (isset($_POST['WED4_list']) && !empty($_POST['WED4_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['WED4_list']);
				$duty_paras['weekday'] = 3;
				$duty_paras['period'] = 4;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			// WED5
			if (isset($_POST['WED5_list']) && !empty($_POST['WED5_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['WED5_list']);
				$duty_paras['weekday'] = 3;
				$duty_paras['period'] = 5;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			// WED6
			if (isset($_POST['WED6_list']) && !empty($_POST['WED6_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['WED6_list']);
				$duty_paras['weekday'] = 3;
				$duty_paras['period'] = 6;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			
			// THU1
			if (isset($_POST['THU1_list']) && !empty($_POST['THU1_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['THU1_list']);
				$duty_paras['weekday'] = 4;
				$duty_paras['period'] = 1;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			// THU2
			if (isset($_POST['THU2_list']) && !empty($_POST['THU2_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['THU2_list']);
				$duty_paras['weekday'] = 4;
				$duty_paras['period'] = 2;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			// THU3
			if (isset($_POST['THU3_list']) && !empty($_POST['THU3_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['THU3_list']);
				$duty_paras['weekday'] = 4;
				$duty_paras['period'] = 3;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			// THU4
			if (isset($_POST['THU4_list']) && !empty($_POST['THU4_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['THU4_list']);
				$duty_paras['weekday'] = 4;
				$duty_paras['period'] = 4;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			// THU5
			if (isset($_POST['THU5_list']) && !empty($_POST['THU5_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['THU5_list']);
				$duty_paras['weekday'] = 4;
				$duty_paras['period'] = 5;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			// THU6
			if (isset($_POST['THU6_list']) && !empty($_POST['THU6_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['THU6_list']);
				$duty_paras['weekday'] = 4;
				$duty_paras['period'] = 6;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			
			// FRI1
			if (isset($_POST['FRI1_list']) && !empty($_POST['FRI1_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['FRI1_list']);
				$duty_paras['weekday'] = 5;
				$duty_paras['period'] = 1;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			// FRI2
			if (isset($_POST['FRI2_list']) && !empty($_POST['FRI2_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['FRI2_list']);
				$duty_paras['weekday'] = 5;
				$duty_paras['period'] = 2;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			// FRI3
			if (isset($_POST['FRI3_list']) && !empty($_POST['FRI3_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['FRI3_list']);
				$duty_paras['weekday'] = 5;
				$duty_paras['period'] = 3;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			// FRI4
			if (isset($_POST['FRI4_list']) && !empty($_POST['FRI4_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['FRI4_list']);
				$duty_paras['weekday'] = 5;
				$duty_paras['period'] = 4;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			// FRI5
			if (isset($_POST['FRI5_list']) && !empty($_POST['FRI5_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['FRI5_list']);
				$duty_paras['weekday'] = 5;
				$duty_paras['period'] = 5;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			// FRI6
			if (isset($_POST['FRI6_list']) && !empty($_POST['FRI6_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['FRI6_list']);
				$duty_paras['weekday'] = 5;
				$duty_paras['period'] = 6;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			
			// SAT1
			if (isset($_POST['SAT1_list']) && !empty($_POST['SAT1_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['SAT1_list']);
				$duty_paras['weekday'] = 6;
				$duty_paras['period'] = 7;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			// SAT2
			if (isset($_POST['SAT2_list']) && !empty($_POST['SAT2_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['SAT2_list']);
				$duty_paras['weekday'] = 6;
				$duty_paras['period'] = 8;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			// SAT3
			if (isset($_POST['SAT3_list']) && !empty($_POST['SAT3_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['SAT3_list']);
				$duty_paras['weekday'] = 6;
				$duty_paras['period'] = 9;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			
			// SUN1
			if (isset($_POST['SUN1_list']) && !empty($_POST['SUN1_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['SUN1_list']);
				$duty_paras['weekday'] = 7;
				$duty_paras['period'] = 7;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			// SUN2
			if (isset($_POST['SUN2_list']) && !empty($_POST['SUN2_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['SUN2_list']);
				$duty_paras['weekday'] = 7;
				$duty_paras['period'] = 8;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			// SUN3
			if (isset($_POST['SUN3_list']) && !empty($_POST['SUN3_list'])) {
				$duty_paras['wids'] = implode(',', $_POST['SUN3_list']);
				$duty_paras['weekday'] = 7;
				$duty_paras['period'] = 9;
				$dutyid = $this->moa_duty_model->add($duty_paras);
				if ($dutyid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "发布失败"));
					return;
				}
			}
			
			echo json_encode(array("status" => TRUE, "msg" => "发布成功"));
			return;
		}
	}
	
	
}