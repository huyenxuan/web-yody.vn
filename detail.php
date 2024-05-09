<?php
include("./front-end/fe_header.php");
include("admin/format.php");
// include("admin/class/showFrontEnd.php");

$product = new product;
$format = new format;

$product_id = $_GET['product_id'];
$show_product = $product->show_product($product_id);
$result = $show_product->fetch_assoc();
$show_imgList = $product->show_imgList($product_id);
?>

<link rel="stylesheet" href="./css/detail.css">
<style>
    .noiBat ul {
        padding-left: 40px;
        list-style: disc;
    }
    .add-to-cart-wrapper button {
        background: #fcaf17 !important;
    }
</style>
<!-- ....................... -->
<div class="chitietSP-wrap">
    <div class="ttin-chiTiet width">
        <div class="title">
            <a href="index.php">Trang chủ /</a>
            <span class="name-product"><?php echo $result['product_name'] ?></span>
        </div>

        <div class="content-wrap">
            <div class="content-left">
                <div class="img-list">
                    <?php
                    if ($show_imgList) {
                        while ($resultImgList = $show_imgList->fetch_assoc()) {
                    ?>
                            <div class="img">
                                <img src="./admin//uploads/<?php echo $resultImgList['product_imgList'] ?>" alt="">
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>

                <div class="noiBat">
                    <div style="margin-top: 10px"><?php echo $result['product_desc'] ?></div>
                </div>

                <div class="box-danhGia">
                    <p class="hd">đánh giá</p>
                    <div class="content">
                        <p>Hiện tại sản phẩm chưa có đánh giá nào, bạn hãy trở thành người đầu tiên đánh giá cho
                            sản phẩm này</p>
                        <form action="">
                            <button type="submit">Gửi đánh giá của bạn ngay</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="content-right">
                <p class="hd"><?php echo $result['product_name'] ?></p>
                <div class="ttin">
                    <span>Mã sản phẩm: <?php echo $result['product_id'] ?> </span>
                    <span class="line"></span>
                    <div class="number-solded">
                        Đã bán <span class="number">553K</span>
                    </div>
                    <span class="line"></span>
                    <div class="rate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>
                <div class="product-price" style="display: flex">
                    <?php if ($result['price_sale'] && $result['price_sale'] != 0) : ?>
                        <div class="price-sale" style="margin-right: 10px; font-weight: 600; color: red; font-size: 35px"><?php echo $format->formatMoney($result['price_sale']) ?></div>
                        <div class="price-old del" style="text-decoration: line-through; font-size: 35px; color: gray"><?php echo $format->formatMoney($result['price_old']) ?></div>
                    <?php else : ?>
                        <div class="price-old" style="font-weight: 600; font-size: 35px; color: red"><?php echo $format->formatMoney($result['price_old']) ?></div>
                    <?php endif; ?>
                </div>
                <span class="color">Màu sắc: Xanh lục</span>
                <div class="color-box">
                    <span class="item item-selected">
                        <img src="https://bizweb.dktcdn.net/100/438/408/products/ao-polo-nam-vai-cafe-to-ong-yody-apm7125-bee-11.jpg?v=1712721144410" alt="">
                    </span>
                    <span class="item">
                        <img src="https://bizweb.dktcdn.net/100/438/408/products/ao-polo-nam-vai-cafe-to-ong-yody-apm7125-bee-11.jpg?v=1712721144410" alt="">
                    </span>
                    <span class="item">
                        <img src="https://bizweb.dktcdn.net/100/438/408/products/ao-polo-nam-vai-cafe-to-ong-yody-apm7125-bee-11.jpg?v=1712721144410" alt="">
                    </span>
                </div>
                <div class="box-size">
                    <span>M</span>
                    <span>L</span>
                    <span>XL</span>
                    <span>2XL</span>
                    <span>3XL</span>
                    <span>4XL</span>
                </div>
                <div class="tuVan-size">
                    <img src="https://bizweb.dktcdn.net/100/438/408/themes/904142/assets/ic_blue_ruler_pen.svg?1687396460177" alt="">
                    <span>Giúp bạn chọn size</span>
                </div>
                <div class="form-addProduct">
                    <div class="number-product">
                        <span>-</span>
                        <span>1</span>
                        <span>+</span>
                    </div>
                </div>
                <div class="uDai-box">
                    <div class="uDai">
                        <img src="./images/ic_payment_freeship.svg" alt="">
                        <p>
                            Miễn phí vận chuyển <br>
                            với mọi đơn hàng từ 498k
                        </p>
                    </div>
                    <div class="uDai">
                        <p>
                            Miễn phí đổi trả tại 230+ <br>
                            cửa hàng trong 15 ngày
                        </p>
                    </div>
                    <div class="uDai">
                        <p>
                            Đa dạng phương thức thanh toán <br>
                            (VNPay, Momo, COD)
                        </p>
                    </div>
                    <div class="uDai">
                        <p>
                            Vận chuyển siêu tốc <br>
                            từ 1 đến 3 ngày
                        </p>
                    </div>
                </div>
                <div class="add-to-cart-wrapper">
                    <a href="cart.php"><button type="submit">
                        <img src="https://bizweb.dktcdn.net/100/438/408/themes/949050/assets/shopping-cartupdate.svg?1714622112152" alt="">
                        Thêm vào giỏ hàng
                    </button></a>
                    <button type="submit">Mua ngay</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ----------------------- -->
<div class="width">
    <div class="list-goiY">
        <p class="title">GỢI Ý CHO BẠN</p>

        <div class="goiY-item">
            <div class="product-item">
                <a href="" class="product-link-img">
                    <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apm6295-xlo-ao-polo-nam-yody.jpg?v=1685322623000" alt="">
                </a>
                <p class="product-name">
                    <a href="">Polo Nam Bạc Hà Pha Đường Kẻ</a>
                </p>
                <span class="product-price">185.000đ</span> <span class="product-oldPrice">349.000đ</span>
                <div class="product-rate-soldInfo">
                    <div class="rate">
                        <i class="fa-solid fa-star"></i>
                        <span>5</span>
                    </div>
                    <divs class="soldInfo">
                        <div class="line"></div>
                        Đã bán<span>47.9K</span>
                    </divs>
                </div>
                <div class="giamGia">
                    <span>-50%</span>
                </div>
                <div class="mauAo">
                    <span class="item"> </span>
                    <span class="item"> </span>
                </div>
            </div>
            <div class="product-item">
                <a href="" class="product-link-img">
                    <img src="../general/images/ao-polo-nam-apm4235-vag-7.webp" alt="">
                </a>
                <p class="product-name">
                    <a href="">Áo Polo Nam Cafe Phối Bo Kháng Khuẩn Khử Mùi</a>
                </p>
                <span class="product-price">185.000đ</span> <span class="product-oldPrice">349.000đ</span>
                <div class="product-rate-soldInfo">
                    <div class="rate">
                        <i class="fa-solid fa-star"></i>
                        <span>5</span>
                    </div>
                    <divs class="soldInfo">
                        <div class="line"></div>
                        Đã bán<span>47.9K</span>
                    </divs>
                </div>
                <div class="giamGia">
                    <span>-50%</span>
                </div>
                <div class="mauAo">
                    <span class="item"> </span>
                    <span class="item"> </span>
                </div>
            </div>
            <div class="product-item">
                <a href="" class="product-link-img">
                    <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/ao-polo-nnam-cafe-to-ong-apm6195-ddo-qsm6029-ghd-3-yody.jpg?v=1685152794000" alt="">
                </a>
                <p class="product-name">
                    <a href="">Polo Nam Cafe Dệt Tổ Ong Nature Lover</a>
                </p>
                <span class="product-price">185.000đ</span> <span class="product-oldPrice">349.000đ</span>
                <div class="product-rate-soldInfo">
                    <div class="rate">
                        <i class="fa-solid fa-star"></i>
                        <span>5</span>
                    </div>
                    <divs class="soldInfo">
                        <div class="line"></div>
                        Đã bán<span>47.9K</span>
                    </divs>
                </div>
                <div class="giamGia">
                    <span>-50%</span>
                </div>
                <div class="mauAo">
                    <span class="item"> </span>
                    <span class="item"> </span>
                </div>
            </div>
            <div class="product-item">
                <a href="" class="product-link-img">
                    <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apm6297-tra-ao-polo-nam-3.jpg?v=1685506951000" alt="">
                </a>
                <p class="product-name">
                    <a href="">Áo Polo Nam Sorona Oversize Thêu Gấu</a>
                </p>
                <span class="product-price">185.000đ</span> <span class="product-oldPrice">349.000đ</span>
                <div class="product-rate-soldInfo">
                    <div class="rate">
                        <i class="fa-solid fa-star"></i>
                        <span>5</span>
                    </div>
                    <divs class="soldInfo">
                        <div class="line"></div>
                        Đã bán<span>47.9K</span>
                    </divs>
                </div>
                <div class="giamGia">
                    <span>-50%</span>
                </div>
                <div class="mauAo">
                    <span class="item"> </span>
                    <span class="item"> </span>
                </div>
            </div>
            <div class="product-item">
                <a href="" class="product-link-img">
                    <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/products/apm6113-nav-3.jpg?v=1681702352000" alt="">
                </a>
                <p class="product-name">
                    <a href="">Áo Polo Nam Mắt Chim Raglan In Tràn Kẻ</a>
                </p>
                <span class="product-price">185.000đ</span> <span class="product-oldPrice">349.000đ</span>
                <div class="product-rate-soldInfo">
                    <div class="rate">
                        <i class="fa-solid fa-star"></i>
                        <span>5</span>
                    </div>
                    <divs class="soldInfo">
                        <div class="line"></div>
                        Đã bán<span>47.9K</span>
                    </divs>
                </div>
                <div class="giamGia">
                    <span>-50%</span>
                </div>
                <div class="mauAo">
                    <span class="item">
                        <img src="https://bizweb.dktcdn.net/100/438/408/products/ao-polo-nam-vai-cafe-to-ong-yody-apm7125-bee-11.jpg?v=1712721144410" alt="">
                    </span>
                    <span class="item">
                        <img src="https://bizweb.dktcdn.net/100/438/408/products/ao-polo-nam-vai-cafe-to-ong-yody-apm7125-bee-11.jpg?v=1712721144410" alt="">
                    </span>
                    <span class="item">
                        <img src="https://bizweb.dktcdn.net/100/438/408/products/ao-polo-nam-vai-cafe-to-ong-yody-apm7125-bee-11.jpg?v=1712721144410" alt="">
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="lienquan">
    <p class="lienQuan-hd">
        SẢN PHẨM ĐÃ XEM
    </p>
    <div class="sp-lienQuan">
        <div class="item">
            <img src="https://bizweb.dktcdn.net/100/438/408/products/ao-polo-nam-vai-cafe-to-ong-yody-apm7125-bee-11.jpg?v=1712721144410" alt="">
            <p class="name">Áo Thu Nam Cổ Tròn Cơ Bản Cotton Usa</p>
            <span class="price">229.000đ</span>
        </div>
        <div class="item">
            <img src="https://bizweb.dktcdn.net/100/438/408/products/ao-polo-nam-vai-cafe-to-ong-yody-apm7125-bee-11.jpg?v=1712721144410" alt="">
            <p class="name">Áo Thu Nam Cổ Tròn Cơ Bản Cotton Usa</p>
            <span class="price">229.000đ</span>
        </div>
        <div class="item">
            <img src="https://bizweb.dktcdn.net/100/438/408/products/ao-polo-nam-vai-cafe-to-ong-yody-apm7125-bee-11.jpg?v=1712721144410" alt="">
            <p class="name">Áo Thu Nam Cổ Tròn Cơ Bản Cotton Usa</p>
            <span class="price">229.000đ</span>
        </div>
        <div class="item">
            <img src="https://bizweb.dktcdn.net/100/438/408/products/ao-polo-nam-vai-cafe-to-ong-yody-apm7125-bee-11.jpg?v=1712721144410" alt="">
            <p class="name">Áo Thu Nam Cổ Tròn Cơ Bản Cotton Usa</p>
            <span class="price">229.000đ</span>
        </div>
        <div class="item">
            <img src="https://bizweb.dktcdn.net/100/438/408/products/ao-polo-nam-vai-cafe-to-ong-yody-apm7125-bee-11.jpg?v=1712721144410" alt="">
            <p class="name">Áo Thu Nam Cổ Tròn Cơ Bản Cotton Usa</p>
            <span class="price">229.000đ</span>
        </div>
    </div>
</div>
</main>
<?php
include("./front-end/fe_footer.php");
?>