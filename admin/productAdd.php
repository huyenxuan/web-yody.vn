<?php
include("view/header.php");
include("view/sidebar.php");
include("class/classifyClass.php");
include("class/productClass.php");

$classify = new classify();
?>
<!-- main content -->
<style>
    .main-content {
        height: 100%;
    }

    form {
        padding-bottom: 30px;
    }

    label {
        margin-left: 5px;
    }

    select,
    input,
    textarea {
        outline: none;
        height: 30px;
        width: 180px;
        border: 1px solid #333;
        border-radius: 5px;
        padding-left: 10px;
        margin-bottom: 20px;
    }

    select {
        margin-right: 15px;
    }

    textarea {
        padding-top: 10px;
        width: 400px;
        height: 150px;
    }

    .file input {
        border: none;
        cursor: pointer;
    }

    button {
        width: 60px;
        height: 35px;
        border-radius: 5px;
        border: 1px solid #333;
        box-sizing: unset;
    }

    label,
    .label {
        display: flex;
        /* width: 100px; */
    }

    label span {
        color: red;
    }

    h3 {
        margin: 2px 0 2px 4px;
    }
</style>
<div class="main-content">
    <h2>Thêm sản phẩm</h2>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="product-name">
            <label for="">Tên sản phẩm <span>*</span></label>
            <input required type="text" name="product_name" placeholder="Nhập tên sản phẩm">
        </div>
        <div class="category">
            <label for="">Danh mục sản phẩm <span style="margin-right: 55px">*</span></label>
            <select name="category_id" id="category">
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
            <select name="categorySub_id" id="categorySub">
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
            </select>
        </div>
        <div class="classify">
            <label for="">Loại sản phẩm <span style="margin-right: 55px">*</span></label>
            <select>
                <option value="">--- Loại sản phẩm ---</option>
                <option value=""></option>
            </select>
        </div>
        <div class="price">
            <label for="">Giá sản phẩm <span>*</span></label>
            <input required type="text" name="price-old" placeholder="Giá sản phẩm">
            <input type="text" name="price-sale" placeholder="Giá khuyến mại">
        </div>
        <div class="describe">
            <label for="">Mô tả sản phẩm <span>*</span></label>
            <textarea name="" id="" cols="30" rows="10" placeholder="Mô tả sản phẩm"></textarea>
        </div>
        <h3>Ảnh sản phẩm</h3>
        <div class="file">
            <div class="label">
                <label for="">Ảnh đại diện sản phẩm <span style="margin-right: 25px">*</span></label>
                <label for="" style="margin-left: 10px;">Ảnh mô tả <span style="color: red">*</span></label>
            </div>
            <input type="file" style="padding-left: 0">
            <input type="file" name="" id="" multiple>
        </div>
        <button>Thêm</button>
    </form>
</div>