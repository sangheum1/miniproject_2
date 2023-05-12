<?php

// 이 파일은 클래스로 적어서 하나하나 호출하기 위한 파일

namespace application\lib;

use application\util\UrlUtil;

class Application {

    // 생성자
    public function __construct() {

        $arrPath = UrlUtil::getUrlArrPath(); // UrlUtil 함수 가져오기 위해선 최상위 use 적어야함 (접속 url을 배열로 획득)
        $identityName = empty($arrPath[0]) ? "User" : ucfirst($arrPath[0]); // 값이 없으면 강제로 로그인 화면, 값이 있으면 로그인으로
        $action = (empty($arrPath[1]) ? "login" : $arrPath[1]).ucfirst(strtolower($_SERVER["REQUEST_METHOD"])); // $_server 에서 get, post 받아오는것 소문자 변경후 첫 글자만 대문자 변경해서 붙여줌

        // controller명 작성($indentityName은 User 받는것)
        $controllerPath = _PATH_CONTROLLER.$identityName._BASE_FILENAME_CONTROLLER._EXTENSION_PHP;

        // 해당 controller 파일 존재
        if(!file_exists($controllerPath)) {
            echo "해당 컨트롤러  파일이 없습니다. : ".$controllerPath;
            exit;
        }

        // 해당 Controller 호출
        $controllerName = UrlUtil::replaceSlashToBackslash( _PATH_CONTROLLER.$identityName._BASE_FILENAME_CONTROLLER );

        new $controllerName($identityName, $action);
    }
}

?>