<?php

require_once "database.php";
class loai extends database
{
    function detail($id_loai = 0)
    {
        $sql = "SELECT * From loai Where id_loai=$id_loai";
        return $this->queryOne($sql);
    }


    function dangsachloai($pageNum = 1, $pageSize = 20)
    {

        $startRow = ($pageNum - 1) * $pageSize;
        $sql = "SELECT * fROM loai ORDER BY thutu DESC LIMIT $startRow,$pageSize";
        return $this->query($sql);
    }
    function demSP()
    {
        $sql = "SELECT count(id_loai) as dem from loai";
        $row = $this->queryOne($sql);
        return $row['dem'];
    }
    function themloai($ten_loai, $thutu, $anhien)
    {
        $sql = 'INSERT INTO loai SET ten_loai=:ten_loai,thutu=:thutu, anhien=:anhien';
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":ten_loai", $ten_loai, PDO::PARAM_STR);
        $stmt->bindParam(":thutu", $thutu, PDO::PARAM_INT);
        $stmt->bindParam(":anhien", $anhien, PDO::PARAM_INT);
        $stmt->execute();
        $id_sp = $this->conn->lastInsertId();
        return $id_sp;
    }

    function capnhatloai($id_loai, $ten_loai, $thutu, $anhien)
    {
        $sql = "UPDATE loai SET ten_loai = :ten_loai, thutu = :thutu, anhien = :anhien WHERE id_loai = :id_loai";
        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(":ten_loai", $ten_loai, PDO::PARAM_STR);
        $stmt->bindParam(":thutu", $thutu, PDO::PARAM_INT);
        $stmt->bindParam(":anhien", $anhien, PDO::PARAM_INT);
        $stmt->bindParam(":id_loai", $id_loai, PDO::PARAM_INT);
        
        $stmt->execute();
        return true;
    }

    function deleteLoai($id_loai)
    {
        $sql = "DELETE FROM loai WHERE id_loai=:id_loai";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(":id_loai", $id_loai, PDO::PARAM_INT);
        $stmt->execute();

    }

}