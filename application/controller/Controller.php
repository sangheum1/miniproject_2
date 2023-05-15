<?php

namespace application\controller;

use application\util\UrlUtil;

// 동적프로퍼티 사용하기 위해 use와 # 적어야함 // controller의 변수들인 model,등등의 변수를 설정후 추가적으로 변수들을 만들어 동적으로 프로그램 읽어들이면서 사용하기 위해 작성 8-10 line
use \AllowDynamicProperties;

#[AllowDynamicProperties]

class Controller {
    protected $model; // parent로 접근 가능
    private static $modelList = [];
    private static $arrNeedAuth = ["product/list"];

    // 생성자
    public function __construct($identityName, $action) {  // (user,loginGet)
        // session start
        if(!isset($_SESSION)) { // 세션 없으면
            session_start(); // 세션 생성
        }

        // 유저 로그인 및 권한 체크
        $this->chkAuthorization();

        // model 호출
        $this->model = $this->getModel($identityName);

        // 해당 controller의 메소드 호출(UserController의 메소드 실행) 자식의 메소드 실행시키는것이 action()함수, action = loginGet이고 ()함수 만들고 this는 자식쪽에 있음
        $view = $this->$action();

        if(empty($view)) {
            echo "해당 Controller에 메소드가 없습니다 : ".$action;
            exit();
        }

        // view 호출
        require_once $this->getView($view); // login.php 출력
    }

    // model 호출하고 결과 리턴
    protected function getModel($identityName) {
        // model 생성 체크
        if(!in_array($identityName, self::$modelList)) {  // UserController를 호출했기때문에 this는 Usercontroller로 잡혀있고 그래서 부모에서 self를 써야 나 자신을 가리킴
            $modelName = UrlUtil::replaceSlashToBackslash(_PATH_MODEL.$identityName._BASE_FILENAME_MODEL);
            self::$modelList[$identityName] = new $modelName(); // model class 호출
        }
        return self::$modelList[$identityName];
    }

    // 파라미터 확인해서 해당하는 view를 return or redirect (view는 login.php)
    protected function getView($view) {
        // view를 체크
        if(strpos($view, _BASE_REDIRECT) === 0) {
            header($view);
            exit();
        } // 찾는 문자 있으면 숫자를 반환 없으면 false 반환
        return _PATH_VIEW.$view;
    }

    // 동적 속성(addDynamicProperty)를 셋팅하는 메소드 = 클래스 안에서 값들이 필요할때마다 선언해주는것을 다이나믹프로퍼티라고 함
    protected function addDynamicProperty($key, $val) {
        $this->$key = $val;
    }

    // 유저 권한 체크 메소드
    protected function chkAuthorization() {
        $urlPath = UrlUtil::getUrl();
        foreach( self::$arrNeedAuth as $authPath) {
            if(!isset($_SESSION[_STR_LOGIN_ID]) && strpos($urlPath, $authPath) === 0) {
                header(_BASE_REDIRECT."/user/login");
                exit;
            }
        }
    }
}
?>