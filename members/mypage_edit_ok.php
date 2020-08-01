<?php

    session_start();
    $s_idx = isset($_SESSION["idx"])?$_SESSION["idx"]:"";

    $pwd = $_POST["pwd"];
    $mobile = $_POST["mobile"];
    $email = $_POST["email_id"]."@".$_POST["email_dns"];
    $visit_route = $_POST["visit_route"];
    $fav_dougnut = $_POST["fav_dougnut"];
    $visit_frequency = $_POST["visit_frequency"];
    $newsletter_apply = $_POST["newsletter_apply"];
    $sms_apply = $_POST["sms_apply"];

    include "../inc/dbcon.php";

    if(!$pwd){
    $sql = "update members set mobile='$mobile', email='$email', visit_route='$visit_route', fav_dougnut='$fav_dougnut', visit_frequency='$visit_frequency', newsletter_apply='$newsletter_apply', sms_apply='$sms_apply' where idx='$s_idx';";
    }else{
    $sql = "update members set pwd='$pwd', mobile='$mobile', email='$email', visit_route='$visit_route', fav_dougnut='$fav_dougnut', visit_frequency='$visit_frequency', newsletter_apply='$newsletter_apply', sms_apply='$sms_apply' where idx='$s_idx';";
    }
//    echo $sql;
//    return false;
    mysqli_query($con, $sql);

    echo "
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <script type=\"text/javascript\">
            alert(\"정보가 정상적으로 수정되었습니다.\");
            location.href=\"mypage_edit.php\";
        </script>
    ";

?>