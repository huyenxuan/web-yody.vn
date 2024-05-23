<!-- main -->
<style>
    .sidebar,
    .main-content {
        height: 100vh;
    }

    a {
        text-decoration: none;
        color: black
    }

    .container,
    .sidebar,
    .main-content {
        height: unset !important;
    }

    .sidebar-sub:last-child {
        padding-bottom: 40px;
    }

    .logout {
        margin-top: 20px;
    }

    .logout button {
        background: red;
        color: white;
        outline: none;
        border: none;
        padding: 12px 35px;
        cursor: pointer;
    }
</style>
<main>
    <div class="container">
        <!-- sidebar -->
        <div class="sidebar">
            <div class="sidebar-sub order">
                <h3><a href="order.php" style="text-decoration: none; color: black">Đơn hàng</a></h3>
            </div>
            <div class="sidebar-sub slider">
                <h3>Banner Slider</h3>
                <ul>
                    <li><a href="bannerAdd.php">Thêm ảnh banner</a></li>
                    <li><a href="bannerShow.php">Danh sách ảnh banner</a></li>
                </ul>
            </div>
            <div class="sidebar-sub category">
                <h3>Danh mục</h3>
                <ul>
                    <li><a href="cateAdd.php">Danh mục cha</a></li>
                    <li><a href="cateSubAdd.php">Danh mục con</a></li>
                    <li><a href="cateShow.php">Danh sách danh mục</a></li>
                </ul>
            </div>
            <div class="sidebar-sub product-type">
                <h3>Loại sản phẩm</h3>
                <ul>
                    <li><a href="classifyAdd.php">Thêm loại sản phẩm</a></li>
                    <li><a href="classifyShow.php">Danh sách loại sản phẩm</a></li>
                </ul>
            </div>
            <div class="sidebar-sub product">
                <h3>Sản phẩm</h3>
                <ul>
                    <li><a href="productAdd.php">Thêm sản phẩm</a></li>
                    <li><a href="productShow.php">Danh sách sản phẩm</a></li>
                </ul>
            </div>
            <div class="sidebar-sub news">
                <h3>Tin tức</h3>
                <ul>
                    <li><a href="blogAdd.php">Thêm tin tức</a></li>
                    <li><a href="blogShow.php">Danh sách tin tức</a></li>
                </ul>
            </div>
            <div class="sidebar-sub statistical">
                <h3>Thống kê</h3>
                <ul>
                    <li><a href="">Thống kê theo tháng</a></li>
                    <li><a href="">Thống kê theo quý</a></li>
                    <li><a href="">Sản phẩm bán chạy</a></li>
                    <li><a href="">Sản phẩm bán chậm</a></li>
                </ul>
            </div>
            <div class="sidebar-sub account">
                <h3>Quản lý người dùng</h3>
                <ul>
                    <li><a href="">Thêm tài khoản</a></li>
                    <li><a href="">Danh sách tài khoản</a></li>
                </ul>
            </div>
            <div class="sidebar-sub feedback">
                <h3><a href="">Quản lý đánh giá</a></h3>
            </div>
            <div class="sidebar-sub logout">
                <a href="logout.php"><button>Logout</button></a>
            </div>
        </div>