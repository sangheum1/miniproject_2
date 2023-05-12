<?php

// echo "index";

// config 파일
require_once("application/lib/config.php"); // error 발생시 그즉시 멈춤(include는 계속 진행해서 사용 x)
// echo $_GET["url"]; // 크롬에서 localhost/ 후에 적는 모든것들을 스트링 get방식으로 출력

require_once("application/lib/autoload.php"); // autoload 파일 불러옴
new application\lib\Application(); // Application 호출
?>