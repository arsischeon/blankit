<style>
.banner{
  height:50px;
  width:100%;
  background: white;
  position:absolute;
  left:0;
  top:0;
  border-bottom: 1px solid #D3D3D3;
}
.nav-color{
  color: #868686 !important;
}
.options_row{
  /*padding-bottom: 5px;*/
}
.options{
  border-bottom: 1px solid #D3D3D3;
  padding: 7px 0 7px 0;
}
.options_left{
  float:left;
  margin-top: 5px;
}
.options_right{
  float:right;
  height:30px;
}
.status_bar{
  height:7px;
}
.option_title{
  font-size: 15px;

}
.myButton {
  background-color:#687C87;
  border-radius:26px;
  border:3px solid #687c87;
  display:inline-block;
  cursor:pointer;
  color:white !important;
  font-family:"Noto Sans", "Noto Sans CJK KR", sans-serif;
  font-size:18px;
  font-weight:400;
  padding:10px 48px;
  text-decoration:none;
}
.myButton:hover {
  background-color:white;
  color: #687c87 !important;

}
.myButton:active {
  position:relative;
  top:1px;
}
.submit_button{
  display: block;
  text-align: center;
}
.round{
  border-radius: 50%;
  margin-top: 5px;
  height:20px;width:20px;
  display:inline-block;
}
</style>
<script>
$(function(){
  $("#root_container").css("height",$(".banner").height()+"px");
  $("#type").selectmenu({
    width: 100,
    height:50
  });
  $("#size").selectmenu({
    width: 60,
    height:50
  });
  $("#amount").spinner();
  $("#amount").css("width","30px")
});
</script>
  <div class="banner">

  </div>
</div>

<?php
	$urlPath = "$_SERVER[REQUEST_URI]";
	$explodePath = explode('/', $urlPath);

	$numPath = $explodePath[3]; // 현재 URL 상품번호

	foreach ($details->result() as $row)
	{
		if($row->store_id == $numPath){
			$storeImage = $row->store_image;
			$storeDay = $row->store_day;
			$storeGoal = $row->store_goal;
			$storeGoalNow = $row->store_goal_now;
			$userName = $row->user_name;
			$storeType = $row->store_type;
			$storeStatus = $row->store_status;
			$storeId = $row->store_id;
			$storeName = $row->store_name;
			$storePrice = $row->store_price;
			break;
		}
	}

	$percGoal = $storeGoalNow / $storeGoal * 100;

	//"앞으로 # 일 계산"
	$curDate = date('Y-m-d H:i:s');
	$dueDate = $storeDay;
	$curDateNum = strtotime($curDate);
	$dueDateNum = strtotime($dueDate);
	$remainSecs = $dueDateNum - $curDateNum;
	$remainDays = $remainSecs / 86400;
	//여기까지 "앞으로 # 일 계산"

	$PRICE =  number_format($storePrice, 0, '.', ','); // 가격 천 단위 콤마 넣어주기

?>

<div class="container" >
  <div class="row" style="padding-bottom:30px; border-bottom: 1px solid  #D3D3D3;">
    <p style="display:block; text-align:center; font-weight:bold; font-size:40px;"><?php echo $storeName;?></p>
    <p style="display:block; text-align:center; font-weight:regular; font-size:20px;"><?php echo $userName;?></p>

  </div>
</div>
<div class="container" style="margin-top:20px;">
  <div class="row row_padding-xs">
    <div class="col-md-8" style="height:562px; background:black;">
		<img src="<?php echo $storeImage;?>" class="img">  <!-- 우현 여기 고쳐줘 -->
    </div>
    <div class="col-md-4" style="padding-left:20px; height:100%; ">
    <div class="row">
      <div class="col-xs-6 col-sm-12">
        <div class="col-xs-12">
          <span class="option_title">남은 일자</span>
        </div>
        <div class="col-xs-12">
          <span style="font-size:50px; font-weight:300; "><?php echo floor($remainDays);?></span>
          <span>일</span>
        </div>
      </div>

      <div class="col-xs-6 col-sm-12">
        <div class="col-xs-12">
          <span class="option_title">모인 인원</span>
        </div>
        <div class="col-xs-12">
          <div style="display:inline-block; float:left;">
            <span style="font-size:50px; font-weight:300; "><?php echo $storeGoalNow;?></span>
            <span>명</span>
          </div>
          <div style="position: absolute; bottom: 12px; right: 15px; ">
            <span style="color:#687C87; font-weight:bold;"><?php echo ceil($percGoal);?>%</span>
          </div>
        </div>
    </div>
  </div>
      <div class="row">
        <div class="col-xs-12">
          <div class="status_bar" style="background: linear-gradient(to right, #687C87 <?php echo ceil($percGoal)?>%,#D3D3D3 <?php echo ceil($percGoal)?>% );">
          </div>
      </div>
    </div>
      <div class="row options_row" style="margin-top:20px;" >
        <div class="col-xs-12">
          <div class="options">
            <span>OPTIONS</span>
          </div>
        </div>
      </div>
      <div class="row options_row">
        <div class="col-xs-12">
          <div class="options">
            <span class="options_left">가격</span>
            <span class="options_right" style="margin-top:5px;height:25px;"><?php echo $PRICE;?>원</span>
            <div style="clear: both;"></div>
          </div>
        </div>
      </div>
      <div class="row options_row">
        <div class="col-xs-12">
          <div class="options">
            <span class="options_left">타입</span>
            <div class="options_right">
              <select id="type">
                <option value="1">후드</option>
                <option value="2">맨투맨</option>
              </select>
            </div>
            <div style="clear: both;"></div>
          </div>
        </div>
      </div>
      <div class="row options_row">
        <div class="col-xs-12">
          <div class="options">
            <span class="options_left">컬러</span>
            <div class="options_right">
              <div class="round" style="background:red; "></div>
              <div class="round" style="background:green; "></div>
              <div class="round" style="background:yellow; "></div>
              <div class="round" style="background:grey; "></div>
            </div>
            <div style="clear: both;"></div>
          </div>
        </div>
      </div>
      <div class="row options_row">
        <div class="col-xs-12">
          <div class="options">
            <span class="options_left">사이즈</span>
            <div class="options_right">
              <select id="size">
                <option value="1">xs</option>
                <option value="2">sm</option>
                <option value="2">m</option>
                <option value="2">l</option>
                <option value="2">xl</option>
              </select>
            </div>
            <div style="clear: both;"></div>
          </div>
        </div>
      </div>
      <div class="row options_row">
        <div class="col-xs-12">
          <div class="options">
            <span class="options_left">수량</span>
            <span class="options_right">
              <input id="amount" name="amount">
            </span>
            <div style="clear: both;"></div>
          </div>
        </div>
      </div>
      <div class="row options_row" style="margin-top:20px;">
        <div class="col-xs-12">
          <div class="submit_button"><a href="#" class="myButton">펀딩하기</a></div>
        </div>
      </div>
    </div>
  </div>

  <div class="row row_padding-xs" style="margin-top:20px;">
    <div class="col-xs-12" style=" padding-left:0;  padding-right:0; padding-bottom:30px;border-bottom:1px solid #D3D3D3;">
      <span>share</span>
      <div></div>
    </div>
    <div class="col-xs-12" style=" padding-left:0;  padding-right:0; margin-top:30px;">
      <div style="width:100%; background:#F7F7F7; height:700px;">
        <span style="padding-top: 350px;display:block; text-align:center;">
          (제품 상세 이미지)
        </span>
      </div>
    </div>
  </div>
</div>
