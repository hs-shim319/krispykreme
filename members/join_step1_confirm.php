<?php 
    include "../inc/session.php";
    $uname=$_POST["uname"];
    $birth=$_POST["birth"];
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>회원가입 | 크리스피크림도넛</title>
    <link rel="stylesheet" type="text/css" href="../style/common.css">
    <link rel="stylesheet" type="text/css" href="../style/join_step1_2.css">
    <?php
        if($s_id){ 
        echo "
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />  
            <script type=\"text/javascript\">
                alert(\"이미 로그인되어있습니다.\");
                location.href=\"../index.php\";
            </script>
        ";}
    ?>
    <script type="text/javascript" src="../js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../js/common.js"></script>
    <script type="text/javascript">
        function form_check(){
            var agree=document.getElementById("agree_radio_y");
            var online=document.getElementById("online_radio_y");
            
            if(!agree.checked){
                alert("개인정보 수집 동의서에 동의하세요.");
                agree.focus();
                return false;
            };
            if(!online.checked){
                alert("온라인 회원가입 약관에 동의하세요.");
                online.focus();
                return false;
            };
            document.join_info.submit();
        };
    </script>
</head>
<body>
    <div class="h_skip">
        <a href="#content">본문으로 바로가기</a>
        <a href="../login/login.php">로그인 바로가기</a>
        <a href="../sitemap.php">사이트맵 바로가기</a>
    </div>
    <header id="header" class="header">
        <div class="header_bottom_wrap">
            <div class="header_bottom">
                <h1><a href="../index.php">크리스피크림도넛</a></h1>
            <nav class="gnb">
                <h2 class="hide_text">메인메뉴</h2>
                <ul class="gnb_list">
                        <li class="gnb_menu">
                            <a href="../newmenu_list.php">MENU</a>
                            <ul>
                                <li><a href="../newmenu_list.php">신메뉴/인기메뉴</a></li>
                                <li><a href="../dom.php">이 달의 메뉴</a></li>
                                <li><a href="../dougnuts_list.php">도넛</a></li>
                                <li><a href="../coffee_list.php">커피/음료</a></li>
                                <li><a href="../icecream_list.php">아이스크림/프로즌</a></li>
                                <li><a href="../branding_product.php">브랜딩 제품 소개</a></li>
                            </ul>
                        </li>
                        <li class="gnb_store">
                            <a href="../homeservice.php">STORE</a>
                            <ul>
                                <li><a href="../homeservice.php">홈 서비스</a></li>
                                <li><a href="../find_store.php">매장찾기</a></li>
                                <li><a href="../store_merchants.php">가맹점모집</a></li>
                            </ul>
                        </li>
                        <li class="gnb_event">
                            <a href="../event_list.php">EVENT</a>
                            <ul>
                                <li><a href="../event_list.php">이벤트</a></li>
                                <li><a href="../partner_service.php">제휴 서비스</a></li>
                            </ul>
                        </li>
                        <li class="gnb_brand">
                            <a href="../dougnuts_theater.php">BRAND</a>
                            <ul>
                                <li><a href="../dougnuts_theater.php">도넛극장</a></li>
                                <li><a href="../brand_story.php">브랜드 스토리</a></li>
                                <li><a href="../voucher.php">상품권 구입 안내</a></li>
                            </ul>
                        </li>
                        <li class="gnb_customer">
                            <a href="../notice_list.php">CUSTOMER</a>
                            <ul>
                                <li><a href="../notice_list.php">공지사항</a></li>
                                <li><a href="../faq.php">고객의 소리</a></li>
                                <li><a href="https://www.mykkdd.com/kor?AspxAutoDetectCookieSupport=1" target="_blank">설문조사</a></li>
                            </ul>
                        </li>
                    </ul>
            </nav><!--gnb-->
            </div><!--header_bottom-->
        </div><!--header_bottom_wrap-->
        <div class="gnb_bg"></div>
        <div class="top_menu_wrap">
            <section class="top_menu">
                <h2 class="hide_text">사용자메뉴</h2>
                    <ul class="top_menu_list">
                        <li class="tm_grade"><a href="#none">등급안내</a></li>
                        <?php
                        if(!$s_id){
                            echo "<li class=\"tm_login\"><a href=\"../login/login.php\">로그인</a></li>";
                            echo "<li class=\"tm_join\"><a href=\"join_step1.php\">회원가입</a></li>";
                        }else{
                            if($s_id=='admin'){
                                echo "<li class=\"tm_login\"><a href=\"#none\" onclick=\"logout_check()\">로그아웃</a></li>";
                                echo "<li class=\"tm_join\"><a href=\"../admin/admin.php\">관리자페이지</a></li>";
                            }else{
                                echo "<li class=\"tm_login\"><a href=\"#none\" onclick=\"logout_check()\">로그아웃</a></li>";
                                echo "<li class=\"tm_join\"><a href=\"mypage_coupon.php\">마이페이지</a></li>";
                            } 
                        }
                        ?>
                        <li class="tm_sitemap"><a href="../sitemap.php">사이트맵</a></li>
                        <li><a href="#">ENGLISH</a></li>
                    </ul>
                <div class="tm_grade_content">
                    <h3>L.POINT 회원 등급 안내</h3>
                        <p>우수회원 산정 기준 : 연 4회 이상 L.POINT 적립</p>
                        <p>L.POINT 취소, 환불 및 사용한 건은 반영되지 않습니다.</p>
                        <p>회원 등급은 1년간 유지됩니다.</p>
                        <p>등급 산정은 매년 3월 일부터 적용됩니다.<span class="spanblock">ex) 15년 실적 기준 <span class="bold">&rarr;</span> 16년 3월 1일 ~ 17년 2월 28일 등급 적용</span></p>
                        <p class="tm_table_title">등급별 혜택</p>
                        <table cellspacing=0 class="lpoint_table">
                            <tr class="tr_1">
                                <th>구분</th>
                                <th>혜택</th>
                            </tr>
                            <tr>
                                <th>우수회원</th>
                                <td>결제금액의 0.5% 적립</td>
                            </tr>
                            <tr>
                                <th>일반회원</th>
                                <td>결제금액의 0.3% 적립</td>
                            </tr>
                        </table>
                        <p>L.POINT 회원 등급은 롯데리아 홈페이지에서 로그인 후 확인이 가능합니다. <a href="www.lotteria.com" class="lotte_link">(www.lotteria.com)</a></p>
                        <a href="#none" class="exit">닫기</a>
                </div><!--tm_grade_content-->
            </section><!--top_menu-->
        </div><!--top_menu_wrap-->
    </header>
    
    <div id="content">
        <div class="content_wrap">
            <main class="join_content">
                <div class="join_title">
                    <h2>회원가입</h2>
                    <p>크리스피 크림에 가입하시면 다양한 서비스를 제공받으실 수 있습니다.</p>
                    <div class="join_step">
                        <dl class="step1">
                            <dt>STEP 1</dt> 
                            <dd>약관동의</dd>
                            <dd>회원인증</dd>
                        </dl>
                        <span class="step1_step2"></span>
                        <dl class="step2">
                            <dt>STEP 2</dt>
                            <dd>개인정보입력</dd>
                        </dl>
                        <span class="step2_step3"></span>
                        <dl class="step3">
                            <dt>STEP 3</dt>
                            <dd>가입완료</dd>
                        </dl>
                    </div><!--join_step-->
                </div><!--join_title-->
                <div class="join_info">
                    <form name="join_info" action="join_step2.php" method="post">
                    <h3>개인정보인증</h3>
                    <table cellspacing=0>
                        <tr class="line1">
                            <th>이름</th>
                            <td><input type="text" class="input_text" name="uname" id="uname" value="<?php echo $uname?>" readonly></td>
                        </tr>
                        <tr class="line2">
                            <th>생년월일</th>
                            <td><input type="text" class="input_text" name="birth" id="birth" value="<?php echo $birth?>" readonly></td>
                        </tr>
                    </table>
                    <h3>개인정보 보호를 위한 동의서 <span class="redtxt">*</span></h3>
                    <textarea class="agree_textarea" readonly>1. 개인정보의 수집 및 이용 목적
1) 본인 확인
2) 안내 고지, 불만처리 등 원활한 의사소통 경로확보

