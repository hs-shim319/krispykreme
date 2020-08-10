<?php include "../inc/session.php"; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>도넛극장 | BRAND | 크리스피크림도넛</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no">
    <link rel="stylesheet" type="text/css" href="style/common.css">
    <link rel="stylesheet" type="text/css" href="style/about.css">
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
            <h2 class="title">ABOUT</h2>
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
        <p><a href="#none">브랜드</a></p>
           <ul>
              <li><a href="notice_list.php">공지사항</a></li>
              <li><span class="currently"><a href="#none">브랜드</a></span></li>
              <li><a href="store_merchants.php">가맹점모집</a></li>
           </ul>
    </section>
    
    <main id="content" class="brand_content">
            <div class="brand_tab">
                <ul>
                    <li class="currently"><a href="#none">도넛극장</a></li>
                    <li><a href="#none">Brand Story</a></li>
                    <li><a href="#none">History</a></li>
                    <li><a href="#none">Share The Love</a></li>
                </ul>
            </div>
            <div class="dougnut_theater">
                <p class="d_t">"오리지널 글레이즈드 도넛이" <span class="block">탄생하는 <span class="gtxt">따끈한 제조과정</span></span></p>
                <div class="video">
                <iframe src="https://www.youtube.com/embed/xryQn9uaEM4" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <p>* 도넛의 제조과정을 순차적으로 보여주는 영상입니다.</p>
                </div>
                <div class="process">
                <h3>도넛의 제조과정 한 눈에 보기</h3>
                <div class="process_1">
                    <img src="images/img_theater01.jpg" alt="">
                    <div class="p_text">
                        <h4><span class="process_num">1</span>반죽&amp;분출</h4>
                        <p>크리스피 크림만의 독특한 믹스로 이스트, 물과 섞어 커다란 반죽을 만든 뒤, '분출기'라는 기계에 넣고 공기압력으로 반죽을 잘라냅니다. 분출된 도넛 반죽에는 구멍이 있는 것도 있고 없는 것도 있습니다. 구멍이 없는 도넛은 나중에 잼, 커스터드, 치즈 필링 등으로 채웁니다.</p>
                    </div>
                </div>
                <div class="process_2">
                    <img src="images/img_theater02.jpg" alt="">
                    <div class="p_text">
                        <h4><span class="process_num">2</span>숙성</h4>
                        <p>길다란 '숙성기'는 도넛을 부풀어오르게 하는 기계입니다. 선반 위에 올려진 도넛이 위 아래로 천천히 움직이면서, 열과 습도로 인해 부풀어오릅니다.</p>
                    </div>
                </div>    
                <div class="process_3">
                    <img src="images/img_theater03.jpg" alt="">
                    <div class="p_text">
                        <h4><span class="process_num">3</span>조리</h4>
                        <p>이스트로 부풀린 도넛이 순 식물성 기름 속으로 떨어집니다.</p>
                    </div>
                </div>    
                <div class="process_4">
                    <img src="images/img_theater04.jpg" alt="">
                    <div class="p_text">
                        <h4><span class="process_num">4</span>뒤집기</h4>
                        <p>도넛의 한쪽 면이 갈색으로 변하면, 도넛은 자동으로 뒤집어져서 곧 양쪽 모두 황금빛이 도는 갈색으로 변합니다.</p>
                    </div>
                </div>    
                <div class="process_5">
                    <img src="images/img_theater05.jpg" alt="">
                    <div class="p_text">
                        <h4><span class="process_num">5</span>글레이징</h4>
                        <p>먹음직스러운 황금빛 갈색 도넛이 따뜻한 '글레이즈 폭포' 아래로 차례차례 지나가면, 여러분의 입맛에 맞는 맛있는 도넛이 탄생합니다.</p>
                    </div>
                </div>
                <div class="process_6">
                    <img src="images/img_theater06.jpg" alt="">
                    <div class="p_text">
                        <h4><span class="process_num">6</span>포장&amp;식히기</h4>
                        <p>따뜻한 글레이즈드 도넛이 나오는 순간, 여러분이 바로 맛 볼 수 있도록 포장합니다. 나머지 도넛들은 천천히 식히면서 이동한 뒤, 겉을 입히고 속을 채워서 어소티드 도넛으로 만들어집니다.</p>
                    </div>
                </div>    
            </div><!--process-->
                <div class="security_wrap">
                <div class="security">
                <h3>안심하고 즐기세요!</h3>
                <p>크리스피 크림에서 당일 판매되지 않은 도넛은 전량 폐기처분되니 안심하고 드세요. <span>믿을 수 있는 크리스피 크림의 깐깐함이 고객 여러분들을 즐겁게 합니다.</span></p>
                </div>
            </div><!--security_wrap-->
            </div><!--dougnut_theater-->
            
            <div class="brand_story">
                <p>"크리스피 크림의" <span>특별한 이야기</span></p>
                <div class="bs_1_wrap">
                    <div class="bs_1">
                        <div>
                            <h4><span>1</span> 도넛 극장을 통한 오감 만족</h4>
                            <p>도넛 극장을 통해 따뜻한 오리지널 글레이즈드를 맛보기까지의 모든 과정을 체험할 수 있습니다. </p>
                        </div>
                        <div>
                            <h4><span>2</span> 따뜻한 도넛 체험</h4>
                            <p>HOT NOW 네온사인이 켜졌을 때 매장에 방문하시면 바로 나온 “따뜻한 오리지널 글레이즈드”를 체험하실 수 있습니다.</p>
                        </div>
                    </div>
                    <img src="images/bg_brand8.png" alt="">
                </div>
                <div class="bs_2">
                    <div>
                        <h4><span>3</span> 더즌박스</h4>
                        <p>특별한 날이 되면 크리스피 크림의 더즌박스도 옷을 갈아입고 여러분을 기다립니다. 더욱 특별하게, 더욱 맛있게 크리스피 크림이 드리는 작은 선물 입니다.</p>
                        <img src="images/img_dozen_bx.png" alt="크리스피크림 시즌 더즌박스" class="dozen">
                    </div>
                    <div>
                        <h4><span>4</span> 다양한 음료 및 디저트</h4>
                        <p>크리스피 크림에서는 도넛뿐 아니라 커피, 스무디, 에이드, 빙수 등 다양한 음료 및 디저트를 함께 즐길 수 있습니다.</p>
                    </div>
                </div>
                <div class="bs_3">
                    <div>
                        <h4><span>5</span> 크리스피 크림 매니아</h4>
                        <p>오픈 전 도넛 샘플링 및 프리뷰파티, HOT NOW 네온사인이 켜졌을 때 바로 맛볼 수 있는 따뜻한 오리지널글레이즈드 도넛, 그리고 다양한 고객 초청행사를 통해 고객들을 만나왔습니다. 이러한 과정 중에 형성된 크리스피 크림 도넛 매니아들은 크리스피 크림을 현재의 모습으로 만들어주었습니다.</p>
                    </div>
                    <img src="images/bg_brand8_2.png" alt="">
                </div>
            </div><!--brand_story-->
            
            <div class="history">
                <p>"크리스피 크림의" 따뜻하고 달콤한 <span class="block"><span class="gtxt">76년의 이야기</span>가 펼쳐집니다.</span></p>
                <div class="his_content">
                    <div class="his_content1">
                        <div class="txt">
                        <h4>JULY 13, 1937</h4>
                        <p class="sub_ex">We Opened Our Doors On</p>
                        <p class="his_ex">크리스피 크림 도넛의 설립자인 버논 루돌프는 1937년 7월 13일, 현재 구 시가지 Old-Salem이라고 불리는 North Carolina 주의 Winston-Salem에 위치한 건물을 빌려 벽에 구멍을 뚫고 고객들에게 직접 따뜻한 오리지널 글레이즈드 도넛을 판매하게 됩니다.</p>
                        </div>
                        <img src="images/img_his01.jpg" alt="">
                    </div>
                    <div class="his_content2">
                        <div class="txt">
                        <h4>40s &amp; 50s</h4>
                        <p class="sub_ex">Improving The Doughnut</p>
                        <p class="his_ex">이 시기의 크리스피 크림은 자체적인 믹스공장을 세우고 유통 시스템을 구축하였고 더 나아가 크리스피 크림만의 도넛 기계를 개발하기에 이르렀습니다. 1950년대부터 루돌프와 기계 기술자들은 도넛을 만드는 과정을 개선하고 자동화에 집중하게 됩니다.</p>
                        </div>
                        <img src="images/img_his02.jpg" alt="">
                    </div>
                    <div class="his_content3">
                        <div class="txt">
                        <h4>60s &amp; 70s</h4>
                        <p class="sub_ex">Our Stores Are Familiar <span>Gathering Places For Friends</span></p>
                        <p class="his_ex">이 시기가 바로 크리스피 크림 매장의 독특한 녹색 타일 지붕과 전통적인 도로 사인을 포함한 일관성 있는 디자인을 확립한 시기입니다. 1973년 창립자인 버논 루돌프가 죽으면서 침체기를 맞이하였고,1976년 베아트리체 푸드에 매각됩니다.</p>
                        </div>
                        <img src="images/img_his03.jpg" alt="">
                    </div>
                    <div class="his_content4">
                        <div class="txt">
                        <h4>80s &amp; 90s</h4>
                        <p class="sub_ex">The Hot Doughnut Experience <span>Everyone Was Talking About US!</span></p>
                        <p class="his_ex">1982년, 크리스피 크림의 투자자들이 크리스피 크림은 베아트리체 푸드로부터 다시 인수하였고 “따뜻한 도넛 체험 (Hot doughnut experience)”을 회사의 슬로건으로 부각시키면서, 1996년에 남동부외의 지역에서는 최초로 뉴욕에 매장을 오픈 하였습니다. 1999년에는 캘리포니아에 첫 매장을 오픈하고, 미국 전 지역으로 사업영역을 넓혀갔습니다. 회사가 설립된지 60년이 되던 1997년에는 스미소니언 미국역사 박물관(Smithsonian Institute’s National Museum of American History)에 회사의 artifact를 기증함으로써 크리스피 크림은 미국의 대표적인 상품임을 인정 받게 됩니다.</p>
                        </div>
                        <img src="images/img_his04.jpg" alt="">
                    </div>
                    <div class="his_content5">
                        <div class="txt">
                        <h4>Todays </h4>
                        <p class="sub_ex">Expansion, Innovation, Extending The Krispy Kreme Experience</p>
                        <p class="his_ex">21세기에도 크리스피 크림의 성장은 멈추지 않습니다.! 크리스피 크림은 미국, 캐나나, 호주, 영국, 멕시코, 한국, 일본, 인도네시아, 필리핀, 두바이, 쿠웨이트, 사우디아라비아, 중국 등의 나라에서 고객과 만나고 있습니다.</p>
                        </div>
                        <img src="images/img_his05.jpg" alt="">
                    </div>
            </div><!--his_content-->
            </div><!--history-->
            
            <div class="share_the_love">
                <p>"크리스피 크림 도넛에서" <span class="block"><span class="gtxt">달콤한 사랑을</span> 나누세요.</span></p>
                <div class="lv_content">
                    <div class="lv_content1">
                        <h4>더했습니다.</h4>
                        <p>크리스피 크림 도넛은 당일 방금 생산한 도넛만을 판매하여 신선함을 더했습니다. <span>입안에서 퍼지는 달콤하고 부드러운 맛은 매장을 방문한 충분한 이유를 말해줍니다.</span></p>
                    </div>
                    <div class="lv_content2">
                        <h4>뺐습니다.</h4>
                        <p>CO2배출이 전혀 없는 생산방식으로 지구 환경을 보호합니다. <span>또한 고올레산 해바라기유를 사용하여 트랜스 지방과 포화지방 함량도 낮췄습니다.</span></p>
                    </div>
                    <div class="lv_content3">
                        <h4>나눕니다.</h4>
                        <p>나누어 먹으면 가격도 내려갑니다. 크리스피 크림 도넛을 입안에 넣은 순간의 만족감은 사람을 변하게 합니다. <span>누군가와 그 행복을 나누고 싶은 마음이 든다면 망설이지 마세요. 특별한 더즌 가격으로 나눔이 더욱 즐거워 집니다!</span></p>
                    </div>
                    <div class="lv_content4">
                        <h4>배가 됩니다.</h4>
                        <p>크리스피 크림은 다양한 사회 공헌 활동을 통해 고객들에게 받은 사랑을 환원하고 있습니다. <span>각 매장에서 결연어린이를 후원하고 있고, 사랑의 동전 모으기를 통해 기아아동을 돕고 있습니다. 또한 장애인 후원 행사 및 불우아동, 이웃 돕기 지원 등 각종 다양한 곳에서 후원하여 기업의 사회적 책임을 소중히 여기고 있습니다.</span></p>
                    </div>
                </div><!--lv_content-->
            </div><!--share_the_love-->
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