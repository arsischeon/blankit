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
        <div class="menu_item" style="border-bottom:2px solid #96AFB5; color:#96AFB5;"><a href="/store/cloth">의류</a></div>
        <div class="menu_item"><a href="/store/ecobag">에코백</a></div>
        <div class="menu_item"><a href="/store/pouch">파우치</a></div>
        <div class="menu_item"><a href="/store/done">마감</a></div>
      </div>
    </div>
  </div>
