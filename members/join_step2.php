<?php 
    include "../inc/session.php";
    $uname = $_POST["uname"];
    $birth = $_POST["birth"];
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>회원가입 | 크리스피크림도넛</title>
    <link rel="stylesheet" type="text/css" href="../style/common.css">
    <link rel="stylesheet" type="text/css" href="../style/join_step2.css">
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
            var uname=document.getElementById("uname");
            var uid=document.getElementById("uid");
            var pwd=document.getElementById("pwd");
            var repwd=document.getElementById("repwd");
            var mobile=document.getElementById("mobile");
            var email_id=document.getElementById("email_id");
            var email_dns=document.getElementById("email_dns");
            
            if(uname.value==""){
                alert("이름을 입력하세요");
                uname.focus();
                return false;
            };
            
            if(uid.value==""){
                alert("아이디를 입력하세요");
                uid.focus();
                return false;
            };
            
            if(pwd.value==""){
                alert("비밀번호를 입력하세요");
                pwd.focue();
                return false;
            };
            
            var pwd_check=/^[a-zA-z0-9]{10,}$/g;
            if(!pwd_check.test(pwd.value)){
                alert("비밀번호를 확인하세요");
                pwd.focus();
                return false;
            };
            
            if(pwd.value != repwd.value){
                alert("비밀번호가 일치하지 않습니다");
                repwd.focus();
                return false;
            };
            
            if(mobile.value==""){
                alert("휴대폰번호를 입력하세요");
                mobile.focus();
                return false;
            };
            
            var mobile_check=/^[0-9]+$/g;
            if(!mobile_check.test(mobile.value)){
                alert("휴대폰번호를 숫자만 입력하세요");
                mobile.focus();
                return false;
            };
            
            if(email_id.value==""){
                alert("이메일을 입력하세요");
                email_id.focus();
                return false;
            };
            if(email_dns.value==""){
                alert("이메일을 입력하세요");
                email_dns.focus();
                return false;
            };
            
            document.join_info.submit();
        };
        
        function uid_check(){
            var uid=document.getElementById("uid");
            window.open("search_id.php","a","width=500,height=200,left=0,top=0");
        };
        
        function change_email(){
            var email_dns = document.getElementById("email_dns");
            var email_sel = document.getElementById("email_sel");
            var idx = email_sel.options.selectedIndex;
            var selected_value = email_sel.options[idx].value;;
            email_dns.value = selected_value;
        }
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
                    <form name="join_info" action="join_ok.php" method="post">
                        <fieldset class="form_top">
                            <legend class="t">개인정보입력</legend>
                            <p>
                                <label for="uname"><span class="text">이름 <span class="redtxt">*</span></span></label>
                                <input type="text" autofocus class="input_text" name="uname" id="uname" value="<?php echo $uname; ?>">
                            </p>
                            <p>
                                <label for="uid"><span class="text">아이디 <span class="redtxt">*</span></span></label>
                                <input type="text" class="input_text_btn" name="uid" id="uid" onclick="uid_check()">
                                <a href="#" class="form_btn" onclick="uid_check()">중복확인</a>
                                <span class="hint"></span>
                            </p>
                            <p>
                                <label for="pwd"><span class="text">비밀번호 <span class="redtxt">*</span></span></label>
                                <input type="password" class="input_text" name="pwd" id="pwd">
                                <span class="hint">영문/숫자 조합으로 10자 이상 입력하세요.</span>
                            </p>
                            <p>
                                <label for="repwd"><span class="text">비밀번호 확인 <span class="redtxt">*</span></span></label>
                                <input type="password" class="input_text" name="repwd" id="repwd">
                                <span class="hint">비밀번호를 한번 더 입력하세요.</span>
                            </p>
<!--
                            <div class="addr">
                                <label for="postalcode"><span class="text">주소</span></label>
                                <input type="text" class="postalcode" name="postalcode" id="postalcode" placeholder="우편번호">
                                <a href="#" class="form_btn">주소검색</a>
                                <p>&nbsp;<input type="text" class="addr_input_text" name="addr1" id="addr1" placeholder="기본주소"></p>
                                <p>&nbsp;<input type="text" class="addr_input_text" name="addr2" id="addr2" placeholder="상세주소 입력"></p>
                            </div>
