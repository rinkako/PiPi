<?php
class moa_leaderreport_model extends CI_Model {
	/**
	 * 添加坐班日志
	 * @param paras - 参数列表
	 * @return 这篇坐班日志的lrid
	 */
	public function add($paras) {
		if (isset($paras)) {
			$this->db->insert("MOA_LeaderReport", $paras);
			return $this->db->insert_id();
		}
		else {
			return false;
		}
	}
	
}