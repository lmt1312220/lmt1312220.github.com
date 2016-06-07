<?php
session_start();
header("content-type:text/html;charset=utf-8");
if(!isset($_SESSION["name"]))
  die("请先登录<a href='index.html>登录</a>");
else
  $_SESSION["page"]="mine";
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/mine.css" rel="stylesheet">
    <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <!-- container -->
  <?php
  include("../php/conn.php");
  $sql="select * from customer where cumno=1";
  $re=mysql_query($sql);
  if(mysql_affected_rows()>0){
    while ($row=mysql_fetch_array($re)) {
  ?>
    <div class="container-fluid">
      <div class="row" id="head"  >
        我的
      </div>
    </div>
    <div class="container-fluid" id="body">
      <a href='mine2.html'>
      <div class="row" id="body1" >
        <div class="col-xs-8">
          <div class="zileft">昵称</div>
        </div>
        <div class="col-xs-4">
          <div class="ziright"><?php echo $row['nickname']?> <a href="mine2.html"><img src="../picture/右箭头灰色.png" height="20px" width="20px" href="mine2.html"></a></div>
        </div>
      </div>
      </a>
      <div class="row" id="body2" >
        <div class="col-xs-6">
          <div class="zileft">手机号</div>
        </div>
        <div class="col-xs-6">
          <div class="ziright"><?php echo $row['telephone']?><img src="../picture/右箭头灰色.png" height="20px" width="20px"></div>
        </div>
      </div>
      <div class="row" id="body3" >
        <div class="col-xs-6">
          <div class="zileft">帐号</div>
        </div>
        <div class="col-xs-6">
          <div class="ziright"><?php echo $row['id']?></div>
        </div>
      </div>
      <div class="row" id="body4" >
        <div class="col-xs-8">
          <div class="zileft">检查更新</div>
        </div>
        <div class="col-xs-4">
          <div class="ziright"><img src="../picture/右箭头灰色.png" height="20px" width="20px"></div>
        </div>
      </div>
      <div class="row" id="body3" >
        <div class="col-xs-8">
          <div class="zileft">意见反馈</div>
        </div>
        <div class="col-xs-4">
          <div class="ziright"><img src="../picture/右箭头灰色.png" height="20px" width="20px"></div>
        </div>
      </div>
      <div class="row" id="body5" >
        <div class="col-xs-8">
          <div class="zileft">关于各金所</div>
        </div>
        <div class="col-xs-4">
          <div class="ziright"><img src="../picture/右箭头灰色.png" height="20px" width="20px"></div>
        </div>
      </div>
      <a href='mine3.html'>
      <div class="row" id="body5" >
        <div class="col-xs-8">
          <div class="zileft">添加银行卡</div>
        </div>
        <div class="col-xs-4">
          <div class="ziright"><a href="mine3.html"><img src="../picture/右箭头灰色.png" height="20px" width="20px"></a></div>
        </div>
      </div>
      </a>
      <div class="row" id="body5" >
        <div class="col-xs-8">
          <div class="zileft">退出当前账号</div>
        </div>
        <div class="col-xs-4">
          <div class="ziright"><img src="../picture/右箭头灰色.png" height="20px" width="20px"></div>
        </div>
      </div>
    </div>
    <!-- container end -->
     <?php
     include("footer.html");
     include("../php/bread.php");
     ?>
   <?php
   }
 }
   else
      echo "不存在数据";
    ?>
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="../js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
  </body>
</html>