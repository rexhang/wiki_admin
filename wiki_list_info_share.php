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
<?php $title = $_GET['id']; ?>
<?php include('navbar_share.html'); ?>
<div class="am-cf admin-main" style="padding-top: 0;">


  <!-- content start -->
  <div class="admin-content">
    <div class="admin-content-body">

            <!-- 面板 -->
      <div class="am-padding">
        <a href="javascript:;" id="watch">切换视图</a>
        <div id="editormd" style="margin-top: 15px;">
          <textarea>
本月H2 https功能上线，简单总结一下。
### 先上概念，HTTPS和HTTP的区别
超文本传输协议HTTP协议被用于在Web浏览器和网站服务器之间传递信息。HTTP协议以明文方式发送内容，不提供任何方式的数据加密，如果攻击者截取了Web浏览器和网站服务器之间的传输报文，就可以直接读懂其中的信息，因此HTTP协议不适合传输一些敏感信息，比如信用卡号、密码等。

为了解决HTTP协议的这一缺陷，需要使用另一种协议：安全套接字层超文本传输协议HTTPS。为了数据传输的安全，HTTPS在HTTP的基础上加入了SSL协议，SSL依靠证书来验证服务器的身份，并为浏览器和服务器之间的通信加密。

HTTPS和HTTP的区别主要为以下四点：
一、https协议需要到ca申请证书，一般免费证书很少，需要交费。
二、http是超文本传输协议，信息是明文传输，https 则是具有安全性的ssl加密传输协议。
三、http和https使用的是完全不同的连接方式，用的端口也不一样，前者是80，后者是443。
四、http的连接很简单，是无状态的；HTTPS协议是由SSL+HTTP协议构建的可进行加密传输、身份认证的网络协议，比http协议安全。

### 解决的问题
一、信任主机的问题
二、通讯过程中的数据的泄密和被篡改

### 申请证书
| 公司 | 使用者  |  价格 | 地址  |
| :------------ | :------------ | :------------ | :------------ |
|  global sign  |  阿里系 |  6930 | 中国分公司 https://system.globalsign.com/   |
|  veri sign | baidu/tenpay/工行/招行/建行/交行  | 40000   | 国内代理 https://www.itrus.cn/  |
| geo trust  |  银联 | $500K  | 呵呵呵  |
| WoSign  |  中信部 | 5664  | 中国本土公司 https://www.wosign.com/  |

综上，使用了Global sign，走商务流程。

客服的服务很到位，证书生成由对方进行。
我们需要根据https://ssltools.org/csr_generate.html
**提供csr信息，私钥自己保留**。
履行合同后，**对方提供服务器证书和中级证书。根证书需要索取**。

### 阿里云配置
ssl的电子证书通过负载均衡生效。
不同于物理主机配置，阿里云需要提供**完整的证书链，顺序应该为
服务器
中级
root**

**同时证书格式要求中有一个细节： 每行64字符，最后一行不超过64字符；
最后一行超过了64字符后，用回车将最后一行分割成两行。**

上传证书后，监听配置如阿里云指引

