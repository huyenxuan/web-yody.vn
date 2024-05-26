<?php
ob_start();
session_start();
include("./front-end/fe_header.php");
$account = new account();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fullName = $_POST['fullName'];
    $phoneNumber = $_POST['phoneNumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $registerUser = $account->registerUser($fullName, $phoneNumber, $email, $password);
    $_SESSION['email'] = $email;
    $_SESSION['fullName'] = $fullName;

    header('Location: index.php');
    exit();
}
?>
<title>Đăng ký Yody</title>
<link rel="stylesheet" href="./css/account.css">
<!-- register -->
<div class="main-content">
    <div class="login-wrap">
        <p class="txt-hd">Chào mừng bạn đến với Yody!</p>
        <div class="title">
            <span>ĐĂNG</span><span style="color: #FCAF17;"> KÝ</span>
        </div>
        <form action="" class="form-login" method="POST">
            <input required type="name" name="fullName" id="" placeholder="Họ và tên">
            <input required type="text" name="phoneNumber" id="" placeholder="Số điện thoại">
            <input required type="email" name="email" id="" placeholder="Email">
            <input required type="password" name="password" id="" placeholder="Mật khẩu">
            <button type="submit">Đăng ký</button>
        </form>

        <div class="social-login">
            <div class="txt">
                Hoặc đăng ký bằng
            </div>

            <div class="social-list">
                <a href="#" class="item">
                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/946371/assets/ic_btn_google.svg?1712656028620" alt="" srcset="">
                </a>
                <a href="#" class="item">
                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/946371/assets/ic_btn_facebook.svg?1712656028620" alt="">
                </a>
            </div>
        </div>

        <div class="regis-form">
            <span>Bạn đã có tài khoản?</span>
            <a href="login.php">Đăng nhập ngay!</a>
        </div>
    </div>
</div>
</main>

<?php
include("./front-end/fe_footer.php");
?>