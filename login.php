<?php
include("./front-end/fe_header.php");
?>
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
</style>
<!-- register -->
<div class="main-content">
    <div class="login-wrap" style="height: 580px;">
        <div class="title">
            <span>ĐĂNG</span><span style="color: #FCAF17;"> NHẬP</span>
        </div>
        <form action="" class="form-login">
            <input type="text" name="" id="email" placeholder="Email">
            <input type="password" name="" id="pass" placeholder="Mật khẩu">
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
            <a href="/page/register.html">Đăng ký ngay!</a>
        </div>
    </div>
</div>
</main>

<?php
include("./front-end/fe_footer.php");
?>