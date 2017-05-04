<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>个人介绍</title>
    <style>
        .green {
            background: #2ecc71 none repeat scroll 0 0;
        }
        .red {
            background: #dd4814 none repeat scroll 0 0;
        }
        .orange {
            background: orange none repeat scroll 0 0;
        }
        .cbox {
            color: #fff;
            margin-bottom: 30px;
            padding: 50px;
        }
        .footer {
            background: #ccc none repeat scroll 0 0;
            color: #fff;
            margin: 30px 0;
            padding: 50px;
        }
        .bbox {
            border: 1px solid #dfdfdf;
            border-radius: 5px;
            margin-bottom: 30px;
            padding: 50px;
        }
    </style>
    <!-- Bootstrap -->
    <link href="/mali/Public/Style/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <!--引用公共代码-->
    <!--这个是导航条-->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/mali/index.php/Home/index/index">首页</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/mali/index.php/Home/MyFootPrint/index/">我的足迹 <span class="sr-only">(current)</span></a></li>
                <li><a href="/mali/index.php/Home/index/myGame">我的游戏</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">开发工具<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">phpStrom软件</a></li>
                        <li><a href="#">xshell和xftp</a></li>
                        <li><a href="#">...</a></li>
                        <li role="separator" class="divider">...</li>
                        <li><a href="#">...</a></li>
                        <li role="separator" class="divider">...</li>
                        <li><a href="#">...</a></li>
                    </ul>
                </li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="功能暂时无法实现">
                </div>
                <button type="submit" class="btn btn-default">查找</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/mali/index.php/Home/index/PersonalCenter">个人介绍</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">更多选项 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="./login.html">登录ro注册</a></li>
                        <li><a href="#">退出</a></li>
                        <li><a href="#">给我留言</a></li>
                        <li role="separator" class="divider">查看所有的留言</li>
                        <li><a href="#">其他</a></li>
                        <li><a href="/mali/index.php/Admin">转入后台</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
    <div class="row cvheader">
        <div class="col-lg-7 col-md-7 col-xs-12">
            <!--  添加颜色//-->
            <h1 class="text-primary">马 黎</h1>
            <!--  添加图标 //-->
            <p><span class="glyphicon glyphicon-paperclip"></span> 后端开发工程师</p>
        </div>

        <div class="col-lg-3 col-md-3 col-xs-12">
            <div class="row">

                <div class="col-lg-3 col-md-3 col-xs-3">
                    <h4 class="address text-center" data-original-title="" title="">联系</h4>
                </div>

                <div class="col-lg-9 col-md-9 col-xs-9 pull-right">
                    <p><span class="glyphicon glyphicon-envelope"></span> 马 黎</p>
                    <p><span class="glyphicon glyphicon-earphone"></span> 156152379**</p>
                    <p><span class="glyphicon glyphicon-road"></span> 山东****</p>
                </div>

            </div>
        </div>

        <div class="col-lg-2 col-md-2 col-xs-12">
            <p>
                <!-- 这里定义图片为响应式，并且添加圆角效果，以便保证图片在不同设备上都可以完美显示 //-->
                <img data-toggle="tooltip" data-placement="left" id="avatar" title="" class="img-responsive img-rounded" src="http://www.gbtags.com/gb/networks/avatars/13d6393f-a44c-4180-8cb6-7bf0e4776283.png" alt="" data-original-title="我是Terry">
            </p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row cvbody">

        <!-- 这里定义两个区域，布局定义如下：//-->

        <div class="col-lg-6 col-md-6 col-xs-12">

            <div class="row">
                <div class="cbox green">
                    <h4>个人介绍</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus asperiores eum consequatur hic rem earum repudiandae dicta! Est officiis similique fugiat quod quibusdam rerum ipsum eos soluta tempore cupiditate! Accusantium?
                    </p>
                </div>
                <div class="cbox red">
                    <h4>个人技能</h4>
                    <p>
                        <!-- 这里使用Bootstrap3的组件添加技能 //-->

                        HTML/CSS/Javascript
                    </p><div class="progress">
                    <div class="progress-bar progress-bar-success" style="width:80%"></div>
                </div>

                    Java/J2EE
                    <div class="progress">
                        <div class="progress-bar progress-bar-primary" style="width:90%"></div>
                    </div>

                    数据库
                    <div class="progress">
                        <div class="progress-bar progress-bar-info" style="width:80%"></div>
                    </div>

                    Photoshop/UI
                    <div class="progress">
                        <div class="progress-bar progress-bar-warning" style="width:50%"></div>
                    </div>
                    <p></p>
                </div>
                <div class="cbox orange">
                    <h4>语言水平</h4>
                    <p>
                        <canvas id="en" width="150" height="150" class="pull-left" style="width: 150px; height: 150px;"></canvas>
                        <canvas id="zh" width="150" height="150" class="pull-right" style="width: 150px; height: 150px;"></canvas>
                    </p><p class="clearfix"></p>
                    <p></p>
                </div>
            </div>

        </div>

        <!-- 为了清楚的分割两个区域，这里我们添加了一个空白区域，或者也可以在CSS中定义Margin实现//-->
        <div class="col-lg-1 col-md-1 col-xs-12"></div>

        <div class="col-lg-5 col-md-5 col-xs-12">

            <div class="row">
                <div class="bbox">
                    <h4>教育背景</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione enim adipisci minima perspiciatis ad nesciunt iure asperiores voluptatem neque aperiam molestias cupiditate facilis a eveniet iste sapiente ab repellendus dignissimos.</p>
                </div>
                <div class="bbox">
                    <h4>工作经验</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis dolorem mollitia repellendus. Magni laudantium placeat repudiandae tempore iure deleniti obcaecati. Architecto delectus doloremque quo. Dicta ratione vero eos pariatur itaque.</p>
                </div>
                <div class="bbox">
                    <h4>个人爱好</h4>
                    <p>
                        <span class="glyphicon glyphicon-tree-deciduous"></span> 骑马
                        <span class="glyphicon glyphicon-plane"></span> 旅游
                    </p><p><span class="glyphicon glyphicon-cutlery"></span> 美食</p>
                    <p><span class="glyphicon glyphicon-music"></span> 音乐</p>
                    <p></p>
                </div>
            </div>

        </div>


    </div>
</div>
<div class="container">
    <div class="row"><div class="footer  text-center">关注-微博</div></div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/mali/Public/Style/js/bootstrap.min.js"></script>
</body>
</html>