<?php
include("./front-end/fe_header.php");
include("admin/format.php");

$product = new product;
$format = new format;

$show_productFlashSale = $product->show_productFlashSale();
$show_productNew = $product->show_productNew();
$show_productBestSaler = $product->show_productBestSaler();
$show_productPolo = $product->show_productPolo();
$show_productSport = $product->show_productSport();
$show_productTShirt = $product->show_productTShirt();
$show_productJeans = $product->show_productJeans();
$show_productOffice = $product->show_productOffice();
$show_productAccessory = $product->show_productAccessory();
?>

<title>YODY - Look Good - Feel Good</title>
<link rel="stylesheet" href="css/trangchu.css">
<style>
    .del {
        text-decoration: line-through;
        color: gray;
    }
</style>
<!-- banner -->
<div class="banner">
    <div class="slider">
        <!-- item ảnh -->
        <div class="list-banner">
            <div class="item-banner">
                <a href=""><img src="https://bizweb.dktcdn.net/100/438/408/themes/936254/assets/slider_1.jpg?1709874123775" alt="" title="Dọn kho siêu to"></a>
            </div>
            <div class="item-banner">
                <a href=""><img src="https://bizweb.dktcdn.net/100/438/408/themes/936254/assets/slider_2.jpg?1709874123775" alt="" title="Tặng quà siêu ưu đãi 50%"></a>
            </div>
            <div class="item-banner">
                <a href=""><img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/slider_1.jpg?1712047143487" alt="" title=""></a>
            </div>
            <div class="item-banner">
                <a href=""><img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/slider_2.jpg?1712047143487" alt="" title="Tặng quà siêu ưu đãi 50%"></a>
            </div>
        </div>
        <!-- buttons -->
        <div class="buttons-banner">
            <button id="prev">
                <img src="https://bizweb.dktcdn.net/100/438/408/themes/936254/assets/icon-prev-danhmuc.svg" style="width: 30px;" alt="">
            </button>
            <button id="next">
                <img src="https://bizweb.dktcdn.net/100/438/408/themes/936254/assets/icon-next-danhmuc.svg" style="width: 30px;" alt="">
            </button>
        </div>
        <!-- dots -->
        <div class="dots-banner">
            <li class="active"></li>
            <li></li>
            <li></li>
            <li></li>
        </div>
    </div>
</div>

<!-- promotion -->
<div class="promotion">
    <div class="container">
        <div class="text-promotion">đặc biệt</div>
        <div class="item-promotion item1">
            <div class="wrap-content">
                <a href="">
                    <div class="image">
                        <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_khuyenmai_3_image.png?1711959001087" alt="">
                    </div>
                    <div class="title">Giảm ngay</div>
                </a>
            </div>
        </div>
        <div class="item-promotion item2">
            <div class="wrap-content">
                <a href="">
                    <div class="image">
                        <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_khuyenmai_2_image.png?1711959001087" alt="">
                    </div>
                    <div class="title">Giảm ngay</div>
                </a>
            </div>
        </div>
        <div class="item-promotion item3">
            <div class="wrap-content">
                <a href="">
                    <div class="image">
                        <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_khuyenmai_4_image.png?1711959001087" alt="">
                    </div>
                    <div class="title">Giảm ngay</div>
                </a>
            </div>
        </div>
    </div>
</div>

