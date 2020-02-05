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
  <style>
    #editor{
      width: 50% !important;
      /*position: relative;
      left: 25% !important;*/
    }
  </style>
</head>
<body>

<div id="alert">

</div>
<div class="am-cf admin-main" style="padding-top: 0;">


  <!-- content start -->
  <div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">添加任务</strong> / <small>Add task</small></div>
      </div>
      <hr/>
      <form class="am-form am-form-horizontal">
        <!-- am-form-group 的基础上添加了 am-form-group-sm -->
        <!-- <div class="am-form-group am-form-group-sm">
          <label for="doc-ipt-3-1" class="am-u-sm-2 am-form-label">标题：</label>
          <div class="am-u-sm-10">
            <input type="text" id="doc-ipt-3-1" class="am-form-field rex-width-200" placeholder="输入你的wiki标题">
          </div>
        </div> -->

        <div class="am-form-group am-form-group-sm">
          <label class="am-u-sm-2 am-form-label">项目：</label>
          <div class="am-u-sm-10">
            <select id="" class="am-input-sm rex-width-200">
              <option value="">-- 请选择 --</option>
              <option value="option1">H2</option>
              <option value="option2">H2O</option>
              <option value="option3">O2</option>
            </select>
          </div>
        </div>

        <div class="am-form-group am-form-group-sm">
          <label class="am-u-sm-2 am-form-label">版本：</label>
          <div class="am-u-sm-10">
            <select id="" class="am-input-sm rex-width-200" disabled>
              <option value="">-- 请选择 --</option>
              <option value="option1">H2</option>
              <option value="option2">H2O</option>
              <option value="option3">O2</option>
            </select>
          </div>
        </div>
        <div class="am-form-group am-form-group-sm">
          <label class="am-u-sm-2 am-form-label">终端：</label>
          <div class="am-u-sm-10">
            <select id="" class="am-input-sm rex-width-200">
              <option value="">-- 请选择 --</option>
              <option value="option1">ios</option>
              <option value="option2">web</option>
              <option value="option3">android</option>
            </select>
          </div>
        </div>
        <div class="am-form-group am-form-group-sm">
          <label class="am-u-sm-2 am-form-label">任务等级：</label>
          <div class="am-u-sm-10">
            <select id="" class="am-input-sm rex-width-200">
              <option value="">-- 请选择 --</option>
              <option value="option1">低</option>
              <option value="option2">中</option>
              <option value="option3">高</option>
            </select>
          </div>
        </div>

        <div class="am-form-group am-form-group-sm">
          <label for="doc-ipt-3-1" class="am-u-sm-2 am-form-label">模块名称：</label>
          <div class="am-u-sm-10">
            <input type="text" id="doc-ipt-3-1" class="am-form-field rex-width-200" placeholder="输入你的模块名称">
          </div>
        </div>

        <div class="am-form-group am-form-group-sm">
          <label for="doc-ipt-3-1" class="am-u-sm-2 am-form-label">任务内容：</label>
          <div class="am-u-sm-10">
            <textarea class="rex-textarea rex-height-200" placeholder="输入任务备注"></textarea>
          </div>
        </div>

        <div class="am-form-group am-form-group-sm">
          <label class="am-u-sm-2 am-form-label">开发人员：</label>
          <div class="am-u-sm-10">
            <select id="" class="am-input-sm rex-width-200">
              <option value="">-- 请选择 --</option>
              <option value="option1">杨飞</option>
              <option value="option2">张磊</option>
              <option value="option3">顾航</option>
            </select>
          </div>
        </div>

        <div class="am-form-group am-form-group-sm">
          <label class="am-u-sm-2 am-form-label">测试人员：</label>
          <div class="am-u-sm-10">
            <select id="" class="am-input-sm rex-width-200">
              <option value="">-- 请选择 --</option>
              <option value="option1">杨飞</option>
              <option value="option2">张磊</option>
              <option value="option3">顾航</option>
            </select>
          </div>
        </div>

        <div class="am-form-group am-form-group-sm">
          <label class="am-u-sm-2 am-form-label">分配任务人员：</label>
          <div class="am-u-sm-10">
            <select id="" class="am-input-sm rex-width-200">
              <option value="">-- 请选择 --</option>
              <option value="option1">杨飞</option>
              <option value="option2">张磊</option>
              <option value="option3">顾航</option>
            </select>
          </div>
        </div>

        <div class="am-form-group am-form-group-sm">
          <label class="am-u-sm-2 am-form-label">最终审核人员：</label>
          <div class="am-u-sm-10">
            <select id="" class="am-input-sm rex-width-200">
              <option value="">-- 请选择 --</option>
              <option value="option1">杨飞</option>
              <option value="option2">张磊</option>
              <option value="option3">顾航</option>
            </select>
          </div>
        </div>

        <div class="am-form-group am-form-group-sm">
          <label for="doc-ipt-3-1" class="am-u-sm-2 am-form-label">任务备注：</label>
          <div class="am-u-sm-10">
            <textarea class="rex-textarea rex-height-200" placeholder="输入任务备注"></textarea>
          </div>
        </div>

        <div class="am-form-group am-form-group-sm">
          <label for="doc-ipt-3-1" class="am-u-sm-2 am-form-label">预计工时：</label>
          <div class="am-u-sm-10">
            <input type="text" id="doc-ipt-3-1" class="am-form-field rex-width-200" placeholder="输入预计工时(单位/小时)">
          </div>
        </div>

        <div class="am-form-group am-form-group-sm">
          <label for="doc-ipt-3-1" class="am-u-sm-2 am-form-label">预计备注：</label>
          <div class="am-u-sm-10">
            <textarea class="rex-textarea rex-height-200" placeholder="输入预计备注"></textarea>
          </div>
        </div>


        <div class="am-u-sm-offset-2 rex-margin-top-30 rex-margin-bottom-30">
          <a href="javascript:;" class="am-btn am-btn-sm am-btn-primary" onclick="isalert('添加成功!')"><i class="am-icon-save"></i> 保存</a>
        </div>

      </form>










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
  // 提示功能
  function isalert(msg,status,times){
    if(status){status = status} else{status = 'success'}; // 默认成功样式
    if(times){times = times} else{times = 1000}; // 默认1秒自动消失
    var alertTags = '<div class="am-alert am-text-center am-alert-'+status+'" data-am-alert><button type="button" id="alertclose" class="am-close">&times;</button><p>'+msg+'</p></div>';
    $("#alert").append(alertTags);
    setTimeout(function(){
      $('#alertclose').trigger('click');
    },times);
  };
  //alert('hello','danger',3000);
</script>
</body>
</html>








