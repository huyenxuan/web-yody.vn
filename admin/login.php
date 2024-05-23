<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Admin</title>
    <link rel="stylesheet" href="../css/loginAdmin.css">
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' rel='stylesheet'>

</head>

<body>
    <?php
    include("class/loginAdmin.php");
    $loginAdmin = new loginAdmin();
    $login = $loginAdmin->login();

    session_start();
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
            if (!$found) {
                echo '<h1 style="color:red; text-align: center">Tên đăng nhập hoặc mật khẩu không đúng!</h1>';
            }
        }
    }
    ?>
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