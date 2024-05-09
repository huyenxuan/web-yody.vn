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
    <h2>Nhập tài khoản và mật khẩu để đăng nhập!</h2>
    <form action="index.php" method="POST">
        <div>
            <label for="">Nhập tài khoản</label><br>
            <input required type="text" name="account"><br>
        </div>
        <div class="password">
            <label for="">Mật khẩu</label><br>
            <input required type="password" name="password" id="pass"><br>
            <i id="togglePassword" class="fa-solid fa-eye"></i>
        </div>
        <button type="submit" name="login">Đăng nhập</button>
    </form>
</body>
<script src="../js/loginAdmin.js"></script>
</html>