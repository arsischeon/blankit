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
$(function(){

});
function sibal(){

}
function sisibal(){

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


   <!-- 주문 목록 반복되는 블럭 시작 -->
   <?php
   $addPRICE = 0;
   $checker = 0;

   //OrderRandomId 생성
   foreach ($generateOrderRandomId->result() as $one){
   	$seed = $one->seed;
   }

   $curDate = date('Y-m-d H:i:s');
   $curDateNum = strtotime($curDate);
   $seed_date = strtoupper(dechex($curDateNum + $seed));
   //여기까지, OrderRandomId 생성

   foreach ($address->result() as $row2){

   	if($checker == 0){ // 한 번만 주소를 저장해두기
   		$userName = $row2->user_name;
   		$userEmail = $row2->user_email;
   		$userPhone = $row2->user_phone;
   		$userHome = $row2->user_home;
   		$userHome2 = $row2->user_home2;
   		$userHome3 = $row2->user_home3;

   		$userPhone1 = str_split($userPhone,3);
   		$userPhone2 = str_split($userPhone1[1].$userPhone1[2].$userPhone1[3],4);
   	}
   }

   foreach ($cart->result() as $row){

   	$PRICE =  number_format($row->cart_price, 0, '.', ','); // 가격 포맷
   	$addPRICE += $row->cart_price * $row->cart_num;
   ?>

    <div style="padding: 10px 5px 0px 5px;" class=" col-xs-12 col-sm-6 col-md-6 col-lg-6" id="<?php echo $row->cart_id;?>">
      <div class="order_border">
      <div class="row">

        <div class="col-xs-3">
          <span class="order_title">제품코드</span>
        </div>
        <div class="col-xs-9">
          <span class="order_content"><?php echo $row->store_random_id;?></span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
          <span class="order_title">제품정보</span>
        </div>
        <div class="col-xs-9">
          <span class="order_content">[아티스트 <?php echo $row->artist;?>] <?php echo $row->store_name;?></span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
          <span class="order_title">판매가격</span>
        </div>
        <div class="col-xs-9">
          <span class="order_content"><?php echo $PRICE;?>원</span>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-3">
          <span class="order_title">수량</span>
        </div>
        <div class="col-xs-9">
          <span class="order_content"><?php echo $row->cart_num;?></span>
        </div>
      </div>
    </div>
  </div>
    <? }?>
    <!-- 주문목록 반복되는 부분 끝 -->

  </div>
  <div class="row row-padding-xs-100 " style="margin-top:10px;">
    <span class="order_result_2">총 주문금액 <?php
    										if ($addPRICE == 0) echo "0";
    										else echo number_format($addPRICE + 2500, 0, '.', ',');?>원</span>
    <span class="order_result_1">상품 총 금액 <?php echo number_format($addPRICE, 0, '.', ',');?>원 + 배송비 <?php
    										if ($addPRICE == 0) echo "0";
    										else echo number_format(2500, 0, '.', ',');?>원</span>
  </div>
