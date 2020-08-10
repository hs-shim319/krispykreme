<?php 
    include "inc/session.php"; 
    include "inc/dbcon.php";

    $call=isset($_POST["call"])?$_POST["call"]:"";
    $cs=isset($_POST["cs"])?$_POST["cs"]:"";
echo $cs;
    $cgw=isset($_POST["cgw"])?$_POST["cgw"]:"";
echo $cgw;
    $ckn=isset($_POST["ckn"])?$_POST["ckn"]:"";
    $ckb=isset($_POST["ckb"])?$_POST["ckb"]:"";
    $cgj=isset($_POST["cgj"])?$_POST["cgj"]:"";
    $cdg=isset($_POST["cdg"])?$_POST["cdg"]:"";
    $cdj=isset($_POST["cdj"])?$_POST["cdj"]:"";
    $cbs=isset($_POST["cbs"])?$_POST["cbs"]:"";
    $cus=isset($_POST["cus"])?$_POST["cus"]:"";
    $cic=isset($_POST["cic"])?$_POST["cic"]:"";
    $cjn=isset($_POST["cjn"])?$_POST["cjn"]:"";
    $cjb=isset($_POST["cjb"])?$_POST["cjb"]:"";
    $cjj=isset($_POST["cjj"])?$_POST["cjj"]:"";
    $ccn=isset($_POST["ccn"])?$_POST["ccn"]:"";
    $ccb=isset($_POST["ccb"])?$_POST["ccb"]:"";
    $csj=isset($_POST["csj"])?$_POST["csj"]:"";
    $sname=isset($_POST["sname"])?$_POST["sname"]:"";

