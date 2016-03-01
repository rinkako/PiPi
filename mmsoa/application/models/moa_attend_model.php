<?php
class moa_attend_model extends CI_Model {
	/**
	 * 添加值班考勤记录
	 * @param paras - 参数列表
	 * @return 这条考勤记录的attend_id
	 */
	public function add($paras) {
		if (isset($paras)) {
			$this->db->insert("MOA_Attendence", $paras);
			return $this->db->insert_id();
		}
		else {
			return false;
		}
	}
}