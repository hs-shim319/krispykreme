<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>아이디 확인</title>
    <style type="text/css">
        *{margin:0;padding:0}
        body{background:#166936}
        .hide_text{position:absolute;left:-9999px;top:-9999px}
        form{text-align:center;border:1px solid #166936;padding:0;margin:0}
        form p{background:#fff;width:480px;margin:auto}
        fieldset{border:0}
        legend{line-height:60px;background:#166936;width:100%;color:#fff}
        button{background:#166936;border:0;line-height:30px;width:50px;color:#fff;cursor:pointer}
        input{height:30px;border:1px solid #a0a0a0;margin:50px 0}
    </style>
</head>
<body>
    <form name="search_id" action="id_check.php" method="post">
        <fieldset>
            <legend>아이디 검색</legend>
            <p>
                <label for="sch_id" class="hide_text">아이디 입력</label>
                <input type="text" name="sch_id" id="sch_id">
                <button type="submit">검색</button>
            </p>
        </fieldset>
    </form>
</body>
</html>