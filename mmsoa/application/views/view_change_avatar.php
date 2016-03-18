<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="renderer" content="webkit">

    <title>MOA-修改头像</title>
    <?php $this->load->view('view_keyword'); ?>
    
    <link href="<?=base_url().'assets/images/moa.ico' ?>" rel="shortcut icon">
    
    <link href="<?=base_url().'assets/css/bootstrap.min.css?v=3.4.0' ?>" rel="stylesheet">
    <link href="<?=base_url().'assets/font-awesome/css/font-awesome.min.css' ?>" rel="stylesheet">
    
    <link href="<?=base_url().'assets/css/plugins/avatar/avatar.css' ?>" rel="stylesheet">
    
    <link href="<?=base_url().'assets/css/plugins/cropper/cropper.css' ?>" rel="stylesheet">
    
    <link href="<?=base_url().'assets/css/plugins/cropper/main.css' ?>" rel="stylesheet">
        
    <link href="<?=base_url().'assets/css/animate.css' ?>" rel="stylesheet">
    <link href="<?=base_url().'assets/css/style.css?v=2.2.0' ?>" rel="stylesheet">

</head>

<body onload="startTime()">
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
            	<?php $this->load->view('view_nav'); ?>
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <?php $this->load->view('view_header'); ?>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2 id="time"></h2>
                    <ol class="breadcrumb">
                        <li>
                            MOA
                        </li>
                        <li>
                            <strong>修改头像</strong>
                        </li>	
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>修改头像 </h5>
                            </div>
                            <div class="ibox-content">
                            	 
                            	<div class="container" id="crop-avatar">
            
						            <!-- Current avatar -->
						            <div class="avatar-view" title="点击更换头像">
						                <img src="<?=base_url().'assets/images/picture.jpg' ?>" alt="Avatar"/>
						            </div>
						            <button class="btn btn-primary" id="submit_changepassword" style="visibility: hidden;"
                                            data-toggle="modal" data-target="#avatar-modal">修改</button>
						
						            <!-- Cropping modal -->
						            <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
						                <div class="modal-dialog modal-lg">
						                    <div class="modal-content">
						                        <form class="avatar-form" action="<?php echo site_url('CropAvatar'); ?>" enctype="multipart/form-data" method="post">
						                            <div class="modal-header">
						                                <button class="close" data-dismiss="modal" type="button">&times;</button>
						                                <h4 class="modal-title" id="avatar-modal-label">更换头像</h4>
						                            </div>
						                            <div class="modal-body">
						                                <div class="avatar-body">
						
						                                    <!-- Upload image and data -->
						                                    <div class="avatar-upload">
						                                        <input class="avatar-src" name="avatar_src" type="hidden"/>
						                                        <input class="avatar-data" name="avatar_data" type="hidden"/>
						                                        <label for="avatarInput">头像上传</label>
						                                        <input class="avatar-input" id="avatarInput" name="avatar_file" type="file"/>
						                                    </div>
						
						                                    <!-- Crop and preview -->
						                                    <div class="row">
						                                        <div class="col-md-9">
						                                            <div class="avatar-wrapper"></div>
						                                        </div>
						                                        <div class="col-md-3">
						                                            <div class="avatar-preview preview-lg"></div>
						                                            <div class="avatar-preview preview-md"></div>
						                                            <div class="avatar-preview preview-sm"></div>
						                                        </div>
						                                    </div>
						
						                                    <div class="row avatar-btns">
						                                        <div class="col-md-9">
						                                            <div class="btn-group">
						                                                <button class="btn btn-primary" data-method="rotate" data-option="-90" type="button" title="Rotate -90 degrees">Rotate Left</button>
						                                                <button class="btn btn-primary" data-method="rotate" data-option="-15" type="button">-15deg</button>
						                                                <button class="btn btn-primary" data-method="rotate" data-option="-30" type="button">-30deg</button>
						                                                <button class="btn btn-primary" data-method="rotate" data-option="-45" type="button">-45deg</button>
						                                            </div>
						                                            <div class="btn-group">
						                                                <button class="btn btn-primary" data-method="rotate" data-option="90" type="button" title="Rotate 90 degrees">Rotate Right</button>
						                                                <button class="btn btn-primary" data-method="rotate" data-option="15" type="button">15deg</button>
						                                                <button class="btn btn-primary" data-method="rotate" data-option="30" type="button">30deg</button>
						                                                <button class="btn btn-primary" data-method="rotate" data-option="45" type="button">45deg</button>
						                                            </div>
						                                        </div>
						                                        <div class="col-md-3">
						                                            <button class="btn btn-primary btn-block avatar-save" type="submit">完成</button>
						                                        </div>
						                                    </div>
						                                </div>
						                            </div>
						                            <!-- <div class="modal-footer">
						                              <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
						                            </div> -->
						                        </form>
						                    </div>
						                </div>
						            </div><!-- /.modal -->
						
						            <!-- Loading state -->
						            <div class="loading" aria-label="Loading" role="img" tabindex="-1" 
						            style="background: #fff url('<?=base_url().'assets/images/loading.gif' ?>') no-repeat center center;"></div>
						        </div>
                            	
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('view_footer'); ?>
        </div>
    </div>
    
    <!-- Mainly scripts -->
    <script src="<?=base_url().'assets/js/jquery-2.1.1.min.js' ?>"></script>
    <script src="<?=base_url().'assets/js/bootstrap.min.js?v=3.4.0' ?>"></script>
    <script src="<?=base_url().'assets/js/plugins/metisMenu/jquery.metisMenu.js' ?>"></script>
    
    <!-- nav item active -->
	<script>
		$(document).ready(function () {
			$("#mini").attr("href", "Change_avatar#");
		});
	</script>

    <!-- Custom and plugin javascript -->
    <script src="<?=base_url().'assets/js/hplus.js?v=2.2.0' ?>"></script>
    <script src="<?=base_url().'assets/js/plugins/pace/pace.min.js' ?>"></script>
    
    <!-- Dynamic date -->
    <script src="<?=base_url().'assets/js/dynamicDate.js' ?>"></script>
    
    <!-- Cropper -->
    <script src="<?=base_url().'assets/js/plugins/cropper/cropper.min.js' ?>"></script>
    <script src="<?=base_url().'assets/js/plugins/cropper/main.js' ?>"></script>
    
    <script>
    /*
	    $(window).load(function() {
	    	var options =
	    	{
	    		thumbBox: '.thumbBox',
	    		spinner: '.spinner',
	    		imgSrc: '../assets/images/a5.jpg'
	    	}
	    	var cropper = $('.imageBox').cropbox(options);
	    	$('#upload-file').on('change', function(){
	    		var reader = new FileReader();
	    		reader.onload = function(e) {
	    			options.imgSrc = e.target.result;
	    			cropper = $('.imageBox').cropbox(options);
	    		}
	    		reader.readAsDataURL(this.files[0]);
	    		this.files = [];
	    	})
	    	$('#btnCrop').on('click', function(){
	    		var img = cropper.getDataURL();
	    		$('.cropped').html('');
	    		$('.cropped').append('<img src="'+img+'" align="absmiddle" style="width:64px;margin-top:4px;box-shadow:0px 0px 12px #7E7E7E;" ><p>64px*64px</p>');
	    		$('.cropped').append('<img src="'+img+'" align="absmiddle" style="width:128px;margin-top:4px;border-radius:128px;box-shadow:0px 0px 12px #7E7E7E;"><p>128px*128px</p>');
	    		$('.cropped').append('<img src="'+img+'" align="absmiddle" style="width:180px;margin-top:4px;border-radius:180px;box-shadow:0px 0px 12px #7E7E7E;"><p>180px*180px</p>');
	    	})
	    	$('#btnZoomIn').on('click', function(){
	    		cropper.zoomIn();
	    	})
	    	$('#btnZoomOut').on('click', function(){
	    		cropper.zoomOut();
	    	})
	    });
	    
	    */
        
    </script>

</body>

</html>
