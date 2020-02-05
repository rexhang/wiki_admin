<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>个人资料卡</title>
  <meta name="description" content="这是一个 user 页面">
  <meta name="keywords" content="user">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="assets/css/admin.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/card.css">
  <link rel="stylesheet" href="assets/css/animate.css">
</head>
<body style="background: url('img/bg.jpg')">
    <?php
    include('navbar.html');
    ?>

    <div class="row am-cf">
        <div class="card am-u-sm-10 am-u-sm-offset-1 am-u-md-6 am-u-md-offset-3 am-u-lg-6 am-u-lg-offset-3">
            <h3 class="am-text-center tit">
                <img src="http://test.rexhang.com/img/rexhang.png" alt="rexhang" width="100" height="100">
            </h3>
            <form class="am-form am-form-horizontal">
              <div class="am-form-group am-form-group-sm">
                <label for="" class="am-u-sm-0 am-form-label am-text-left rex-margin-bottom-4">用户名：</label>
                <div class="am-u-sm-12">
                  <div class="am-form-group am-form-icon">
                    <i class="am-icon-user am-text-primary"></i>
                    <input type="text" class="rex-padding-left-28" value="顾航" onfocus="this.blur()">
                  </div>
                </div>
              </div>
              <div class="am-form-group am-form-group-sm">
                <label for="" class="am-u-sm-0 am-form-label am-text-left rex-margin-bottom-4">邮箱：</label>
                <div class="am-u-sm-12">
                  <div class="am-form-group am-form-icon">
                    <i class="am-icon-envelope am-text-primary"></i>
                    <input type="email" class="rex-padding-left-28" value="guhang@dailyyoga.com" onfocus="this.blur()">
                  </div>
                </div>
              </div>
              <div class="am-form-group am-form-group-sm">
                <label for="" class="am-u-sm-0 am-form-label am-text-left rex-margin-bottom-4">手机：</label>
                <div class="am-u-sm-12">
                  <div class="am-form-group am-form-icon">
                    <i class="am-icon-phone am-text-primary"></i>
                    <input type="text" class="rex-padding-left-28" value="17089494954" onfocus="this.blur()">
                  </div>
                </div>
              </div>
              <div class="am-form-group am-form-group-sm">
                <label for="" class="am-u-sm-0 am-form-label am-text-left rex-margin-bottom-4">部门：</label>
                <div class="am-u-sm-12">
                  <div class="am-form-group am-form-icon">
                    <i class="am-icon-flag am-text-primary"></i>
                    <input type="text" class="rex-padding-left-28" value="H2" onfocus="this.blur()">
                  </div>
                </div>
              </div>
              <div class="am-form-group am-form-group-sm">
                <label for="" class="am-u-sm-0 am-form-label am-text-left rex-margin-bottom-4">角色：</label>
                <div class="am-u-sm-12">
                  <div class="am-form-group am-form-icon">
                    <i class="am-icon-user-secret am-text-primary"></i>
                    <input type="text" class="rex-padding-left-28" value="技术负责人" onfocus="this.blur()">
                  </div>
                </div>
              </div>

            </form>
        </div>
    </div>
    <footer class="admin-content-footer am-text-center" id="setfotter">
      <p class="am-padding-left">www.dailyyoga.com Copyright © 2012-2016</p>
      <p class="am-padding-left">西安瑜乐软件科技有限公司</p>
    </footer>
<script type="text/javascript" src="js/jq.js"></script>
<script type="text/javascript" src="assets/js/amazeui.js"></script>
<script type="text/javascript">
    $(window).load(function(){
        $(".card").addClass("animated zoomIn");
    });
</script>
</body>
</html>








