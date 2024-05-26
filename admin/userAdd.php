<?php
ob_start();
include('class/userClass.php');
$user = new user();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $role = isset($_POST['role']) ? 1 : 0;

    $insert_user = $user->insert_user($fullName, $email, $phoneNumber, $address, $password, $role);

    header("Location: userAdd.php?user_name=" . urlencode($fullName));
    exit();
}
include("view/header.php");
include("view/sidebar.php");
?>
<title>Thêm tài khoản người dùng</title>
<!-- main content -->
<style>
    input {
        outline: none;
        height: 30px;
        width: 180px;
        border: 1px solid #333;
        border-radius: 5px;
        padding-left: 10px;
    }

    button {
        width: 60px;
        height: 35px;
        border-radius: 5px;
        border: 1px solid #333;
        box-sizing: unset;
        margin-top: 10px;
    }

    form {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
    }

    form div {
        margin-bottom: 15px;
    }

    form .isAdmin {
        margin-top: 20px;
        display: flex;
        line-height: 30px;
    }

    .isAdmin input {
        width: 30px;
        height: 20px;
    }
</style>
<div class="main-content">
    <h2>Thêm danh mục</h2>
    <form action="" method="POST">
        <div class="name">
            <label for="">Tên người dùng <span style="color: red">*</span></label><br>
            <input required name="fullName" type="text" placeholder="Tên người dùng"><br>
        </div>
        <div class="email">
            <label for="">Địa chỉ email <span style="color: red">*</span></label><br>
            <input required name="email" type="text" placeholder="Địa chỉ email"><br>
        </div>
        <div class="phoneNumber">
            <label for="">Số điện thoại <span style="color: red">*</span></label><br>
            <input required name="phoneNumber" type="text" placeholder="Số điện thoại"><br>
        </div>
        <div class="address">
            <label for="">Địa chỉ</label><br>
            <input name="address" type="text" placeholder="Địa chỉ"><br>
        </div>
        <div class="password">
            <label for="">Mật khẩu <span style="color: red">*</span></label><br>
            <input required name="password" type="text" placeholder="Mật khẩu"><br>
        </div>
        <div class="isAdmin">
            <label for="" style="margin-right: 10px">Là admin: </label>
            <input name="role" value="1" type="checkbox" placeholder="Là admin"><br>
        </div>
        <button>Thêm</button>
    </form>
</div>