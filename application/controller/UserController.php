<?php

namespace application\controller;

class UserController extends Controller {
    public function loginGet() {
        return "login"._EXTENSION_PHP;
    }

    public function loginPost() {
        $result = $this->model->getUser($_POST); // db에서 유저정보 습득
        $this->model->close(); // db파기
        // 유저 유무 체크
        if(count($result) === 0) {
            $errMsg = "입력하신 회원 정보가 없습니다.";

            
            $this->addDynamicProperty("errMsg", $errMsg);
            // 로그인 페이지리턴
            return "login"._EXTENSION_PHP;
        }
        // session에 유저 id 저장
        $_SESSION[_STR_LOGIN_ID] = $_POST["id"];
        return _BASE_REDIRECT."/product/list";
    }

    // 로그아웃 메소드
    public function logoutGet() {
        session_unset();
        session_destroy();
        // 로그인 페이지 리턴
        return "login"._EXTENSION_PHP;
    }

    // 회원가입
    public function registGet() {
        return "regist"._EXTENSION_PHP;
    }

    public function registPost() {
        $arrPost = $_POST;
        $arrChkErr = [];
        // 유효성 체크
        // ID 글자수 체크
        if(mb_strlen($arrPost["id"]) === 0 || mb_strlen($arrPost["id"]) > 12) {
            $arrChkErr["id"] = "ID는 12글자 이하로 입력해 주세요";
        }
        // ID 영문숫자 체크 (한번 해보기)

        // PW 글자수 체크
        if(mb_strlen($arrPost["pw"]) < 8 || mb_strlen($arrPost["pw"]) > 20) {
            $arrChkErr["pw"] = "비밀번호는 8~20글자로 입력해 주세요";
        }

        // PW 영문숫자, 특수문자 체크 (한번 해보기)

        // 비밀번호와 비밀번호 체크 확인
        if($arrPost["pw"] !== $arrPost["pwChk"]) {
            $arrChkErr["pwChk"] = "비밀번호와 비밀번호 확인이 일치하지 않습니다.";
        }

        // name 글자수 체크
        if(mb_strlen($arrPost["name"]) === 0 || mb_strlen($arrPost["name"]) > 30) {
            $arrChkErr["name"] = "이름은 30글자 이하로 입력해 주세요";
        }

        // 유효성 체크 에러일 경우
        if(!empty($arrChkErr)) {
            // 에러 메세지 세팅
            $this->addDynamicProperty('arrError', $arrChkErr);
            return "regist"._EXTENSION_PHP;
        }

        $result = $this->model->getUser($arrPost, false);

        // 유저 유무 체크
        if(count($result) !== 0) {
            $errMsg = "입력하신 id가 사용중 입니다.";

            
            $this->addDynamicProperty("errMsg", $errMsg);
            // 회원가입페이지
            return "regist"._EXTENSION_PHP;
        }

        // Transaction start
        $this->model->beginTransaction();

        // user insert
        if (!$this->model->insertUser($arrPost)) {
            // 예외처리 롤백
            $this->model->rollback();
            echo "User Regist Error";
            exit();
        };
        $this->model->commit(); // 정상처리 커밋
        // ***Transaction 둥
        
        // 로그인 페이지로 이동
        return _BASE_REDIRECT."/user/login";
    }
}
?>