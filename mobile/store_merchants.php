<?php 
    include "../inc/session.php"; 
    include "../inc/dbcon.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>가맹점모집 | STORE | 크리스피크림도넛</title>
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
                        <li class="faq"><a href="#">FAQ</a></li>
                        <li class="voc"><a href="#">1:1 문의</a></li>
                    </ul>
            </nav><!--gnb-->
            <a href="#none" class="back_btn" onclick="javascript:history.back();">뒤로가기</a>
        </div><!--header_bottom-->
        </div>
        <div class="gnb_bg"></div>
    </header>
    
    <section class="location_bar">
        <p><a href="#none">가맹점모집</a></p>
           <ul>
              <li><a href="notice_list.php">공지사항</a></li>
              <li><a href="brand.php">브랜드</a></li>
              <li><span class="currently"><a href="#none">가맹점모집</a></span></li>
           </ul>
    </section>
    
    <main id="content" class="merchants_content">
            <p>성공을 위한 확실한 투자, <span class="block"><span class="gtxt">크리스피크림과</span> 함께하세요!</span></p>
            <div class="merchants">
                <h3>가맹금, 교육비</h3>
                <p>(단위 : 백만원, VAT별도)</p>
                <table>
                    <tr>
                        <th>구분</th>
                        <th>금액</th>
                        <th>비고</th>
                    </tr>
                    <tr>
                        <th>가맹금</th>
                        <td class="border_cen">3</td>
                        <td rowspan=2>최초 계약시 1회 납부(소멸성)<br>지적재산권/가맹본부 노하우 제공</td>
                    </tr>
                    <tr>
                        <th>초기 경영지도비</th>
                        <td class="border_cen">7</td>
                    </tr>
                    <tr>
                        <th>교육비</th>
                        <td class="border_cen">1.2(2인 기준)</td>
                        <td>60만/人[최소 2인 이상]</td>
                    </tr>
                    <tr>
                        <th>합계</th>
                        <td class="border_cen">11.2</td>
                        <td></td>
                    </tr>
                </table>
                <h3>기타 시설투자비용(인테리어, 주방기기, 시공관리비)</h3>
                <p>(단위 : 백만원, VAT별도)</p>
                <table>
                    <tr>
                        <th colspan=2>구분</th>
                        <th>면적 15평</th>
                        <th>비고</th>
                    </tr>
                    <tr>
                        <th rowspan=4>투자비</th>
                        <th class="border_left">인테리어</th>
                        <td class="border_cen">40.5</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="border_left">주방기기, 집기비품</th>
                        <td class="border_cen">78.6</td>
                        <td>기기, 간판, 의탁자, 전산장비 포함</td>
                    </tr>
                    <tr>
                        <th class="border_left">시공관리비</th>
                        <td class="border_cen">1.1</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th class="border_left">합계</th>
                        <td class="border_cen">120.1</td>
                        <td></td>
                    </tr>
                </table>
                <h3>계약 시 준비사항</h3>
                <table>
                    <tr>
                        <th>구분</th>
                        <th colspan=2>내용</th>
                    </tr>
                    <tr>
                        <th>계약기간</th>
                        <td class="border_cen">3년</td>
                        <td>※ 3년 단위 재계약(재계약시 추가비용 없음)</td>
                    </tr>
                    <tr>
                        <th>관리자</th>
                        <td class="border_cen">정규관리자 : 점주 직접 채용</td>
                        <td>※ 관리자 교육 수료자 2명 이상 채용시 오픈 가능</td>
                    </tr>
                    <tr>
                        <th>관리자교육</th>
                        <td class="border_cen">교육기간(15일)</td>
                        <td>※ 본부교육(서울 강서구 마곡지구) 3일, 직영점 실습 12일(특수점의 경우 7일)</td>
                    </tr>
                    <tr>
                        <th>담보설정</th>
                        <td class="border_left" colspan=2>40백만(현금, 보증보험, 예금질권 부동산 中 설정 가능) ※ 부동산(근저당) 설정 시 50백만 설정</td>
                    </tr>
                </table>
                <h3>개설 문의처</h3>
                <ul>
                    <li>
                        <p>① 수도권, 강원지역</p>
                        <table>
                            <tr>
                                <th>구분</th>
                                <th>담당자</th>
                                <th>담당지역</th>
                                <th>연락처</th>
                            </tr>
                            <tr>
                                <th rowspan=4 class="width100">1) 서울 강북, 수도권 북부, 강원 영동지역, 인천, 부천, 김포</th>
                                <td class="border_left">양효충</td>
                                <td class="border_cen textleft">- 서울 : 용산구, 종로구, 중구<br>- 그룹사 전담</td>
                                <td>010-8653-8682</td>
                            </tr>
                            <tr>
                                <td class="border_left">김지수</td>
                                <td class="border_cen textleft">- 서울 : 성북구, 은평구, 중랑구, 동대문구<br>- 수도권 : 남양주, 고양, 파주, 의정부, 구리</td>
                                <td>010-2709-0719</td>
                            </tr>
                            <tr>
                                <td class="border_left">김효중</td>
                                <td class="border_cen textleft">- 서울 : 서대문구, 마포구, 성동구<br>- 수도권 : 강화, 부천, 인천광역시<br>- 홈플러스 전담</td>
                                <td>010-9689-0449</td>
                            </tr>
                            <tr>
                                <td class="border_left">김천수</td>
                                <td class="border_cen textleft">- 서울 : 노원구, 광진구, 도봉구, 강북구<br>- 수도권 : 김포, 양주, 가평, 동두천, 포천, 연천<br>- 강원 : 영동지역<br>(양구, 인제, 고성, 속초, 양양, 평창, 정선, 강릉, 동해, 삼척, 태백)</td>
                                <td>010-2032-1741</td>
                            </tr>
                            <tr>
                                <th rowspan=5 class="width100">1) 서울 강남, 수도권 남부, 강원 영서지역</th>
                                <td class="border_left">김민중</td>
                                <td class="border_cen textleft">지역 총괄(서울 강남권역, 수도권 남부권역, 강원 영서지역)</td>
                                <td>010-3116-0409</td>
                            </tr>
                            <tr>
                                <td class="border_left">주경호</td>
                                <td class="border_cen textleft">- 서울 : 강동, 송파<br>- 수도권 : 과천, 성남<br>- 강원 : 영서지역(철원, 화천, 춘천, 홍천, 횡성, 원주, 영월)</td>
                                <td>010-3786-8671</td>
                            </tr>
                            <tr>
                                <td class="border_left">홍석주</td>
                                <td class="border_cen textleft">- 서울 : 금천, 강남, 서초<br>- 수도권 : 광주, 수원, 안산, 안성, 오산, 용인, 평택, 화성	</td>
                                <td>010-8368-1625</td>
                            </tr>
                            <tr>
                                <td class="border_left">추희엽</td>
                                <td class="border_cen textleft">- 서울 : 관악, 구로, 동작, 영등포<br>- 수도권 : 광명, 시흥, 양평, 여주, 이천, 하남</td>
                                <td>010-6439-9693</td>
                            </tr>
                            <tr>
                                <td class="border_left">황원엽</td>
                                <td class="border_cen textleft">- 서울 : 강서, 양천<br>- 수도권 : 군포, 안양, 의왕</td>
                                <td>010-3499-8613</td>
                            </tr>
                        </table>                        
                    </li>
                    <li>
                        <p>② 영남지역</p>
                        <table>
                            <tr>
                                <th>구분</th>
                                <th>담당자</th>
                                <th>담당지역</th>
                                <th>연락처</th>
                            </tr>
                            <tr>
                                <th class="width100">1) 대구/경북권</th>
                                <td class="border_left">정욱진</td>
                                <td class="border_cen textleft">- 대구광역시, 경상북도 전지역</td>
                                <td>010-8571-0206</td>
                            </tr>
                            <tr>
                                <th>2) 부산/경남권</th>
                                <td class="border_left">김영언</td>
                                <td class="border_cen textleft">- 부산광역시, 울산광역시, 경상남도 전지역</td>
                                <td>010-8558-0777</td>
                            </tr>
                        </table>                        
                    </li>
                    <li>
                        <p>③ 충청호남, 제주지역</p>
                        <table>
                            <tr>
                                <th>구분</th>
                                <th>담당자</th>
                                <th>담당지역</th>
                                <th>연락처</th>
                            </tr>
                            <tr>
                                <th class="width100">1) 충청권</th>
                                <td class="border_left">김서환</td>
                                <td class="border_cen textleft">- 대전광역시, 충청남도, 충청북도, 세종시 전지역</td>
                                <td>010-9292-5975</td>
                            </tr>
                            <tr>
                                <th>2) 부산/경남권</th>
                                <td class="border_left">임성윤</td>
                                <td class="border_cen textleft">- 광주광역시, 전라남도, 전라북도, 제주도 전지역</td>
                                <td>010-7274-5336</td>
                            </tr>
                        </table>                        
                    </li>
                </ul>
                <h3>창업자금 대출안내</h3>
                <ul class="txt">
                    <li><span class="txt_title">상품명:신한 프랜차이즈론</span>
                        <ul>
                            <li>우량 프랜차이즈 가맹점 중 가맹점결제계좌를 신한은행으로 이용하시는 사장님께 최고 1억원까지 지원해 드리는 특화 대출상품 입니다.</li>
                        </ul>
                    </li>
                    <li><span class="txt_title">대상고객</span>
                        <ul>
                            <li>다음의 요건을 충족한 신용등급 BBB+이상의 개인사업자</li>
                            <li>1)당행이 선정한 프랜차이즈 가맹본부와 계약을 체결한 가맹점</li>
                            <li>2)신한카드 가맹점 결제계좌를 당행으로 지정</li>
                            <li>점포 임대차계약을 본인명의로 체결(직계존비속 명의도 가능)</li>
                        </ul>
                    </li>
                    <li><span class="txt_title">대출한도</span>
                        <ul>
                            <li>신용등급별 최고 1억원 이내</li>
                            <li>은행이 산정한 소요 운전자금 범위내</li>
                            <li>- 신규점:임차보증금, 주방기기 및 집기 인테리어 비용 등 소요자금 1/2범위 내</li>
                            <li>- 기존점:최근 3개월 매출액 또는 6개월 매출액의 1/2, 최근 1년 매출액의 1/4범위 내</li>
                        </ul>
                    </li>
                    <li><span class="txt_title">대출금리</span>
                        <ul>
                            <li>변동금리(최저 3.42%), (2017.09.01
                             기준)</li>
                            <li>- 실제대출 취급시 대출대상 기업의 안정성, 산업환경, 신용등급 등 추가요소에 따라 달라질 수 있음</li>
                        </ul>
                    </li>
                    <li><span class="txt_title">준비서류</span>
                        <ul>
                            <li>사업자등록증, 상가 임대차계약서 및 등기부등본 주민등록등본, 프랜차이즈 가맹점 증비서류, 매출액 확인자료, 기타 신용평가시 필요서류</li>
                            <li class="txt_sub">※ 대출 취급시 고객부담으로 인지대금(50%)등 부대비용과 대출상환시기 및 금액에 따라 중도상환수수료가 발생될 수 있습니다.</li>
                            <li class="txt_sub">※ 대출금리는 차주 신용도별 차등적용되며, 대출 만기 후 미상환시에는 여신거래약정에서 정한기간별 연체이율이 적용되며 신용정보관리대상 등록 등의 불이익을 받을 수 있습니다.</li>
                            <li class="txt_sub">※ 금융기관 신용관리대상자 등 여신부적격자에 대하여 대출이 제한될 수 있습니다.</li>
                            <li class="txt_sub">※ 기타 자세한 사항은 반드시 상품설명서 참조 또는 영업점 직원에게 문의하여 주시기 바랍니다.</li>
                        </ul>
                    </li>
                    <li><span class="txt_title">문의</span>
                        <ul>
                            <li>신한은행 서울롯데</li>
                            <li>-차장 이재천 02-777-7572, H 010-2806-5690</li>
                            <li>-부차장 유흥영 02-777-7571, H 010-2289-2078</li>
                        </ul>
                    </li>
                    
                    <li><span class="txt_title">기준일:2017.09 기준</span></li>
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