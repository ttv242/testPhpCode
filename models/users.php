<?php
require_once 'database.php';
class users extends database
{
    function register($name, $email, $birthday, $username, $password, $role)
    {
        $sql = "INSERT INTO users SET name=:name, email=:email, birthday=:birthday, username=:username, password=:password, role=:role";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":name", $name, PDO::PARAM_STR);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR); // Sửa tên tham số thành ":email"
        $stmt->bindParam(":birthday", $birthday, PDO::PARAM_STR);
        $stmt->bindParam(":username", $username, PDO::PARAM_STR);
        $stmt->bindParam(":password", $password, PDO::PARAM_STR);
        $stmt->bindParam(":role", $role, PDO::PARAM_STR);
        $stmt->execute();
        $id = $this->conn->lastInsertId();
        return $id;
    }

    function updateUserProfile($id, $name, $email, $birthday) {
        // Kiểm tra các thông tin đầu vào
    
        // Thực hiện cập nhật thông tin hồ sơ người dùng trong cơ sở dữ liệu
        $sql = "UPDATE users SET name = :name, email = :email, birthday = :birthday WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":name", $name, PDO::PARAM_STR);
        $stmt->bindParam(":email", $email, PDO::PARAM_STR);
        $stmt->bindParam(":birthday", $birthday, PDO::PARAM_STR);
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt->execute();
    
        // Kiểm tra xem cập nhật có thành công không
        $affectedRows = $stmt->rowCount();
        if ($affectedRows > 0) {
            // Cập nhật thành công
            return true;
        } else {
            // Cập nhật không thành công
            return false;
        }
    }

    function getUserById($id)
    {
        $sql = 'SELECT * FROM users WHERE id = :userId';
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':userId', $id);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    function getAllUsers()
    {
        $sql = 'SELECT * FROM users';
        $result = $this->query($sql);

        if ($result) {
            $data = $result->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        } else {
            return [];
        }
    }

    function checkuser($email, $matkhau)
    {
        $sql = "SELECT * FROM users WHERE email=:em";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":em", $email, PDO::PARAM_STR);
        $stmt->execute();
        $recordnum = $stmt->rowCount();
        if ($recordnum != 1)
            return " Email không tồn tai";
        $user = $stmt->fetch();
        $mk_makhoa = $user['matkhau'];
        if (password_verify($matkhau, $mk_makhoa) == false)
            return 'mật khẩu không đúng';
        else
            return $user;
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
