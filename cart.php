<?php
include("./front-end/fe_header.php");
?>
<head>
    <link rel="stylesheet" href="./css/cart.css">
    <title>Giỏ hàng Yody</title>
</head>
<!-- cart -->
<div class="bg">
    <div class="width">
        <div class="main-content">
            <div class="col content-left">
                <div class="title">
                    <p>GIỎ HÀNG</p>
                    <span id="count-product">(3) Sản phẩm</span>
                </div>
                <div class="chiTiet-hd">
                    <p class="product">Sản phẩm</p>
                    <p class="unit-price">Đơn giá</p>
                    <p class="number">Số lượng</p>
                    <p class="sum-price">Tổng tiền</p>
                </div>
                <div class="chiTiet-product-wrap">
                    <div class="chiTiet-sanPham">
                        <div class="tt-product">
                            <img src="https://bizweb.dktcdn.net/thumb/compact/100/438/408/products/apn5380-ddo-1.jpg" alt="">
                            <div class="desc">
                                <a href="../chitiet/chitiet.html" class="name">Áo Polo Nam Pique Mắt Chim Basic</a>
                                <span class="size">Xanh Lam / XL</span>
                            </div>
                        </div>
                        <span class="price-product" id="cost">299.000đ</span>
                        <div class="number-product">
                            <span class="down">-</span> <span class="quantity">1</span> <span class="increase">+</span>
                        </div>
                        <span class="sum-price" id="total">299.000đ</span>
                        <span class="icon-remove"><i class="fa-solid fa-trash"></i></span>
                    </div>
                    <div class="chiTiet-sanPham">
                        <div class="tt-product">
                            <img src="https://bizweb.dktcdn.net/thumb/compact/100/438/408/products/apn5380-ddo-1.jpg" alt="">
                            <div class="desc">
                                <a href="../chitiet/chitiet.html" class="name">Áo Polo Nam Pique Mắt Chim Basic</a>
                                <span class="size">Xanh Lam / XL</span>
                            </div>
                        </div>
                        <span class="price-product" id="cost">299.000đ</span>
                        <div class="number-product">
                            <span class="down">-</span> <span class="quantity">1</span> <span class="increase">+</span>
                        </div>
                        <span class="sum-price" id="total">299.000đ</span>
                        <span class="icon-remove"><i class="fa-solid fa-trash"></i></span>
                    </div>
                    <div class="chiTiet-sanPham">
                        <div class="tt-product">
                            <img src="https://bizweb.dktcdn.net/thumb/compact/100/438/408/products/apn5380-ddo-1.jpg" alt="">
                            <div class="desc">
                                <a href="../chitiet/chitiet.html" class="name">Áo Polo Nam Pique Mắt Chim Basic</a>
                                <span class="size">Xanh Lam / XL</span>
                            </div>
                        </div>
                        <span class="price-product" id="cost">299.000đ</span>
                        <div class="number-product">
                            <span class="down">-</span> <span class="quantity">1</span> <span class="increase">+</span>
                        </div>
                        <span class="sum-price" id="total">299.000đ</span>
                        <span class="icon-remove"><i class="fa-solid fa-trash"></i></span>
                    </div>
                </div>
            </div>
            <div class="col content-right">
                <div class="title">Dùng mã giảm giá của YODY trong bước tiếp theo</div>
                <div class="wrap">
                    <div class="tong-hoaDon">
                        <p class="desc">Tổng đơn hàng (Tạm tính) :</p>
                        <span class="price" id="order">299.000đ</span>
                    </div>
                    <a href="payment.php">Đặt hàng</a>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
<script src="./js/cart.js"></script>
<?php
include("./front-end/fe_footer.php");
?>