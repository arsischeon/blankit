$(function(){
  $("body").css("display","");
  $("body").css("width",$(window).width()+"px");
  $("#store_menu").click(function(){
    location.href="/store";
  });
  $("#aboutus_menu").click(function(){
    location.href="/aboutus";
  });

});
