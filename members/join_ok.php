<?php

    $uname=$_POST["uname"];
    $uid=$_POST["uid"];
    $pwd=$_POST["pwd"];
//    $postalcode=$_POST["postalcode"];
//    $addr1=$_POST["addr1"];
//    $addr2=$_POST["addr2"];
    $mobile=$_POST["mobile"];
    $email_id=$_POST["email_id"];
    $email_dns=$_POST["email_dns"];
    $email=$email_id."@".$email_dns;
    $birth=$_POST["birth"];
    $visit_route=$_POST["visit_route"];
    $fav_dougnut=$_POST["fav_dougnut"];
    $visit_frequency=$_POST["visit_frequency"];
    $newsletter_apply=$_POST["newsletter_apply"];
    $sms_apply=$_POST["sms_apply"];
    $today = date("Ymd");

    include "../inc/dbcon.php";

    $sql = "insert into members(uname, uid, pwd, mobile, email, birth, visit_route, fav_dougnut, visit_frequency, newsletter_apply, sms_apply, reg_date) values('$uname', '$uid', '$pwd', '$mobile', '$email', '$birth', '$visit_route', '$fav_dougnut', '$visit_frequency', '$newsletter_apply', '$sms_apply','$today');";

//    echo $sql;
//    return false;

    mysqli_query($con, $sql);

    echo "
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <script type=\"text/javascript\">
            location.href=\"join_welcome.php\";
        </script>
    ";

?>