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
    
    <link rel="stylesheet" href="../font-awesome-4.5.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="../css/add_grid.css">
      <link rel="stylesheet" href="../css/public.css">
    </head>
    <?php 
    include("public.html");
    ?>
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
          <div class='row'>
            <!-- grid name -->
            <div class='col-xs-1'></div>
            <div class='col-xs-10'>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="格子名称" aria-describedby="basic-addon1">
              </div>
              
            </div>
               <div class='col-xs-1'></div>
          </div>
          <!-- aim money -->
          <div class="row">
            <div class='col-xs-1'></div>
            <div class='col-xs-10 grid-2'>
              <div class="input-group">
                <span class="input-group-addon" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="目标金额" aria-describedby="basic-addon1">
              </div>
            </div>
            <div class='col-xs-1'></div></div>
            <!-- time-->
            <div class="row">
              <div class='col-xs-1'></div>
              <div class='col-xs-10 grid-2'>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">@</span>
                  <input type="text" class="form-control" placeholder="期限" aria-describedby="basic-addon1">
                </div>
              </div>
              <div class='col-xs-1'></div></div>
            </div>
              <div class="row button">
                <div class='col-xs-1'></div>
                <div class='col-xs-10'>
            下一步
        </div>
                <div class='col-xs-1'></div>

        </div>
          
         
        </body>
      </html>