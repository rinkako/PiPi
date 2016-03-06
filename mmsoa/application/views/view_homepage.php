<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><meta name="renderer" content="webkit">

    <title>MOA-个人主页</title>
    <?php $this->load->view('view_keyword'); ?>
    
    <link href="<?=base_url().'assets/images/moa.ico' ?>" rel="shortcut icon">
    
    <link href="<?=base_url().'assets/css/bootstrap.min.css?v=3.4.0' ?>" rel="stylesheet">
    <link href="<?=base_url().'assets/font-awesome/css/font-awesome.min.css' ?>" rel="stylesheet">

    <!-- Morris -->
    <link href="<?=base_url().'assets/css/plugins/morris/morris-0.4.3.min.css' ?>" rel="stylesheet">

    <link href="<?=base_url().'assets/css/animate.css' ?>" rel="stylesheet">
    <link href="<?=base_url().'assets/css/style.min.css?v=4.0.0' ?>" rel="stylesheet"><base target="_blank">
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
            /<div class="sidebard-panel">
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
                <!-- 评论区 -->
                <div class="row">
	                <div class="col-sm-12">
	                <div class="ibox-content">
	                <div class="full-height-scroll">
		                <div class="social-feed-separated">
		
		                    <div class="social-avatar">
		                        <a href="">
		                            <img alt="image" src="<?=base_url().'assets/images/a5.jpg' ?>">
		                        </a>
		                    </div>
		
		                    <div class="social-feed-box">
		                        <div class="social-avatar">
		                            <a href="#">
		                                        尤小右
		                                    </a>
		                            <small class="text-muted">8月18日</small>
		                        </div>
		                        <div class="social-body">
		                            <p>
		                                新技术新概念很多，而且有了新定律：前端开发每18月会难一倍
		                            </p>
		                            <img src="<?=base_url().'assets/images/p2.jpg' ?>" class="img-responsive">
		                            <div class="btn-group">
		                                <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> 赞</button>
		                                <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> 评论</button>
		                            </div>
		                        </div>
		                        <div class="social-footer">
		                            <div class="social-comment">
		                                <a href="" class="pull-left">
		                                    <img alt="image" src="<?=base_url().'assets/images/a3.jpg' ?>">
		                                </a>
		                                <div class="media-body">
		                                    <a href="#">
		                                                尤小右
		                                            </a> 图表展示、数据可视化是前端领域一个麻烦且重要的事情，这里推荐了11个JS图表库，各取所需吧
		                                    <br/>
		                                    <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26</a> -
		                                    <small class="text-muted">8月18日</small>
		                                </div>
		                            </div>
		
		                            <div class="social-comment">
		                                <a href="" class="pull-left">
		                                    <img alt="image" src="<?=base_url().'assets/images/a4.jpg' ?>">
		                                </a>
		                                <div class="media-body">
		                                    <a href="#">
		                                                尤小右
		                                            </a> 看上去不错，如能结合乐曲播放有个动效就更酷了 :z
		                                    <br/>
		                                    <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 11</a> -
		                                    <small class="text-muted">8月18日</small>
		                                </div>
		
		                                <div class="social-comment">
		                                    <a href="" class="pull-left">
		                                        <img alt="image" src="<?=base_url().'assets/images/a7.jpg' ?>">
		                                    </a>
		                                    <div class="media-body">
		                                        <a href="#">
		                                                    尤小右
		                                                </a> 用checkbox + CSS 也能玩出来很多花样，来看看这些有趣的例子吧！
		                                        <br/>
		                                        <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 11</a> -
		                                        <small class="text-muted">8月18日</small>
		                                    </div>
		                                </div>
		
		                                <div class="social-comment">
		                                    <a href="" class="pull-left">
		                                        <img alt="image" src="<?=base_url().'assets/images/a8.jpg' ?>">
		                                    </a>
		                                    <div class="media-body">
		                                        <textarea class="form-control" placeholder="填写评论..."></textarea>
		                                    </div>
		                                </div>
		
		                            </div>
		
		                            <div class="social-comment">
		                                <a href="" class="pull-left">
		                                    <img alt="image" src="<?=base_url().'assets/images/a4.jpg' ?>">
		                                </a>
		                                <div class="media-body">
		                                    <a href="#">
		                                                尤小右
		                                            </a> 有情怀的工程师，赞。
		                                    <br/>
		                                    <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26</a> -
		                                    <small class="text-muted">8月18日</small>
		                                </div>
		                            </div>
		
		                            <div class="social-comment">
		                                <a href="" class="pull-left">
		                                    <img alt="image" src="<?=base_url().'assets/images/a7.jpg' ?>">
		                                </a>
		                                <div class="media-body">
		                                    <a href="#">
		                                                尤小右
		                                            </a> 几位同学中奖，请将你们的收获地址电话姓名私信给我哦~
		                                    <br/>
		                                    <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26</a> -
		                                    <small class="text-muted">8月18日</small>
		                                </div>
		                            </div>
		
		                            <div class="social-comment">
		                                <a href="" class="pull-left">
		                                    <img alt="image" src="<?=base_url().'assets/images/a3.jpg' ?>">
		                                </a>
		                                <div class="media-body">
		                                    <textarea class="form-control" placeholder="填写评论..."></textarea>
		                                </div>
		                            </div>
		
		                        </div>
		
		                    </div>
		
		                </div>
		
		                <div class="social-feed-separated">
		
		                    <div class="social-avatar">
		                        <a href="">
		                            <img alt="image" src="<?=base_url().'assets/images/a8.jpg' ?>">
		                        </a>
		                    </div>
		
		                    <div class="social-feed-box">
		                        <div class="social-avatar">
		                            <a href="#">
		                                        尤小右
		                                    </a>
		                            <small class="text-muted">8月18日</small>
		                        </div>
		                        <div class="social-body">
		                            <p>
		                                这次带来【5本 《你不知道的JavaScript（上卷）》】。在本书中，我们要直面当前JavaScript开发者不求甚解的大趋势，深入理解语言内部的机制。本书既适合JavaScript语言初学者阅读，又适合经验丰富的JavaScript开发人员深入学习。关注本博并转发，即可参与抽奖，8月17日开奖，感谢@图灵教育
		                            </p>
		                            <div class="btn-group">
		                                <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> 赞</button>
		                                <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> 评论</button>
		                            </div>
		                        </div>
		                        <div class="social-footer">
		                            <div class="social-comment">
		                                <a href="" class="pull-left">
		                                    <img alt="image" src="<?=base_url().'assets/images/a3.jpg' ?>">
		                                </a>
		                                <div class="media-body">
		                                    <a href="#">
		                                                尤小右
		                                            </a> 是这样的，不过要解决的问题还是那些，只是方法越来越简单越来越强大。
		                                    <br/>
		                                    <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26</a> -
		                                    <small class="text-muted">8月18日</small>
		                                </div>
		                            </div>
		
		                            <div class="social-comment">
		                                <a href="" class="pull-left">
		                                    <img alt="image" src="<?=base_url().'assets/images/a1.jpg' ?>">
		                                </a>
		                                <div class="media-body">
		                                    <a href="#">
		                                                尤小右
		                                            </a> #粉丝福利#又来了，这次带来【5本 《MEAN Web开发》】MEAN是流行的现代Web开发工具的集合，包括MongoDB、Express、AngularJS和Node.js，为现代Web开发提供了一种创新性的方法。 关注本博并转发，即可参与抽奖
		                                    <br/>
		                                    <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 11</a> -
		                                    <small class="text-muted">8月18日</small>
		                                </div>
		                            </div>
		
		                            <div class="social-comment">
		                                <a href="" class="pull-left">
		                                    <img alt="image" src="<?=base_url().'assets/images/a4.jpg' ?>">
		                                </a>
		                                <div class="media-body">
		                                    <textarea class="form-control" placeholder="填写评论..."></textarea>
		                                </div>
		                            </div>
		
		                        </div>
		
		                    </div>
		
		                </div>
		
		                <div class="social-feed-separated">
		
		                    <div class="social-avatar">
		                        <a href="">
		                            <img alt="image" src="<?=base_url().'assets/images/a2.jpg' ?>">
		                        </a>
		                    </div>
		
		                    <div class="social-feed-box">
		                        <div class="social-avatar">
		                            <a href="#">
		                                        尤小右
		                                    </a>
		                            <small class="text-muted">8月18日 12:48 来自 微博 weibo.com</small>
		                        </div>
		                        <div class="social-body">
		                            <p>
		                                我在 GitHub 上为《CSS Secrets》这本书的中文版建了一个公开项目，我会把所有的样章、勘误、注解发到这里，大家对于这本书的疑问、讨论、反馈也请在这里发
		                            </p>
		                            <div class="btn-group">
		                                <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> 赞</button>
		                                <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> 评论</button>
		                            </div>
		                        </div>
		                        <div class="social-footer">
		
		                            <div class="social-comment">
		                                <a href="" class="pull-left">
		                                    <img alt="image" src="<?=base_url().'assets/images/a4.jpg' ?>">
		                                </a>
		                                <div class="media-body">
		                                    <textarea class="form-control" placeholder="填写评论..."></textarea>
		                                </div>
		                            </div>
		
		                        </div>
		
		                    </div>
		                    </div>
		
		                </div>
					</div>
		            </div>
	         	</div>
	         	<!-- 评论区 -->

            </div>
            
            <?php $this->load->view('view_footer')?>

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

    <!-- jQuery UI -->
    <script src="<?=base_url().'assets/js/plugins/jquery-ui/jquery-ui.min.js' ?>"></script>
    
    <script src="<?=base_url().'assets/js/content.min.js?v=1.0.0' ?>"></script>
    
    <!-- nav item active -->
	<script>
		$(document).ready(function () {
			$("#active-homepage").addClass("active");
		});
	</script>
	
	<script>
        $(function(){$(".full-height-scroll").slimScroll({height:"100%"})});
    </script>

</body>

</html>
