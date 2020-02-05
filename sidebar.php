<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>sidebar</title>
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="shortcut icon" href="favicon.ico" />
  <link rel="bookmark" href="favicon.ico" />
  <!-- <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="css/style.css"> -->

  <!-- 单页显示的时候请打开上面 注释掉的2个引入 否则则不需要 -->
  <link rel="stylesheet" href="assets/css/admin.css">

  <script type="text/javascript" language="javascript">
    function iFrameHeight() {
      var ifm = document.getElementById("mainweb");
      var subWeb = document.frames ? document.frames["mainweb"].document :
      ifm.contentDocument;
      if(ifm != null && subWeb != null) {
        ifm.height = subWeb.body.scrollHeight;
      }
    }
    window.onload = function(){
      var winW = document.documentElement.clientWidth;
      var domW = document.getElementById('admin-offcanvas').offsetWidth;
      document.getElementById("mainweb").style.width = (winW - domW) + 'px';
    }
  </script>
</head>
<body>

<div class="am-cf admin-main">
  <!-- sidebar start -->
  <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">

      <ul class="am-list admin-sidebar-list">

        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav1'}"><i class="am-icon-wpforms"></i> 日报 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub am-in" id="collapse-nav1">
            <li><a href="#/Daily-list" onclick="opennewtab('Daily-list.html')" class="am-cf"><span class="am-icon-list-ol"></span> 日报列表</a></li>
            <li><a href="#/Write-daily" onclick="opennewtab('Write-daily.html')"><span class="am-icon-paint-brush"></span> 写日报</a></li>
          </ul>
        </li>

        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav2'}"><span class="am-icon-rss"></span> wiki <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-nav2">
            <li><a href="#/Tags-settings" onclick="opennewtab('Tags-settings.html')" class="am-cf"><span class="am-icon-code"></span> 标签设置</a></li>
            <li><a href="#/Board-settings" onclick="opennewtab('Board-settings.html')"><span class="am-icon-puzzle-piece"></span> 板块设置</a></li>
            <li><a href="#/Wiki-list" onclick="opennewtab('Wiki-list.html')"><span class="am-icon-list"></span> wiki列表</a></li>
            <li><a href="#/Create-wiki" onclick="opennewtab('Create-wiki.html')"><span class="am-icon-plus"></span> 创建</a></li>
          </ul>
        </li>

        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav3'}"><span class="am-icon-tasks"></span> 任务 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-nav3">
            <li><a href="#/Terminal-control" onclick="opennewtab('Terminal-control.html')" class="am-cf"><span class="am-icon-users"></span> 终端管理</a></li>
            <li><a href="#/Version-control" onclick="opennewtab('Version-control.html')"><span class="am-icon-vimeo"></span> 版本管理</a></li>
            <li><a href="#/Mywork" onclick="opennewtab('Mywork.html')"><span class="am-icon-cc-paypal"></span> 我的工作台</a></li>
            <li><a href="#/Task-control" onclick="opennewtab('Task-control.html')"><span class="am-icon-tags"></span> 任务管理</a></li>
          </ul>
        </li>

        <li class="admin-parent">
          <a class="am-cf" data-am-collapse="{target: '#collapse-nav4'}"><span class="am-icon-cog"></span> 系统管理 <span class="am-icon-angle-right am-fr am-margin-right"></span></a>
          <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-nav4">
            <li><a href="#/Role-control" class="am-cf" onclick="opennewtab('Role-control.html')"><span class="am-icon-user"></span> 角色管理</a></li>
            <li><a href="#/Menu-control" onclick="opennewtab('Menu-control.html')"><span class="am-icon-th-list"></span> 菜单管理</a></li>
            <li><a href="#/Department-control" onclick="opennewtab('Department-control.html')"><span class="am-icon-user-md"></span> 部门管理</a></li>
            <li><a href="#/User-control" onclick="opennewtab('User-control.html')"><span class="am-icon-user-secret"></span> 用户管理</a></li>
          </ul>
        </li>

        <li class="admin-parent">
          <a class="am-cf" href="javascript:;" onclick="reloadthispage()"><span class="am-icon-undo"></span> 刷新当前页</a>
        </li>


        <li class="admin-parent">
          <a class="am-cf" href="login.html"><span class="am-icon-power-off"></span> 退出</a>
        </li>




      </ul>

    </div>
  </div>
  <!-- sidebar end -->

  <!-- content start -->
  <iframe runat="server" name="showcontents" src="default.html" width="0" height="100%" frameborder="no" border="0" marginwidth="0" marginheight="0" scrolling="no" allowtransparency="yes" id="mainweb" onload="iFrameHeight()"></iframe>
  <!-- content end -->


</div>


<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<footer class="am-text-center">
  <hr>
  <p class="am-padding-left">www.dailyyoga.com Copyright © 2012-2016</p>
  <p class="am-padding-left">西安瑜乐软件科技有限公司</p>
</footer>

<script type="text/javascript" src="js/jq.js"></script>
<script src="assets/js/amazeui.min.js"></script>
<script type="text/javascript">
  function opennewtab(URL){
    if(URL){document.getElementById('mainweb').setAttribute('src',URL);}
    else{return false};
  }
  function reloadthispage(){
    var src = document.getElementById('mainweb').getAttribute('src');
    document.getElementById('mainweb').setAttribute('src',src);
  }
  $(function(){
    $('.admin-parent li a').click(function(){
      $('.admin-parent li a').removeClass('am-active');
      $(this).addClass('am-active');
    })
  })
</script>
</body>
</html>
