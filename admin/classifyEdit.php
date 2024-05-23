<?php
include("class/classifyClass.php");

$classify = new classify;
$classify_id = $_GET['classify_id'];
$get_classify = $classify->get_classify($classify_id);

if ($get_classify) {
    $resultA = $get_classify->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $categorySub_id = $_POST['categorySub_id'];
    $classify_name = $_POST['classify_name'];
    $update_classify = $classify->update_classify($categorySub_id, $classify_name, $classify_id);
    header("Location: classifyShow.php");
    exit();
}
include("view/header.php");
include("view/sidebar.php");
?>
<title>Chỉnh sửa phân loại sản phẩm</title>
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
        margin-bottom: 10px;
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
    <h2>Sửa loại sản phẩm</h2>
    <form action="" method="POST">
        <p>Danh mục cha</p>
        <select name="category_id" id="category_id">
            <option value="#">--- Chọn danh mục ---</option>
            <?php
            $show_category = $classify->show_category();
            if ($show_category) {
                while ($result = $show_category->fetch_assoc()) {
            ?>
                    <option <?php if ($resultA['category_id'] == $result['category_id']) {
                                echo 'selected';
                            } ?> value="<?php echo $result['category_id'] ?>">
                        <?php echo $result['category_name'] ?>
                    </option>
            <?php
                }
            }
            ?>
        </select><br>
        <p>Danh mục con</p>
        <select name="categorySub_id" id="categorySub_id">
            <option value="">--- Danh mục con ---</option>
            <?php
            $show_categorySub = $classify->show_categorySub();
            if ($show_categorySub) {
                while ($result = $show_categorySub->fetch_assoc()) {
            ?>
                    <option <?php if ($resultA['categorySub_id'] == $result['categorySub_id']) {
                        echo 'selected';
                    } ?> value="<?php echo $result['categorySub_id'] ?>">
                        <?php echo $result['categorySub_name'] ?>
                    </option>
            <?php
                }
            }
            ?>
        </select><br>
        <p>Loại sản phẩm</p>
        <input required type="text" name="classify_name" value="<?php echo $resultA['classify_name'] ?>">
        <button>Sửa</button>
    </form>
</div>
<script>
    $(document).ready(function() {
        $("#category_id").change(function() {
            var cate= $(this).val();
            $.get("productAddAjax.php", {
                category_id: cate
            }, function(data) {
                $("#categorySub_id").html(data);
            });
        });
    });
</script>