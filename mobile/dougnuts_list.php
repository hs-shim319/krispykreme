<?php 
    include "../inc/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>도넛 | MENU | 크리스피크림도넛</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <link rel="stylesheet" type="text/css" href="style/common.css">
    <link rel="stylesheet" type="text/css" href="style/menu.css">
    <script type="text/javascript" src="../js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript">
        function logout_check(){
            var q=confirm("정말 로그아웃하시겠습니까?");
            if(q){
                location.href="login/logout.php";
            }   
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
            <h2 class="title">MENU</h2>
            <nav class="gnb">
                <h2>메인메뉴</h2>
                <a href="#none" class="menu_btn"></a>
                <ul class="session_menu">
                    <?php
                    if(!$s_id){
                        echo "<li class=\"tm_login\"><a href=\"login/login.php\">로그인</a></li>";
                        echo "<li class=\"tm_join\"><a href=\"members/join_step1.php\">회원가입</a></li>";
                    }else{
                        echo "<li class=\"tm_login\"><a href=\"#none\" onclick=\"logout_check()\">로그아웃</a></li>";
                        echo "<li class=\"tm_join\"><a href=\"members/mypage_coupon.php\">마이페이지</a></li>";
                    }
                    ?>                    
                </ul>
                <ul class="gnb_list">
                        <li class="gnb_home">
                            <a href="index.php">HOME</a>
                        </li>
                        <li class="gnb_menu">
                            <a href="#none">MENU</a>
                            <ul>
                                <li><a href="newmenu_list.php">신메뉴/인기메뉴</a></li>
                                <li><a href="dom.php">이 달의 메뉴</a></li>
                                <li><a href="dougnuts_list.php">도넛</a></li>
                                <li><a href="coffee_list.php">커피/음료</a></li>
                                <li><a href="icecream_list.php">아이스크림/프로즌</a></li>
                                <li><a href="branding_product.php">브랜딩 제품 소개</a></li>
                                <li><a href="voucher.php">상품권 구입 안내</a></li>
                            </ul>
                        </li>
                        <li class="gnb_store">
                            <a href="#none">STORE</a>
                            <ul>
                                <li><a href="homeservice.php">홈 서비스</a></li>
                                <li><a href="find_store.php">매장찾기</a></li>
                            </ul>
                        </li>
                        <li class="gnb_event">
                            <a href="#none">EVENT</a>
                            <ul>
                                <li><a href="event_list.php">이벤트</a></li>
                                <li><a href="partner_service.php">제휴 서비스</a></li>
                            </ul>
                        </li>
                        <li class="gnb_brand">
                            <a href="#none">ABOUT</a>
                            <ul>
                                <li><a href="notice_list.php">공지사항</a></li>
                                <li><a href="brand.php">브랜드</a></li>
                                <li><a href="store_merchants.php">가맹점모집</a></li>
                            </ul>
                        </li>
                        <li class="faq"><a href="#">FAQ</a></li>
                        <li class="voc"><a href="#">1:1 문의</a></li>
                    </ul>
            </nav><!--gnb-->
            <a href="#none" class="back_btn" onclick="go_back()">뒤로가기</a>
        </div><!--header_bottom-->
        </div>
        <div class="gnb_bg"></div>
    </header>
    
    <section class="location_bar">
        <p><a href="#none">도넛</a></p>
           <ul>
              <li><a href="newmenu_list.php">신메뉴/인기메뉴</a></li>
              <li><a href="dom.php">이 달의 메뉴</a></li>
              <li><span class="currently"><a href="#none">도넛</a></span></li>
              <li><a href="coffee_list.php">커피/음료</a></li>
              <li><a href="icecream_list.php">아이스크림/프로즌</a></li>
              <li><a href="branding_product.php">브랜딩 제품 소개</a></li>
              <li><a href="voucher.php">상품권 구입 안내</a></li>
           </ul>
    </section>
    <main id="content" class="content">
            <div class="tab">
                <ul class="dou">
                    <li class="currently"><a href="#none">전체</a></li>
                    <li><a href="#none">도넛</a></li>
                    <li><a href="#none">시즌도넛</a></li>
                    <li><a href="#none">오리지널 필드</a></li>
                </ul>
            </div>
            <div class="menu_list">
                <ul>
                    <li class="m_season">
                        <a href="menu_view.php?mname=쿠키%20밀크케잌%20미니콘">
                            <span class="brd"><img src="images/dou_cncminicone.png" alt="쿠키 밀크케잌 미니콘"></span>
                            쿠키 밀크케잌 미니콘 <span class="eng">cookie milk cake mini cone</span>
                        </a>
                    </li>
                    <li class="m_season">
                        <a href="menu_view.php?mname=초코%20밀크케잌%20미니콘">
                            <span class="brd"><img src="images/dou_chocominicone.png" alt="초코 밀크케잌 미니콘"></span>
                            초코 밀크케잌 미니콘 <span class="eng">choco milk cake mini cone</span>
                        </a>
                    </li>
                    <li class="m_season">
                        <a href="menu_view.php?mname=스트로베리%20밀크%20미니콘">
                            <span class="brd"><img src="images/dou_strawberryminicone.png" alt="스트로베리 밀크 미니콘"></span>
                            스트로베리 밀크 미니콘 <span class="eng">strawberry milk cake mini cone</span>
                        </a>
                    </li>
                    <li class="m_season">
                        <a href="menu_view.php?mname=카라멜%20밀크%20미니콘">
                            <span class="brd"><img src="images/dou_caramelminicone.png" alt="카라멜 밀크 미니콘"></span>
                            카라멜 밀크 미니콘 <span class="eng">caramel milk cake mini cone</span>
                        </a>
                    </li>
                    <li class="m_filled">
                        <a href="menu_view.php?mname=오리지널%20스트로베리%20필드">
                            <span class="brd"><img src="images/dou_strawberry_filled.png" alt="오리지널 스트로베리 필드"></span>
                            오리지널 스트로베리 필드 <span class="eng">original strawberry filled</span>
                        </a>
                    </li>
                    <li class="m_filled">
                        <a href="menu_view.php?mname=초콜릿%20필드">
                            <span class="brd"><img src="images/dou_chocolate_filled.png" alt="초콜릿 필드"></span>
                            초콜릿 필드 <span class="eng">chocolate filled</span>
                        </a>
                    </li>
                    <li class="m_dougnuts">
                        <a href="menu_view.php?mname=로투스%20비스코프%20도넛">
                            <span class="brd"><img src="images/dou_lotus_biscoff.png" alt="로투스 비스코프 도넛"></span>로투스 비스코프 도넛 <span class="eng">lotus biscoff doughnut</span>
                        </a>
                    </li>
                    <li class="m_dougnuts">
                        <a href="menu_view.php?mname=리고%20피넛버터%20도넛">
                            <span class="brd"><img src="images/dou_peanutbutter.png" alt="리고 피넛버터 도넛"></span>리고 피넛버터 도넛 <span class="eng">ligo peanut butter doughnut</span>
                        </a>
                    </li>
                    <li class="m_dougnuts">
                        <a href="menu_view.php?mname=미니%20오리지널%20글레이즈드">
                            <span class="brd"><img src="images/dou_original_mini.png" alt="미니 오리지널 글레이즈드"></span>미니 오리지널 글레이즈드 <span class="eng">mini original glazed</span>
                        </a>
                    </li>
                    <li class="m_dougnuts">
                        <a href="menu_view.php?mname=초코홀릭">
                            <span class="brd"><img src="images/dou_chocoholic.png" alt="초코홀릭"></span>초코홀릭 <span class="eng">chocoholic</span>
                        </a>
                    </li>
                    <li class="m_dougnuts">
                        <a href="menu_view.php?mname=초콜릿%20아이스드%20글레이즈드">
                            <span class="brd"><img src="images/dou_chocolate_iced.png" alt="초콜릿 아이스드 글레이즈드"></span> 초콜릿 아이스드 글레이즈드 <span class="eng">chocolate iced glazed</span>
                        </a>
                    </li>
                    <li class="m_dougnuts">
                        <a href="menu_view.php?mname=딸기%20와플넛">
                            <span class="brd"><img src="images/dou_strawberry_wafflenut.png" alt="딸기 와플넛"></span>딸기 와플넛 <span class="eng">strawberry wafflenut</span>
                        </a>
                    </li>
                    <li class="m_dougnuts">
                        <a href="menu_view.php?mname=초코%20와플넛">
                            <span class="brd"><img src="images/dou_choco_wafflenut.png" alt="초코 와플넛"></span>초코 와플넛 <span class="eng">choco wafflenut</span>
                        </a>
                    </li>
                    <li class="m_dougnuts">
                        <a href="menu_view.php?mname=카라멜%20와플넛">
                            <span class="brd"><img src="images/dou_caramel_wafflenut.png" alt="카라멜 와플넛"></span>카라멜 와플넛 <span class="eng">caramel wafflenut</span>
                        </a>
                    </li>
                    <li class="m_dougnuts">
                        <a href="menu_view.php?mname=오리지널%20글레이즈드">
                            <span class="brd"><img src="images/dou_original.png" alt="오리지널 글레이즈드"></span>오리지널 글레이즈드 <span class="eng">original glazed</span>
                        </a>
                    </li>
                    <li class="m_dougnuts">
                        <a href="menu_view.php?mname=오리지널%20글레이즈드%20더즌">
                            <span class="brd"><img src="images/dou_original_dozen.png" alt="오리지널 글레이즈드 더즌"></span>오리지널 글레이즈드 더즌 <span class="eng">original glazed dozen</span>
                        </a>
                    </li>
                    <li class="m_dougnuts">
                        <a href="menu_view.php?mname=어쏘티드%201더즌">
                            <span class="brd"><img src="images/dou_assorted_dozen.png" alt="어쏘티드 1더즌"></span>어쏘티드 1더즌 <span class="eng">assorted 1dozen</span>
                        </a>
                    </li>
                    <li class="m_dougnuts">
                        <a href="menu_view.php?mname=더블%20더즌%20딜">
                            <span class="brd"><img src="images/dou_double_dozen.png" alt="더블 더즌 딜"></span>더블 더즌 딜 <span class="eng">double dozen deal</span>
                        </a>
                    </li>
                </ul>
            </div>
    </main>
       
    <div class="top_btn"><a href="#">맨 위로</a></div>
    <div class="footer_wrap">
            <footer id="footer">
                <h2 class="hide_text">크리스피크림</h2>
                <h3 class="hide_text">SNS</h3>
                <ul class="sns">
                    <li class="sns_facebook"><a href="https://www.facebook.com/kkdkorea1937" target="_blank"><img src="images/sns_facebook_s.png" alt="facebook"></a></li>
                    <li class="sns_twitter"><a href="https://twitter.com/krispykremekr" target="_blank"><img src="images/sns_twitter_s.png" alt="twitter"></a></li>
                    <li class="sns_instagram"><a href="https://www.instagram.com/krispykremekr/" target="_blank"><img src="images/sns_instagram_s.png" alt="instagram"></a></li>
                </ul>
                <h3 class="hide_text">약관</h3>
                <ul class="footer_term_wrap">
                    <li class="footer_term"><a href="https://www.lottegrs.com/main.jsp" target="_blank">회사소개</a></li><li class="footer_term"><a href="#">채용정보</a></li><li class="footer_term"><a href="#">이용약관</a></li><li class="footer_term font_b"><a href="#"><span>개인정보처리방침</span></a></li><li class="footer_term"><a href="#">영상정보 처리기기 운영 및 관리 방침</a></li><li class="footer_term"><a href="#">이메일무단수집거부</a></li><li class="footer_term_last"><a href="#">CONTACT US</a></li>
                </ul>
                
                <div class="footer_txt">
                    <p>대표자 : 남익우</p>
                    <p class="after">사업자등록번호 : 106-81-23498</p>
                    <address class="after">서울특별시 용산구 한강대로71길 47</address>
                    <p>대표문의 : 02-709-1114 (가맹문의, 행사안내 등)</p>
                    <p class="after">고객지원센터 080-023-9776 (고객불만사항 등)</p>
                    <p class="copyright">COPYRIGHT 2013 KRISPY KREME DOUGNUTS.ALL RIGHTS RESERVED</p>
                </div><!--footer_txt-->
            </footer>
        </div><!--footer_wrap-->
</body>
</html>