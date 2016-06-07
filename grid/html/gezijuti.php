<?php
session_start();
header("content-type:text/html;charset=utf-8");
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
    <script src="../js/circle.js"></script>
    <script type="text/javascript" src="http://cdn.hcharts.cn/jquery/jquery-1.8.3.min.js"></script>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/shezhi.css">
     <link rel="stylesheet" href="../css/public.css">
     <link rel="stylesheet" href="../css/gezijuti.css">
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
  <?php
    include("../php/conn.php");
    $id=$_REQUEST['id'];
    // $_SESSION['id']=$id;
    $sql="select * from packetclass where classno='".$id."'";
    $re=mysql_query($sql);
    while($row=mysql_fetch_array($re)){
    ?>
  <body style='background-color: #FBFBFB;'> <!-- head -->
    <nav class="navbar navbar-default  navbar-fixed-top head">
        <div class="container">
          <div class="row">
            <div class='col-xs-1' id='headreturn'><a href="../php/index.php"><img src="../picture/左箭头白色.png" width='20px'></a></div>
            <div class="col-xs-10">
              <span><?php echo $row['classname']?>的钱</span>
            </div>
            <div class='col-xs-1'><a href="grid_set.php?id=<?php echo $row['classno']?>"><img src="../picture/set.png" width='20px' id="shezhi"></a></div>
          </div>
        </div>
      </nav> 

    <!-- middle -->
     

     <div class='container'>
        <div class="row middle">
          
       <!--    <div class='row' id='d'></div> -->

      <div class="row" id="wallet-main">
          <div style="margin-top:40px">
            <span style="font-size:15px">累计收益(元)</span>
          </div>
          <div id="everyday">
            <span  style="font-size:80px">3000</span>
          </div>
          <div style="margin-top:15px"><span style="font-size:15px">总金额(元)</span></div>
          <div id="totalmoney"><span >9000</span></div>
    </div>
   <div class='row' id='information'>
     <div class='col-xs-2' id='nopadding'>
       <div class='row' id='text' style='border-style:none;'>利率</div>
       <div class='row' id='num' style='border-style:none;'>0.4%</div>
     </div>
     <div class='col-xs-5' id='nopadding'>
       <div class='row' id='text'>昨日收益（元）</div>
       <div class='row' id='num'>1.2</div>
     </div>
     <div class='col-xs-5' id='nopadding'>
       <div class='row' id='text'>目标金额（元）</div>
       <div class='row' id='num'><?php echo $row['needmoney']?></div>
     </div>
   </div> 
        <div class='row' id='text1'><span>*存款时间</span><span><?php echo $row['timestart']?>-<?php echo $row['timeend']?></span></div>  
    <div class='row' id='graph'></div>
        </div>
      </div>
      <?php
    }
      ?>
   

