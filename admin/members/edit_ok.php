<?php

$idx=$_POST["idx"];
$uid=$_POST["uid"];
$uname=$_POST["uname"];
$pwd=$_POST["pwd"];
$mobile=$_POST["mobile"];
$email=$_POST["email_id"]."@".$_POST["email_dns"];
$birth=$_POST["birth"];

include "../../inc/dbcon.php";

//쿼리문작성
$sql = "update members set uid='$uid',uname='$uname',pwd='$pwd',mobile='$mobile',email='$email',birth='$birth' where idx=$idx;";

//echo $sql;       //쿼리문 출력(안될 때 쿼리문 출력해보기)
//return false;     //여기까지만 실행

mysqli_query($con,$sql);

//경로 변경
echo "
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <script type='text/javascript'>
        alert('회원정보 수정이 완료되었습니다.');
        location.href='list.php';
    </script>
";

?>
