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


<div class="am-cf admin-main" style="padding-top: 0;">


  <!-- content start -->
  <div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">权限管理</strong> / <small style="white-space: nowrap;">Jurisdiction control</small></div>
      </div>
      <hr/>


      <!-- 表格 -->
      <div class="am-padding">
        <form class="am-form-inline am-padding" role="form">
          <a href="javascript:;" class="am-badge am-badge-warning" onclick="allsel()">全选</a>
          <span> / </span>
          <a href="javascript:;" class="am-badge am-badge-warning" onclick="unallsel()">全不选</a>
          <table class="am-table am-table-bordered am-table-striped am-table-compact am-text-center rex-margin-top-15">
            <thead class="rex-bg-success" style="color: #fff;">
            <tr>
              <th class="am-text-center">编号</th>
              <th class="am-text-center">菜单名称</th>
              <th class="am-text-center">template_name</th>
              <th class="am-text-center">action_name</th>
            </tr>
            </thead>
            <tbody id="selcheck">
            <tr>
              <td class="dbclick rex-no-selected">
                <label class="am-checkbox-inline">
                  <input type="checkbox" value="Robert"> 选中
                </label>
              </td>
              <td>
                日报
              </td>
              <td></td>
              <td>dailyreport/index</td>
            </tr>
            <tr>
              <td class="dbclick rex-no-selected">
                <label class="am-checkbox-inline">
                  <input type="checkbox" value="Robert"> 选中
                </label>
              </td>
              <td>
                ┃日报列表
              </td>
              <td></td>
              <td>dailyreport/list</td>
            </tr>
            <tr>
              <td class="dbclick rex-no-selected">
                <label class="am-checkbox-inline">
                  <input type="checkbox" value="Robert"> 选中
                </label>
              </td>
              <td>
                ┃板块设置
              </td>
              <td>
                wikimodule/index
              </td>
              <td>wikimodule/index</td>
            </tr>
            </tbody>
          </table>
          <div>
            <a href="javascript:;" class="am-btn am-btn-secondary"><i class="am-icon-save"></i> 保存</a>
          </div>
        </form>


      </div>

      <!-- 分页 -->
      <div class="am-padding">
        <ul data-am-widget="pagination" class="am-pagination am-pagination-centered">
             <li class="am-pagination-first ">
               <a href="#" class="">第一页</a>
             </li>
             <li class="am-pagination-prev ">
               <a href="#" class="">上一页</a>
             </li>
                   <li class="">
                     <a href="#" class="">1</a>
                   </li>
                   <li class="am-active">
                     <a href="#" class="am-active">2</a>
                   </li>
                   <li class="">
                     <a href="#" class="">3</a>
                   </li>
                   <li class="">
                     <a href="#" class="">4</a>
                   </li>
                   <li class="">
                     <a href="#" class="">5</a>
                   </li>
             <li class="am-pagination-next ">
               <a href="#" class="">下一页</a>
             </li>
             <li class="am-pagination-last ">
               <a href="#" class="">最末页</a>
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
<script type="text/javascript">

    function allsel(){
      $('#selcheck tr td').find("input[type='checkbox']").prop('checked', true);
    }
    function unallsel(){
      $('#selcheck tr td').find("input[type='checkbox']").prop('checked', false);
    }

</script>

</body>
</html>








