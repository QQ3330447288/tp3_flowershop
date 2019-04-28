<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>在线鲜花订购系统后台</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/Public/Common/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="/Public/Admin/css/font-awesome.min.css">
<link rel="stylesheet" href="/Public/Admin/css/ionicons.min.css">
<link rel="stylesheet" href="/Public/Admin/css/AdminLTE.min.css">
<link rel="stylesheet" href="/Public/Admin/css/_all-skins.min.css">
<link rel="stylesheet" href="/Public/Admin/css/datepicker3.css">

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">
    <a href="index.html" class="logo">
            <span class="logo-mini">
               在线鲜花订购系统</span>
        <span class="logo-lg">在线鲜花订购系统</span>
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" >
            <span class="sr-only">下拉菜单</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="/Public/Admin/images/user.jpg"
                             class="user-image" alt="User Image">
                        <span class="hidden-xs">xxx</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <img src="/Public/Admin/images/user.jpg"
                                 class="img-circle" alt="User Image">
                            <p>
                                xxx
                                <small>2017-06-01</small>
                            </p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="pwd.html" class="btn btn-default btn-flat">修改密码</a>
                            </div>
                            <div class="pull-right">
                                <a href="login.html" class="btn btn-default btn-flat">退出系统</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
    <aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/Public/Admin/images/user.jpg" class="img-circle"
                     alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Thanlon</p>
                <span class="glyphicon glyphicon-map-marker"></span><a href="#"> 在线</a>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li class="header">管理菜单</li>
            <li class="treeview">
                <a href="#">
                    <span class="glyphicon glyphicon-home"></span>
                    <span>首页</span>
                    <span class="label label-primary pull-right">1</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="/index.php/Admin/index/">
                            <span class="glyphicon "></span></span>控制面板
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <span class="glyphicon glyphicon-tags"></span>
                    <span>分类管理</span>
                    <span class="label label-primary pull-right">2</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="tag_add.html">
                            <span class="glyphicon"></span> 添加分类
                        </a>
                    </li>
                    <li>
                        <a href="tag_list.html">
                            <span class="glyphicon"></span> 分类列表
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <span class="glyphicon glyphicon-gift"></span>
                    <span>商品管理</span>
                    <span class="label label-primary pull-right">2</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="/index.php/Admin/Goods/lst">
                            <span class="glyphicon "></span>商品列表
                        </a>
                    </li>
                    <li>
                        <a href="/index.php/Admin/Goods/add">
                            <span class="glyphicon"></span>添加商品
                        </a>
                    </li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <span class="glyphicon glyphicon-user"></span>
                    <span>会员管理</span>
                    <span class="label label-primary pull-right">1</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="user_list.html">
                            <span class="glyphicon"></span>会员列表
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                   <span class="glyphicon glyphicon-comment"></span>
                    <span>评论管理</span>
                    <span class="label label-primary pull-right">1</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="comment_list.html">
                            <span class="glyphicon"></span> 评论列表
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                   <span class="glyphicon glyphicon-file"></span>
                    <span>资金管理</span>
                    <span class="label label-primary pull-right">1</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="comment_list.html">
                            <span class="glyphicon"></span>评论列表
                        </a>
                    </li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <span class="glyphicon glyphicon-user"></span>
                    <span>管理员管理</span>
                    <span class="label label-primary pull-right">2</span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="admin_add.html">
                            <span class="glyphicon"></span>添加管理员
                        </a>
                    </li>
                    <li>
                        <a href="admin_list.html">
                            <span class="glyphicon"></span>管理员列表
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
</aside>
    <div class="content-wrapper">
        <!--内容-->
        <section class="content-header">
            <h1>在线鲜花订购系统</h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> 商品管理</a></li>
                <li class="active">商品添加</li>
            </ol>
        </section>
        <section class="content" id="showcontent">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">添加商品</h3>
                        </div>
                        <form role="form" enctype="multipart/form-data" action="/index.php/Admin/Goods/add" method="post">
                            <div class="box-body">
                                <div class="form-group">
                                    <label>商品名称</label>
                                    <input type="text" class="form-control" id="goods_name" name="goods_name"
                                           placeholder="请输入商品名称！">
                                </div>
                                <div class="form-group">
                                    <label for="logo">Logo</label>
                                    <input type="file" id="logo" name="logo">
                                </div>
                                <div class="form-group">
                                    <label for="market_price">市场售价</label>
                                    <input type="text" class="form-control" id="market_price" name="market_price"
                                           placeholder="请输入市场售价！">
                                </div>
                                <div class="form-group">
                                    <label for="shop_price">本店售价</label>
                                    <input type="text" class="form-control" id="shop_price" name="shop_price"
                                           placeholder="请输入本店售价！">
                                </div>
                                <div class="form-group">
                                    <label>是否上架</label><br>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="is_on_sale" value="是"
                                                   checked>
                                            是
                                        </label>
                                        <label>
                                            <input type="radio" name="is_on_sale"
                                                   value="否">
                                            否
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>商品描述</label>
                                    <textarea id="editor" name="goods_desc"></textarea>
                                </div>
                            </div>
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary">添加</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </section>
        <!--内容-->
    </div>
    <footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>版本</b> 1.0
    </div>
    <strong>版权 &copy; 2019-2020 归<a href="">xxx</a>.</strong> 所有
</footer>
    <div class="control-sidebar-bg"></div>
</div>
<script src="/Public/Admin/js/jQuery-2.2.0.min.js"></script>
<script src="/Public/Common/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/Public/Admin/js/jquery.slimscroll.min.js"></script>
<script src="/Public/Admin/js/fastclick.min.js"></script>
<script src="/Public/Admin/js/app.min.js"></script>
<script src="//cdn.bootcss.com/holder/2.9.4/holder.min.js"></script>
<!--编辑器-->
<script type="text/javascript" charset="utf-8" src="/Public/Common/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/Public/Common/ueditor/ueditor.all.min.js"></script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/Public/Common/ueditor/lang/zh-cn/zh-cn.js"></script>
<!--/编辑器-->
<script>
    var ue = UE.getEditor('editor', {
        initialFrameWidth: '100%',  //初始化编辑器宽度
        initialFrameHeight: '150'  //初始化编辑器高度
    });
</script>
</body>
</html>