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
                            <a href="index.html">MOA</a>
                        </li>
                        <li>
                            <a>坐班日志</a>
                        </li>
                        <li>
                            <strong>发布</strong>
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
                                <h5>多媒体组长坐班日志 </h5>
                            </div>
                            <div class="ibox-content">
                                <form method="get" class="form-horizontal">
                                	<div class="form-group">
	                                	<div class="col-sm-3">
	                                    	<label class="col-sm-11 col-sm-offset-1 control-label">组别</label>
                                    	</div>
										<div class="col-sm-7">
										    <label class="radio-inline" style="font-size: 14px;">
										        <input type="radio" checked="" value="option1" id="optionsRadios1" name="optionsRadios"> A 组</label>
										    <label class="radio-inline" style="font-size: 14px;">
										        <input type="radio" value="option2" id="optionsRadios2" name="optionsRadios"> B 组</label>
										</div>
									</div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group">
                                    	<div class="col-sm-3">
                                    		</br>
                                    		</br>
	                                    	<label class="col-sm-11 col-sm-offset-1 control-label">早检情况</label>
                                    	</div>
										<div class="col-sm-7">
										    <textarea name="journal_morning" id="text_morning" class="form-control" placeholder="请输入文本" style="height: 100px;"> </textarea>
										</div>
									</div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group">
                                    	<div class="col-sm-3">
                                    		</br>
                                    		</br>
	                                    	<label class="col-sm-11 col-sm-offset-1 control-label">午检情况</label>
                                    	</div>
										<div class="col-sm-7">
										    <textarea name="journal_noon" id="text_noon" class="form-control" placeholder="请输入文本" style="height: 100px;"> </textarea>
										</div>
									</div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group">
                                    	<div class="col-sm-3">
                                    		</br>
                                    		</br>
	                                    	<label class="col-sm-11 col-sm-offset-1 control-label">晚检情况</label>
                                    	</div>
										<div class="col-sm-7">
										    <textarea name="journal_evening" id="text_evening" class="form-control" placeholder="请输入文本" style="height: 100px;"> </textarea>
										</div>
									</div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group">
	                                    <div class="col-sm-3">
                                    		</br>
                                    		</br>
                                    		</br>
	                                    	<label class="col-sm-11 col-sm-offset-1 control-label">优秀助理</label>
                                    	</div>
										<div class="col-sm-7">
											<div class="input-group">
												<select id="select_best" data-placeholder="请选择优秀助理" class="chosen-select" multiple style="width:594px;" tabindex="4">
												<?php for ($i = 0; $i < count($wid_list); $i++) { ?>
													<option value="<?php echo $wid_list[$i]; ?>" hassubinfo="true"><?php echo $name_list[$i]; ?></option>
												<?php } ?>
	                                        </select>
											</div>
											<div>
											    <textarea name="journal_best" id="text_best" class="form-control" placeholder="请输入文本" style="height: 100px;"> </textarea>
											</div>
                                    	</div>
									</div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group">
	                                    <div class="col-sm-3">
                                    		</br>
                                    		</br>
                                    		</br>
	                                    	<label class="col-sm-11 col-sm-offset-1 control-label">异常助理</label>
                                    	</div>
										<div class="col-sm-7">
											<div class="input-group">
												<select id="select_bad" data-placeholder="请选择异常助理" class="chosen-select" multiple style="width:594px;" tabindex="4">
	                                            <?php for ($i = 0; $i < count($wid_list); $i++) { ?>
													<option value="<?php echo $wid_list[$i]; ?>" hassubinfo="true"><?php echo $name_list[$i]; ?></option>
												<?php } ?>
	                                        </select>
											</div>
											<div>
											    <textarea name="journal_bad" id="text_bad" class="form-control" placeholder="请输入文本" style="height: 100px;"> </textarea>
											</div>
                                    	</div>
									</div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group">
	                                    <div class="col-sm-3">
                                    		</br>
                                    		</br>
	                                    	<label class="col-sm-11 col-sm-offset-1 control-label">总结</label>
                                    	</div>
										<div class="col-sm-7">
										    <textarea name="journal_summary" id="text_summary" class="form-control" placeholder="请输入文本" style="height: 100px;"> </textarea>
										</div>
									</div>
                                    <div class="hr-line-dashed"></div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-4 col-sm-offset-5">
                                            <button class="btn btn-primary" type="submit" id="submit_journal" 
                                            data-toggle="modal" data-target="#myModal">发布</button>
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
    <script src="<?=base_url().'assets/js/journal_in.js' ?>"></script>
    
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
    
    <!-- Chosen -->
    <script src="<?=base_url().'assets/js/plugins/chosen/chosen.jquery.js' ?>"></script>
    
    <!-- simditor -->
    <script type="text/javascript" src="<?=base_url().'assets/js/plugins/simditor/module.js' ?>"></script>
    <script type="text/javascript" src="<?=base_url().'assets/js/plugins/simditor/uploader.js' ?>"></script>
    <script type="text/javascript" src="<?=base_url().'assets/js/plugins/simditor/hotkeys.js' ?>"></script>
    <script type="text/javascript" src="<?=base_url().'assets/js/plugins/simditor/simditor.js' ?>"></script>
    
    <!-- SUMMERNOTE -->
    <script src="<?=base_url().'assets/js/plugins/summernote/summernote.min.js' ?>"></script>
    <script src="<?=base_url().'assets/js/plugins/summernote/summernote-zh-CN.js' ?>"></script>
    
    <script>
    
        $(document).ready(function () {
            /* Checkbox */
            $('#optionsRadios1').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });

            $('#optionsRadios2').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
            
            
        });

        /* Chosen */
        var config = {
                '.chosen-select': {},
                '.chosen-select-deselect': {
                    allow_single_deselect: true
                },
                '.chosen-select-no-single': {
                    disable_search_threshold: 10
                },
                '.chosen-select-no-results': {
                    no_results_text: 'Oops, nothing found!'
                },
                '.chosen-select-width': {
                    width: "95%"
                }
            }
        for (var selector in config) {
            $(selector).chosen(config[selector]);
        }
        
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
