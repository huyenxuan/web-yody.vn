<?php
include("view/header.php");
include("view/sidebar.php");
include("class/cateClass.php");

$category = new category;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category_name = $_POST['category_name'];
    $insert_category = $category->insert_category($category_name);
    // Chuyển hướng người dùng đến trang cateAdd.php 
    header("Location: cateAdd.php?category_name=" . urlencode($category_name));
    exit();
}
?>
<title>Thêm danh mục</title>
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
</style>
<div class="main-content">
    <h2>Thêm danh mục</h2>
    <form action="" method="POST">
        <label for="">Tên danh mục cha <span style="color: red">*</span></label><br>
        <input required name="category_name" type="text" placeholder="Tên danh mục cha"><br>
        <button>Thêm</button>
    </form>
</div>