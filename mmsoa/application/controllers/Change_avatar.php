<?php
header("Content-type: text/html; charset=utf-8");
require 'Cropavatar.php';

/**
 * 更换头像控制类
 * @author 伟
 */
Class Change_avatar extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('moa_user_model');
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
		$this->load->helper('cookie');
		$this->load->library('upload');
	}
	
	/*
	 * 进入更换头像页面
	 */
	public function index() {
		if (isset($_SESSION['user_id'])) {
			// 获取个人信息
			$obj = $this->moa_user_model->get($_SESSION['user_id']);
			$data['username'] = $obj->username;
			$data['error'] = '';
			$this->load->view('view_change_avatar', $data);
		} else {
			// 未登录的用户请先登录
			Public_methods::requireLogin();
		}
	}
	
	public function uploadAvatar_OOP() {
		// 面向对象的头像裁剪上传  require 'Cropavatar.php';
		$crop = new Cropavatar($_POST['avatar_src'], $_POST['avatar_data'], $_FILES['avatar_file']);
		$response = array(
				'state'  => 200,
				'message' => $crop -> getMsg(),
				'result' => $crop -> getResult()
		);
		echo json_encode($response);
	}
	
	/**
	 * 头像裁剪上传与数据库记录
	 */
	public function uploadAvatar() {
		if (isset($_POST['avatar_src']) && isset($_POST['avatar_data']) && isset($_FILES['avatar_file'])) {
			$post_src = $_POST['avatar_src'];
			$post_data = $_POST['avatar_data'];
			$files_file = $_FILES['avatar_file'];
					
			$src = NULL;
			$data = NULL;
			$file = NULL;
			$dst = NULL;
			$type = NULL;
			$extension = NULL;
			$msg = NULL;
			
			/**** setSrc ****/
			if (!empty($post_src)) {
				$type = exif_imagetype($post_src);
			
				if ($type) {
					$src = $post_src;
					$type = $type;
					$extension = image_type_to_extension($type);
					/**** setDst ****/
					$dst = 'upload/avatar/' . date('YmdHis') . '.png';
					/**** setDst end ****/
				}
			}
			/**** setSrc end ****/
			
			/**** setData ****/
			if (!empty($post_data)) {
				$data = json_decode(stripslashes($post_data));
			}
			/**** setData end ****/
			
			/**** setFile ****/
			$errorCode = $files_file['error'];
			
			if ($errorCode === UPLOAD_ERR_OK) {
				$tmp_type = exif_imagetype($files_file['tmp_name']);
			
				if ($tmp_type) {
					$tmp_extension = image_type_to_extension($tmp_type);
					$tmp_src = 'upload/avatar/' . date('YmdHis') . '.original' . $tmp_extension;
			
					if ($tmp_type == IMAGETYPE_GIF || $tmp_type == IMAGETYPE_JPEG || $tmp_type == IMAGETYPE_PNG) {
			
						if (file_exists($tmp_src)) {
							unlink($tmp_src);
						}
			
						$tmp_result = move_uploaded_file($files_file['tmp_name'], $tmp_src);
			
						if ($tmp_result) {
							$src = $tmp_src;
							$type = $tmp_type;
							$extension = $tmp_extension;
							// setDst
							$dst = 'upload/avatar/' . date('YmdHis') . '.png';
							// setDst end
						} else {
							$msg = 'Failed to save file';
						}
					} else {
						$msg = 'Please upload image with the following types: JPG, PNG, GIF';
					}
				} else {
					$msg = 'Please upload image file';
				}
			} else {
				$msg = $this -> codeToMessage($errorCode);
			}
			/**** setFile end ****/
			
			/**** crop ****/
			if (!empty($src) && !empty($dst) && !empty($data)) {
				switch ($type) {
					case IMAGETYPE_GIF:
						$src_img = imagecreatefromgif($src);
						break;
			
					case IMAGETYPE_JPEG:
						$src_img = imagecreatefromjpeg($src);
						break;
			
					case IMAGETYPE_PNG:
						$src_img = imagecreatefrompng($src);
						break;
				}
			
				if (!$src_img) {
					$msg = "Failed to read the image file";
					
					// return
					$result = !empty($data) ? $dst : $src;
					$response = array(
							'state'  => 200,
							'message' => $msg,
							'result' => $result
					);
					echo json_encode($response);
					return;
				}
			
				$size = getimagesize($src);
				$size_w = $size[0]; // natural width
				$size_h = $size[1]; // natural height
			
				$src_img_w = $size_w;
				$src_img_h = $size_h;
			
				$degrees = $data -> rotate;
			
				// Rotate the source image
				if (is_numeric($degrees) && $degrees != 0) {
					// PHP's degrees is opposite to CSS's degrees
					$new_img = imagerotate( $src_img, -$degrees, imagecolorallocatealpha($src_img, 0, 0, 0, 127) );
			
					imagedestroy($src_img);
					$src_img = $new_img;
			
					$deg = abs($degrees) % 180;
					$arc = ($deg > 90 ? (180 - $deg) : $deg) * M_PI / 180;
			
					$src_img_w = $size_w * cos($arc) + $size_h * sin($arc);
					$src_img_h = $size_w * sin($arc) + $size_h * cos($arc);
			
					// Fix rotated image miss 1px issue when degrees < 0
					$src_img_w -= 1;
					$src_img_h -= 1;
				}
			
				$tmp_img_w = $data -> width;
				$tmp_img_h = $data -> height;
				$dst_img_w = 220;
				$dst_img_h = 220;
			
				$src_x = $data -> x;
				$src_y = $data -> y;
			
				if ($src_x <= -$tmp_img_w || $src_x > $src_img_w) {
					$src_x = $src_w = $dst_x = $dst_w = 0;
				} else if ($src_x <= 0) {
					$dst_x = -$src_x;
					$src_x = 0;
					$src_w = $dst_w = min($src_img_w, $tmp_img_w + $src_x);
				} else if ($src_x <= $src_img_w) {
					$dst_x = 0;
					$src_w = $dst_w = min($tmp_img_w, $src_img_w - $src_x);
				}
			
				if ($src_w <= 0 || $src_y <= -$tmp_img_h || $src_y > $src_img_h) {
					$src_y = $src_h = $dst_y = $dst_h = 0;
				} else if ($src_y <= 0) {
					$dst_y = -$src_y;
					$src_y = 0;
					$src_h = $dst_h = min($src_img_h, $tmp_img_h + $src_y);
				} else if ($src_y <= $src_img_h) {
					$dst_y = 0;
					$src_h = $dst_h = min($tmp_img_h, $src_img_h - $src_y);
				}
			
				// Scale to destination position and size
				$ratio = $tmp_img_w / $dst_img_w;
				$dst_x /= $ratio;
				$dst_y /= $ratio;
				$dst_w /= $ratio;
				$dst_h /= $ratio;
			
				$dst_img = imagecreatetruecolor($dst_img_w, $dst_img_h);
			
				// Add transparent background to destination image
				imagefill($dst_img, 0, 0, imagecolorallocatealpha($dst_img, 0, 0, 0, 127));
				imagesavealpha($dst_img, true);
			
				$result = imagecopyresampled($dst_img, $src_img, $dst_x, $dst_y, $src_x, $src_y, $dst_w, $dst_h, $src_w, $src_h);
			
				if ($result) {
					if (!imagepng($dst_img, $dst)) {
						$msg = "Failed to save the cropped image file";
					}
				} else {
					$msg = "Failed to crop the image file";
				}
			
				imagedestroy($src_img);
				imagedestroy($dst_img);
			}
			/**** crop end ****/
			
			/**** return ****/
			$result = !empty($data) ? $dst : $src;
			$response = array(
					'state'  => 200,
					'message' => $msg,
					'result' => $result
			);
			echo json_encode($response);
			/**** return end ****/
		}
	}
	
	/**
	 * 获取错误信息
	 * @param $code 错误代码
	 */
	private function codeToMessage($code) {
      	switch ($code) {
        	case UPLOAD_ERR_INI_SIZE:
          		$message = 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
          		break;

        	case UPLOAD_ERR_FORM_SIZE:
         		$message = 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
          		break;

        	case UPLOAD_ERR_PARTIAL:
          		$message = 'The uploaded file was only partially uploaded';
          		break;

	        case UPLOAD_ERR_NO_FILE:
	        	$message = 'No file was uploaded';
	        	break;
	
	        case UPLOAD_ERR_NO_TMP_DIR:
	        	$message = 'Missing a temporary folder';
	        	break;
	
	        case UPLOAD_ERR_CANT_WRITE:
	        	$message = 'Failed to write file to disk';
	        	break;
	
	        case UPLOAD_ERR_EXTENSION:
	        	$message = 'File upload stopped by extension';
	        	break;
	
	        default:
	          	$message = 'Unknown upload error';
	    }
	
	    return $message;
	}
	
	
}