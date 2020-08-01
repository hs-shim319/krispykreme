<?php 
    include "inc/session.php"; 
    include "inc/dbcon.php";
    $sql = "select * from store";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>매장찾기 | STORE | 크리스피크림도넛</title>
    <link rel="stylesheet" type="text/css" href="style/common.css">
    <link rel="stylesheet" type="text/css" href="style/find_store.css">
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript" src="js/logout.js"></script>
    <script type="text/javascript">
        window.onload=function(){
            var call=document.getElementById("call"); $("#aall").css({background:'#d0112b',color:'#fff',borderColor:'#d0112b'});
        }
        function countryall(){
            if(call.checked){
                call.checked=false;
                $("#aall").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }else{
                call.checked=true;                
                $("#aall").css({background:'#d0112b',color:'#fff',borderColor:'#d0112b'});
                cs.checked=false;
                cgw.checked=false;
                cgg.checked=false;
                ckn.checked=false;
                ckb.checked=false;
                cgj.checked=false;
                cdg.checked=false;
                cdj.checked=false;
                cbs.checked=false;
                cus.checked=false;
                cic.checked=false;
                cjn.checked=false;
                cjb.checked=false;
                cjj.checked=false;
                ccn.checked=false;
                ccb.checked=false;
                csj.checked=false;
                $("#as,#agw,#agg,#akn,#akb,#agj,#adg,#adj,#abs,#aus,#aic,#ajn,#ajb,#ajj,#acn,#acb,#asj").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }
        }
        function countrys(){
            var cs=document.getElementById("cs");
            if(cs.checked){
                cs.checked=false; $("#as").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }else{
                cs.checked=true;               
                $("#as").css({background:'#d0112b',color:'#fff',borderColor:'#d0112b'});
                call.checked=false; $("#aall").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});                
            }
        }
        function countrygw(){
            var cgw=document.getElementById("cgw");
            if(cgw.checked){
                cgw.checked=false; $("#agw").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }else{
                cgw.checked=true;
                $("#agw").css({background:'#d0112b',color:'#fff',borderColor:'#d0112b'});
                call.checked=false; $("#aall").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }
        }
        function countrygg(){
            var cgg=document.getElementById("cgg");
            if(cgg.checked){
                cgg.checked=false; $("#agg").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }else{
                cgg.checked=true;
                $("#agg").css({background:'#d0112b',color:'#fff',borderColor:'#d0112b'});
                call.checked=false; $("#aall").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }
        }
        function countrykn(){
            var ckn=document.getElementById("ckn");
            if(ckn.checked){
                ckn.checked=false; $("#akn").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }else{
                ckn.checked=true;
                $("#akn").css({background:'#d0112b',color:'#fff',borderColor:'#d0112b'});
                call.checked=false; $("#aall").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }
        }
        function countrykb(){
            var ckb=document.getElementById("ckb");
            if(ckb.checked){
                ckb.checked=false; $("#akb").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }else{
                ckb.checked=true;
                $("#akb").css({background:'#d0112b',color:'#fff',borderColor:'#d0112b'});
                call.checked=false; $("#aall").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }
        }
        function countrygj(){
            var cgj=document.getElementById("cgj");
            if(cgj.checked){
                cgj.checked=false; $("#agj").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }else{
                cgj.checked=true;
                $("#agj").css({background:'#d0112b',color:'#fff',borderColor:'#d0112b'});
                call.checked=false; $("#aall").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }
        }
        function countrydg(){
            var cdg=document.getElementById("cdg");
            if(cdg.checked){
                cdg.checked=false; $("#adg").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }else{
                cdg.checked=true;
                $("#adg").css({background:'#d0112b',color:'#fff',borderColor:'#d0112b'});
                call.checked=false; $("#aall").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }
        }
        function countrydj(){
            var cdj=document.getElementById("cdj");
            if(cdj.checked){
                cdj.checked=false; $("#adj").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }else{
                cdj.checked=true;
                $("#adj").css({background:'#d0112b',color:'#fff',borderColor:'#d0112b'});
                call.checked=false; $("#aall").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }
        }
        function countrybs(){
            var cbs=document.getElementById("cbs");
            if(cbs.checked){
                cbs.checked=false; $("#abs").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }else{
                cbs.checked=true;
                $("#abs").css({background:'#d0112b',color:'#fff',borderColor:'#d0112b'});
                call.checked=false; $("#aall").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }
        }
        function countryus(){
            var cus=document.getElementById("cus");
            if(cus.checked){
                cus.checked=false; $("#aus").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }else{
                cus.checked=true;
                $("#aus").css({background:'#d0112b',color:'#fff',borderColor:'#d0112b'});
                call.checked=false; $("#aall").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }
        }
        function countryic(){
            var cic=document.getElementById("cic");
            if(cic.checked){
                cic.checked=false; $("#aic").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }else{
                cic.checked=true;
                $("#aic").css({background:'#d0112b',color:'#fff',borderColor:'#d0112b'});
                call.checked=false; $("#aall").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }
        }
        function countryjn(){
            var cjn=document.getElementById("cjn");
            if(cjn.checked){
                cjn.checked=false; $("#ajn").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }else{
                cjn.checked=true;
                $("#ajn").css({background:'#d0112b',color:'#fff',borderColor:'#d0112b'});
                call.checked=false; $("#aall").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }
        }
        function countryjb(){
            var cjb=document.getElementById("cjb");
            if(cjb.checked){
                cjb.checked=false; $("#ajb").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }else{
                cjb.checked=true;
                $("#ajb").css({background:'#d0112b',color:'#fff',borderColor:'#d0112b'});
                call.checked=false; $("#aall").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }
        }
        function countryjj(){
            var cjj=document.getElementById("cjj");
            if(cjj.checked){
                cjj.checked=false; $("#ajj").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }else{
                cjj.checked=true;
                $("#ajj").css({background:'#d0112b',color:'#fff',borderColor:'#d0112b'});
                call.checked=false; $("#aall").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }
        }
        function countrycn(){
            var ccn=document.getElementById("ccn");
            if(ccn.checked){
                ccn.checked=false; $("#acn").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }else{
                ccn.checked=true;
                $("#acn").css({background:'#d0112b',color:'#fff',borderColor:'#d0112b'});
                call.checked=false; $("#aall").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }
        }
        function countrycb(){
            var ccb=document.getElementById("ccb");
            if(ccb.checked){
                ccb.checked=false; $("#acb").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }else{
                ccb.checked=true;
                $("#acb").css({background:'#d0112b',color:'#fff',borderColor:'#d0112b'});
                call.checked=false; $("#aall").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }
        }
        function countrysj(){
            var csj=document.getElementById("csj");
            if(csj.checked){
                csj.checked=false; $("#asj").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }else{
                csj.checked=true;
                $("#asj").css({background:'#d0112b',color:'#fff',borderColor:'#d0112b'});
                call.checked=false; $("#aall").css({background:'#fff',color:'#222',borderColor:'#e0e0e0'});
            }
        }
        function form_reset(){
            document.store_form.submit();
            cs.checked=false;
            cgw.checked=false;
            cgg.checked=false;
            ckn.checked=false;
            ckb.checked=false;
            cgj.checked=false;
            cdg.checked=false;
            cdj.checked=false;
            cbs.checked=false;
            cus.checked=false;
            cic.checked=false;
            cjn.checked=false;
            cjb.checked=false;
            cjj.checked=false;
            ccn.checked=false;
            ccb.checked=false;
            csj.checked=false;
        }
        
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
                <a href="#none">STORE</a>
                <ul class="depth1_menu">
                    <li><a href="newmenu_list.php">MENU</a></li>
                    <li><a href="homeservice.php"><span class="currently">STORE</span></a></li>
                    <li><a href="event_list.php">EVENT</a></li>
                    <li><a href="dougnuts_theater.php">BRAND</a></li>
                    <li><a href="notice_list.php">CUSTOMER</a></li>
                </ul>
            </li>
            <li class="depth2"> 
                <a href="#none">매장찾기</a>
                <ul class="depth2_menu">
                    <li><a href="homeservice.php">홈 서비스</a></li>
                    <li><a href="find_store.php"><span class="currently">매장찾기</span></a></li>
                    <li><a href="store_merchants.php">가맹점모집</a></li>
                </ul>
            </li>
        </ul>
            </section></div>
    </header>
    
    <main class="content" id="content">
            <div class="title">
                <div class="title_txt">
                    <h2>매장찾기</h2>
                    <p>달콤한 크리스피 크림 도넛이 생각나세요? 지금 가장 가까운 매장을 찾아보세요.</p>
                </div>
            </div>
            <div class="store_con">
            <div class="store_select">
                <form name="store_form" action="find_store_sel.php" method="post">
                    <span class="txt">지역선택</span>
                    <a href="#none" onclick="countryall()" id="aall">전체</a>
                    <input type="checkbox" checked id="call" name="call" style="display:none" value="y">
                    <a href="#none" onclick="countrys()" id="as">서울</a>
                    <input type="checkbox" id="cs" name="cs" style="display:none" value="y">
                    <a href="#none" onclick="countrygw()" id="agw">강원</a>
                    <input type="checkbox" id="cgw" name="cgw" style="display:none" value="y">
                    <a href="#none" onclick="countrygg()" id="agg">경기</a>
                    <input type="checkbox" id="cgg" name="cgg" style="display:none" value='y'>
                    <a href="#none" onclick="countrykn()" id="akn">경남</a>
                    <input type="checkbox" id="ckn" name="ckn" style="display:none" value='y'>
                    <a href="#none" onclick="countrykb()" id="akb">경북</a>
                    <input type="checkbox" id="ckb" name="ckb" style="display:none" value='y'>
                    <a href="#none" onclick="countrygj()" id="agj">광주</a>
                    <input type="checkbox" id="cgj" name="cgj" style="display:none" value='y'>
                    <a href="#none" onclick="countrydg()" id="adg">대구</a>
                    <input type="checkbox" id="cdg" name="cdg" style="display:none" value='y'>
                    <a href="#none" onclick="countrydj()" id="adj">대전</a>
                    <input type="checkbox" id="cdj" name="cdj" style="display:none" value='y'>
                    <a href="#none" onclick="countrybs()" id="abs">부산</a>
                    <input type="checkbox" id="cbs" name="cbs" style="display:none" value='y'>
                    <a href="#none" onclick="countryus()" id="aus">울산</a>
                    <input type="checkbox" id="cus" name="cus" style="display:none" value='y'>
                    <a href="#none" onclick="countryic()" id="aic">인천</a>
                    <input type="checkbox" id="cic" name="cic" style="display:none" value='y'>
                    <a href="#none" onclick="countryjn()" id="ajn">전남</a>
                    <input type="checkbox" id="cjn" name="cjn" style="display:none" value='y'>
                    <a href="#none" onclick="countryjb()" id="ajb">전북</a>
                    <input type="checkbox" id="cjb" name="cjb" style="display:none" value='y'>
                    <a href="#none" onclick="countryjj()" id="ajj">제주</a>
                    <input type="checkbox" id="cjj" name="cjj" style="display:none" value='y'>
                    <a href="#none" onclick="countrycn()" id="acn">충남</a>
                    <input type="checkbox" id="ccn" name="ccn" style="display:none" value='y'>
                    <a href="#none" onclick="countrycb()" id="acb">충북</a>
                    <input type="checkbox" id="ccb" name="ccb" style="display:none" value='y'>
                    <span class="txt">매장명</span>
                    <input type="text" id="sname" name="sname">
<!--
                    <p class="checkbox"><input type="checkbox" name="hotnow" id="hotnow" value="y"><label for="hotnow" class="hotnow">HOT NOW</label>
                    <input type="checkbox" name="movie" id="movie" value="y"><label for="movie" class="movie">도넛극장</label></p>
-->
                    <button type="button" onclick="form_reset()">검색</button>
                </form>
            </div>
            <p class="store_num"><span class="redtxt"><?php echo $num;?></span>개의 매장</p>
            <?php for($i=1;$i<=$num;$i++){ 
                $array=mysqli_fetch_array($result);
            ?>
        
            <div class="store_list"><!--전체 매장정보-->
                <a href="#none">
                    <img src="images/store/<?php echo $array['img'];?>" alt="<?php echo $array["name"];?>">
                    <p class="store_name"><?php echo $array["name"];?></p>
                    <p class="hotnow">HOT Light Hour : <?php echo $array['hotnow'];?></p>
                    <p class="movie"><?php if($array['movie']=='y'){echo "도넛극장";}?></p>
                    <p>Tel.<?php echo $array["tel"];?></p> 
                    <p><?php echo $array["stime"];?></p>
                </a>
            </div>
            <?php } ?>
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