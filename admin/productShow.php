<?php
include("view/header.php");
include("view/sidebar.php");
include("format.php");
include("class/productClass.php");

$product = new product;
$format = new format;
$show_product = $product->show_product();
?>
<title>Danh sách sản phẩm</title>
<!-- main content -->
<style>
    .main-content {
        height: 100% !important;
    }

    table {
        width: 95%;
        text-align: center;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid black;
    }

    tr:nth-child(even) {
        background-color: #cfe2f3;
    }

    form {
        padding-bottom: 30px;
    }

    a {
        text-decoration: none;
    }

    .action a,
    .action span {
        text-decoration: none;
        font-size: 15px;
        cursor: pointer;
        color: black;
    }
</style>
<div class="main-content" style="height: 100%;">
    <h2>Danh sách sản phẩm</h2>
    <form action="" method="POST">
        <table>
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Giá sản phẩm</th>
                <th>Giá sale</th>
                <th>Mô tả</th>
                <th>Ảnh sản phẩm</th>
                <th>Hành động</th>
            </tr>
            <?php
            if ($show_product) {
                $i = 0;
                while ($result = $show_product->fetch_assoc()) {
                    $i++;
            ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['product_name'] ?></td>
                        <td><?php echo $format->formatMoney($result['price_old']) ?></td>
                        <?php
                        if ($result['price_sale'] && $result['price_sale'] != 0) : ?>
                            <td style="color:red"><?php echo $format->formatMoney($result['price_sale']) ?></td>
                        <?php else : ?>
                            <td style="color:red"></td>
                        <?php endif; ?>
                        <td><?php echo $format->textShorten($result['product_desc'], 20) ?></td>
                        <td>
                            <img src="uploads/<?php echo $result['product_img'] ?>" alt="" width="35px">
                        </td>
                        <td class="action">
                            <a href="productEdit.php?product_id=<?php echo $result['product_id'] ?>">Sửa</a>
                            <span>|</span>
                            <a onclick="return confirm('Bạn có muốn xóa sản phẩm này không?')" href="productDel.php?product_id=<?php echo $result['product_id'] ?>">Xóa</a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </form>
</div>