<!-- category -->
<div class="category">
    <div class="category-ctn">
        <div class="menu-list">
            <div class="item-male cate-active">Nam</div>
            <div class="item-children">Trẻ em</div>
            <div class="item-female">Nữ</div>
        </div>
        <!-- male -->
        <div class="slide-content-male">
            <div class="slide-wrapper male">
                <ul class="list-cate">
                    <li>
                        <div class="group-item">
                            <a href="classify.php?classify_id=27">
                                <div class="image">
                                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_danhmuc_2_child_3_image.png?1712051687905" alt="">
                                </div>
                                <div class="title">
                                    áo polo
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="group-item">
                            <a href="classify.php?classify_id=28">
                                <div class="image">
                                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_danhmuc_2_child_2_image.png?1712051687905" alt="">
                                </div>
                                <div class="title">
                                    áo thun
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="group-item">
                            <a href="classify.php?classify_id=30">
                                <div class="image">
                                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_danhmuc_2_child_6_image.png?1712051687905" alt="">
                                </div>
                                <div class="title">
                                    áo sơ mi
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="group-item">
                            <a href="classify.php?classify_id=36">
                                <div class="image">
                                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_danhmuc_2_child_8_image.png?1712051687905" alt="">
                                </div>
                                <div class="title">
                                    quần jeans
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="group-item">
                            <a href="classify.php?classify_id=34">
                                <div class="image">
                                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_danhmuc_2_child_9_image.png?1712051687905" alt="">
                                </div>
                                <div class="title">
                                    quần âu
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="group-item">
                            <a href="classify.php?classify_id=35">
                                <div class="image">
                                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_danhmuc_2_child_7_image.png?1712051687905" alt="">
                                </div>
                                <div class="title">
                                    quần kaki
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="group-item">
                            <a href="classify.php?classify_id=37">
                                <div class="image">
                                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_danhmuc_2_child_10_image.png?1712051687905" alt="">
                                </div>
                                <div class="title">
                                    quần short
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="group-item">
                            <a href="categorySub.php?categorySub_id=12">
                                <div class="image">
                                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_danhmuc_2_child_5_image.png?1712051687905" alt="">
                                </div>
                                <div class="title">
                                    bộ đồ
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="group-item">
                            <a href="classify.php?classify_id=31">
                                <div class="image">
                                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_danhmuc_2_child_1_image.png?1712051687905" alt="">
                                </div>
                                <div class="title">
                                    áo khoác
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="group-item">
                            <a href="classify.php?classify_id=46">
                                <div class="image">
                                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_danhmuc_2_child_11_image.png?1712051687905" alt="">
                                </div>
                                <div class="title">
                                    đồ lót
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="group-item">
                            <a href="categorySub.php?categorySub_id=16">
                                <div class="image">
                                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_danhmuc_2_child_12_image.png?1712051687905" alt="">
                                </div>
                                <div class="title">
                                    phụ kiện
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="buttons-cate">
                <button id="" class="cate-prev disable">
                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/icon-prev-danhmuc.svg" style="width: 30px;" alt="">
                </button>
                <button id="cate-next" class="cate-next">
                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/936254/assets/icon-next-danhmuc.svg" style="width: 30px;" alt="">
                </button>
            </div>
        </div>
        <!-- children -->
        <div class="slide-content-children none">
            <div class="slide-wrapper children">
                <ul class="list-cate">
                    <li>
                        <div class="group-item">
                            <a href="classify.php?classify_id=51">
                                <div class="image">
                                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_danhmuc_3_child_4_image.png?1712119327377" alt="">
                                </div>
                                <div class="title">
                                    áo polo
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="group-item">
                            <a href="classify.php?classify_id=52">
                                <div class="image">
                                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_danhmuc_3_child_2_image.png?1712119327377" alt="">
                                </div>
                                <div class="title">
                                    áo thun
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="group-item">
                            <a href="classify.php?classify_id=57">
                                <div class="image">
                                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_danhmuc_3_child_7_image.png?1712119327377" alt="">
                                </div>
                                <div class="title">
                                    Quần dài
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="group-item">
                            <a href="classify.php?classify_id=59">
                                <div class="image">
                                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_danhmuc_3_child_8_image.png?1712119327377" alt="">
                                </div>
                                <div class="title">
                                    quần short
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="group-item">
                            <a href="categorySub.php?categorySub_id=22">
                                <div class="image">
                                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_danhmuc_3_child_5_image.png?1712119327377" alt="">
                                </div>
                                <div class="title">
                                    chân váy
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="group-item">
                            <a href="categorySub.php?categorySub_id=23">
                                <div class="image">
                                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_danhmuc_3_child_6_image.png?1712119327377" alt="">
                                </div>
                                <div class="title">
                                    váy đầm
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="group-item">
                            <a href="categorySub.php?categorySub_id=19">
                                <div class="image">
                                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_danhmuc_3_child_3_image.png?1712119327377" alt="">
                                </div>
                                <div class="title">
                                    đồ bộ
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="group-item">
                            <a href="classify.php?classify_id=53">
                                <div class="image">
                                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_danhmuc_3_child_1_image.png?1712119327377" alt="">
                                </div>
                                <div class="title">
                                    áo khoác
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="buttons-cate">
                <button class="cate-prev disable">
                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/icon-prev-danhmuc.svg" style="width: 30px;" alt="">
                </button>
                <button class="cate-next">
                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/936254/assets/icon-next-danhmuc.svg" style="width: 30px;" alt="">
                </button>
            </div>
        </div>
        <!-- female -->
        <div class="slide-content-female none">
            <div class="slide-wrapper female">
                <ul class="list-cate">
                    <li>
                        <div class="group-item">
                            <a href="classify.php?classify_id=1">
                                <div class="image">
                                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_danhmuc_1_child_3_image.png?1712119327377" alt="">
                                </div>
                                <div class="title">
                                    áo polo
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="group-item">
                            <a href="classify.php?classify_id=2">
                                <div class="image">
                                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_danhmuc_1_child_2_image.png?1712119327377" alt="">
                                </div>
                                <div class="title">
                                    áo thun
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="group-item">
                            <a href="classify.php?classify_id=4">
                                <div class="image">
                                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_danhmuc_1_child_9_image.png?1712119327377" alt="">
                                </div>
                                <div class="title">
                                    áo sơ mi
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="group-item">
                            <a href="classify.php?classify_id=3">
                                <div class="image">
                                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_danhmuc_1_child_12_image.png?1712119327377" alt="">
                                </div>
                                <div class="title">
                                    áo chống nắng
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="group-item">
                            <a href="classify.php?classify_id=9">
                                <div class="image">
                                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_danhmuc_1_child_5_image.png?1712119327377" alt="">
                                </div>
                                <div class="title">
                                    quần jeans
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="group-item">
                            <a href="categorySub.php?categorySub_id=7">
                                <div class="image">
                                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_danhmuc_1_child_6_image.png?1712119327377" alt="">
                                </div>
                                <div class="title">
                                    chân váy
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="group-item">
                            <a href="classify.php?classify_id=10">
                                <div class="image">
                                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_danhmuc_1_child_11_image.png?1712119327377" alt="">
                                </div>
                                <div class="title">
                                    quần short
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="group-item">
                            <a href="classify.php?classify_id=11">
                                <div class="image">
                                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_danhmuc_1_child_7_image.png?1712119327377" alt="">
                                </div>
                                <div class="title">
                                    quần âu
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="group-item">
                            <a href="classify.php?classify_id=5">
                                <div class="image">
                                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_danhmuc_1_child_1_image.png?1712119327377" alt="">
                                </div>
                                <div class="title">
                                    áo khoác
                                </div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="group-item">
                            <a href="categorySub.php?categorySub_id=8">
                                <div class="image">
                                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_danhmuc_1_child_8_image.png?1712119327377" alt="">
                                </div>
                                <div class="title">
                                    váy đầm
                                </div>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="buttons-cate">
                <button class="cate-prev disable">
                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/icon-prev-danhmuc.svg" style="width: 30px;" alt="">
                </button>
                <button class="cate-next">
                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/936254/assets/icon-next-danhmuc.svg" style="width: 30px;" alt="">
                </button>
            </div>
        </div>
    </div>
