<?php

namespace application\util;
class UrlUtil {

    // $_GET["url"]을 분석해서 리턴
    public static function getUrl() {
        return isset($_GET["url"]) ? $_GET["url"] : ""; // 처음엔 쿼리스트링을 안적어서 error가 뜨기때문에 처리 해야함(htaccess에서 받아온 get에 user/login 담김)
    }

    // URL을 "/"로 구분해서 배열을 만들고 리턴( 0=>user, 1=>login의 배열이 나오거나 "" 문자열배열 만듬)
    public static function getUrlArrPath() {
        $url = UrlUtil::getUrl(); // static으로 선언안하면 $obj = new ~~ 적어야 함
        return $url !== "" ? explode("/", $url) : ""; // 크롬에서 localhost/ 후에 적는 모든것들을 스트링 get방식으로 출력 '/' 이것 제외
    }

    // "/"를 "\"로 치환하는 메소드
    public static function replaceSlashToBackslash($str) {
        return str_replace("/","\\",$str);
    }
    
}

?>