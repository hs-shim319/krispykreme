<?php 
    session_start();
    $s_id=isset($_SESSION["uid"])?$_SESSION["uid"]:"";   //로그인 전 오류때문에
    $s_name=isset($_SESSION["uname"])?$_SESSION["uname"]:"";   //로그인 전 오류때문에
    $idx=isset($_SESSION["idx"])?$_SESSION["idx"]:"";   //로그인 전 오류때문에
//    echo $_SESSION["uid"]."/".$_SESSION["uname"];


?>