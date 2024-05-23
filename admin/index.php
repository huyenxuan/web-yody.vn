<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location: login.php');
}
?>
<?php
include("view/header.php");
include("view/sidebar.php");
?>
<title>Chào mừng đến với trang quản trị Yody</title>
<!-- main content -->
<div class="main-content">
    <h1>Xin chào Admin Yody!</h1>
</div>