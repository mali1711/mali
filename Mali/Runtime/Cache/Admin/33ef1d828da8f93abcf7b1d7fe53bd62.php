<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo ($title); ?></title>
</head>
<body>

    <a href="/" >首页</a>
    <a href="/info/" >资讯</a>
    <a href="/bbs/" >论坛</a>


主内容

    最新资讯：
    <?php if(is_array($news)): $i = 0; $__LIST__ = $news;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new): $mod = ($i % 2 );++$i;?><a href="/new/<?php echo ($new["id"]); ?>"><?php echo ($new["title"]); ?></a><br/><?php endforeach; endif; else: echo "" ;endif; ?>


    @ThinkPHP2012 版权所有

</body>
</html>