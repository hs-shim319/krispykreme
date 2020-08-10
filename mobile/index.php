<?php 
    include "../inc/session.php"; 
    include "../inc/dbcon.php";
    $today = date("Ymd");
    $sql = "select * from event where type='event' and (fdate>=$today or fdate is null) order by sdate desc limit 3;";
    $result = mysqli_query($con, $sql);
    mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/favicon.ico">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <title>크리스피크림도넛</title>
    <link rel="stylesheet" type="text/css" href="style/main.css">
    <script type="text/javascript" src="../js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            if(window.innerWidth<=768){
                var imgtag=document.getElementById("img1");
                imgtag.src="images/mobile_original_filled.jpg";
                $("#img1").next("a").css({top:'87%',left:'35%',width:'28%'});               
            };
            var mql = window.matchMedia("screen and (max-width: 768px)");
            mql.addListener(function(e) {
                var imgtag=document.getElementById("img1");
                if(e.matches) {
                    imgtag.src="images/mobile_original_filled.jpg";
                    $("#img1").next("a").css({top:'87%',left:'38%',width:'28%'});
                } else {
                    imgtag.src="images/tablet_original_filed.jpg";
                    $("#img1").next("a").css({top:'68%',left:'16%',width:'20%'});
                }
            });
        });
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
            <a href="find_store.php" class="store_btn">매장찾기</a>
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
        </div><!--header_bottom-->
        </div>
        <div class="gnb_bg"></div>
    </header>
    
    <main id="content" class="content">
        <section class="main_banner">
            <h2 class="hide_text">새소식</h2>
            <ul class="banner_all">
                <li class="banner_strawberryfilled">
                    <img id="img1" src="images/tablet_original_filed.jpg" alt="스트로베리/초코 오리지널 필드">
                    <a href="newmenu.php?idx=13" class="banner_btn"><img src="images/banner_btn_white.png" alt="자세히보기"></a>
                </li>
            </ul>
        </section><!--main_banner-->
        <section class="dom">
            <h2>DOGNUTS OF MONTH</h2>
               <div class="dom_wrap">
                <ul>
                    <li class="cookie">
                        <img src="images/dom_cookie.png" alt="쿠키 밀크케잌 미니콘">
                        <p>쿠키 밀크케잌 미니콘</p>
                    </li>
                    <li class="choco">
                        <img src="images/dom_choco.png" alt="초코 밀크케잌 미니콘">
                        <p>초코 밀크케잌 미니콘</p>
                    </li>
                    <li class="strawberry">
                        <img src="images/dom_strawberry.png" alt="스트로베리 밀크 미니콘">
                        <p>스트로베리 밀크 미니콘</p>
                    </li>
                    <li class="caramel">
                        <img src="images/dom_caramel.png" alt="카라멜 밀크 미니콘">
                        <p>카라멜 밀크 미니콘</p>
                    </li>
                    <li class="originalfilled">
                        <img src="images/dom_originalfilled.png" alt="오리지널 스트로베리 필드">
                        <p>오리지널 스트로베리 필드</p>
                    </li>
                </ul>
                <a href="#none" class="dom_prev"><img src="images/dom_prev.png" alt="이전"></a>
                <a href="#none" class="dom_next"><img src="images/dom_next.png" alt="다음"></a>
                <a href="dom.php" class="dom_more">자세히보기 +</a>
                </div>
        </section><!--dom-->
        <section class="event">
        <h2>EVENT</h2>
            <div class="event_list">
                <div class="event01">
                    <?php 
                         $array = mysqli_fetch_array($result);
                         $e_title=explode("/",$array["title"]);
                    ?>
                    <a href="event.php?idx=<?php echo $array['idx'];?>">
                    <img src="images/<?php echo $array['list_img'];?>" alt="">
                    <dl>
                        <dt><?php echo $e_title[0];?> <span><?php echo $e_title[1];?> </span></dt>
                        <dd>기간: <?php 
                            if($array["sdate"]=="0000-00-00"){
                                echo "상시";
                            }else{
                                echo $array["sdate"]."~".$array["fdate"];
                            }
                        ?></dd>
                    </dl>
                    </a>
                </div>
                <div class="event02">
                    <?php 
                         $array = mysqli_fetch_array($result);
                         $e_title=explode("/",$array["title"]);
                    ?>
                    <a href="event.php?idx=<?php echo $array['idx'];?>">
                    <img src="images/<?php echo $array['list_img'];?>" alt="">
                    <dl>
                        <dt><?php echo $e_title[0];?> <span><?php echo $e_title[1];?></span></dt>
                        <dd>기간: <?php 
                            if($array["sdate"]=="0000-00-00"){
                                echo "상시";
                            }else{
                                echo $array["sdate"]."~".$array["fdate"];
                            }
                        ?></dd>
                    </dl>
                    </a>
                </div>
                <div class="event03">
                    <?php 
                         $array = mysqli_fetch_array($result);
                         $e_title=explode("/",$array["title"]);
                    ?>
                    <a href="event.php?idx=<?php echo $array['idx'];?>">
                    <img src="images/<?php echo $array['list_img'];?>" alt="">
                    <dl>
                        <dt><?php echo $e_title[0];?> <span><?php echo $e_title[1];?></span></dt>
                        <dd>기간: <?php 
                            if($array["sdate"]=="0000-00-00"){
                                echo "상시";
                            }else{
                                echo $array["sdate"]."~".$array["fdate"];
                            }
                        ?></dd>
                    </dl>
                    </a>
                </div>
            </div><!--event_list-->
            <a href="event_list.php" class="event_more">이벤트 더보기+</a>
        </section><!--event-->
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
                    <li class="footer_term"><a href="https://www.lottegrs.com/main.jsp" target="_blank">회사소개</a></li><li class="footer_term"><a href="#">채용정보</a></li><li class="footer_term"><a href="#">이용약관</a></li><li class="footer_term font_b"><a href="#"><span>개인정보처리방침</span></a></li><li class="footer_term"><a href="#">영상정보 처리기기 운영 및 관리 방침</a></li><li class="footer_term"><a href="#">이메일무단수집거부</a></li><li class="footer_term_last"><a href="#none">CONTACT US</a></li>
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