<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>个人足迹</title>
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
                        <li><a href="/mali/index.php/Home/index/login">登录ro注册</a></li>
                        <li><a href="#">退出</a></li>
                        <li><a href="#">给我留言</a></li>
                        <li role="separator" class="divider">查看所有的留言</li>
                        <li><a href="#">其他</a></li>
                        <!--<li><a href="/mali/index.php/Admin" data-target="#myModal">转入后台</a></li>-->
                        <li><a href="#" data-toggle="modal" data-target="#myModal">转入后台</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
    <!-- 模态框（Modal） -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">转入后台请先登录</h4>
                </div>
                <div class="modal-body">

                    <form class="form-horizontal" role="form" action="/mali/index.php/Home/Index/JumpAdmin" method="post">
                        <div class="form-group">
                            <label for="firstname" class="col-sm-2 control-label">账号</label>
                            <div class="col-sm-10">
                                <input type="text" name="users_name" class="form-control" id="firstname" placeholder="请输入账号">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="lastname" class="col-sm-2 control-label">密码</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="users_pass" id="lastname" placeholder="请输入密码">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">请记住我
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-primary">登录</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal -->
    </div>

</nav>
    <div class="row"><div class="text-center">个人--足迹</div></div>
<!--    <img style="width: 80px;" src="./images/d33a00e9ce1e8e9e5504b5e060ba5b52.jpg" class="img-circle">-->
    <div class="row">
        <ul class="media-list">
            <?php if(is_array($list)): foreach($list as $key=>$vo): ?><li class="media">
            <div class="media-left">
                <a href="#">
                    <img style="width: 50px;" src="/mali/Public/Style/images/d33a00e9ce1e8e9e5504b5e060ba5b52.jpg" class="media-object img-circle">
                </a>
            </div>
            <div class="media-body thumbnail">
                <h4 class="media-heading">张三 <small>  <?php echo ($vo["my_footsteps_addtime"]); ?></small></h4>
                <?php echo ($vo["my_footsteps_title"]); ?>
            </div>
             </li><?php endforeach; endif; ?>
        </ul>

    </div>

</div>
<h4><?php echo ($page); ?></h4>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/mali/Public/Style/js/bootstrap.min.js"></script>
</body>
</html>