2. 수집하는 개인정보의 항목
1) 필수정보 : 성명, 전화번호, 핸드폰번호, 주소, 이메일주소, 비밀번호, 비밀번호 힌트
2) 선택정보 : 생년월일, 가입경로, 선호도넛, 자주 방문하는 매장, 매장 방문주기

3. 개인정보의 보유 및 이용기간
“롯데지알에스㈜ KKD부분”은 원칙적으로 개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체 없이 파기합니다.
단, 관계법령의 규정에 의하여 보존할 필요가 있는 경우 회사는 관계법령이 정한 일정한 기간 동안 회원정보를 보관합니다.
- 계약 또는 청약철회 등에 관한 기록 : 5년
- 대금결제 및 재화 등의 공급에 관한 기록 : 5년
- 소비자의 불만 또는 분쟁처리에 관한 기록 : 3년
- 보유기간을 이용자에게 미리 고지하거나 개별적으로 이용자의 동의를 받은 경우: 고지하거나 개별 동의한 기간
※ 보다 자세한 내용은 “개인정보취급방침”을 확인하여 주시기 바랍니다.

4. 수집한 개인정보의 위탁
서비스 향상 및 효율적인 개인정보 관리를 위하여 외부에 위탁하여 처리하고 있으며, 관계법령에 따라 위탁 계약 시 개인정보가 안전하게 관리될 수 있도록 규정하고 있습니다.
개인정보취급 수탁자와 그 업무의 내용은 다음과 같습니다.

