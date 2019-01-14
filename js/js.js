$(function(){
// $("#gsc-i-id1").click(function(){
// //code here
// }) 
 
 $(document).on("keyup","#gsc-i-id1",function(){
     //code here
   // var txt= $(this).val();
    // alert(txt)
    if($(this).val().length>0){
      $(".opmove").css({"padding":"1% 20%"});
      $(".logo").css({"width":"50%"});
      $(".power").fadeOut();
    }
    
 });
})


