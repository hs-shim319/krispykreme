<?php

    session_start();
    $s_idx = isset($_SESSION["idx"])?$_SESSION["idx"]:"";
    include "../inc/dbcon.php";

    $sql="delete from members where idx='$s_idx';";

//    echo $sql;
//    return false;
    mysqli_query($con, $sql);
    mysqli_close($con);
    echo "
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <script type=\"text/javascript\">
            alert(\"정상적으로 탈퇴되었습니다. 크리스피크림도넛을 이용해주셔서 감사합니다.\");
            location.href='../index.php';
        </script>
    ";


?>