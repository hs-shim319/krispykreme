<?php 
    include "../inc/session.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>커피/음료 | MENU | 크리스피크림도넛</title>
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
            <a href="#none" class="back_btn" onclick="history.go(-1); return false;">뒤로가기</a>
        </div><!--header_bottom-->
        </div>
        <div class="gnb_bg"></div>
    </header>
    
    <section class="location_bar">
        <p><a href="#none">커피/음료</a></p>
           <ul>
              <li><a href="newmenu_list.php">신메뉴/인기메뉴</a></li>
              <li><a href="dom.php">이 달의 메뉴</a></li>
              <li><a href="dougnuts_list.php">도넛</a></li>
              <li><span class="currently"><a href="#none">커피/음료</a></span></li>
              <li><a href="icecream_list.php">아이스크림/프로즌</a></li>
              <li><a href="branding_product.php">브랜딩 제품 소개</a></li>
              <li><a href="voucher.php">상품권 구입 안내</a></li>
           </ul>
    </section>
    <main id="content" class="content">
            <div class="tab">
                <ul class="bev">
                    <li class="currently"><a href="#none">전체</a></li>
                    <li><a href="#none">커피</a></li>
                    <li><a href="#none">에이드</a></li>
                    <li><a href="#none">스무디</a></li>
                    <li><a href="#none">기타 음료</a></li>
                </ul>
            </div>
            <div class="menu_list">
                <ul>
                    <li class="b_ade">
                        <a href="menu_view.php?mname=트로피컬%20스파클링%20펀치">
                            <span class="brd"><img src="images/bev_tropical_punch.png" alt="트로피컬 스파클링 펀치"></span>
                            트로피컬 스파클링 펀치 <span class="eng">tropical sparkling punch</span>
                        </a>
                    </li>
                    <li class="b_ade">
                        <a href="menu_view.php?mname=믹스베리%20스파클링%20펀치">
                            <span class="brd"><img src="images/bev_mixberry_punch.png" alt="믹스베리 스파클링 펀치"></span>
                            믹스베리 스파클링 펀치 <span class="eng">mixberry sparkling punch</span>
                        </a>
                    </li>
                    <li class="b_smoothies">
                        <a href="menu_view.php?mname=메론%20스무디">
                            <span class="brd"><img src="images/bev_melon_smoothies.png" alt="메론 스무디"></span>
                            메론 스무디 <span class="eng">melon smoothies</span>
                        </a>
                    </li>
                    <li class="b_smoothies">
                        <a href="menu_view.php?mname=살구%20자두%20스무디">
                            <span class="brd"><img src="images/bev_apricotplum_smoothies.png" alt="살구 자두 스무디"></span>
                            살구 자두 스무디 <span class="eng">apricotplum smoothies</span>
                        </a>
                    </li>
                    <li class="b_etc">
                        <a href="menu_view.php?mname=밀크티">
                            <span class="brd"><img src="images/bev_milktea.png" alt="밀크티"></span>
                            밀크티 <span class="eng">milk tea</span>
                        </a>
                    </li>
                    <li class="b_etc">
                        <a href="menu_view.php?mname=다크%20핫%20초콜릿">
                            <span class="brd"><img src="images/bev_dark_hotchocolate.png" alt="다크 핫 초콜릿"></span>
                            다크 핫 초콜릿 <span class="eng">dark hot chocolate</span>
                        </a>
                    </li>
                    <li class="b_smoothies">
                        <a href="menu_view.php?mname=망고%20스무디">
                            <span class="brd"><img src="images/bev_mango_smoothies.png" alt="망고 스무디"></span>망고 스무디 <span class="eng">mango smoothies</span>
                        </a>
                    </li>
                    <li class="b_smoothies">
                        <a href="menu_view.php?mname=스트로베리%20스무디">
                            <span class="brd"><img src="images/bev_strawberry_smoothies.png" alt="스트로베리 스무디"></span>스트로베리 스무디 <span class="eng">strawberry smoothies</span>
                        </a>
                    </li>
                    <li class="b_coffee">
                        <a href="menu_view.php?mname=아메리카노">
                            <span class="brd"><img src="images/bev_americano.png" alt="아메리카노"></span>아메리카노 <span class="eng">americano</span>
                        </a>
                    </li>
                    <li class="b_coffee">
                        <a href="menu_view.php?mname=아이스%20아메리카노">
                            <span class="brd"><img src="images/bev_ice_americano.png" alt="아이스 아메리카노"></span>아이스 아메리카노 <span class="eng">ice americano</span>
                        </a>
                    </li>
                    <li class="b_coffee">
                        <a href="menu_view.php?mname=바닐라%20라떼">
                            <span class="brd"><img src="images/bev_vanila_latte.png" alt="바닐라 라떼"></span>바닐라 라떼 <span class="eng">vanila latte</span>
                        </a>
                    </li>
                    <li class="b_coffee">
                        <a href="menu_view.php?mname=아이스%20바닐라%20라떼">
                            <span class="brd"><img src="images/bev_ice_vanila_latte.png" alt="아이스 바닐라 라떼"></span>아이스 바닐라 라떼 <span class="eng">ice vanila latte</span>
                        </a>
                    </li>
                    <li class="b_coffee">
                        <a href="menu_view.php?mname=카푸치노">
                            <span class="brd"><img src="images/bev_cappuccino.png" alt="카푸치노"></span>카푸치노 <span class="eng">cappuccino</span>
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