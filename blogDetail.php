<?php
include("./front-end/fe_header.php");

$blog = new blog();

$blog_id = $_GET['blog_id'];
$show_blog = $blog->get_blog($blog_id);
$result = $show_blog->fetch_assoc();

?>
<title><?php echo $result['blog_name'] ?></title>
<link rel="stylesheet" href="./css/blogDetail.css">
<style>
    span {
        color: unset;
    }

    .content {
        font-family: sans-serif;
        width: 100%;
        overflow: hidden;
        color: black;
    }

    .author,
    .date {
        line-height: 32px;
        text-transform: capitalize;
    }
</style>
<div class="wrapper-ctn">
    <div class="main-content">
        <div class="left">
            <!-- title -->
            <div class="title">
                <a href="index.php">Trang chủ /</a>
                <a href="blog.php">Tin tức tổng hợp /</a>
                <span><?php echo $result['blog_name'] ?></span>
            </div>
            <!-- name blog -->
            <div class="blog-name">
                <h1><?php echo $result['blog_name'] ?></h1>
            </div>
            <!-- author & date -->
            <div class="meta">
                <span class="author"> Biên tập bởi: <strong><?php echo $result['author'] ?></strong></span>
                <span class="date"><?php echo $result['createat'] ?></span>
            </div>
            <!-- banner -->
            <div class="banner-blog">
                <img src="https://bizweb.dktcdn.net/100/438/408/themes/950002/assets/slider_5.jpg?1715704555119" alt="">
            </div>
            <!-- content -->
            <div class="content">
                <?php
                echo $result['blog_content']
                ?>
            </div>
            <!-- share social -->
            <div class="share">
                <p>Chia sẻ bài viết này</p>
                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-pinterest"></i></a>
                <a href=""><i class="fa-solid fa-link"></i></a>
            </div>
            <!-- comment -->
            <div class="comment">
                <div class="title-cmt">
                    <div>Viết bình luận</div>
                </div>
                <form action="">
                    <div class="row">
                        <input type="text" name="name" id="" placeholder="Họ tên">
                        <input type="email" name="email" id="" placeholder="Email">
                    </div>
                    <div class="content-cmt">
                        <textarea name="" id="" cols="30" rows="10" placeholder="Nội dung"></textarea>
                    </div>
                    <!-- button -->
                    <button>Gửi bình luận</button>
                </form>
            </div>
        </div>
        <div class="right"><!-- ads -->
            <div class="ads">
                <img src="https://bizweb.dktcdn.net/100/438/408/themes/950002/assets/article_banner_1.jpg?1716196391284" alt="">
            </div>
        </div>
    </div>
</div>
</main>
<?php
include("./front-end/fe_footer.php")
?>