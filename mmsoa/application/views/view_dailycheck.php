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

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <?php $this->load->view('view_nav'); ?>
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="layer.html#"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                            <div class="form-group">
                                <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message"><a href="index.html" title="返回首页"><i class="fa fa-home"></i></a>欢迎使用H+后台主题</span>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="index.html#">
                                <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                            </a>
                            <ul class="dropdown-menu dropdown-messages">
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/a7.jpg">
                                        </a>
                                        <div class="media-body">
                                            <small class="pull-right">46小时前</small>
                                            <strong>小四</strong> 项目已处理完结
                                            <br>
                                            <small class="text-muted">3天前 2014.11.8</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/a4.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy">25小时前</small>
                                            <strong>国民岳父</strong> 这是一条测试信息
                                            <br>
                                            <small class="text-muted">昨天</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a href="mailbox.html">
                                            <i class="fa fa-envelope"></i>  <strong> 查看所有消息</strong>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="index.html#">
                                <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                            </a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <li>
                                    <a href="mailbox.html">
                                        <div>
                                            <i class="fa fa-envelope fa-fw"></i> 您有16条未读消息
                                            <span class="pull-right text-muted small">4分钟前</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="profile.html">
                                        <div>
                                            <i class="fa fa-qq fa-fw"></i> 3条新回复
                                            <span class="pull-right text-muted small">12分钟钱</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a href="notifications.html">
                                            <strong>查看所有 </strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>


                        <li>
                            <a href="login.html">
                                <i class="fa fa-sign-out"></i> 退出
                            </a>
                        </li>
                    </ul>

                </nav>
            </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>web弹层组件layer</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="index.html">主页</a>
                        </li>
                        <li>
                            <a>UI元素</a>
                        </li>
                        <li>
                            <strong>web弹层组件layer</strong>
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
                                <h5>layer API文档</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                    <a class="dropdown-toggle" data-toggle="dropdown" href="tabs_panels.html#">
                                        <i class="fa fa-wrench"></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-user">
                                        <li><a href="tabs_panels.html#">选项1</a>
                                        </li>
                                        <li><a href="tabs_panels.html#">选项2</a>
                                        </li>
                                    </ul>
                                    <a class="close-link">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </div>
                            </div>
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
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <td style="width:20%;">键: 值</td>
                                                            <td style="width:80%;">描述</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr style="background:##3E3F34;">
                                                            <td colspan="2" style="padding:10px 20px;">下表的属性都是默认值，您可在调用时按需重新配置，他们可帮助你实现各式各样的风格。如是调用： $.layer({键: 值, 键: 值, …});</td>
                                                        </tr>
                                                        <tr>
                                                            <td>type: 0</td>
                                                            <td>层的类型。0：信息框（默认），1：页面层，2：iframe层，3：加载层，4：tips层。
                                                                <p>此为重要参数，不同类型层的总开关，若为type:0则不需要配置，其它类型层在调用时必须设置type。</p>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>title: '信息'</td>
                                                            <td>
                                                                控制默认标题栏。
                                                                <br>如想自定义标题样式，可以 title: ['标题', 'background:#c00;'] //第二个参数可书写任意css
                                                                <br>如不想显示标题栏，配置title: false 即可
                                                            </td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div id="integrated" class="tab-pane">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <td style="width:10%;">方法名</td>
                                                            <td style="width:90%;">描述</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>$.layer({基础参数})</td>
                                                            <td>
                                                                核心接口，参数是一个对象，对象属性参见基础参数。
                                                                <br>诸如layer.alert/layer.confirm/layer.msg/layer.tips等皆为$.layer()的二次封装。
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>layer.v</td>
                                                            <td>获取layer版本号。</td>
                                                        </tr>
                                                        <tr>
                                                            <td>layer.alert(msg, icon, fn)</td>
                                                            <td>
                                                                对单按钮信息框的重新封装
                                                                <br>参数分别为: 提示内容, 图标类型(-1到16的选择), 回调函数或标题
                                                                <br>如：layer.alert('你好layer', 9);

                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div id="expand" class="tab-pane">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <td style="width:25%;">方法名</td>
                                                            <td style="width:75%;">描述</td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr style="background:##3E3F34;">
                                                            <td colspan="2" style="padding:20px;">
                                                                目前拓展方法主要是指layer.ext.js提供的拓展类，您可以按照自己的需求选择引入，同样的，不需要引入css，只需要执行 layer.use('extend/layer.ext.js') 即可，关于layer.use的使用，请看集成方法的介绍;
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>layer.ext = function(){}</td>
                                                            <td>
                                                                首次加载layer.ext.js模块完毕的回调方法。
                                                                <br>如果页面一加载即执行拓展层，需用到此方法。
                                                                <br>如：
                                                                <pre>layer.use('extend/layer.ext.js', function(){
        layer.ext = function(){
        layer.prompt();
    }
})</pre>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            
                                        </div>

                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="pull-right">
                    By：<a href="http://www.zi-han.net" target="_blank">zihan's blog</a>
                </div>
                <div>
                    <strong>Copyright</strong> H+ &copy; 2014
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

    <!-- Custom and plugin javascript -->
    <script src="<?=base_url().'assets/js/hplus.js?v=2.2.0' ?>"></script>
    <script src="<?=base_url().'assets/js/plugins/pace/pace.min.js' ?>"></script>

    <!-- layer javascript -->
    <script src="<?=base_url().'assets/js/plugins/layer/layer.min.js' ?>"></script>
    <script>
        layer.use('extend/layer.ext.js'); //载入layer拓展模块
    </script>

    <script src="<?=base_url().'assets/js/demo/layer-demo.js' ?>"></script>

</body>

</html>
