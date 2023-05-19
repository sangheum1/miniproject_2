<?php

namespace application\controller;

class ApiController extends Controller {
    public function userGet() {
        $arrGet = $_GET;
        $arrData = ["flg" => "0"];

        // model 호출
        $this->model = $this->getModel("User"); // application\~~User 붙여서 저장

        $result = $this->model->getUser($arrGet, false); // sql 넣어서 db 실행

        // 유저 유무 체크
        if(count($result) !== 0) {
            $arrData["flg"] = "1";
            $arrData["msg"] = "입력하신 id가 사용중 입니다.";
        }

        // 배열을 json으로 변경
        $json = json_encode($arrData);
        // http_response_code(200);
        header('Content-type: application/json');
        echo $json;
        exit();
    }
}
?>