<?php
include "../inc/adminsession.php";

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

//delete.php에 idx값을 GET방식으로 전송
$idx=$_GET["idx"];

//DB연결
include "../../inc/dbcon.php";

//쿼리문작성
$sql="delete from menu where idx=$idx;";


//echo $sql;       //쿼리문 출력(안될 때 쿼리문 출력해보기)
//return false;     //여기까지만 실행

mysqli_query($con,$sql);
mysqli_close($con);

////경로 변경
echo"
    <script type=\"text/javascript\">
        //경로 변경
        alert(\"삭제되었습니다.\");
        location.href=\"list.php\";
    </script>
";

?>

