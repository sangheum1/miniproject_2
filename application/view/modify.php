<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/user/modify" method="post">
        <label for="id">아이디</label>
        <input type="text" name="id" id="id" value="<?php if(isset($this->arrModify["u_id"])) {echo $this->arrModify["u_id"];} else if(isset($this->arrModifyPost["id"])) {echo $this->arrModifyPost["id"];} ?>" readonly>
        <br>
        <label for="pw">비밀번호</label>
        <input type="text" name="pw" id="pw">
        <span id="errMsgId">
            <?php if(isset($this->arrError["pw"])) { ?>
                <?php echo $this->arrError["pw"] ?>
            <?php } ?>
        </span>
        <br>
        <label for="pwChk">비밀번호 확인</label>
        <input type="text" name="pwChk" id="pwChk">
        <span id="errMsgId">
            <?php if(isset($this->arrError["pwChk"])) { ?>
                <?php echo $this->arrError["pwChk"] ?>
            <?php } ?>
        </span>
        <br>
        <label for="name">이름</label>
        <input type="text" name="name" id="name" value="<?php if(isset($this->arrModify["u_name"])) {echo $this->arrModify["u_name"];} else if(isset($this->arrModifyPost["name"])) {echo $this->arrModifyPost["name"];} ?>">
        <span id="errMsgId">
            <?php if(isset($this->arrError["name"])) { ?>
                <?php echo $this->arrError["name"] ?>
            <?php } ?>
        </span>
        <br>
        <button type="submit">수정</button>
        <button type="button" onclick="location.href='/shop/main'">취소</button>
    </form>
</body>
</html>