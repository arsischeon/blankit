<style>
.banner{
  height:70px;
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
.myButton {
  background-color:#687c87;
  border-radius:12px;
  border:2px solid #687c87;
  display:inline-block ;
  cursor:pointer;
  color:white !important;
  font-family:"Noto Sans", "Noto Sans CJK KR", sans-serif;
  font-size:12px;
  font-weight:regular;
  padding:3px 12px;
}
.myButton:hover {
  background-color: white;
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
.menu{
  width:90px;
  display:inline-block;
}
.menu_input{
  width:150px;
}
.menu_input_radio{
  width:130px;
  display: inline-block;
}
.menu_button{
  margin-left: 10px;
}
.menu_input_phone_1{
  width:40px;
}
.menu_input_phone_2{
  width:50px;
}
.margin-bottom-5{
  margin-bottom: 5px;

}
input[type="radio"] + label{
  margin-left: 7px;
  font-size:13px;
}
.title1{
  font-size: 20px;
  color:#868686;
}
.title2{
  font-size: 13px;
  color:#443333;
}
.order_border{
  border:1px solid #B7B7B7;
  border-radius: 6px;
  padding: 5px;
}
.order_border:hover{
  background: #D3D3D3;
}
.order_result_1{
  font-size:10px;
  color:#D3D3D3;
  float:right;
}
.order_result_2{
  margin-left: 10px;
  font-size:12px;
  color:#443333;
  float:right;
}
.order_title{
  color:#868686;
  margin: 0px 0px 0px 3px;
}
.order_content{
  color:#443333;
  margin: 0px 0px 0px 3px;
}
</style>
<script>
var result=[];
$(function(){
  $(".product").on("click",function(event){
    var id=event.currentTarget.id;
    makeResult(id);
    console.log(result);
  })
});
function makeResult(id){
  for(var i=0;i<result.length;i++){
    //이미 들어있으면
    if(result[i]==id){
      $("#"+result[i]).find(".order_border").css("background","none");
      result.splice(i,1);
      return;
    }
  }
  result.push(id);
  $("#"+id).find(".order_border").css("background","black");
}

function deleteProduct(){
  $("#delete").val($("#delete").val().split(",").concat(result));
  for(var i=0;i<result.length;i++){
    $("#"+result[i]).css("display","none");
  }
  result=[];
}
function partOrderProduct(){
  if(result.length==0){
    alert("주문할 제품을 선택해주세요");
    return;
  }
  $("#order").val(result);
  //submit
}
function allOrderProduct(){
  var data=$(".product");
  var all=[];
  for(var i=0;i<data.length;i++){
    if(data[i].style.display!="none"){
      all.push(data[i].id);
    }
  }
  if(all.length==0){
    alert("제품을 장바구니에 넣어주세요");
    return;
  }
  $("#order").val(all);
  //submit
}
</script>
<div class="banner">

</div>
</div>
<div class="container" >
  <div class="row row-padding-xs-100 " style="margin-top:30px;">
    <div class="col-xs-12 gal  row_padding-xs" style="border-bottom:1px solid #D3D3D3; padding-bottom:5px; padding-left:0px;">
      <span style="font-size:25px; font-weight:500;">Cart</span>
    </div>
  </div>
  <div class="row row-padding-xs-100 " style="margin-top:30px;">
    <span class="title1">주문 리스트 확인</span>
  </div>
  <div class="row row-padding-xs-100 " style="margin-top:10px;">
<? for($i=0;$i<4;$i++ ){?>

    <div style="padding: 10px 5px 0px 5px;" class="product col-xs-12 col-sm-6 col-md-6 col-lg-6" id="<?echo $i?>">
      <div class="order_border">
      <div class="row">

        <div class="col-xs-3">
          <span class="order_title">제품코드</span>
        </div>
        <div class="col-xs-9">
          <span class="order_content"></span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
          <span class="order_title">제품정보</span>
        </div>
        <div class="col-xs-9">
          <span class="order_content">[아티스트]</span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
          <span class="order_title">판매가격</span>
        </div>
        <div class="col-xs-9">
          <span class="order_content">1</span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
          <span class="order_title">수량</span>
        </div>
        <div class="col-xs-9">
          <span class="order_content">1</span>
        </div>
      </div>
    </div>
  </div>
    <? }?>
    <!-- 주문목록 반복되는 부분 끝 -->

  </div>
  <div class="row row-padding-xs-100 " style="margin-top:10px;">
    <span class="order_result_2">총 주문금액</span>
  </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <button onclick="deleteProduct()">삭제</button>
      <button onclick="partOrderProduct()">선택결제</button>
      <button onclick="allOrderProduct()">전체결제</button>
    </div>

    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <form action="#">
      delete<input type="text" id="delete"><br>
      order<input type="text" id="order"><br>
    </form>
    </div>
</div>