?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1200">
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>매장찾기 | STORE | 크리스피크림도넛</title>
    <link rel="stylesheet" type="text/css" href="style/common.css">
    <link rel="stylesheet" type="text/css" href="style/find_store.css">
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
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
        <div class="location_bar_bg"><section class="location_bar">
        <ul>
            <li class="home">
            <a href="index.php">HOME</a></li>
            <li class="depth1">
                <a href="#none">STORE<img src="images/step_down_w.png" alt="arrow_img"></a>
                <ul class="depth1_menu">
                    <li><a href="newmenu_list.php">MENU</a></li>
                    <li><a href="homeservice.php"><span class="currently">STORE</span></a></li>
                    <li><a href="event_list.php">EVENT</a></li>
                    <li><a href="dougnuts_theater.php">BRAND</a></li>
                    <li><a href="notice_list.php">CUSTOMER</a></li>
                </ul>
            </li>
            <li class="depth2"> 
                <a href="#none">매장찾기<img src="images/step_down_w.png" alt="arrow_img"></a>
                <ul class="depth2_menu">
                    <li><a href="homeservice.php">홈 서비스</a></li>
                    <li><a href="find_store.php"><span class="currently">매장찾기</span></a></li>
                    <li><a href="store_merchants.php">가맹점모집</a></li>
                </ul>
            </li>
        </ul>
            </section></div>
    </header>
    
    <section id="content">
        <main class="content">
            <div class="title">
                <div class="title_txt">
                    <h2>매장찾기</h2>
                    <p>달콤한 크리스피 크림 도넛이 생각나세요? 지금 가장 가까운 매장을 찾아보세요.</p>
                </div>
            </div>
            <div class="con">
                <a href="find_store.php" class="research_btn">← 돌아가기</a>
            
            <?php
            if($call=='y'){
                $sql="select * from store where name like '%$sname%';";
                $result = mysqli_query($con, $sql);
                $num = mysqli_num_rows($result);
            ?>
                <div class="store_con">
                <p class="store_num"><span class="redtxt"><?php echo $num;?></span>개의 매장</p>
            <?php 
                for($i=1;$i<=$num;$i++){ 
                    $array=mysqli_fetch_array($result);
            ?>            
                    <div class="store_list"><!--전체 매장정보-->
                        <a href="#">
                            <img src="images/store/<?php echo $array['img'];?>" alt="<?php echo $array['name'];?>">
                            <p class="store_name"><?php echo $array["name"];?></p>
                            <p class="hotnow">HOT Light Hour : <?php echo $array['hotnow'];?></p>
                            <p class="movie"><?php if($array['movie']=='y'){echo "도넛극장";}?></p>
                            <p>Tel.<?php echo $array["tel"];?></p> 
                            <p><?php echo $array["stime"];?></p>
                        </a>
                    </div>
                    <div class="store_detail">
                        매장명 <?php echo $array["name"];?>
                        
                        쩌저꼬
                        <a href="#">닫기</a>
                    </div>
                    <div id="map" class="map"></div>
                    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=dc0cadbb455f34a746a6998b51cc8540"></script>
                    <script>
                    var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
                        mapOption = { 
                            center: new kakao.maps.LatLng(<?php echo $array["latitude"];?>, <?php echo $array["longitude"];?>), // 지도의 중심좌표
                            level: 3 // 지도의 확대 레벨
                        };

                    var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다
                    // 마커가 표시될 위치입니다 
                    var markerPosition  = new kakao.maps.LatLng(<?php echo $array["latitude"];?>, <?php echo $array["longitude"];?>); 

                    // 마커를 생성합니다
                    var marker = new kakao.maps.Marker({
                        position: markerPosition
                    });

                    // 마커가 지도 위에 표시되도록 설정합니다
                    marker.setMap(map);

                    // 아래 코드는 지도 위의 마커를 제거하는 코드입니다
                    // marker.setMap(null);    
                    </script>

                <?php } ?><!--//반복문-->
                                </div>
            <?php } //$call=='y'
            else{
                if($cs=='y'){
                    $s_sql="select * from store where city='서울' and name like '%$sname%';";
                    $s_result=mysqli_query($con,$s_sql);
                    $s_num=mysqli_num_rows($s_result);
            ?>
                    <div class="store_con">
                        <p class="store_num"><span class="redtxt">서울</span>지역 <span class="redtxt"><?php echo $s_num;?>    </span>개의 매장</p>
            <?php 
                    for($i=1;$i<=$s_num;$i++){ 
                    $s_array=mysqli_fetch_array($s_result);
            ?>
                <div class="store_list"><!--전체 매장정보-->
                    <a href="#">
                        <img src="images/store/<?php echo $s_array['img'];?>" alt="<?php echo $s_array['name'];?>">
                        <p class="store_name"><?php echo $s_array["name"];?></p>
                        <p class="hotnow">HOT Light Hour : <?php echo $s_array['hotnow'];?></p>
                        <p class="movie"><?php if($s_array['movie']=='y'){echo "도넛극장";}?></p>
                        <p>Tel.<?php echo $s_array["tel"];?></p> 
                        <p><?php echo $s_array["stime"];?></p>
                    </a>
                </div>
                <?php } ?><!--//반복문-->
                </div>
            <?php };//cs==y
                if($cgw=='y'){
                    $gw_sql="select * from store where city='강원' and name like '%$sname%';";
                    $gw_result=mysqli_query($con,$gw_sql);
                    $gw_num=mysqli_num_rows($gw_result);
            ?>
                    <div class="store_con">
                        <p class="store_num"><span class="redtxt">강원</span>지역 <span class="redtxt"><?php echo $gw_num;?></span>개의 매장</p>
            <?php 
                    for($i=1;$i<=$gw_num;$i++){ 
                    $gw_array=mysqli_fetch_array($gw_result);
            ?>
                <div class="store_list"><!--전체 매장정보-->
                    <a href="#">
                        <img src="images/store/<?php echo $gw_array['img'];?>" alt="여의도점">
                        <p class="store_name"><?php echo $gw_array["name"];?></p>
                        <p class="hotnow">HOT Light Hour : <?php echo $gw_array['hotnow'];?></p>
                        <p class="movie"><?php if($gw_array['movie']=='y'){echo "도넛극장";}?></p>
                        <p>Tel.<?php echo $gw_array["tel"];?></p> 
                        <p><?php echo $gw_array["stime"];?></p>
                    </a>
                </div>
                <?php } ?><!--//반복문-->      
                </div>                               
                <?php }//cgw==y
            }//else
            ?>
            
            
            </div>
        </main>
    </section>
    
    <div class="top_btn"><a href="#" onclick="goTop()">맨 위로</a></div>
       
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
            </div>
        </footer><!--footer_wrap-->
</body>
</html>