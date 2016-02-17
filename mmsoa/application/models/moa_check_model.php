<?php
class moa_check_model extends CI_Model {
	/**
	 * 添加课室检查记录（常检 周检）
	 * @param paras - 参数列表
	 * @return 这条检查记录的checkid
	 */
	public function add_check($paras) {
		if (isset($paras)) {
			$this->db->insert("MOA_Check", $paras);
			return $this->db->insert_id();
		}
		else {
			return false;
		}
	}
	
	/**
	 * 添加课室问题（故障）记录
	 * @param paras - 参数列表
	 * @return 这条问题记录的pid
	 */
	public function add_problem($paras) {
		if (isset($paras)) {
			$this->db->insert('MOA_Problem', $paras);
			return $this->db->insert_id();
		}
		else {
			return false;
		}
	}
	
	/**
	 * 取指定wid对应的roomid
	 * @param wid - 工号id
	 * @return 对应的常检课室roomid
	 */
	public function get_roomid_by_wid($wid) {
		if (isset($wid)) {
			$this->db->where(array('wid'=>$wid));
			$dataarr = $this->db->get('MOA_CheckRoom')->result();
			if (is_null($dataarr[0])) {
				return false;
			}
			return $dataarr[0]->roomid;
		}
		else {
			return false;
		}
	}
	
	/**
	 * 取指定课室对应的roomid
	 * @param room - 课室位置
	 * @return 对应课室的roomid
	 */
	public function get_roomid_by_room($room) {
		if (isset($room)) {
			$this->db->where(array('room'=>$room));
			$dataarr = $this->db->get('MOA_CheckRoom')->result();
			if (is_null($dataarr[0])) {
				return false;
			}
			return $dataarr[0]->roomid;
		}
		else {
			return false;
		}
	}
	
	/**
	 * 
	 */
}
