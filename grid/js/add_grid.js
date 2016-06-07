
   
var jingguoyue;
//today
//过推荐的日期了一段时间后
function getCTime(m) { 
          var d = new Date(); 
          var year = d.getFullYear()+parseInt((parseInt(m)/12)); 
          var month = d.getMonth() + 1+(parseInt(m)%12); 
          var date = d.getDate(); 
          var week = d.getDay(); 
          var curDateTime = year; 
          if (month > 9) 
          curDateTime = curDateTime + "-" + month; 
          else
          curDateTime = curDateTime + "-0" + month; 
          if (date > 9) 
          curDateTime = curDateTime + "-" + date; 
          else
          curDateTime = curDateTime + "-0" + date; 
          return curDateTime;
}
function getCurrentDateTime() { 
          var d = new Date(); 
          var year = d.getFullYear(); 
          var month = d.getMonth() + 1; 
          var date = d.getDate(); 
          var week = d.getDay(); 
          var curDateTime = year; 
          if (month > 9) 
          curDateTime = curDateTime + "-" + month; 
          else
          curDateTime = curDateTime + "-0" + month; 
          if (date > 9) 
          curDateTime = curDateTime + "-" + date ; 
          else
          curDateTime = curDateTime + "-0" + date;
          return curDateTime;
}
//计算俩个时间的时间差的函数
function  DateDiff(sDate1,  sDate2){    //sDate1和sDate2是2002-12-18格式  
       var  aDate,  oDate1,  oDate2,  iDays  
       aDate  =  sDate1.split("-")  
       oDate1  =  new  Date(aDate[1]  +  '-'  +  aDate[2]  +  '-'  +  aDate[0])    //转换为12-18-2002格式  
       aDate  =  sDate2.split("-")  
       oDate2  =  new  Date(aDate[1]  +  '-'  +  aDate[2]  +  '-'  +  aDate[0])  
       iDays  =  parseInt(Math.abs(oDate1  -  oDate2)  /  1000  /  60  /  60  /24)    //把相差的毫秒数转换为天数  
       return  iDays  
}
function jisuanriqijiange(){
   var val = $(".p2").val();
   var valTime = $(".p3").val(); 
   var time_jiange=DateDiff(getCurrentDateTime(),valTime);
   var  a=parseInt(parseInt(val)/time_jiange);
   $(".p4").html(time_jiange+"天<br/>利率为0.06%<br/>推荐每天存"+a+"元");
}


$(init);


function init () {
  $(".introduce_time").click(function(){  
          var val = $(".p2").val();
         if(parseInt(val)<=5000){
              jingguoyue=2;
              lilu=0.02;
            }
          else if(parseInt(val)>5000&&parseInt(val)<=10000){
              jingguoyue=4;
              lilu=0.04;
            }
            else if(parseInt(val)>10000){
              jingguoyue=6;
              lilu=0.06;
            }
          var  a=parseInt(parseInt(val)/(30*jingguoyue)); 
          $("div.modal-body ").html("推荐存"+jingguoyue+"个月，利率为0.02%，每日大约存"+a+"元，是否接受这种推荐");
  });
$('#demo1').attr("readonly","readonly");
  $("button#yes").click(function(){
        $(".p3").val(getCTime(jingguoyue));
        var val = $(".p2").val();
        var valTime = $(".p3").val(); 
        var time_jiange=DateDiff(getCurrentDateTime(),valTime);
        var  a=parseInt(parseInt(val)/(time_jiange)); 
           $(".p4").html(time_jiange+"天<br/>利率为0.06%<br/>推荐每天存"+a+"元");
  });
  $("button#no").click(function(){
        $(".p3").val(""); 
        $(".p4").html("");
  });

}


//在按yes按钮时推荐日期

 