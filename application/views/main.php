<style>
  .banner{
    position: absolute;
    -webkit-transform: rotate(-7deg);
    transform: rotate(-7deg);
    transform-origin: 0% 100%;
    overflow: hidden;
    -webkit-backface-visibility: hidden;
    background: grey;
    z-index: 100;
  }
  .image-in-banner{
    width:100%;
    transform: rotate(7deg);
    -webkit-backface-visibility: hidden;
  }
</style>
<script>
function slanted_banner_generator(){
  var height=$(window).height()*0.8;
  var angle=7*Math.PI/180;
  var banner_height=height*Math.cos(angle);
  var banner_width=$(window).width()*Math.cos(angle)+height*Math.sin(angle);
  $(".banner").css("left","0px");
  $(".banner").css("top","0px");
  $(".banner").css("width",banner_width+"px");
  $(".banner").css("height",banner_height+"px");
  $(".banner-wrap").css("height",banner_height-50+"px");

}
$(function(){
  $(".banner").css("display","none");
  slanted_banner_generator();
  $(".banner").css("display","");
  $(".banner").hover(function(){
    $(".banner").css("background","red");
  });
});
$(window).resize(function(){
  slanted_banner_generator();
});
</script>
<div class="banner-wrap  ">
<div class="banner">
  <!-- <img class="image-in-banner" src="/source/image/banner1.jpg"> -->
</div>
<div class="banner-roll">
</div>
</div>
<div class="row" style="background:red;">
  <div class="col-md-12">
  <span>ve</span>
</div>
</div>
