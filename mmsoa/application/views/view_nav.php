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
                                <li><a href="<?php echo site_url('Backend/personaldata'); ?>">个人资料</a>
                                </li>
                                <li><a href="<?php echo site_url('Backend/changepassword'); ?>">修改密码</a>
                                </li>
                                <li><a href="contacts.html">联系我们</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="<?php echo site_url('Login'); ?>">安全退出</a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            MOA
                        </div>

                    </li>
					<li id="active-homepage">
                        <a class="J_menuItem" href="<?php echo site_url('Backend/homepage'); ?>"><i class="fa fa-home"></i> <span class="nav-label">我的主页</span><span class="label label-danger pull-right">2.0</span></a>
                    </li>  
                    <li id="active-workrecord">
                        <a href="homepage#"><i class="fa fa-edit"></i> <span class="nav-label"> 工作记录</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li id="active-dailycheck"><a class="J_menuItem" href="<?php echo site_url('Backend/dailyCheck'); ?>">常检</a>
                            </li>
                            <li id="active-weeklycheck"><a class="J_menuItem" href="<?php echo site_url('Backend/weeklyCheck'); ?>">周检</a>
                            </li>
                            <li id="active-onduty"><a class="J_menuItem" href="<?php echo site_url('Backend/onDuty'); ?>">值班</a>
                            </li>
                            <li id="active-filming"><a class="J_menuItem" href="<?php echo site_url('Backend/filming'); ?>">拍摄</a>
                            </li>
                        </ul>
                    </li>
                    <li id="active-workReview">
                        <a href="homepage#"><i class="fa fa-calendar-check-o"></i> <span class="nav-label"> 工作审查</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li id="active-dailyReview"><a href="<?php echo site_url('Backend/dailyReview'); ?>">常检</a>
                            </li>
                            <li id="active-weeklyReview"><a href="<?php echo site_url('Backend/weeklyReview'); ?>">周检</a>
                            </li>
                            <li id="active-dutyReview"><a href="<?php echo site_url('Backend/dutyReview'); ?>">值班</a>
                            </li>
                        </ul>
                    </li>
                    <li id="active-journal">
                        <a href="homepage#"><i class="fa fa-file-text"></i> <span class="nav-label"> 坐班日志</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li id="active-writeJournal"><a href="<?php echo site_url('Backend/writeJournal'); ?>">发布</a>
                            </li>
                            <li id="active-readJournal"><a href="<?php echo site_url('Backend/readJournal'); ?>">查看</a>
                            </li>
                        </ul>
                    </li>
                    <li id="active-userManagement">
                        <a href="homepage#"><i class="fa fa-user"></i> <span class="nav-label"> 用户管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li id="active-addUser"><a href="<?php echo site_url('Backend/addUser'); ?>">添加</a>
                            </li>
                            <li id="active-searchUser"><a href="<?php echo site_url('Backend/searchUser'); ?>">查看</a>
                            </li>
                        </ul>
                    </li>
                    <li id="active-timeStatistics">
                        <a href="homepage#"><i class="fa fa-rmb"></i> <span class="nav-label"> &nbsp;工时统计</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li id="active-personal"><a href="<?php echo site_url('Backend/perWorkingTime'); ?>">个人<span class="label label-warning pull-right">26</span></a>
                            </li>
                            <li id="active-allmembers"><a href="<?php echo site_url('Backend/allWorkingTime'); ?>">全员</a>
                            </li>
                        </ul>
                    </li>
                    <li id="active-scheduleManagement">
                        <a href="homepage#"><i class="fa fa-calendar"></i> <span class="nav-label"> 值班安排</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li id="active-dutySignUp"><a href="<?php echo site_url('Duty_arrange/dutySignUp'); ?>">报名</a>
                            </li>
                            <li id="active-dutyArrange"><a href="<?php echo site_url('Duty_arrange/dutyArrange'); ?>">排班</a>
                            </li>
                            <li id="active-dutySchedule"><a href="<?php echo site_url('Duty_arrange/dutySchedule'); ?>">值班表</a>
                            </li>
                        </ul>
                    </li>
                </ul>