[수탁자 : 수탁범위]
- 롯데정보통신㈜ : 전산시스템의 구축 및 유지보수/SMS

5. 귀하는 위와 같은 개인정보 수집이용에 동의하지 않을 수 있습니다.
단, 필수정보 동의 거부시에는 해당 서비스 참여가 제한됩니다.
</textarea>
                    <div class="radio">
                        <input type="radio" name="agree_radio" id="agree_radio_y"><label for="agree_radio_y">동의함</label> 
                        <input type="radio" name="agree_radio" id="agree_radio_n"><label for="agree_radio_n">동의안함</label>
                    </div>

                        <h3>온라인 회원가입 약관 <span class="redtxt">*</span></h3>
                    <textarea class="online_textarea" readonly>제 1 장 총칙
제 1 조 목적
이 약관은 롯데지알에스㈜ KKD사업본부(이하 "Krispy Kreme"이라 합니다)가 제공하는 서비스(이하 "서비스"라 한다)의 이용 조건 및 절차에 관한 기본적인 사항에 관한 정의를 목적으로 합니다.
제 2 조 (약관의 효력 및 변경)
① 이 약관은 서비스를 통하여 이를 공지하거나 전자우편, 기타의 방법으로 회원에게 통지함으로써 효력을 발생합니다.
② Krispy Kreme은 이 약관의 내용을 변경할 수 있으며, 변경된 약관은 제1항과 같은 방법으로 공지 또는 통지함으로써 효력을 발생합니다.
제 3 조 (약관 이외의 준칙)
이 약관은 롯데지알에스㈜ KKD사업본부(이하 "Krispy Kreme"이라 합니다)가 제공하는 서비스(이하 "서비스"라 한다)의 이용 조건 및 절차에 관한 기본적인 사항에 관한 정의를 목적으로 합니다.

제 4 조 (용어의 정의)
이 약관에서 사용하는 용어의 정의는 다음과 같습니다.

