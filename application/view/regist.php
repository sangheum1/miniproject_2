<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>회원 가입</h1>
    <br>
    <br>

    <?php if(isset($this->errMsg)) { ?>
        <div>
            <span><?php echo $this->errMsg ?></span>
        </div>
    <?php } ?>
    
    <form action="/user/regist" method="post">
        <label for="id">ID</label>
        <input type="text" name="id" id="id">
        <button type="button" onclick="chkDuplicationId();">중복체크</button>
        <span id="errMsgId">
            <?php if(isset($this->arrError["id"])) { ?>
                <?php echo $this->arrError["id"] ?>
            <?php } ?>
        </span>
        <br>
        <label for="pw">PW</label>
        <input type="text" name="pw" id="pw">
        <span>
            <?php if(isset($this->arrError["pw"])) { ?>
                <?php echo $this->arrError["pw"] ?>
            <?php } ?>
        </span>
        <br>
        <label for="pwChk">PW Check</label>
        <input type="text" name="pwChk" id="pwChk">
        <span>
            <?php if(isset($this->arrError["pwChk"])) { ?>
                <?php echo $this->arrError["pwChk"] ?>
            <?php } ?>
        </span>
        <br>
        <label for="name">NAME</label>
        <input type="text" name="name" id="name">
        <span>
            <?php if(isset($this->arrError["name"])) { ?>
                <?php echo $this->arrError["name"] ?>
            <?php } ?>
        </span>
        <br>
        <button type="submit">Regist</button>
    </form>


    <script src="/application/view/js/common.js"></script>
</body>
</html>