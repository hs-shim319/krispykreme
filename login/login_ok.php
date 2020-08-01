<?php

    session_start();

    $uid=$_POST["uid"];
    $pwd=$_POST["pwd"];

    include "../inc/dbcon.php";

    $sql="select idx, uid, pwd, uname from members where uid='$uid';";

//    echo $sql;
//    return false;

    $result = mysqli_query($con, $sql);
    $array = mysqli_fetch_array($result);

    //echo $array["email"]."/".$array["pwd"]."/".$array["uname"];

    if($uid != $array["uid"]){
        echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />  
            <script type=\"text/javascript\">
                alert(\"일치하는 아이디가 없습니다.\");
                history.back();
            </script>
        ";
        return false;
    } else{
        if($pwd != $array["pwd"]){
            echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />  
                <script type=\"text/javascript\">
                    alert(\"비밀번호가 일치하지 않습니다.\");
                    history.back();                
                </script>
            ";
            return false;
        }
    };

    $_SESSION["uid"]=$array["uid"];
    $_SESSION["uname"]=$array["uname"];
    $_SESSION["idx"]=$array["idx"];
    if($_SESSION["uid"]=='admin'){
        echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />  
        <script type='text/javascript'>
                alert('관리자 로그인');
                location.href='../admin/admin_welcome.php';
            </script>
        ";

    }else{
        echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />  
            <script type='text/javascript'>
                alert('로그인 되었습니다.');
                location.href='../index.php';
            </script>
        ";
    }
?>