<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="renderer" content="webkit">

    <title>MOA-修改密码</title>
    <?php $this->load->view('view_keyword'); ?>
    
    <link href="<?=base_url().'assets/css/bootstrap.min.css?v=3.4.0' ?>" rel="stylesheet">
    <link href="<?=base_url().'assets/font-awesome/css/font-awesome.css?v=4.3.0' ?>" rel="stylesheet">
    
    <link href="<?=base_url().'assets/css/plugins/iCheck/custom.css' ?>" rel="stylesheet">
    
    <link href="<?=base_url().'assets/css/plugins/simditor/simditor.css' ?>" rel="stylesheet">
    
    <link href="<?=base_url().'assets/css/plugins/chosen/chosen.css' ?>" rel="stylesheet">
        
    <link href="<?=base_url().'assets/css/animate.css' ?>" rel="stylesheet">
    <link href="<?=base_url().'assets/css/plugins/summernote/summernote.css' ?>" rel="stylesheet">
    <link href="<?=base_url().'assets/css/plugins/summernote/summernote-bs3.css' ?>" rel="stylesheet">
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
                            <strong>修改密码</strong>
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
                                <h5>修改密码 </h5>
                            </div>
                            <div class="ibox-content">
                                <form role="form" id="form" class="form-horizontal m-t">
                                	
                                	<div class="form-group">
                                        <label class="col-sm-3 col-sm-offset-1 control-label">用户名</label>
                                        <div class="col-sm-4">
                                            <input id="password" name="password" class="form-control" type="text" 
                                            placeholder="用户名" disabled="" value="<?php echo $username; ?>">
                                        </div>
                                    </div>
                                    
                                	<div class="form-group">
                                        <label class="col-sm-3 col-sm-offset-1 control-label">旧密码</label>
                                        <div class="col-sm-4">
                                            <input id="password_old" name="password_old" class="form-control" type="password" 
                                            placeholder="请输入旧密码">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 col-sm-offset-1 control-label">新密码</label>
                                        <div class="col-sm-4">
                                            <input id="password_new" name="password_new" class="form-control" type="password" 
                                            placeholder="请输入新密码">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-3 col-sm-offset-1 control-label">确认密码</label>
                                        <div class="col-sm-4">
                                            <input id="confirm_password" name="confirm_password" class="form-control" type="password" 
                                            placeholder="请确认新密码">
                                        </div>
                                    </div>
                                
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-4">
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

    </div>
    
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                   <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>  -->
                    <h4 class="modal-title" id="myModalLabel">提示</h4>
                </div>
                <div class="modal-body">
                        <h1 id="submit_result" style="color:#ED5565;text-align:center;"></h1>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">关闭</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?=base_url().'assets/js/jquery-2.1.1.min.js' ?>"></script>
    <script src="<?=base_url().'assets/js/bootstrap.min.js?v=3.4.0' ?>"></script>
    <script src="<?=base_url().'assets/js/plugins/metisMenu/jquery.metisMenu.js' ?>"></script>
    <script src="<?=base_url().'assets/js/plugins/slimscroll/jquery.slimscroll.min.js' ?>"></script>
    <script src="<?=base_url().'assets/js/change_password.js' ?>"></script>
    
    <!-- nav item active -->
	<script>
		$(document).ready(function () {
			$("#mini").attr("href", "changePassword#");
		});
	</script>

    <!-- Custom and plugin javascript -->
    <script src="<?=base_url().'assets/js/hplus.js?v=2.2.0' ?>"></script>
    <script src="<?=base_url().'assets/js/plugins/pace/pace.min.js' ?>"></script>
    
    <!-- Jquery Validate -->
    <script type="text/javascript" src="<?=base_url().'assets/js/plugins/validate/jquery.validate.min.js' ?>"></script>
    <script type="text/javascript" src="<?=base_url().'assets/js/plugins/validate/messages_zh.min.js' ?>"></script>
    
    <script>
	    //以下为修改jQuery Validation插件兼容Bootstrap的方法，没有直接写在插件中是为了便于插件升级
	    $.validator.setDefaults({
	        highlight: function (element) {
	            $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
	        },
	        success: function (element) {
	            element.closest('.form-group').removeClass('has-error').addClass('has-success');
	        },
	        errorElement: "span",
	        errorClass: "help-block m-b-none",
	        validClass: "help-block m-b-none"
	
	    });
    
        $(document).ready(function () {

            // validate form on keyup and submit
            $("#form").validate({
                rules: {
                    password_new: {
                        required: true,
                        minlength: 6
                    },
                    confirm_password: {
                        required: true,
                        minlength: 6,
                        equalTo: "#password_new"
                    }
                },
                messages: {
                	password_new: {
                        required: "请输入您的新密码",
                        minlength: "密码必须6个字符以上"
                    },
                    confirm_password: {
                        required: "请再次输入新密码",
                        minlength: "密码必须6个字符以上",
                        equalTo: "两次输入的密码不一致"
                    }
                }
            });
            
        });
        
        /* Dynamic date */
		function startTime() { 
			var today=new Date(); 
			var strDate=(" "+(today.getFullYear())+"年"+(today.getMonth()+1)+"月"+today.getDate()+"日"); 
			var n_day=today.getDay(); 
			switch(n_day) {
				case 0: 
				{strDate=strDate+" 星期日 "}break; 
				case 1: 
				{strDate=strDate+" 星期一 "}break; 
				case 2: 
				{strDate=strDate+" 星期二 "}break; 
				case 3: 
				{strDate=strDate+" 星期三 "}break; 
				case 4: 
				{strDate=strDate+" 星期四 "}break; 
				case 5: 
				{strDate=strDate+" 星期五 "}break; 
				case 6: 
				{strDate=strDate+" 星期六 "}break; 
				case 7: 
				{strDate=strDate+" 星期日 "}break; 
			} 
			//增加时分秒 
			// add a zero in front of numbers<10 
			var h=today.getHours(); 
			var m=today.getMinutes(); 
			var s=today.getSeconds() 
			m=checkTime(m); 
			s=checkTime(s); 
			strDate=strDate+" "+h+":"+m+":"+s; 
			document.getElementById('time').innerHTML=strDate; 
			t=setTimeout('startTime()',500) 
		} 
		
		function checkTime(i) { 
			if (i<10) {i="0" + i} 
			return i 
		}
		
        
    </script>

</body>

</html>
