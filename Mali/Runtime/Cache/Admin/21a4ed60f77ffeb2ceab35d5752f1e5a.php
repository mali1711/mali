<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>jq网格 - 素材火 Admin</title>

    <meta name="description" content="Dynamic tables and grids using jqGrid plugin" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- basic styles -->

    <link href="/www/mali/Public/Style_Admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/www/mali/Public/Style_Admin/assets/css/font-awesome.min.css" />

    <!--[if IE 7]>
    <link rel="stylesheet" href="/www/mali/Public/Style_Admin/assets/css/font-awesome-ie7.min.css" />
    <![endif]-->

    <!-- page specific plugin styles -->

    <link rel="stylesheet" href="/www/mali/Public/Style_Admin/assets/css/jquery-ui-1.10.3.full.min.css" />
    <link rel="stylesheet" href="/www/mali/Public/Style_Admin/assets/css/datepicker.css" />
    <link rel="stylesheet" href="/www/mali/Public/Style_Admin/assets/css/ui.jqgrid.css" />

    <!-- fonts -->

    <link rel="stylesheet" href="/www/mali/Public/Style_Admin/assets/css/ace-fonts.css" />

    <!-- ace styles -->

    <link rel="stylesheet" href="/www/mali/Public/Style_Admin/assets/css/ace.min.css" />
    <link rel="stylesheet" href="/www/mali/Public/Style_Admin/assets/css/ace-rtl.min.css" />
    <link rel="stylesheet" href="/www/mali/Public/Style_Admin/assets/css/ace-skins.min.css" />

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/www/mali/Public/Style_Admin/assets/css/ace-ie.min.css" />
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->

    <script src="/www/mali/Public/Style_Admin/assets/js/ace-extra.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="/www/mali/Public/Style_Admin/assets/js/html5shiv.js"></script>
    <script src="/www/mali/Public/Style_Admin/assets/js/respond.min.js"></script>
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
                                <img src="/www/mali/Public/Style_Admin/assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
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
                                <img src="/www/mali/Public/Style_Admin/assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
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
                                <img src="/www/mali/Public/Style_Admin/assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
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
                        <img class="nav-user-photo" src="/www/mali/Public/Style_Admin/assets/avatars/user.jpg" alt="Jason's Photo" />
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
                            <a href="/www/mali/index.php/Admin/Index/addType">
                                <i class="icon-double-angle-right"></i>
                                添加知识分类
                            </a>
                        </li>

                        <li>
                            <a href="/www/mali/index.php/Admin/Article/index">
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
                            <a href="jquery-ui.html">
                                <i class="icon-double-angle-right"></i>
                                jQuery UI
                            </a>
                        </li>

                        <li>
                            <a href="nestable-list.html">
                                <i class="icon-double-angle-right"></i>
                                Nestable Lists
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
                            <a href="/www/mali/index.php/Admin/MyFootsteps/MyFootstepsList">
                                <i class="icon-double-angle-right"></i>
                                我的足迹
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
	<div class="breadcrumbs" id="breadcrumbs">
		<script type="text/javascript">
			try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
		</script>

		<ul class="breadcrumb">
			<li>
				<i class="icon-home home-icon"></i>
				<a href="#">Home</a>
			</li>
			<li class="active">Dashboard</li>
		</ul><!-- .breadcrumb -->

		<div class="nav-search" id="nav-search">
			<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="icon-search nav-search-icon"></i>
								</span>
			</form>
		</div><!-- #nav-search -->
	</div>

	<div class="page-content">
		<div class="page-header">
			<h1>
				Dashboard
				<small>
					<i class="icon-double-angle-right"></i>
					overview &amp; stats
				</small>
			</h1>
		</div><!-- /.page-header -->

		<div class="row">
			<div class="col-xs-12">
				<!-- PAGE CONTENT BEGINS -->

				<div class="alert alert-block alert-success">
					<button type="button" class="close" data-dismiss="alert">
						<i class="icon-remove"></i>
					</button>

					<i class="icon-ok green"></i>

					Welcome to
					<strong class="green">
						Ace
						<small>(v1.2)</small>
					</strong>
					,
					the lightweight, feature-rich and easy to use admin template.
				</div>

				<div class="row">
					<div class="space-6"></div>

					<div class="col-sm-7 infobox-container">
						<div class="infobox infobox-green  ">
							<div class="infobox-icon">
								<i class="icon-comments"></i>
							</div>

							<div class="infobox-data">
								<span class="infobox-data-number">32</span>
								<div class="infobox-content">comments + 2 reviews</div>
							</div>
							<div class="stat stat-success">8%</div>
						</div>

						<div class="infobox infobox-blue  ">
							<div class="infobox-icon">
								<i class="icon-twitter"></i>
							</div>

							<div class="infobox-data">
								<span class="infobox-data-number">11</span>
								<div class="infobox-content">new followers</div>
							</div>

							<div class="badge badge-success">
								+32%
								<i class="icon-arrow-up"></i>
							</div>
						</div>

						<div class="infobox infobox-pink  ">
							<div class="infobox-icon">
								<i class="icon-shopping-cart"></i>
							</div>

							<div class="infobox-data">
								<span class="infobox-data-number">8</span>
								<div class="infobox-content">new orders</div>
							</div>
							<div class="stat stat-important">4%</div>
						</div>

						<div class="infobox infobox-red  ">
							<div class="infobox-icon">
								<i class="icon-beaker"></i>
							</div>

							<div class="infobox-data">
								<span class="infobox-data-number">7</span>
								<div class="infobox-content">experiments</div>
							</div>
						</div>

						<div class="infobox infobox-orange2  ">
							<div class="infobox-chart">
								<span class="sparkline" data-values="196,128,202,177,154,94,100,170,224"></span>
							</div>

							<div class="infobox-data">
								<span class="infobox-data-number">6,251</span>
								<div class="infobox-content">pageviews</div>
							</div>

							<div class="badge badge-success">
								7.2%
								<i class="icon-arrow-up"></i>
							</div>
						</div>

						<div class="infobox infobox-blue2  ">
							<div class="infobox-progress">
								<div class="easy-pie-chart percentage" data-percent="42" data-size="46">
									<span class="percent">42</span>%
								</div>
							</div>

							<div class="infobox-data">
								<span class="infobox-text">traffic used</span>

								<div class="infobox-content">
									<span class="bigger-110">~</span>
									58GB remaining
								</div>
							</div>
						</div>

						<div class="space-6"></div>

						<div class="infobox infobox-green infobox-small infobox-dark">
							<div class="infobox-progress">
								<div class="easy-pie-chart percentage" data-percent="61" data-size="39">
									<span class="percent">61</span>%
								</div>
							</div>

							<div class="infobox-data">
								<div class="infobox-content">Task</div>
								<div class="infobox-content">Completion</div>
							</div>
						</div>

						<div class="infobox infobox-blue infobox-small infobox-dark">
							<div class="infobox-chart">
								<span class="sparkline" data-values="3,4,2,3,4,4,2,2"></span>
							</div>

							<div class="infobox-data">
								<div class="infobox-content">Earnings</div>
								<div class="infobox-content">$32,000</div>
							</div>
						</div>

						<div class="infobox infobox-grey infobox-small infobox-dark">
							<div class="infobox-icon">
								<i class="icon-download-alt"></i>
							</div>

							<div class="infobox-data">
								<div class="infobox-content">Downloads</div>
								<div class="infobox-content">1,205</div>
							</div>
						</div>
					</div>

					<div class="vspace-sm"></div>

					<div class="col-sm-5">
						<div class="widget-box">
							<div class="widget-header widget-header-flat widget-header-small">
								<h5>
									<i class="icon-signal"></i>
									Traffic Sources
								</h5>

								<div class="widget-toolbar no-border">
									<button class="btn btn-minier btn-primary dropdown-toggle" data-toggle="dropdown">
										This Week
										<i class="icon-angle-down icon-on-right bigger-110"></i>
									</button>

									<ul class="dropdown-menu pull-right dropdown-125 dropdown-lighter dropdown-caret">
										<li class="active">
											<a href="#" class="blue">
												<i class="icon-caret-right bigger-110">&nbsp;</i>
												This Week
											</a>
										</li>

										<li>
											<a href="#">
												<i class="icon-caret-right bigger-110 invisible">&nbsp;</i>
												Last Week
											</a>
										</li>

										<li>
											<a href="#">
												<i class="icon-caret-right bigger-110 invisible">&nbsp;</i>
												This Month
											</a>
										</li>

										<li>
											<a href="#">
												<i class="icon-caret-right bigger-110 invisible">&nbsp;</i>
												Last Month
											</a>
										</li>
									</ul>
								</div>
							</div>

							<div class="widget-body">
								<div class="widget-main">
									<div id="piechart-placeholder"></div>

									<div class="hr hr8 hr-double"></div>

									<div class="clearfix">
										<div class="grid3">
															<span class="grey">
																<i class="icon-facebook-sign icon-2x blue"></i>
																&nbsp; likes
															</span>
											<h4 class="bigger pull-right">1,255</h4>
										</div>

										<div class="grid3">
															<span class="grey">
																<i class="icon-twitter-sign icon-2x purple"></i>
																&nbsp; tweets
															</span>
											<h4 class="bigger pull-right">941</h4>
										</div>

										<div class="grid3">
															<span class="grey">
																<i class="icon-pinterest-sign icon-2x red"></i>
																&nbsp; pins
															</span>
											<h4 class="bigger pull-right">1,050</h4>
										</div>
									</div>
								</div><!-- /widget-main -->
							</div><!-- /widget-body -->
						</div><!-- /widget-box -->
					</div><!-- /span -->
				</div><!-- /row -->

				<div class="hr hr32 hr-dotted"></div>

				<div class="row">
					<div class="col-sm-5">
						<div class="widget-box transparent">
							<div class="widget-header widget-header-flat">
								<h4 class="lighter">
									<i class="icon-star orange"></i>
									Popular Domains
								</h4>

								<div class="widget-toolbar">
									<a href="#" data-action="collapse">
										<i class="icon-chevron-up"></i>
									</a>
								</div>
							</div>

							<div class="widget-body">
								<div class="widget-main no-padding">
									<table class="table table-bordered table-striped">
										<thead class="thin-border-bottom">
										<tr>
											<th>
												<i class="icon-caret-right blue"></i>
												name
											</th>

											<th>
												<i class="icon-caret-right blue"></i>
												price
											</th>

											<th class="hidden-480">
												<i class="icon-caret-right blue"></i>
												status
											</th>
										</tr>
										</thead>

										<tbody>
										<tr>
											<td>internet.com</td>

											<td>
												<small>
													<s class="red">$29.99</s>
												</small>
												<b class="green">$19.99</b>
											</td>

											<td class="hidden-480">
												<span class="label label-info arrowed-right arrowed-in">on sale</span>
											</td>
										</tr>

										<tr>
											<td>online.com</td>

											<td>
												<small>
													<s class="red"></s>
												</small>
												<b class="green">$16.45</b>
											</td>

											<td class="hidden-480">
												<span class="label label-success arrowed-in arrowed-in-right">approved</span>
											</td>
										</tr>

										<tr>
											<td>newnet.com</td>

											<td>
												<small>
													<s class="red"></s>
												</small>
												<b class="green">$15.00</b>
											</td>

											<td class="hidden-480">
												<span class="label label-danger arrowed">pending</span>
											</td>
										</tr>

										<tr>
											<td>web.com</td>

											<td>
												<small>
													<s class="red">$24.99</s>
												</small>
												<b class="green">$19.95</b>
											</td>

											<td class="hidden-480">
																	<span class="label arrowed">
																		<s>out of stock</s>
																	</span>
											</td>
										</tr>

										<tr>
											<td>domain.com</td>

											<td>
												<small>
													<s class="red"></s>
												</small>
												<b class="green">$12.00</b>
											</td>

											<td class="hidden-480">
												<span class="label label-warning arrowed arrowed-right">SOLD</span>
											</td>
										</tr>
										</tbody>
									</table>
								</div><!-- /widget-main -->
							</div><!-- /widget-body -->
						</div><!-- /widget-box -->
					</div>

					<div class="col-sm-7">
						<div class="widget-box transparent">
							<div class="widget-header widget-header-flat">
								<h4 class="lighter">
									<i class="icon-signal"></i>
									Sale Stats
								</h4>

								<div class="widget-toolbar">
									<a href="#" data-action="collapse">
										<i class="icon-chevron-up"></i>
									</a>
								</div>
							</div>

							<div class="widget-body">
								<div class="widget-main padding-4">
									<div id="sales-charts"></div>
								</div><!-- /widget-main -->
							</div><!-- /widget-body -->
						</div><!-- /widget-box -->
					</div>
				</div>

				<div class="hr hr32 hr-dotted"></div>

				<div class="row">
					<div class="col-sm-6">
						<div class="widget-box transparent" id="recent-box">
							<div class="widget-header">
								<h4 class="lighter smaller">
									<i class="icon-rss orange"></i>
									RECENT
								</h4>

								<div class="widget-toolbar no-border">
									<ul class="nav nav-tabs" id="recent-tab">
										<li class="active">
											<a data-toggle="tab" href="#task-tab">Tasks</a>
										</li>

										<li>
											<a data-toggle="tab" href="#member-tab">Members</a>
										</li>

										<li>
											<a data-toggle="tab" href="#comment-tab">Comments</a>
										</li>
									</ul>
								</div>
							</div>

							<div class="widget-body">
								<div class="widget-main padding-4">
									<div class="tab-content padding-8 overflow-visible">
										<div id="task-tab" class="tab-pane active">
											<h4 class="smaller lighter green">
												<i class="icon-list"></i>
												Sortable Lists
											</h4>

											<ul id="tasks" class="item-list">
												<li class="item-orange clearfix">
													<label class="inline">
														<input type="checkbox" class="ace" />
														<span class="lbl"> Answering customer questions</span>
													</label>

													<div class="pull-right easy-pie-chart percentage" data-size="30" data-color="#ECCB71" data-percent="42">
														<span class="percent">42</span>%
													</div>
												</li>

												<li class="item-red clearfix">
													<label class="inline">
														<input type="checkbox" class="ace" />
														<span class="lbl"> Fixing bugs</span>
													</label>

													<div class="pull-right action-buttons">
														<a href="#" class="blue">
															<i class="icon-pencil bigger-130"></i>
														</a>

														<span class="vbar"></span>

														<a href="#" class="red">
															<i class="icon-trash bigger-130"></i>
														</a>

														<span class="vbar"></span>

														<a href="#" class="green">
															<i class="icon-flag bigger-130"></i>
														</a>
													</div>
												</li>

												<li class="item-default clearfix">
													<label class="inline">
														<input type="checkbox" class="ace" />
														<span class="lbl"> Adding new features</span>
													</label>

													<div class="inline pull-right position-relative dropdown-hover">
														<button class="btn btn-minier bigger btn-primary">
															<i class="icon-cog icon-only bigger-120"></i>
														</button>

														<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-caret dropdown-close pull-right">
															<li>
																<a href="#" class="tooltip-success" data-rel="tooltip" title="Mark&nbsp;as&nbsp;done">
																					<span class="green">
																						<i class="icon-ok bigger-110"></i>
																					</span>
																</a>
															</li>

															<li>
																<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																					<span class="red">
																						<i class="icon-trash bigger-110"></i>
																					</span>
																</a>
															</li>
														</ul>
													</div>
												</li>

												<li class="item-blue clearfix">
													<label class="inline">
														<input type="checkbox" class="ace" />
														<span class="lbl"> Upgrading scripts used in template</span>
													</label>
												</li>

												<li class="item-grey clearfix">
													<label class="inline">
														<input type="checkbox" class="ace" />
														<span class="lbl"> Adding new skins</span>
													</label>
												</li>

												<li class="item-green clearfix">
													<label class="inline">
														<input type="checkbox" class="ace" />
														<span class="lbl"> Updating server software up</span>
													</label>
												</li>

												<li class="item-pink clearfix">
													<label class="inline">
														<input type="checkbox" class="ace" />
														<span class="lbl"> Cleaning up</span>
													</label>
												</li>
											</ul>
										</div>

										<div id="member-tab" class="tab-pane">
											<div class="clearfix">
												<div class="itemdiv memberdiv">
													<div class="user">
														<img alt="Bob Doe's avatar" src="/www/mali/Public/Style_Admin/assets/avatars/user.jpg" />
													</div>

													<div class="body">
														<div class="name">
															<a href="#">Bob Doe</a>
														</div>

														<div class="time">
															<i class="icon-time"></i>
															<span class="green">20 min</span>
														</div>

														<div>
															<span class="label label-warning label-sm">pending</span>

															<div class="inline position-relative">
																<button class="btn btn-minier bigger btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown">
																	<i class="icon-angle-down icon-only bigger-120"></i>
																</button>

																<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																	<li>
																		<a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
																							<span class="green">
																								<i class="icon-ok bigger-110"></i>
																							</span>
																		</a>
																	</li>

																	<li>
																		<a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
																							<span class="orange">
																								<i class="icon-remove bigger-110"></i>
																							</span>
																		</a>
																	</li>

																	<li>
																		<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																							<span class="red">
																								<i class="icon-trash bigger-110"></i>
																							</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>

												<div class="itemdiv memberdiv">
													<div class="user">
														<img alt="Joe Doe's avatar" src="/www/mali/Public/Style_Admin/assets/avatars/avatar2.png" />
													</div>

													<div class="body">
														<div class="name">
															<a href="#">Joe Doe</a>
														</div>

														<div class="time">
															<i class="icon-time"></i>
															<span class="green">1 hour</span>
														</div>

														<div>
															<span class="label label-warning label-sm">pending</span>

															<div class="inline position-relative">
																<button class="btn btn-minier bigger btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown">
																	<i class="icon-angle-down icon-only bigger-120"></i>
																</button>

																<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																	<li>
																		<a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
																							<span class="green">
																								<i class="icon-ok bigger-110"></i>
																							</span>
																		</a>
																	</li>

																	<li>
																		<a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
																							<span class="orange">
																								<i class="icon-remove bigger-110"></i>
																							</span>
																		</a>
																	</li>

																	<li>
																		<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																							<span class="red">
																								<i class="icon-trash bigger-110"></i>
																							</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>

												<div class="itemdiv memberdiv">
													<div class="user">
														<img alt="Jim Doe's avatar" src="/www/mali/Public/Style_Admin/assets/avatars/avatar.png" />
													</div>

													<div class="body">
														<div class="name">
															<a href="#">Jim Doe</a>
														</div>

														<div class="time">
															<i class="icon-time"></i>
															<span class="green">2 hour</span>
														</div>

														<div>
															<span class="label label-warning label-sm">pending</span>

															<div class="inline position-relative">
																<button class="btn btn-minier bigger btn-yellow btn-no-border dropdown-toggle" data-toggle="dropdown">
																	<i class="icon-angle-down icon-only bigger-120"></i>
																</button>

																<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																	<li>
																		<a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
																							<span class="green">
																								<i class="icon-ok bigger-110"></i>
																							</span>
																		</a>
																	</li>

																	<li>
																		<a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
																							<span class="orange">
																								<i class="icon-remove bigger-110"></i>
																							</span>
																		</a>
																	</li>

																	<li>
																		<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																							<span class="red">
																								<i class="icon-trash bigger-110"></i>
																							</span>
																		</a>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>

												<div class="itemdiv memberdiv">
													<div class="user">
														<img alt="Alex Doe's avatar" src="/www/mali/Public/Style_Admin/assets/avatars/avatar5.png" />
													</div>

													<div class="body">
														<div class="name">
															<a href="#">Alex Doe</a>
														</div>

														<div class="time">
															<i class="icon-time"></i>
															<span class="green">3 hour</span>
														</div>

														<div>
															<span class="label label-danger label-sm">blocked</span>
														</div>
													</div>
												</div>

												<div class="itemdiv memberdiv">
													<div class="user">
														<img alt="Bob Doe's avatar" src="/www/mali/Public/Style_Admin/assets/avatars/avatar2.png" />
													</div>

													<div class="body">
														<div class="name">
															<a href="#">Bob Doe</a>
														</div>

														<div class="time">
															<i class="icon-time"></i>
															<span class="green">6 hour</span>
														</div>

														<div>
															<span class="label label-success label-sm arrowed-in">approved</span>
														</div>
													</div>
												</div>

												<div class="itemdiv memberdiv">
													<div class="user">
														<img alt="Susan's avatar" src="/www/mali/Public/Style_Admin/assets/avatars/avatar3.png" />
													</div>

													<div class="body">
														<div class="name">
															<a href="#">Susan</a>
														</div>

														<div class="time">
															<i class="icon-time"></i>
															<span class="green">yesterday</span>
														</div>

														<div>
															<span class="label label-success label-sm arrowed-in">approved</span>
														</div>
													</div>
												</div>

												<div class="itemdiv memberdiv">
													<div class="user">
														<img alt="Phil Doe's avatar" src="/www/mali/Public/Style_Admin/assets/avatars/avatar4.png" />
													</div>

													<div class="body">
														<div class="name">
															<a href="#">Phil Doe</a>
														</div>

														<div class="time">
															<i class="icon-time"></i>
															<span class="green">2 days ago</span>
														</div>

														<div>
															<span class="label label-info label-sm arrowed-in arrowed-in-right">online</span>
														</div>
													</div>
												</div>

												<div class="itemdiv memberdiv">
													<div class="user">
														<img alt="Alexa Doe's avatar" src="/www/mali/Public/Style_Admin/assets/avatars/avatar1.png" />
													</div>

													<div class="body">
														<div class="name">
															<a href="#">Alexa Doe</a>
														</div>

														<div class="time">
															<i class="icon-time"></i>
															<span class="green">3 days ago</span>
														</div>

														<div>
															<span class="label label-success label-sm arrowed-in">approved</span>
														</div>
													</div>
												</div>
											</div>

											<div class="center">
												<i class="icon-group icon-2x green"></i>

												&nbsp;
												<a href="#">
													See all members &nbsp;
													<i class="icon-arrow-right"></i>
												</a>
											</div>

											<div class="hr hr-double hr8"></div>
										</div><!-- member-tab -->

										<div id="comment-tab" class="tab-pane">
											<div class="comments">
												<div class="itemdiv commentdiv">
													<div class="user">
														<img alt="Bob Doe's Avatar" src="/www/mali/Public/Style_Admin/assets/avatars/avatar.png" />
													</div>

													<div class="body">
														<div class="name">
															<a href="#">Bob Doe</a>
														</div>

														<div class="time">
															<i class="icon-time"></i>
															<span class="green">6 min</span>
														</div>

														<div class="text">
															<i class="icon-quote-left"></i>
															Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
														</div>
													</div>

													<div class="tools">
														<div class="inline position-relative">
															<button class="btn btn-minier bigger btn-yellow dropdown-toggle" data-toggle="dropdown">
																<i class="icon-angle-down icon-only bigger-120"></i>
															</button>

															<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																<li>
																	<a href="#" class="tooltip-success" data-rel="tooltip" title="Approve">
																						<span class="green">
																							<i class="icon-ok bigger-110"></i>
																						</span>
																	</a>
																</li>

																<li>
																	<a href="#" class="tooltip-warning" data-rel="tooltip" title="Reject">
																						<span class="orange">
																							<i class="icon-remove bigger-110"></i>
																						</span>
																	</a>
																</li>

																<li>
																	<a href="#" class="tooltip-error" data-rel="tooltip" title="Delete">
																						<span class="red">
																							<i class="icon-trash bigger-110"></i>
																						</span>
																	</a>
																</li>
															</ul>
														</div>
													</div>
												</div>

												<div class="itemdiv commentdiv">
													<div class="user">
														<img alt="Jennifer's Avatar" src="/www/mali/Public/Style_Admin/assets/avatars/avatar1.png" />
													</div>

													<div class="body">
														<div class="name">
															<a href="#">Jennifer</a>
														</div>

														<div class="time">
															<i class="icon-time"></i>
															<span class="blue">15 min</span>
														</div>

														<div class="text">
															<i class="icon-quote-left"></i>
															Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
														</div>
													</div>

													<div class="tools">
														<div class="action-buttons bigger-125">
															<a href="#">
																<i class="icon-pencil blue"></i>
															</a>

															<a href="#">
																<i class="icon-trash red"></i>
															</a>
														</div>
													</div>
												</div>

												<div class="itemdiv commentdiv">
													<div class="user">
														<img alt="Joe's Avatar" src="/www/mali/Public/Style_Admin/assets/avatars/avatar2.png" />
													</div>

													<div class="body">
														<div class="name">
															<a href="#">Joe</a>
														</div>

														<div class="time">
															<i class="icon-time"></i>
															<span class="orange">22 min</span>
														</div>

														<div class="text">
															<i class="icon-quote-left"></i>
															Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
														</div>
													</div>

													<div class="tools">
														<div class="action-buttons bigger-125">
															<a href="#">
																<i class="icon-pencil blue"></i>
															</a>

															<a href="#">
																<i class="icon-trash red"></i>
															</a>
														</div>
													</div>
												</div>

												<div class="itemdiv commentdiv">
													<div class="user">
														<img alt="Rita's Avatar" src="/www/mali/Public/Style_Admin/assets/avatars/avatar3.png" />
													</div>

													<div class="body">
														<div class="name">
															<a href="#">Rita</a>
														</div>

														<div class="time">
															<i class="icon-time"></i>
															<span class="red">50 min</span>
														</div>

														<div class="text">
															<i class="icon-quote-left"></i>
															Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
														</div>
													</div>

													<div class="tools">
														<div class="action-buttons bigger-125">
															<a href="#">
																<i class="icon-pencil blue"></i>
															</a>

															<a href="#">
																<i class="icon-trash red"></i>
															</a>
														</div>
													</div>
												</div>
											</div>

											<div class="hr hr8"></div>

											<div class="center">
												<i class="icon-comments-alt icon-2x green"></i>

												&nbsp;
												<a href="#">
													See all comments &nbsp;
													<i class="icon-arrow-right"></i>
												</a>
											</div>

											<div class="hr hr-double hr8"></div>
										</div>
									</div>
								</div><!-- /widget-main -->
							</div><!-- /widget-body -->
						</div><!-- /widget-box -->
					</div><!-- /span -->

					<div class="col-sm-6">
						<div class="widget-box ">
							<div class="widget-header">
								<h4 class="lighter smaller">
									<i class="icon-comment blue"></i>
									Conversation
								</h4>
							</div>

							<div class="widget-body">
								<div class="widget-main no-padding">
									<div class="dialogs">
										<div class="itemdiv dialogdiv">
											<div class="user">
												<img alt="Alexa's Avatar" src="/www/mali/Public/Style_Admin/assets/avatars/avatar1.png" />
											</div>

											<div class="body">
												<div class="time">
													<i class="icon-time"></i>
													<span class="green">4 sec</span>
												</div>

												<div class="name">
													<a href="#">Alexa</a>
												</div>
												<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.</div>

												<div class="tools">
													<a href="#" class="btn btn-minier btn-info">
														<i class="icon-only icon-share-alt"></i>
													</a>
												</div>
											</div>
										</div>

										<div class="itemdiv dialogdiv">
											<div class="user">
												<img alt="John's Avatar" src="/www/mali/Public/Style_Admin/assets/avatars/avatar.png" />
											</div>

											<div class="body">
												<div class="time">
													<i class="icon-time"></i>
													<span class="blue">38 sec</span>
												</div>

												<div class="name">
													<a href="#">John</a>
												</div>
												<div class="text">Raw denim you probably haven&#39;t heard of them jean shorts Austin.</div>

												<div class="tools">
													<a href="#" class="btn btn-minier btn-info">
														<i class="icon-only icon-share-alt"></i>
													</a>
												</div>
											</div>
										</div>

										<div class="itemdiv dialogdiv">
											<div class="user">
												<img alt="Bob's Avatar" src="/www/mali/Public/Style_Admin/assets/avatars/user.jpg" />
											</div>

											<div class="body">
												<div class="time">
													<i class="icon-time"></i>
													<span class="orange">2 min</span>
												</div>

												<div class="name">
													<a href="#">Bob</a>
													<span class="label label-info arrowed arrowed-in-right">admin</span>
												</div>
												<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.</div>

												<div class="tools">
													<a href="#" class="btn btn-minier btn-info">
														<i class="icon-only icon-share-alt"></i>
													</a>
												</div>
											</div>
										</div>

										<div class="itemdiv dialogdiv">
											<div class="user">
												<img alt="Jim's Avatar" src="/www/mali/Public/Style_Admin/assets/avatars/avatar4.png" />
											</div>

											<div class="body">
												<div class="time">
													<i class="icon-time"></i>
													<span class="grey">3 min</span>
												</div>

												<div class="name">
													<a href="#">Jim</a>
												</div>
												<div class="text">Raw denim you probably haven&#39;t heard of them jean shorts Austin.</div>

												<div class="tools">
													<a href="#" class="btn btn-minier btn-info">
														<i class="icon-only icon-share-alt"></i>
													</a>
												</div>
											</div>
										</div>

										<div class="itemdiv dialogdiv">
											<div class="user">
												<img alt="Alexa's Avatar" src="/www/mali/Public/Style_Admin/assets/avatars/avatar1.png" />
											</div>

											<div class="body">
												<div class="time">
													<i class="icon-time"></i>
													<span class="green">4 min</span>
												</div>

												<div class="name">
													<a href="#">Alexa</a>
												</div>
												<div class="text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>

												<div class="tools">
													<a href="#" class="btn btn-minier btn-info">
														<i class="icon-only icon-share-alt"></i>
													</a>
												</div>
											</div>
										</div>
									</div>

									<form>
										<div class="form-actions">
											<div class="input-group">
												<input placeholder="Type your message here ..." type="text" class="form-control" name="message" />
																<span class="input-group-btn">
																	<button class="btn btn-sm btn-info no-radius" type="button">
																		<i class="icon-share-alt"></i>
																		Send
																	</button>
																</span>
											</div>
										</div>
									</form>
								</div><!-- /widget-main -->
							</div><!-- /widget-body -->
						</div><!-- /widget-box -->
					</div><!-- /span -->
				</div><!-- /row -->

				<!-- PAGE CONTENT ENDS -->
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.page-content -->
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
    window.jQuery || document.write("<script src='/www/mali/Public/Style_Admin/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
</script>

<!-- <![endif]-->

<!--[if IE]>
<script type="text/javascript">
    window.jQuery || document.write("<script src='/www/mali/Public/Style_Admin/assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

<script type="text/javascript">
    if("ontouchend" in document) document.write("<script src='/www/mali/Public/Style_Admin/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="/www/mali/Public/Style_Admin/assets/js/bootstrap.min.js"></script>
<script src="/www/mali/Public/Style_Admin/assets/js/typeahead-bs2.min.js"></script>

<!-- page specific plugin scripts -->

<script src="/www/mali/Public/Style_Admin/assets/js/date-time/bootstrap-datepicker.min.js"></script>
<script src="/www/mali/Public/Style_Admin/assets/js/jqGrid/jquery.jqGrid.min.js"></script>
<script src="/www/mali/Public/Style_Admin/assets/js/jqGrid/i18n/grid.locale-en.js"></script>

<!-- ace scripts -->

<script src="/www/mali/Public/Style_Admin/assets/js/ace-elements.min.js"></script>
<script src="/www/mali/Public/Style_Admin/assets/js/ace.min.js"></script>

<!-- inline scripts related to this page -->

<script type="text/javascript">
    var grid_data =
            [
                {id:"1",name:"Desktop Computer",note:"note",stock:"Yes",ship:"FedEx", sdate:"2007-12-03"},
                {id:"2",name:"Laptop",note:"Long text ",stock:"Yes",ship:"InTime",sdate:"2007-12-03"},
                {id:"3",name:"LCD Monitor",note:"note3",stock:"Yes",ship:"TNT",sdate:"2007-12-03"},
                {id:"4",name:"Speakers",note:"note",stock:"No",ship:"ARAMEX",sdate:"2007-12-03"},
                {id:"5",name:"Laser Printer",note:"note2",stock:"Yes",ship:"FedEx",sdate:"2007-12-03"},
                {id:"6",name:"Play Station",note:"note3",stock:"No", ship:"FedEx",sdate:"2007-12-03"},
                {id:"7",name:"Mobile Telephone",note:"note",stock:"Yes",ship:"ARAMEX",sdate:"2007-12-03"},
                {id:"8",name:"Server",note:"note2",stock:"Yes",ship:"TNT",sdate:"2007-12-03"},
                {id:"9",name:"Matrix Printer",note:"note3",stock:"No", ship:"FedEx",sdate:"2007-12-03"},
                {id:"10",name:"Desktop Computer",note:"note",stock:"Yes",ship:"FedEx", sdate:"2007-12-03"},
                {id:"11",name:"Laptop",note:"Long text ",stock:"Yes",ship:"InTime",sdate:"2007-12-03"},
                {id:"12",name:"LCD Monitor",note:"note3",stock:"Yes",ship:"TNT",sdate:"2007-12-03"},
                {id:"13",name:"Speakers",note:"note",stock:"No",ship:"ARAMEX",sdate:"2007-12-03"},
                {id:"14",name:"Laser Printer",note:"note2",stock:"Yes",ship:"FedEx",sdate:"2007-12-03"},
                {id:"15",name:"Play Station",note:"note3",stock:"No", ship:"FedEx",sdate:"2007-12-03"},
                {id:"16",name:"Mobile Telephone",note:"note",stock:"Yes",ship:"ARAMEX",sdate:"2007-12-03"},
                {id:"17",name:"Server",note:"note2",stock:"Yes",ship:"TNT",sdate:"2007-12-03"},
                {id:"18",name:"Matrix Printer",note:"note3",stock:"No", ship:"FedEx",sdate:"2007-12-03"},
                {id:"19",name:"Matrix Printer",note:"note3",stock:"No", ship:"FedEx",sdate:"2007-12-03"},
                {id:"20",name:"Desktop Computer",note:"note",stock:"Yes",ship:"FedEx", sdate:"2007-12-03"},
                {id:"21",name:"Laptop",note:"Long text ",stock:"Yes",ship:"InTime",sdate:"2007-12-03"},
                {id:"22",name:"LCD Monitor",note:"note3",stock:"Yes",ship:"TNT",sdate:"2007-12-03"},
                {id:"23",name:"Speakers",note:"note",stock:"No",ship:"ARAMEX",sdate:"2007-12-03"}
            ];

    jQuery(function($) {
        var grid_selector = "#grid-table";
        var pager_selector = "#grid-pager";

        jQuery(grid_selector).jqGrid({
            //direction: "rtl",

            data: grid_data,
            datatype: "local",
            height: 250,
            colNames:[' ', 'ID','Last Sales','Name', 'Stock', 'Ship via','Notes'],
            colModel:[
                {name:'myac',index:'', width:80, fixed:true, sortable:false, resize:false,
                    formatter:'actions',
                    formatoptions:{
                        keys:true,

                        delOptions:{recreateForm: true, beforeShowForm:beforeDeleteCallback},
                        //editformbutton:true, editOptions:{recreateForm: true, beforeShowForm:beforeEditCallback}
                    }
                },
                {name:'id',index:'id', width:60, sorttype:"int", editable: true},
                {name:'sdate',index:'sdate',width:90, editable:true, sorttype:"date",unformat: pickDate},
                {name:'name',index:'name', width:150,editable: true,editoptions:{size:"20",maxlength:"30"}},
                {name:'stock',index:'stock', width:70, editable: true,edittype:"checkbox",editoptions: {value:"Yes:No"},unformat: aceSwitch},
                {name:'ship',index:'ship', width:90, editable: true,edittype:"select",editoptions:{value:"FE:FedEx;IN:InTime;TN:TNT;AR:ARAMEX"}},
                {name:'note',index:'note', width:150, sortable:false,editable: true,edittype:"textarea", editoptions:{rows:"2",cols:"10"}}
            ],

            viewrecords : true,
            rowNum:10,
            rowList:[10,20,30],
            pager : pager_selector,
            altRows: true,
            //toppager: true,

            multiselect: true,
            //multikey: "ctrlKey",
            multiboxonly: true,

            loadComplete : function() {
                var table = this;
                setTimeout(function(){
                    styleCheckbox(table);

                    updateActionIcons(table);
                    updatePagerIcons(table);
                    enableTooltips(table);
                }, 0);
            },

            editurl: $path_base+"/dummy.html",//nothing is saved
            caption: "jqGrid with inline editing",


            autowidth: true

        });

        //enable search/filter toolbar
        //jQuery(grid_selector).jqGrid('filterToolbar',{defaultSearch:true,stringResult:true})

        //switch element when editing inline
        function aceSwitch( cellvalue, options, cell ) {
            setTimeout(function(){
                $(cell) .find('input[type=checkbox]')
                        .wrap('<label class="inline" />')
                        .addClass('ace ace-switch ace-switch-5')
                        .after('<span class="lbl"></span>');
            }, 0);
        }
        //enable datepicker
        function pickDate( cellvalue, options, cell ) {
            setTimeout(function(){
                $(cell) .find('input[type=text]')
                        .datepicker({format:'yyyy-mm-dd' , autoclose:true});
            }, 0);
        }


        //navButtons
        jQuery(grid_selector).jqGrid('navGrid',pager_selector,
                { 	//navbar options
                    edit: true,
                    editicon : 'icon-pencil blue',
                    add: true,
                    addicon : 'icon-plus-sign purple',
                    del: true,
                    delicon : 'icon-trash red',
                    search: true,
                    searchicon : 'icon-search orange',
                    refresh: true,
                    refreshicon : 'icon-refresh green',
                    view: true,
                    viewicon : 'icon-zoom-in grey',
                },
                {
                    //edit record form
                    //closeAfterEdit: true,
                    recreateForm: true,
                    beforeShowForm : function(e) {
                        var form = $(e[0]);
                        form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
                        style_edit_form(form);
                    }
                },
                {
                    //new record form
                    closeAfterAdd: true,
                    recreateForm: true,
                    viewPagerButtons: false,
                    beforeShowForm : function(e) {
                        var form = $(e[0]);
                        form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
                        style_edit_form(form);
                    }
                },
                {
                    //delete record form
                    recreateForm: true,
                    beforeShowForm : function(e) {
                        var form = $(e[0]);
                        if(form.data('styled')) return false;

                        form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
                        style_delete_form(form);

                        form.data('styled', true);
                    },
                    onClick : function(e) {
                        alert(1);
                    }
                },
                {
                    //search form
                    recreateForm: true,
                    afterShowSearch: function(e){
                        var form = $(e[0]);
                        form.closest('.ui-jqdialog').find('.ui-jqdialog-title').wrap('<div class="widget-header" />')
                        style_search_form(form);
                    },
                    afterRedraw: function(){
                        style_search_filters($(this));
                    }
                    ,
                    multipleSearch: true,
                    /**
                     multipleGroup:true,
                     showQuery: true
                     */
                },
                {
                    //view record form
                    recreateForm: true,
                    beforeShowForm: function(e){
                        var form = $(e[0]);
                        form.closest('.ui-jqdialog').find('.ui-jqdialog-title').wrap('<div class="widget-header" />')
                    }
                }
        )



        function style_edit_form(form) {
            //enable datepicker on "sdate" field and switches for "stock" field
            form.find('input[name=sdate]').datepicker({format:'yyyy-mm-dd' , autoclose:true})
                    .end().find('input[name=stock]')
                    .addClass('ace ace-switch ace-switch-5').wrap('<label class="inline" />').after('<span class="lbl"></span>');

            //update buttons classes
            var buttons = form.next().find('.EditButton .fm-button');
            buttons.addClass('btn btn-sm').find('[class*="-icon"]').remove();//ui-icon, s-icon
            buttons.eq(0).addClass('btn-primary').prepend('<i class="icon-ok"></i>');
            buttons.eq(1).prepend('<i class="icon-remove"></i>')

            buttons = form.next().find('.navButton a');
            buttons.find('.ui-icon').remove();
            buttons.eq(0).append('<i class="icon-chevron-left"></i>');
            buttons.eq(1).append('<i class="icon-chevron-right"></i>');
        }

        function style_delete_form(form) {
            var buttons = form.next().find('.EditButton .fm-button');
            buttons.addClass('btn btn-sm').find('[class*="-icon"]').remove();//ui-icon, s-icon
            buttons.eq(0).addClass('btn-danger').prepend('<i class="icon-trash"></i>');
            buttons.eq(1).prepend('<i class="icon-remove"></i>')
        }

        function style_search_filters(form) {
            form.find('.delete-rule').val('X');
            form.find('.add-rule').addClass('btn btn-xs btn-primary');
            form.find('.add-group').addClass('btn btn-xs btn-success');
            form.find('.delete-group').addClass('btn btn-xs btn-danger');
        }
        function style_search_form(form) {
            var dialog = form.closest('.ui-jqdialog');
            var buttons = dialog.find('.EditTable')
            buttons.find('.EditButton a[id*="_reset"]').addClass('btn btn-sm btn-info').find('.ui-icon').attr('class', 'icon-retweet');
            buttons.find('.EditButton a[id*="_query"]').addClass('btn btn-sm btn-inverse').find('.ui-icon').attr('class', 'icon-comment-alt');
            buttons.find('.EditButton a[id*="_search"]').addClass('btn btn-sm btn-purple').find('.ui-icon').attr('class', 'icon-search');
        }

        function beforeDeleteCallback(e) {
            var form = $(e[0]);
            if(form.data('styled')) return false;

            form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
            style_delete_form(form);

            form.data('styled', true);
        }

        function beforeEditCallback(e) {
            var form = $(e[0]);
            form.closest('.ui-jqdialog').find('.ui-jqdialog-titlebar').wrapInner('<div class="widget-header" />')
            style_edit_form(form);
        }



        //it causes some flicker when reloading or navigating grid
        //it may be possible to have some custom formatter to do this as the grid is being created to prevent this
        //or go back to default browser checkbox styles for the grid
        function styleCheckbox(table) {
            /**
             $(table).find('input:checkbox').addClass('ace')
             .wrap('<label />')
             .after('<span class="lbl align-top" />')


             $('.ui-jqgrid-labels th[id*="_cb"]:first-child')
             .find('input.cbox[type=checkbox]').addClass('ace')
             .wrap('<label />').after('<span class="lbl align-top" />');
             */
        }


        //unlike navButtons icons, action icons in rows seem to be hard-coded
        //you can change them like this in here if you want
        function updateActionIcons(table) {
            /**
             var replacement =
             {
                 'ui-icon-pencil' : 'icon-pencil blue',
                 'ui-icon-trash' : 'icon-trash red',
                 'ui-icon-disk' : 'icon-ok green',
                 'ui-icon-cancel' : 'icon-remove red'
             };
             $(table).find('.ui-pg-div span.ui-icon').each(function(){
						var icon = $(this);
						var $class = $.trim(icon.attr('class').replace('ui-icon', ''));
						if($class in replacement) icon.attr('class', 'ui-icon '+replacement[$class]);
					})
             */
        }

        //replace icons with FontAwesome icons like above
        function updatePagerIcons(table) {
            var replacement =
            {
                'ui-icon-seek-first' : 'icon-double-angle-left bigger-140',
                'ui-icon-seek-prev' : 'icon-angle-left bigger-140',
                'ui-icon-seek-next' : 'icon-angle-right bigger-140',
                'ui-icon-seek-end' : 'icon-double-angle-right bigger-140'
            };
            $('.ui-pg-table:not(.navtable) > tbody > tr > .ui-pg-button > .ui-icon').each(function(){
                var icon = $(this);
                var $class = $.trim(icon.attr('class').replace('ui-icon', ''));

                if($class in replacement) icon.attr('class', 'ui-icon '+replacement[$class]);
            })
        }

        function enableTooltips(table) {
            $('.navtable .ui-pg-button').tooltip({container:'body'});
            $(table).find('.ui-pg-div').tooltip({container:'body'});
        }

        //var selr = jQuery(grid_selector).jqGrid('getGridParam','selrow');


    });
</script>
</body>
</html>