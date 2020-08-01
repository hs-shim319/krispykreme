<?php

$idx=$_POST["idx"];
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


$sql = "update menu set mtype='$mtype',mname='$mname',engname='$engname',price='$price',portionsize='$portionsize',kcal='$kcal',na='$na',sugar='$sugar',fat='$fat',protein='$protein',size='$size',img='$img' where idx=$idx;";

//echo $sql;       //쿼리문 출력(안될 때 쿼리문 출력해보기)
//return false;     //여기까지만 실행

mysqli_query($con,$sql);

//경로 변경
echo "
    <script type='text/javascript'>
        alert('메뉴 수정이 완료되었습니다.');
        location.href='list.php';
    </script>
";

?>
