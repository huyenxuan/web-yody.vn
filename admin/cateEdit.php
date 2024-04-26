<?php
include("view/header.php");
include("view/sidebar.php");
include("class/cateSubClass.php");

$categorySub = new categorySub;
$categorySub_id = $_GET['categorySub_id'];
$get_categorySub = $categorySub->get_categorySub($categorySub_id);

if($get_categorySub) {
    $resultSub = $get_categorySub->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $category_id = $_POST['category_id'];
    $categorySub_name = $_POST['categorySub_name'];
    $update_categorySub = $categorySub->update_categorySub($category_id, $categorySub_name, $categorySub_id);
    header("Location: cateShow.php");
    exit();
}

?>

<!-- main content -->
<style>
    .hide {
        display: none;
    }
    .erro h3 {
        color: red;
    }
    input {
        outline: none;
        height: 30px;
        width: 200px;
        border: 1px solid #333;
        border-radius: 5px;
        padding-left: 10px;
    }
    p {
        margin: 0;
    }
    button {
        width: 60px;
        height: 35px;
        border-radius: 5px;
        border: 1px solid #333;
    }
</style>
<div class="main-content">
    <h2>Sửa danh mục</h2>
    <div class="erro hide">
        <h3>Không tìm thấy id sản phẩm</h3>
    </div>
    <form action="" method="POST">
        <p>Danh mục cha</p>
        <select name="category_id" id="">
            <option value="#">--- Chọn danh mục ---</option>
            <?php
            $show_category = $categorySub->show_category();
            if ($show_category) {
                while ($result = $show_category->fetch_assoc()) {
            ?>
                    <option <?php if ($resultSub['category_id'] == $result['category_id']) {
                                echo 'selected';
                            } ?> value="<?php echo $result['category_id'] ?>">
                        <?php echo $result['category_name'] ?>
                    </option>
            <?php
                }
            }
            ?>
        </select><br><br>
        <p>Danh mục con</p>
        <input required type="text" name="categorySub_name" value="<?php echo $resultSub['categorySub_name'] ?>">
        <button>Sửa</button>
    </form>
</div>