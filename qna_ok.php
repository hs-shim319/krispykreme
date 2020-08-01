<?php

    include "inc/session.php";
    include "inc/dbcon.php";
    $uname=$_POST["uname"];
    $mobile=$_POST["mobile"];
    $email=$_POST["email"];
    $type=$_POST["type"];
    $store=$_POST["store"];
     $visit_date=$_POST["visit_date_y"].$_POST["visit_date_m"].$_POST["visit_date_d"];
    $visit_time=$_POST["visit_time"];
    $title=$_POST["title"];
    $content=$_POST["question_content"];
    $wdate=date("Ymd");

    $sql = "insert into qna(uid, uname, mobile, email, type, store, visit_date, visit_time, title, content, wdate,state) values('$s_id', '$uname', '$mobile', '$email', '$type', '$store', '$visit_date', '$visit_time', '$title', '$content', '$wdate', '대기');";
//    echo $sql;
//    return false;
    mysqli_query($con, $sql);
    mysqli_close($con);

    echo"
        <script type=\"text/javascript\">
        alert(\"고객님의 소중한 의견이 정상적으로 문의되었습니다.\");
        location.href=\"members/mypage_myqna.php\";
        </script>
    ";

?>


