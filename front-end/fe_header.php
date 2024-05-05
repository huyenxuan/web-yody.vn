<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YODY - Look Good - Feel Good</title>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="./css/main.css">
</head>
<style>
    /* back top */
    html {
        scroll-behavior: smooth;
    }

    .top {
        position: fixed;
        z-index: 999;
        bottom: 100px;
        right: 30px;
    }

    .top img {
        width: 45px;
        height: 45px;
    }
</style>

<body>
    <main>
        <!-- header -->
        <div class="header">
            <div class="header-ctn">
                <header>
                    <!-- topbar top -->
                    <div class="topbar-top">
                        <div class="topbar-top__left">
                            <div class="topbar-top__left-ctn">
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="https://bizweb.dktcdn.net/100/438/408/themes/936254/assets/logo.svg?1709194355144" alt="">
                                    </a>
                                </div>
                                <div class="search-ctn">
                                    <div class="search">
                                        <form action="http://localhost/project/search.php" class="form-search" method="GET">
                                            <input required name="keyword" type="text" placeholder="Tìm kiếm" title="Vui lòng điền vào trường này"
                                            value="<?php echo (isset($_GET['keyword'])) ? $_GET['keyword'] : '' ?>">
                                            <button>
                                                <img src="https://bizweb.dktcdn.net/100/438/408/themes/936254/assets/icon-search.svg" alt="">
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="topbar-top__right">
                            <div class="topbar-top__right-ctn">
                                <div class="list-contact">
                                    <div class="map">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <a href="">
                                            Tìm <span>267</span> cửa hàng
                                        </a>
                                    </div>
                                    <div class="phone">
                                        <i class="fa-solid fa-phone" style="align-self: center;"></i>
                                        <a href="">1800 2086</a>
                                        <span class="free">free</span>
                                    </div>
                                    <span style="margin: 0 8px;"> - </span>
                                    <div class="call-order">
                                        <span style="margin-right: 3px;">Đặt hàng gọi</span>
                                        <i class="fa-solid fa-phone"></i>
                                        <span style="cursor: pointer; margin-left: 3px;"><a href="">02499986999</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- topbar bottom -->
                    <div class="topbar-bottom">
                        <div class="topbar-bottom__left">
                            <!-- menu -->
                            <div class="topbar-bottom__left-ctn" style="height: 100%;">
                                <div class="menu" style="height: 100%;">
                                    <nav>
                                        <ul class="item_big">
                                            <li class="nav-item">
                                                <a class="dad-list" href="index.php" title="SALE OFF 50%">sale off 50%</a>
                                            </li>
                                            <li class="nav-item has-child has-mega">
                                                <a class="dad-list" href="category.php?category_id=<?php echo 2 ?>" title="NỮ">nữ</a>
                                                <!-- mega menu -->
                                                <ul class="mega-menu">
                                                    <li class="parrent-mega">
                                                        <ul>
                                                            <li class="list-item1">
                                                                <a class="title-m" href="" title="ÁO NỮ">áo nữ</a>
                                                                <ul>
                                                                    <li>
                                                                        <a class="a3" href="" title="ÁO POLO">áo
                                                                            polo</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="a3" href="" title="ÁO THUN">áo
                                                                            thun</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="a3" href="" title="ÁO KHOÁC">áo
                                                                            khoác</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="a3" href="" title="ÁO CHỐNG NẮNG">áo
                                                                            chống
                                                                            nắng</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="a3" href="" title="ÁO NỈ">áo nỉ</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="a3" href="" title="ÁO GIỮ NHIỆT">áo
                                                                            giữ
                                                                            nhiệt</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="a3" href="" title="ÁO LEN">áo len</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="a3" href="" title="ÁO SƠ MI">áo sơ
                                                                            mi</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a class="title-m" href="" title="QUẦN NỮ">quần nữ</a>
                                                                <ul>
                                                                    <li>
                                                                        <a class="a3" href="" title="QUẦN JEANS">quần
                                                                            jeans</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="a3" href="" title="QUẦN ÂU">quần
                                                                            âu</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="a3" href="" title="QUẦN KAKI">quần
                                                                            kaki</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="a3" href="" title="QUẦN SHORT">quần
                                                                            short</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="a3" href="" title="QUẦN NỈ">quần
                                                                            nỉ</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="" class="title-m" title="BỘ ĐỒ NỮ">bộ đồ nữ</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="" class="a3" title="BỘ ĐỒ NỮ MẶC NHÀ">bộ đồ
                                                                            nữ mặc nhà</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="" class="title-m" title="NỔI BẬT" style="color: red !important;">nổi bật</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="" class="a3" title="HÀNG MỚI VỀ">hàng
                                                                            mới
                                                                            về</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="" class="a3" title="KHỬ MÙI VƯỢT TRỘI">khử
                                                                            mùi vượt trội</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="" class="a3" title="THOÁNG MÁT TỐI ĐA">thoáng mát tối
                                                                            đa</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="" class="a3" title="CHỐNG UV">chống
                                                                            UV</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="" class="title-m" title="ĐỒ MẶC TRONG NỮ">đồ
                                                                    mặc
                                                                    trong nữ</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="" class="a3" title="ĐỒ LÓT">đồ lót</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="" class="a3" title="ÁO 2 DÂY - ÁO BA LỖ">áo
                                                                            2 dây - áo ba lỗ</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="" class="title-m" title="ĐỒ THỂ THAO NỮ">đồ thể
                                                                    thao nữ</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="" class="a3" title="BỘ THỂ THAO">bộ thể
                                                                            thao</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="" class="a3" title="ÁO THUN THỂ THAO">áo
                                                                            thun thể thao</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="" class="a3" title="ÁO POLO THỂ THAO">áo
                                                                            polo thể thao</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="" class="a3" title="QUẦN THỂ THAO">quần
                                                                            thể
                                                                            thao</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="" class="title-m" title="CHÂN VÁY NỮ">chân váy
                                                                    nữ</a>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="" class="title-m" title="ĐẦM NỮ">đầm nữ</a>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="" class="title-m" title="PHỤ KIỆN NỮ">phụ kiện
                                                                    nữ</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="" class="a3" title="GIÀY">giày</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="" class="a3" title="TÚI XÁCH">túi
                                                                            xách</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="" class="a3" title="PHỤ KIỆN KHÁC">phụ
                                                                            kiện
                                                                            khác</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-img">
                                                        <a href="">
                                                            <img src="https://bizweb.dktcdn.net/thumb/grande/100/438/408/themes/936254/assets/link_image_2_1.jpg?1709524727248" alt="">
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!-- <div class="wrapper"></div> -->
                                            </li>
                                            <li class="nav-item has-child has-mega">
                                                <a class="dad-list" href="category.php?category_id=<?php echo 3 ?>" title="NAM">nam</a>
                                                <!-- mega menu -->
                                                <ul class="mega-menu">
                                                    <li class="parrent-mega">
                                                        <ul>
                                                            <li class="list-item1">
                                                                <a class="title-m" href="" title="ÁO NAM">áo nam</a>
                                                                <ul>
                                                                    <li>
                                                                        <a class="a3" href="" title="ÁO POLO">áo
                                                                            polo</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="a3" href="" title="ÁO THUN">áo
                                                                            thun</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="a3" href="" title="ÁO KHOÁC">áo
                                                                            khoác</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="a3" href="" title="ÁO CHỐNG NẮNG">áo
                                                                            chống
                                                                            nắng</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="a3" href="" title="ÁO NỈ">áo nỉ</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="a3" href="" title="ÁO SƠ MI">áo sơ
                                                                            mi</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="a3" href="" title="ÁO GIỮ NHIỆT">áo
                                                                            giữ
                                                                            nhiệt</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a class="title-m" href="" title="QUẦN NAM">quần nam</a>
                                                                <ul>
                                                                    <li>
                                                                        <a class="a3" href="" title="QUẦN ÂU">quần
                                                                            âu</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="a3" href="" title="QUẦN KAKI">quần
                                                                            kaki</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="a3" href="" title="QUẦN JEANS">quần
                                                                            jeans</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="a3" href="" title="QUẦN SHORT">quần
                                                                            short</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="a3" href="" title="QUẦN NỈ">quần
                                                                            nỉ</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="" class="title-m" title="BỘ ĐỒ NAM">bộ đồ
                                                                    nam</a>
                                                                <ul>
                                                                    <li></li>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="" class="title-m" title="NỔI BẬT" style="color: red !important;">nổi bật</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="" class="a3" title="HÀNG MỚI VỀ">hàng
                                                                            mới
                                                                            về</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="" class="a3" title="KHỬ MÙI VƯỢT TRỘI">khử
                                                                            mùi vượt trội</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="" class="a3" title="THOÁNG MÁT TỐI ĐA">thoáng mát tối
                                                                            đa</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="" class="a3" title="CHỐNG UV">chống
                                                                            UV</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="" class="title-m" title="ĐỒ THỂ THAO NAM">đồ
                                                                    thể
                                                                    thao nam</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="" class="a3" title="BỘ THỂ THAO">bộ thể
                                                                            thao</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="" class="a3" title="ÁO THUN THỂ THAO">áo
                                                                            thun thể thao</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="" class="a3" title="ÁO POLO THỂ THAO">áo
                                                                            polo thể thao</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="" class="a3" title="QUẦN THỂ THAO">quần
                                                                            thể
                                                                            thao</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="" class="title-m" title="ĐỒ MẶC TRONG NAM">đồ
                                                                    mặc
                                                                    trong nam</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="" class="a3" title="QUẦN LÓT">quần
                                                                            lót</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="" class="a3" title="ÁO BA LỖ">áo ba
                                                                            lỗ</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="" class="title-m" title="PHỤ KIỆN NAM">phụ kiện
                                                                    nam</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="" class="a3" title="GIÀY">giày</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="" class="a3" title="THẮT LƯNG">thắt
                                                                            lưng</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="" class="a3" title="PHỤ KIỆN KHÁC">phụ
                                                                            kiện
                                                                            khác</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-img">
                                                        <a href="">
                                                            <img src="https://bizweb.dktcdn.net/thumb/grande/100/438/408/themes/936254/assets/link_image_3_1.jpg?1709784974022" alt="">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item has-child has-mega">
                                                <a class="dad-list" href="category.php?category_id=<?php echo 4 ?>" title="TRẺ EM">trẻ em</a>
                                                <!-- menu mega -->
                                                <ul class="mega-menu mega-menu-type2">
                                                    <li class="mega-menu-img">
                                                        <a href="">
                                                            <img src="https://bizweb.dktcdn.net/thumb/grande/100/438/408/themes/936254/assets/link_image_4_1.jpg?1709807059031" alt="">
                                                        </a>
                                                    </li>
                                                    <li class="parrent-mega">
                                                        <ul>
                                                            <li class="list-item1">
                                                                <a class="title-m" href="" title="ÁO TRẺ EM">áo trẻ
                                                                    em</a>
                                                                <ul>
                                                                    <li>
                                                                        <a class="a3" href="" title="ÁO POLO">áo
                                                                            polo</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="a3" href="" title="ÁO THUN">áo
                                                                            thun</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="a3" href="" title="ÁO KHOÁC">áo
                                                                            khoác</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="a3" href="" title="ÁO NỈ">áo nỉ</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="a3" href="" title="ÁO GIỮ NHIỆT">áo
                                                                            giữ
                                                                            nhiệt</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="a3" href="" title="ÁO LEN">áo len</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a class="title-m" href="" title="QUẦN TRẺ EM">quần trẻ
                                                                    em</a>
                                                                <ul>
                                                                    <li>
                                                                        <a class="a3" href="" title="QUẦN JEANS">quần
                                                                            jeans</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="a3" href="" title="QUẦN KAKI">quần
                                                                            kaki</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="a3" href="" title="QUẦN SHORT">quần
                                                                            short</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="a3" href="" title="QUẦN NỈ">quần
                                                                            nỉ</a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="a3" href="" title="QUẦN LEGGING">quần
                                                                            legging</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="" class="title-m" title="BỘ ĐỒ TRẺ EM">bộ đồ
                                                                    trẻ
                                                                    em</a>
                                                                <ul>
                                                                    <li></li>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="" class="title-m" title="NỔI BẬT" style="color: red !important;">nổi bật</a>
                                                                <ul>
                                                                    <li>
                                                                        <a href="" class="a3" title="HÀNG MỚI VỀ">hàng
                                                                            mới
                                                                            về</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="" class="a3" title="KHỬ MÙI VƯỢT TRỘI">khử
                                                                            mùi vượt trội</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="" class="a3" title="THOÁNG MÁT TỐI ĐA">thoáng mát tối
                                                                            đa</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="" class="a3" title="CHỐNG UV">chống
                                                                            UV</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="" class="title-m" title="ĐỒ THỂ TRẺ EM">đồ thể
                                                                    trẻ
                                                                    em</a>
                                                                <ul>
                                                                    <li></li>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="" class="title-m" title="CHÂN VÁY BÉ GÁI">chân
                                                                    váy
                                                                    bé gái</a>
                                                                <ul>
                                                                    <li></li>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="" class="title-m" title="ĐẦM BÉ GÁI">đầm bé
                                                                    gái</a>
                                                                <ul>
                                                                    <li></li>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="" class="title-m" title="PHỤ KIỆN TRẺ EM">phụ
                                                                    kiện
                                                                    trẻ em</a>
                                                                <ul>
                                                                    <li></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-img">
                                                        <a href="">
                                                            <img src="https://bizweb.dktcdn.net/thumb/grande/100/438/408/themes/936254/assets/link_image_4_2.jpg?1709807059031" alt="">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item has-child has-mega">
                                                <a class="dad-list" href="" title="BỘ SƯU TẬP">bộ sưu tập</a>
                                                <!-- menu mega -->
                                                <ul class="mega-menu">
                                                    <li class="parrent-mega">
                                                        <ul>
                                                            <li class="list-item1">
                                                                <a class="title-m" href="" title="YODY YÊU">YODY YÊU</a>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a class="title-m" href="" title="BST MICKEY">BST
                                                                    MICKEY</a>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a class="title-m" href="" title="YOGUU">YOGUU</a>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a class="title-m" href="" title="YODY SPORT">YODY
                                                                    SPORT</a>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a class="title-m" href="" title="THỜI TRANG CÔNG SỞ">THỜI
                                                                    TRANG CÔNG SỞ</a>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a class="title-m" href="" title="POLO YODY - EVERYDAY WEAR">POLO YODY -
                                                                    EVERYDAY
                                                                    WEAR</a>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a class="title-m" href="" title="ÁO KHOÁC 3C PLUS">ÁO
                                                                    KHOÁC
                                                                    3C PLUS</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="mega-menu-img">
                                                        <a href="">
                                                            <img src="https://bizweb.dktcdn.net/thumb/grande/100/438/408/themes/936254/assets/link_image_5_1.jpg?1709807059031" alt="">
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a class="dad-list" href="" title="ĐỒNG PHỤC">đồng phục</a>
                                            </li>
                                            <li class="nav-item has-child">
                                                <a class="dad-list" href="" title="VỀ YODY">về yody</a>
                                                <!-- sub menu -->
                                                <ul class="item-small">
                                                    <li>
                                                        <a href="" title="Tin Khuyến Mại">Tin Khuyến Mại</a>
                                                    </li>
                                                    <li>
                                                        <a href="" title="Đăng Ký Đối Tác">Đăng Ký Đối Tác</a>
                                                    </li>
                                                    <li>
                                                        <a href="" title="Bảo Vệ Khách Hàng">Bảo Vệ Khách Hàng</a>
                                                    </li>
                                                    <li>
                                                        <a href="" title="Ưu Đãi & Chính Sách">Ưu Đãi & Chính Sách</a>
                                                    </li>
                                                    <li>
                                                        <a href="" title="Câu Chuyện & Nhân Vật">Câu Chuyện & Nhân
                                                            Vật</a>
                                                    </li>
                                                    <li>
                                                        <a href="" title="Khu Vui Chơi Trẻ Em">Khu Vui Chơi Trẻ Em</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item has-child">
                                                <a class="dad-list" href="" title="BLOG">blog</a>
                                                <!-- sub menu -->
                                                <ul class="item-small">
                                                    <li>
                                                        <a href="" title="Em Đẹp">Em Đẹp</a>
                                                    </li>
                                                    <li>
                                                        <a href="" title="Chàng Bảnh Bao">Chàng Bảnh Bao</a>
                                                    </li>
                                                    <li>
                                                        <a href="" title="Em Khỏe Đẹp">Em Khỏe Đẹp</a>
                                                    </li>
                                                    <li>
                                                        <a href="" title="Có Thể Bạn Chưa Biết">Có Thể Bạn Chưa Biết</a>
                                                    </li>
                                                    <li>
                                                        <a href="" title="Làm Đẹp">Làm Đẹp</a>
                                                    </li>
                                                    <li>
                                                        <a href="" title="Du Lịch">Du Lịch</a>
                                                    </li>
                                                    <li>
                                                        <a href="" title="Đồng Phục">Đồng Phục</a>
                                                    </li>
                                                    <li>
                                                        <a href="" title="Thời Trang Thế Giới">Thời Trang Thế Giới</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="topbar-bottom__right">
                            <div class="topbar-bottom__right-ctn">
                                <div class="function">
                                    <div class="card">
                                        <a href="cart.php">
                                            <img src="https://bizweb.dktcdn.net/100/438/408/themes/936254/assets/icon-cart-header.svg?1709286701374" alt="" style="height: 28px; width: 28px;">
                                            <span class="count-card">0</span>
                                            <span class="title">GIỎ HÀNG</span>
                                        </a>
                                    </div>
                                    <div class="user">
                                        <img src="https://bizweb.dktcdn.net/100/438/408/themes/936254/assets/icon-user.svg?1709268226602" alt="">
                                        <a class="register" href="register.php">đăng ký</a>
                                        <span>/</span>
                                        <a class="login" style="margin-right: 0;" href="login.php">đăng nhập</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
        </div>

        <!-- back top -->
        <div class="top">
            <a href="#">
                <img src="https://bizweb.dktcdn.net/100/438/408/themes/946371/assets/icon-go-to-top.svg?1713844144226" alt="">
            </a>
        </div>