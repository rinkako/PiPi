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
	
}
