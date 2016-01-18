<style>
  .banner{
    position: relative;
    -webkit-transform: rotate(-7deg);
    transform: rotate(-7deg);
    transform-origin: 0% 100%;
    overflow: hidden;
    -webkit-backface-visibility: hidden;
    background: #EAEAEA;
    z-index: 100;
  }
  .banner-wrap{
    position:relative;
  }
  .banner-roll{
    position: absolute;
    width:100px;
    height:10px;
    text-align: center;
    bottom: 30px;
    left:50%;
    margin-left:-50px;
  }
  .banner-roll-circle{
    border-radius:50%;
    border: 1px solid #EAEAEA;
    height:100%;
    width:10px;
    display:inline-block;
    cursor: pointer;
  }
  .image-in-banner{
    /*width:100%;*/
    /*transform: rotate(7deg);*/
    position: absolute;
    left:0px;
    top:0px;
    height:100%;
    -webkit-backface-visibility: hidden;
  }

  .view_more{
    float: right;
    border-bottom: 2px solid black;
    text-align: left;
    width:100px; //width 를 1px씩 증가시키면서 margin-right도 같이 감소하도록
    margin-right: -50px;
  }
  .col-md-five{
    width:19.6%;
    padding: 15px 15px;
    display: inline-block;
    /*background: black;
    height:400px;*/
  }
  .box{
    border: 1.5px solid #868686;
    overflow: hidden;
  }
  .radius-4{
    border-radius: 15px;
  }
  .status_bar{
    height:7px;
  }
  .img{
    width:100%;
  }

  .status_percent{
    font-weight: bold;
    color: #687C87;
    font-size: 10px;
    float:left;
    margin-left: 10px;
  }
  .status_day_word{
    font-weight: bold;
    color: #655453;
    font-size: 10px;
    float:right;
    margin-right:10px;
  }
  .status_day{
    font-weight: bold;
    color: #687C87;
    font-size: 10px;
  }
  .artist_name{
    margin-bottom:5px;
    font-size: 10px;
    font-weight:bold;
  }
  .artist_type{
    margin-bottom:5px;
    font-size: 10px;
    font-weight:regular;
  }
  .box:hover{
    background: #96AFB5;
  }
  .box:hover p{
    color: white;
  }
  .myButton {
  	background-color:transparent;
  	-moz-border-radius:20px;
  	-webkit-border-radius:20px;
  	border-radius:20px;
  	border:3px solid #687c87;
  	display:inline-block;
  	cursor:pointer;
  	color:#687c87;
  	font-family:"Noto Sans", "Noto Sans CJK KR", sans-serif;
  	font-size:16px;
  	font-weight:bold;
  	padding:6px 48px;
  	text-decoration:none;
  }
  .myButton:hover {
  	background-color:#687c87;
  	color: white;
  	text-decoration: none;
  }
  .myButton:active {
  	position:relative;
  	top:1px;
  }
  .submit_button{
    display: block;
    text-align: center;
  }
  .img_hover_cover{
     z-index: 100;
     background: #96AFB5;
     width:100%;
  }
  .img_hover {
    z-index: 50;
    width: 100%;
    opacity: 1;
  }
  .img_hover:hover{
    z-index: 50;
    width: 100%;
    opacity: 0.5;
  }