① 회원 : 서비스를 제공 받기 위하여 Krispy Kreme과 이용계약을 체결하거나 로그인 기능을 부여 받은 자를 말합니다.
② 비밀번호 : 회원이 로그인 시 사용하는 이메일과 일치된 회원임을 확인하고 회원 자신의 비밀을 보호하기 위하여 회원이 정한 문자와 숫자의 조합을 말합니다.
③ 해지 : Krispy Kreme 또는 회원이 서비스를 개통 후 이용계약을 해약 하는 것을 말합니다.
제 2 장 서비스 이용계약
제 5 조 (이용계약의 성립)
① "개인정보 보호를 위한 동의서, 온라인 회원가입 약관에 각각 동의함을 선택하고 "확인" 버튼을 클릭하면 이 약관에 동의하는 것으로 간주됩니다.
② 이용계약은 서비스 이용희망자의 이용약관 동의 후 신청에 대하여 Krispy Kreme이 승낙함으로써 성립합니다.
제 6 조 (이용신청)
① 본 서비스를 이용하기 위해서는 Krispy Kreme 소정의 가입신청 양식에서 요구하는 모든 이용자 정보를 기록하여 신청합니다.
② 가입신청 양식에 기재하는 모든 이용자 정보는 모두 실제 데이터인 것으로 간주됩니다. 설명이나 실제 정보를 입력하지 않은 사용자는 법적인 보호를 받을 수 없으며 서비스의 제한을 받을 수 있습니다.
제 7 조 (이용신청의 승낙)
① Krispy Kreme은 제6조에 다른 이용 신청 고객에 대하여 제2항, 제3항의 경우를 예외로 하여 서비스 이용신청을 승낙합니다.
② Krispy Kreme은 다음에 해당하는 경우에 그 신청에 대한 승낙 제한사유가 해소될 때까지 승낙을 유보할 수 있습니다.
가. 서비스 관련 설비에 여유가 없는 경우
나. 기술상 지장이 있는 경우
다. 기타 Krispy Kreme이 필요하다고 인정되는 경우
③ Krispy Kreme은 다음에 해당하는 경우에는 이를 승낙하지 아니 할 수 있습니다.
가. 다른 사람의 명의를 사용하여 신청한 경우
나. 이용신청 시 이용자정보를 허위로 기재하여 신청한 경우
다. 사회의 안녕질서 또는 미풍양속을 저해할 목적으로 신청한 경우
라. 기타 Krispy Kreme 소정의 이용신청요건을 충족하지 못하는 경우
제 8 조 (이용자정보의 변경)
회원은 이용신청 시 기재한 이용자정보가 변경되었을 경우에는, 온라인으로 수정을 하여야 하며 미변경으로 인하여 발생되는 문제의 책임은 이용자에게 있습니다.

제 3 장 계약 당사자의 의무
제 9 조 (Krispy Kreme의 의무)
① Krispy Kreme은 서비스 제공과 관련하여 취득한 회원의 개인정보를 본인의 사전 승낙 없이 타인에게 공개 또는 배포할 수 없습니다. 단, 다음 각 호의 1에 해당하는 경우는 예외입니다.
가. 정보통신망법 등 법률의 규정에 의해 국가기관의 요구가 있는 경우
나. 범죄에 대한 수사상의 목적이 있거나 정보통신윤리 위원회의 요청이 있는 경우
다. 기타 관계법령에서 정한 절차에 따른 요청이 있는 경우
② 1항의 범위 내에서, Krispy Kreme은 업무와 관련하여 회원 전체 또는 일부의 개인 정보에 관한 통계 자료를 작성하여 이를 사용할 수 있고, 서비스를 통하여 회원의 컴퓨터 쿠키를 전송할 수 있습니다. 이 경우 회원은 쿠키의 수신을 거부하거나 쿠키의 수신에 대하여 경고하도록 사용하는 컴퓨터의 브라우저의 설정을 변경할 수 있습니다.
제 10 조 (회원의 의무)
① 회원은 서비스 이용 시 다음 각 호의 행위를 하지 않아야 합니다.
가. 다른 회원의 정보를 부정하게 사용하는 행위
나. 서비스에서 얻은 정보를 Krispy Kreme의 사전승낙 없이 회원의 이용 이외의 목적으로 복제하거나 이를 변경, 출판 및 방송 등에 사용하거나 타인에게 제공하는 행위
다. Krispy Kreme의 저작권, 타인의 저작권 등 기타 귄리를 침해하는 행위
라. 공공질서 및 미풍양속에 위반되는 내용의 정보, 문장, 도형 등을 타인에게 유포하는 행위
마. 범죄와 결부된다고 객관적으로 판단하는 행위
바. 기타 관계법령에 위배되는 행위
② 회원은 관계법령, 이 약관에서 규정하는 사항, 서비스 이용 안내 및 주의 사항을 준수 하여야 합니다.
③ 회원은 내용별로 Krispy Kreme이 서비스 공지사항에 게시하거나 별도로 공지한 이용 제한 사항을 준수하여야 합니다.
④ 회원은 Krispy Kreme의 사전 승낙 없이 서비스를 이용하여 어떠한 영리행위도 할 수 없습니다.
제 4 장 서비스 제공 및 이용
제 11 조 (회원 정보와 비밀번호 관리에 대한 회원의 의무)
회원정보에 대한 모든 관리는 회원에게 책임이 있습니다. 회원에게 부여된 비밀번호의 관리소홀, 부정사용에 의하여 발생하는 모든 결과에 대한 전적인 책임은 회원에게 있습니다. 자신의 정보가 부정하게 사용된 경우 또는 기타 보안 위반에 대하여, 회원은 반드시 Krispy Kreme에 그 사실을 통보해야 합니다.

