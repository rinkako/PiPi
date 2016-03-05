<?php
	// If the session vars aren't set, try to set them with a cookie
	if (!isset($_SESSION['user_id'])) {
		if (isset($_COOKIE['user_id']) && isset($_COOKIE['username'])) {
      	$_SESSION['user_id'] = $_COOKIE['user_id'];
      	$_SESSION['username'] = $_COOKIE['username'];
    	}
  	}
  
//   	// Make sure the user is logged in before going any further.
//   	if (!isset($_SESSION['user_id'])) {
//   		echo '<p class="login">Please <a href="../login">log in</a> to access this page.</p>';
//   		// $this->load->view('view_login');
//   		exit();
//   	}
?>

				<ul class="nav" id="side-menu">
					<li class="nav-header">

                        <div class="dropdown profile-element">
                        	<span>
                            	<img alt="image" class="img-circle" src="<?=base_url().'assets/images/profile_small.jpg' ?>" />
                            </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
                                <span class="clear">
                                	<span class="block m-t-xs"> <strong class="font-bold"><?php echo $_SESSION['name']; ?>  </strong><b class="caret"></b></span>
                                	<span class="text-muted text-xs block"><?php echo $_SESSION['level_name']; ?></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="personaldata">个人资料</a>
                                </li>
                                <li><a href="changepassword">修改密码</a>
                                </li>
                                <li><a href="contacts.html">联系我们</a>
                                </li>
                                <li><a href="mailbox.html">信箱</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="../Login">安全退出</a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            MOA
                        </div>

                    </li>
					<li id="active-homepage">
                        <a class="J_menuItem" href="homepage"><i class="fa fa-home"></i> <span class="nav-label">个人主页</span><span class="label label-danger pull-right">2.0</span></a>
                    </li>  
                    <li id="active-workrecord">
                        <a href="homepage#"><i class="fa fa-edit"></i> <span class="nav-label">工作记录</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li id="active-dailycheck"><a class="J_menuItem" href="dailyCheck">常检</a>
                            </li>
                            <li id="active-weeklycheck"><a class="J_menuItem" href="weeklyCheck">周检</a>
                            </li>
                            <li id="active-onduty"><a class="J_menuItem" href="onDuty">值班</a>
                            </li>
                            <li id="active-filming"><a class="J_menuItem" href="filming">拍摄</a>
                            </li>
                        </ul>
                    </li>
                    <li id="active-workReview">
                        <a href="homepage#"><i class="fa fa-table"></i> <span class="nav-label">工作审查</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li id="active-dailyReview"><a href="dailyReview">常检</a>
                            </li>
                            <li id="active-weeklyReview"><a href="weeklyReview">周检</a>
                            </li>
                            <li id="active-dutyReview"><a href="dutyReview">值班</a>
                            </li>
                        </ul>
                    </li>
                    <li id="active-journal">
                        <a href="homepage#"><i class="fa fa-file-text"></i> <span class="nav-label">坐班日志</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li id="active-writeJournal"><a href="writeJournal">发布</a>
                            </li>
                            <li id="active-readJournal"><a href="readJournal">查看</a>
                            </li>
                        </ul>
                    </li>
                    <li id="active-userManagement">
                        <a href="homepage#"><i class="fa fa-user"></i> <span class="nav-label">用户管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li id="active-addUser"><a href="addUser">添加</a>
                            </li>
                            <li id="active-searchUser"><a href="searchUser">查看</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="active-timeStatistics"><i class="fa fa-rmb"></i> <span class="nav-label">工时统计</span><span class="label label-warning pull-right">16</span></a>
                        <ul class="nav nav-second-level">
                            <li id="active-personal"><a href="perWorkingTime">个人</a>
                            </li>
                            <li id="active-allmembers"><a href="allWorkingTime">全员</a>
                        </ul>
                    </li>
                <!--
                    <li>
                        <a href="widgets.html"><i class="fa fa-flask"></i> <span class="nav-label">小工具</span></a>
                    </li>
                    <li>
                        <a href="index.html#"><i class="fa fa-edit"></i> <span class="nav-label">表单</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="form_basic.html">基本表单</a>
                            </li>
                            <li><a href="form_validate.html">表单验证</a>
                            </li>
                            <li><a href="form_advanced.html">高级插件</a>
                            </li>
                            <li><a href="form_wizard.html">步骤条</a>
                            </li>
                            <li><a href="form_webuploader.html">百度WebUploader</a>
                            </li>
                            <li><a href="form_file_upload.html">文件上传</a>
                            </li>
                            <li><a href="form_editors.html">富文本编辑器</a>
                            </li>
                            <li><a href="form_simditor.html">simditor</a>
                            </li>
                            <li><a href="form_avatar.html">头像裁剪上传</a>
                            </li>
                            <li><a href="layerdate.html">日期选择器layerDate</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html#"><i class="fa fa-desktop"></i> <span class="nav-label">页面</span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="contacts.html">联系人</a>
                            </li>
                            <li><a href="profile.html">个人资料</a>
                            </li>
                            <li><a href="projects.html">项目</a>
                            </li>
                            <li><a href="project_detail.html">项目详情</a>
                            </li>
                            <li><a href="file_manager.html">文件管理器</a>
                            </li>
                            <li><a href="calendar.html">日历</a>
                            </li>
                            <li><a href="faq.html">帮助中心</a>
                            </li>
                            <li><a href="timeline.html">时间轴</a>
                            </li>
                            <li><a href="pin_board.html">标签墙</a>
                            </li>
                            <li><a href="invoice.html">单据</a>
                            </li>
                            <li><a href="login.html">登录</a>
                            </li>
                            <li><a href="register.html">注册</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html#"><i class="fa fa-files-o"></i> <span class="nav-label">其他页面</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="search_results.html">搜索结果</a>
                            </li>
                            <li><a href="lockscreen.html">登录超时</a>
                            </li>
                            <li><a href="404.html">404页面</a>
                            </li>
                            <li><a href="500.html">500页面</a>
                            </li>
                            <li><a href="empty_page.html">空白页</a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a href="index.html#"><i class="fa fa-flask"></i> <span class="nav-label">UI元素</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="typography.html">排版</a>
                            </li>
                            <li><a href="icons.html">字体图标</a>
                            </li>
                            <li><a href="iconfont.html">阿里巴巴矢量图标库</a>
                            </li>
                            <li><a href="draggable_panels.html">拖动面板</a>
                            </li>
                            <li><a href="buttons.html">按钮</a>
                            </li>
                            <li><a href="tabs_panels.html">选项卡 & 面板</a>
                            </li>
                            <li><a href="notifications.html">通知 & 提示</a>
                            </li>
                            <li><a href="badges_labels.html">徽章，标签，进度条</a>
                            </li>
                            <li><a href="layer.html">Web弹层组件layer</a>
                            </li>
                            <li><a href="tree_view.html">树形视图</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="grid_options.html"><i class="fa fa-laptop"></i> <span class="nav-label">栅格</span></a>
                    </li>
                    <li>
                        <a href="index.html#"><i class="fa fa-table"></i> <span class="nav-label">表格</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="table_basic.html">基本表格</a>
                            </li>
                            <li><a href="table_data_tables.html">数据表格(DataTables)</a>
                            </li>
                            <li><a href="table_jqgrid.html">jqGrid</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="index.html#"><i class="fa fa-picture-o"></i> <span class="nav-label">图库</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="basic_gallery.html">基本图库</a>
                            </li>
                            <li><a href="carousel.html">图片切换</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="index.html#"><i class="fa fa-sitemap"></i> <span class="nav-label">菜单 </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="index.html#">三级菜单 <span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="index.html#">三级菜单 01</a>
                                    </li>
                                    <li>
                                        <a href="index.html#">三级菜单 01</a>
                                    </li>
                                    <li>
                                        <a href="index.html#">三级菜单 01</a>
                                    </li>

                                </ul>
                            </li>
                            <li><a href="index.html#">二级菜单</a>
                            </li>
                            <li>
                                <a href="index.html#">二级菜单</a>
                            </li>
                            <li>
                                <a href="index.html#">二级菜单</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="webim.html"><i class="fa fa-comments"></i> <span class="nav-label">即时通讯</span><span class="label label-danger pull-right">New</span></a>
                    </li>
                    <li>
                        <a href="css_animation.html"><i class="fa fa-magic"></i> <span class="nav-label">CSS动画</span></a>
                    </li>
                    <li>
                        <a href="index.html#"><i class="fa fa-cutlery"></i> <span class="nav-label">工具 </span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="form_builder.html">表单构建器</a>
                            </li>
                        </ul>
                    </li>
-->
                </ul>