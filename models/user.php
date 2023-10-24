<?php
require_once 'database.php';
class user extends database
{
    function luuuser($hoten, $email, $mk_mahoa)
    {
        $sql = "INSERT INTO users set hoten=:ht , email=:em , matkhau=:mk";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":ht", $hoten, PDO::PARAM_STR);
        $stmt->bindParam(":em", $email, PDO::PARAM_STR);
        $stmt->bindParam(":mk", $mk_mahoa, PDO::PARAM_STR);
        $stmt->execute();
        $id_user = $this->conn->lastInsertId();
        return $id_user;
    }

    function checkuser($email,$matkhau)
    {
        $sql = "SELECT * FROM users WHERE email=:em";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":em", $email, PDO::PARAM_STR);
        $stmt->execute();
        $recordnum = $stmt->rowCount();
        if ($recordnum !=1)return" Email không tồn tai";
        $user = $stmt->fetch();
        $mk_makhoa=$user['matkhau'];
        if(password_verify($matkhau,$mk_makhoa)==false) return 'mật khẩu không đúng';
        else return $user;
    }

    function changepass($email, $mk_mahoa)
    {
        $sql = "UPDATE users SET matkhau=:mk WHERE email=:email";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":mk", $mk_mahoa, PDO::PARAM_STR);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->execute();
        $affectedRows = $stmt->rowCount();
        return $affectedRows;
    }
    
}
