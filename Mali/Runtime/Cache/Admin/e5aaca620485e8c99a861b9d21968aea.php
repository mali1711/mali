<?php if (!defined('THINK_PATH')) exit();?>
    <form action="/www/mali/index.php/Admin/Article/doAddArticle" method="post">
        <!-- 加载编辑器的容器 -->
        <script id="container" name="content" type="text/plain"></script>
        <input type="submit" value="提交111">
    </form>
    <!-- 配置文件 -->
    <script type="text/javascript" src="/www/mali/Public/Style_Admin/utf8-php/ueditor.config.js"></script>
    <!-- 编辑器源码文件 -->
    <script type="text/javascript" src="/www/mali/Public/Style_Admin/utf8-php/ueditor.all.js"></script>
    <!-- 实例化编辑器 -->
    <script type="text/javascript">
        var editor = UE.getEditor('container');
    </script>