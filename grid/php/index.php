<?php
session_start();
header("content-type:text/html;charset=utf-8");
if(!isset($_SESSION["name"]))
  die("请先登录<a href='index.html>登录</a>");
else
  $_SESSION["page"]="index";
  
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>grid</title>
    <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
    <script src="../js/radialindicator.js"></script>
     <!-- // <script src="../js/circle.js"></script> -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/public.css">
  </head>
  <body> <!-- head -->

  <nav class="navbar navbar-default  navbar-fixed-top head">
    <div class="container-fluid">
      <div class="row">
          <div class="col-xs-1">
          </div>
        <div  class="col-xs-10">
          <span >格子</span>
        </div>
          <div class="col-xs-1">
          <a href='../html/shezhi.html'>
          <img src="../picture/set.png" width="20px" alt="">
          </a>
        </div>
        </div>
      </div>

  </nav>

  <div class="container-fluid">
    <!-- middle -->
    <div class="row middle">
      <?php
      include("conn.php");
      $sql="select * from packetclass where cumno='".$_SESSION["cumid"]."' order by needmoney desc";
      $re=mysql_query($sql);
      // echo $sql;
      if(!mysql_affected_rows()>0){
        echo "无结果";
      }
      else{
        $i=0;
        $j=0;
        while($row=mysql_fetch_array($re)){   
      ?>
      <!-- grid1 -->
      <div class='row'>   
      
        <a href="../html/gezijuti.php?id=<?php echo $row['classno']?>" class='grid_link'>
        <div class='col-xs-12 <?php echo $j?>'>

          <div class="row">
            <div class='col-xs-6'>
            <?php

              echo"<span>".$row['classname']."</span>";
              echo"<h2>".$row['havemoney']."元</h2>";
              echo"<span>目标金额".$row['needmoney']."元</span>";
              //$per=array();
              $per=(int)($row['havemoney']/$row['needmoney']*100);
              //echo $per;
            ?>

            </div>
            <div class='col-xs-6'>
              <div class="cirle-progress-bar" id="<?php echo $i?>"></div>
            </div>
        </div>
   
        </div>
        </a>
      </div>
      <script type="text/javascript">
      var a = ["#FFCC00","#FFDAB9","#FFC0CB"];
      $(document).ready(function(){
        $('.<?php echo $j?>').css("background","<?php echo $row['color']?>");
      });
      $(function () {
      $('#<?php echo $i ?>').radialIndicator({
        barColor: '#FFCC00',
        fontColor: 'white',
        barWidth: 10,
        initValue: <?php echo $per?>,
        roundCorner : true,
        percentage: true
      });
    });
    var radialObj = $('.indicatorContainer').data('radialIndicator');
     </script>
      <?php
      $i++;
      $j++;
        }
      }
      ?>
    </div>
  </div>
      <!-- bottom -->
      <?php

      include("../html/footer.html");
      include("bread.php");
      ?>
      
    </body>
  </html>