-->
                            <p>
                                <label for="mobile"><span class="text">휴대폰 <span class="redtxt">*</span></span></label>
                                <input type="tel" class="input_text" name="mobile" id="mobile">
                                <span class="hint">'-'를 제외한 숫자만 입력하세요. ex)01012341234</span>
                            </p>
                            <p>
                                <label for="email_id"><span class="text">이메일 <span class="redtxt">*</span></span></label>
                                <input type="text" class="input_text_email" name="email_id" id="email_id"> @
                                <input type="text" class="input_text_email" name="email_dns" id="email_dns">
                                <select name="email_sel" id="email_sel" class="select_email" onchange="change_email()">
                                    <option value="">직접입력</option>
                                    <option value="naver.com">네이버</option>
                                    <option value="daum.net">다음</option>
                                    <option value="gmail.com">지메일</option>
                                </select>
                            </p>
                        </fieldset>
                        <fideldset class="form_bottom">
                            <legend class="b">선택정보입력</legend>
                            <p>
                                <label for="birth">생년월일 입력<span class="red_txt">(1회 입력 후 재 입력이 불가합니다.)</span></label>
                                <span class="right_hint">ex)19900101</span>
                                <input type="text" class="input_text" name="birth" id="birth" value="<?php echo $birth;?>">
                            </p>
                            <p>
                                <label>어떤 경로로 크리스피 크림을 알게 되셨나요?
                                <select name="visit_route" id="visit_route">
                                    <option value="">선택해주세요.</option>
                                    <option value="친구를 통해서">친구를 통해서</option>
                                    <option value="크리스피 크림의 이메일로">크리스피 크림의 이메일로</option>
                                    <option value="웹서핑으로">웹서핑으로</option>
                                    <option value="기타">기타</option>
                                </select></label>
                            </p>
                            <p>
                                <label>가장 좋아하는 도넛은 무엇입니까?
                                <select name="fav_dougnut" id="fav_dougnut">
                                    <option value="">선택해주세요.</option>
                                    <option value="쿠키 밀크케잌 미니콘">쿠키 밀크케잌 미니콘</option>
                                    <option value="초코 밀크케잌 미니콘">초코 밀크케잌 미니콘</option>
                                    <option value="스트로베리 밀크 미니콘">스트로베리 밀크 미니콘</option>
                                    <option value="카라멜 밀크 미니콘">카라멜 밀크 미니콘</option>
                                    <option value="오리지널 스트로베리 미니콘">오리지널 스트로베리 미니콘</option>
                                    <option value="오리지널 글레이즈드">오리지널 글레이즈드</option>
                                </select></label>
                            </p>
                            <p>
                                <label>얼마나 자주 크리스피크림 매장에 방문하십니까?
                                <select name="visit_frequency" id="visit_frequency">
                                    <option value="">선택해주세요.</option>
                                    <option value="1주에 한번 이상">1주에 한번 이상</option>
                                    <option value="1주에 한번">1주에 한번</option>
                                    <option value="한달에 1~2번">한달에 1~2번</option>
                                    <option value="한달에 1번 이하">한달에 1번 이하</option>
                                </select></label>
                            </p>
                            <p>
                                크리스피크림에서 제공하는 모든 뉴스레터(무료소식지)를 수신하시겠습니까?
                                <label><input type="radio" checked name="newsletter_apply" value="y">예</label>
                                <label><input type="radio" name="newsletter_apply" value="n">아니오</label>
                            </p>
                            <p>
                                SMS수신에 동의하시면 크리스피크림에서 제공하는 각종 서비스안내 이벤트 등의 다양한 정보와 혜택을 받아보실 수 있습니다. 동의하시겠습니까?
                                <label><input type="radio" checked name="sms_apply" value="y">예</label>
                                <label><input type="radio" name="sms_apply" value="n">아니오</label>
                            </p>
                        </fideldset>
                        <div class="btn">
                            <button type="button" class="submit_btn" onclick="form_check()">확인</button>
                            <button type="button" class="cancel_btn" onclick="javascript:history.go(-3)">취소</button>
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