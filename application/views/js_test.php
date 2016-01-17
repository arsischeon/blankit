<style>
.round{
  border-radius: 50%;
  margin-top: 5px;
  height:20px;width:20px;
  display:inline-block;
  cursor:pointer;
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
</style>
<div class="row options_row">
  <div class="col-xs-12">
    <div class="options">
      <span class="options_left">컬러</span>
      <div class="options_right">
        <div name="color" id="1" class="round" style="background:#2f2f2f; "></div>
        <div name="color" id="2" class="round" style="background:#7b1719; "></div>
        <div name="color" id="3" class="round" style="background:#efeee9; "></div>
        <div name="color" id="4" class="round" style="background:#14130f; "></div>
        <div name="color" id="5" class="round" style="background:#bfc0c5; "></div>
        <div name="color" id="6" class="round" style="background:#1f233c; "></div>
      </div>
      <div style="clear: both;"></div>
    </div>
  </div>
</div>
<script>
$(function(){
  $("div[name='color']").on("click",function(event){
  for(var i=1;i<7;i++){
    $("div[id='"+i+"']").css("border","none");
  }
  $("div[id='"+event.target.id+"']").css("border","3px solid red");

  });
});
</script>
