<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>欢迎访问贱贱的网页</title>

    <!-- Bootstrap -->
    <link href="/mali/Public/Style/css/bootstrap.min.css" rel="stylesheet">
    <link href="/mali/Public/Style/index.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond./mali/Public/Style/js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
        function doAdd(form) {
            var res =
            $.ajax({
                url:"/mali/index.php/Home/Message/addMessage",
                type:"post",
                dataType:"json",
                async:true,
                data: $("#submitMessige").serialize(),
                success:function(data){
                    if(data.status>0){
                        alert('留言成功');
                        var tr = "<blockquote class="+"panel M_showMessage"+">"+data['info']['message_board_content'];
                        tr += "<small>"+data['info']['message_board_username'] +"<cite>--"+data['info']['message_board_addtime']+"</cite></small>";
                        tr +="</blockquote>";
                        $("#users_message_content ").prepend(tr);
                        $("#users_message_content blockquote:last").remove();
                    }

                }
            });
            form.reset();
            return false;
        }
    </script>
</head>
<!--导航条start-->
<div  class="container-fluid">
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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">加密文件<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">一生</a></li>
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
    <!--导航条end-->
    <h3 class="default text-center">欢迎来到<strong class="danger primary">贱贱</strong>的个人网站</h3>
    <div class="well">
        <div class="row-fluid pull-left" style="width: 28%;">
            <div class="span3">
                <div class="sidebar-nav">
                    <ul class="nav nav-list typelist">

                    </ul>
                </div><!--/.well -->
            </div><!--/span-->
        </div>
        <!-- 旋转木马 start -->
        <div style="width: 72%;" id="carousel-example-generic" class="carousel slide pull-right" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="/mali/Public/Style/images/P1.jpg" alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img src="/mali/Public/Style/images/P5.jpg" alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <div class="item">
                    <img src="/mali/Public/Style/images/P4.jpg" alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div style="width: 100%;clear:both"></div>
    </div>
    <!-- 旋转木马end -->

    <div class="row" style="margin-top:30px;height:200px;">
        <h4>&nbsp;&nbsp;&nbsp;最近动态：</h4>
        <div class="col-xs-6 col-sm-3">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">学习</h3>
                </div>
                <div class="panel-body h328">
                    <div class="thumbnail">
                        <img style="height:180px;" src="/mali/Public/Style/images/a1f36570bae01300bb29ee78abe8e0ad.jpg" alt="...">
                    </div>
                    <blockquote class="blockquote-reverse">
                        <p>你如果不努力，无论什么事你都做不好！</p>
                        <footer> <cite title="Source Title">羡慕</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h3 class="panel-title">生活</h3>
                </div>
                <div class="panel-body h328">
                    <div class="thumbnail">
                        <img style="height:180px;" src="/mali/Public/Style/images/dc9f656be307dce6c6de11ee413732fe.jpg" alt="...">
                    </div>
                    <blockquote class="blockquote-reverse">
                        <p>人永远是要学习的。死的时候，才是毕业的时候。</p>
                        <footer> <cite title="Source Title">萧楚女</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">娱乐</h3>
                </div>
                <div class="panel-body h328">
                    <div class="thumbnail">
                        <img style="height:180px;" src="/mali/Public/Style/images/a1bb8f501badfc6b7591d806c7cae3ba.jpg" alt="...">
                    </div>
                    <blockquote class="blockquote-reverse">
                        <p>游戏或好或坏，结果并不重要，只要你我开心就好</p>
                        <footer> <cite title="Source Title">誓言</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">最近动态</h3>
                </div>

                <div class="panel-body h328 text-center">
                    <p>
                        这是一个基本的面板
                    </p>
                    <p>
                        这是一个基本的面板
                    </p>
                    <p>
                        这是一个基本的面板
                    </p>
                    <p>
                        这是一个基本的面板
                    </p>
                    <p>
                        这是一个基本的面板
                    </p>
                    <p>
                        这是一个基本的面板
                    </p>
                    <p>
                        这是一个基本的面板
                    </p>
                    <p>
                        这是一个基本的面板
                    </p>
                    <p>
                        这是一个基本的面板
                    </p>
                    <p>
                        这是一个基本的面板
                    </p>
                    <p>
                        这是一个基本的面板
                    </p>

                </div>
            </div>
        </div>
    </div>
    <!--留言板start-->
    <hr/>
    <div class="row M_MessageBoard">
        <div class="col-xs-6 col-sm-6" id="users_message_content">

        </div>
        <div class="col-xs-6 col-sm-6">
            <form id="submitMessige" class="form-inline pull-right M_form2" method="post" onsubmit="return doAdd(this)">
                <div class="form-group">
                    <label for="exampleInputName2">名 字： </label>
                    <input type="text" name="message_board_username" class="form-control" id="exampleInputName2" placeholder="你的名字">
                </div><br/><br/><br/>
                <div class="form-group">
                    <label for="exampleInputEmail2">邮 箱： </label>
                    <input type="email" name="message_board_email" class="form-control" id="exampleInputEmail2" placeholder="你的邮箱">
                </div><br/><br/><br/>
                <div class="form-group">
                    <label for="content">留 言： </label>
                    <textarea id="content" name="message_board_content" class="form-control" rows="6" cols="50"></textarea>
                </div><br/><br/><br/>
                <div class="M_submit">
                    <div class="form-group">
                        <input class="btn btn-info" type="submit" value="提交">
                        <input class="btn btn-danger" type="reset" value="撤销">
                    </div>
                </div>

            </form></div>
        <div class="col-xs-6 col-sm-12">
            <h3> <a href="">点击查看更多</a></h3>
        </div>

    </div>
    <!--留言板end-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/mali/Public/Style/js/bootstrap.min.js"></script>
    <!--<div id="footer" class="container">
        <nav class="navbar navbar-default navbar-fixed-bottom">
            <div class="navbar-inner navbar-content-center">
                <p class="text-muted credit" style="padding: 10px;">
                    ....
                </p>
            </div>
        </nav>
    </div>-->
</div>

<script type="text/javascript">
    $.ajax({
     url:"/mali/index.php/Home/Message/index",
     type:"get",
     dataType:"json",
     async:true,
     data:'',
     success:function(data){
         $.each(data, function (n, value) {
//             alert(value['message_board_content']);
             var tr = "<blockquote class="+"panel M_showMessage"+">"+value['message_board_content'];
                 tr += "<small>"+value['message_board_username'] +"<cite>--"+value['message_board_addtime']+"</cite></small>";
                 tr +="</blockquote>";
             $("#users_message_content").append(tr);
         });
     }
     });
    /*
     * 加载文章首页的列表页面
    * */
    $.ajax({
        url:"/mali/index.php/Home/Index/typeList",
        type:"get",
        dataType:"json",
        async:true,
        data:'',
        success:function(data){
            $.each(data, function (n, value) {
/*                后端</li>
                Mysql*/
                var st = '';
                if(value.type_pid==0){
                    st += '<li class="nav-header">'+value.type_name+'<li>';
                }else if(value.type_pid!==0)
                st += '<li><a href="'+'/mali/index.php/Home/Index/info/?id='+value.type_id+'"'+'class="text-success">'+value.type_name+'</a></li>';
                $(".typelist").append(st);
            });
        }
    });
</script>
</body>
</html>