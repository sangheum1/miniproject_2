<?php
// index에서 require을 계속 지정 안하고 자동으로 쓸 수 있도록 만듬
// function $path에서 index.php에 있는 new application\lib\Application(); 에서 application\lib\Application() 이거 불러옴
spl_autoload_register( function($path) {
    $path = str_replace("\\","/",$path); // "\"를 "/"로 변환(이스케이프 문자라 \\ 두번적음)
    // $arr_path = explode("/",$path); // "/"를 기준으로 배열로 변환

    // 해당 파일 require
    require_once($path._EXTENSION_PHP);
})

?>