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
  font-size: 15px;
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
$(function(){

});
</script>
<div class="banner">

</div>
</div>
<div class="container" >
  <div class="row row-padding-xs-100 " style="margin-top:30px;">
    <div class="col-xs-12 gal  row_padding-xs" style="border-bottom:1px solid #D3D3D3; padding-bottom:5px; padding-left:0px;">
      <span style="font-size:25px; font-weight:500;">Order</span>
    </div>
  </div>



  <div class="container" >
    <div class="row" style="margin-bottom:40px;">
      <div class="col-md-12" style="position:relative; height:25px; border-bottom: 1.5px solid #D3D3D3;">
        <div class="menu">
          <div class="menu_item">
            <a href="/store">주문배송조회</a>
          </div>
          <div class="menu_item" style="border-bottom:2px solid #96AFB5; color:#96AFB5;">
            <a href="/store/cloth">내 정보관리</a>
          </div>
          <div class="menu_item">
            <a href="/store/ecobag">포트폴리오 관리</a>
          </div>


        </div>
      </div>
    </div>



  <div class="row row-padding-xs-100 " style="margin-top:30px;">
    <span class="title1">주문리스트 확인</span>
  </div>
  <div class="row row-padding-xs-100 " style="margin-top:10px;">
   <!-- 주문 목록 반복되는 블럭 시작 -->
   <? for($i=0;$i<2;$i++){?>

    <div style="padding: 10px 5px 0px 5px;" class=" col-xs-12 col-sm-6 col-md-6 col-lg-6">
      <div class="order_border">
      <div class="row">

        <div class="col-xs-3">
          <span class="order_title">제품코드</span>
        </div>
        <div class="col-xs-9">
          <span class="order_content">0000000</span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
          <span class="order_title">제품정보</span>
        </div>
        <div class="col-xs-9">
          <span class="order_content">[이윤지 아티스트] 개와고양이를 그리는 사람들이다요다요</span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
          <span class="order_title">판매가격</span>
        </div>
        <div class="col-xs-9">
          <span class="order_content">20,000원</span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
          <span class="order_title">배송비</span>
        </div>
        <div class="col-xs-9">
          <span class="order_content">2,500원</span>
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
