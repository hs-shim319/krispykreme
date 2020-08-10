<?php include "inc/session.php"; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1200">
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>브랜드스토리 | BRAND | 크리스피크림도넛</title>
    <link rel="stylesheet" type="text/css" href="style/common.css">
    <link rel="stylesheet" type="text/css" href="style/brand_story.css">
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
        <div class="top_menu_wrap" id="top">
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
                <a href="#none">BRAND<img src="images/step_down_w.png" alt="arrow_img"></a>
                <ul class="depth1_menu">
                    <li><a href="newmenu_list.php">MENU</a></li>
                    <li><a href="homeservice.php">STORE</a></li>
                    <li><a href="event_list.php">EVENT</a></li>
                    <li><a href="dougnuts_theater.php"><span class="currently">BRAND</span></a></li>
                    <li><a href="notice_list.php">CUSTOMER</a></li>
                </ul>
            </li>
            <li class="depth2"> 
                <a href="#none">브랜드스토리<img src="images/step_down_w.png" alt="arrow_img"></a>
                <ul class="depth2_menu">
                    <li><a href="dougnuts_theater.php">도넛극장</a></li>
                    <li><a href="brand_story.php"><span class="currently">브랜드스토리</span></a></li>
                    <li><a href="voucher.php">상품권 구입안내</a></li>
                </ul>
            </li>
        </ul>
    </section></div>
    </header>
    
    <main class="content" id="content">
            <div class="title">
                <div class="title_txt">
                    <h2 class="hide_text">브랜드스토리</h2>
                    크리스피 크림에서 경험하는 제품, <span class="line2">그 이상의 경험,여러분께 드리는 <span>최고의 선물</span>입니다.</span>
                </div>
            </div><!--title-->
            <div class="tab_menu">
                <ul>
                    <li class="currently"><a href="#none">Brand Story</a></li>
                    <li><a href="#none">History</a></li>
                    <li><a href="#none">Share The Love</a></li>
                </ul>
            </div><!--tab-menu-->
            <div class="brand_story">
                <div class="sub_title">
                    <h3>BRAND STORY</h3>
                    <p>크리스피 크림의 탄생부터 현재까지 77주년의 역사를 확인하세요.</p>
                </div>
                <div class="bs_content">
                    <h4><span>1</span> 도넛 극장을 통한 오감 만족</h4>
                    <p>여러분은 도넛 극장을 통해 따뜻한 오리지널 글레이즈드를 맛보기까지의 모든 과정을 체험할 수 있습니다. <span>달콤한 향기, 반짝거리는 글레이즈, 방금 만들어진 도넛이 손에 닿았을 때의 그 온기, 입안에 넣었을 때의 촉촉함… 크리스피 크림에서는 이 모든 과정을 경험할 수 있습니다.</span></p>
                </div>
                <div class="bs_content">
                    <h4><span>2</span> 브랜드에 대한 지식 나눔</h4>
                    <p>크리스피 크림은 도넛 극장을 통해 도넛이 만들어 지는 과정을 보실 수 있을 뿐만 아니라, 도넛교실, 커피교실을 통해 크리스피 크림이라는 브랜드가 가진 75여 년의 역사를 여러분들과 나누고자 합니다.</p>
                </div>
                <div class="bs_content">
                    <h4><span>3</span> 크리스피 크림 매니아</h4>
                    <p>크리스피 크림은 매체 광고를 전혀 하지 않고 오픈 전 도넛 샘플링 및 프리뷰파티, HOT NOW 네온사인이 켜졌을 때 바로 맛볼 수 있는 따뜻한 오리지널 글레이즈드 도넛, 그리고 다양한 행사협찬을 통해 고객들을 만나왔습니다. 이러한 과정 중에 형성된 크리스피 크림 도넛 매니아들은 바로 크리스피 크림을 현재의 모습으로 만들었습니다.</p>
                </div>
                <div class="bs_content">
                    <h4><span>4</span> 따뜻한 도넛 체험</h4>
                    <p>HOT NOW 네온사인이 켜졌을 때 매장에 방문하시면 바로 나온 “따뜻한 오리지널 글레이즈드”를 체험하실 수 있습니다. 입 안에 넣자마자 사르르 녹아 버리는 바로 그 맛. 기다리시는 동안 경험하실 수 있습니다.</p>
                </div>
                <div class="bs_content">
                    <h4><span>5</span> CRS</h4>
                    <p>Customer Relationship Specialist (고객관계전문가)
                    크리스피 크림의 CRS는 기존 서비스 방식에서 탈피한 새로운 서비스를 제공합니다. CRS들은 고객들의 가장 가까운 곳에서 고객들의 말씀에 귀 기울이며 고객이 원하는 최고의 경험을 할 수 있도록 고객의 가장 가까운 곳에서 노력합니다.</p>
                </div>
                <div class="bs_content_l">
                    <h4><span>6</span> 더즌박스</h4>
                    <p>크리스피 크림의 달콤한 먹는 맛과 도넛의 예쁜 모양을 보는 맛의 비밀, 바로 더즌 박스 입니다. 어린이날, 어버이날, 발렌타인, 추석 등 특별한 날이 되면 크리스피 크림의 더즌박스도 옷을 갈아입고 여러분을 기다립니다. 더욱 특별하게, 더욱 맛있게 크리스피 크림이 드리는 작은 선물 입니다.</p>
                    <img src="images/img_dozen_bx.png" alt="크리스피크림 시즌 더즌박스">
                </div>
            </div><!--brand_story-->
            
            <div class="history">
                <div class="sub_title">
                    <h3>HISTORY</h3>
                    <p>크리스피 크림의 탄생부터 현재까지 77주년의 역사를 확인하세요.</p>
                </div>
                <div class="his_content">
                    <div class="his_content1">
                        <h4>JULY 13, 1937</h4>
                        <p class="sub_ex">We Opened Our Doors On</p>
                        <p class="his_ex">크리스피 크림 도넛의 설립자인 버논 루돌프는 1937년 7월 13일, <span>현재 구 시가지 Old-Salem이라고 불리는 North Carolina 주의 Winston-Salem에 위치한 건물을 빌려서 지역 식료품점을 대상으로 크리스피 크림 도넛을 판매하기 시작했습니다.</span><span>판매를 시작한지 얼마 되지 않아 사람들은 매장 앞에 멈추어 서서 따뜻한 도넛을 살 수 있는지 물어보기 시작하였고, 루돌프는 매장 벽에 구멍을 뚫어서 고객들에게 직접 따뜻한 오리지널 글레이즈드 도넛을 판매하게 됩니다.</span></p>
                    </div>
                    <div class="his_content2">
                        <h4>40s &amp; 50s</h4>
                        <p class="sub_ex">Improving The Doughnut <span>Making Process Through Innovation</span></p>
                        <p class="his_ex">40~50년대까지 크리스피 크림은 주로 가족이 경영하는 소규모의 체인점 형태 였습니다. 비록 모든 매장은 똑같은 크리스피 크림 조리법을 사용 하였지만, 모든 과정을 처음부터 시작해야 했습니다. 물론 항상 맛있는 도넛을 만들어 내지만, 그 맛이 일관적이지는 않았습니다. <span>그래서 크리스피 크림은 자체적인 믹스공장을 세우고 유통 시스템을 만들어서 각 크리스피 크림 매장에 도넛 믹스를 배당하기 시작하였고, 더 나아가 크리스피 크림만의 도넛 기계를 고안해서 생산하기에 이르렀습니다. 1950년대부터 루돌프와 기계 기술자들은 도넛을 만드는 과정을 개선하고 자동화 하는 것에 초점을 맞추게 됩니다.</span></p>
                    </div>
                    <div class="his_content3">
                        <h4>60s &amp; 70s</h4>
                        <p class="sub_ex">Our Stores Are Familiar <span>Gathering Places For Friends</span></p>
                        <p class="his_ex">1960년대, 크리스피 크림은 남동부를 중심으로 꾸준히 성장하고 있었고, 조금씩 외부로 진출하고 있었습니다. 이 때가 바로 크리스피 크림 매장의 독특한 녹색 타일 지붕과 전통적인 도로 사인을 포함한 일관성 있는 디자인을 확립한 시기입니다. 1973년 창립자인 버논 루돌프가 죽으면서 침체기를 맞이하였고,1976년 베아트리체 푸드에 매각됩니다.</p>
                    </div>
                    <div class="his_content4">
                        <h4>80s &amp; 90s</h4>
                        <p class="sub_ex">The Hot Doughnut Experience <span>Everyone Was Talking About US!</span></p>
                        <p class="his_ex">1982년, 크리스피 크림의 투자자들이 크리스피 크림은 베아트리체 푸드로부터 다시 인수하였고 “따뜻한 도넛 체험 (Hot doughnut experience)”을 회사의 슬로건으로 부각시키면서, 1996년에 남동부외의 지역에서는 최초로 뉴욕에 매장을 오픈 하였습니다. 1999년에는 캘리포니아에 첫 매장을 오픈하고, 미국 전 지역으로 사업영역을 넓혀갔습니다. 회사가 설립된지 60년이 되던 1997년에는 스미소니언 미국역사 박물관(Smithsonian Institute’s National Museum of American History)에 회사의 artifact를 기증함으로써 크리스피 크림은 미국의 대표적인 상품임을 인정 받게 됩니다.</p>
                    </div>
                    <div class="his_content5">
                        <h4>Todays </h4>
                        <p class="sub_ex">Expansion, Innovation, Extending The Krispy Kreme Experience</p>
                        <p class="his_ex">21세기에도 크리스피 크림의 성장은 멈추지 않습니다.! 크리스피 크림은 미국, 캐나나, 호주, 영국, 멕시코, 한국, 일본, 인도네시아, 필리핀, 두바이, 쿠웨이트, 사우디아라비아, 중국 등의 나라에서 고객과 만나고 있습니다.</p>
                    </div>
                    <div class="his_content6">
                        <h4>2004 in Korea</h4>
                        <p class="sub_ex">2004년 12월 16일 아시아 최초로 한국에서 HOT NOW 네온 사인을 켰습니다. <span>2020년, 크리스피 크림은 전국 100여개 매장에서 따뜻하고 신선한 도넛을 만들며 고객과 만나고 있습니다.</span></p>
                        <ul>
                            <li>2004년 12월 16일 신촌 1호점 오픈</li>
                            <li>2005년 소동점 외 3개</li>
                            <li>2006년 명동점 외</li>
                            <li>2007년 안양점 외</li>
                            <li>2008년 비트플렉스점 외</li>
                            <li>2009년 강남점 외</li>
                            <li>2010년 인천구월점 외</li>
                            <li>2011년 동탄메타폴리스점, 롯데안산점, 롯데구리점, 롯데부평점 외</li>
                        </ul>
                    </div>
            </div><!--his_content-->
            </div><!--history-->
            
            <div class="share_the_love">
                <div class="sub_title">
                    <h3>SHARE THE LOVE</h3>
                    <p>크리스피 크림 도넛에서 달콤한 사랑을 나누세요.</p>
                </div>
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