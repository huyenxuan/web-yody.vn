<?php
session_start();

include("class/loginAdmin.php");
$loginAdmin = new loginAdmin();
$login = $loginAdmin->login();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['account'];
    $pass = $_POST['password'];

    if ($login) {
        $found = false;
        while ($resultAcc = $login->fetch_assoc()) {
            if ($resultAcc['email'] == $email && $resultAcc['password'] == $pass) {
                if ($resultAcc['role'] == 1) {
                    $_SESSION['email'] = $email;
                    header('Location: index.php');
                    exit();
                } else {
                    echo '<h1 style="color:red; text-align: center">Bạn không có quyền truy cập!</h1>';
                }
            }
        }
        // nếu như found = false thì báo lỗi không đăng nhập được
        if (!$found) {
            echo '<h1 style="color:red; text-align: center">Tên đăng nhập hoặc mật khẩu không đúng!</h1>';
        }
    }
}
?>
<title>Login - Admin</title>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' rel='stylesheet'>
<link rel="stylesheet" href="../css/loginAdmin.css">
<h2>Nhập tài khoản và mật khẩu để đăng nhập!</h2>
<form action="login.php" method="POST">
    <div>
        <label for="">Nhập tài khoản</label><br>
        <input required type="text" name="account" placeholder="Nhập email admin..." value=""><br>
    </div>
    <div class="password">
        <label for="">Mật khẩu</label><br>
        <input required type="password" name="password" placeholder="Nhập mật khẩu..." value="" id="pass"><br>
        <i id="togglePassword" class="fa-solid fa-eye"></i>
    </div>
    <button type="submit" name="login">Đăng nhập</button>
</form>
</body>

<script src="../js/loginAdmin.js"></script>

</html>