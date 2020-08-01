<?php

$mtype=$_POST["mtype"];
$mname=$_POST["mname"];
$engname=$_POST["engname"];
$price=$_POST["price"];
$portionsize=$_POST["portionsize"];
$kcal=$_POST["kcal"];
$na=$_POST["na"];
$sugar=$_POST["sugar"];
$fat=$_POST["fat"];
$protein=$_POST["protein"];
$size=$_POST["size"];
$img=$_POST["img"];

include "../../inc/dbcon.php";

//쿼리문작성
$sql = "insert into menu(mtype,mname,engname,price,portionsize,kcal,na,sugar,fat,protein,size,img) values('$mtype','$mname','$engname','$price','$portionsize','$kcal','$na','$sugar','$fat','$protein','$size','$img');";
$sql2 = "delete from menu where mname='';";

//echo $sql;       //쿼리문 출력(안될 때 쿼리문 출력해보기)
//return false;     //여기까지만 실행

mysqli_query($con,$sql);
mysqli_query($con,$sql2);

//경로 변경
echo "
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <script type='text/javascript'>
        alert('메뉴 추가가 완료되었습니다.');
        location.href='list.php';
    </script>
";

?>
