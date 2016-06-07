

   $(document).ready(function(){
    var i=parseInt($('.number').text());
    $(".total").click(function(){   
          var v=$("#putvalue").val(); 
          var height=$("#circle2").outerHeight()/(i)*v;       
           $("#blank").height(height); 
      $('.number').text(""+(i-v)+"").css('display','inline-block');
       });  
    $("#percentCheckbox").click(function(){  
    var hasChk = $('#percentCheckbox').is(':checked');
    if(hasChk){
       $('#or').text(""+"%"+"").css('display','inline-block');
          $(".total").click(function(){  
          var v=$("#putvalue").val(); 
          var height=$("#circle2").outerHeight()*v*0.01;       
           $("#blank").height(height); 
      $('.number').text(""+(i)*(1-v*0.01)+"").css('display','inline-block');
       });  
    }else{ 
      $('#or').text(""+"元"+"").css('display','inline-block');
        $(".total").click(function(){   
          var v=$("#putvalue").val(); 
          var height=$("#circle2").outerHeight()/(i)*v;       
           $("#blank").height(height); 
      $('.number').text(""+(i-v)+"").css('display','inline-block');
       });  
} 
  });
   });

