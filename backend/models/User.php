<?php
require_once 'models/Model.php';

class User extends Model
{
    /**
     * Lấy danh sách sản phẩm từ bảng users
     */
    public function index()
    {
        $obj_select = $this->connection->prepare("SELECT * FROM users");
        $obj_select->execute();
        $users = $obj_select->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }

    /**
     * Thêm thông tin vào bảng users
     */
    public function insert($arr_params = [])
    {
        $obj_insert = $this->connection->prepare("INSERT INTO 
users(phone_number, email,password,avatar,facebook,address) 
VALUES(:phone_number,:email,:password,:avatar,:facebook,:address)");
        $is_insert = $obj_insert->execute($arr_params);
        return $is_insert;
    }

    /**
     * Lây ID
     */
    public function getUserById($id)
    {
        $obj_select = $this->connection->prepare("SELECT * FROM users WHERE id = :id");

        $obj_select->bindParam(':id', $id);
        $obj_select->execute();

        $users = $obj_select->fetchAll(PDO::FETCH_ASSOC);

        return $users[0];
    }

    public function update($arr_params = [])
    {
        $obj_update = $this->connection->prepare("UPDATE users SET phone_number=:phone_number,email=:email,password=:password,avatar=:avatar,facebook=:facebook,address=:address WHERE id=:id");
        $is_update = $obj_update->execute($arr_params);

        return $is_update;
    }

    /**
     * DELETE user theo ID
     */
    public function delete($id)
    {
        $obj_delete = $this->connection->prepare("DELETE FROM users WHERE id=:id");
        $obj_delete->bindParam(':id', $id);
        $is_delete = $obj_delete->execute();

        return $is_delete;
    }
}