<?php
session_start();
header("content-type:text/html;charset=utf-8");
if(!isset($_SESSION["name"]))
  die("请先登录<a href='index.html>登录</a>");
else
  $_SESSION["page"]="add";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta content="email=no" name="format-detection">
    <title>add_grid</title>
    
    
   <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
    <script src="../js/modal.js"></script> 
    <script src="../js/radialindicator.js"></script>
    <script src="../js/circle.js"></script> 
<script src="../js/lCalendar.js"></script> 
    <link href="../css/bootstrap.min.css" rel="stylesheet">  
      <link rel="stylesheet" href="../css/add_grid.css">
      <link rel="stylesheet" href="../css/public.css">
       <link rel="stylesheet" href="../css/lCalendar.css">
    </head>
  
    <body>
      <!-- head -->
      <nav class="navbar navbar-default  navbar-fixed-top head">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <span>添加格子</span>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <!-- middle -->
        <div class="row middle">
        <form action='add.php' method="post">
          <div class='row'>
            <!-- grid name -->
            <div class='col-xs-1'></div>
            <div class='col-xs-10'>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">
                  <img src="../picture/grid_name.png" alt="">
                </span>
                <input type="text" class="form-control p1" placeholder="格子名称" name='name' aria-describedby="basic-addon1">
              </div>
              
            </div>
               <div class='col-xs-1'></div>
          </div>
          <!-- aim money -->
          <div class="row ">
            <div class='col-xs-1'></div>
            <div class='col-xs-10'>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">
                  <img src="../picture/aim_money.png" alt="">
                </span>
                <input type="text" class="form-control p2" placeholder="目标金额" name='money' aria-describedby="basic-addon1">
              </div>
            </div>
            <div class='col-xs-1'></div>
            
          </div>
            <div class="row introduce">
                 <div class='col-xs-7'></div>
                        <div class='col-xs-5'>  
                          <span class="introduce_time" data-toggle="modal" data-target=".bs-example-modal-sm">查看推荐时间</span>


                        </div>
                        </div>
                      
            <!-- time-->
            <div class="row balance2-3put">
              <div class='col-xs-1'></div>
              <div class='col-xs-10'>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">
                    <img src="../picture/time.png" alt="">
                  </span>
                  <div>
<!--         <input id="demo1" type="text" readonly="" name="input_date" placeholder="日期选择特效" data-lcalendar="2016-01-11,2016-05-29">
    </div> -->
        <input class="form-control p3" id='demo1' type="text" placeholder="期限" name='date' aria-describedby="basic-addon1" data-lcalendar="2016-01-11,2100-05-29">
                </div>
              </div>
            </div>
              <div class='col-xs-1'></div></div>
              <div class="row p4">

              </div>
              <div class="row button">
                <div class='col-xs-1'></div>
                <a href="../html/insert2.html">
            <input type='submit' class='col-xs-10' value='下一步'>
        </a>
                <div class='col-xs-1'></div>

        </div>
        </form>
      </div>



          <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    <div class="modal-header">
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button> -->
          <h4 class="modal-title" id="mySmallModalLabel">推荐期限</h4>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
        <button type="button" class="btn" id='yes' data-dismiss="modal">是</button>
        <button type="button" class="btn" id='no' data-dismiss="modal">否</button>
      </div>
    </div>
  </div>
</div>  
  <script src="../js/add_grid.js"></script> 
<script src="../js/lCalendar.js"></script> 
  <script>
    var calendar = new lCalendar();
    calendar.init({
      'trigger': '#demo1',
      'type': 'date'
    });

  </script>
</body>
</html>