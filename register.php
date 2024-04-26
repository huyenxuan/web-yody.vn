<?php
include("./front-end/fe_header.php");
?>
<link rel="stylesheet" href="./css/account.css">
<!-- register -->
<div class="main-content">
    <div class="login-wrap">
        <p class="txt-hd">Chào mừng bạn đến với Yody!</p>
        <div class="title">
            <span>ĐĂNG</span><span style="color: #FCAF17;"> KÝ</span>
        </div>
        <form action="" class="form-login">
            <input type="name" name="" id="" placeholder="Họ và tên">
            <input type="text" name="" id="" placeholder="Số điện thoại">
            <input type="email" name="" id="" placeholder="Email">
            <input type="password" name="" id="" placeholder="Mật khẩu">
            <button type="submit">Đăng ký</button>
        </form>

        <a href="" class="forgot-pass">Quên mật khẩu</a>

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
            <a href="/page/login.html">Đăng nhập ngay!</a>
        </div>
    </div>
</div>
</main>

<?php
include("./front-end/fe_footer.php");
?>