<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="renderer" content="webkit">

    <title>MOA-个人主页</title>
    <?php $this->load->view('view_keyword'); ?>
    
    <link href="<?=base_url().'assets/css/bootstrap.min.css?v=3.4.0' ?>" rel="stylesheet">
    <link href="<?=base_url().'assets/font-awesome/css/font-awesome.min.css' ?>" rel="stylesheet">

    <!-- Morris -->
    <link href="<?=base_url().'assets/css/plugins/morris/morris-0.4.3.min.css' ?>" rel="stylesheet">

    <link href="<?=base_url().'assets/css/animate.css' ?>" rel="stylesheet">
    <link href="<?=base_url().'assets/css/style.css?v=2.2.0' ?>" rel="stylesheet">

</head>


<body class="fixed-navigation">
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                    <?php $this->load->view('view_nav'); ?>
            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg sidebar-content">
            <?php $this->load->view('view_header'); ?>
            <div class="sidebard-panel">
                <div>
                    <h4>消息 <span class="badge badge-info pull-right">16</span></h4>
                    <div class="feed-element">
                        <a href="index_3.html#" class="pull-left">
                            <img alt="image" class="img-circle" src="<?=base_url().'assets/images/a1.jpg' ?>" >
                        </a>
                        <div class="media-body">
                            跑步呐，最重要的是要有动力
                            <br>
                            <small class="text-muted">Today 4:21 pm</small>
                        </div>
                    </div>
                    <div class="feed-element">
                        <a href="index_3.html#" class="pull-left">
                            <img alt="image" class="img-circle" src="<?=base_url().'assets/images/a2.jpg' ?>">
                        </a>
                        <div class="media-body">
                            V信已经提前恢复，也算是个好消息吧
                            <br>
                            <small class="text-muted">Yesterday 2:45 pm</small>
                        </div>
                    </div>
                    <div class="feed-element">
                        <a href="index_3.html#" class="pull-left">
                            <img alt="image" class="img-circle" src="<?=base_url().'assets/images/a3.jpg' ?>">
                        </a>
                        <div class="media-body">
                            是你对不对
                            <br>
                            <small class="text-muted">Yesterday 1:10 pm</small>
                        </div>
                    </div>
                    <div class="feed-element">
                        <a href="index_3.html#" class="pull-left">
                            <img alt="image" class="img-circle" src="<?=base_url().'assets/images/a4.jpg' ?>">
                        </a>
                        <div class="media-body">
                            发布了一篇文章
                            <br>
                            <small class="text-muted">Monday 8:37 pm</small>
                        </div>
                    </div>
                </div>
                <div class="m-t-md">
                    <h4>统计</h4>
                    <p>
                        上半年数据统计
                    </p>
                    <div class="row m-t-sm">
                        <div class="col-md-6">
                            <span class="bar">5,3,9,6,5,9,7,3,5,2</span>
                            <h5><strong>169</strong> 文章</h5>
                        </div>
                        <div class="col-md-6">
                            <span class="line">5,3,9,6,5,9,7,3,5,2</span>
                            <h5><strong>28</strong> 订单</h5>
                        </div>
                    </div>
                </div>
                <div class="m-t-md">
                    <h4>讨论</h4>
                    <div>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <span class="badge badge-primary">16</span>
                                一般话题
                            </li>
                            <li class="list-group-item ">
                                <span class="badge badge-info">12</span>
                                热门话题
                            </li>
                            <li class="list-group-item">
                                <span class="badge badge-warning">7</span>
                                最新话题
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="wrapper wrapper-content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-content">
                                <div>
                                    <span class="pull-right text-right">
                                        <small>在过去销售额最高的地区： <strong>广东</strong></small>
                                            <br/>
                                            共销售：162,862
                                        </span>
                                    <h1 class="m-b-xs">$ 50,992</h1>
                                    <h3 class="font-bold no-margins">
                                            半年销售额
                                        </h3>
                                    <small>市场部</small>
                                </div>

                                <div class="flot-chart" style="height: 140px">
                                    <div class="flot-chart-content" id="flot-chart3"></div>
                                </div>

                                <div class="m-t-md">
                                    <small class="pull-right">
                                        <i class="fa fa-clock-o"> </i>
                                        最后更新：2014.11.11
                                    </small>
                                    <small>
                                       <strong>销售分析：</strong> 该值已随时间发生变化，上个月达到的水平超过50,000元。
                                   </small>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                
                
                <!-- Charactor information -->
                <div class="row">
                    <div class="col-lg-6">
                    
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>最新评论</h5>
                            </div>
                            <div class="ibox-content no-padding">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <p><a class="text-info" href="index_3.html#">@星探子</a> 我的目标就是想做一个跟你一样有责任感，有思想，有深度的新闻媒体从业人</p>
                                        <small class="block text-muted"><i class="fa fa-clock-o"></i> 1分钟前</small>
                                    </li>
                                    <li class="list-group-item">
                                        <p><a class="text-info" href="index_3.html#">@小七是</a> 其实自己一半的大学生活也基本上是和新闻为伍了～一篇小小的稿子也许只有5、6百字，可以却可以写1、2个小时。一场会议也许3个小时，睡一觉就过去了，可是却要端着相机站3个小时，害怕错过一个经典的镜头。新闻人，更辛苦。</p>
                                        <div class="text-center m">
                                            <span id="sparkline8"></span>
                                        </div>
                                        <small class="block text-muted"><i class="fa fa-clock-o"></i> 2天前</small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>时间轴</h5>
                            </div>

                            <div class="ibox-content timeline">

                                <div class="timeline-item">
                                    <div class="row">
                                        <div class="col-xs-3 date">
                                            <i class="fa fa-comments"></i>
                                            12:50
                                            <br>
                                            <small class="text-navy">讨论</small>
                                        </div>
                                        <div class="col-xs-7 content">
                                            <p class="m-b-xs"><strong>…………</strong>
                                            </p>
                                            <p>
                                                又是操蛋的一天
                                            </p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

                
                <!-- Chat box -->
                <div class="row">
                    <div class="col-lg-12">

                        <div class="ibox chat-view">

                            <div class="ibox-title">
                                <small class="pull-right text-muted">最新消息：2015-02-02 18:39:23</small>
                                评论区
                            </div>


                            <div class="ibox-content">

                                <div class="row">

                                    <div class="col-md-12 ">
                                        <div class="chat-discussion">

                                            <div class="chat-message">
                                                <img class="message-avatar" src="<?=base_url().'assets/images/a1.jpg' ?>" alt="">
                                                <div class="message">
                                                    <a class="message-author" href="chat_view.html#"> 颜文字君</a>
                                                    <span class="message-date"> 2015-02-02 18:39:23 </span>
                                                    <span class="message-content">
											H+ 是个好框架
                                            </span>
                                                </div>
                                            </div>
                                            <div class="chat-message">
                                                <img class="message-avatar" src="<?=base_url().'assets/images/a4.jpg' ?>" alt="">
                                                <div class="message">
                                                    <a class="message-author" href="chat_view.html#"> 林依晨Ariel </a>
                                                    <span class="message-date">  2015-02-02 11:12:36 </span>
                                                    <span class="message-content">
											jQuery表单验证插件 - 让表单验证变得更容易
                                            </span>
                                                </div>
                                            </div>
                                            <div class="chat-message">
                                                <img class="message-avatar" src="<?=base_url().'assets/images/a2.jpg' ?>" alt="">
                                                <div class="message">
                                                    <a class="message-author" href="chat_view.html#"> 谨斯里 </a>
                                                    <span class="message-date">  2015-02-02 11:12:36 </span>
                                                    <span class="message-content">
											验证日期格式(类似30/30/2008的格式,不验证日期准确性只验证格式
                                            </span>
                                                </div>
                                            </div>
                                            <div class="chat-message">
                                                <img class="message-avatar" src="<?=base_url().'assets/images/a5.jpg' ?>" alt="">
                                                <div class="message">
                                                    <a class="message-author" href="chat_view.html#"> 林依晨Ariel </a>
                                                    <span class="message-date">  2015-02-02 - 11:12:36 </span>
                                                    <span class="message-content">
											还有约79842492229个Bug需要修复
                                            </span>
                                                </div>
                                            </div>
                                            <div class="chat-message">
                                                <img class="message-avatar" src="<?=base_url().'assets/images/a6.jpg' ?>" alt="">
                                                <div class="message">
                                                    <a class="message-author" href="chat_view.html#"> 林依晨Ariel </a>
                                                    <span class="message-date">  2015-02-02 11:12:36 </span>
                                                    <span class="message-content">
											九部令人拍案叫绝的惊悚悬疑剧情佳作】如果你喜欢《迷雾》《致命ID》《电锯惊魂》《孤儿》《恐怖游轮》这些好片，那么接下来推荐的9部同类题材并同样出色的的电影，绝对不可错过哦~
                                                        
                                            </span>
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="chat-message-form">

                                            <div class="form-group">

                                                <textarea class="form-control message-input" name="message" placeholder="输入消息内容，按回车键发送"></textarea>
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

    <!-- Mainly scripts -->
    <script src="<?=base_url().'assets/js/jquery-2.1.1.min.js' ?>"></script>
    <script src="<?=base_url().'assets/js/bootstrap.min.js?v=3.4.0' ?>"></script>
    <script src="<?=base_url().'assets/js/plugins/metisMenu/jquery.metisMenu.js' ?>"></script>
    <script src="<?=base_url().'assets/js/plugins/slimscroll/jquery.slimscroll.min.js' ?>"></script>

    <!-- Flot -->
    <script src="<?=base_url().'assets/js/plugins/flot/jquery.flot.js' ?>"></script>
    <script src="<?=base_url().'assets/js/plugins/flot/jquery.flot.tooltip.min.js' ?>"></script>
    <script src="<?=base_url().'assets/js/plugins/flot/jquery.flot.spline.js' ?>"></script>
    <script src="<?=base_url().'assets/js/plugins/flot/jquery.flot.resize.js' ?>"></script>
    <script src="<?=base_url().'assets/js/plugins/flot/jquery.flot.pie.js' ?>"></script>
    <script src="<?=base_url().'assets/js/plugins/flot/jquery.flot.symbol.js' ?>"></script>
    <script src="<?=base_url().'assets/js/plugins/flot/curvedLines.js' ?>"></script>

    <!-- Peity -->
    <script src="<?=base_url().'assets/js/plugins/peity/jquery.peity.min.js' ?>"></script>
    <script src="<?=base_url().'assets/js/demo/peity-demo.js' ?>"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?=base_url().'assets/js/hplus.js?v=2.2.0' ?>"></script>
    <script src="<?=base_url().'assets/js/plugins/pace/pace.min.js' ?>"></script>

    <!-- jQuery UI -->
    <script src="<?=base_url().'assets/js/plugins/jquery-ui/jquery-ui.min.js' ?>"></script>

    <!-- Jvectormap -->
    <script src="<?=base_url().'assets/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js' ?>"></script>
    <script src="<?=base_url().'assets/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js' ?>"></script>

    <!-- EayPIE -->
    <script src="<?=base_url().'assets/js/plugins/easypiechart/jquery.easypiechart.js' ?>"></script>

    <!-- Sparkline -->
    <script src="<?=base_url().'assets/js/plugins/sparkline/jquery.sparkline.min.js' ?>"></script>

    <!-- Sparkline demo data  -->
    <script src="<?=base_url().'assets/js/demo/sparkline-demo.js' ?>"></script>

    <script>
        $(document).ready(function () {
            $('.chart').easyPieChart({
                barColor: '#f8ac59',
                //                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            $('.chart2').easyPieChart({
                barColor: '#1c84c6',
                //                scaleColor: false,
                scaleLength: 5,
                lineWidth: 4,
                size: 80
            });

            var d1 = [
                [1262304000000, 1],
                [1264982400000, 100],
                [1267401600000, 1],
                [1270080000000, 200],
                [1272672000000, 1],
                [1275350400000, 100],
                [1277942400000, 1],
                [1280620800000, 300]
            ];
            var d2 = [
                [1262304000000, 100],
                [1264982400000, 1],
                [1267401600000, 150],
                [1270080000000, 1],
                [1272672000000, 230],
                [1275350400000, 1],
                [1277942400000, 150],
                [1280620800000, 10]
            ];

            var data3 = [
                {
                    label: "Data 1",
                    data: d1,
                    color: '#23c6c8'
                },
                {
                    label: "Data 2",
                    data: d2,
                    color: '#1ab394'
                }
            ];
            $.plot($("#flot-chart3"), data3, {
                xaxis: {
                    tickDecimals: 0
                },
                series: {
                    lines: {
                        show: true,
                        fill: true,
                        fillColor: {
                            colors: [{
                                opacity: 1
                            }, {
                                opacity: 1
                            }]
                        },
                    },
                    curvedLines: {
                        active: true,
                        fit: true,
                        apply: true
                    },
                    points: {
                        width: 0.1,
                        show: false
                    },
                },
                grid: {
                    show: false,
                    borderWidth: 0
                },
                legend: {
                    show: false,
                }
            });


            var mapData = {
                "US": 298,
                "SA": 200,
                "DE": 220,
                "FR": 540,
                "CN": 120,
                "AU": 760,
                "BR": 550,
                "IN": 200,
                "GB": 120,
            };

            $('#world-map').vectorMap({
                map: 'world_mill_en',
                backgroundColor: "transparent",
                regionStyle: {
                    initial: {
                        fill: '#e4e4e4',
                        "fill-opacity": 0.9,
                        stroke: 'none',
                        "stroke-width": 0,
                        "stroke-opacity": 0
                    }
                },

                series: {
                    regions: [{
                        values: mapData,
                        scale: ["#1ab394", "#22d6b1"],
                        normalizeFunction: 'polynomial'
                    }]
                },
            });
        });
    </script>
    
    <!-- nav item active -->
	<script>
		$(document).ready(function () {
			$("#active-homepage").addClass("active");
		});
	</script>

</body>

</html>
