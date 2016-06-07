<?php
$id=$_REQUEST['id'];
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>转出金额</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/转出.css" rel="stylesheet">
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    
    <script src="../js/转出.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container-fluid">
      <div class="row" id="head"> 
      <a href="gezijuti.php?id=<?php echo $id?>"><img src="../picture/左箭头白色.png" class="jiantou"height="25px" width="25px"></a>  
        转出金额
      </div>
    </div>
    <div class="zi">
      *若未存到规定时间，所得利息将按一定比例打折扣，转出时请仔细确认
    </div>
    <div class="container-fluid">
      <div class="row" id="left">
       <div class="col-xs-2">
        <img src="../picture/目标金额.png" class="img" height="35px" width="35px">
       </div>
       <div class="col-xs-8">
         <div class="col-xs-12" id="zileft">
           钱包
         </div>
          
       </div>
       <div class="col-xs-2">
          <img src="../picture/右箭头灰色.png" class="img2"height="20px" width="20px">
       </div>
    </div>
    <div class="row" id="p0">
      <div class="col-xs-3 p" >
        金额（元） 
      </div>
      <div class="col-xs-8 p">
        <input type="text" class="text" placeholder="请填写存入金额" >
      </div>
         
    </div>
    <div class="row" >   
        <a id="button">确定</a>
    </div>
  </div>
  <div class="container-fluid yingzi">
   
  </div>
  <div class="container-fluid a">
   <div class="row zhifu" >
     <img src="../picture/叉清空灰色.png" class="img3"height="20px" width="20px">
     选择付款方式
   </div>
   <div class="row" id="left2">
       <div class="col-xs-2">
        <img src="../picture/目标金额.png" class="img" height="35px" width="35px">
       </div>
       <div class="col-xs-8">
         <div class="col-xs-12" id="zileft">
           钱包
         </div>
         
       </div>
       <div class="col-xs-2">
          <img src="../picture/勾.png" class="img4"height="30px" width="30px">
       </div>
    </div>
   <div class="row" id="left2">
       <div class="col-xs-2">
        <img src="../picture/工商银行.png" class="img" height="35px" width="35px">
       </div>
       <div class="col-xs-8">
         <div class="col-xs-12" id="zileft">
           工商银行(尾号XXXX)
         </div>
         
       </div>
       <div class="col-xs-2">
           
       </div>
    </div>
    <div class="row" id="left2">
       <div class="col-xs-2">
        <img src="../picture/交通银行.png" class="img" height="35px" width="35px">
       </div>
       <div class="col-xs-8">
         <div class="col-xs-12" id="zileft">
           交通银行(尾号XXXX)
         </div>
       </div>
       <div class="col-xs-2"> 
       </div>
    </div>
    <div class="row" id="left2">
       <div class="col-xs-2">
        <img src="../picture/增加.png" class="img" height="35px" width="35px">
       </div>
       <div class="col-xs-8">
         <div class="col-xs-12" id="zizi">
           增加新的银行卡
         </div>
       </div>
        
    </div>
  </div>
  <div class="container-fluid b">
     
   <div class="row zhifu" >
     <img src="../picture/叉清空灰色.png" class="img33"height="20px" width="20px">
     选择付款方式

   </div>
   <div class="row" id="left3">
       <div class="col-xs-9">
         <input type="text" class="text2" placeholder="输入支付密码" >
       </div>
       <div class="col-xs-3 queren">
         确认
       </div>
    </div>
    <div class="row" id="left4">
        忘记密码?
    </div>
    
  </div>
       
    
   
   
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>