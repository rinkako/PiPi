<?php
header("Content-type: text/html; charset=utf-8");

Class Public_methods extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	
	/*
	 *  计算当前周数
	 */
	public static function cal_week() {
		// 周一为一周的第一天
		$cur_week = date('W') - 7;
		// 周日为一周的第一天
		//$cur_week = date("w") == 0 ? $cur_week + 1 : $cur_week;
		return $cur_week;
	}
	
	/*
	 * 获取常检课室列表
	 */
	public static function get_daily_classrooms() {
		$daily_classrooms = array(  'A101,A102,A103,A104,A105', 
									'A201,A202,A203,A301,A302', 
									'A204,A207,B303,B304,A306', 
									'A401,A402,A403,A404,A405', 
									'A501,A502,A503,A504,A505', 
									'B101,B102,B103,B104,B201,B202', 
									'B203,B204,B205,B301,B302', 
									'B401,B402,B403,B501,B502', 
									'C101,C102,C103,C104,C105', 
									'C202,C203,C204,C205,C206', 
									'C201,C301,C302,C303,C304', 
									'C305,C401,C402,C403,C404', 
									'B503,C501,C502,C503,C504', 
									'D101,D102,D103,D104,D205', 
									'D201,D202,D203,D204,E201', 
									'D301,D302,D303,D304,D401', 
									'D402,D403,D501,D502,D503', 
									'E101,E103,E104,E105,E205', 
									'E202,E203,E204,E302,E303', 
									'E304,E305,E403,E404,E405', 
									'E402,E502,E503,E504,E505');
		return $daily_classrooms;
	}
	
	/*
	 * 获取周检课室列表
	 */
	public static function get_weekly_classrooms() {
		$weekly_classrooms = array( 'A101,A102', 'A103,A104,A105', 
									'A201,A202,A203', 'A301,A302', 
									'A204,A207', 'B303,B304,A306', 
									'A401,A402', 'A403,A404,A405', 
									'A501,A502', 'A503,A504,A505', 
									'B101,B102,B103', 'B104,B201,B202', 
									'B203,B204,B205', 'B301,B302', 
									'B401,B402,B403', 'B501,B502', 
									'C101,C102', 'C103,C104,C105', 
									'C202,C203', 'C204,C205,C206', 
									'C201,C301', 'C302,C303,C304', 
									'C305,C404', 'C401,C402,C403', 
									'B503,C504', 'C501,C502,C503', 
									'D101,D102,D103', 'D104,D205', 
									'D201,E201', 'D202,D203,D204', 
									'D301,D401', 'D302,D303,D304', 
									'D402,D403', 'D501,D502,D503', 
									'E101,E103,E104', 'E105,E205', 
									'E202,E203,E204', 'E302,E303', 
									'E304,E305', 'E403,E404,E405', 
									'E402,E502', 'E503,E504,E505');
		return $weekly_classrooms;
	}
	
	
}
