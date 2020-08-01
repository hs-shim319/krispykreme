<?php 
    include "../inc/adminsession.php";
    include "../../inc/dbcon.php";
    $sql="select * from menu order by idx desc;";
    $result=mysqli_query($con, $sql);
    $num=mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>메뉴관리 | 관리자페이지 | 크리스피크림도넛</title>
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
        function delete_check(a){
            var q=confirm("정말 삭제하시겠습니까?");
            if(q){
                location.href="delete.php?idx="+a;
            }
        };  
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
                <p class="add"><a href="add.php">+ 추가하기</a></p>
                <table cellspacing=0>
                    <tr class="titletr">
                        <td>NO</td>
                        <td>종류</td>
                        <td>이름</td>
                        <td>영어이름</td>
                        <td>가격</td>
                        <td>1회제공량</td>
                        <td>칼로리</td>
                        <td>나트륨</td>
                        <td>당류</td>
                        <td>지방</td>
                        <td>단백질</td>
                        <td>보기</td>
                        <td>수정</td>
                        <td>삭제</td>
                    </tr>
                    <?php 
                        for($i=1;$i<=$num;$i++){
                            $array=mysqli_fetch_array($result);
                    ?>
                    <tr>
                        <td><?php echo $num-$i+1; ?></td>
                        <td><?php echo $array["mtype"]; ?></td>
                        <td><?php echo $array["mname"]; ?></td>
                        <td><?php echo $array["engname"]; ?></td>
                        <td><?php echo $array["price"]; ?></td>
                        <td><?php echo $array["portionsize"]; ?></td>
                        <td><?php echo $array["kcal"]; ?></td>
                        <td><?php echo $array["na"]; ?></td>
                        <td><?php echo $array["sugar"]; ?></td>
                        <td><?php echo $array["fat"]; ?></td>
                        <td><?php echo $array["protein"]; ?></td>
                        <td><a href="view.php?idx=<?php echo $array['idx'];?>" class="tdbtn">보기</a></td>
                        <td><a href="edit.php?idx=<?php echo $array['idx'];?>" class="tdbtn">수정</a></td>
                        <td><a href="#none" onclick="delete_check(<?php echo $array['idx'];?>)" class="tdbtn">삭제</a></td>
                    </tr>
                    <?php } ?>
                </table>
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