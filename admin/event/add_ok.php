<?php

$title=$_POST["title"];
$list_img=$_POST["list_img"];
$img=$_POST["img"];
$sdate=$_POST["sdate"];
$fdate=$_POST["fdate"];
$wdate=date("Y-m-d");

include "../../inc/dbcon.php";

//쿼리문작성
$sql = "insert into event(type, title, list_img, img, wdate, sdate, fdate) values('event','$title', '$list_img', '$img', '$wdate', '$sdate' ,'$fdate');";
$sql2 = "delete from event where title='';";

//echo $sql;       //쿼리문 출력(안될 때 쿼리문 출력해보기)
//return false;     //여기까지만 실행

mysqli_query($con,$sql);
mysqli_query($con,$sql2);

//경로 변경
echo "
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <script type='text/javascript'>
        alert('이벤트 추가가 완료되었습니다.');
        location.href='list.php';
    </script>
";

?>
