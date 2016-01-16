<style>
.banner{
  height:300px;
  width:100%;
  background: #EAEAEA;
  position:absolute;
  left:0;
  top:0;
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
.img{
  width:100%;
}
.img-circle{
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
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

    <!-- 컨텐츠 시작-->
  <div class="row">
    <?
    foreach ($artist_list->result() as $row)
  	{
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
    <? } ?>
  </div>
  <!-- 컨텐츠 끝 -->

</div>
