<?php
ob_start(); // Bắt đầu bộ đệm đầu ra
session_start();

include("./front-end/fe_header.php");
$account = new account();
$loginUser = $account->loginUser();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if ($loginUser) {
        while ($resultUser = $loginUser->fetch_assoc()) {
            if ($resultUser['email'] == $email && $resultUser['password'] == $pass) {
                $_SESSION['email'] = $email;
                header('Location: index.php');
                exit();
            }
        }
    }
}

?>
<title>Đăng nhập Yody</title>
<link rel="stylesheet" href="./css/account.css">
<style>
    .form-login {
        position: relative;
    }

    .form-login i {
        position: absolute;
        display: block;
        top: 100px;
        right: 15px;
        cursor: pointer;
    }
    .main-content {
        margin-top: 50px;
    }
</style>
<!-- register -->
<div class="main-content">
    <div class="login-wrap" style="height: 580px;">
        <div class="title">
            <span>ĐĂNG</span><span style="color: #FCAF17;"> NHẬP</span>
        </div>
        <form action="" class="form-login" method="POST">
            <input required type="text" name="email" id="email" placeholder="Email">
            <input required type="password" name="pass" id="pass" placeholder="Mật khẩu">
            <i id="togglePassword" class="fa-solid fa-eye"></i>
            <button type="submit">Đăng nhập</button>
        </form>
        <script>
            const pass = document.getElementById("pass");
            const togglePassword = document.getElementById("togglePassword");

            togglePassword.addEventListener('click', () => {
                if (pass.getAttribute("type") === "password") {
                    pass.setAttribute("type", "text");
                    togglePassword.className = "fa-solid fa-eye-slash";
                } else {
                    pass.setAttribute("type", "password");
                    togglePassword.className = "fa-solid fa-eye";
                }
            });
        </script>
        <a href="" class="forgot-pass">Quên mật khẩu</a>
        <div class="social-login">
            <div class="txt">
                Hoặc đăng nhập bằng
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
            <span>Bạn chưa có tài khoản?</span>
            <a href="register.php">Đăng ký ngay!</a>
        </div>
    </div>
</div>
</main>

<?php
include("./front-end/fe_footer.php");
ob_end_flush(); // Gửi tất cả đầu ra từ bộ đệm
?>