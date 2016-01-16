<style>
.banner{
  height:300px;
  width:100%;
  background: #EAEAEA;
  position:absolute;
  left:0;
  top:0;
}

.menu{
  width:250px;
  height:100%;
  position: absolute;
  left:50%;
  bottom:0;
  margin-left: -125px;

  background: white;
}
.menu_item{
  font-weight: bold;
  color: #868686;
  text-align: center;
  display: inline-block;
  width:23%;
  height:100%;
  cursor: pointer;
}
.menu_item:hover{
  color: #96AFB5;
  border-bottom:2px solid #96AFB5;
}

.radius-4{
  border-radius: 15px;
}
.status_bar{
  height:7px;
  background: linear-gradient(to right, #687C87 70%,#D3D3D3 70% );
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

.box:hover{
  background: #96AFB5;
}
.box:hover p{
  color: white;
}

</style>
  <div class="row">
<!-- 컨텐츠 반복시작 -->

<?php 
	foreach ($store_contents->results() as $row){
	
	//아래는 현재 URL 확인용 continue
	$url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];	
	if (strpos($url,'cloth') !== false) {
		$urlNum = 1;
		echo 'cloth exists.';
	} else if(strpos($url,'ecobag') !== false) {
		$urlNum = 2;
		echo 'ecobag exists.';
	} else if(strpos($url,'pouch') !== false){
		$urlNum = 3;
		echo 'pouch exists.';
	} else {
		$urlNum = 0;
		echo 'index exists.';
	}
	
	//현재 URL에 맞는 타입이 아니면 패쓰
	if ($urlNum == 0){
		echo 'this is index!';
	} else if ($row->store_type !== $urlNum){
		echo 'this is' . $urlNum;
		continue;
	}

	$totalGoal = $row->store_goal;
	$nowGoal = $row->store_goal_now;
	$percGoal = $nowGoal / $totalGoal * 100;
	
	//"앞으로 # 일 계산"
	$curDate = date('Y-m-d H:i:s');
	$dueDate = $row->store_day;
	$curDateNum = strtotime($curDate);
	$dueDateNum = strtotime($dueDate);
	$remainSecs = $dueDateNum - $curDateNum;
	$remainDays = $remainSecs / 86400;
	//여기까지 "앞으로 # 일 계산"
?>
    
    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-15">
      <div class="box radius-4">
      <div><img src="<?php echo $row->store_image;?>" class="img_rounded"></div>
      <div class="status_bar" style="background: linear-gradient(to right, #687C87 <?php echo ceil($percGoal)?>%,#D3D3D3 <?php echo ceil($percGoal)?>% );"></div>
      <div class="artist_hover" style="padding-top:7px;">
        <span class="status_percent"><?php echo ceil($percGoal);?>%</span>
        <span class="status_day_word">앞으로 <span class="status_day"><?php echo floor($remainDays);?></span>일</span>
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

<!-- 컨텐츠 반복 끝 -->
</div>
</div>