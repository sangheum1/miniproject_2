<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>shop main</h1>
    <?php
    if(isset($_SESSION[_STR_LOGIN_ID])) {
    ?>
    <a href="/user/login">로그인</a>
    <?php
    $config;
    } else {
    ?>
    <a href="/user/login">로그아웃</a>
    <a href="/user/regist">회원가입</a>
    <?php
    }
    ?>
</body>
</html>