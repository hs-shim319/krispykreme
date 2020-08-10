<?php include "inc/session.php"; ?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1200">
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>이 달의 메뉴 | MENU | 크리스피크림도넛</title>
    <link rel="stylesheet" type="text/css" href="style/common.css">
    <link rel="stylesheet" type="text/css" href="style/dom.css">
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
                                <li><a href="survey.php">설문조사</a></li>
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
                <a href="#none">MENU<img src="images/step_down_w.png" alt="arrow_img"></a>
                <ul class="depth1_menu">
                    <li><a href="newmenu_list.php"><span class="currently">MENU</span></a></li>
                    <li><a href="homeservice.php">STORE</a></li>
                    <li><a href="event_list.php">EVENT</a></li>
                    <li><a href="dougnuts_theater.php">BRAND</a></li>
                    <li><a href="notice_list.php">CUSTOMER</a></li>
                </ul>
            </li>
            <li class="depth2"> 
                <a href="#none">이달의 메뉴<img src="images/step_down_w.png" alt="arrow_img"></a>
                <ul class="depth2_menu">
                    <li><a href="newmenu_list.php">신메뉴/인기메뉴</a></li>
                    <li><a href="dom.php"><span class="currently">이달의 메뉴</span></a></li>
                    <li><a href="dougnuts_list.php">도넛</a></li>
                    <li><a href="coffee_list.php">커피/음료</a></li>
                    <li><a href="icecream_list.php">아이스크림</a></li>
                    <li><a href="branding_product.php">브랜딩 제품소개</a></li>
                </ul>
            </li>
        </ul>
    </section></div>
    </header>
    
        
    <main class="content" id="content">
            <div class="title">
                <div class="title_txt">
                <h2>이달의 메뉴</h2>
                <p>Menu of month</p>
                </div>
            </div>
            <div class="dom_menu">
                <h3>DOUGNUTS</h3>
                <ul>
                    <li class="dom_cookie">
                        <span class="selected"><img src="images/dom_cookie_s.png" alt="쿠키 밀크케잌 미니콘"></span>
                        <a href="#none">쿠키 밀크케잌 미니콘</a>
                    </li>
                    <li class="dom_choco">
                        <span><img src="images/dom_choco_s.png" alt="초코 밀크케잌 미니콘"></span>
                        <a href="#none">초코 밀크케잌 미니콘</a>
                    </li>
                    <li class="dom_strawberry">
                        <span><img src="images/dom_strawberry_s.png" alt="스트로베리 밀크 미니콘"></span>
                        <a href="#none">스트로베리 밀크 미니콘</a>
                    </li>
                    <li class="dom_caramel">
                        <span><img src="images/dom_caramel_s.png" alt="카라멜 밀크 미니콘"></span>
                        <a href="#none">카라멜 밀크 미니콘</a>
                    </li>
                    <li class="dom_original">
                        <span><img src="images/dom_original_filled_s.png" alt="오리지널 스트로베리 필드"></span>
                        <a href="#none">오리지널 스트로베리 필드</a>
                    </li>
                </ul>
            </div>
            
            <div class="dom_menu_content">
                <div class="cookie">
                    <h3>쿠키 밀크케잌 미니콘</h3>
                    <p class="eng">COOKIE MILK CAKE MINI CONE</p>
                    <p class="price"><span class="price_icon">가격</span> 2,800원</p>
                    <dl>
                        <dt>영양소정보</dt>
                        <dd>
                            <table>
                                <tr>
                                    <th>1회 제공량(g)</th>
                                    <th>열량(kcal)</th>
                                    <th>나트륨(mg/%)</th>
                                    <th>당류(g/%)</th>
                                    <th>포화지방(g/%)</th>
                                    <th>단백질(g/%)</th>
                                </tr>
                                <tr>
                                    <td>94g</td>
                                    <td>431kcal</td>
                                    <td>280mg/14%</td>
                                    <td>22g/22%</td>
                                    <td>12g/80%</td>
                                    <td>4g/7%</td>
                                </tr>
                            </table>
                        </dd>
                    </dl>
                    <div class="sns_upload">
                        <a href="#" class="sns_facebook">페이스북 공유하기</a>
                        <a href="#" class="sns_twitter">트위터 공유하기</a>
                    </div>
                </div><!--cookie-->
                <div class="choco">
                    <h3>초코 밀크케잌 미니콘</h3>
                    <p class="eng">CHOCO MILK CAKE MINI CONE</p>
                    <p class="price"><span class="price_icon">가격</span> 2,800원</p>
                    <dl>
                        <dt>영양소정보</dt>
                        <dd>
                            <table>
                                <tr>
                                    <th>1회 제공량(g)</th>
                                    <th>열량(kcal)</th>
                                    <th>나트륨(mg/%)</th>
                                    <th>당류(g/%)</th>
                                    <th>포화지방(g/%)</th>
                                    <th>단백질(g/%)</th>
                                </tr>
                                <tr>
                                    <td>91g</td>
                                    <td>420kcal</td>
                                    <td>230mg/12%</td>
                                    <td>23g/23%</td>
                                    <td>15g/100%</td>
                                    <td>3g/5%</td>
                                </tr>
                            </table>
                        </dd>
                    </dl>
                    <div class="sns_upload">
                        <a href="#" class="sns_facebook">페이스북 공유하기</a>
                        <a href="#" class="sns_twitter">트위터 공유하기</a>
                    </div>
                </div><!--choco-->
                <div class="strawberry">
                    <h3>스트로베리 밀크 미니콘</h3>
                    <p class="eng">STRAWBERRY MILK MINI CONE</p>
                    <p class="price"><span class="price_icon">가격</span> 2,500원</p>
                    <dl>
                        <dt>영양소정보</dt>
                        <dd>
                            <table>
                                <tr>
                                    <th>1회 제공량(g)</th>
                                    <th>열량(kcal)</th>
                                    <th>나트륨(mg/%)</th>
                                    <th>당류(g/%)</th>
                                    <th>포화지방(g/%)</th>
                                    <th>단백질(g/%)</th>
                                </tr>
                                <tr>
                                    <td>72g</td>
                                    <td>282kcal</td>
                                    <td>130mg/7%</td>
                                    <td>17g/17%</td>
                                    <td>9g/60%</td>
                                    <td>4g/7%</td>
                                </tr>
                            </table>
                        </dd>
                    </dl>
                    <div class="sns_upload">
                        <a href="#" class="sns_facebook">페이스북 공유하기</a>
                        <a href="#" class="sns_twitter">트위터 공유하기</a>
                    </div>
                </div><!--strawberry-->
                <div class="caramel">
                    <h3>카라멜 밀크 미니콘</h3>
                    <p class="eng">CARAMEL MILK MINI CONE</p>
                    <p class="price"><span class="price_icon">가격</span> 2,500원</p>
                    <dl>
                        <dt>영양소정보</dt>
                        <dd>
                            <table>
                                <tr>
                                    <th>1회 제공량(g)</th>
                                    <th>열량(kcal)</th>
                                    <th>나트륨(mg/%)</th>
                                    <th>당류(g/%)</th>
                                    <th>포화지방(g/%)</th>
                                    <th>단백질(g/%)</th>
                                </tr>
                                <tr>
                                    <td>79g</td>
                                    <td>324kcal</td>
                                    <td>130mg/7%</td>
                                    <td>19g/19%</td>
                                    <td>11g/73%</td>
                                    <td>4g/7%</td>
                                </tr>
                            </table>
                        </dd>
                    </dl>
                    <div class="sns_upload">
                        <a href="#" class="sns_facebook">페이스북 공유하기</a>
                        <a href="#" class="sns_twitter">트위터 공유하기</a>
                    </div>
                </div><!--caramel-->
                <div class="original">
                <h3>오리지널 스트로베리 필드</h3>
                <p class="eng">ORIGINAL STRAWBERRY FILLED</p>
                <p class="price"><span class="price_icon">가격</span> 1,800원</p>
                <dl>
                    <dt>영양소정보</dt>
                    <dd>
                        <table>
                            <tr>
                                <th>1회 제공량(g)</th>
                                <th>열량(kcal)</th>
                                <th>나트륨(mg/%)</th>
                                <th>당류(g/%)</th>
                                <th>포화지방(g/%)</th>
                                <th>단백질(g/%)</th>
                            </tr>
                            <tr>
                                <td>62g</td>
                                <td>221kcal</td>
                                <td>130mg/7%</td>
                                <td>14g/12%</td>
                                <td>4g/24%</td>
                                <td>4g/7%</td>
                            </tr>
                        </table>
                    </dd>
                </dl>
                <div class="sns_upload">
                    <a href="#" class="sns_facebook">페이스북 공유하기</a>
                    <a href="#" class="sns_twitter">트위터 공유하기</a>
                </div>
            </div><!--original-->
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