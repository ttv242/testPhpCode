<?php
require_once 'database.php';
class users extends database
{
    function register($full_name, $username, $password, $role = 0)
    {
        try {
            $sql = "INSERT INTO users (full_name, username, password, role, created_at, updated_at) VALUES (:full_name, :username, :password, :role, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(":full_name", $full_name, PDO::PARAM_STR);
            $stmt->bindParam(":username", $username, PDO::PARAM_STR);
            $stmt->bindParam(":password", $password, PDO::PARAM_STR);
            $stmt->bindParam(":role", $role, PDO::PARAM_BOOL);
            $stmt->execute();
            $id = $this->conn->lastInsertId();

            return $id;
        } catch (PDOException $e) {
            return null; // Trả về null nếu có lỗi xảy ra
        }
    }

    function updateUserProfile($id, $full_name, $email, $birthday)
    {
        // Kiểm tra các thông tin đầu vào

        // Thực hiện cập nhật thông tin hồ sơ người dùng trong cơ sở dữ liệu
        $sql = "UPDATE users SET name = :full_name, email = :email, birthday = :birthday WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":full_name", $full_name, PDO::PARAM_STR);
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
