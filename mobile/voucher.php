<?php include "../inc/session.php"; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>상품권 구입 안내 | MENU | 크리스피크림도넛</title>
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
                        <li class="faq"><a href="faq.php">FAQ</a></li>
                        <li class="voc"><a href="mylevel.php">L.Point등급안내</a></li>
                    </ul>
            </nav><!--gnb-->
            <a href="#none" class="back_btn" onclick="history.go(-1); return false;">뒤로가기</a>
        </div><!--header_bottom-->
        </div>
        <div class="gnb_bg"></div>
    </header>
    
    <section class="location_bar">
        <p><a href="#none">상품권 구입 안내</a></p>
           <ul>
              <li><a href="newmenu_list.php">신메뉴/인기메뉴</a></li>
              <li><a href="dom.php">이 달의 메뉴</a></li>
              <li><a href="dougnuts_list.php">도넛</a></li>
              <li><a href="coffee_list.php">커피/음료</a></li>
              <li><a href="icecream_list.php">아이스크림/프로즌</a></li>
              <li><a href="branding_product.php">브랜딩 제품 소개</a></li>
              <li><span class="currently"><a href="#none">상품권 구입 안내</a></span></li>
           </ul>
    </section>
    
    <main id="content" class="content">
            <div class="vouchers">
                <p>소중한 분께 <span>따뜻한 감사의 마음을</span> 전하세요.</p>
                <h3 class="hide_text">상품권</h3>
                   <ul>
                    <li class="original">
                        <img src="images/voucher01.jpg" alt="">
                        <p>오리지널 교환권 <span>\13,000</span></p>
                    </li>
                    <li>
                        <img src="images/voucher02.jpg" alt="">
                        <p>어쏘티드 교환권 <span>\15,000</span></p>
                    </li>
                    </ul>
            </div><!--vouchers-->
            <div class="ticket_ex">
                <ul>
                    <li><span>구입 및 사용장소</span> : 크리스피크림 전 지점</li>
                    <li><span>사용기간</span> : 발행일로부터 1년</li>
                    <li><span>사용방법</span> : 매장 방문 후 제품교환권의 기재된 상품과 교환</li>   
                </ul> 
                <ul>
                    <li><span>이용안내</span></li>
                    <li>본 교환권은 지정된 상품으로 교환되며, 현금과 교환되지 않습니다.</li>
                    <li>본 교환권은 도난, 분실, 멸실 등에 대하여 당사는 책임지지 않으며 더럽혀지거나 훼손되어 식별 불가능으로 사용이 제한될 수 있습니다.</li>
                    <li>제품교환권의 상의 제품 가격이 조정되어도 차액을 고객에게 청구 하거나 반환하지 않습니다.</li>
                    <li>본 교환권은 지급보증이 되어 있지 않습니다.</li>
                    <li>10장 이상 구매시 가까운 점포 혹은 대표문의(02-709-1114)로 문의 바랍니다.</li>
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