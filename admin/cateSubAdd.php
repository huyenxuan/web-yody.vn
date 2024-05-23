<?php
include("view/header.php");
include("view/sidebar.php");
include("class/cateSubClass.php");

$categorySub = new categorySub;

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $category_id =  $_POST['category_id'];
    $categorySub_name = $_POST['categorySub_name'];
    $insert_categorySub = $categorySub->insert_categorySub($category_id, $categorySub_name);
    // Chuyển hướng người dùng đến trang 
    header("Location: cateSubAdd.php?categorySub_name=" . urlencode($categorySub_name));
    exit();
}
?>
<title>Thêm danh mục con</title>
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
    }

    button {
        width: 60px;
        height: 35px;
        border-radius: 5px;
        border: 1px solid #333;
        box-sizing: unset;
    }
</style>
<div class="main-content">
    <h2>Thêm danh mục</h2>
    <form action="" method="POST">
        <div class="father">
            <label for="">Tên danh mục cha <span style="color: red">*</span></label><br>
            <select name="category_id" id="">
                <option value="">--- Danh mục cha ---</option>
                <?php
                $show_category = $categorySub->show_category();
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
        </div>
        <div class="sub" style="margin: 20px 0">
            <label for="">Tên danh mục con <span style="color: red">*</span></label><br>
            <input required name="categorySub_name" type="text" placeholder="Tên danh mục con">
        </div>
        <button>Thêm</button>
    </form>
</div>