</div>

<!-- product -->
<!-- flashsale -->
<div class="pre-product flashsale">
    <div class="pre-product-wrap-ctn">
        <div class="pre-product-wrap">
            <div class="header-preview">
                <div class="title" style="display: flex;">
                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/946371/assets/fire-icon-new.png?1712244482510" alt="">
                    <a href="">Flash Sale</a>
                    <div class="count-down" style="display: flex;">
                        <div class="item hours">
                            <span>00</span>
                        </div>
                        <div class="line">:</div>
                        <div class="item minutes">
                            <span>00</span>
                        </div>
                        <div class="line">:</div>
                        <div class="item seconds">
                            <span>00</span>
                        </div>
                    </div>
                </div>
                <a href="" class="show-more">Xem thêm ></a>
            </div>
            <div class="content-preview">
                <a href="" class="banner-product">
                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/946371/assets/home_preivew_sanpham_1_image_desktop.jpg?1712247738803" alt="">
                </a>
                <div class="wrap-list-product">
                    <div class="list-product">
                        <div class="">
                            <div class="row row-flashsale">
                                <?php
                                if ($show_productFlashSale) {
                                    while ($resultFlashSale = $show_productFlashSale->fetch_assoc()) {
                                ?>
                                        <div class="product-ctn">
                                            <div class="item-product">
                                                <div class="product-thumbnail">
                                                    <a href="detail.php?product_id=<?php echo $resultFlashSale['product_id'] ?>" class="image">
                                                        <img src="admin/uploads/<?php echo $resultFlashSale['product_img'] ?>" title="<?php echo $resultFlashSale['product_name'] ?>">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name"><a href="detail.php?product_id=<?php echo $resultFlashSale['product_id'] ?>"><?php echo $resultFlashSale['product_name'] ?></a>
                                                    </h3>
                                                    <div class="product-price">
                                                        <?php if ($resultFlashSale['price_sale'] && $resultFlashSale['price_sale'] != 0) : ?>
                                                            <div class="price-sale" style="margin-right: 10px"><?php echo $format->formatMoney($resultFlashSale['price_sale']) ?></div>
                                                            <div class="price-old del" style="text-decoration: line-through;"><?php echo $format->formatMoney($resultFlashSale['price_old']) ?></div>
                                                        <?php else : ?>
                                                            <div class="price-old"><?php echo $format->formatMoney($resultFlashSale['price_old']) ?></div>
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
                    </div>
                    <div class="buttons-product">
                        <button id="prev-flashsale" class="product-prev">
                            <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/icon-prev-danhmuc.svg" style="width: 30px;" alt="">
                        </button>
                        <button id="next-flashsale" class="product-next">
                            <img src="https://bizweb.dktcdn.net/100/438/408/themes/936254/assets/icon-next-danhmuc.svg" style="width: 30px;" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- new product -->
<div class="pre-product new-product">
    <div class="pre-product-wrap-ctn">
        <div class="pre-product-wrap">
            <div class="header-preview">
                <div class="title">
                    <a href="">HÀNG MỚI GIÁ TỐT</a>
                </div>
                <a href="" class="show-more">Xem thêm ></a>
            </div>
            <div class="content-preview">
                <a href="" class="banner-product">
                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/home_preivew_sanpham_2_image_desktop.jpg?1712131538779" alt="">
                </a>
                <div class="wrap-list-product">
                    <div class="list-product">
                        <div class="">
                            <div class="row row-newproduct">
                                <?php
                                if ($show_productNew) {
                                    while ($resultNew = $show_productNew->fetch_assoc()) {
                                ?>
                                        <div class="product-ctn">
                                            <div class="item-product">
                                                <div class="product-thumbnail">
                                                    <a href="detail.php?product_id=<?php echo $resultNew['product_id'] ?>" class="image">
                                                        <img src="admin/uploads/<?php echo $resultNew['product_img'] ?>" title="<?php echo $resultNew['product_name'] ?>">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name">
                                                        <a href="detail.php?product_id=<?php echo $resultNew['product_id'] ?>">
                                                            <?php echo $resultNew['product_name'] ?>
                                                        </a>
                                                    </h3>
                                                    <div class="product-price" style="display: flex">
                                                        <?php if ($resultNew['price_sale'] && $resultNew['price_sale'] != 0) : ?>
                                                            <div class="price-sale" style="margin-right: 10px"><?php echo $format->formatMoney($resultNew['price_sale']) ?></div>
                                                            <div class="price-old del" style="text-decoration: line-through;"><?php echo $format->formatMoney($resultNew['price_old']) ?></div>
                                                        <?php else : ?>
                                                            <div class="price-old"><?php echo $format->formatMoney($resultNew['price_old']) ?></div>
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
                    </div>
                    <div class="buttons-product">
                        <button id="prev-product" class="product-prev">
                            <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/icon-prev-danhmuc.svg" style="width: 30px;" alt="">
                        </button>
                        <button id="next-product" class="product-next">
                            <img src="https://bizweb.dktcdn.net/100/438/408/themes/936254/assets/icon-next-danhmuc.svg" style="width: 30px;" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- best seller -->
<div class="pre-product new-product">
    <div class="pre-product-wrap-ctn">
        <div class="pre-product-wrap">
            <div class="header-preview">
                <div class="title">
                    <a href="">BÁN CHẠY NHẤT TUẦN QUA</a>
                </div>
                <a href="" class="show-more">Xem thêm ></a>
            </div>
            <div class="content-preview">
                <a href="" class="banner-product">
                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/946371/assets/home_preivew_sanpham_3_image_desktop.jpg?1712205663067" alt="">
                </a>
                <div class="wrap-list-product">
                    <div class="list-product">
                        <div class="">
                            <div class="row row-bestseller">
                                <?php
                                if ($show_productBestSaler) {
                                    while ($resultBestSaler = $show_productBestSaler->fetch_assoc()) {
                                ?>
                                        <div class="product-ctn">
                                            <div class="item-product">
                                                <div class="product-thumbnail">
                                                    <a href="detail.php?product_id=<?php echo $resultBestSaler['product_id'] ?>" class="image">
                                                        <img src="admin/uploads/<?php echo $resultBestSaler['product_img'] ?>" title="<?php echo $resultBestSaler['product_name'] ?>">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name"><a href="detail.php?product_id=<?php echo $resultBestSaler['product_id'] ?>">
                                                            <?php echo $resultBestSaler['product_name'] ?></a>
                                                    </h3>
                                                    <div class="product-price" style="display: flex">
                                                        <?php if ($resultBestSaler['price_sale'] && $resultBestSaler['price_sale'] != 0) : ?>
                                                            <div class="price-sale" style="margin-right: 10px"><?php echo $format->formatMoney($resultBestSaler['price_sale']) ?></div>
                                                            <div class="price-old del" style="text-decoration: line-through;"><?php echo $format->formatMoney($resultBestSaler['price_old']) ?></div>
                                                        <?php else : ?>
                                                            <div class="price-old"><?php echo $format->formatMoney($resultBestSaler['price_old']) ?></div>
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
                    </div>
                    <div class="buttons-product buttons-bestseller">
                        <button class="product-prev bestseller-prev">
                            <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/icon-prev-danhmuc.svg" style="width: 30px;" alt="">
                        </button>
                        <button class="product-next bestseller-next">
                            <img src="https://bizweb.dktcdn.net/100/438/408/themes/936254/assets/icon-next-danhmuc.svg" style="width: 30px;" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- polo -->
<div class="pre-product new-product">
    <div class="pre-product-wrap-ctn">
        <div class="pre-product-wrap">
            <div class="header-preview">
                <div class="title">
                    <a href="">YODY POLO - Ngăn mùi hiệu quả</a>
                </div>
                <a href="" class="show-more">Xem thêm ></a>
            </div>
            <div class="content-preview">
                <a href="" class="banner-product">
                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/946371/assets/home_preivew_sanpham_5_image_desktop.jpg?1712205663067" alt="">
                </a>
                <div class="wrap-list-product">
                    <div class="list-product bestseller">
                        <div class="">
                            <div class="row row-polo">
                                <?php
                                if ($show_productPolo) {
                                    while ($resultPolo = $show_productPolo->fetch_assoc()) {
                                ?>
                                        <div class="product-ctn">
                                            <div class="item-product">
                                                <div class="product-thumbnail">
                                                    <a href="detail.php?product_id=<?php echo $resultPolo['product_id'] ?>" class="image">
                                                        <img src="admin/uploads/<?php echo $resultPolo['product_img'] ?>" title="<?php echo $resultPolo['product_name'] ?>">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name"><a href="detail.php?product_id=<?php echo $resultPolo['product_id'] ?>">
                                                    <?php echo $resultPolo['product_name'] ?></a>
                                                    </h3>
                                                    <div class="product-price" style="display: flex">
                                                        <?php if ($resultPolo['price_sale'] && $resultPolo['price_sale'] != 0) : ?>
                                                            <div class="price-sale" style="margin-right: 10px"><?php echo $format->formatMoney($resultPolo['price_sale']) ?></div>
                                                            <div class="price-old del" style="text-decoration: line-through;"><?php echo $format->formatMoney($resultPolo['price_old']) ?></div>
                                                        <?php else : ?>
                                                            <div class="price-old"><?php echo $format->formatMoney($resultPolo['price_old']) ?></div>
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
                    </div>
                    <div class="buttons-product">
                        <button id="prev-polo" class="product-prev">
                            <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/icon-prev-danhmuc.svg" style="width: 30px;" alt="">
                        </button>
                        <button id="next-polo" class="product-next">
                            <img src="https://bizweb.dktcdn.net/100/438/408/themes/936254/assets/icon-next-danhmuc.svg" style="width: 30px;" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- sport -->
<div class="pre-product new-product">
    <div class="pre-product-wrap-ctn">
        <div class="pre-product-wrap">
            <div class="header-preview">
                <div class="title">
                    <a href="">YODY SPORT - Thoải mái vận động</a>
                </div>
                <a href="" class="show-more">Xem thêm ></a>
            </div>
            <div class="content-preview">
                <a href="" class="banner-product">
                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/946371/assets/home_preivew_sanpham_6_image_desktop.jpg?1712205663067" alt="">
                </a>
                <div class="wrap-list-product">
                    <div class="list-product">
                        <div class="">
                            <div class="row row-sport">
                                <?php
                                if ($show_productSport) {
                                    while ($resultSport = $show_productSport->fetch_assoc()) {
                                ?>
                                        <div class="product-ctn">
                                            <div class="item-product">
                                                <div class="product-thumbnail">
                                                    <a href="detail.php?product_id=<?php echo $resultSport['product_id'] ?>" class="image">
                                                        <img src="admin/uploads/<?php echo $resultSport['product_img'] ?>" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name"><a href="detail.php?product_id=<?php echo $resultSport['product_id'] ?>"><?php echo $resultSport['product_name'] ?></a>
                                                    </h3>
                                                    <div class="product-price" style="display: flex">
                                                        <?php if ($resultSport['price_sale'] && $resultSport['price_sale'] != 0) : ?>
                                                            <div class="price-sale" style="margin-right: 10px"><?php echo $format->formatMoney($resultSport['price_sale']) ?></div>
                                                            <div class="price-old del" style="text-decoration: line-through;"><?php echo $format->formatMoney($resultSport['price_old']) ?></div>
                                                        <?php else : ?>
                                                            <div class="price-old"><?php echo $format->formatMoney($resultSport['price_old']) ?></div>
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
                    </div>
                    <div class="buttons-product">
                        <button id="prev-sport" class="product-prev">
                            <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/icon-prev-danhmuc.svg" style="width: 30px;" alt="">
                        </button>
                        <button id="next-sport" class="product-next">
                            <img src="https://bizweb.dktcdn.net/100/438/408/themes/936254/assets/icon-next-danhmuc.svg" style="width: 30px;" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- T-shirt -->
<div class="pre-product new-product">
    <div class="pre-product-wrap-ctn">
        <div class="pre-product-wrap">
            <div class="header-preview">
                <div class="title">
                    <a href="">Áo thun năng động</a>
                </div>
                <a href="" class="show-more">Xem thêm ></a>
            </div>
            <div class="content-preview">
                <a href="" class="banner-product">
                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/946371/assets/home_preivew_sanpham_8_image_desktop.jpg?1712205663067" alt="">
                </a>
                <div class="wrap-list-product">
                    <div class="list-product">
                        <div class="">
                            <div class="row row-tshirt">
                                <?php
                                if ($show_productTShirt) {
                                    while ($resultTShirt = $show_productTShirt->fetch_assoc()) {
                                ?>
                                        <div class="product-ctn">
                                            <div class="item-product">
                                                <div class="product-thumbnail">
                                                    <a href="detail.php?product_id=<?php echo $resultTShirt['product_id'] ?>" class="image">
                                                        <img src="admin/uploads/<?php echo $resultTShirt['product_img'] ?>" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name"><a href="detail.php?product_id=<?php echo $resultTShirt['product_id'] ?>"><?php echo $resultTShirt['product_name'] ?></a>
                                                    </h3>
                                                    <div class="product-price" style="display: flex">
                                                        <?php if ($resultTShirt['price_sale'] && $resultTShirt['price_sale'] != 0) : ?>
                                                            <div class="price-sale" style="margin-right: 10px"><?php echo $format->formatMoney($resultTShirt['price_sale']) ?></div>
                                                            <div class="price-old del" style="text-decoration: line-through;"><?php echo $format->formatMoney($resultTShirt['price_old']) ?></div>
                                                        <?php else : ?>
                                                            <div class="price-old"><?php echo $format->formatMoney($resultTShirt['price_old']) ?></div>
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
                    </div>
                    <div class="buttons-product">
                        <button id="prev-tshirt" class="product-prev">
                            <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/icon-prev-danhmuc.svg" style="width: 30px;" alt="">
                        </button>
                        <button id="next-tshirt" class="product-next">
                            <img src="https://bizweb.dktcdn.net/100/438/408/themes/936254/assets/icon-next-danhmuc.svg" style="width: 30px;" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jeans -->
<div class="pre-product new-product">
    <div class="pre-product-wrap-ctn">
        <div class="pre-product-wrap">
            <div class="header-preview">
                <div class="title">
                    <a href="">YODY JEANS - Thoáng mát hàng giờ</a>
                </div>
                <a href="" class="show-more">Xem thêm ></a>
            </div>
            <div class="content-preview">
                <a href="" class="banner-product">
                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/946371/assets/home_preivew_sanpham_7_image_desktop.jpg?1712205663067" alt="">
                </a>
                <div class="wrap-list-product">
                    <div class="list-product">
                        <div class="">
                            <div class="row row-jeans">
                                <?php
                                if ($show_productJeans) {
                                    while ($resultJeans = $show_productJeans->fetch_assoc()) {
                                ?>
                                        <div class="product-ctn">
                                            <div class="item-product">
                                                <div class="product-thumbnail">
                                                    <a href="detail.php?product_id=<?php echo $resultJeans['product_id'] ?>" class="image">
                                                        <img src="admin/uploads/<?php echo $resultJeans['product_img'] ?>" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name"><a href="detail.php?product_id=<?php echo $resultJeans['product_id'] ?>"><?php echo $resultJeans['product_name'] ?></a>
                                                    </h3>
                                                    <div class="product-price" style="display: flex">
                                                        <?php if ($resultJeans['price_sale'] && $resultJeans['price_sale'] != 0) : ?>
                                                            <div class="price-sale" style="margin-right: 10px"><?php echo $format->formatMoney($resultJeans['price_sale']) ?></div>
                                                            <div class="price-old del" style="text-decoration: line-through;"><?php echo $format->formatMoney($resultJeans['price_old']) ?></div>
                                                        <?php else : ?>
                                                            <div class="price-old"><?php echo $format->formatMoney($resultJeans['price_old']) ?></div>
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
                    </div>
                    <div class="buttons-product">
                        <button id="prev-jeans" class="product-prev">
                            <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/icon-prev-danhmuc.svg" style="width: 30px;" alt="">
                        </button>
                        <button id="next-jeans" class="product-next">
                            <img src="https://bizweb.dktcdn.net/100/438/408/themes/936254/assets/icon-next-danhmuc.svg" style="width: 30px;" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- office -->
<div class="pre-product new-product">
    <div class="pre-product-wrap-ctn">
        <div class="pre-product-wrap">
            <div class="header-preview">
                <div class="title">
                    <a href="">YODY OFFICE - Tự tin nơi công sở</a>
                </div>
                <a href="" class="show-more">Xem thêm ></a>
            </div>
            <div class="content-preview">
                <a href="" class="banner-product">
                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/946371/assets/home_preivew_sanpham_4_image_desktop.jpg?1712205663067" alt="">
                </a>
                <div class="wrap-list-product">
                    <div class="list-product">
                        <div class="">
                            <div class="row row-office">
                                <?php
                                if ($show_productOffice) {
                                    while ($resultOffice = $show_productOffice->fetch_assoc()) {
                                ?>
                                        <div class="product-ctn">
                                            <div class="item-product">
                                                <div class="product-thumbnail">
                                                    <a href="detail.php?product_id=<?php echo $resultOffice['product_id'] ?>" class="image">
                                                        <img src="admin/uploads/<?php echo $resultOffice['product_img'] ?>" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name"><a href="detail.php?product_id=<?php echo $resultOffice['product_id'] ?>"><?php echo $resultOffice['product_name'] ?></a>
                                                    </h3>
                                                    <div class="product-price" style="display: flex">
                                                        <?php if ($resultOffice['price_sale'] && $resultOffice['price_sale'] != 0) : ?>
                                                            <div class="price-sale" style="margin-right: 10px"><?php echo $format->formatMoney($resultOffice['price_sale']) ?></div>
                                                            <div class="price-old del" style="text-decoration: line-through;"><?php echo $format->formatMoney($resultOffice['price_old']) ?></div>
                                                        <?php else : ?>
                                                            <div class="price-old"><?php echo $format->formatMoney($resultOffice['price_old']) ?></div>
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
                    </div>
                    <div class="buttons-product">
                        <button id="prev-office" class="product-prev">
                            <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/icon-prev-danhmuc.svg" style="width: 30px;" alt="">
                        </button>
                        <button id="next-office" class="product-next">
                            <img src="https://bizweb.dktcdn.net/100/438/408/themes/936254/assets/icon-next-danhmuc.svg" style="width: 30px;" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- accessory -->
<div class="pre-product new-product">
    <div class="pre-product-wrap-ctn">
        <div class="pre-product-wrap">
            <div class="header-preview">
                <div class="title">
                    <a href="">PHỤ KIỆN ĐA NĂNG</a>
                </div>
                <a href="" class="show-more">Xem thêm ></a>
            </div>
            <div class="content-preview">
                <a href="" class="banner-product">
                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/946371/assets/home_preivew_sanpham_9_image_desktop.jpg?1712205663067" alt="">
                </a>
                <div class="wrap-list-product">
                    <div class="list-product">
                        <div class="">
                            <div class="row row-accessory">
                                <?php
                                if ($show_productAccessory) {
                                    while ($resultAccessory = $show_productAccessory->fetch_assoc()) {
                                ?>
                                        <div class="product-ctn">
                                            <div class="item-product">
                                                <div class="product-thumbnail">
                                                    <a href="detail.php?product_id=<?php echo $resultAccessory['product_id'] ?>" class="image">
                                                        <img src="admin/uploads/<?php echo $resultAccessory['product_img'] ?>" alt="">
                                                    </a>
                                                </div>
                                                <div class="product-info">
                                                    <h3 class="product-name"><a href="detail.php?product_id=<?php echo $resultAccessory['product_id'] ?>"><?php echo $resultAccessory['product_name'] ?></a>
                                                    </h3>
                                                    <div class="product-price" style="display: flex">
                                                        <?php if ($resultAccessory['price_sale'] && $resultAccessory['price_sale'] != 0) : ?>
                                                            <div class="price-sale" style="margin-right: 10px"><?php echo $format->formatMoney($resultAccessory['price_sale']) ?></div>
                                                            <div class="price-old del" style="text-decoration: line-through;"><?php echo $format->formatMoney($resultAccessory['price_old']) ?></div>
                                                        <?php else : ?>
                                                            <div class="price-old"><?php echo $format->formatMoney($resultAccessory['price_old']) ?></div>
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
                    </div>
                    <div class="buttons-product">
                        <button id="prev-accessory" class="product-prev">
                            <img src="https://bizweb.dktcdn.net/100/438/408/themes/943787/assets/icon-prev-danhmuc.svg" style="width: 30px;" alt="">
                        </button>
                        <button id="next-accessory" class="product-next">
                            <img src="https://bizweb.dktcdn.net/100/438/408/themes/936254/assets/icon-next-danhmuc.svg" style="width: 30px;" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>

<?php
include("./front-end/fe_footer.php");
?>