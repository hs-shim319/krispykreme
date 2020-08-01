<?php

    session_start();
    $s_id=isset($_SESSION["uid"])?$_SESSION["uid"]:"";
    $s_name=isset($_SESSION["uname"])?$_SESSION["uname"]:"";
    $s_idx=isset($_SESSION["idx"])?$_SESSION["idx"]:"";
?>