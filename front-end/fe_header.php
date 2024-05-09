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
<?php
include("admin/class/showFrontEnd.php");

$product = new product;

?>

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
                                            <input required name="keyword" type="text" placeholder="Tìm kiếm" title="Vui lòng điền vào trường này" value="<?php echo (isset($_GET['keyword'])) ? $_GET['keyword'] : '' ?>">
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
                                        <a href="tel: 18002086">1800 2086</a>
                                        <span class="free">free</span>
                                    </div>
                                    <span style="margin: 0 8px;"> - </span>
                                    <div class="call-order">
                                        <span style="margin-right: 3px;">Đặt hàng gọi</span>
                                        <i class="fa-solid fa-phone"></i>
                                        <span style="cursor: pointer; margin-left: 3px;"><a href="tel: 02499986999">02499986999</a></span>
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
                                                <a class="dad-list" href="category.php?category_id=2" title="NỮ">nữ</a>
                                                <!-- mega menu -->
                                                <ul class="mega-menu">
                                                    <li class="parrent-mega">
                                                        <ul>
                                                            <li class="list-item1">
                                                                <a class="title-m" href="categorySub.php?categorySub_id=1" title="ÁO NỮ">áo nữ</a>
                                                                <ul>
                                                                    <?php
                                                                    $categorySub_id = 1;
                                                                    $show_product = $product->show_classify($categorySub_id);
                                                                    if ($show_product) {
                                                                        while ($resultClassify = $show_product->fetch_assoc()) {
                                                                    ?>
                                                                            <li>
                                                                                <a href="classify.php?classify_id=<?php echo $resultClassify['classify_id'] ?>" class="a3" title="<?php echo $resultClassify['classify_name'] ?>">
                                                                                    <?php echo $resultClassify['classify_name'] ?>
                                                                                </a>
                                                                            </li>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a class="title-m" href="categorySub.php?categorySub_id=2" title="QUẦN NỮ">quần nữ</a>
                                                                <ul>
                                                                    <?php
                                                                    $categorySub_id = 2;
                                                                    $show_product = $product->show_classify($categorySub_id);
                                                                    if ($show_product) {
                                                                        while ($resultClassify = $show_product->fetch_assoc()) {
                                                                    ?>
                                                                            <li>
                                                                                <a href="classify.php?classify_id=<?php echo $resultClassify['classify_id'] ?>" class="a3" title="<?php echo $resultClassify['classify_name'] ?>">
                                                                                    <?php echo $resultClassify['classify_name'] ?>
                                                                                </a>
                                                                            </li>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="categorySub.php?categorySub_id=3" class="title-m" title="BỘ ĐỒ NỮ">bộ đồ nữ</a>
                                                                <ul>
                                                                    <?php
                                                                    $categorySub_id = 3;
                                                                    $show_product = $product->show_classify($categorySub_id);
                                                                    if ($show_product) {
                                                                        while ($resultClassify = $show_product->fetch_assoc()) {
                                                                    ?>
                                                                            <li>
                                                                                <a href="classify.php?classify_id=<?php echo $resultClassify['classify_id'] ?>" class="a3" title="<?php echo $resultClassify['classify_name'] ?>">
                                                                                    <?php echo $resultClassify['classify_name'] ?>
                                                                                </a>
                                                                            </li>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="categorySub.php?categorySub_id=4" class="title-m" title="NỔI BẬT" style="color: red !important;">nổi bật</a>
                                                                <ul>
                                                                    <?php
                                                                    $categorySub_id = 4;
                                                                    $show_product = $product->show_classify($categorySub_id);
                                                                    if ($show_product) {
                                                                        while ($resultClassify = $show_product->fetch_assoc()) {
                                                                    ?>
                                                                            <li>
                                                                                <a href="classify.php?classify_id=<?php echo $resultClassify['classify_id'] ?>" class="a3" title="<?php echo $resultClassify['classify_name'] ?>">
                                                                                    <?php echo $resultClassify['classify_name'] ?>
                                                                                </a>
                                                                            </li>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="categorySub.php?categorySub_id=5" class="title-m" title="ĐỒ MẶC TRONG NỮ">đồ
                                                                    mặc
                                                                    trong nữ</a>
                                                                <ul>
                                                                    <?php
                                                                    $categorySub_id = 5;
                                                                    $show_product = $product->show_classify($categorySub_id);
                                                                    if ($show_product) {
                                                                        while ($resultClassify = $show_product->fetch_assoc()) {
                                                                    ?>
                                                                            <li>
                                                                                <a href="classify.php?classify_id=<?php echo $resultClassify['classify_id'] ?>" class="a3" title="<?php echo $resultClassify['classify_name'] ?>">
                                                                                    <?php echo $resultClassify['classify_name'] ?>
                                                                                </a>
                                                                            </li>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="categorySub.php?categorySub_id=6" class="title-m" title="ĐỒ THỂ THAO NỮ">đồ thể
                                                                    thao nữ</a>
                                                                <ul>
                                                                    <?php
                                                                    $categorySub_id = 6;
                                                                    $show_product = $product->show_classify($categorySub_id);
                                                                    if ($show_product) {
                                                                        while ($resultClassify = $show_product->fetch_assoc()) {
                                                                    ?>
                                                                            <li>
                                                                                <a href="classify.php?classify_id=<?php echo $resultClassify['classify_id'] ?>" class="a3" title="<?php echo $resultClassify['classify_name'] ?>">
                                                                                    <?php echo $resultClassify['classify_name'] ?>
                                                                                </a>
                                                                            </li>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="categorySub.php?categorySub_id=7" class="title-m" title="CHÂN VÁY NỮ">chân váy
                                                                    nữ</a>
                                                                <ul>
                                                                    <?php
                                                                    $categorySub_id = 7;
                                                                    $show_product = $product->show_classify($categorySub_id);
                                                                    if ($show_product) {
                                                                        while ($resultClassify = $show_product->fetch_assoc()) {
                                                                    ?>
                                                                            <li>
                                                                                <a href="classify.php?classify_id=<?php echo $resultClassify['classify_id'] ?>" class="a3" title="<?php echo $resultClassify['classify_name'] ?>">
                                                                                    <?php echo $resultClassify['classify_name'] ?>
                                                                                </a>
                                                                            </li>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="categorySub.php?categorySub_id=8" class="title-m" title="ĐẦM NỮ">đầm nữ</a>
                                                                <ul>
                                                                    <?php
                                                                    $categorySub_id = 8;
                                                                    $show_product = $product->show_classify($categorySub_id);
                                                                    if ($show_product) {
                                                                        while ($resultClassify = $show_product->fetch_assoc()) {
                                                                    ?>
                                                                            <li>
                                                                                <a href="classify.php?classify_id=<?php echo $resultClassify['classify_id'] ?>" class="a3" title="<?php echo $resultClassify['classify_name'] ?>">
                                                                                    <?php echo $resultClassify['classify_name'] ?>
                                                                                </a>
                                                                            </li>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="categorySub.php?categorySub_id=9" class="title-m" title="PHỤ KIỆN NỮ">phụ kiện
                                                                    nữ</a>
                                                                <ul>
                                                                    <?php
                                                                    $categorySub_id = 9;
                                                                    $show_product = $product->show_classify($categorySub_id);
                                                                    if ($show_product) {
                                                                        while ($resultClassify = $show_product->fetch_assoc()) {
                                                                    ?>
                                                                            <li>
                                                                                <a href="classify.php?classify_id=<?php echo $resultClassify['classify_id'] ?>" class="a3" title="<?php echo $resultClassify['classify_name'] ?>">
                                                                                    <?php echo $resultClassify['classify_name'] ?>
                                                                                </a>
                                                                            </li>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
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
                                            </li>
                                            <li class="nav-item has-child has-mega">
                                                <a class="dad-list" href="category.php?category_id=3" title="NAM">nam</a>
                                                <!-- mega menu -->
                                                <ul class="mega-menu">
                                                    <li class="parrent-mega">
                                                        <ul>
                                                            <li class="list-item1">
                                                                <a class="title-m" href="categorySub.php?categorySub_id=10" title="ÁO NAM">áo nam</a>
                                                                <ul>
                                                                    <?php
                                                                    $categorySub_id = 10;
                                                                    $show_product = $product->show_classify($categorySub_id);
                                                                    if ($show_product) {
                                                                        while ($resultClassify = $show_product->fetch_assoc()) {
                                                                    ?>
                                                                            <li>
                                                                                <a href="classify.php?classify_id=<?php echo $resultClassify['classify_id'] ?>" class="a3" title="<?php echo $resultClassify['classify_name'] ?>">
                                                                                    <?php echo $resultClassify['classify_name'] ?>
                                                                                </a>
                                                                            </li>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a class="title-m" href="categorySub.php?categorySub_id=11" title="QUẦN NAM">quần nam</a>
                                                                <ul>
                                                                    <?php
                                                                    $categorySub_id = 11;
                                                                    $show_product = $product->show_classify($categorySub_id);
                                                                    if ($show_product) {
                                                                        while ($resultClassify = $show_product->fetch_assoc()) {
                                                                    ?>
                                                                            <li>
                                                                                <a href="classify.php?classify_id=<?php echo $resultClassify['classify_id'] ?>" class="a3" title="<?php echo $resultClassify['classify_name'] ?>">
                                                                                    <?php echo $resultClassify['classify_name'] ?>
                                                                                </a>
                                                                            </li>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="categorySub.php?categorySub_id=12" class="title-m" title="BỘ ĐỒ NAM">bộ đồ
                                                                    nam</a>
                                                                <ul>
                                                                    <?php
                                                                    $categorySub_id = 12;
                                                                    $show_product = $product->show_classify($categorySub_id);
                                                                    if ($show_product) {
                                                                        while ($resultClassify = $show_product->fetch_assoc()) {
                                                                    ?>
                                                                            <li>
                                                                                <a href="classify.php?classify_id=<?php echo $resultClassify['classify_id'] ?>" class="a3" title="<?php echo $resultClassify['classify_name'] ?>">
                                                                                    <?php echo $resultClassify['classify_name'] ?>
                                                                                </a>
                                                                            </li>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="categorySub.php?categorySub_id=13" class="title-m" title="NỔI BẬT" style="color: red !important;">nổi bật</a>
                                                                <ul>
                                                                    <?php
                                                                    $categorySub_id = 13;
                                                                    $show_product = $product->show_classify($categorySub_id);
                                                                    if ($show_product) {
                                                                        while ($resultClassify = $show_product->fetch_assoc()) {
                                                                    ?>
                                                                            <li>
                                                                                <a href="classify.php?classify_id=<?php echo $resultClassify['classify_id'] ?>" class="a3" title="<?php echo $resultClassify['classify_name'] ?>">
                                                                                    <?php echo $resultClassify['classify_name'] ?>
                                                                                </a>
                                                                            </li>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="categorySub.php?categorySub_id=14" class="title-m" title="ĐỒ THỂ THAO NAM">đồ
                                                                    thể
                                                                    thao nam</a>
                                                                <ul>
                                                                    <?php
                                                                    $categorySub_id = 14;
                                                                    $show_product = $product->show_classify($categorySub_id);
                                                                    if ($show_product) {
                                                                        while ($resultClassify = $show_product->fetch_assoc()) {
                                                                    ?>
                                                                            <li>
                                                                                <a href="classify.php?classify_id=<?php echo $resultClassify['classify_id'] ?>" class="a3" title="<?php echo $resultClassify['classify_name'] ?>">
                                                                                    <?php echo $resultClassify['classify_name'] ?>
                                                                                </a>
                                                                            </li>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="categorySub.php?categorySub_id=15" class="title-m" title="ĐỒ MẶC TRONG NAM">đồ
                                                                    mặc
                                                                    trong nam</a>
                                                                <ul>
                                                                    <?php
                                                                    $categorySub_id = 15;
                                                                    $show_product = $product->show_classify($categorySub_id);
                                                                    if ($show_product) {
                                                                        while ($resultClassify = $show_product->fetch_assoc()) {
                                                                    ?>
                                                                            <li>
                                                                                <a href="classify.php?classify_id=<?php echo $resultClassify['classify_id'] ?>" class="a3" title="<?php echo $resultClassify['classify_name'] ?>">
                                                                                    <?php echo $resultClassify['classify_name'] ?>
                                                                                </a>
                                                                            </li>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="categorySub.php?categorySub_id=16" class="title-m" title="PHỤ KIỆN NAM">phụ kiện
                                                                    nam</a>
                                                                <ul>
                                                                    <?php
                                                                    $categorySub_id = 16;
                                                                    $show_product = $product->show_classify($categorySub_id);
                                                                    if ($show_product) {
                                                                        while ($resultClassify = $show_product->fetch_assoc()) {
                                                                    ?>
                                                                            <li>
                                                                                <a href="classify.php?classify_id=<?php echo $resultClassify['classify_id'] ?>" class="a3" title="<?php echo $resultClassify['classify_name'] ?>">
                                                                                    <?php echo $resultClassify['classify_name'] ?>
                                                                                </a>
                                                                            </li>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
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
                                                                <a class="title-m" href="categorySub.php?categorySub_id=17" title="ÁO TRẺ EM">áo trẻ
                                                                    em</a>
                                                                <ul>
                                                                    <?php
                                                                    $categorySub_id = 17;
                                                                    $show_product = $product->show_classify($categorySub_id);
                                                                    if ($show_product) {
                                                                        while ($resultClassify = $show_product->fetch_assoc()) {
                                                                    ?>
                                                                            <li>
                                                                                <a href="classify.php?classify_id=<?php echo $resultClassify['classify_id'] ?>" class="a3" title="<?php echo $resultClassify['classify_name'] ?>">
                                                                                    <?php echo $resultClassify['classify_name'] ?>
                                                                                </a>
                                                                            </li>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a class="title-m" href="categorySub.php?categorySub_id=18" title="QUẦN TRẺ EM">quần trẻ
                                                                    em</a>
                                                                <ul>
                                                                    <?php
                                                                    $categorySub_id = 18;
                                                                    $show_product = $product->show_classify($categorySub_id);
                                                                    if ($show_product) {
                                                                        while ($resultClassify = $show_product->fetch_assoc()) {
                                                                    ?>
                                                                            <li>
                                                                                <a href="classify.php?classify_id=<?php echo $resultClassify['classify_id'] ?>" class="a3" title="<?php echo $resultClassify['classify_name'] ?>">
                                                                                    <?php echo $resultClassify['classify_name'] ?>
                                                                                </a>
                                                                            </li>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="categorySub.php?categorySub_id=19" class="title-m" title="BỘ ĐỒ TRẺ EM">bộ đồ trẻ em</a>
                                                                <ul>
                                                                    <?php
                                                                    $categorySub_id = 19;
                                                                    $show_product = $product->show_classify($categorySub_id);
                                                                    if ($show_product) {
                                                                        while ($resultClassify = $show_product->fetch_assoc()) {
                                                                    ?>
                                                                            <li>
                                                                                <a href="classify.php?classify_id=<?php echo $resultClassify['classify_id'] ?>" class="a3" title="<?php echo $resultClassify['classify_name'] ?>">
                                                                                    <?php echo $resultClassify['classify_name'] ?>
                                                                                </a>
                                                                            </li>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="categorySub.php?categorySub_id=20" class="title-m" title="NỔI BẬT" style="color: red !important;">nổi bật</a>
                                                                <ul>
                                                                    <?php
                                                                    $categorySub_id = 20;
                                                                    $show_product = $product->show_classify($categorySub_id);
                                                                    if ($show_product) {
                                                                        while ($resultClassify = $show_product->fetch_assoc()) {
                                                                    ?>
                                                                            <li>
                                                                                <a href="classify.php?classify_id=<?php echo $resultClassify['classify_id'] ?>" class="a3" title="<?php echo $resultClassify['classify_name'] ?>">
                                                                                    <?php echo $resultClassify['classify_name'] ?>
                                                                                </a>
                                                                            </li>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="categorySub.php?categorySub_id=21" class="title-m" title="ĐỒ THỂ TRẺ EM">đồ thể trẻ em</a>
                                                                <ul>
                                                                <?php
                                                                    $categorySub_id = 21;
                                                                    $show_product = $product->show_classify($categorySub_id);
                                                                    if ($show_product) {
                                                                        while ($resultClassify = $show_product->fetch_assoc()) {
                                                                    ?>
                                                                            <li>
                                                                                <a href="classify.php?classify_id=<?php echo $resultClassify['classify_id'] ?>" class="a3" title="<?php echo $resultClassify['classify_name'] ?>">
                                                                                    <?php echo $resultClassify['classify_name'] ?>
                                                                                </a>
                                                                            </li>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="categorySub.php?categorySub_id=22" class="title-m" title="CHÂN VÁY BÉ GÁI">chân
                                                                    váy
                                                                    bé gái</a>
                                                                <ul>
                                                                <?php
                                                                    $categorySub_id = 22;
                                                                    $show_product = $product->show_classify($categorySub_id);
                                                                    if ($show_product) {
                                                                        while ($resultClassify = $show_product->fetch_assoc()) {
                                                                    ?>
                                                                            <li>
                                                                                <a href="classify.php?classify_id=<?php echo $resultClassify['classify_id'] ?>" class="a3" title="<?php echo $resultClassify['classify_name'] ?>">
                                                                                    <?php echo $resultClassify['classify_name'] ?>
                                                                                </a>
                                                                            </li>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
                                                                </ul>
                                                            </li>
                                                            <li class="list-item1">
                                                                <a href="categorySub.php?categorySub_id=23" class="title-m" title="ĐẦM BÉ GÁI">đầm bé
                                                                    gái</a>
                                                                <ul>
                                                                <?php
                                                                    $categorySub_id = 23;
                                                                    $show_product = $product->show_classify($categorySub_id);
                                                                    if ($show_product) {
                                                                        while ($resultClassify = $show_product->fetch_assoc()) {
                                                                    ?>
                                                                            <li>
                                                                                <a href="classify.php?classify_id=<?php echo $resultClassify['classify_id'] ?>" class="a3" title="<?php echo $resultClassify['classify_name'] ?>">
                                                                                    <?php echo $resultClassify['classify_name'] ?>
                                                                                </a>
                                                                            </li>
                                                                    <?php
                                                                        }
                                                                    }
                                                                    ?>
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