<?php

    session_start();
    $s_idx = isset($_SESSION["idx"])?$_SESSION["idx"]:"";
    $pwd = $_POST["pwd"];

    include "../inc/dbcon.php";

    $sql="select pwd from members where idx='$s_idx';";

//    echo $sql;
//    return false;

    $result = mysqli_query($con, $sql);
    $array = mysqli_fetch_array($result);

    if($pwd != $array["pwd"]){
        echo "
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />  
            <script type=\"text/javascript\">
                alert(\"비밀번호가 일치하지 않습니다.\");
                history.back();
            </script>
        ";
        return false;
    } else{
        echo "
            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />  
            <script type=\"text/javascript\">
                alert(\"비밀번호가 일치합니다.\");
                location.href='mypage_delete_ok.php';                
            </script>
        ";
        return false;        
    };

?>