제 12 조 (정보의 제공)
Krispy Kreme은 회원의 서비스 이용 중 필요가 있다고 인정되는 다양한 정보에 대해서 전자메일이나 서신우편, SMS 문자메세지 등의 방법으로 회원에게 제공할 수 있으며, 회원은 서비스를 원하지 않을 경우 서면, 이메일, 전화, 개인정보수정 페이지를 통해 정보수신거부를 할 수 있습니다.

제 13 조 (서비스 이용시간)
① 서비스는 Krispy Kreme의 업무상 또는 기술상의 장애, 기타 특별한 사유가 없는 한 연중무휴, 1일 24시간 이용할 수 있습니다. 다만 설비의 점검 등 Krispy Kreme이 필요한 경우 또는 설비의 장애, 서비스 이용의 폭주 등 불가항력으로 인하여 서비스 이용에 지장이 있는 경우 예외적으로 서비스 이용의 전부 또는 일부에 대하여 제한할 수 있습니다.
② Krispy Kreme은 제공하는 서비스 중 일부에 대한 서비스이용시간을 별도로 정할 수 있으며, 이 경우 그 이용시간을 사전에 회원에게 공지 또는 통지 합니다.
제 14 조 (서비스 이용 책임)
회원은 서비스를 이용하여 불법 상품을 판매하는 영업 활동을 할 수 없으며 특히 해킹, 돈벌기 광고, 음란사이트를 통한 상업행위, 상용 S/W 불법배포 등을 할 수 없습니다. 이를 어기고 발생한 영업활동의 결과 및 손실, 관계기관에 의한 구속 등 법적 조치 등에 관해서는 Krispy Kreme이 책임을 지지 않습니다.

제 5 장 기타
제 15 조 (계약해지 및 이용제한)
① 회원이 이용계약을 해지하고자 하는 때에는 회원 본인이 Krispy Kreme에 해지신청을 하여야 합니다.
② Krispy Kreme은 회원이 다음 각 호의 1에 해당하는 행위를 하였을 경우 사전통지 없이 이용계약을 해지하거나 또는 기간을 정하여 서비스 이용을 중지할 수 있습니다.
가. 타인의 정보나 및 비밀번호를 도용한 경우
나. 서비스 운영을 고의로 방해한 경우
다. 공공질서 및 미풍양속에 저해되는 내용을 고의로 유포시킨 경우
라. 회원이 국익 또는 사회적 공익을 저해할 목적으로 서비스이용을 계획 또는 실행하는 경우
마. 타인의 명예를 손상시키거나 불이익을 주는 행위를 한 경우
바. 서비스의 안정적 운영을 방해할 목적으로 다량의 정보를 전송하거나 광고성 정보를 전송한 경우
사. 정보통신설비의 오작동이나 정보 등의 파괴를 유발시키는 컴퓨터 바이러스프로그램 등을 유포하는 경우
아. Krispy Kreme, 다른 회원 또는 타인의 지적재산권을 침해하는 경우
자. 정보통신윤리위원회 등 외부기관의 시정요구가 있거나 불법선거 운동과 관련하여 선거관리위원회의 유권해석을 받은 경우
차. 타인의 개인정보, 이용자ID 및 비밀번호를 부정하게 사용하는 경우
카. Krispy Kreme의 서비스 정보를 이용하여 얻은 정보를 Krispy Kreme의 사전 승낙없이 복제 또는 유통시키거나 상업적으로 이용하는 경우
타. 본 약관을 포함하여 기타 Krispy Kreme이 정한 이용조건 및 관계법령에 위반한 경우
제16 조 (면책조항)
① Krispy Kreme은 천재지변 도는 이에 준하는 불가항력으로 인하여 서비스를 제공할 수 없는 경우에는 서비스 제공에 관한 책임이 면제됩니다.
② Krispy Kreme은 회원의 귀책사유로 인하여 서비스 이용의 장애가 발생한 경우에는 책임이 면제됩니다.
③ Krispy Kreme은 회원이 Krispy Kreme의 서비스 제공으로부터 기대되는 이익을 얻지 못하였거나 서비스 자료에 대한 취사 선택 또는 이용으로 발생하는 손해 등에 대해서는 책임이 면제됩니다.
④ Krispy Kreme은 회원이 서비스에 게재한 정보, 자료, 사실의 신뢰도, 정확성 등 그 내용에 관하여는 책임이 면제됩니다.
제 17 조 (관할법원)
본 약관 상의 분쟁에 대해 소송이 제기될 경우 Krispy Kreme의 본사 소재지를 관할하는 법원을 전속 관할법원으로 합니다.

