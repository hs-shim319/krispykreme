<?php 
    include "inc/session.php"; 
    include "inc/dbcon.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1200">
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>1:1 고객문의 | 고객의 소리 | 크리스피크림도넛</title>
    <link rel="stylesheet" type="text/css" href="style/common.css">
    <link rel="stylesheet" type="text/css" href="style/customer_question.css">
    <?php
    if(!$s_idx){
        echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />  
            <script type=\"text/javascript\">
                alert('로그인 후 이용할 수 있습니다.');
                location.href=\"login/login.php\";
            </script>
        ";
        return false;
    }
    ?>
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript" src="js/logout.js"></script>
    <script type="text/javascript">
        function form_check(){
            var uname=document.getElementById("uname");
            var mobile=document.getElementById("mobile");
            var email=document.getElementById("email");
            var title=document.getElementById("title");
            var content=document.getElementById("content");
            var apply=document.getElementById("apply_y");
            if(uname.value==''){
                alert("이름을 입력하세요.");
                uname.focus();
                return false;
             };
            if(mobile.value==''){
                alert("전화번호를 입력하세요.");
                mobile.focus();
                return false;
             };
            if(email.value==''){
                alert("이메일을 입력하세요.");
                email.focus();
                return false;
             };
            if(title.value==''){
                alert("제목을 입력하세요.");
                title.focus();
                return false;
             };
            if(content.value==''){
                alert("내용을 입력하세요.");
                content.focus();
                return false;
             };
            if(!apply.checked){
                alert("개인정보 수집에 동의하세요.");
                apply.focus();
                return false;
             };
            document.qna_form.submit();
        };
    </script>
