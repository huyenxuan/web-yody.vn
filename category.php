<?php
include("./front-end/fe_header.php");
include("admin/format.php");
include("admin/class/showDetail.php");

$product = new product;
$format = new format;

$category_id = $_GET['category_id'];
$show_product = $product->show_productCate($category_id);
?>
<link rel="stylesheet" href="./css/category.css">
<style>
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
<!-- category -->
<div class="wrapper-ctn" style="margin-top: 125px;">
    <div class="row">
        <div class="danhMuc-noiBat">
            <p class="hd">danh mục nổi bật</p>
            <div class="list-noiBat">
                <div class="item">
                    <span class="hot"></span>
                    <a href="">
                        <div class="img-wrap">
                            <img src="https://bizweb.dktcdn.net/100/438/408/themes/946371/assets/page_nu_cate_icon_1.svg?1712656028620" alt="">
                        </div>
                        <span>Áo Polo</span>
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <div class="img-wrap">
                            <img src="https://bizweb.dktcdn.net/100/438/408/themes/946371/assets/page_nu_cate_icon_2.svg?1712656028620" alt="">
                        </div>
                        <span>Áo Sơ Mi</span>
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <span class="sale"></span>
                        <div class="img-wrap">
                            <img src="https://bizweb.dktcdn.net/100/438/408/themes/946371/assets/page_nu_cate_icon_3.svg?1712656028620" alt="">
                        </div>
                        <span>Váy Đầm</span>
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <div class="img-wrap">
                            <img src="https://bizweb.dktcdn.net/100/438/408/themes/946371/assets/page_nu_cate_icon_4.svg?1712656028620" alt="">
                        </div>
                        <span>Áo Khoác</span>
                    </a>
                </div>
                <div class="item">
                    <span class="hot"></span>
                    <a href="">
                        <span class="new"></span>
                        <div class="img-wrap">
                            <img src="https://bizweb.dktcdn.net/100/438/408/themes/946371/assets/page_nu_cate_icon_5.svg?1712656028620" alt="">
                        </div>
                        <span>Áo Thun</span>
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <div class="img-wrap">
                            <img src="https://bizweb.dktcdn.net/100/438/408/themes/946371/assets/page_nu_cate_icon_6.svg?1712656028620" alt="">
                        </div>
                        <span>Quần Âu</span>
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <div class="img-wrap">
                            <img src="https://bizweb.dktcdn.net/100/438/408/themes/946371/assets/page_nu_cate_icon_7.svg?1712656028620" alt="">
                        </div>
                        <span>Chân Váy</span>
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <div class="img-wrap">
                            <img src="https://bizweb.dktcdn.net/100/438/408/themes/946371/assets/page_nu_cate_icon_8.svg?1712656028620" alt="">
                        </div>
                        <span>quần kaki</span>
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <div class="img-wrap">
                            <img src="https://bizweb.dktcdn.net/100/438/408/themes/946371/assets/page_nu_cate_icon_9.svg?1712656028620" alt="">
                        </div>
                        <span>phụ kiện</span>
                    </a>
                </div>
                <div class="item">
                    <span class="hot"></span>
                    <a href="">
                        <div class="img-wrap">
                            <img src="https://bizweb.dktcdn.net/100/438/408/themes/946371/assets/page_nu_cate_icon_10.svg?1712656028620" alt="">
                        </div>
                        <span>quần jeans</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product -->
<div class="wrapper-ctn">
    <div class="main-content">
        <p class="danhMuc-title">ĐỀ XUẤT CHO BẠN</p>
        <nav class="danhMuc-navBar">
            <div class="item item-active"><a href="">Bán Chạy Nhất</a></div>
            <div class="item"><a href="">Hàng Mới Về</a></div>
            <div class="item"><a href="">Áo</a></div>
            <div class="item"><a href="">Quần</a></div>
            <div class="item"><a href="">Bộ Đồ Nam</a></div>
            <div class="item"><a href="">Đồ Mặc Trong</a></div>
            <div class="item"><a href="">Phụ Kiện</a></div>
        </nav>
        <div class="list-product">
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