</style>
<script>
function slanted_banner_generator(){
  var width = document.documentElement.clientWidth;
  var height=$(window).height()*0.8;
  var angle=7*Math.PI/180;
  var banner_height=height*Math.cos(angle);
  var banner_width=$(window).width()*Math.cos(angle)+height*Math.sin(angle);
  $(".banner").css("left","0px");
  $(".banner").css("top","0px");
  $(".banner").css("width",banner_width+"px");
  $(".banner").css("height",banner_height+"px");
  $(".banner-wrap").css("height",banner_height-50+"px");

  $("#banner_cut").css("width",width+"px");
  $("#banner_cut").css("height",$(window).height()*0.8+"px");
  $(".image-in-banner").css("min-height",$(window).height()+"px");
  $("#banner_1").css("margin-left","-"+($("#banner_1").width()-banner_width)/2+"px");
  $("#banner_2").css("margin-left","-"+($("#banner_1").width()-banner_width)/2+"px");
  $("#banner_3").css("margin-left","-"+($("#banner_1").width()-banner_width)/2+"px");
}
$(function(){
  $(".banner").css("display","none");
  slanted_banner_generator();
  $( "#banner_3" ).load(function() {
    slanted_banner_generator();
  });
  $(".banner").css("display","");
  $(".banner").hover(function(){
    // $(".banner").css("background","red");
    //배너에 마우스 오버시 배너 바꾸는 화살표 필요
  });
   $('.bxslider').bxSlider({
     slideMargin:50,
     adaptiveHeight:true,
     infiniteLoop:false,
     controls:false
   });
   bannerAnimation();

});
var bannerNum=0;
var bannerMax=3;
var zindex=1;
function bannerAnimation(){
bannerBeforeSelector().animate({
  opacity:0
},{duration:4000});
console.log(bannerNum+" - "+zindex);
bannerSelector().css("z-index",++zindex).animate({
  opacity:1
},{duration:4000,
 complete: function() {
   bannerAnimation();
 }
});

}
function bannerSelector(){
  bannerNum++;
  if(bannerNum>bannerMax)bannerNum=1;
  return $("#banner_"+bannerNum);
}
function bannerBeforeSelector(){
  return $("#banner_"+bannerNum);
}
$(window).resize(function(){
  slanted_banner_generator();
});
</script>
<div id="banner_cut" style="left:0;top:0;position:absolute;  overflow:hidden;">
<div class="banner">
  <div id="banner_0"></div>
   <img id="banner_1" style="z-index:0; opacity:0;" class="image-in-banner" src="/source/image/main-banner-image1.gif">
  <img id="banner_2" style="z-index:0; opacity:0;" class="image-in-banner" src="/source/image/main-banner-image2.gif">
    <img id="banner_3" style="z-index:0; opacity:0;" class="image-in-banner" src="/source/image/main-banner-image3.gif">

</div>
</div>
<div class="banner-wrap ">
<div class="banner-roll">
  <div class="banner-roll-circle"></div>
  <div class="banner-roll-circle" style="background:#687C87;"></div>
  <div class="banner-roll-circle"></div>
  <div class="banner-roll-circle"></div>
</div>
</div>
<div class="row" style="margin-top:20px;">
  <div class="col-md-12">
  <p class="row_title">STORE</p>
  <p class="row_desc">이 카테고리를 설명할 수 있는 글이에요</p>
</div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="view_more"><a href="/store">view more</a></div>
  </div>
</div>
<!-- 모바일 시작 -->
<div class="row hidden-md hidden-lg">
  <div class="col-xs-12" style="margin-top:20px;">
    <ul class="bxslider">
      <?php

      	foreach ($mdpick->result() as $row)
      	{
        $totalGoal = $row->store_goal;
        $nowGoal = $row->store_goal_now;
        $percGoal = $nowGoal / $totalGoal * 100;
      ?>
      <li>
    <div class=" radius-4">
    <div><a href="/store/product/<?php echo $row->store_id?>">
      <img src="<?php echo $row->store_image;?>" class="img_rounded">
    </a></div>
    <div class="status_bar" style="background: linear-gradient(to right, #687C87 <?php echo ceil($percGoal)?>%,#D3D3D3 <?php echo ceil($percGoal)?>% );"></div>
    <div class="artist_hover" style="padding-top:7px;">
      <span class="status_percent"><?php echo ceil($percGoal) . "%";?></span>
      <span class="status_day_word">앞으로 <span class="status_day">
           	<?php
      		//"앞으로 # 일 계산"
      		$curDate = date('Y-m-d H:i:s');
      		$dueDate = $row->store_day;
      		$curDateNum = strtotime($curDate);
      		$dueDateNum = strtotime($dueDate);
      		$remainSecs = $dueDateNum - $curDateNum;
      		$remainDays = $remainSecs / 86400;
      		echo floor($remainDays);
      		//여기까지 "앞으로 # 일 계산"
      		?>
      </span>일</span>
    </div>
    <div class="artist_hover" style="width: 100%; display: inline-flex;">
      <div style="width:20%; margin-left: 10px; padding-top: 10px; margin-bottom:15px;">
        <img src="<?php echo $row->artist_profile;?>" class="img img-circle">
      </div>
      <div style="width:80%; padding-left:10px; padding-top:15px;">
        <p class="artist_name"><?php echo $row->user_name;?></p>
        <p class="artist_type"><?php echo $row->artist_type;?></p>
      </div>
    </div>
  </div>
</li>
<?php }?>
</ul>
</div>
</div>

<!-- 모바일 종료 -->
<!-- 데스크탑 시작 -->


<div class="row hidden-sm hidden-xs">

