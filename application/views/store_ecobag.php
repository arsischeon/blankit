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
.col-md-five{
  width:19.7%;
  padding: 15px 15px;
  display: inline-block;
  /*background: black;
  height:400px;*/
}
.box{
  border: 1.5px solid #868686;
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
</style>
<script>
$(function(){
  $("#root_container").css("height",$(".banner").height()+"px");
});
</script>
  <div class="banner">

  </div>
</div>
<div class="container" >
  <div class="row" style="margin-bottom:40px;">
    <div class="col-md-12" style="position:relative; height:25px; border-bottom: 1.5px solid #D3D3D3;">
      <div class="menu">
        <div class="menu_item"><a href="/store">전체</a></div>
        <div class="menu_item"><a href="/store/cloth">의류</a></div>
        <div class="menu_item" style="border-bottom:2px solid #96AFB5; color:#96AFB5;"><a href="/store/ecobag">에코백</a></div>
        <div class="menu_item"><a href="/store/pouch">파우치</a></div>
      </div>
    </div>
  </div>

  <!-- 내용 시작 -->
  <div class="row">
    <div class="col-md-five">
      <div class="box radius-4">
      <div><img src="/source/image/img_placeholder.png" class="img"></div>
      <div class="status_bar"></div>
      <div class="artist_hover" style="padding-top:7px;">
        <span class="status_percent">70%</span>
        <span class="status_day_word">앞으로 <span class="status_day">7</span>일</span>
      </div>
      <div class="artist_hover" style="width: 100%; display: inline-flex;">
        <div style="width:20%; margin-left: 10px; padding-top: 10px; margin-bottom:15px;">
          <img src="/source/image/profile_placeholder.png" class="img img-circle">
        </div>
        <div style="width:80%; padding-left:10px; padding-top:10px;">
          <p class="artist_name">아티스트</p>
          <p class="artist_type">그래픽 디자인</p>
        </div>
      </div>
    </div>
  </div>


  <div class="col-md-five">
    <div class="box radius-4">
    <div><img src="/source/image/img_placeholder.png" class="img"></div>
    <div class="status_bar"></div>
    <div style="padding-top:7px;">
      <span class="status_percent">70%</span>
      <span class="status_day_word">앞으로 <span class="status_day">7</span>일</span>
    </div>
    <div style="width: 100%; display: inline-flex;">
      <div style="width:20%; margin-left: 10px; padding-top: 10px; margin-bottom:15px;">
        <img src="/source/image/profile_placeholder.png" class="img img-circle">
      </div>
      <div style="width:80%; padding-left:10px; padding-top:10px;">
        <p class="artist_name">아티스트</p>
        <p class="artist_type">그래픽 디자인</p>
      </div>
    </div>
  </div>
  </div>
  <div class="col-md-five">
    <div class="box radius-4">
    <div><img src="/source/image/img_placeholder.png" class="img"></div>
    <div class="status_bar"></div>
    <div style="padding-top:7px;">
      <span class="status_percent">70%</span>
      <span class="status_day_word">앞으로 <span class="status_day">7</span>일</span>
    </div>
    <div style="width: 100%; display: inline-flex;">
      <div style="width:20%; margin-left: 10px; padding-top: 10px; margin-bottom:15px;">
        <img src="/source/image/profile_placeholder.png" class="img img-circle">
      </div>
      <div style="width:80%; padding-left:10px; padding-top:10px;">
        <p class="artist_name">아티스트</p>
        <p class="artist_type">그래픽 디자인</p>
      </div>
    </div>
  </div>
  </div>
  <div class="col-md-five">
    <div class="box radius-4">
    <div><img src="/source/image/img_placeholder.png" class="img"></div>
    <div class="status_bar"></div>
    <div style="padding-top:7px;">
      <span class="status_percent">70%</span>
      <span class="status_day_word">앞으로 <span class="status_day">7</span>일</span>
    </div>
    <div style="width: 100%; display: inline-flex;">
      <div style="width:20%; margin-left: 10px; padding-top: 10px; margin-bottom:15px;">
        <img src="/source/image/profile_placeholder.png" class="img img-circle">
      </div>
      <div style="width:80%; padding-left:10px; padding-top:10px;">
        <p class="artist_name">아티스트</p>
        <p class="artist_type">그래픽 디자인</p>
      </div>
    </div>
  </div>
  </div>
  <div class="col-md-five">
    <div class="box radius-4">
    <div><img src="/source/image/img_placeholder.png" class="img"></div>
    <div class="status_bar"></div>
    <div style="padding-top:7px;">
      <span class="status_percent">70%</span>
      <span class="status_day_word">앞으로 <span class="status_day">7</span>일</span>
    </div>
    <div style="width: 100%; display: inline-flex;">
      <div style="width:20%; margin-left: 10px; padding-top: 10px; margin-bottom:15px;">
        <img src="/source/image/profile_placeholder.png" class="img img-circle">
      </div>
      <div style="width:80%; padding-left:10px; padding-top:10px;">
        <p class="artist_name">아티스트</p>
        <p class="artist_type">그래픽 디자인</p>
      </div>
    </div>
  </div>
  </div>
  </div>
  <div class="row">
    <div class="col-md-five">
      <div class="box radius-4">
      <div><img src="/source/image/img_placeholder.png" class="img"></div>
      <div class="status_bar"></div>
      <div class="artist_hover" style="padding-top:7px;">
        <span class="status_percent">70%</span>
        <span class="status_day_word">앞으로 <span class="status_day">7</span>일</span>
      </div>
      <div class="artist_hover" style="width: 100%; display: inline-flex;">
        <div style="width:20%; margin-left: 10px; padding-top: 10px; margin-bottom:15px;">
          <img src="/source/image/profile_placeholder.png" class="img img-circle">
        </div>
        <div style="width:80%; padding-left:10px; padding-top:10px;">
          <p class="artist_name">아티스트</p>
          <p class="artist_type">그래픽 디자인</p>
        </div>
      </div>
    </div>
  </div>


  <div class="col-md-five">
    <div class="box radius-4">
    <div><img src="/source/image/img_placeholder.png" class="img"></div>
    <div class="status_bar"></div>
    <div style="padding-top:7px;">
      <span class="status_percent">70%</span>
      <span class="status_day_word">앞으로 <span class="status_day">7</span>일</span>
    </div>
    <div style="width: 100%; display: inline-flex;">
      <div style="width:20%; margin-left: 10px; padding-top: 10px; margin-bottom:15px;">
        <img src="/source/image/profile_placeholder.png" class="img img-circle">
      </div>
      <div style="width:80%; padding-left:10px; padding-top:10px;">
        <p class="artist_name">아티스트</p>
        <p class="artist_type">그래픽 디자인</p>
      </div>
    </div>
  </div>
  </div>
  <div class="col-md-five">
    <div class="box radius-4">
    <div><img src="/source/image/img_placeholder.png" class="img"></div>
    <div class="status_bar"></div>
    <div style="padding-top:7px;">
      <span class="status_percent">70%</span>
      <span class="status_day_word">앞으로 <span class="status_day">7</span>일</span>
    </div>
    <div style="width: 100%; display: inline-flex;">
      <div style="width:20%; margin-left: 10px; padding-top: 10px; margin-bottom:15px;">
        <img src="/source/image/profile_placeholder.png" class="img img-circle">
      </div>
      <div style="width:80%; padding-left:10px; padding-top:10px;">
        <p class="artist_name">아티스트</p>
        <p class="artist_type">그래픽 디자인</p>
      </div>
    </div>
  </div>
  </div>
  <div class="col-md-five">
    <div class="box radius-4">
    <div><img src="/source/image/img_placeholder.png" class="img"></div>
    <div class="status_bar"></div>
    <div style="padding-top:7px;">
      <span class="status_percent">70%</span>
      <span class="status_day_word">앞으로 <span class="status_day">7</span>일</span>
    </div>
    <div style="width: 100%; display: inline-flex;">
      <div style="width:20%; margin-left: 10px; padding-top: 10px; margin-bottom:15px;">
        <img src="/source/image/profile_placeholder.png" class="img img-circle">
      </div>
      <div style="width:80%; padding-left:10px; padding-top:10px;">
        <p class="artist_name">아티스트</p>
        <p class="artist_type">그래픽 디자인</p>
      </div>
    </div>
  </div>
  </div>
  <div class="col-md-five">
    <div class="box radius-4">
    <div><img src="/source/image/img_placeholder.png" class="img"></div>
    <div class="status_bar"></div>
    <div style="padding-top:7px;">
      <span class="status_percent">70%</span>
      <span class="status_day_word">앞으로 <span class="status_day">7</span>일</span>
    </div>
    <div style="width: 100%; display: inline-flex;">
      <div style="width:20%; margin-left: 10px; padding-top: 10px; margin-bottom:15px;">
        <img src="/source/image/profile_placeholder.png" class="img img-circle">
      </div>
      <div style="width:80%; padding-left:10px; padding-top:10px;">
        <p class="artist_name">아티스트</p>
        <p class="artist_type">그래픽 디자인</p>
      </div>
    </div>
  </div>
  </div>
  <!-- 내용 끝 -->
  </div>

</div>
