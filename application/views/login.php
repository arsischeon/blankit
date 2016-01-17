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
  background-color:transparent;
  border-radius:12px;
  border:2px solid #687c87;
  display:inline-block;
  cursor:pointer;
  color:#687c87 !important;
  font-family:"Noto Sans", "Noto Sans CJK KR", sans-serif;
  font-size:12px;
  font-weight:regular;
  padding:3px 12px;
}
.myButton:hover {
  background-color:#687c87;
  color: white !important;
}
.myButton:active {
  position:relative;
  top:1px;
}
.submit_button{
  display: block;
  text-align: center;
}
</style>
<script>
$(function(){
  var userInputId = getCookie("userInputId");
  $("input[name='id']").val(userInputId);

  if($("input[name='id']").val() != ""){ // 그 전에 ID를 저장해서 처음 페이지 로딩 시, 입력 칸에 저장된 ID가 표시된 상태라면,
    $("#idSaveCheck").attr("checked", true); // ID 저장하기를 체크 상태로 두기.
  }

  $("#idSaveCheck").change(function(){ // 체크박스에 변화가 있다면,
    if($("#idSaveCheck").is(":checked")){ // ID 저장하기 체크했을 때,
      var userInputId = $("input[name='id']").val();
      setCookie("userInputId", userInputId, 7); // 7일 동안 쿠키 보관
    }else{ // ID 저장하기 체크 해제 시,
      deleteCookie("userInputId");
    }
  });

  // ID 저장하기를 체크한 상태에서 ID를 입력하는 경우, 이럴 때도 쿠키 저장.
  $("input[name='id']").keyup(function(){ // ID 입력 칸에 ID를 입력할 때,
    if($("#idSaveCheck").is(":checked")){ // ID 저장하기를 체크한 상태라면,
      var userInputId = $("input[name='id']").val();
      setCookie("userInputId", userInputId, 7); // 7일 동안 쿠키 보관
    }
  });
});
</script>
<div class="banner">

</div>
</div>
<div class="container" >
  <div class="row row-padding-xs-100 " style="margin-top:30px;">
    <div class="col-xs-12 gal  row_padding-xs" style="border-bottom:1px solid #D3D3D3; padding-bottom:5px; padding-left:0px;">
      <span style="font-size:25px; font-weight:500;">Log in</span>
    </div>
  </div>
  <div class="row row-padding-xs-100 row_padding-xs" style="margin-top:50px;">
    <div class="col-xs-12 col-sm-6 padding-left-0 padding-xs-right-100 " style="">
      <div class="col-xs-12 grey padding-left-0">
        <span style="font-size:20px;">회원 로그인</span>
      </div>
      <div class="col-xs-10 padding-left-0">
        <div class="row" style="margin-top:20px; height: 25px;">
          <div class="col-xs-4 gal" style="padding-top:4px;">
            <span style="font-size:15px;">아이디</span>
          </div>
          <div class="col-xs-8 gal">
            <input type="text" style="width:100%;">
          </div>
        </div>
        <div class="row" style="margin-top:10px; height: 25px;">
          <div class="col-xs-4" style="padding-top:4px;">
            <span style="font-size:15px;">비밀번호</span>
          </div>
          <div class="col-xs-8">
            <input type="text" style="width:100%;">
          </div>
        </div>
        <div class="row" style="margin-top:10px; height: 25px;">
          <div class="col-xs-4" style="padding-top:4px;">
          </div>
          <div class="col-xs-8">
            <input type="checkbox" style="">
            <span style="margin-left:6px;">아이디 저장</span>
          </div>
        </div>
        <div class="row" style="margin-top:10px; height: 25px;">
          <div class="col-xs-4" style="padding-top:4px;">
          </div>
          <div class="col-xs-8">
              <div class="submit_button"><a href="#" class="myButton" style="width: 100%;">페이스북으로 로그인</a></div>
          </div>
        </div>
        <div class="row" style="margin-top:15px; height: 25px;">
          <div class="col-xs-4" style="padding-top:4px;">
          </div>
          <div class="col-xs-8">
            <div class="col-xs-4 padding-left-0 padding-right-5">
              <a href="" style=""><div style="border-radius:5px; width:100%; height:25px; line-height:25px; border: 1px solid #B7B7B7; font-size:11px; text-align:center;"><span style="vertical-align:middle;">회원가입</span></div></a>
            </div>
            <div class="col-xs-8 padding-left-0 padding-right-0">
                <a href="" style=""><div style="border-radius:5px; width:100%; height:25px; line-height:25px; border: 1px solid #B7B7B7; font-size:11px; text-align:center;"><span style="vertical-align:middle;">아이디/비밀번호 찾기</span></div></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-2" style="padding-left: 5px; margin-top:20px;">
        <div style="width:60px; height:60px; border-radius:10px; background:#687C87; display:table; ">
          <div style="vertical-align:middle; text-align:center; display:table-cell;">
          <span style="font-size:12px; color:white;">회원<br>로그인</span>
          </div>
        </div>
      </div>


    </div>
    <div class="col-xs-12 col-sm-6 padding-left-0 margin-xs-top-20">
      <div class="col-xs-12 grey padding-left-0">
        <span style="font-size:20px;">비회원 로그인</span>
      </div>
      <div class="col-xs-10 padding-left-0">
        <div class="row" style="margin-top:20px; height: 25px;">
          <div class="col-xs-5 col-sm-4 gal" style="padding-top:4px;">
            <span style="font-size:15px;">주문 고객 성명</span>
          </div>
          <div class="col-xs-7 col-sm-8 gal">
            <input type="text" style="width:100%;">
          </div>
        </div>
        <div class="row" style="margin-top:10px; height: 25px;">
          <div class="col-xs-4" style="padding-top:4px;">
            <span style="font-size:15px;">주문번호</span>
          </div>
          <div class="col-xs-8">
            <input type="text" style="width:100%;">
          </div>
        </div>
      </div>
      <div class="col-xs-2" style=" padding-left: 5px; margin-top:20px;">
        <div style="width:60px; height:60px; border-radius:10px; background:#687C87;display:table; ">
          <div style="vertical-align:middle; text-align:center; display:table-cell;">
          <span style="font-size:12px; color:white;">비회원<br>로그인</span>
          </div>
      </div>
    </div>
  </div>
</div>
</div>
