<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>iframe-contents-template</title>
  <meta name="description" content="这是一个 user 页面">
  <meta name="keywords" content="user">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="assets/css/admin.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
  $id = $_GET['id'];
  echo '<h1>'.$id.'</h1>';
?>

<div class="am-cf admin-main" style="padding-top: 0;">


  <!-- content start -->
  <div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">顾航的日报</strong> / <small>(2016-09-02)</small></div>
      </div>
      <hr/>

      <!-- 表格 -->
      <div class="am-padding">
        <table class="am-table am-table-bordered am-table-striped am-table-compact am-text-center am-table-hover">
          <thead class="rex-bg-success" style="color: #fff;">
          <tr>
            <th class="am-text-center">事项</th>
            <th class="am-text-center">耗时（小时）</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>完成某个UI的修改。</td>
            <td>2</td>
          </tr>
          <tr>
            <td>完成某个UI的修改3。。。</td>
            <td>3</td>
          </tr>
          <tr>
            <td>完成某个UI的修改2。。</td>
            <td>1</td>
          </tr>

          </tbody>
        </table>
      </div>

      <!-- 分页 -->
      <div class="am-padding">
        <ul data-am-widget="pagination" class="am-pagination am-pagination-centered">
             <li class="am-pagination-first ">
               <a href="javascript:;" class="">第一页</a>
             </li>
             <li class="am-pagination-prev ">
               <a href="javascript:;" class="">上一页</a>
             </li>
                   <li class="">
                     <a href="javascript:;" class="">1</a>
                   </li>
                   <li class="am-active">
                     <a href="javascript:;" class="am-active">2</a>
                   </li>
                   <li class="">
                     <a href="javascript:;" class="">3</a>
                   </li>
                   <li class="">
                     <a href="javascript:;" class="">4</a>
                   </li>
                   <li class="">
                     <a href="javascript:;" class="">5</a>
                   </li>
             <li class="am-pagination-next ">
               <a href="javascript:;" class="">下一页</a>
             </li>
             <li class="am-pagination-last ">
               <a href="javascript:;" class="">最末页</a>
             </li>
         </ul>
      </div>
    <!-- content -->


    </div>

    <footer class="admin-content-footer am-text-center">
      <hr>
      <p class="am-padding-left">www.dailyyoga.com Copyright © 2012-2016</p>
      <p class="am-padding-left">西安瑜乐软件科技有限公司</p>
    </footer>

  </div>
  <!-- content end -->

<script type="text/javascript" src="js/jq.js"></script>
<script src="assets/js/amazeui.min.js"></script>
</body>
</html>








