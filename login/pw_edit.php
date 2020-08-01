<?php

$idx=$_POST["idx"];
$pwd=$_POST["pwd"];

include "../inc/dbcon.php";

//쿼리문작성
$sql = "update members set pwd='$pwd' where idx=$idx;";

//echo $sql;       //쿼리문 출력(안될 때 쿼리문 출력해보기)
//return false;     //여기까지만 실행

mysqli_query($con,$sql);

//경로 변경
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />  
    <script type='text/javascript'>
        alert('비밀번호가 정상적으로 재설정되었습니다.');
        location.href='login.php';
    </script>
";

?>
