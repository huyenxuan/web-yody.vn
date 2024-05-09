<?php
include("./front-end/fe_header.php");
include("admin/format.php");

$product = new product;
$format = new format;

$categorySub_id = $_GET['categorySub_id'];
$show_product = $product->show_productCateSub($categorySub_id);

$show_categorySub = $product->categorySub($categorySub_id);
$result = $show_categorySub->fetch_assoc();
?>
<link rel="stylesheet" href="./css/category.css">
<style>
    .wrapper-ctn {
        margin-top: 150px;
    }

    .list-product .row {
        justify-content: unset;
    }

    .product-ctn {
        margin-right: 34px;
    }

    .product-ctn:nth-child(5n) {
        margin-right: 0;
    }

    h3 {
        color: #FCAF17;
        width: 100%;
        display: flex;
        justify-content: center;
        margin-bottom: 10px;
    }
    .product-name {
        justify-content: unset;
    }
</style>
<!-- product -->
<div class="wrapper-ctn">
    <div class="main-content">
        <div class="list-product">
        <h3 class="name-categorySub"><?php echo $result['categorySub_name'] ?> - <?php echo $result['category_name'] ?></h3>
            <div class="row">
                <?php
                if ($show_product) {
                    while ($resultProduct = $show_product->fetch_assoc()) {
                ?>
                        <div class="product-ctn">
                            <div class="item-product">
                                <div class="product-thumbnail">
                                    <a href="detail.php?product_id=<?php echo $resultProduct['product_id'] ?>" class="image">
                                        <img src="./admin/uploads/<?php echo $resultProduct['product_img'] ?>" alt="">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name"><a href="detail.php?product_id=<?php echo $resultProduct['product_id'] ?>"><?php echo $resultProduct['product_name'] ?></a>
                                    </h3>
                                    <div class="product-price" style="display: flex">
                                        <?php if ($resultProduct['price_sale'] && $resultProduct['price_sale'] != 0) : ?>
                                            <div class="price-sale" style="margin-right: 10px"><?php echo $format->formatMoney($resultProduct['price_sale']) ?></div>
                                            <div class="price-old del" style="text-decoration: line-through;"><?php echo $format->formatMoney($resultProduct['price_old']) ?></div>
                                        <?php else : ?>
                                            <div class="price-old"><?php echo $format->formatMoney($resultProduct['price_old']) ?></div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="product-option">
                                        <div class="product-option-ctn">
                                            <div class="color timthan select">
                                                <img src="https://bizweb.dktcdn.net/thumb/thumb/100/438/408/products/ao-polo-nam-yodyapm7129-tit-26.jpg?v=1711785308767" alt="">
                                            </div>
                                            <div class="color den">
                                                <img src="https://bizweb.dktcdn.net/thumb/thumb/100/438/408/products/ao-polo-nam-yody-apm7129-den-8.jpg?v=1711952767020" alt="">
                                            </div>
                                            <div class="color den1">
                                                <img src="https://bizweb.dktcdn.net/thumb/thumb/100/438/408/products/ao-polo-nam-yody-apm7129-dn1-1.jpg?v=1712127437410" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <h3>Hiện tại chưa có sản phẩm</h3>
                <?php
                }
                ?>
            </div>
        </div>
        <div class="more">
            <a href="">XEM THÊM</a>
        </div>
    </div>
    </main>
</div>
<?php
include("./front-end/fe_footer.php");
?>