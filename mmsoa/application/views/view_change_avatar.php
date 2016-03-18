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
                                <form role="form" id="form" class="form-horizontal m-t">
                                	
                                	<div class="form-group">
                                        <div class="col-sm-5 col-sm-offset-2">
										  	<div class="imageBox">
										    	<div class="thumbBox"></div>
										    	<div class="spinner" style="display: none">Loading...</div>
											</div>
											<div class="action"> 
											    <!-- <input type="file" id="file" style=" width: 200px">-->
											    <input class="btn btn-primary" type="file" name="upload-file" id="upload-file" /><i class="fa fa-folder-open"></i>选择本地图像
											    <button class="btn btn-primary" type="button" id="btnZoomIn"><i class="fa fa-plus"></i></button>
											    <button class="btn btn-primary" type="button" id="btnZoomOut"><i class="fa fa-minus"></i></button>
											    <button class="btn btn-primary" type="button" id="btnCrop"><i class="fa fa-cut"></i></button>
											</div>
											<div class="cropped"></div>
										</div>
	                                </div>
	                                
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-5">
                                            <button class="btn btn-primary" type="submit" id="submit_changepassword" 
                                            data-toggle="modal" data-target="#myModal">修改</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('view_footer'); ?>
        </div>
    </div>
    
    <?php $this->load->view('view_modal'); ?>

    <!-- Mainly scripts -->
    <script src="<?=base_url().'assets/js/jquery-2.1.1.min.js' ?>"></script>
    <script src="<?=base_url().'assets/js/bootstrap.min.js?v=3.4.0' ?>"></script>
    <script src="<?=base_url().'assets/js/plugins/metisMenu/jquery.metisMenu.js' ?>"></script>
    <script src="<?=base_url().'assets/js/plugins/slimscroll/jquery.slimscroll.min.js' ?>"></script>
    <script src="<?=base_url().'assets/js/change_avatar.js' ?>"></script>
    
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
    
    <!-- Avatar -->
    <script src="<?=base_url().'assets/js/plugins/avatar/avatar.js' ?>"></script>
    
    <script>
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
        
    </script>

</body>

</html>
