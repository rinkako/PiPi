<?php
header("Content-type: text/html; charset=utf-8");

Class Public_methods extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	
	/**
	 *  计算当前周数
	 */
	public static function cal_week() {
		// 周一为一周的第一天
		$cur_week = date('W') - 7;
		// 周日为一周的第一天
		//$cur_week = date("w") == 0 ? $cur_week + 1 : $cur_week;
		return $cur_week;
	}
	
	/**
	 * 将星期的数据库标识解析为中文
	 * @param weekday_num 星期的数据库数字标号
	 * @return 星期对应的中文
	 */
	public static function translate_weekday($weekday_num) {
		$weekday_desc = '';
		switch ($weekday_num) {
			case 1: $weekday_desc = '一'; break;
			case 2: $weekday_desc = '二'; break;
			case 3: $weekday_desc = '三'; break;
			case 4: $weekday_desc = '四'; break;
			case 5: $weekday_desc = '五'; break;
			case 6: $weekday_desc = '六'; break;
			case 7: $weekday_desc = '天'; break;
		}
		return $weekday_desc;
	}
	
	/**
	 * 
	 * @param number $period
	 * @return number
	 */
	public static function get_working_hours($period) {
		$working_hours = 0;
		return $working_hours;
	}
	
	/**
	 * 
	 * @param number $period
	 * @return string
	 */
	public static function get_duty_duration($period) {
		$duty_duration = '07:30-10:30';
		return $duty_duration;
	}
	
	/**
	 * 获取值班时间段
	 * @param weekday 星期
	 * @param from 值班开始时间
	 * @param to 值班结束时间
	 * @return 值班时间段数组
	 */
	public static function get_duty_periods($weekday, $from, $to) {
		$t_from = strtotime($from);
		$t_to = strtotime($to);
		$p_start = 0;
		$p_end = 0;
		$periods = array();
		// 工作日
		if ($weekday >= 1 && $weekday <= 5) {
			$duty_starts = array();
			$duty_starts[] = strtotime("07:30");
			$duty_starts[] = strtotime("10:30");
			$duty_starts[] = strtotime("12:30");
			$duty_starts[] = strtotime("14:00");
			$duty_starts[] = strtotime("16:00");
			$duty_starts[] = strtotime("18:00");
			$duty_ends = array();
			$duty_ends[] = strtotime("10:30");
			$duty_ends[] = strtotime("12:30");
			$duty_ends[] = strtotime("14:00");
			$duty_ends[] = strtotime("16:00");
			$duty_ends[] = strtotime("18:00");
			$duty_ends[] = strtotime("22:00");
			// 误差容忍范围为30分钟=0.5 * 60 *60s
			for ($i = 0; $i < 6; $i++) {
				if (($t_from - $duty_starts[$i]) >= -(0.5 * 60 *60) && 
					($t_from - $duty_starts[$i]) <= (0.5 * 60 *60)) {
					$p_start = $i + 1;
				}
			}
			for ($j = 0; $j < 6; $j++) {
				if (($t_to - $duty_ends[$j]) >= -(0.5 * 60 *60) && 
					($t_to - $duty_ends[$j]) <= (0.5 * 60 *60)) {
					$p_end = $j + 1;
				}
			}
			for ($k = $p_start; $k <= $p_end; $k++) {
				$periods[] = $k;
			}
		} 
		// 周末
		else if ($weekday == 6 || $weekday == 7) {
			$weekend_starts = array();
			$weekend_starts[] = strtotime("07:30");
			$weekend_starts[] = strtotime("12:30");
			$weekend_starts[] = strtotime("18:00");
			$weekend_ends = array();
			$weekend_ends[] = strtotime("12:30");
			$weekend_ends[] = strtotime("18:00");
			$weekend_ends[] = strtotime("22:00");
			for ($i = 0; $i < 3; $i++) {
				if (($t_from - $weekend_starts[$i]) >= -(0.5 * 60 *60) &&
					($t_from - $weekend_starts[$i]) <= (0.5 * 60 *60)) {
						$p_start = $i + 7;
					}
			}
			for ($j = 0; $j < 3; $j++) {
				if (($t_to - $weekend_ends[$j]) >= -(0.5 * 60 *60) &&
					($t_to - $weekend_ends[$j]) <= (0.5 * 60 *60)) {
						$p_end = $j + 7;
					}
			}
			for ($k = $p_start; $k <= $p_end; $k++) {
				$periods[] = $k;
			}
		}
		else {
			return NULL;
		}
		return $periods;
	}
	
	/**
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
	
	/**
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
