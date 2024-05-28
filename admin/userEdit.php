<?php
ob_start();
include('class/userClass.php');
$user = new user();

$user_id = $_GET['user_id'];
$get_user = $user->get_user($user_id);
if ($get_user) 
    $result = $get_user->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    $role = isset($_POST['role']) ? 1 : 0;

    $update_user = $user->update_user($fullName, $email, $phoneNumber, $address, $password, $role, $user_id);

    header("Location: userShow.php");
    exit();
}
include("view/header.php");
include("view/sidebar.php");
?>
<title>Chỉnh sửa thông tin người dùng</title>
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
            <input required name="fullName" type="text" placeholder="Tên người dùng"
            value="<?php echo $result['fullName'] ?>"><br>
        </div>
        <div class="email">
            <label for="">Địa chỉ email <span style="color: red">*</span></label><br>
            <input required name="email" type="text" placeholder="Địa chỉ email"
            value="<?php echo $result['email'] ?>"><br>
        </div>
        <div class="phoneNumber">
            <label for="">Số điện thoại <span style="color: red">*</span></label><br>
            <input required name="phoneNumber" type="text" placeholder="Số điện thoại"
            value="<?php echo $result['phoneNumber'] ?>"><br>
        </div>
        <div class="address">
            <label for="">Địa chỉ</label><br>
            <input name="address" type="text" placeholder="Địa chỉ"
            value="<?php echo $result['address'] ?>"><br>
        </div>
        <div class="password">
            <label for="">Mật khẩu <span style="color: red">*</span></label><br>
            <input required name="password" type="text" placeholder="Mật khẩu"
            value="<?php echo $result['password'] ?>"><br>
        </div>
        <div class="isAdmin">
            <label for="" style="margin-right: 10px">Là admin: </label>
            <input name="role" type="checkbox" placeholder="Là admin"
            <?php if($result['role'] == 1) 
                echo 'checked' ?>><br>
        </div>
        <button>Thêm</button>
    </form>
</div>