[부칙]
(시행일) 이 약관은 2018년 9월 18일부터 시행합니다.</textarea>
                    <div class="radio">
                        <input type="radio" name="online_radio" id="online_radio_y"><label for="online_radio_y">동의함 </label>
                        <input type="radio" name="online_radio" id="online_radio_n"><label for="online_radio_n">동의안함</label>
                    </div>
                    <div class="btn">
                        <button type="button" class="submit_btn" onclick="form_check()">확인</button>
                        <button type="button" class="cancel_btn" onclick="javascript:history.go(-2);">취소</button>
                    </div>
                    </form>
                </div>
                
            </main>
        </div>
    </div>
       
    <div class="footer_wrap">
            <footer id="footer">
                <h2 class="hide_text">크리스피크림</h2>
                <div class="footer_top">
                    <h3 class="hide_text">약관</h3>
                        <ul>
                            <li class="footer_term"><a href="#">회사소개</a></li>
                            <li class="footer_term"><a href="#">채용정보</a></li>
                            <li class="footer_term"><a href="#">이용약관</a></li>
                            <li class="footer_term"><a href="#"><span>개인정보처리방침</span></a></li>
                            <li class="footer_term"><a href="#">영상정보 처리기기 운영 및 관리 방침</a></li>
                            <li class="footer_term"><a href="#">이메일무단수집거부</a></li>
                            <li class="footer_term_last"><a href="#">CONTACT US</a></li>
                        </ul>
                </div>
                <div class="family_site">    
                    <h3><a href="#none">family site</a></h3>
                    <ul>
                        <li><a href="#none">롯데그룹</a></li>
                        <li><a href="#none">LOTTE GRS</a></li>
                        <li><a href="#none">롯데리아</a></li>
                        <li><a href="#none">엔제리너스 커피</a></li>
                        <li><a href="#none">L.POINT</a></li>
                        <li><a href="#none">롯데채용센터</a></li>
                        <li><a href="#none">롯데제과</a></li>
                        <li><a href="#none">롯데칠성음료</a></li>
                        <li><a href="#none">롯데푸드</a></li>
                    </ul>
                    <a href="#none" class="btn_go">GO</a>
                </div><!--family_site-->
                
                <div class="footer_txt">
                    <div class="line1">
                        <address class="after">서울특별시 용산구 한강대로71길 47</address>
                        <p>대표문의 : 02-709-1114 (가맹문의, 행사안내 등)</p>
                    </div>
                    <div class="line2">
                        <p class="after">고객지원센터 080-023-9776 (고객불만사항 등)</p>
                        <p class="after">사업자번호 : 106-81-23498</p>
                        <p>대표자 : 남익우</p>
                    </div>
                    <p class="copyright">COPYRIGHT 2013 KRISPY KREME COUGNUTS.ALL RIGHTS RESERVED</p>
                </div>
            </footer>
        </div><!--footer_wrap-->
</body>
</html>