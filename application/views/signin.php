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
  display:inline-block;
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
  width:75px;
  display: inline-block;
}
.menu_button{
  margin-left: 10px;
}
.menu_input_phone_1{
  width:30px;
}
.menu_input_phone_2{
  width:50px;
}
input[type="radio"] + label{
  margin-left: 3px;
  font-size:12px;
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
      <span style="font-size:25px; font-weight:500;">Sign in</span>
    </div>
  </div>
    <div class="row row-padding-xs-100 " style="margin-top:30px;">
      <span>약관 동의</span>
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <span>개인 정보 수집 및 안내</span>
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <div style="background:#F5F6F7; width:100%; height:130px; overflow-y:auto;">
        Hello my name is Jinjin. Nice to meet you.<br>
        Hello my name is Jinjin. Nice to meet you.<br>
        Hello my name is Jinjin. Nice to meet you.<br>
        Hello my name is Jinjin. Nice to meet you.<br>
        Hello my name is Jinjin. Nice to meet you.<br>
        Hello my name is Jinjin. Nice to meet you.<br>
        Hello my name is Jinjin. Nice to meet you.<br>
        Hello my name is Jinjin. Nice to meet you.<br>
      </div>
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <div style="float:right">
      <input type="checkbox" id="info_checkbox">
      <label for="info_checkbox" style="margin-left:5px;">약관에 동의합니다</label>
    </div>
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <span>이용 약관</span>
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <div style="background:#F5F6F7; width:100%; height:130px; overflow-y:auto;">
        Hello my name is Jinjin. Nice to meet you.<br>
        Hello my name is Jinjin. Nice to meet you.<br>
        Hello my name is Jinjin. Nice to meet you.<br>
        Hello my name is Jinjin. Nice to meet you.<br>
        Hello my name is Jinjin. Nice to meet you.<br>
        Hello my name is Jinjin. Nice to meet you.<br>
        Hello my name is Jinjin. Nice to meet you.<br>
        Hello my name is Jinjin. Nice to meet you.<br>
      </div>
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <div style="float:right">
      <input type="checkbox" id="usage_checkbox">
      <label for="usage_checkbox" style="margin-left:5px;">약관에 동의합니다</label>
    </div>
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:30px;">
      <span>회원 정보</span>
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <div class="menu">아이디</div>
      <input class="menu_input" type="text">
      <a href="#"><div class="menu_button myButton" style="border-radius:5px;">중복확인</div><a>
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <div class="menu">비밀번호</div>
      <input class="menu_input" type="text">
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <div class="menu">비밀번호 확인</div>
      <input class="menu_input" type="text">
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <div class="menu">이름</div>
      <input class="menu_input" type="text">
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <div class="menu">휴대전화</div>
      <input class="menu_input_phone_1" type="text" value="010">-
      <input class="menu_input_phone_2" type="text">-
      <input class="menu_input_phone_2" type="text">
      <a href="#"><div class="menu_button myButton" style="border-radius:5px;">인증번호 발송</div><a>
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <div class="menu"></div>
      <input class="menu_input" type="text">
        <a href="#"><div class="menu_button myButton" style="border-radius:5px;">인증번호 확인</div><a>
    </div>
    <div class="row row-padding-xs-100 " style="margin-top:10px;">
      <div class="menu">회원구분</div>
      <div class="menu_input_radio">
        <input type="radio" id="type1" value="1"><label for="type1">일반 회원</label>
      </div>
      <div class="menu_input_radio">
        <input type="radio" id="type2" value="2"><label for="type2">아티스트 회원</label>
      </div>
    </div>
</div>
