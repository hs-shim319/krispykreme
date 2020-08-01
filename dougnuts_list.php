<?php include "inc/session.php"; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>도넛 | MENU | 크리스피크림도넛</title>
    <link rel="stylesheet" type="text/css" href="style/common.css">
    <link rel="stylesheet" type="text/css" href="style/dougnuts.css">
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript" src="js/logout.js"></script>
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
                <a href="#none">MENU</a>
                <ul class="depth1_menu">
                    <li><a href="newmenu_list.php"><span class="currently">MENU</span></a></li>
                    <li><a href="homeservice.php">STORE</a></li>
                    <li><a href="event_list.php">EVENT</a></li>
                    <li><a href="dougnuts_theater.php">BRAND</a></li>
                    <li><a href="notice_list.php">CUSTOMER</a></li>
                </ul>
            </li>
            <li class="depth2"> 
                <a href="#none">도넛</a>
                <ul class="depth2_menu">
                    <li><a href="newmenu_list.php">신메뉴/인기메뉴</a></li>
                    <li><a href="dom.php">이달의 메뉴</a></li>
                    <li><a href="dougnuts_list.php"><span class="currently">도넛</span></a></li>
                    <li><a href="coffee_list.php">커피/음료</a></li>
                    <li><a href="icecream_list.php">아이스크림/프로즌</a></li>
                    <li><a href="branding_product.php">브랜딩 제품소개</a></li>
                </ul>
            </li>
        </ul>
            </section></div>
    </header>
    
    <main class="content" id="content">
            <div class="title">
                <div class="title_txt">
                <h2>도넛</h2>
                <p>Krispy Kreme Doughnuts</p>
                </div>
            </div>
            <div class="dougnuts_tab">
                <ul>
                    <li class="currently"><a href="#none">전체</a></li>
                    <li><a href="#none">도넛</a></li>
                    <li><a href="#none">시즌도넛</a></li>
                    <li><a href="#none">오리지널 필드</a></li>
                </ul>
            </div>
            <div class="dougnuts_menu">
                <ul>
                    <li class="m_season">
                        <a href="dougnuts.php?mname=쿠키%20밀크케잌%20미니콘">
                            <span class="brd"><img src="images/dou_cncminicone.png" alt="쿠키 밀크케잌 미니콘"></span>
                            쿠키 밀크케잌 미니콘 <span class="eng">cookie milk cake mini cone</span>
                        </a>
                    </li>
                    <li class="m_season">
                        <a href="dougnuts.php?mname=초코%20밀크케잌%20미니콘">
                            <span class="brd"><img src="images/dou_chocominicone.png" alt="초코 밀크케잌 미니콘"></span>
                            초코 밀크케잌 미니콘 <span class="eng">choco milk cake mini cone</span>
                        </a>
                    </li>
                    <li class="m_season">
                        <a href="dougnuts.php?mname=스트로베리%20밀크%20미니콘">
                            <span class="brd"><img src="images/dou_strawberryminicone.png" alt="스트로베리 밀크 미니콘"></span>
                            스트로베리 밀크 미니콘 <span class="eng">strawberry milk cake mini cone</span>
                        </a>
                    </li>
                    <li class="m_season">
                        <a href="dougnuts.php?mname=카라멜%20밀크%20미니콘">
                            <span class="brd"><img src="images/dou_caramelminicone.png" alt="카라멜 밀크 미니콘"></span>
                            카라멜 밀크 미니콘 <span class="eng">caramel milk cake mini cone</span>
                        </a>
                    </li>
                    <li class="m_filled">
                        <a href="dougnuts.php?mname=오리지널%20스트로베리%20필드">
                            <span class="brd"><img src="images/dou_strawberry_filled.png" alt="오리지널 스트로베리 필드"></span>
                            오리지널 스트로베리 필드 <span class="eng">original strawberry filled</span>
                        </a>
                    </li>
                    <li class="m_filled">
                        <a href="dougnuts.php?mname=초콜릿%20필드">
                            <span class="brd"><img src="images/dou_chocolate_filled.png" alt="초콜릿 필드"></span>
                            초콜릿 필드 <span class="eng">chocolate filled</span>
                        </a>
                    </li>
                    <li class="m_dougnuts">
                        <a href="dougnuts.php?mname=로투스%20비스코프%20도넛">
                            <span class="brd"><img src="images/dou_lotus_biscoff.png" alt="로투스 비스코프 도넛"></span>로투스 비스코프 도넛 <span class="eng">lotus biscoff doughnut</span>
                        </a>
                    </li>
                    <li class="m_dougnuts">
                        <a href="dougnuts.php?mname=리고%20피넛버터%20도넛">
                            <span class="brd"><img src="images/dou_peanutbutter.png" alt="리고 피넛버터 도넛"></span>리고 피넛버터 도넛 <span class="eng">ligo peanut butter doughnut</span>
                        </a>
                    </li>
                    <li class="m_dougnuts">
                        <a href="dougnuts.php?mname=미니%20오리지널%20글레이즈드">
                            <span class="brd"><img src="images/dou_original_mini.png" alt="미니 오리지널 글레이즈드"></span>미니 오리지널 글레이즈드 <span class="eng">mini original glazed</span>
                        </a>
                    </li>
                    <li class="m_dougnuts">
                        <a href="dougnuts.php?mname=초코홀릭">
                            <span class="brd"><img src="images/dou_chocoholic.png" alt="초코홀릭"></span>초코홀릭 <span class="eng">chocoholic</span>
                        </a>
                    </li>
                    <li class="m_dougnuts">
                        <a href="dougnuts.php?mname=초콜릿%20아이스드%20글레이즈드">
                            <span class="brd"><img src="images/dou_chocolate_iced.png" alt="초콜릿 아이스드 글레이즈드"></span> 초콜릿 아이스드 글레이즈드 <span class="eng">chocolate iced glazed</span>
                        </a>
                    </li>
                    <li class="m_dougnuts">
                        <a href="dougnuts.php?mname=딸기%20와플넛">
                            <span class="brd"><img src="images/dou_strawberry_wafflenut.png" alt="딸기 와플넛"></span>딸기 와플넛 <span class="eng">strawberry wafflenut</span>
                        </a>
                    </li>
                    <li class="m_dougnuts">
                        <a href="dougnuts.php?mname=초코%20와플넛">
                            <span class="brd"><img src="images/dou_choco_wafflenut.png" alt="초코 와플넛"></span>초코 와플넛 <span class="eng">choco wafflenut</span>
                        </a>
                    </li>
                    <li class="m_dougnuts">
                        <a href="dougnuts.php?mname=카라멜%20와플넛">
                            <span class="brd"><img src="images/dou_caramel_wafflenut.png" alt="카라멜 와플넛"></span>카라멜 와플넛 <span class="eng">caramel wafflenut</span>
                        </a>
                    </li>
                    <li class="m_dougnuts">
                        <a href="dougnuts.php?mname=오리지널%20글레이즈드">
                            <span class="brd"><img src="images/dou_original.png" alt="오리지널 글레이즈드"></span>오리지널 글레이즈드 <span class="eng">original glazed</span>
                        </a>
                    </li>
                    <li class="m_dougnuts">
                        <a href="dougnuts.php?mname=오리지널%20글레이즈드%20더즌">
                            <span class="brd"><img src="images/dou_original_dozen.png" alt="오리지널 글레이즈드 더즌"></span>오리지널 글레이즈드 더즌 <span class="eng">original glazed dozen</span>
                        </a>
                    </li>
                    <li class="m_dougnuts">
                        <a href="dougnuts.php?mname=어쏘티드%201더즌">
                            <span class="brd"><img src="images/dou_assorted_dozen.png" alt="어쏘티드 1더즌"></span>어쏘티드 1더즌 <span class="eng">assorted 1dozen</span>
                        </a>
                    </li>
                    <li class="m_dougnuts">
                        <a href="dougnuts.php?mname=더블%20더즌%20딜">
                            <span class="brd"><img src="images/dou_double_dozen.png" alt="더블 더즌 딜"></span>더블 더즌 딜 <span class="eng">double dozen deal</span>
                        </a>
                    </li>
                </ul>
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