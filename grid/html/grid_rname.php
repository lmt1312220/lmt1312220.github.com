<?php
$id=$_REQUEST['id'];
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
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
   
    <link rel="stylesheet" href="../css/shezhi.css">
    <link rel="stylesheet" href="../css/grid_rname.css">
     <link rel="stylesheet" href="../css/public.css">
  </head>
  <body style='background-color: #FBFBFB;'> <!-- head -->
    <nav class="navbar navbar-default  navbar-fixed-top head">
        <div class="container">
          <div class="row">
            <div class='col-xs-1' id='headreturn'><a href="grid_set.php?id=<?php echo $id ?>"><img src="../picture/左箭头白色.png" width='20px'></a></div>
            <div class="col-xs-10">
              <span>修改格子名称</span>
            </div>
            <div class='col-xs-1'></div>
          </div>
        </div>
      </nav>

    <!-- middle -->

     <div class='container'>
        <div class="row middle">
          
          <div class='row' id='x'></div>
          <!-- grid1 -->
         <div class='row' id='textinput'>
          <div class='col-xs-10'><input type='text' placeholder='请输入新的名称'></div>
          <div class='col-xs-2'><img src="../picture/叉清空灰色.png" width='15px'></div>
           
         </div>
         <div class="row" id='buttonheight'>
         <a href="grid_set.html"><div id='delbutton'>保存</div></a>
       </div>
        
      </div>
    </body>
      </html>