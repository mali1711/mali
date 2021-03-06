<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加文章</title>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- 可选的 Bootstrap 主题文件（一般不用引入） -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<center>
    <h3><a href="/mali/index.php/Admin/Index/addType">返回</a>||添加内容：</h3>
<form action="/mali/index.php/Admin/Article/doAddArticle" method="post">
    <div class="form-group" style="padding-bottom: 50px; width:83%;">
        <label class="col-sm-2 control-label" style="padding-left:10px;">请输入文章的标题</label>
        <div class="col-sm-10">
            <input class="form-control" id="focusedInput" name="article_title" type="text"  value="">
        </div>
    </div>
    <input type="hidden" name="article_type_id" value="<?php echo ($data["type_id"]); ?>">
    <!-- 加载编辑器的容器 -->
    <div>
          <script id="container" style="width:90%;height:500px;" name="article_content" type="text/plain"></script>
    </div>
    <input class="btn btn-primary" type="submit" value="确认点提交">
    <div class="btn btn-danger"  onclick="clearLocalData()" >清空草稿箱</div>
</form>
</center>
<!-- 配置文件 -->
<script type="text/javascript" src="/mali/Public/Style_Admin/utf8-php/ueditor.config.js"></script>
<!-- 编辑器源码文件 -->
<script type="text/javascript" src="/mali/Public/Style_Admin/utf8-php/ueditor.all.js"></script>
<!-- 实例化编辑器 -->
<script type="text/javascript">
    var editor = UE.getEditor('container');
    function clearLocalData () {
        UE.getEditor('editor').execCommand( "clearlocaldata" );
        alert("已清空草稿箱")
    }
</script>
</body>
</html>