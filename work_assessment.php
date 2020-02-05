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
  <link rel="stylesheet" href="assets/css/editormd.css">
</head>
<body>
<?php
  // $id = $_GET['id'];
  // echo '<h1>'.$id.'</h1>';
?>

<div class="am-cf admin-main" style="padding-top: 0;">


  <!-- content start -->
  <div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">评估</strong> / <small>(work_assessment)</small></div>
      </div>
      <hr/>

      <form class="am-form am-form-horizontal">
        <div class="am-form-group am-form-group-sm">
          <label for="" class="am-u-sm-2 am-form-label">任务名称：</label>
          <div class="am-u-sm-10">
            <input type="text" id="" class="am-form-field rex-width-240 rex-no-selected" value="此处显示任务名称" disabled>
          </div>
        </div>
        <div class="am-form-group am-form-group-sm">
          <label for="" class="am-u-sm-2 am-form-label">预计花费时间：</label>
          <div class="am-u-sm-10">
            <input type="number" id="" class="am-form-field rex-width-240" placeholder="输入你的预计花费时间(单位/小时)">
          </div>
        </div>
        <!-- 其余状态需要下拉框的样式 -->
        <!-- <div class="am-form-group am-form-group-sm">
          <label for="" class="am-u-sm-2 am-form-label">是否提测：</label>
          <div class="am-u-sm-10">
            <select class="am-input-sm am-form-field rex-width-200 rex-height-38">
              <option value="">是</option>
              <option value="">否</option>
            </select>
          </div>
        </div> -->
        <!-- 其余状态需要下拉框的样式 -->
        <div class="am-form-group am-form-group-sm">
          <label for="" class="am-u-sm-2 am-form-label">备注信息：</label>
          <div class="am-u-sm-10">
            <div class="">
              <style scoped>
                .editormd{
                  width: 100% !important;
                }
              </style>
              <div id="test-editormd">
                  <textarea style="display:none;"></textarea>
              </div>
            </div>
            <button type="button" class="am-btn am-btn-md am-btn-primary rex-margin-top-30"><i class="am-icon-save"></i> 保存</button>
          </div>
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
<script type="text/javascript" src="assets/js/editormd.js"></script>
<script type="text/javascript">
    var testEditor;

    function EditormdExtend() {

        this.extend("methodC", function() {
            console.log("methodC");
        });

        // or
        testEditor.extend("methodA", function() {
            console.log("methodA");
        });

        // one by one setting
        this.set("propertyA", "propertyA");
        this.set("methodE", function() {
            console.log("mothodE", this);
        });

        // mutil
        this.extend({
            propertyA : "propertyAAAA", // override, you can override other default method.
            propertyB : "propertyB",
            methodD : function() {
                console.log("methodD");
            }
        });

        this.methodB = function() {
            console.log("methodB");
        };

        testEditor.methodA();
        testEditor.methodB();
        this.methodC();
        this.methodE();
        editormd.methodOne();

        console.log(this, this.propertyA);
    }

    editormd.fn.customMethod = function() {
        console.log("customMethod", this);
    };

    $(function() {
        editormd.methodOne = function() {
            console.log("editormd.methodOne");
        };

        testEditor = editormd("test-editormd", {
            width  : "90%",
            height : 720,
            path   : './assets/js/lib/',
            onload : function() {
                this.customMethod();
                $.proxy(EditormdExtend, this)();
            }
        });

        editormd.methodOne();
    });
</script>
</body>
</html>








