<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="renderer" content="webkit">

    <title>MOA-发布坐班日志</title>
    <?php $this->load->view('view_keyword'); ?>
    
    <link href="<?=base_url().'assets/css/bootstrap.min.css?v=3.4.0' ?>" rel="stylesheet">
    <link href="<?=base_url().'assets/font-awesome/css/font-awesome.css?v=4.3.0' ?>" rel="stylesheet">
    <link href="<?=base_url().'assets/css/plugins/iCheck/custom.css' ?>" rel="stylesheet">
    <link href="<?=base_url().'assets/css/animate.css' ?>" rel="stylesheet">
    <link href="<?=base_url().'assets/css/style.css?v=2.2.0' ?>" rel="stylesheet">

</head>

<body>
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
                    <h2>基本表单</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">主页</a>
                        </li>
                        <li>
                            <a>表单</a>
                        </li>
                        <li>
                            <strong>基本表单</strong>
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
                                <h5>所有表单元素 <small>包括自定义样式的复选和单选按钮</small></h5>
                            </div>
                            <div class="ibox-content">
                                <form method="get" class="form-horizontal">
                                	<div class="form-group">
	                                	<label class="col-sm-3 control-label">组别：</label>
										<div class="col-sm-9">
										    <label class="radio-inline">
										        <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios">A组</label>
										    <label class="radio-inline">
										        <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios">B组</label>
										</div>
									</div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
	                                    <label class="col-sm-3 control-label">早检情况：</label>
										<div class="col-sm-9">
										    <textarea name="" class="form-control" placeholder="请输入文本" > </textarea>
										</div>
									</div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
	                                    <label class="col-sm-3 control-label">午检情况：</label>
										<div class="col-sm-9">
										    <textarea name="" class="form-control" placeholder="请输入文本"> </textarea>
										</div>
									</div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
	                                    <label class="col-sm-3 control-label">晚检情况：</label>
										<div class="col-sm-9">
										    <textarea name="" class="form-control" placeholder="请输入文本"> </textarea>
										</div>
									</div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
	                                    <label class="col-sm-3 control-label">总结：</label>
										<div class="col-sm-9">
										    <textarea name="" class="form-control" placeholder="请输入文本"> </textarea>
										</div>
									</div>
                                    <div class="hr-line-dashed"></div>
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-2">
                                            <button class="btn btn-primary" type="submit">发布</button>
                                            <button class="btn btn-white" type="submit">取消</button>
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
    <div id="modal-form" class="modal fade" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-6 b-r">
                            <h3 class="m-t-none m-b">登录</h3>

                            <p>欢迎登录本站(⊙o⊙)</p>

                            <form role="form">
                                <div class="form-group">
                                    <label>用户名：</label>
                                    <input type="email" placeholder="请输入用户名" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>密码：</label>
                                    <input type="password" placeholder="请输入密码" class="form-control">
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>登录</strong>
                                    </button>
                                    <label>
                                        <input type="checkbox" class="i-checks">自动登录</label>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-6">
                            <h4>还不是会员？</h4>
                            <p>您可以注册一个账户</p>
                            <p class="text-center">
                                <a href="form_basic.html"><i class="fa fa-sign-in big-icon"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="<?=base_url().'assets/js/jquery-2.1.1.min.js' ?>"></script>
    <script src="<?=base_url().'assets/js/bootstrap.min.js?v=3.4.0' ?>"></script>
    <script src="<?=base_url().'assets/js/plugins/metisMenu/jquery.metisMenu.js' ?>"></script>
    <script src="<?=base_url().'assets/js/plugins/slimscroll/jquery.slimscroll.min.js' ?>"></script>
    
    <!-- nav item active -->
	<script>
		$(document).ready(function () {
			$("#active-journal").addClass("active");
			$("#active-writejournal").addClass("active");
			$("#mini").attr("href", "writejournal#");
		});
	</script>

    <!-- Custom and plugin javascript -->
    <script src="<?=base_url().'assets/js/hplus.js?v=2.2.0' ?>"></script>
    <script src="<?=base_url().'assets/js/plugins/pace/pace.min.js' ?>"></script>

    <!-- iCheck -->
    <script src="<?=base_url().'assets/js/plugins/iCheck/icheck.min.js' ?>"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>

</body>

</html>
