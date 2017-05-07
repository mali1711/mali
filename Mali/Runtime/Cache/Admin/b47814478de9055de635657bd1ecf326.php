<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>jq网格 - 素材火 Admin</title>

    <meta name="description" content="Dynamic tables and grids using jqGrid plugin" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- basic styles -->

    <link href="/mali/Public/Style_Admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/mali/Public/Style_Admin/assets/css/font-awesome.min.css" />

    <!--[if IE 7]>
    <link rel="stylesheet" href="/mali/Public/Style_Admin/assets/css/font-awesome-ie7.min.css" />
    <![endif]-->

    <!-- page specific plugin styles -->

    <link rel="stylesheet" href="/mali/Public/Style_Admin/assets/css/jquery-ui-1.10.3.full.min.css" />
    <link rel="stylesheet" href="/mali/Public/Style_Admin/assets/css/datepicker.css" />
    <link rel="stylesheet" href="/mali/Public/Style_Admin/assets/css/ui.jqgrid.css" />

    <!-- fonts -->

    <link rel="stylesheet" href="/mali/Public/Style_Admin/assets/css/ace-fonts.css" />

    <!-- ace styles -->

    <link rel="stylesheet" href="/mali/Public/Style_Admin/assets/css/ace.min.css" />
    <link rel="stylesheet" href="/mali/Public/Style_Admin/assets/css/ace-rtl.min.css" />
    <link rel="stylesheet" href="/mali/Public/Style_Admin/assets/css/ace-skins.min.css" />

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/mali/Public/Style_Admin/assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->

    <script src="/mali/Public/Style_Admin/assets/js/ace-extra.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="/mali/Public/Style_Admin/assets/js/html5shiv.js"></script>
    <script src="/mali/Public/Style_Admin/assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="navbar navbar-default" id="navbar">
    <script type="text/javascript">
        try{ace.settings.check('navbar' , 'fixed')}catch(e){}
    </script>

    <div class="navbar-container" id="navbar-container">
        <div class="navbar-header pull-left">
            <a href="#" class="navbar-brand">
                <small>
                    <i class="icon-leaf"></i>
                    Ace Admin
                </small>
            </a><!-- /.brand -->
        </div><!-- /.navbar-header -->

        <div class="navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">
                <li class="grey">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-tasks"></i>
                        <span class="badge badge-grey">4</span>
                    </a>

                    <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="icon-ok"></i>
                            4 Tasks to complete
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">Software Update</span>
                                    <span class="pull-right">65%</span>
                                </div>

                                <div class="progress progress-mini ">
                                    <div style="width:65%" class="progress-bar "></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">Hardware Upgrade</span>
                                    <span class="pull-right">35%</span>
                                </div>

                                <div class="progress progress-mini ">
                                    <div style="width:35%" class="progress-bar progress-bar-danger"></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">Unit Testing</span>
                                    <span class="pull-right">15%</span>
                                </div>

                                <div class="progress progress-mini ">
                                    <div style="width:15%" class="progress-bar progress-bar-warning"></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
                                    <span class="pull-left">Bug Fixes</span>
                                    <span class="pull-right">90%</span>
                                </div>

                                <div class="progress progress-mini progress-striped active">
                                    <div style="width:90%" class="progress-bar progress-bar-success"></div>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                See tasks with details
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="purple">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-bell-alt icon-animated-bell"></i>
                        <span class="badge badge-important">8</span>
                    </a>

                    <ul class="pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="icon-warning-sign"></i>
                            8 Notifications
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-pink icon-comment"></i>
												New Comments
											</span>
                                    <span class="pull-right badge badge-info">+12</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="btn btn-xs btn-primary icon-user"></i>
                                Bob just signed up as an editor ...
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-success icon-shopping-cart"></i>
												New Orders
											</span>
                                    <span class="pull-right badge badge-success">+8</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <div class="clearfix">
											<span class="pull-left">
												<i class="btn btn-xs no-hover btn-info icon-twitter"></i>
												Followers
											</span>
                                    <span class="pull-right badge badge-info">+11</span>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                See all notifications
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="green">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="icon-envelope icon-animated-vertical"></i>
                        <span class="badge badge-success">5</span>
                    </a>

                    <ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
                        <li class="dropdown-header">
                            <i class="icon-envelope-alt"></i>
                            5 Messages
                        </li>

                        <li>
                            <a href="#">
                                <img src="/mali/Public/Style_Admin/assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
                                <span class="msg-body">
											<span class="msg-title">
												<span class="blue">Alex:</span>
												Ciao sociis natoque penatibus et auctor ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>a moment ago</span>
											</span>
										</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <img src="/mali/Public/Style_Admin/assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
                                <span class="msg-body">
											<span class="msg-title">
												<span class="blue">Susan:</span>
												Vestibulum id ligula porta felis euismod ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>20 minutes ago</span>
											</span>
										</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <img src="/mali/Public/Style_Admin/assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
                                <span class="msg-body">
											<span class="msg-title">
												<span class="blue">Bob:</span>
												Nullam quis risus eget urna mollis ornare ...
											</span>

											<span class="msg-time">
												<i class="icon-time"></i>
												<span>3:15 pm</span>
											</span>
										</span>
                            </a>
                        </li>

                        <li>
                            <a href="inbox.html">
                                See all messages
                                <i class="icon-arrow-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="/mali/Public/Style_Admin/assets/avatars/user.jpg" alt="Jason's Photo" />
                        <span class="user-info">
									<small>Welcome,</small>
									Jason
								</span>

                        <i class="icon-caret-down"></i>
                    </a>

                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="#">
                                <i class="icon-cog"></i>
                                Settings
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon-user"></i>
                                Profile
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="#">
                                <i class="icon-off"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
            </ul><!-- /.ace-nav -->
        </div><!-- /.navbar-header -->
    </div><!-- /.container -->
