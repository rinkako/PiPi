<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="renderer" content="webkit">

    <title>MOA-值班登记</title>
    <?php $this->load->view('view_keyword'); ?>

    <link href="<?=base_url().'assets/css/bootstrap.min.css?v=3.4.0' ?>" rel="stylesheet">
    <link href="<?=base_url().'assets/font-awesome/css/font-awesome.css?v=4.3.0' ?>" rel="stylesheet">
    
    <link href="<?=base_url().'assets/js/plugins/layer/skin/layer.css' ?>" rel="stylesheet">
    
    <link href="<?=base_url().'assets/css/plugins/switchery/switchery.css' ?>" rel="stylesheet">
    
    <link href="<?=base_url().'assets/css/plugins/nouslider/nouislider.css' ?>" rel="stylesheet">
    <link href="<?=base_url().'assets/css/plugins/nouslider/nouislider.pips.css' ?>" rel="stylesheet">
    <link href="<?=base_url().'assets/css/plugins/nouslider/nouislider.tooltips.css' ?>" rel="stylesheet">
    
    <link href="<?=base_url().'assets/css/plugins/ionRangeSlider/ion.rangeSlider.css' ?>" rel="stylesheet">
    <link href="<?=base_url().'assets/css/plugins/ionRangeSlider/ion.rangeSlider.skinHTML5.css' ?>" rel="stylesheet">
    
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
                            <a href="homepage">MOA</a>
                        </li>
                        <li>
                            <a>工作记录</a>
                        </li>
                        <li>
                            <strong>值班</strong>
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
                                <h5>值班登记</h5>
                            	<div class="ibox-content">
                                	<div class="panel blank-panel">

                                    <div class="panel-heading">
                                        <div class="panel-options">
                                            <ul class="nav nav-tabs">
                                                <li class="active"><a data-toggle="tab" href="tabs_panels.html#base">值班</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="panel-body">
                                        <div class="tab-content">
                                            <div id="base" class="tab-pane active">
                                            	<div style="height:50px;">
                                            		<h5>签到：
                                            			<span><input type="checkbox" name="signin_onduty" id="onduty" class="js-switch" /></span>
                                            		</h5>
                                            	</div>
					                            <h5>值班时间：&nbsp;<small>请拖动绿条选择时间段</small></h5>
					                            <div class="ibox-content" style="margin-bottom: 0px; padding-bottom: 0px;">
					                                <div class="form-horizontal" id="onduty_form">
					                                    <div class="form-group"  style="height: 70px;">
					                                		<div id="range_slider" disabled=""></div>
					                                	</div>
					                                    <div class="hr-line-dashed"></div>
					                                    <div class="form-group">
					                                        <div class="col-sm-4 col-sm-offset-5">
					                                            <button id="submit_onduty" class="btn btn-primary" disabled="" type="submit" 
					                                            data-toggle="modal" data-target="#myModal">提交</button>
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
                    </div>
                </div>
            </div>
            <?php $this->load->view('view_footer')?>

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
    <script src="<?=base_url().'assets/js/onduty_in.js' ?>"></script>
    
    <!-- nav item active -->
	<script>
		$(document).ready(function () {
			$("#active-workrecord").addClass("active");
			$("#active-onduty").addClass("active");
			$("#mini").attr("href", "onduty#");
		});
	</script>

    <!-- Custom and plugin javascript -->
    <script src="<?=base_url().'assets/js/hplus.js?v=2.2.0' ?>"></script>
    <script src="<?=base_url().'assets/js/plugins/pace/pace.min.js' ?>"></script>
    
    <!-- Moment -->
    <script src="<?=base_url().'assets/js/plugins/moment/moment-with-locales.min.js' ?>"></script>
    
    <!-- IonRangeSlider -->
    <script src="<?=base_url().'assets/js/plugins/ionRangeSlider/ion.rangeSlider.min.js' ?>"></script>
    
    <!-- layer javascript -->
    <script src="<?=base_url().'assets/js/plugins/layer/layer.min.js' ?>"></script>
    <script>
        layer.use('extend/layer.ext.js'); //载入layer拓展模块
    </script>

    <script src="<?=base_url().'assets/js/demo/layer-demo.js' ?>"></script>
    
    <!-- Switchery -->
    <script src="<?=base_url().'assets/js/plugins/switchery/switchery.js' ?>"></script>
    
	<script> 
		$(document).ready(function () {

			/* ios switch */
			var elem = document.querySelector('.js-switch');
            var switchery = new Switchery(elem, {
                color: '#1AB394'
            });

            /* ionRangeSlider */
            $("#range_slider").ionRangeSlider({
            	min: +moment().subtract(6, "hours").format("X"),
                max: +moment().add(5, "hours").format("X"),
                from: +moment().subtract(2, "hours").format("X"),
                to: +moment().format("X"),
                type: "double",
                keyboard: true,
                keyboard_step: 1,
                grid: true,
                grid_num: 11,
                prettify: function (num) {
                	return moment(num, "X").format("HH:mm");
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
