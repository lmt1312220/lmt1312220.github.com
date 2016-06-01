var m;
//today
//过推荐的日期了一段时间后
function show1(m){
　　var mydate = new Date();
// var str;
if(parseInt(mydate.getMonth()+1+m)>12)
　　 str= "" + (mydate.getFullYear()+1) + "-";
else
 str= "" + mydate.getFullYear() + "-";
　　str += (mydate.getMonth()+1+m) + "-";
　　str += mydate.getDate() ;
　　return str;
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

   $(document).ready(function(){
   	 $(".introduce_time").click(function(){  
 var val = $(".p2").val();
 if(parseInt(val)<=1000){
 	var  a=parseInt(parseInt(val)/60);
 	$("div.modal-body ").html("推荐存2个月，利率为0.02%，每日大约存"+a+"元，是否接受这种推荐");
    	// $(".p4").html("推荐存2个月<br/>利率为0.02%<br/>每日大约存"+a+"元")
    	m=2; 
 }
    else if(parseInt(val)>=1000||parseInt(val)<=3000){
    	var  a=parseInt(parseInt(val)/120);
    	$("div.modal-body").html("推荐存4个月，利率为0.04%，每日大约存"+a+"元，是否接受这种推荐");
    	$(".p4").html("推荐存4个月<br/>利率为0.04%<br/>每日大约存"+a+"元")
    	m=4; 
    	} 

    	else if(parseInt(val)>=3000||parseInt(val)<=5000){
    		var  a=parseInt(parseInt(val)/180);
$("div.modal-body").html("推荐存6个月，利率为0.06%，每日大约存"+a+"元，是否接受这种推荐");
    	m=6; 
    	}
    	else{
    		$("div.modal-body").html("推荐存8个月，利率为0.08%，每日大约存"+a+"元，是否接受这种推荐");
    	m=8; 
    	}
  });
     $("button#yes").click(function(){
   $(".p3").val(show1(m));
});

  $("#demo1").keyup(function(){
var mydate1 = new Date();
　　var str = "" + mydate.getFullYear() + "-";
　　str += (mydate.getMonth()+1) + "-";
　　str += mydate.getDate();
var val = $(".p3").val();
 var time_jiange=DateDiff(str,val);

 $(".p4").html("推荐存"+time_jiange+"个月，利率为0.06%，每日大约存"+a+"元，是否接受这种推荐");
});
  //计算俩个时间的时间差
//  $("#demo1").change(function(){  
//    $(this).css("background-color","#FFFFCC");
//     var mydate1 = new Date();
// 　　var str = "" + mydate.getFullYear() + "-";
// 　　str += (mydate.getMonth()+1) + "-";
// 　　str += mydate.getDate();
// var val = $(".p3").val();
//  var time_jiange=DateDiff(str,val);

//  $(".p4").html("推荐存"+time_jiange+"个月，利率为0.06%，每日大约存"+a+"元，是否接受这种推荐");
// });

});



//在按yes按钮时推荐日期

 