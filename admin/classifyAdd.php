<?php
include("view/header.php");
include("view/sidebar.php");
include("class/classifyClass.php");

$classify = new classify;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category_id = $_POST['category_id'];
    $categorySub_id = $_POST['categorySub_id'];
    $classify_name = $_POST['classify_name'];
    $insert_classify = $classify->insert_classify($category_id, $categorySub_id, $classify_name);
    // Chuyển hướng người dùng đến trang cateAdd.php
    header("Location: classifyAdd.php?category_name=" . urlencode($result['category_name']) . "&classify_name=" . urlencode($classify_name));
    exit();
}
?>

<!-- main content -->
<style>
    select,
    input {
        outline: none;
        height: 30px;
        width: 180px;
        border: 1px solid #333;
        border-radius: 5px;
        padding-left: 10px;
        margin-bottom: 20px;
    }

    button {
        width: 60px;
        height: 35px;
        border-radius: 5px;
        border: 1px solid #333;
    }
</style>
<div class="main-content">
    <h2>Thêm loại sản phẩm</h2>
    <form action="" method="POST">
        <label for="">Danh mục sản phẩm <span style="color:red">*</span></label><br>
        <select name="category_id" id="">
            <option value="">--- Danh mục cha ---</option>
            <?php
            $show_category = $classify->show_category();
            if ($show_category) {
                while ($result = $show_category->fetch_assoc()) {
            ?>
                    <option value="<?php echo $result['category_id'] ?>">
                        <?php echo $result['category_name'] ?>
                    </option>
            <?php
                }
            }
            ?>
        </select>
        <select name="categorySub_id" id="">
            <option value="">--- Danh mục con ---</option>
            <?php
            $show_categorySub = $classify->show_categorySub();
            if ($show_categorySub) {
                while ($resultSub = $show_categorySub->fetch_assoc()) {
            ?>
                    <option value="<?php echo $resultSub['categorySub_id'] ?>">
                        <?php echo $resultSub['categorySub_name'] ?>
                    </option>
            <?php
                }
            }
            ?>
        </select><br>
        <label for="">Tên loại sản phẩm <span style="color:red">*</span></label><br>
        <input required type="text" name="classify_name" placeholder="Nhập tên loại sản phẩm">
        <button>Thêm</button>
    </form>
</div>