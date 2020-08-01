<?php 
    include "../inc/adminsession.php";
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>공지사항관리 | 관리자페이지 | 크리스피크림도넛</title>
    <link rel="stylesheet" type="text/css" href="../../style/common.css">
    <link rel="stylesheet" type="text/css" href="../../style/admin.css">
    <?php
        if($s_id != "admin" || $idx != 1){
            echo"
                <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
                <script type=\"text/javascript\">
                    alert('잘못된 접근입니다.');
                    location.href='../../index.php';
                </script>
            ";
            return false;
        };
    ?>
    <script type="text/javascript" src="../js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../js/common.js"></script>
    <script type="text/javascript">
        function form_check(){
            var mtype=document.getElementById("mtype");
            var mname=document.getElementById("mname");
            var engname=document.getElementById("engname");
            var price=document.getElementById("price");
            var portionsize=document.getElementById("portionsize");
            var kcal=document.getElementById("kcal");
            var na=document.getElementById("na");
            var sugar=document.getElementById("sugar");
            var fat=document.getElementById("fat");
            var protein=document.getElementById("protein");
            var img=document.getElementById("img");
            
            if(mtype.value==''){
                alert('메뉴타입을 입력하세요');
                mtype.focus();
                return false;
            }
            if(mname.value==''){
                alert('메뉴명을 입력하세요');
                mname.focus();
                return false;
            }
            if(engname.value==''){
                alert('영어메뉴명을 입력하세요');
                engname.focus();
                return false;
            }
            if(price.value==''){
                alert('가격을 입력하세요');
                price.focus();
                return false;
            }
            if(portionsize.value==''){
                alert('1회제공량값을 입력하세요');
                portionsize.focus();
                return false;
            }
            if(kcal.value==''){
                alert('칼로리값을 입력하세요');
                kcal.focus();
                return false;
            }
            if(na.value==''){
                alert('나트륩값을 입력하세요');
                na.focus();
                return false;
            }
            if(sugar.value==''){
                alert('당류값을 입력하세요');
                sugar.focus();
                return false;
            }
            if(fat.value==''){
                alert('지방값 입력하세요');
                fat.focus();
                return false;
            }
            if(protein.value==''){
                alert('단백질값을 입력하세요');
                protein.focus();
                return false;
            }
            if(img.value==''){
                alert('이미지명을 입력하세요');
                img.focus();
                return false;
            }
            document.add_form.submit();
        }
        function logout_check(){
            var q=confirm("정말 로그아웃하시겠습니까?");
            if(q){
                location.href="../../login/logout.php";
            }
        };
    </script>
</head>
<body>
    <header id="header" class="header">
        <div class="admin_header_bottom_wrap">
            <div class="header_bottom">
                <h1><a href="../../index.php">크리스피크림도넛</a></h1>
            </div><!--header_bottom-->
        </div><!--header_bottom_wrap-->
            <section class="admin_menu">
                <h2 class="hide_text">관리자메뉴</h2>
                    <ul class="admin_menu_list">
                        <?php
                        if(!$s_id){
                            echo "<li class=\"tm_login\"><a href=\"../../login/login.php\">로그인</a></li>";
                            echo "<li class=\"tm_join\"><a href=\"....//members/join_step1.php\">회원가입</a></li>";
                        }else{
                            echo "<li class=\"tm_login\"><a href=\"#none\" onclick=\"logout_check()\">로그아웃</a></li>";
                            echo "<li class=\"tm_join\"><a href=\"../admin.php\">관리자페이지</a></li>";
                            echo "<li class=\"tm_join\"><a href=\"../../index.php\">메인페이지</a></li>";
                        }
                        ?>
                    </ul>
            </section><!--top_menu-->
    </header>
    
    <div id="content" class="content">
            <main class="admin_content">
                <div class="admin_content_menu">
                <h2 class="hide_text">홈페이지 관리</h2>
                <ul>
                    <li><a href="../members/list.php">회원관리</a></li>
                    <li class="currently"><a href="../menu/list.php">메뉴관리</a></li>
                    <li><a href="../newmenu/list.php">신메뉴관리</a></li>
                    <li><a href="../notice/list.php">공지사항관리</a></li>
                    <li><a href="../event/list.php">이벤트관리</a></li>
                </ul>
                </div>
                <div class="add">
                <form name="add_form" action="add_ok.php" method="post">
                    <p><label for="mtype">메뉴타입</label> <input type="text" name="mtype" id="mtype" placeholder="doungnut / bev / ice"></p>
                    <p><label for="mname">이름</label> <input type="text" name="mname" id="mname"></p>
                    <p><label for="engname">영어이름</label> <input type="text" name="engname" id="engname"></p>
                    <p><label for="price">가격</label> <input type="text" name="price" id="price"></p>
                    <p><label for="portionsize">1회 제공량</label> <input type="text" name="portionsize" id="portionsize"></p>
                    <p><label for="kcal">칼로리</label> <input type="text" name="kcal" id="kcal"></p>
                    <p><label for="na">나트륨</label> <input type="text" name="na" id="na" placeholder="g / %"></p>
                    <p><label for="sugar">당류</label> <input type="text" name="sugar" id="sugar" placeholder="g / %"></p>
                    <p><label for="fat">지방</label> <input type="text" name="fat" id="fat" placeholder="g / %"></p>
                    <p><label for="protein">단백질</label> <input type="text" name="protein" id="protein" placeholder="g / %"></p>
                    <p><label for="size">사이즈</label> <input type="text" name="size" id="size"></p>
                    <p><label for="img">이미지</label> <input type="text" name="img" id="img" placeholder=".png"></p>
                    <div class="btn">
                    <button type="button" onclick="form_check()">확인</button>
                    <button type="button" onclick="javascript:history.back()" class="cancel">취소</button>
                    </div>
                </form>
                </div>
            </main>
    </div>
       
    <div class="footer_wrap">
            <footer id="footer">
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
            </footer>
        </div><!--footer_wrap-->
</body>
</html>