<?php

$idx=$_POST["idx"];
$title=$_POST["title"];
$list_img=$_POST["list_img"];
$img=$_POST["img"];

include "../../inc/dbcon.php";

//쿼리문작성
$sql = "update event set title='$title', list_img='$list_img', img='$img', sdate='$sdate', fdate='$fdate' where idx=$idx;";

//echo $sql;       //쿼리문 출력(안될 때 쿼리문 출력해보기)
//return false;     //여기까지만 실행

mysqli_query($con,$sql);

//경로 변경
echo "
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <script type='text/javascript'>
        alert('신메뉴공지 수정이 완료되었습니다.');
        location.href='list.php';
    </script>
";

?>
