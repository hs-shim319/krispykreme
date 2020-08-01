<?php

    //데이터 가져오기
    $sch_id=$_POST["sch_id"];

    //쿼리 작성
    $sql = "select uid from members where uid='$sch_id';";

    //DB 연결
    include "../inc/dbcon.php";
        
    //쿼리 전송
    $result = mysqli_query($con,$sql);

    //DB에서 데이터 가져오기
//    $row = mysqli_fetch_row($result);
//    echo $row[1];

//    $array = mysqli_fetch_array($result);
//    echo $array["uname"];

    $num = mysqli_num_rows($result);

    //DB 연결종료
    mysqli_close($con);
?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>검색 결과</title>
    <style type="text/css">
        *{margin:0;padding:0}
        body{background:#166936}
        p{width:480px;height:150px;background:#fff;margin:auto;text-align:center;padding-top:50px;box-sizing:border-box}
        p a{display:block;color:#fff;text-decoration:none;background:#d0112b;width:90px;line-height:40px;margin:auto;margin-top:20px}
        h3{font-size:15px;text-align:center;color:#fff;font-weight:normal;line-height:50px}
    </style>
    <script type="text/javascript">
        function return_id(){
            opener.document.getElementById("uid").value="<?php echo $sch_id; ?>";
            window.close();
        }
    
    </script>
</head>
<body>
    <?php
//        if(!$num){
//            echo "<p>사용할 수 있는 아이디 입니다.</p>";
//        }else{
//            echo "<p>사용할 수 없는 아이디 입니다.</p>";
//        }
    ?>
    <h3>아이디 검색</h3>
    <?php
        if(!$num){
    ?>
        <p>
            사용할 수 있는 아이디 입니다.
            <a href="#" onclick="return_id()">사용하기</a>
        </p>
    <?php
        }else{
    ?>
        <p>
            사용할 수 없는 아이디 입니다.
            <a href="#" onclick="history.back()">다시 검색</a>
        </p>
    <?php
        }
    ?>
</body>
</html>