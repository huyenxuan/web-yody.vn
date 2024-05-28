<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YODY - Look Good - Feel Good</title>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./css/payment.css">
</head>

<body>
    <main>
        <!-- wrap main -->
        <div class="wrap">
            <div class="wrap-main">
                <header class="main-header">
                    <div class="logo">
                        <a href="index.php">
                            <img src="https://bizweb.dktcdn.net/100/438/408/themes/936254/assets/logo.svg?1709194355144"
                                alt="">
                        </a>
                    </div>
                </header>
                <div class="main-content">
                    <article>
                        <div class="col" style="padding-left: 0;">
                            <section>
                                <div class="section-header">
                                    <h2>Thông tin giao hàng</h2>
                                </div>
                                <div class="section-content">
                                    <div class="fieldset">
                                        <form action="" method="post">
                                            <input type="text" placeholder="Họ và tên">
                                            <input type="text" placeholder="Số điện thoại">
                                            <input type="text" placeholder="Địa chỉ">
                                            <input type="text" placeholder="Tỉnh thành">
                                            <input type="text" placeholder="Quận huyện">
                                            <input type="text" placeholder="Phường xã">
                                            <div class="checkbox">
                                                <input type="checkbox" name="" id="">
                                                <label for="">Giao đến địa chỉ khác</label>
                                            </div>
                                            <textarea name="" id="" cols="30" rows="10"></textarea>
                                        </form>
                                    </div>
                                </div>
                            </section>
                        </div>
                        <div class="ship">
                            <section>
                                <div class="section-header">
                                    <h2>Vận chuyển</h2>
                                </div>
                                <div class="section-content">
                                    Miễn phí vận chuyển đơn hàng từ 199K
                                </div>
                            </section>
                            <section style="margin-top: 20px;">
                                <div class="section-header">
                                    <h2>Thanh toán</h2>
                                </div>
                                <div class="box">
                                    <div class="content-box">
                                        <input type="radio" name="" id="">
                                        <label for="">
                                            <span>Thanh toán qua thẻ thanh toán, ứng dụng ngân hàng VNPAY</span>
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="content-box">
                                        <input type="radio" name="" id="">
                                        <label for="">
                                            <span>Thanh toán qua VNPAY-QR</span>
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="content-box">
                                        <input type="radio" name="" id="">
                                        <label for="">
                                            <span>Thanh toán qua ví MOMO</span>
                                            <span></span>
                                        </label>
                                    </div>
                                    <div class="content-box">
                                        <input type="radio" name="" id="">
                                        <label for="">
                                            <span>Thanh toán khi nhận hàng (COD)</span>
                                            <span></span>
                                        </label>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </article>
                </div>
            </div>
            <!-- siderbar -->
            <aside class="sidebar">
                <div class="sidebar-header">Đơn hàng (<span>1 </span>sản phẩm)</div>
                <div class="sidebar-content">
                    <div class="order-summary">
                        <div class="order-summary_section">
                            <div class="product-list">
                                <table class="product-table" id="product-table">
                                    <tr class="product">
                                        <td class="product-image">
                                            <div class="product-thumbnail">
                                                <div class="product-wraper">
                                                    <img src="https://bizweb.dktcdn.net/thumb/thumb/100/438/408/products/apn5380-ddo-1.jpg?v=1702633494013" alt="">
                                                </div>
                                                <div class="quantity">1</div>
                                            </div>
                                        </td>
                                        <th class="prodct-description">
                                            <span class="prodct-description-name">
                                                Áo Polo Nữ Airycool Thoáng Mát Phối Bo
                                            </span>
                                            <span class="prodct-description-propertype">Đỏ / S</span>
                                        </th>
                                        <td class="product-price">299.000đ</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="discount-code">
                                <form action="">
                                    <input type="text" placeholder="Nhập mã giảm giá">
                                    <input type="button" value="Áp dụng">    
                                </form>
                            </div>
                            <div class="calculate-money">
                                <table class="total-line">
                                    <tr class="total-line--subtotal">
                                        <th class="total-line--name">Tạm tính</th>
                                        <td class="total-line--price">299.000đ</td>
                                    </tr>
                                    <tr class="total-line--shipping-fee">
                                        <th class="total-line--name">Tạm tính</th>
                                        <td class="total-line--price">
                                            <span>20.000đ</span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>    
                </div>
            </aside>
        </div>
        
    </main>
</body>

</html>