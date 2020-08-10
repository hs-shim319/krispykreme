<?php 
    include "../inc/session.php"; 
    include "../inc/dbcon.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="images/favicon.ico">
    <title>FAQ | 고객의 소리 | 크리스피크림도넛</title>
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
            <h2 class="title">FAQ</h2>
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
    
    <main id="content" class="faq">
            <p>가장 많이 궁금해 하시는 질문에 대한 답변을 모았습니다.</p>
            <div class="faq_list">
                <ul>
                    <li class="question">
                    <a href="#none"><span class="q">Q. </span>크리스피 크림의 뜻은 뭔가요?<span class="more">∨</span></a></li>
                    <li class="answer"><span class="a">A. </span>1937년, 크리스피 크림의 설립자인 버논 루돌푸가 도넛의 바삭한 겉부분과말랑한 속을 뜻하는 이름으로 크리스피 크림(crispy cream) 이라고 지었습니다.<span class="line">그러나 사람들의 이목을 끌고 기억에 남게끔 크리스피와 크림의 스펠링을 일부러틀리게 표기하여 지금의 Krispy Kreme이 되었습니다.</span></li>
                </ul>
                <ul>
                    <li class="question">
                    <a href="#none"><span class="q">Q. </span>크리스피 크림이 뭐하는 곳인가요?<span class="more">∨</span></a></li>
                    <li class="answer"><span class="a">A. </span>answer1937년 미국에서 탄생되어 전 세계가 신선하고 달콤한 도넛과 도넛만큼 맛있는 커피를 즐길 수 있는 브랜드 입니다.<span class="line">한국에는 2004년 12월에 아시아 최초인 신촌 1호점이 등장했답니다.</span></li>
                </ul>
                <ul>
                    <li class="question">
                    <a href="#none"><span class="q">Q. </span>매장이 많지 않은데요, 왜 그런건가요?<span class="more">∨</span></a></li>
                    <li class="answer"><span class="a">A. </span>한국 시장을 오픈한지 얼마되지 않아 매장수가 적고, 고객님들께 편안하게 다가가기 위하여 좋은 위치, 큰매장으로 오픈하기 때문에 현재 수도권에 매장이 집중되어 있습니다.<span class="line">앞으로 더 많은 고객님께 찾아가기 위하여 지방으로 확대할 계획입니다.</span></li>
                </ul>
                <ul>
                    <li class="question">
                    <a href="#none"><span class="q">Q. </span>매장에서 주문을 어떻게 해야 하나요?<span class="more">∨</span></a></li>
                    <li class="answer"><span class="a">A. </span>크리스피 크림의 모든 주문은 도넛 진열대 앞에서 해주시면 됩니다.<span class="line">도넛 진열대 앞에서 진열대의 이름표를 보시고 골라주시면 저희 직원이 정성껏 담아 드립니다.</span></li>
                </ul>
                <ul>
                    <li class="question">
                    <a href="#none"><span class="q">Q. </span>배달도 가능한가요?<span class="more">∨</span></a></li>
                    <li class="answer"><span class="a">A. </span>매장에 따라 배달이 가능하지만, 10더즌 이상을 기준으로 선물을 보내거나 하는 경우 당사가 배달 해드립니다. 크리스피 크림 도넛은 학부모님께서 야간자율학습을 하는 자녀들을 위해 학교로 주문하거나, 회사나 종교단체 내 각종 행사 등에 사용하기 위해 단체 주문을 하시는 경우가 많습니다.<span class="line">가까운 점포로 문의 부탁드립니다.</span></li>
                </ul>
                <ul>
                    <li class="question">
                    <a href="#none"><span class="q">Q. </span>크리스피 크림 도넛은 전 세계가 공통적인 제품만 파나요?<span class="more">∨</span></a></li>
                    <li class="answer"><span class="a">A. </span>세계인이 즐기는 도넛과 각 국가적 특성에 맞게 개발된 도넛이 있습니다.<span class="line">매달 조금씩 품목이 바뀌고 있는 것은 새로운 제품으로 고객님께 보답 드리고자 하는 크리스피 크림의 노력입니다.</span></li>
                </ul>
                <ul>
                    <li class="question">
                    <a href="#none"><span class="q">Q. </span>도넛 구입 후, 얼마동안 보관할 수 있나요?<span class="more">∨</span></a></li>
                    <li class="answer"><span class="a">A. </span>구입 후 당일로 드시는 것이 바람직합니다.<span class="line">불가피하여 장기간 보관할 경우 냉동보관을 요하며 제조가공제품의 특성 및 각 가정 별 냉장고 온도 차이를 감안할 때 정확한 보관 가능 일자를 말씀 드리기는 어렵습니다.</span><span class="line">최대한 당일 섭취하는 것을 다시 한 번 권장해 드립니다.</span></li>
                </ul>
                <ul>
                    <li class="question">
                    <a href="#none"><span class="q">Q. </span>아침에 진열된 도넛은 전날 만든건가요?<span class="more">∨</span></a></li>
                    <li class="answer"><span class="a">A. </span>대표적인 도넛인 오리지널 글레이즈드는 당일 생산된 제품만을 판매하며, 어소티드 도넛의 경우 당일 혹은 전날 야간을 이용하여 생산됩니다.<span class="line">또한 오리지널 글레이즈드는 생산 후 12시간, 어소티드 도넛은 24시간, 케익 도넛의 경우 48시간이 지나면 폐기하도록 규정되어 있습니다.</span><span class="line">안심하시고 달콤하고 부드러운 도넛을 즐기시기 바랍니다.</span></li>
                </ul>
                <ul>
                    <li class="question">
                    <a href="#none"><span class="q">Q. </span>재가입하려면 어떻게 하죠?<span class="more">∨</span></a></li>
                    <li class="answer"><span class="a">A. </span>탈퇴 이전에 사용하신 회원님의 아디는 1년간 본인 혹은 타인의 사용이 불가합니다.<span class="line">탈퇴 3개월 이후 다른 아이디(이메일)로 언제든지 가입이 가능합니다.</span><span class="line">탈퇴 이전 보유했던 쿠폰은 복구되지 않으니 이점 유념하시길 바랍니다.</span></li>
                </ul>
                <ul>
                    <li class="question">
                    <a href="#none"><span class="q">Q. </span>오리지널 글레이즈드에 들어가는 믹스에 탈지분유가 들어있는데 혹시 멜라민이 들어있지는 않나요?<span class="more">∨</span></a></li>
                    <li class="answer"><span class="a">A. </span>크리스피크림의 오리지널 글레이즈드에 사용되는 믹스에 포함되어 있는 전지분유는 미국산 제품입니다.<span class="line">또한 자체 분석 결과, 믹스에서 멜라민 성분이 검출되지 않았으니 안심하고 드시기 바랍니다.</span></li>
                </ul>
                <ul>
                    <li class="question">
                    <a href="#none"><span class="q">Q. </span>크리스피크림 도넛에 멜라민이 들어있나요?<span class="more">∨</span></a></li>
                    <li class="answer"><span class="a">A. </span>크리스피크림은 도넛 제품에 사용하는 모든 우유 유래 원자재(분유, 우유, 카제인나트륨 등)로 중국산 제품을 사용하고 있지 않습니다.<span class="line">크리스피크림 도넛은 멜라민 검출 위험이 없으니, 안심하고 드시기 바랍니다.</span></li>
                </ul>
                <ul>
                    <li class="question">
                    <a href="#none"><span class="q">Q. </span>비밀번호와 아이디를 잊어버렸어요.<span class="more">∨</span></a></li>
                    <li class="answer"><span class="a">A. </span>로그인 페이지에서 메일 주소/비밀번호 찾기를 선택하세요.<span class="line">이메일 주소는 이름과 휴대폰번호를 기입하시면 바로 확인이 가능하시며, 비밀번호의 경우 이름과 휴대폰번호, 이메일을 입력하시면 아이디로 입력하여 주신 이메일로 임시 비밀번호가 전송됩니다.</span></li>
                </ul>
                <ul>
                    <li class="question">
                    <a href="#none"><span class="q">Q. </span>탈퇴하려면 어떻게 하죠?<span class="more">∨</span></a></li>
                    <li class="answer"><span class="a">A. </span>홈페이지 마이페이지 > 좌측 하단에 위치한 "회원탈퇴"에서 본인께서 직접 탈퇴하실 수 있습니다.<span class="line">탈퇴 하신 후 보유하고 계신 포인트 및 쿠폰은 모두 사라지오니 이점 유념하시길 바랍니다.</span></li>
                </ul>
                <ul>
                    <li class="question">
                    <a href="#none"><span class="q">Q. </span>회원정보 수정에 관하여<span class="more">∨</span></a></li>
                    <li class="answer"><span class="a">A. </span>"개인정보수정" 으로 들어가시면 고객님의 정보를 수정 및 변경하실 수 있습니다.<span class="line">직접 변경이 가능한 부분 : 패스워드, 주소, 전화번호</span><span class="line">직접 변경이 불가능한 부분 : 이름,이메일</span></li>
                </ul>
                <ul>
                    <li class="question">
                    <a href="#none"><span class="q">Q. </span>영업시간은 어떻게 되나요?<span class="more">∨</span></a></li>
                    <li class="answer"><span class="a">A. </span>각 매장별 영업시간은 매장정보에 보시면 각 매장별 정보에서 확인하실 수 있습니다.</li>
                </ul>
                <ul>
                    <li class="question">
                    <a href="#none"><span class="q">Q. </span>따뜻한 오리지널 글레이즈드 나오는 시간은 언제인가요?<span class="more">∨</span></a></li>
                    <li class="answer"><span class="a">A. </span>각 매장별 HOT NOW 정보에 보시면 각 매장별 정보에서 확인하실 수 있습니다.</li>
                </ul>
                <ul>
                    <li class="question">
                    <a href="#none"><span class="q">Q. </span>불만사항 접수는 어디서 할 수 있나요?<span class="more">∨</span></a></li>
                    <li class="answer"><span class="a">A. </span>1. 직접 매장에 접수 하실 수 있습니다.<span class="line">2. 080-010-4700으로 전화주세요</span><span class="line">3. 1:1 고객의 소리 접수해주세요.</span></li>
                </ul>
                <ul>
                    <li class="question">
                    <a href="#none"><span class="q">Q. </span>도넛의 종류는 어떻게 되나요?<span class="more">∨</span></a></li>
                    <li class="answer"><span class="a">A. </span><a href="dougnuts_list.php">[제품LIST정보 바로가기]</a></li>
                </ul>
                <ul>
                    <li class="question">
                    <a href="#none"><span class="q">Q. </span>오리지널 글레이즈드 도넛을 집에서도 매장에서 갓 나온 따뜻한 도넛처럼 먹을 수는 없나요?<span class="more">∨</span></a></li>
                    <li class="answer"><span class="a">A. </span>도넛을 전자레인지에 넣고(1개 기준) 8초 정도 돌린 후 꺼내 드시면 부드럽고 따뜻한 오리지널 글레이즈드를 집에서도 즐기실 수 있습니다.</li>
                </ul>
                <ul>
                    <li class="question">
                    <a href="#none"><span class="q">Q. </span>도넛의 유통기한과 보관방법은 어떻게 되나요?<span class="more">∨</span></a></li>
                    <li class="answer"><span class="a">A. </span>크리스피 크림의 모든 도넛은 당일 생산, 당일 판매를 원칙으로 하고 있으며 직사광선을 받지 않는 서늘한 곳에 보관하여 구매일 이내에 드시는 것이 가장 좋습니다.</li>
                </ul>
                <ul>
                    <li class="question">
                    <a href="#none"><span class="q">Q. </span>크리스피 크림 도넛은 어떤 유지를 사용하나요?<span class="more">∨</span></a></li>
                    <li class="answer"><span class="a">A. </span>크리스피 크림의 전 매장에서 사용하는 유지는 하이올레익 해바라기유가 50%이상 함유된 유지를 사용하고 있습니다.<span class="line">하이올레익 해바라기유는 단일불포화 지방산이 80%이상이고 포화지방산은 10%밖에 되지 않으며 트랜스지방이 '0'인 웰빙 유지로 크리스피크림도넛 고유의 맛을 유지하면서도 전체적인 맛과 식감은 더욱 좋아진 크리스피 크림만의 도넛을 즐기실 수 있습니다.</span></li>
                </ul>
                <ul>
                    <li class="question">
                    <a href="#none"><span class="q">Q. </span>크리스피 크림 도넛에 사용되는 주 원재료의 원산지는?<span class="more">∨</span></a></li>
                    <li class="answer"><span class="a">A. </span>크리스피 크림 도넛에 가장 많이 사용되는 믹스의 원산지는 미국산입니다.</li>
                </ul>
                <ul>
                    <li class="question">
                    <a href="#none"><span class="q">Q. </span>크리스피 크림 도넛의 특징은?<span class="more">∨</span></a></li>
                    <li class="answer"><span class="a">A. </span>1. 크리스피 크림 도넛의 가장 큰 특징은 입안에 넣으면 사르르 녹는 부드러운 질감입니다.<span class="line">(핫라잇이 보이시면 부드럽고 따뜻한 오리지널글레이즈드를 직접 경험해보세요!)</span><span class="line">2. 엄선된 고급 원재료만을 사용하며, 합성착색료, 합성보존료를 절대 사용하지 않습니다.</span><span class="line">3. 치즈, 유기농 녹차, 초콜릿, 과일 등의 테마로 다양한 종류의 도넛을 제공하고 있습니다.</span></li>
                </ul>
                <ul>
                    <li class="question">
                    <a href="#none"><span class="q">Q. </span>위생관리는 어떻게 하나요?<span class="more">∨</span></a></li>
                    <li class="answer"><span class="a">A. </span>크리스피 크림 도넛은 롯데그룹 중앙연구소(KOLAS 인증기관)와 연계하여 제작된 전문적인 위생매뉴얼을 통해 점포위생점검을 진행하고 있습니다.<span class="line">점포의 환경, 시설, 근무자 등의 위생상태 및 규격 준수 여부를 수시로 점검하여 위험요소를 사전 예방하며, 제품 품질 검사를 통해 소비자에게 안전한 제품이 전달되도록 노력하고 있습니다.</span><span class="line">또한 매월 실시되는 크리스피크림 도넛 관리자 위생교육을 통해 위생관련 지식을 습득함으로써 전 근무자를 위생관리 전문인으로 양성하고 있습니다.</span></li>
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