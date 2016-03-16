<?php
header("Content-type: text/html; charset=utf-8");

require_once('Public_methods.php');

/**
 * 坐班日志录入控制类
 * @author 伟
 */
Class Homepage extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('moa_user_model');
		$this->load->model('moa_mmsboard_model');
		$this->load->model('moa_mbcomment_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
		$this->load->helper('cookie');
	}
	
	public function index() {
		
	}
	
	/*
	 * 添加、获取留言
	 */
	public function addPost() {
		if (isset($_SESSION['user_id'])) {
			$uid = $_SESSION['user_id'];
			$name = $this->moa_user_model->get($uid)->name;
			
			// 添加新留言
			if (isset($_POST['post_content'])) {
				// state：0-正常  1-已删除
				$board_paras['state'] = 0;
				$board_paras['uid'] = $uid;
				$timestamp = date('Y-m-d H:i:s');
				$board_paras['bptimestamp'] = $timestamp;
				$board_paras['body'] = $_POST['post_content'];
				$bpid = $this->moa_mmsboard_model->add($board_paras);
				if ($bpid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "留言失败"));
					return;
				} else {
					$splited_date = Public_methods::splitDate($timestamp);
					echo json_encode(array("status" => TRUE, "msg" => "留言成功", "name" => $name, "splited_date" => $splited_date,
							"bpid" => $bpid, "base_url" => base_url()));
					return;
				}
			}
		}
	}
	
	/**
	 * 添加新评论
	 */
	public function addComment() {
		if (isset($_SESSION['user_id'])) {
			$uid = $_SESSION['user_id'];
			$name = $this->moa_user_model->get($uid)->name;
				
			// 添加新评论
			if (isset($_POST['comment_content']) && isset($_POST['post_id'])) {
				// state：0-正常  1-已删除
				$comment_paras['state'] = 0;
				$comment_paras['uid'] = $uid;
				$comment_paras['bpid'] = $_POST['post_id'];
				$timestamp = date('Y-m-d H:i:s');
				$comment_paras['mbctimestamp'] = $timestamp;
				$comment_paras['body'] = $_POST['comment_content'];
				$mbcid = $this->moa_mbcomment_model->add($comment_paras);
				if ($mbcid == FALSE) {
					echo json_encode(array("status" => FALSE, "msg" => "评论失败"));
					return;
				} else {
					$splited_date = Public_methods::splitDate($timestamp);
					echo json_encode(array("status" => TRUE, "msg" => "评论成功", "name" => $name, "splited_date" => $splited_date,
							"mbcid" => $mbcid, "base_url" => base_url()));
					return;
				}
			}
		}
	}
	
}