</div>

<div class="main-container" id="main-container">
    <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
    </script>

    <div class="main-container-inner">
        <a class="menu-toggler" id="menu-toggler" href="#">
            <span class="menu-text"></span>
        </a>

        <div class="sidebar" id="sidebar">
            <script type="text/javascript">
                try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
            </script>

            <div class="sidebar-shortcuts" id="sidebar-shortcuts">
                <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
                    <button class="btn btn-success">
                        <i class="icon-signal"></i>
                    </button>

                    <button class="btn btn-info">
                        <i class="icon-pencil"></i>
                    </button>

                    <button class="btn btn-warning">
                        <i class="icon-group"></i>
                    </button>

                    <button class="btn btn-danger">
                        <i class="icon-cogs"></i>
                    </button>
                </div>

                <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
                    <span class="btn btn-success"></span>

                    <span class="btn btn-info"></span>

                    <span class="btn btn-warning"></span>

                    <span class="btn btn-danger"></span>
                </div>
            </div><!-- #sidebar-shortcuts -->

            <ul class="nav nav-list">
                <li>
                    <a href="index.html">
                        <i class="icon-dashboard"></i>
                        <span class="menu-text"> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="typography.html">
                        <i class="icon-text-width"></i>
                        <span class="menu-text"> Typography </span>
                    </a>
                </li>

                <li class="active open">
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-desktop"></i>
                        <span class="menu-text">技术类</span>

                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="/mali/index.php/Admin/Index/addType">
                                <i class="icon-double-angle-right"></i>
                                添加知识分类
                            </a>
                        </li>

                        <li>
                            <a href="/mali/index.php/Admin/Article/index">
                                <i class="icon-double-angle-right"></i>
                                文章列表
                            </a>
                        </li>

                        <li class="active">
                            <a href="treeview.html">
                                <i class="icon-double-angle-right"></i>
                                Treeview
                            </a>
                        </li>

                        <li>
                            <a href="#" class="dropdown-toggle">
                                <i class="icon-double-angle-right"></i>

                                Three Level Menu
                                <b class="arrow icon-angle-down"></b>
                            </a>

                            <ul class="submenu">
                                <li>
                                    <a href="#">
                                        <i class="icon-leaf"></i>
                                        Item #1
                                    </a>
                                </li>

                                <li>
                                    <a href="#" class="dropdown-toggle">
                                        <i class="icon-pencil"></i>

                                        4th level
                                        <b class="arrow icon-angle-down"></b>
                                    </a>

                                    <ul class="submenu">
                                        <li>
                                            <a href="#">
                                                <i class="icon-plus"></i>
                                                Add Product
                                            </a>
                                        </li>

                                        <li>
                                            <a href="#">
                                                <i class="icon-eye-open"></i>
                                                View Products
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-list"></i>
                        <span class="menu-text"> 生活类 </span>

                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="/mali/index.php/Admin/MyFootsteps/MyFootstepsList">
                                <i class="icon-double-angle-right"></i>
                                我的足迹
                            </a>
                        </li>
                        <li>
                            <a href="/mali/index.php/Admin/MyGame/index">
                                <i class="icon-double-angle-right"></i>
                                我的游戏
                            </a>
                        </li>

                        <li>
                            <a href="jqgrid.html">
                                <i class="icon-double-angle-right"></i>
                                我的日记
                            </a>
                        </li>
                        <li>
                            <a href="jqgrid.html">
                                <i class="icon-double-angle-right"></i>
                                我的相册
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-edit"></i>
                        <span class="menu-text"> 展示类 </span>

                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="form-elements.html">
                                <i class="icon-double-angle-right"></i>
                                Form Elements
                            </a>
                        </li>

                        <li>
                            <a href="form-wizard.html">
                                <i class="icon-double-angle-right"></i>
                                Wizard &amp; Validation
                            </a>
                        </li>

                        <li>
                            <a href="wysiwyg.html">
                                <i class="icon-double-angle-right"></i>
                                Wysiwyg &amp; Markdown
                            </a>
                        </li>

                        <li>
                            <a href="dropzone.html">
                                <i class="icon-double-angle-right"></i>
                                Dropzone File Upload
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-edit"></i>
                        <span class="menu-text"> 用户类 </span>

                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="form-elements.html">
                                <i class="icon-double-angle-right"></i>
                                查看所有用户留言
                            </a>
                        </li>

                        <li>
                            <a href="form-wizard.html">
                                <i class="icon-double-angle-right"></i>
                                查看活跃用户
                            </a>
                        </li>

                        <li>
                            <a href="wysiwyg.html">
                                <i class="icon-double-angle-right"></i>
                                Wysiwyg &amp; Markdown
                            </a>
                        </li>

                        <li>
                            <a href="dropzone.html">
                                <i class="icon-double-angle-right"></i>
                                Dropzone File Upload
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="widgets.html">
                        <i class="icon-list-alt"></i>
                        <span class="menu-text"> Widgets </span>
                    </a>
                </li>

                <li>
                    <a href="calendar.html">
                        <i class="icon-calendar"></i>

                        <span class="menu-text">
									Calendar
									<span class="badge badge-transparent tooltip-error" title="2&nbsp;Important&nbsp;Events">
										<i class="icon-warning-sign red bigger-130"></i>
									</span>
								</span>
                    </a>
                </li>

                <li>
                    <a href="gallery.html">
                        <i class="icon-picture"></i>
                        <span class="menu-text"> Gallery </span>
                    </a>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-tag"></i>
                        <span class="menu-text"> More Pages </span>

                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="profile.html">
                                <i class="icon-double-angle-right"></i>
                                User Profile
                            </a>
                        </li>

                        <li>
                            <a href="inbox.html">
                                <i class="icon-double-angle-right"></i>
                                Inbox
                            </a>
                        </li>

                        <li>
                            <a href="pricing.html">
                                <i class="icon-double-angle-right"></i>
                                Pricing Tables
                            </a>
                        </li>

                        <li>
                            <a href="invoice.html">
                                <i class="icon-double-angle-right"></i>
                                Invoice
                            </a>
                        </li>

                        <li>
                            <a href="timeline.html">
                                <i class="icon-double-angle-right"></i>
                                Timeline
                            </a>
                        </li>

                        <li>
                            <a href="login.html">
                                <i class="icon-double-angle-right"></i>
                                Login &amp; Register
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="dropdown-toggle">
                        <i class="icon-file-alt"></i>

                        <span class="menu-text">
									Other Pages
									<span class="badge badge-primary ">5</span>
								</span>

                        <b class="arrow icon-angle-down"></b>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="faq.html">
                                <i class="icon-double-angle-right"></i>
                                FAQ
                            </a>
                        </li>

                        <li>
                            <a href="error-404.html">
                                <i class="icon-double-angle-right"></i>
                                Error 404
                            </a>
                        </li>

                        <li>
                            <a href="error-500.html">
                                <i class="icon-double-angle-right"></i>
                                Error 500
                            </a>
                        </li>

                        <li>
                            <a href="grid.html">
                                <i class="icon-double-angle-right"></i>
                                Grid
                            </a>
                        </li>

                        <li>
                            <a href="blank.html">
                                <i class="icon-double-angle-right"></i>
                                Blank Page
                            </a>
                        </li>
                    </ul>
                </li>
            </ul><!-- /.nav-list -->

            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
            </div>

            <script type="text/javascript">
                try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
            </script>
        </div>

        <!--内容显示-->
        
    <div class="main-content">
        <div class="row">
            <div class="col-md-2" >
            </div>
            <div class="col-md-8" >
                <table class="table table-bordered">
                    <caption><h4>分类列表</h4></caption>
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>名字</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                        <td><?php echo ($vo["type_id"]); ?></td>
                        <td><?php echo ($vo["type_name"]); ?></td>
                        <td>
                            <a class="btn btn-primary btn-xs" href="/mali/index.php/Admin/Index/addType?id=<?php echo ($vo["type_id"]); ?>">添加子类</a>
                            <a class="btn btn-danger btn-xs" href="/mali/index.php/Admin/Article/addArticle?id=<?php echo ($vo["type_id"]); ?>">添加文章</a>
                            <a class="btn btn-info btn-xs" href="/mali/index.php/Admin/Index/updateType?id=<?php echo ($vo["type_id"]); ?>">修改类名</a>
                        </td>
                    </tr><?php endforeach; endif; ?>
                    </tbody>
                </table>
                <ul class="pagination">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
            <div class="col-md-2" >
            </div>
            <div class="col-md-8" >
                <form action="/mali/index.php/Admin/Index/doAddType" method="post" role="form">
                    <input type="hidden" class="form-control" name="type_pid" value="<?php echo ($type_pid); ?>">
                    <div class="form-group">
                        <label for="name"><h4>添加子分类:</h4></label>
                        <input type="text" class="form-control" name="type_name" placeholder="请输入名称">
                    </div>
                    <button type="submit" class="btn btn-primary">提交</button>
                </form>
            </div>
        </div>
    </div><!-- /.main-content -->

        <!--内容显示end-->
        <div class="ace-settings-container" id="ace-settings-container">
            <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                <i class="icon-cog bigger-150"></i>
            </div>

            <div class="ace-settings-box" id="ace-settings-box">
                <div>
                    <div class="pull-left">
                        <select id="skin-colorpicker" class="hide">
                            <option data-skin="default" value="#438EB9">#438EB9</option>
                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                        </select>
                    </div>
                    <span>&nbsp; Choose Skin</span>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
                    <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                    <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
                    <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                    <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container" />
                    <label class="lbl" for="ace-settings-add-container">
                        Inside
                        <b>.container</b>
                    </label>
                </div>
            </div>
        </div><!-- /#ace-settings-container -->
    </div><!-- /.main-container-inner -->

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="icon-double-angle-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->

<script type="text/javascript">
    window.jQuery || document.write("<script src='/mali/Public/Style_Admin/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='/mali/Public/Style_Admin/assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

<script type="text/javascript">
    if("ontouchend" in document) document.write("<script src='/mali/Public/Style_Admin/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="/mali/Public/Style_Admin/assets/js/bootstrap.min.js"></script>
<script src="/mali/Public/Style_Admin/assets/js/typeahead-bs2.min.js"></script>

<!-- page specific plugin scripts -->

<script src="/mali/Public/Style_Admin/assets/js/date-time/bootstrap-datepicker.min.js"></script>
<script src="/mali/Public/Style_Admin/assets/js/jqGrid/jquery.jqGrid.min.js"></script>
<script src="/mali/Public/Style_Admin/assets/js/jqGrid/i18n/grid.locale-en.js"></script>

<!-- ace scripts -->

<script src="/mali/Public/Style_Admin/assets/js/ace-elements.min.js"></script>
<script src="/mali/Public/Style_Admin/assets/js/ace.min.js"></script>
</body>
</html>