<?php

namespace application\model;

class UserModel extends Model {
    public function getUser($arrUserInfo, $pwFlg = true) {
        $sql =" select * from user_info where u_id = :id ";

        // pw 추가할 경우
        if($pwFlg) {
            $sql .= " and u_pw = :pw ";
        }

        $prepare = [
            ":id" => $arrUserInfo["id"]
        ];

        // pw 추가할 경우
        if($pwFlg) {
            $prepare[":pw"] = $arrUserInfo["pw"];
            // $prepare[":pw"] = base64_encode($arrUserInfo["pw"]);
        }

        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute($prepare);
            $result = $stmt->fetchAll();

        } catch (Exception $e) {
            echo "UserModel->getUser Error : ".$e->getMessage();
            exit();
        }
        // finally 사용해서 db connect 닫아주는것은 다른곳에서 함 (usercontroller에서 db파기함)
        return $result;
    }

    // Insert user
    public function insertUser($arrUserInfo) {
        $sql =" INSERT INTO user_info( u_id, u_pw, u_name, u_email ) VALUES(:u_id, :u_pw, :u_name, :u_email) ";

        $prepare = [
            ":u_id" => $arrUserInfo["id"]
            , ":u_pw" => $arrUserInfo["pw"]
            // , ":u_pw" => base64_encode( $arrUserInfo["pw"] )
            , ":u_name" => $arrUserInfo["name"]
            , ":u_email" => $arrUserInfo["email"]
        ];

        try {
            $stmt = $this->conn->prepare($sql);
            $result = $stmt->execute($prepare);
            return $result;
        } catch (Exception $e) {
            return false;
        }
    }

    // Update user
    public function updateUser($arrUserInfo) {
        $sql =" UPDATE user_info SET u_pw = :u_pw, u_name = :u_name WHERE u_id = :u_id ";

        $prepare = [
            ":u_id" => $arrUserInfo["id"]
            , ":u_pw" => $arrUserInfo["pw"]
            // , ":u_pw" => base64_encode( $arrUserInfo["pw"] )
            , ":u_name" => $arrUserInfo["name"]
        ];

        try {
            $stmt = $this->conn->prepare($sql);
            $result = $stmt->execute($prepare);
            return $result;
        } catch (Exception $e) {
            return false;
        }
    }

    
}
?>