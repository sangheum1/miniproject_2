<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="user/modify" post="post">
        <label for="id">아이디</label>
        <input type="text" name="id" id="id" value="<?php echo $this->arrModify["u_id"] ?>" readonly>
        <br>
        <label for="pw">비밀번호</label>
        <input type="text" name="pw" id="pw">
        <br>
        <label for="pwChk">비밀번호 확인</label>
        <input type="text" name="pwChk" id="pwChk">
        <br>
        <label for="name">이름</label>
        <input type="text" name="name" id="name" value="<?php echo $this->arrModify["u_name"] ?>">
        <br>
        <button type="submit">수정</button>
        <button type="button" onclick="location.href='/shop/main'">취소</button>
    </form>
</body>
</html>