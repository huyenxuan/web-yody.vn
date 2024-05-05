<?php
include("./front-end/fe_header.php");
include("admin/class/showFrontEnd.php");
include("admin/format.php");

$format = new format;
$product = new product;

$keyword = $_GET['keyword'];
$show_search = $product->search_product($keyword);
?>
<link rel="stylesheet" href="./css/category.css">
<style>
    .wrapper-ctn {
        margin-top: 145px;
    }

    .result-search,
    .text-search {
        text-align: center;
        color: #FCAF17;
        text-transform: uppercase;
        margin-top: 0;
        font-family: Arial, Helvetica, sans-serif;
    }

    .result-search {
        margin-bottom: 20px;
    }

    .result-search span {
        color: #FCAF17;
        text-transform: none;
    }

    .text-search {
        text-transform: none;
        margin: 50px 0 10px;
    }

    main {
        margin-left: 0;
    }

    .wrapper-ctn {
        margin-bottom: 30px;
    }
    .none-search {
        width: 100%;
        text-align: center;
        text-transform: uppercase;
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
</style>
<div class="wrapper-ctn">
    <div class="main-content">
        <p class="text-search">Tìm kiếm</p>
        <h3 class="result-search">Kết quả tìm kiếm sản phẩm "<span><?php echo $keyword ?></span>"</h3>
        <div class="list-product">
            <div class="row">
                <?php
                if ($show_search) {
                    while ($resultSearch = $show_search->fetch_assoc()) {
                ?>
                        <div class="product-ctn">
                            <div class="item-product">
                                <div class="product-thumbnail">
                                    <a href="detail.php?product_id=<?php echo $resultSearch['product_id'] ?>" class="image">
                                        <img src="./admin/uploads/<?php echo $resultSearch['product_img'] ?>" alt="">
                                    </a>
                                </div>
                                <div class="product-info">
                                    <h3 class="product-name"><a href="detail.php?product_id=<?php echo $resultSearch['product_id'] ?>"><?php echo $resultSearch['product_name'] ?></a>
                                    </h3>
                                    <div class="product-price" style="display: flex">
                                        <?php if ($resultSearch['price_sale'] && $resultSearch['price_sale'] != 0) : ?>
                                            <div class="price-sale" style="margin-right: 10px"><?php echo $format->formatMoney($resultSearch['price_sale']) ?></div>
                                            <div class="price-old del" style="text-decoration: line-through;"><?php echo $format->formatMoney($resultSearch['price_old']) ?></div>
                                        <?php else : ?>
                                            <div class="price-old"><?php echo $format->formatMoney($resultSearch['price_old']) ?></div>
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
                <h3 class="none-search">Không tìm thấy kết quả</h3>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php
include("./front-end/fe_footer.php");
?>