<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>walletmain</title>
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/mainpage.css" rel="stylesheet">
   
    <script type="text/javascript" src="http://cdn.hcharts.cn/jquery/jquery-1.8.3.min.js"></script>
    <style type="text/css">
${demo.css}
    </style>
    <script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: '近15日钱包使用情况（元）'
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: 'Population in 2008: <b>{point.y:.1f} millions</b>'
        },
        series: [{
            name: 'Population',
            data: [
                ['1号', 23.7],
                ['2号', 16.1],
                ['3号', 14.2],
                ['4号',  14.0],
                ['5号', 12.5],
                ['6号', 12.1],
                ['7号', 11.8],
                ['8号', 11.7],
                ['9号', 11.1],
                ['10号', 11.1],
                ['11号', 10.5],
                ['12号',  10.4],
                ['13号', 10.0],
                ['14号',  9.3],
                ['15号',  9.3],
            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'left',
                format: '{point.y:.1f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });
});
    </script>
  </head>
  <body>

    <div class="container-fluid total">
    <nav class="navbar navbar-default  navbar-fixed-top head">
    <div class="row" id="wallet-head">
      <div id="moreform"><a href="more.html"><img src="../picture/更多.png" style="height:30px" alt=""></a></div>
      <span style="margin-left:50px">钱包</span>
    </div>
  </nav>
    <div class="row" id="wallet-main">
      <div style="margin-top:40px"><span style="font-size:15px">今日可用(元)</span></div>
      <div id="everyday"><span  style="font-size:80px">30.15</span><a href="cutinbox.html"><span style="color:white">划入格子</span></a></div>
      <div style="margin-top:15px"><span style="font-size:15px">总金额(元)</span></div>
      <div id="totalmoney"><span >420.50</span></div>
    </div>


<div id="container" style="min-width: 300px; height: 250px;"></div>


    <nav class="navbar navbar-default  navbar-fixed-bottom">
 <div class="row" id="body6" >
   <div class="col-xs-4 form">
   <a href='../html/mainpage.php'>
   <div class='row purse' ><img src="../picture/w_yellow.png" style="height:30px" alt="" ></div>
    <div class='row'><span class="txt">钱包</span></div>
    </a>
  </div>
  <div class="col-xs-4 form">
  <a href='../php/index.php' class='change'>
    <div class='row grid'><img src="../picture/专项款(1).png" style="height:30px" alt=""></div>
    <div class='row'><span class="txt" id='f3'>格子</span></div>
  </a>
  </div>
  <div class="col-xs-4 form">
  <a href='../html/mine.php'>
    <div class='row mine'><img src="../picture/我的.png" style="height:27px" alt=""></div>
    <div class='row'><span class="txt">我的</span></div>
  </a>
  </div>
</div>
</nav>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

     <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
     <script src="http://cdn.hcharts.cn/highcharts/highcharts.js"></script>
     <script src="http://cdn.hcharts.cn/highcharts/modules/exporting.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