<div id="container" style="min-width: 300px; height: 250px;" data-highcharts-chart="0"><div class="highcharts-container" id="highcharts-0" style="position: relative; overflow: hidden; width: 345px; height: 250px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg version="1.1" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="345" height="250"><desc>Created with Highcharts 4.2.5</desc><defs><clipPath id="highcharts-1"><rect x="0" y="0" width="268" height="142"></rect></clipPath></defs><rect x="0" y="0" width="345" height="250" fill="#FFFFFF" class=" highcharts-background"></rect><g class="highcharts-grid"></g><g class="highcharts-grid"><path fill="none" d="M 67 195.5 L 335 195.5" stroke="#D8D8D8" stroke-width="1" opacity="1"></path><path fill="none" d="M 67 148.5 L 335 148.5" stroke="#D8D8D8" stroke-width="1" opacity="1"></path><path fill="none" d="M 67 100.5 L 335 100.5" stroke="#D8D8D8" stroke-width="1" opacity="1"></path><path fill="none" d="M 67 52.5 L 335 52.5" stroke="#D8D8D8" stroke-width="1" opacity="1"></path></g><g class="highcharts-axis"><path fill="none" d="M 75.5 195 L 75.5 205" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 111.5 195 L 111.5 205" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 146.5 195 L 146.5 205" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 182.5 195 L 182.5 205" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 218.5 195 L 218.5 205" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 254.5 195 L 254.5 205" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 289.5 195 L 289.5 205" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 325.5 195 L 325.5 205" stroke="#C0D0E0" stroke-width="1" opacity="1"></path><path fill="none" d="M 67 195.5 L 335 195.5" stroke="#C0D0E0" stroke-width="1"></path></g><g class="highcharts-axis"><text x="28.078125" text-anchor="middle" transform="translate(0,0) rotate(270 28.078125 124)" class=" highcharts-yaxis-title" style="color:#707070;fill:#707070;" y="124">Values</text></g><g class="highcharts-series-group"><g class="highcharts-series highcharts-series-0 highcharts-tracker" transform="translate(67,53) scale(1 1)" style="" clip-path="url(#highcharts-1)"><rect x="4.5" y="30.5" width="9" height="112" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="22.5" y="66.5" width="9" height="76" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="39.5" y="75.5" width="9" height="67" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="57.5" y="76.5" width="9" height="66" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="75.5" y="83.5" width="9" height="59" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="93.5" y="85.5" width="9" height="57" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="111.5" y="86.5" width="9" height="56" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="129.5" y="87.5" width="9" height="55" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="147.5" y="89.5" width="9" height="53" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="164.5" y="89.5" width="9" height="53" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="182.5" y="92.5" width="9" height="50" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="200.5" y="93.5" width="9" height="49" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="218.5" y="95.5" width="9" height="47" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="236.5" y="98.5" width="9" height="44" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect><rect x="254.5" y="98.5" width="9" height="44" stroke="#FFFFFF" stroke-width="1" fill="#7cb5ec" rx="0" ry="0"></rect></g><g class="highcharts-markers highcharts-series-0" transform="translate(67,53) scale(1 1)" clip-path="none"></g></g><g class="highcharts-button" style="cursor:default;" stroke-linecap="round" transform="translate(311,10)"><title>Chart context menu</title><rect x="0.5" y="0.5" width="24" height="22" fill="white" stroke="none" stroke-width="1" rx="2" ry="2"></rect><path fill="#E0E0E0" d="M 6 6.5 L 20 6.5 M 6 11.5 L 20 11.5 M 6 16.5 L 20 16.5" stroke="#666" stroke-width="3"></path><text x="0" style="color:black;fill:black;" y="12"></text></g><text x="173" text-anchor="middle" class="highcharts-title" style="color:#333333;font-size:18px;fill:#333333;width:281px;" y="24">近15日钱包使用情况（元）</text><g class="highcharts-data-labels highcharts-series-0 highcharts-tracker" visibility="visible" transform="translate(67,53) scale(1 1)" opacity="1" style=""><text x="13.333333333333332" y="40.5" r="0" padding="5" transform="translate(0,0) rotate(-90 13.333333333333332 40.5)" style="color:#FFFFFF;font-size:13px;font-weight:bold;text-shadow:0 0 6px #000000, 0 0 3px #000000;font-family:Verdana, sans-serif;fill:#FFFFFF;text-rendering:geometricPrecision;" text-anchor="start"><tspan>23.7</tspan></text><text x="31.333333333333332" y="76.5" r="0" padding="5" transform="translate(0,0) rotate(-90 31.333333333333332 76.5)" style="color:#FFFFFF;font-size:13px;font-weight:bold;text-shadow:0 0 6px #000000, 0 0 3px #000000;font-family:Verdana, sans-serif;fill:#FFFFFF;text-rendering:geometricPrecision;" text-anchor="start"><tspan>16.1</tspan></text><text x="48.333333333333336" y="85.5" r="0" padding="5" transform="translate(0,0) rotate(-90 48.333333333333336 85.5)" style="color:#FFFFFF;font-size:13px;font-weight:bold;text-shadow:0 0 6px #000000, 0 0 3px #000000;font-family:Verdana, sans-serif;fill:#FFFFFF;text-rendering:geometricPrecision;" text-anchor="start"><tspan>14.2</tspan></text><text x="66.33333333333333" y="86.5" r="0" padding="5" transform="translate(0,0) rotate(-90 66.33333333333333 86.5)" style="color:#FFFFFF;font-size:13px;font-weight:bold;text-shadow:0 0 6px #000000, 0 0 3px #000000;font-family:Verdana, sans-serif;fill:#FFFFFF;text-rendering:geometricPrecision;" text-anchor="start"><tspan>14.0</tspan></text><text x="84.33333333333333" y="93.5" r="0" padding="5" transform="translate(0,0) rotate(-90 84.33333333333333 93.5)" style="color:#FFFFFF;font-size:13px;font-weight:bold;text-shadow:0 0 6px #000000, 0 0 3px #000000;font-family:Verdana, sans-serif;fill:#FFFFFF;text-rendering:geometricPrecision;" text-anchor="start"><tspan>12.5</tspan></text><text x="102.33333333333333" y="95.5" r="0" padding="5" transform="translate(0,0) rotate(-90 102.33333333333333 95.5)" style="color:#FFFFFF;font-size:13px;font-weight:bold;text-shadow:0 0 6px #000000, 0 0 3px #000000;font-family:Verdana, sans-serif;fill:#FFFFFF;text-rendering:geometricPrecision;" text-anchor="start"><tspan>12.1</tspan></text><text x="120.33333333333333" y="96.5" r="0" padding="5" transform="translate(0,0) rotate(-90 120.33333333333333 96.5)" style="color:#FFFFFF;font-size:13px;font-weight:bold;text-shadow:0 0 6px #000000, 0 0 3px #000000;font-family:Verdana, sans-serif;fill:#FFFFFF;text-rendering:geometricPrecision;" text-anchor="start"><tspan>11.8</tspan></text><text x="138.33333333333334" y="97.5" r="0" padding="5" transform="translate(0,0) rotate(-90 138.33333333333334 97.5)" style="color:#FFFFFF;font-size:13px;font-weight:bold;text-shadow:0 0 6px #000000, 0 0 3px #000000;font-family:Verdana, sans-serif;fill:#FFFFFF;text-rendering:geometricPrecision;" text-anchor="start"><tspan>11.7</tspan></text><text x="156.33333333333334" y="99.5" r="0" padding="5" transform="translate(0,0) rotate(-90 156.33333333333334 99.5)" style="color:#FFFFFF;font-size:13px;font-weight:bold;text-shadow:0 0 6px #000000, 0 0 3px #000000;font-family:Verdana, sans-serif;fill:#FFFFFF;text-rendering:geometricPrecision;" text-anchor="start"><tspan>11.1</tspan></text><text x="173.33333333333334" y="99.5" r="0" padding="5" transform="translate(0,0) rotate(-90 173.33333333333334 99.5)" style="color:#FFFFFF;font-size:13px;font-weight:bold;text-shadow:0 0 6px #000000, 0 0 3px #000000;font-family:Verdana, sans-serif;fill:#FFFFFF;text-rendering:geometricPrecision;" text-anchor="start"><tspan>11.1</tspan></text><text x="191.33333333333334" y="102.5" r="0" padding="5" transform="translate(0,0) rotate(-90 191.33333333333334 102.5)" style="color:#FFFFFF;font-size:13px;font-weight:bold;text-shadow:0 0 6px #000000, 0 0 3px #000000;font-family:Verdana, sans-serif;fill:#FFFFFF;text-rendering:geometricPrecision;" text-anchor="start"><tspan>10.5</tspan></text><text x="209.33333333333334" y="103.5" r="0" padding="5" transform="translate(0,0) rotate(-90 209.33333333333334 103.5)" style="color:#FFFFFF;font-size:13px;font-weight:bold;text-shadow:0 0 6px #000000, 0 0 3px #000000;font-family:Verdana, sans-serif;fill:#FFFFFF;text-rendering:geometricPrecision;" text-anchor="start"><tspan>10.4</tspan></text><text x="227.33333333333334" y="105.5" r="0" padding="5" transform="translate(0,0) rotate(-90 227.33333333333334 105.5)" style="color:#FFFFFF;font-size:13px;font-weight:bold;text-shadow:0 0 6px #000000, 0 0 3px #000000;font-family:Verdana, sans-serif;fill:#FFFFFF;text-rendering:geometricPrecision;" text-anchor="start"><tspan>10.0</tspan></text><text x="245.33333333333334" y="108.5" r="0" padding="5" transform="translate(0,0) rotate(-90 245.33333333333334 108.5)" style="color:#FFFFFF;font-size:13px;font-weight:bold;text-shadow:0 0 6px #000000, 0 0 3px #000000;font-family:Verdana, sans-serif;fill:#FFFFFF;text-rendering:geometricPrecision;" text-anchor="start"><tspan>9.3</tspan></text><text x="263.3333333333333" y="-9999" r="0" padding="5" transform="translate(0,0) rotate(-90 263.3333333333333 -9999)" style="color:#FFFFFF;font-size:13px;font-weight:bold;text-shadow:0 0 6px #000000, 0 0 3px #000000;font-family:Verdana, sans-serif;fill:#FFFFFF;text-rendering:geometricPrecision;" text-anchor="start"><tspan>9.3</tspan></text></g><g class="highcharts-axis-labels highcharts-xaxis-labels"><text x="78.99746271847505" style="color:#606060;cursor:default;font-size:13px;font-family:Verdana, sans-serif;fill:#606060;width:250px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 78.99746271847505 212)" y="212" opacity="1"><tspan>1号</tspan></text><text x="114.73079605180838" style="color:#606060;cursor:default;font-size:13px;font-family:Verdana, sans-serif;fill:#606060;width:250px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 114.73079605180838 212)" y="212" opacity="1"><tspan>3号</tspan></text><text x="150.46412938514172" style="color:#606060;cursor:default;font-size:13px;font-family:Verdana, sans-serif;fill:#606060;width:250px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 150.46412938514172 212)" y="212" opacity="1"><tspan>5号</tspan></text><text x="186.19746271847504" style="color:#606060;cursor:default;font-size:13px;font-family:Verdana, sans-serif;fill:#606060;width:250px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 186.19746271847504 212)" y="212" opacity="1"><tspan>7号</tspan></text><text x="221.9307960518084" style="color:#606060;cursor:default;font-size:13px;font-family:Verdana, sans-serif;fill:#606060;width:250px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 221.9307960518084 212)" y="212" opacity="1"><tspan>9号</tspan></text><text x="257.66412938514173" style="color:#606060;cursor:default;font-size:13px;font-family:Verdana, sans-serif;fill:#606060;width:250px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 257.66412938514173 212)" y="212" opacity="1"><tspan>11号</tspan></text><text x="293.3974627184751" style="color:#606060;cursor:default;font-size:13px;font-family:Verdana, sans-serif;fill:#606060;width:250px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 293.3974627184751 212)" y="212" opacity="1"><tspan>13号</tspan></text><text x="329.1307960518084" style="color:#606060;cursor:default;font-size:13px;font-family:Verdana, sans-serif;fill:#606060;width:250px;text-overflow:ellipsis;" text-anchor="end" transform="translate(0,0) rotate(-45 329.1307960518084 212)" y="212" opacity="1"><tspan>15号</tspan></text></g><g class="highcharts-axis-labels highcharts-yaxis-labels"><text x="52" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:104px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="198" opacity="1">0</text><text x="52" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:104px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="150" opacity="1">10</text><text x="52" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:104px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="103" opacity="1">20</text><text x="52" style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:104px;text-overflow:clip;" text-anchor="end" transform="translate(0,0)" y="56" opacity="1">30</text></g><g class="highcharts-tooltip" style="cursor:default;padding:0;pointer-events:none;white-space:nowrap;" transform="translate(0,-9999)"><path fill="none" d="M 3.5 0.5 L 13.5 0.5 C 16.5 0.5 16.5 0.5 16.5 3.5 L 16.5 13.5 C 16.5 16.5 16.5 16.5 13.5 16.5 L 3.5 16.5 C 0.5 16.5 0.5 16.5 0.5 13.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.049999999999999996" stroke-width="5" transform="translate(1, 1)"></path><path fill="none" d="M 3.5 0.5 L 13.5 0.5 C 16.5 0.5 16.5 0.5 16.5 3.5 L 16.5 13.5 C 16.5 16.5 16.5 16.5 13.5 16.5 L 3.5 16.5 C 0.5 16.5 0.5 16.5 0.5 13.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.09999999999999999" stroke-width="3" transform="translate(1, 1)"></path><path fill="none" d="M 3.5 0.5 L 13.5 0.5 C 16.5 0.5 16.5 0.5 16.5 3.5 L 16.5 13.5 C 16.5 16.5 16.5 16.5 13.5 16.5 L 3.5 16.5 C 0.5 16.5 0.5 16.5 0.5 13.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5" isShadow="true" stroke="black" stroke-opacity="0.15" stroke-width="1" transform="translate(1, 1)"></path><path fill="rgba(249, 249, 249, .85)" d="M 3.5 0.5 L 13.5 0.5 C 16.5 0.5 16.5 0.5 16.5 3.5 L 16.5 13.5 C 16.5 16.5 16.5 16.5 13.5 16.5 L 3.5 16.5 C 0.5 16.5 0.5 16.5 0.5 13.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"></path><text x="8" style="font-size:12px;color:#333333;fill:#333333;" y="20"></text></g><text x="335" text-anchor="end" style="cursor:pointer;color:#909090;font-size:9px;fill:#909090;" y="245">Highcharts.com</text></svg></div></div>

      <!-- bottom -->
      <nav class="navbar navbar-default navbar-fixed-bottom ">
      <div class="container-fluid">
       <div class="row" id="body6" >
         <a href="trans1.php?id=<?php echo $id?>"><div class='col-xs-6' id='btext'>转出</div></a>
         <a href="insert1.php?id=<?php echo $id?>"><div class='col-xs-6' id='btext'>存入</div></a>
       </div>
    </div>
    </nav> 
    <script src="http://cdn.hcharts.cn/highcharts/highcharts.js"></script>
     <script src="http://cdn.hcharts.cn/highcharts/modules/exporting.js"></script>
    </body>
      </html>