</head>
<body>
    <div class="h_skip">
        <a href="#content">본문으로 바로가기</a>
        <a href="login/login.php">로그인 바로가기</a>
        <a href="sitemap.php">사이트맵 바로가기</a>
    </div>
    
    <header id="header" class="header">
        <div class="header_bottom_wrap">
            <div class="header_bottom">
                <h1><a href="index.php">크리스피크림도넛</a></h1>
            <nav class="gnb">
                <h2 class="hide_text">메인메뉴</h2>
                <ul class="gnb_list">
                        <li class="gnb_menu">
                            <a href="newmenu_list.php">MENU</a>
                            <ul>
                                <li><a href="newmenu_list.php">신메뉴/인기메뉴</a></li>
                                <li><a href="dom.php">이 달의 메뉴</a></li>
                                <li><a href="dougnuts_list.php">도넛</a></li>
                                <li><a href="coffee_list.php">커피/음료</a></li>
                                <li><a href="icecream_list.php">아이스크림/프로즌</a></li>
                                <li><a href="branding_product.php">브랜딩 제품 소개</a></li>
                            </ul>
                        </li>
                        <li class="gnb_store">
                            <a href="homeservice.php">STORE</a>
                            <ul>
                                <li><a href="homeservice.php">홈 서비스</a></li>
                                <li><a href="find_store.php">매장찾기</a></li>
                                <li><a href="store_merchants.php">가맹점모집</a></li>
                            </ul>
                        </li>
                        <li class="gnb_event">
                            <a href="event_list.php">EVENT</a>
                            <ul>
                                <li><a href="event_list.php">이벤트</a></li>
                                <li><a href="partner_service.php">제휴 서비스</a></li>
                            </ul>
                        </li>
                        <li class="gnb_brand">
                            <a href="dougnuts_theater.php">BRAND</a>
                            <ul>
                                <li><a href="dougnuts_theater.php">도넛극장</a></li>
                                <li><a href="brand_story.php">브랜드 스토리</a></li>
                                <li><a href="voucher.php">상품권 구입 안내</a></li>
                            </ul>
                        </li>
                        <li class="gnb_customer">
                            <a href="notice_list.php">CUSTOMER</a>
                            <ul>
                                <li><a href="notice_list.php">공지사항</a></li>
                                <li><a href="faq.php">고객의 소리</a></li>
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
                            echo "<li class=\"tm_login\"><a href=\"login/login.php\">로그인</a></li>";
                            echo "<li class=\"tm_join\"><a href=\"members/join_step1.php\">회원가입</a></li>";
                        }else{
                            if($s_id=='admin'){
                                echo "<li class=\"tm_login\"><a href=\"#none\" onclick=\"logout_check()\">로그아웃</a></li>";
                                echo "<li class=\"tm_join\"><a href=\"admin/admin.php\">관리자페이지</a></li>";
                            }else{
                                echo "<li class=\"tm_login\"><a href=\"#none\" onclick=\"logout_check()\">로그아웃</a></li>";
                                echo "<li class=\"tm_join\"><a href=\"members/mypage_coupon.php\">마이페이지</a></li>";
                            } 
                        }
                        ?>
                        
                        <li class="tm_sitemap"><a href="sitemap.php">사이트맵</a></li>
                        <li><a href="http://www.krispykreme.co.kr/en/">ENGLISH</a></li>
                    </ul>
                <div class="tm_grade_content">
                    <h3>L.POINT 회원 등급 안내</h3>
                        <p>우수회원 산정 기준 : 연 4회 이상 L.POINT 적립</p>
                        <p>L.POINT 취소, 환불 및 사용한 건은 반영되지 않습니다.</p>
                        <p>회원 등급은 1년간 유지됩니다.</p>
                        <p>등급 산정은 매년 3월 일부터 적용됩니다.<span class="spanblock">ex) 15년 실적 기준 <span class="bold">&rarr;</span> 16년 3월 1일 ~ 17년 2월 28일 등급 적용</span></p>
                        <p class="tm_table_title">등급별 혜택</p>
                        <table class="lpoint_table">
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
        <div class="location_bar_bg"><section class="location_bar">
        <ul>
            <li class="home">
            <a href="index.php">HOME</a></li>
            <li class="depth1">
                <a href="#none">CUSTOMER<img src="images/step_down_w.png" alt="arrow_img"></a>
                <ul class="depth1_menu">
                    <li><a href="newmenu_list.php">MENU</a></li>
                    <li><a href="homeservice.php">STORE</a></li>
                    <li><a href="event_list.php">EVENT</a></li>
                    <li><a href="dougnuts_theater.php">BRAND</a></li>
                    <li><a href="notice_list.php"><span class="currently">CUSTOMER</span></a></li>
                </ul>
            </li>
            <li class="depth2"> 
                <a href="#none">고객의 소리<img src="images/step_down_w.png" alt="arrow_img"></a>
                <ul class="depth2_menu">
                    <li><a href="notice_list.php">공지사항</a></li>
                    <li><a href="faq.php"><span class="currently">고객의 소리</span></a></li>
                    <li><a href="https://www.mykkdd.com/kor?AspxAutoDetectCookieSupport=1" target="_blank">설문조사</a></li>
                </ul>
            </li>
        </ul>
            </section></div>
    </header>
    
    <main class="content" id="content">
            <div class="title">
                <div class="title_txt">
                <h2>1:1 고객문의</h2>
                <p>고객님께서 궁금하신 사항을 문의해주세요.</p>
                </div>
            </div>
            <div class="faq_tab">
                <ul>
                    <li><a href="faq.php">FAQ</a></li>
                    <li class="currently"><a href="#none">1:1 문의</a></li>
                </ul>
            </div>
            <div class="question">
            <?php
                $sql="select * from members where idx=$s_idx;";
                $result=mysqli_query($con,$sql);
                $array=mysqli_fetch_array($result);
            ?>
            <form name="qna_form" action="qna_ok.php" method="post">
                <div class="form1">
                <h3>고객정보</h3>
                <p><label for="uname"><span class="txt">이름 <span class="redtxt">*</span></span></label><input class="width500" type="text" name="uname" id="uname" value="<?php echo $array['uname'];?>"></p>
                <p><label for="mobile"><span class="txt">연락처 <span class="redtxt">*</span></span></label><input class="width500" type="text" name="mobile" id="mobile" value="<?php echo $array['mobile'];?>"></p>
                <p><label for="email"><span class="txt">Email <span class="redtxt">*</span></span></label><input class="width500" type="text" name="email" id="email" value="<?php echo $array['email'];?>"></p>
                </div>
                <div class="form2">
                <h3>고객상담</h3>
                <p class="hint">* 고객의소리 등록 시 개인정보문제로 인하여 제목/내용에 개인정보(이름, 연락처, 이메일 등) 입력을 지양해 주시면 감사하겠습니다.</p>
                <dl>
                    <dt><span class="txt">상담구분</span></dt>
                    <dd><input id="type01" type="radio" name="type" value="품질" /><label for="type01">품질</label></dd>
                    <dd><input id="type02" type="radio" name="type" value="서비스" /><label for="type02">서비스</label></dd>
                    <dd><input id="type03" type="radio" name="type" value="매장환경" /><label for="type03">매장환경</label></dd>
                    <dd><input id="type04" type="radio" name="type" value="기타" checked/><label for="type04">기타</label></dd>
                    <dd><input id="type05" type="radio" name="type" value="칭찬" /><label for="type05">칭찬</label></dd>
                    <dd><input id="type06" type="radio" name="type" value="불만" /><label for="type06">불만</label></dd>
                    <dd><input id="type07" type="radio" name="type" value="제안" /><label for="type07">제안</label></dd>
                    <dd><input id="type08" type="radio" name="type" value="문의" /><label for="type08">문의</label></dd>
                </dl>
                <p class="selectp"><span class="txt">점포명</span> 
                    <select name="store" id="store" class="sel1">
    <option value="">선택</option>
    <option value='42129' >KKD 가좌역점</option>
    <option value='42134' >KKD 강남역 지하쇼핑센터점</option>
    <option value='42059' >KKD 강남역점</option>
    <option value='42107' >KKD 강릉교동점</option>
    <option value='42186' >KKD 개봉역점</option>
    <option value='42085' >KKD 거제고현점</option>
    <option value='41028' >KKD 건대스타시티점</option>
    <option value='42153' >KKD 경남거창점</option>
    <option value='42115' >KKD 경북상주점</option>
    <option value='42156' >KKD 곡성휴게소(상)점</option>
    <option value='42146' >KKD 공주신관점</option>
    <option value='42155' >KKD 광양LF스퀘어점</option>
    <option value='42096' >KKD 광주첨단점</option>
    <option value='42150' >KKD 괴산휴게소(상)점</option>
    <option value='42086' >KKD 구미역사점</option>
    <option value='42084' >KKD 군산수송점</option>
    <option value='42183' >KKD 금호터미널점</option>
    <option value='42131' >KKD 길동역점</option>
    <option value='42191' >KKD 김해봉황점</option>
    <option value='42174' >KKD 남부터미널점</option>
    <option value='42108' >KKD 남악신도시점</option>
    <option value='42062' >KKD 남영역점</option>
    <option value='41023' >KKD 노원점</option>
    <option value='42175' >KKD 대구공항점</option>
    <option value='42187' >KKD 대구동성로중앙점</option>
    <option value='42004' >KKD 대구롯데이시아폴리스점</option>
    <option value='42177' >KKD 대구범어점</option>
    <option value='42166' >KKD 대구침산점</option>
    <option value='42098' >KKD 대전관저점</option>
    <option value='41030' >KKD 대전둔산점</option>
    <option value='42017' >KKD 대전복합터미널점</option>
    <option value='42125' >KKD 대전테크노밸리점</option>
    <option value='41018' >KKD 대치점</option>
    <option value='42162' >KKD 덕평휴게소점</option>
    <option value='42002' >KKD 동탄메타폴리스점</option>
    <option value='42149' >KKD 동탄역사점</option>
    <option value='42126' >KKD 동탄커뮤니티점</option>
    <option value='42019' >KKD 롯데광주수완아울렛점</option>
    <option value='42013' >KKD 롯데구리점</option>
    <option value='41044' >KKD 롯데김해아울렛점</option>
    <option value='42010' >KKD 롯데노원점</option>
    <option value='42006' >KKD 롯데대구점</option>
    <option value='42011' >KKD 롯데동래점</option>
    <option value='42008' >KKD 롯데마산점</option>
    <option value='42016' >KKD 롯데몰김포공항점</option>
    <option value='42066' >KKD 롯데몰수원점</option>
    <option value='42185' >KKD 롯데몰수지점</option>
    <option value='42143' >KKD 롯데몰은평점</option>
    <option value='42069' >KKD 롯데백부산점</option>
    <option value='42179' >KKD 롯데백인천터미널점</option>
    <option value='42027' >KKD 롯데상인점</option>
    <option value='42005' >KKD 롯데센텀시티점</option>
    <option value='42132' >KKD 롯데아울렛고양터미널점</option>
    <option value='42120' >KKD 롯데아울렛광교점</option>
    <option value='42081' >KKD 롯데아울렛광명점</option>
    <option value='42051' >KKD 롯데이천아울렛점</option>
    <option value='41005' >KKD 롯데일산점</option>
    <option value='42001' >KKD 롯데전주점</option>
    <option value='42018' >KKD 롯데중동점</option>
    <option value='41032' >KKD 롯데창원점</option>
    <option value='41048' >KKD 롯데청량리점</option>
    <option value='42031' >KKD 롯데청주아울렛점</option>
    <option value='42014' >KKD 롯데파주아울렛점</option>
    <option value='42021' >KKD 롯데평촌점</option>
    <option value='41004' >KKD 롯데포항점</option>
    <option value='42180' >KKD 롯데피트인산본점</option>
    <option value='42119' >KKD 마산양덕점</option>
    <option value='42178' >KKD 매송휴게소(하)점</option>
    <option value='42030' >KKD 메세나폴리스점</option>
    <option value='42032' >KKD 명일복합점</option>
    <option value='42109' >KKD 목포상동점</option>
    <option value='42140' >KKD 문막휴게소(하)점</option>
    <option value='41026' >KKD 미아점</option>
    <option value='41042' >KKD 부산롯데광복점</option>
    <option value='42122' >KKD 부산명지점</option>
    <option value='42123' >KKD 부산백양로점</option>
    <option value='42074' >KKD 부산역사점</option>
    <option value='41037' >KKD 분당수내점</option>
    <option value='41017' >KKD 사당점</option>
    <option value='42181' >KKD 서울대입구역점</option>
    <option value='42151' >KKD 서울만남의광장점</option>
    <option value='42137' >KKD 세종청사점</option>
    <option value='41008' >KKD 소공점</option>
    <option value='42142' >KKD 속초점</option>
    <option value='42111' >KKD 송내남부역점</option>
    <option value='42148' >KKD 수서역사점</option>
    <option value='42067' >KKD 수원인계점</option>
    <option value='42141' >KKD 안성휴게소(상)점</option>
    <option value='42192' >KKD 안양역사점</option>
    <option value='42195' >KKD 여의도점</option>
    <option value='41011' >KKD 영등포점</option>
    <option value='42161' >KKD 예산휴게소(상)점</option>
    <option value='42052' >KKD 오목교점</option>
    <option value='42184' >KKD 오송역사점</option>
    <option value='42118' >KKD 용인동백점</option>
    <option value='41039' >KKD 울산삼산점</option>
    <option value='42138' >KKD 원주단계점</option>
    <option value='42094' >KKD 원주무실점</option>
    <option value='42182' >KKD 이마트수원점</option>
    <option value='42088' >KKD 이천로데오점</option>
    <option value='42112' >KKD 익산모현점</option>
    <option value='42091' >KKD 인천공항1층점</option>
    <option value='42165' >KKD 인천공항T2점</option>
    <option value='41046' >KKD 인천구월점</option>
    <option value='42080' >KKD 인천청라점</option>
    <option value='42061' >KKD 잠실롯데월드몰점</option>
    <option value='41033' >KKD 잠실점</option>
    <option value='42102' >KKD 전주평화점</option>
    <option value='42189' >KKD 정읍역사점</option>
    <option value='42117' >KKD 제천중앙점</option>
    <option value='42092' >KKD 진주하대점</option>
    <option value='42154' >KKD 창원팔용점</option>
    <option value='41038' >KKD 천안터미널점</option>
    <option value='42167' >KKD 청도휴게소(상)점</option>
    <option value='42168' >KKD 청도휴게소(하)점</option>
    <option value='42158' >KKD 청송휴게소(상)점</option>
    <option value='42159' >KKD 청송휴게소(하)점</option>
    <option value='42047' >KKD 청주터미널점</option>
    <option value='42110' >KKD 춘천명동점</option>
    <option value='42104' >KKD 춘천석사점</option>
    <option value='42106' >KKD 충주연수점</option>
    <option value='42116' >KKD 코엑스몰점</option>
    <option value='42147' >KKD 파주운정점</option>
    <option value='42114' >KKD 평택비전점</option>
    <option value='42075' >KKD 현대중동점</option>
    <option value='42029' >KKD 현대충청점</option>
    <option value='42152' >KKD 홈플러스파주운정점</option>
    <option value='42188' >KKD 화곡역점</option>
    <option value='42133' >KKD 화서휴게소점</option>
    <option value='42164' >KKD 횡성휴게소(하)점</option>
    <option value='42048' >KKD AK평택점</option>
    <option value='42057' >KKD SK흑석D/T점</option>

                                    </select>
                </p>
                <p class="selectp">
                    <span class="txt2">점포 방문일자 및 시간</span>
                    <select id="visit_date_y" name="visit_date_y" class="sel4">
                    <option value="">선택</option>	           
                    <option value="2020" >2020년</option>
                    <option value="2019" >2019년</option>
                    <option value="2018" >2018년</option>
                    <option value="2017" >2017년</option>
                    <option value="2016" >2016년</option>
                    <option value="2015" >2015년</option>
                    <option value="2014" >2014년</option>
                    <option value="2013" >2013년</option>
                    <option value="2012" >2012년</option>
                    <option value="2011" >2011년</option>
                    <option value="2010" >2010년</option>
                    <option value="2009" >2009년</option>
                    <option value="2008" >2008년</option>
                    <option value="2007" >2007년</option>
                    <option value="2006" >2006년</option>
                    <option value="2005" >2005년</option>
                    <option value="2004" >2004년</option>
                    <option value="2003" >2003년</option>
                    <option value="2002" >2002년</option>
                    <option value="2001" >2001년</option>
                    <option value="2000" >2000년</option>
                    </select>
                    <select id="visit_date_m" name="visit_date_m" class="sel4">
                    <option value="">선택</option>	           
                    <option value="01" >1월</option>
                    <option value="02" >2월</option>
                    <option value="03" >3월</option>
                    <option value="04" >4월</option>
                    <option value="05" >5월</option>
                    <option value="06" >6월</option>
                    <option value="07" >7월</option>
                    <option value="08" >8월</option>
                    <option value="09" >9월</option>
                    <option value="10" >10월</option>
                    <option value="11" >11월</option>
                    <option value="12" >12월</option>
                    </select>
                    <select id="visit_date_d" name="visit_date_d" class="sel4">
                    <option value="">선택</option>
                    <option value="1" >1일</option>	           
                    <option value="2" >2일</option>	           
                    <option value="3" >3일</option>	           
                    <option value="4" >4일</option>	           
                    <option value="5" >5일</option>	           
                    <option value="6" >6일</option>	           
                    <option value="7" >7일</option>	           
                    <option value="8" >8일</option>	           
                    <option value="9" >9일</option>	           
                    <option value="10" >10일</option>	           
                    <option value="11" >11일</option>	           
                    <option value="12" >12일</option>	           
                    <option value="13" >13일</option>	           
                    <option value="14" >14일</option>	           
                    <option value="15" >15일</option>	           
                    <option value="16" >16일</option>	           
                    <option value="17" >17일</option>	           
                    <option value="18" >18일</option>	           
                    <option value="19" >19일</option>	           
                    <option value="20" >20일</option>	           
                    <option value="21" >21일</option>	           
                    <option value="22" >22일</option>	           
                    <option value="23" >23일</option>	           
                    <option value="24" >24일</option>	           
                    <option value="25" >25일</option>	           
                    <option value="26" >26일</option>	           
                    <option value="27" >27일</option>	           
                    <option value="28" >28일</option>	           
                    <option value="29" >29일</option>	           
                    <option value="30" >30일</option>	           
                    <option value="31" >31일</option>
                    </select>
                    <select id="visit_time" name="visit_time" class="sel4">
                    <option value="">선택</option>
                    <option value="8">8 시</option>
                    <option value="9">9 시</option>
                    <option value="10">10 시</option>
                    <option value="11">11 시</option>
                    <option value="12">12 시</option>
                    <option value="13">13 시</option>
                    <option value="14">14 시</option>
                    <option value="15">15 시</option>
                    <option value="16">16 시</option>
                    <option value="17">17 시</option>
                    <option value="18">18 시</option>
                    <option value="19">19 시</option>
                    <option value="20">20 시</option>
                    <option value="21">21 시</option>
                    <option value="22">22 시</option>
                    </select>
                </p>
                <p><label for="title"><span class="txt">제목 <span class="redtxt">*</span></span></label><input class="width1000" type="text" name="title" id="title"></p>
                <p class="rel"><label for="question_content"><span class="txt">내용 <span class="redtxt">*</span></span></label><textarea name="question_content" id="question_content" class="question_content
                "></textarea></p>
                <p><span class="txt">첨부파일</span><input type="file"></p>
                </div>
                <h3>개인정보 수집 및 이용하는 것에 대한 동의 <span class="redtxt">*</span></h3>
                <textarea class="apply" readonly>이용자 본인은 아래의 개인정보가 사실임을 확인하며, 아래와 같이 개인정보를 수집 및 이용하는 것에 동의합니다.
    1. 개인정보의 수집 및 이용 목적
    원활한 고객상담, 각종 서비스의 제공을 위해 개인정보를 수집하고 있습니다.
    2. 수집하는 개인정보의 항목
    ㆍ필수입력사항
    - 이름, 이메일, 전화번호, 점포명, 점포 방문일자 및 시간
    ㆍ서비스이용과정이나 사업처리 과정에서 아래와 같은 정보들이 생성되어 수집될 수 있습니다.
    - 서비스이용기록, 접속로그, 쿠키, 접속IP정보
    3. 개인정보의 보유 및 이용기간
    원칙적으로 개인정보의 수집 및 이용 목적이 달성된 후에는 해당 정보를 지체 없이 파기합니다.
    다만 소비자보로 관한 법률 등 관계법률에 의해 보존할 필요가 있는 경우에는 일정기간 보존합니다.
    -소비자불만, 분쟁 처리에 관한 기록의 보존기간: 3년
    4. 수집한 개인정보의 위탁 서비스 향상 및 효율적인 개인정보 관리를 위하여 외부에 위탁하여 처리하고 있으며, 관계법령에 따라 위탁 계약 시 개인정보가 안전하게 관리될 수 있도록 규정하고 있습니다.
    개인정보취급 수탁자와 그 업무의 내용은 다음과 같습니다.
    [수탁자 : 수탁범위]
    - 롯데정보통신㈜ : 전산시스템의 구축 및 유지보수
    5.귀하는 위와 같은 개인정보 수집이용에 동의하지 않을 수 있습니다. 단, 동의 거부시에는 해당 서비스 참여가 제한됩니다.</textarea>
                <p class="apply_radio">
                    <input type="radio" name="apply" id="apply_y"><label for="apply_y">동의함</label>
                    <input type="radio" name="apply" id="apply_n"><label for="apply_n">동의안함</label>
                </p>
                <p class="btn_div">
                    <button type="button" class="submit_btn" onclick="form_check()">확인</button>
                    <button type="button" class="cancel_btn">취소</button>
                </p>
            </form>
            </div>
        </main>
    
    <div class="top_btn"><a href="#none">맨 위로</a></div>
    <footer class="footer_wrap">
            <div id="footer">
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
                <p class="validator">
                    <a href="http://validator.kldp.org/check?uri=referer"
                      onclick="this.href=this.href.replace(/referer$/,encodeURIComponent(document.URL))">
                    <img src="//validator.kldp.org/w3cimgs/validate/html5-blue.png" alt="Valid HTML 5" height="15" width="80">
                    </a>
                </p>
            </div>
        </footer><!--footer_wrap-->
</body>
</html>