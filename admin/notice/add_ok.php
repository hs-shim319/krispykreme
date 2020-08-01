<?php

$title=$_POST["title"];
$content=$_POST["content"];
$wdate=date("Y-m-d");

include "../../inc/dbcon.php";

//쿼리문작성
$sql = "insert into notice(title, content, wdate) values('$title', '$content', '$wdate');";
$sql2 = "delete from notice where title='';";

//echo $sql;       //쿼리문 출력(안될 때 쿼리문 출력해보기)
//return false;     //여기까지만 실행

mysqli_query($con,$sql);
mysqli_query($con,$sql2);

//경로 변경
echo "
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <script type='text/javascript'>
        alert('공지사항 추가가 완료되었습니다.');
        location.href='list.php';
    </script>
";

?>
