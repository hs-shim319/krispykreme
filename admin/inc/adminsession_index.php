<?php 
    session_start();
    $s_id=isset($_SESSION["uid"])?$_SESSION["uid"]:"";   //로그인 전 오류때문에
    $s_name=isset($_SESSION["uname"])?$_SESSION["uname"]:"";   //로그인 전 오류때문에
    $idx=isset($_SESSION["idx"])?$_SESSION["idx"]:"";   //로그인 전 오류때문에
//    echo $_SESSION["uid"]."/".$_SESSION["uname"];

    if($s_id != "admin" || $idx != 1){
        echo"
            <script type=\"text/javascript\">
                alert('잘못된 접근입니다.');
                location.href='../index.php';
            </script>
        ";
        return false;
    };


    echo "
        <script type=\"text/javascript\">
            function logout_check(){
                var q=confirm(\"정말 로그아웃하시겠습니까?\");
                if(q){
                    location.href=\"../login/logout.php\";
                }
            };
        </script>
    ";


?>