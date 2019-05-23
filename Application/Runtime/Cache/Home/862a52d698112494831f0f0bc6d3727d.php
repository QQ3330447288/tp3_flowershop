<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>全部鲜花</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="/Public/Home/css/home.css">

</head>
<body>
<nav class="navbar navbar-default" style="min-height:30px;line-height: 30px">
    <div class="container">
        <div class="row" style="font-size: 12px;">
            <div class="col-md-5">
                <?php if(session('m_id')): ?>
                您好，欢迎<?php echo session('m_username');?>的到来！
                [<a href="<?php echo U('Member/logout');?>">退出</a>]
                <?php else:?>
                您好，欢迎来到鲜花商城！<a href="<?php echo U('Member/login');?>">请登录</a>&nbsp;|&nbsp;<a
                    href="<?php echo U('Member/register');?>">免费注册</a>
                <?php endif;?>
            </div>
            <div class="col-md-2 pull-right text-right">
                订单查询&nbsp;&nbsp;购物车0件
            </div>
        </div>
    </div>
</nav>
<div class="container">
    <div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form class="navbar-form navbar-left" role="search">
            <div class="form-group input-group">
                <input type="text" size="60" class="form-control" placeholder="百合" id="searchArt" style="border-color: #f46;
    border-width: 2px;">
                <span class="input-group-btn">
                        <a class="btn btn-default" id="search" style="border-color: #f46;
    border-width: 1px;background:#f46;color:#FFFFFF; ">搜索</a>
                </span>
            </div>
        </form>
    </div>
    <div class="col-md-3 text-right">
        <a href=""><img src="http://cdn.huaduocai.net/Storage/logo/1/5057119636264957.png" width="130" height="40"></a>
    </div>
</div>
<div class="row" style="margin-top: 20px">
    <ul class="nav nav-pills nav-justified">
        <li role="presentation"><a href="#"></a></li>
        <li role="presentation"><a href="#" style="color: #666;">全部鲜花</a></li>
        <li role="presentation"><a href="#" style="color: #666;">爱情鲜花</a></li>
        <li role="presentation"><a href="#" style="color: #666;">生日鲜花</a></li>
        <li role="presentation"><a href="#" style="color: #666;">开业花篮</a></li>
        <li role="presentation"><a href="#" style="color: #666;">永生花</a></li>
        <li role="presentation"><a href="#" style="color: #666;">绿植</a></li>
        <li role="presentation"><a href="#" style="color: #666;">高端鲜花</a></li>
        <li role="presentation"><a href="#" style="color: #666;">精品鲜花</a></li>
    </ul>
    <hr style="border-width:5px;border-top:3px solid #f46;margin-top: 0;margin-bottom:3px;">
</div>
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="/index.php/Home">全部鲜花</a></li>
            <li class="active"><?php echo $info['goods_name']?></li>
        </ol>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default">
                <img src="/Public/Uploads/<?php echo $info['big_logo']?>" alt=""
                     class="img-responsive img-thumbnail"
                     data-bd-imgshare-binded="1">
            </div>
        </div>
        <div class="col-md-9">
            <h5><?php echo $info['goods_name']?></h5>
            <table class="table table-bordered">
                <tr>
                    <td style="background:#ffeff1">品牌</td>
                    <td><?php echo $info['goods_name']?></td>
                </tr>
                <tr>
                    <td style="background:#ffeff1">分类</td>
                    <td><?php echo $info['goods_name']?></td>
                </tr>
                <tr>
                    <td style="background:#ffeff1">配送范围</td>
                    <td>本地区各市县、乡镇、街道（市区内免费配送）</td>
                </tr>
                <tr>
                    <td style="background:#ffeff1">附送赠品</td>
                    <td>免费附送精美贺卡，代写你的祝福。</td>
                </tr>
                <tr>
                    <td style="background:#ffeff1">商品说明</td>
                    <td>由于手工包扎，可能在花束的形式和搭配上与图片不完全一致，但我们保证鲜花的主花材品种、数量、颜色与说明一致</td>
                </tr>
            </table>
            <div class="panel panel-default">
                <div class="panel-body">
                    优惠价 <span style="color: red">￥</span><span
                        style="color: red;font-size: 20px;font-weight: bold"><?php echo $info['shop_price']?></span>
                    <span style="font-size: 20px"> | </span>
                    <del>市场价格：￥<?php echo $info['market_price']?></del>
                    &nbsp;&nbsp;&nbsp;&nbsp;累计销量
                    <span style="color: red;"><?php echo $info['shop_price']?></span>
                    &nbsp;&nbsp;<span>评价数量</span>
                    <span style="color: red;"><?php echo $info['shop_price']?></span>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    数量：
                </div>
            </div>
            <p>
                <button type="button" class="btn btn-primary btn-lg" style="background:#f46;border-radius: 0px;">立即购买
                </button>
                <button type="button" class="btn btn-default btn-lg" style="background:#ffeded;border-radius: 0px;">
                    加入购物车
                </button>
            </p>
        </div>
    </div>
    <div class="row" style="margin-top: 20px">
        <div class="col-md-9 pull-right">
            <ul class="nav nav-tabs">
                <li role="presentation" class="active" id="goods_desc"><a href="javascript:;">商品详情</a></li>
                <li role="presentation" id="comment"><a href="javascript:;">评价信息</a></li>
            </ul>
        </div>
    </div>
    <div class="row" style="">
        <div class="col-md-9 pull-right">
            <div id="desc">
                <?php echo $info['goods_desc']?>
            </div>
            <div id="comm" hidden="hidden">
                暂无评价信息
            </div>
        </div>
    </div>
    <hr style="border-width: 2px">
<div class="row" style="margin-bottom: 30px;margin-top: 30px">
    <!-- 底部版权 start -->
    <div class="text-center">
        <p>
            <a href="">关于我们</a> |
            <a href="">联系我们</a> |
            <a href="">商家入驻</a> |
            <a href="">广告服务</a> |
            <a href="">友情链接</a> |
        </p>
        <p class="copyright">
            © 2019-2020 xxx鲜花店 版权所有
        </p>
    </div>
    <!-- 底部版权 end -->
</div>
</div>
</body>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
<script>
    $(document).ready(
        $('#goods_desc').click(function () {
            $('#goods_desc').addClass('active');
            $('#comment').removeClass('active');
            $('#comm').attr('hidden', 'hidden');
            $('#desc').removeAttr('hidden');
        }),
        $('#comment').click(function () {
            $('#comment').addClass('active');
            $('#goods_desc').removeClass('active');
            $('#desc').attr('hidden', 'hidden');
            $('#comm').removeAttr('hidden');
        })
    )
</script>
</html>