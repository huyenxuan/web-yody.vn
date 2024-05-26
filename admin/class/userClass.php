<?php
include('database.php');
class user
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    // login
    public function show_user()
    {
        $query = "SELECT * FROM tbl_user";
        $result = $this->db->select($query);
        return $result;
    }
    // thêm người dùng
    public function insert_user($fullName, $email, $phoneNumber, $address, $password, $role)
    {
        $query = "INSERT INTO tbl_user (
            fullName,
            email,
            phoneNumber,
            address,
            password,
            role) 
        VALUES (
            '$fullName',
            '$email',
            '$phoneNumber',
            '$address',
            '$password',
            '$role')";
        $result = $this->db->select($query);
        return $result;
    }

    // sửa thông tin người dùng
    public function update_user($fullName, $email, $phoneNumber, $address, $password, $role, $user_id)
    {
        $query = "UPDATE tbl_user
                SET fullName = '$fullName', 
                    email = '$email', 
                    phoneNumber = '$phoneNumber',
                    address = '$address',
                    password = '$password', 
                    role = '$role',
                WHERE user_id = '$user_id'";
        $result = $this->db->update($query);
        return $result;
    }

    // Xóa tk người dùng
    public function delete_user($user_id)
    {
        $query = "DELETE FROM tbl_user WHERE user_id = '$user_id'";
        $result = $this->db->delete($query);
        return $result;
    }
    
    //Lấy ra thông tin người dùng
    public function get_user($user_id) {
        $query = "SELECT *
                FROM tbl_user
                WHERE user_id = $user_id";
        $result = $this->db->select($query);
        return $result;
    }
}
