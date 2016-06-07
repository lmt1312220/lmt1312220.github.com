<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>grid</title>
    <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
    <script src="../js/radialindicator.js"></script>
    <script src="../js/modal.js"></script>
    <!-- // <script src="../js/删除.js"></script> -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/shezhi.css">
    <link rel="stylesheet" href="../css/grid_set.css">
     <link rel="stylesheet" href="../css/public.css">
  </head>
  <body style='background-color: #FBFBFB;'>
  <?php
    include("../php/conn.php");
    $id=$_REQUEST['id'];
    $sql="select * from packetclass where classno='".$id."'";
    echo $sql;
    $re=mysql_query($sql);
    while($row=mysql_fetch_array($re)){
    ?>
  
    <nav class="navbar navbar-default  navbar-fixed-top head">
        <div class="container">
          <div class="row">
            <div class='col-xs-1' id='headreturn'><a href="gezijuti.php?id=<?php echo $id ?>"><img src="../picture/左箭头白色.png" width='20px'></a></div>
            <div class="col-xs-10">
              <span>设置</span>
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
         <a href="grid_rname.php?id=<?php echo $id ?>"> <div class='row' id='grid'>
            <div class='col-xs-4'><span>格子名称</span></div>
            <div class='col-xs-6' id='flo'><span><?php echo $row['classname']?></span></div>
            <div class='col-xs-2'><img src="../picture/右箭头灰色.png" width='20px'></div>
            
          </div></a>
          <!-- grid2 -->
          <a href=""><div class='row' id='grid'>
            <div class='col-xs-5'><span>格子目标金额</span></div>
            <div class='col-xs-5' id='flo'><span><?php echo $row['needmoney']?></span></div>
            <div class='col-xs-2'><img src="../picture/右箭头灰色.png" width='20px'></div>
            
          </div></a>
    
        </div>
      </div>

     <!--  跳出删除确认 -->
<!-- <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    <div class="modal-header"> -->
          <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span><tton> -->
<!--           <h4 class="modal-title" id="mySmallModalLabel">推荐期限</h4>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
        <button type="button" class="btn" id='yes' data-dismiss="modal">是<tton>
        <button type="button" class="btn" id='no' data-dismiss="modal">否<tton>
      </div>
    </div>
  </div>
</div> -->


      <!-- bottom -->
       <nav class="navbar  navbar-fixed-bottom ">
      <div class="container-fluid">
      <form action="../php/delete.php?id=<?php echo $id ?>" method="post">
       <div class="row" id='buttonheight'>
         <!-- <div id='delbutton' data-toggle='modal' data-target='.bs-example-modal-sm'>删除格子</div> -->
         <input type='submit' class='container' value='删除格子'  id='delbutton'></button>
       </div>
      </form>
    </div>
    </nav> 
<?php
}
?>        
    </body>
      </html>