<?php

	foreach ($mdpick->result() as $row)
	{
		$totalGoal = $row->store_goal;
		$nowGoal = $row->store_goal_now;
		$percGoal = $nowGoal / $totalGoal * 100;
?>


  <div class="col-md-five">
    <div class="box radius-4">
    <div><a href="/store/product/<?php echo $row->store_id?>">
      <img src="<?php echo $row->store_image;?>" class="img_rounded">
    </a></div>
    <div class="status_bar" style="background: linear-gradient(to right, #687C87 <?php echo ceil($percGoal)?>%,#D3D3D3 <?php echo ceil($percGoal)?>% );"> </div>
    <div class="artist_hover" style="padding-top:7px;">
      <span class="status_percent">
      	<?php
      		echo ceil($percGoal) . "%";
      	?>
      </span>
      <span class="status_day_word">앞으로 <span class="status_day">
      	<?php
      		//"앞으로 # 일 계산"
      		$curDate = date('Y-m-d H:i:s');
      		$dueDate = $row->store_day;
      		$curDateNum = strtotime($curDate);
      		$dueDateNum = strtotime($dueDate);
      		$remainSecs = $dueDateNum - $curDateNum;
      		$remainDays = $remainSecs / 86400;
      		echo floor($remainDays);
      		//여기까지 "앞으로 # 일 계산"
      	?>
      </span>일</span>
    </div>
    <div class="artist_hover" style="width: 100%; display: inline-flex;">
      <div style="width:20%; margin-left: 10px; padding-top: 10px; margin-bottom:15px;">
        <img src="<?php echo $row->artist_profile;?>" class="img img-circle">
      </div>
      <div style="width:80%; padding-left:10px; padding-top:10px;">
        <p class="artist_name"><?php echo $row->user_name;?></p>
        <p class="artist_type"><?php echo $row->artist_type;?></p>
      </div>
    </div>
  </div>
</div>

<?php }?>

</div>
</div>
<!-- 데스크탑 종료 -->



<div class="container-fluid">
<div class="row" style="margin-top: 20px;">
  <div class="row-md-12" style="background: #F5F6F7; padding-top:50px; padding-bottom:50px;">
    <p style="font-size:21px; font-weight:bold; text-align:center; margin-top:15px;">당신도 League Of Legend를 하세요!</p>
    <p style="font-size:13px; font-weight:regular; text-align:center;">블랭킷은 좋은 서비스 입니다. 신진 디자이너에게 밥을 사주세요</p>
    <div class="submit_button"><a href="#" class="myButton">submit</a></div>

  </div>
</div>
</div>
<div class="container">
  <div class="row" style="margin-top:40px;">
    <div class="col-md-12">
    <p class="row_title">ARTIST</p>
    <p class="row_desc">블랭킷의 디자이너들이다. 봐라</p>
  </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="view_more"><a href="/artist">view more</a></div>
    </div>
  </div>

  <div class="row" style="margin-top:30px;">
    <?
    $num=0;
    foreach ($artist_list->result() as $row)
    {
      $num++;
      if($num<4){
    ?>
    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-15">
      <div class="img_hover_cover img-circle">
        <img src="<?echo $row->artist_profile;?>" class="img img_hover img-circle">
      </div>
      <div style="text-align:center; margin-top:10px;">
        <p style="margin-bottom:2px;" class="artist_name"><?  echo $row->user_name;?></p>
        <p class="artist_type"><? echo $row->artist_type;?></p>
      </div>
    </div>
    <? }
    if($num==4){
  ?>
  <div class="col-xs-6 col-sm-4 col-md-3 col-lg-15">
    <div class="img_hover_cover img-circle">
      <img src="<?echo $row->artist_profile;?>" class="img img_hover img-circle">
    </div>
    <div style="text-align:center; margin-top:10px;">
      <p style="margin-bottom:2px;" class="artist_name"><?  echo $row->user_name;?></p>
      <p class="artist_type"><? echo $row->artist_type;?></p>
    </div>
  </div>
  <? }
  if($num==5){
?>
<div class="col-xs-6 col-sm-4 hidden-md col-lg-15">
  <div class="img_hover_cover img-circle">
    <img src="<?echo $row->artist_profile;?>" class="img img_hover img-circle">
  </div>
  <div style="text-align:center; margin-top:10px;">
    <p style="margin-bottom:2px;" class="artist_name"><?  echo $row->user_name;?></p>
    <p class="artist_type"><? echo $row->artist_type;?></p>
  </div>
</div>
<? }
if($num==6){
?>
<div class="col-xs-6 col-sm-4 hidden-md hidden-lg">
<div class="img_hover_cover img-circle">
  <img src="<?echo $row->artist_profile;?>" class="img img_hover img-circle">
</div>
<div style="text-align:center; margin-top:10px;">
  <p style="margin-bottom:2px;" class="artist_name"><?  echo $row->user_name;?></p>
  <p class="artist_type"><? echo $row->artist_type;?></p>
</div>
</div>
<? }
        } ?>
  </div>

  </div>
