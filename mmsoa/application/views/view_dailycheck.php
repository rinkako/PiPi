<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="renderer" content="webkit">

    <title>MOA-常检登记</title>
    <meta name="keywords" content="MOA,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="MOA是多媒体办公自动化系统，基于Bootstrap开发的扁平化主题，采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link href="<?=base_url().'assets/css/bootstrap.min.css?v=3.4.0' ?>" rel="stylesheet">
    <link href="<?=base_url().'assets/font-awesome/css/font-awesome.css?v=4.3.0' ?>" rel="stylesheet">
    <link href="<?=base_url().'assets/css/animate.css' ?>" rel="stylesheet">
    <link href="<?=base_url().'assets/css/style.css?v=2.2.0' ?>" rel="stylesheet">
    <link href="<?=base_url().'assets/js/plugins/layer/skin/layer.css' ?>" rel="stylesheet">
    <link href="<?=base_url().'assets/css/plugins/switchery/switchery.css' ?>" rel="stylesheet">

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
                            <a href="homepage">MOA</a>
                        </li>
                        <li>
                            <a>工作记录</a>
                        </li>
                        <li>
                            <strong>常检</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeIn">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>常检考勤 · 情况登记</h5>
                            	<div class="ibox-content">
                                	<div class="panel blank-panel">

                                    <div class="panel-heading">
                                        <div class="panel-options">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a data-toggle="tab" href="tabs_panels.html#base">早检</a>
                                                </li>
                                                <li class=""><a data-toggle="tab" href="tabs_panels.html#integrated">午检</a>
                                                </li>
                                                <li class=""><a data-toggle="tab" href="tabs_panels.html#expand">晚检</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <div class="tab-content">
                                            <div id="base" class="tab-pane active">
                                            	<p>签到：<span><input type="checkbox" class="js-switch" /></span></p>
					                            <h5>早检情况：&nbsp;<small>请在有问题的课室后面填写好记录，无问题的课室无需填写</small></h5>
					                            <div class="ibox-content" style="margin-bottom: 0px; padding-bottom: 0px;">
					                                <form method="get" class="form-horizontal">
					                                    <div class="form-group">
					                                        <label class="col-sm-2 control-label">A101</label>
					
					                                        <div class="col-sm-10">
					                                            <input type="text" placeholder="正常" class="form-control">
					                                        </div>
					                                    </div>
					                                    <div class="form-group">
					                                        <label class="col-sm-2 control-label">A102</label>
					
					                                        <div class="col-sm-10">
					                                            <input type="text" placeholder="正常" class="form-control">
					                                        </div>
					                                    </div>
					                                    <div class="form-group">
					                                        <label class="col-sm-2 control-label">A103</label>
					
					                                        <div class="col-sm-10">
					                                            <input type="text" placeholder="正常" class="form-control">
					                                        </div>
					                                    </div>
					                                    <div class="form-group">
					                                        <label class="col-sm-2 control-label">A104</label>
					
					                                        <div class="col-sm-10">
					                                            <input type="text" placeholder="正常" class="form-control">
					                                        </div>
					                                    </div>
					                                    <div class="form-group">
					                                        <label class="col-sm-2 control-label">A105</label>
					
					                                        <div class="col-sm-10">
					                                            <input type="text" placeholder="正常" class="form-control">
					                                        </div>
					                                    </div>
					                                    <div class="hr-line-dashed"></div>
					                                    <div class="form-group">
					                                        <div class="col-sm-4 col-sm-offset-2">
					                                            <button class="btn btn-primary" type="submit">提交</button>
					                                            <button class="btn btn-white" type="submit">取消</button>
					                                        </div>
					                                    </div>
					                                </form>
					                            </div>
                                            </div>
                                            <div id="integrated" class="tab-pane">
                                            	<p>签到：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><input type="checkbox" class="js-switch_2" /></span></p>
					                            <h5>午检情况：&nbsp;<small>请在有问题的课室后面填写好记录，无问题的课室无需填写</small></h5>
					                            <div class="ibox-content">
					                                <form method="get" class="form-horizontal">
					                                    <div class="form-group">
					                                        <label class="col-sm-2 control-label">A101</label>
					
					                                        <div class="col-sm-10">
					                                            <input type="text" placeholder="正常" class="form-control">
					                                        </div>
					                                    </div>
					                                    <div class="form-group">
					                                        <label class="col-sm-2 control-label">A102</label>
					
					                                        <div class="col-sm-10">
					                                            <input type="text" placeholder="正常" class="form-control">
					                                        </div>
					                                    </div>
					                                    <div class="form-group">
					                                        <label class="col-sm-2 control-label">A103</label>
					
					                                        <div class="col-sm-10">
					                                            <input type="text" placeholder="正常" class="form-control">
					                                        </div>
					                                    </div>
					                                    <div class="form-group">
					                                        <label class="col-sm-2 control-label">A104</label>
					
					                                        <div class="col-sm-10">
					                                            <input type="text" placeholder="正常" class="form-control">
					                                        </div>
					                                    </div>
					                                    <div class="form-group">
					                                        <label class="col-sm-2 control-label">A105</label>
					
					                                        <div class="col-sm-10">
					                                            <input type="text" placeholder="正常" class="form-control">
					                                        </div>
					                                    </div>
					                                    <div class="hr-line-dashed"></div>
					                                    <div class="form-group">
					                                        <div class="col-sm-4 col-sm-offset-2">
					                                            <button class="btn btn-primary" type="submit">提交</button>
					                                            <button class="btn btn-white" type="submit">取消</button>
					                                        </div>
					                                    </div>
					                                </form>
					                            </div>
                                            </div>

                                            <div id="expand" class="tab-pane">
                                            	<p>签到：&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><input type="checkbox" class="js-switch_3" /></span></p>
					                            <h5>晚检情况：&nbsp;<small>请在有问题的课室后面填写好记录，无问题的课室无需填写</small></h5>
					                            <div class="ibox-content">
					                                <form method="get" class="form-horizontal">
					                                    <div class="form-group">
					                                        <label class="col-sm-2 control-label">A101</label>
					
					                                        <div class="col-sm-10">
					                                            <input type="text" placeholder="正常" class="form-control">
					                                        </div>
					                                    </div>
					                                    <div class="form-group">
					                                        <label class="col-sm-2 control-label">A102</label>
					
					                                        <div class="col-sm-10">
					                                            <input type="text" placeholder="正常" class="form-control">
					                                        </div>
					                                    </div>
					                                    <div class="form-group">
					                                        <label class="col-sm-2 control-label">A103</label>
					
					                                        <div class="col-sm-10">
					                                            <input type="text" placeholder="正常" class="form-control">
					                                        </div>
					                                    </div>
					                                    <div class="form-group">
					                                        <label class="col-sm-2 control-label">A104</label>
					
					                                        <div class="col-sm-10">
					                                            <input type="text" placeholder="正常" class="form-control">
					                                        </div>
					                                    </div>
					                                    <div class="form-group">
					                                        <label class="col-sm-2 control-label">A105</label>
					
					                                        <div class="col-sm-10">
					                                            <input type="text" placeholder="正常" class="form-control">
					                                        </div>
					                                    </div>
					                                    <div class="hr-line-dashed"></div>
					                                    <div class="form-group">
					                                        <div class="col-sm-4 col-sm-offset-2">
					                                            <button class="btn btn-primary" type="submit">提交</button>
					                                            <button class="btn btn-white" type="submit">取消</button>
					                                        </div>
					                                    </div>
					                                </form>
					                            </div>
                                            </div>
                                            
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php $this->load->view('view_footer')?>

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
			$("#active-workrecord").addClass("active");
			$("#active-dailycheck").addClass("active");
			$("#mini").attr("href", "dailycheck#");
		});
	</script>

    <!-- Custom and plugin javascript -->
    <script src="<?=base_url().'assets/js/hplus.js?v=2.2.0' ?>"></script>
    <script src="<?=base_url().'assets/js/plugins/pace/pace.min.js' ?>"></script>
    
    <!-- layer javascript -->
    <script src="<?=base_url().'assets/js/plugins/layer/layer.min.js' ?>"></script>
    <script>
        layer.use('extend/layer.ext.js'); //载入layer拓展模块
    </script>

    <script src="<?=base_url().'assets/js/demo/layer-demo.js' ?>"></script>
    
    <!-- Switchery -->
    <script src="<?=base_url().'assets/js/plugins/switchery/switchery.js' ?>"></script>

    <!-- ios switch -->
    <script>
    	$(document).ready(function () {
        	
    		var elem = document.querySelector('.js-switch');
            var switchery = new Switchery(elem, {
                color: '#1AB394'
            });

            var elem_2 = document.querySelector('.js-switch_2');
            var switchery_2 = new Switchery(elem_2, {
                color: '#1AB394'
            });

            var elem_3 = document.querySelector('.js-switch_3');
            var switchery_3 = new Switchery(elem_3, {
                color: '#1AB394'
            });
            
        });
    </script>
    
    <!-- Dynamic date -->
	<script> 
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
