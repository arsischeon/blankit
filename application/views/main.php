<style>
  .banner{
    position: absolute;
    background: red;
    -webkit-transform: rotate(-7deg);
    transform: rotate(-7deg);
    transform-origin: 0% 100%;
  }
</style>
<script>
$(window).load(function(){
  var height=300;
  var angle=-7;
  var banner_height=height*Math.cos(angle);
  var banner_width=$(window).width()*Math.sin(angle)+height*Math.sin(angle);

  var banner_left=-1*banner_height*Math.sin(angle);
  var banner_top=-1*(banner_width-banner_height*Math.tan(angle))*Math.sin(angle);
  $(".banner").css("left",banner_left+"px");
  $(".banner").css("top",banner_top+"px");
  $(".banner").css("width",banner_width+"px");
});
</script>
<div class="banner">

</div>
