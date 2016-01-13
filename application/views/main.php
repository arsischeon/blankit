<style>
  .banner{
    position: absolute;
    -webkit-transform: rotate(-7deg);
    transform: rotate(-7deg);
    transform-origin: 0% 100%;
    overflow: hidden;
    -webkit-backface-visibility: hidden;
  }
  .image-in-banner{
    transform: rotate(7deg);
    width: 100%;
    left:0px;
    -webkit-backface-visibility: hidden;
  }
</style>
<script>
$(window).load(function(){
  var height=300;
  var angle=7*Math.PI/180;
  var banner_height=height*Math.cos(angle);
  var banner_width=$(window).width()*Math.cos(angle)+height*Math.sin(angle);

  // var banner_left=-1*banner_height*Math.sin(angle);
  // var banner_top=-1*(banner_width-banner_height*Math.tan(angle))*Math.sin(angle);

  $(".banner").css("left","0px");
  $(".banner").css("top","0px");
  $(".banner").css("width",banner_width+"px");
  $(".banner").css("height",banner_height+"px");
});
</script>
<div class="banner">
  <img class="image-in-banner " src="/source/image/banner1.jpg">
</div>