![](https://img.alicdn.com/tfscom/TB13A3ALVXXXXbfXVXXXXXXXXXX.png)

          </textarea>
        </div>
        <p class="markflaginfo">
          <div class="am-text-right rex-text-color-999" style="padding-right: 15px;">杨飞</div>
          <div class="am-text-right rex-text-color-999" style="padding-right: 15px;">2016/09/23</div>
        </p>
        <div class="am-cf rex-padding-up-down-6" style="background-color: #eee;padding-right: 15px;">
            <span class="am-fr">
              <a href="javascript:;" class="rex-margin-right-15">
                <i class="am-icon-heart am-text-danger"> 99</i>
              </a>
              <input id="copyDom" type="input" value='./wiki_list_info_share.php' style="position: fixed;left: 0;top: 0;opacity: 0;filter:alpha(opacity=0);z-index: -1;">
              <a href="javascript:;" id="copylink" data-clipboard-target="#copyDom">
                <i class="am-icon-link"> 复制分享链接</i>
              </a>
            </span>
        </div>
        <!-- 评论列表 -->
        <ul class="rex-chatbox">
          <li>
            <div class="am-cf">
              <div class="am-fl">
                <a href="javascript:;" class="rex-icon-width-height-46 am-btn am-btn-secondary am-btn-sm rex-radius"><i class="am-icon-user"></i> </a>
              </div>
              <div class="am-fl">
                <span class="users">杨飞</span>
                <p class="time">2016-08-15 18:43:50</p>
              </div>
              <a href="javascript:;" class="am-fr">
                <i class="am-icon-heart am-text-danger"> 999+</i>
              </a>
            </div>
            <div class="contents">
              你好帅，这么多字？
            </div>
          </li>
          <li>
            <div class="am-cf">
              <div class="am-fl">
                <a href="javascript:;" class="rex-icon-width-height-46 am-btn am-btn-secondary am-btn-sm rex-radius"><i class="am-icon-user"></i> </a>
              </div>
              <div class="am-fl">
                <span class="users">杨飞</span>
                <p class="time">
                2016-08-17 20:43:34
                </p>
              </div>
              <a href="javascript:;" class="am-fr">
                <i class="am-icon-heart am-text-danger"> 999+</i>
              </a>
            </div>
            <div class="contents">
              哇！王导的干货！！ 深入一下，对于初级用户来说，直播比点播的方式具备更多信息传递的可能性，带来更好的用户体验？因为处于信息和知识传递的目的，并且这种传递不是讨论式的，而是接受式的，也许就意味着信息传递场景中，直播可能是一个伪命题。还有一点，电子竞技比赛的直播都是目标需求的推动。所谓目标需求，就是受众是在偶像光环的推动下消费直播内容，究其根本原因，是因为每个人心里，都有一个想变成另一个人的梦想。游戏世界里是这样，体育比赛也是这
            </div>
          </li>
        </ul>
        <div class="sendbox">
          <article class="am-comment">
            <div class="rex-border-eee">
              <header class="am-comment-hd">
                <div class="am-comment-meta">
                  <a href="#my" class="am-comment-author"><i class="am-icon-comment"></i></a>
                  &nbsp;评论区域：
                  <a href="javascript:;" onclick="document.getElementById('myworking').value = '';" class="am-fr rex-text-color-warning"><i class="am-icon-trash"></i> 清空输入</a>
                </div>
              </header>
              <div class="am-comment-bd">
                <textarea id="myworking" class="rex-textarea rex-text-color-666" placeholder="开始输入我的评论"></textarea>
              </div>
            </div>
          </article>
          <a href="javascript:;" class="am-btn am-btn-success am-btn-xs rex-margin-up-down-15"><i class="am-icon-save"></i> 提交评论</a>
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
    $(function(){
          var editor = editormd("editormd", {
          height : 1000,
          width : "100%",
          path : "./assets/js/lib/", // Autoload modules mode, codemirror, marked... dependents libs path
      //            theme : "dark",
      //            previewTheme : "dark",
      //            editorTheme : "pastel-on-dark",
          //  readonly : true,
          //markdown : md,
      //                    codeFold : true,
          //syncScrolling : false,
          saveHTMLToTextarea : true,    // 保存 HTML 到 Textarea
          searchReplace : true,
      //            watch : false,                // 关闭实时预览
          htmlDecode : "style,script,iframe|on*",            // 开启 HTML 标签解析，为了安全性，默认不开启
          //toolbar  : false,             //关闭工具栏
          //previewCodeHighlight : false, // 关闭预览 HTML 的代码块高亮，默认开启
          emoji : true,
          taskList : true,
          tocm            : true,         // Using [TOCM]
          tex : true,                   // 开启科学公式TeX语言支持，默认关闭
          flowChart : true,             // 开启流程图支持，默认关闭
          sequenceDiagram : true,       // 开启时序/序列图支持，默认关闭,
          toolbar              : false,
          onload : function(){
              this.previewing();
          }
          //dialogLockScreen : false,   // 设置弹出层对话框不锁屏，全局通用，默认为true
          //dialogShowMask : false,     // 设置弹出层对话框显示透明遮罩层，全局通用，默认为true
          //dialogDraggable : false,    // 设置弹出层对话框不可拖动，全局通用，默认为true
          //dialogMaskOpacity : 0.4,    // 设置透明遮罩层的透明度，全局通用，默认值为0.1
          //dialogMaskBgColor : "#000", // 设置透明遮罩层的背景颜色，全局通用，默认为#fff

      });
      $('#watch').bind('click',function(){
          editor.previewing();
      });
          // button unwatch
          // var count = false;
          // $("#unwatch").click(function(){
          //   if (count) {
          //     testEditormd.watch();
          //     count = false;
          //   } else{
          //     testEditormd.unwatch();
          //     count = true;
          //   }
          // });
    })
</script>
</body>
</html>








