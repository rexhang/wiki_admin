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
  <script type="text/javascript" src="js/jq.js"></script>
  <script type="text/javascript" src="assets/js/editormd.js"></script>

</head>
<body>


<div class="am-cf admin-main" style="padding-top: 0;">


  <!-- content start -->
  <div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">编辑任务</strong> / <small>Edit task</small></div>
      </div>
      <hr/>
      <!-- tabs -->
      <div class="am-tabs am-padding" data-am-tabs>
        <ul class="am-tabs-nav am-nav am-nav-tabs">
          <li class="am-active"><a href="#tab1"><i class="am-icon-edit"></i> 编辑模块一</a></li>
          <li><a href="#tab2"><i class="am-icon-edit"></i> 编辑模块二</a></li>
          <li><a href="#tab3"><i class="am-icon-edit"></i> 编辑模块三</a></li>
          <li><a href="#tab4"><i class="am-icon-edit"></i> 编辑模块四</a></li>
          <li><a href="#tab5"><i class="am-icon-edit"></i> 编辑模块五</a></li>
        </ul>
        <div class="am-tabs-bd">
          <div class="am-tab-panel am-fade am-in am-active" id="tab1">
            <!-- 编辑模块一 -->
            <form class="am-form am-form-horizontal">
              <div class="am-form-group am-form-group-sm">
                <label class="am-u-sm-2 am-form-label">项目：</label>
                <div class="am-u-sm-10">
                  <select id="" class="am-input-sm rex-width-200">
                    <option value="option1">H2</option>
                    <option value="option2">H2O</option>
                    <option value="option3">O2</option>
                  </select>
                </div>
              </div>
              <div class="am-form-group am-form-group-sm">
                <label class="am-u-sm-2 am-form-label">版本：</label>
                <div class="am-u-sm-10">
                  <select id="" class="am-input-sm rex-width-200">
                    <option value="option1">620</option>
                    <option value="option2">630</option>
                    <option value="option3">640</option>
                  </select>
                </div>
              </div>
              <div class="am-form-group am-form-group-sm">
                <label class="am-u-sm-2 am-form-label">终端：</label>
                <div class="am-u-sm-10">
                  <select id="" class="am-input-sm rex-width-200">
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
                    <option value="option1">低</option>
                    <option value="option2">中</option>
                    <option value="option3">高</option>
                  </select>
                </div>
              </div>
              <div class="am-form-group am-form-group-sm">
                <label for="doc-ipt-3-1" class="am-u-sm-2 am-form-label">模块名称：</label>
                <div class="am-u-sm-10">
                  <input type="text" id="doc-ipt-3-1" class="am-form-field rex-width-200" value="模块名称abc……" placeholder="输入你的模块名称">
                </div>
              </div>
              <div class="am-form-group am-form-group-sm">
                <label for="doc-ipt-3-1" class="am-u-sm-2 am-form-label">任务内容：</label>
                <div class="am-u-sm-10">
                  <div>
                    <div id="test-editormd">

                    </div>
                  </div>
                </div>
              </div>


              <div class="am-u-sm-offset-2">
                <a href="javascript:;" class="am-btn am-btn-sm am-btn-primary"><i class="am-icon-save"></i> 保存</a>
              </div>
            </form>


          </div>
          <div class="am-tab-panel am-fade" id="tab2">
          <!-- 编辑模块二 -->
          <form class="am-form am-form-horizontal">
            <div class="am-form-group am-form-group-sm">
              <label class="am-u-sm-2 am-form-label">开发人员：</label>
              <div class="am-u-sm-10">
                <select id="" class="am-input-sm rex-width-200">
                  <option value="option1">杨飞</option>
                  <option value="option2">张磊</option>
                  <option value="option3">郭小伟</option>
                </select>
              </div>
            </div>
            <div class="am-form-group am-form-group-sm">
              <label class="am-u-sm-2 am-form-label">测试人员：</label>
              <div class="am-u-sm-10">
                <select id="" class="am-input-sm rex-width-200">
                  <option value="option1">赵露萍</option>
                  <option value="option2">任凯</option>
                  <option value="option3">你</option>
                </select>
              </div>
            </div>
            <div class="am-form-group am-form-group-sm">
              <label class="am-u-sm-2 am-form-label">分配任务人员：</label>
              <div class="am-u-sm-10">
                <select id="" class="am-input-sm rex-width-200">
                  <option value="option1">杨飞</option>
                  <option value="option2">任凯</option>
                  <option value="option3">你</option>
                </select>
              </div>
            </div>
            <div class="am-form-group am-form-group-sm">
              <label for="doc-ipt-3-1" class="am-u-sm-2 am-form-label">最终审核人员：</label>
              <div class="am-u-sm-10">
                <select id="" class="am-input-sm rex-width-200">
                  <option value="option1">杨飞</option>
                  <option value="option2">任凯</option>
                  <option value="option3">你</option>
                </select>
              </div>
            </div>
            <div class="am-form-group am-form-group-sm">
              <label for="doc-ipt-3-1" class="am-u-sm-2 am-form-label">任务备注：</label>
              <div class="am-u-sm-10">
                <div>
                  <div id="test-editormd2">

                  </div>
                </div>
              </div>
            </div>
            <div class="am-u-sm-offset-2">
              <a href="javascript:;" class="am-btn am-btn-sm am-btn-primary"><i class="am-icon-save"></i> 保存</a>
            </div>
          </form>
          </div>
          <div class="am-tab-panel am-fade" id="tab3">
          <!-- 编辑模块三 -->
          <form class="am-form am-form-horizontal">
            <div class="am-form-group am-form-group-sm">
              <label for="doc-ipt-3-1" class="am-u-sm-2 am-form-label">预计工时：</label>
              <div class="am-u-sm-10">
                <input type="text" id="doc-ipt-3-1" class="am-form-field rex-width-200" value="4" placeholder="输入你的预计工时(单位/小时)">
              </div>
            </div>
            <div class="am-form-group am-form-group-sm">
              <label for="doc-ipt-3-1" class="am-u-sm-2 am-form-label">预计备注：</label>
              <div class="am-u-sm-10">
                <div>
                  <div id="test-editormd3">

                  </div>
                </div>
              </div>
            </div>
            <div class="am-u-sm-offset-2">
              <a href="javascript:;" class="am-btn am-btn-sm am-btn-primary"><i class="am-icon-save"></i> 保存</a>
            </div>
          </form>
          </div>
          <div class="am-tab-panel am-fade" id="tab4">
            <!-- 编辑模块四 -->
            <form class="am-form am-form-horizontal">
              <div class="am-form-group am-form-group-sm">
                <label class="am-u-sm-2 am-form-label">任务状态：</label>
                <div class="am-u-sm-10">
                  <select id="" class="am-input-sm rex-width-200">
                    <option value="option1">已结束</option>
                    <option value="option2">待启动</option>
                    <option value="option3">已完成</option>
                  </select>
                </div>
              </div>
              <div class="am-form-group am-form-group-sm">
                <label class="am-u-sm-2 am-form-label">执行人员：</label>
                <div class="am-u-sm-10">
                  <select id="" class="am-input-sm rex-width-200">
                    <option value="option1">杨飞</option>
                    <option value="option2">顾航</option>
                    <option value="option3">张磊</option>
                  </select>
                </div>
              </div>
              <div class="am-form-group am-form-group-sm">
                <label for="doc-ipt-3-1" class="am-u-sm-2 am-form-label">分配原因：</label>
                <div class="am-u-sm-10">
                  <div>
                    <div id="test-editormd4">

                    </div>
                  </div>
                </div>
              </div>
              <div class="am-u-sm-offset-2">
                <a href="javascript:;" class="am-btn am-btn-sm am-btn-primary"><i class="am-icon-save"></i> 保存</a>
              </div>
            </form>
          </div>
          <div class="am-tab-panel am-fade" id="tab5">
            <!-- 编辑模块五 -->
            <table class="am-table am-table-bordered am-table-striped am-table-compact am-text-center am-table-hover">
              <thead class="rex-bg-success" style="color: #fff;">
              <tr>
                <th class="am-text-center">创建时间</th>
                <th class="am-text-center">任务状态</th>
                <th class="am-text-center">当前人员</th>
                <th class="am-text-center">备注</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>2016-09-06 11:41</td>
                <td>已结束</td>
                <td>杨飞</td>
                <td>待启动哦</td>
              </tr>
              <tr>
                <td>2016-09-06 12:41</td>
                <td>进行中</td>
                <td>张磊</td>
                <td>我已经启动任务了</td>
              </tr>
              <tr>
                <td>2016-08-26 12:41</td>
                <td>待测试</td>
                <td>顾航</td>
                <td>带上线紧急</td>
              </tr>



              </tbody>
            </table>
          </div>
        </div>
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

<script src="assets/js/amazeui.min.js"></script>
<script type="text/javascript">
    var testEditormd, testEditormd2, testEditormd3, testEditormd4;
    $(function() {
        testEditormd = editormd("test-editormd", {
            width: "100%",
            height: 720,
            markdown : "#### null 1",
            path : './assets/js/lib/'
        });

        testEditormd2 = editormd("test-editormd2", {
            width: "100%",
            height: 720,
            markdown : "#### null 2",
            path : './assets/js/lib/'
        });

        testEditormd3 = editormd("test-editormd3", {
            width: "100%",
            height: 720,
            markdown : "#### null 3",
            path : './assets/js/lib/'
        });

        testEditormd4 = editormd("test-editormd4", {
            width: "100%",
            height: 720,
            markdown : "#### null 4",
            path : './assets/js/lib/'
        });
    });
</script>
</body>
</html>








