<?php 
    include "../inc/adminsession.php";
    include "../../inc/dbcon.php";
    $idx=$_GET["idx"];
    $sql = "select * from menu where idx='$idx';";
    $result = mysqli_query($con, $sql);
    $array=mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>이벤트관리 | 관리자페이지 | 크리스피크림도넛</title>
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
                <div class="view">
                    <p><span class="view_txt">메뉴타입</span><span class="view_input"><?php echo $array['mtype'];?></span></p>
                    <p><span class="view_txt">이름</span><span class="view_input"><?php echo $array['mname'];?></span></p>
                    <p><span class="view_txt">영어이름</span><span class="view_input"><?php echo $array['engname'];?></span></p>
                    <p><span class="view_txt">가격</span><span class="view_input"><?php echo $array['price'];?></span></p>
                    <p><span class="view_txt">1회 제공량</span><span class="view_input">value="<?php echo $array['portionsize'];?></span></p>
                    <p><span class="view_txt">칼로리</span><span class="view_input"><?php echo $array['kcal'];?></span></p>
                    <p><span class="view_txt">나트륨</span><span class="view_input"><?php echo $array['na'];?></span></p>
                    <p><span class="view_txt">당류</span><span class="view_input"><?php echo $array['sugar'];?></span></p>
                    <p><span class="view_txt">지방</span><span class="view_input"><?php echo $array['fat'];?></span></p>
                    <p><span class="view_txt">단백질</span><span class="view_input"><?php echo $array['protein'];?></span></p>
                    <p><span class="view_txt">사이즈</span><span class="view_input"><?php echo $array['size'];?></span></p>
                    <p><span class="view_txt">이미지</span><span class="view_input"><?php echo $array['img'];?></span></p>
                    <div class="btn">
                    <a href="edit.php?idx=<?php echo $array['idx'];?>">수정하기</a>
                    <a onclick="javascript:history.back()" class="cancel">취소</a>
                    </div>
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