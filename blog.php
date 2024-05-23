<?php
include("./front-end/fe_header.php");
include("admin/format.php");

$blog = new blog;
$format = new format;

$show_blog = $blog->show_blog();
?>
<title>Blog</title>
<link rel="stylesheet" href="./css/blog.css">
<style>
    .name-category {
        margin: 20px 0 15px;
    }

    .blog-name h3 {
        line-height: 20px;
    }

    .author,
    .date {
        line-height: 32px;
        text-transform: capitalize;
    }
</style>
<div class="wrapper-ctn">
    <div class="main-content">
        <div class="list-blog">
            <h3 class="name-category">Danh mục Tin tức</h3>
            <div class="row">
                <?php
                if ($show_blog) {
                    while ($resultBlog = $show_blog->fetch_assoc()) {
                ?>
                        <div class="blog-ctn">
                            <div class="item-blog">
                                <div class="blog-thumbnail">
                                    <div class="image">
                                        <a href="blogDetail.php?blog_id=<?php echo $resultBlog['blog_id'] ?>">
                                            <img src="admin/uploads/<?php echo $resultBlog['blog_img'] ?>" title="<?php echo $resultBlog['blog_name'] ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="blog-name">
                                        <h3>
                                            <a href="blogDetail.php?blog_id=<?php echo $resultBlog['blog_id'] ?>"><?php echo $format->textShorten($resultBlog['blog_name'], 55) ?></a>
                                        </h3>
                                    </div>
                                    <div class="content">
                                        <p><?php echo $format->textShorten($resultBlog['blog_content'], 130) ?></p>
                                    </div>
                                    <div class="meta">
                                        <span class="author">Admin yody</span>
                                        <span class="date">11/05/2024</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
                <!-- item2 -->
                <div class="blog-ctn">
                    <div class="item-blog">
                        <div class="blog-thumbnail">
                            <div class="image">
                                <a href="">
                                    <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/articles/shop-quan-jean-nu-nha-trang-yody-vn.jpg?v=1715413042260" alt="">
                                </a>
                            </div>
                            <div class="blog-name">
                                <h3>
                                    <a href="">10 shop quần jeans nữ nha trang đẹp, giá tốt ...</a>
                                </h3>
                            </div>
                            <div class="content">
                                <p>Bạn đnag tìm kiếm chiếc quần jean hoàn hảo tôn lên vóc dáng và phong cách của
                                    mình ...</p>
                            </div>
                            <div class="meta">
                                <span class="author">Nguyễn Phương Thảo</span>
                                <span class="date">11/05/2024</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item2 -->
                <div class="blog-ctn">
                    <div class="item-blog">
                        <div class="blog-thumbnail">
                            <div class="image">
                                <a href="">
                                    <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/articles/shop-quan-jean-nu-nha-trang-yody-vn.jpg?v=1715413042260" alt="">
                                </a>
                            </div>
                            <div class="blog-name">
                                <h3>
                                    <a href="">10 shop quần jeans nữ nha trang đẹp, giá tốt</a>
                                </h3>
                            </div>
                            <div class="content">
                                <p>Bạn đnag tìm kiếm chiếc quần jean hoàn hảo tôn lên vóc dáng và phong cách của
                                    mình</p>
                            </div>
                            <div class="meta">
                                <span class="author">Admin yody</span>
                                <span class="date">11/05/2024</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item2 -->
                <div class="blog-ctn">
                    <div class="item-blog">
                        <div class="blog-thumbnail">
                            <div class="image">
                                <a href="">
                                    <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/articles/shop-quan-jean-nu-nha-trang-yody-vn.jpg?v=1715413042260" alt="">
                                </a>
                            </div>
                            <div class="blog-name">
                                <h3>
                                    <a href="">10 shop quần jeans nữ nha trang đẹp, giá tốt</a>
                                </h3>
                            </div>
                            <div class="content">
                                <p>Bạn đnag tìm kiếm chiếc quần jean hoàn hảo tôn lên vóc dáng và phong cách của
                                    mình</p>
                            </div>
                            <div class="meta">
                                <span class="author">Admin yody</span>
                                <span class="date">11/05/2024</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item2 -->
                <div class="blog-ctn">
                    <div class="item-blog">
                        <div class="blog-thumbnail">
                            <div class="image">
                                <a href="">
                                    <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/articles/shop-quan-jean-nu-nha-trang-yody-vn.jpg?v=1715413042260" alt="">
                                </a>
                            </div>
                            <div class="blog-name">
                                <h3>
                                    <a href="">10 shop quần jeans nữ nha trang đẹp, giá tốt</a>
                                </h3>
                            </div>
                            <div class="content">
                                <p>Bạn đnag tìm kiếm chiếc quần jean hoàn hảo tôn lên vóc dáng và phong cách của
                                    mình</p>
                            </div>
                            <div class="meta">
                                <span class="author">Admin yody</span>
                                <span class="date">11/05/2024</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item2 -->
                <div class="blog-ctn">
                    <div class="item-blog">
                        <div class="blog-thumbnail">
                            <div class="image">
                                <a href="">
                                    <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/articles/shop-quan-jean-nu-nha-trang-yody-vn.jpg?v=1715413042260" alt="">
                                </a>
                            </div>
                            <div class="blog-name">
                                <h3>
                                    <a href="">10 shop quần jeans nữ nha trang đẹp, giá tốt</a>
                                </h3>
                            </div>
                            <div class="content">
                                <p>Bạn đnag tìm kiếm chiếc quần jean hoàn hảo tôn lên vóc dáng và phong cách của
                                    mình</p>
                            </div>
                            <div class="meta">
                                <span class="author">Admin yody</span>
                                <span class="date">11/05/2024</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item2 -->
                <div class="blog-ctn">
                    <div class="item-blog">
                        <div class="blog-thumbnail">
                            <div class="image">
                                <a href="">
                                    <img src="https://bizweb.dktcdn.net/thumb/large/100/438/408/articles/shop-quan-jean-nu-nha-trang-yody-vn.jpg?v=1715413042260" alt="">
                                </a>
                            </div>
                            <div class="blog-name">
                                <h3>
                                    <a href="">10 shop quần jeans nữ nha trang đẹp, giá tốt</a>
                                </h3>
                            </div>
                            <div class="content">
                                <p>Bạn đnag tìm kiếm chiếc quần jean hoàn hảo tôn lên vóc dáng và phong cách của
                                    mình</p>
                            </div>
                            <div class="meta">
                                <span class="author">Admin yody</span>
                                <span class="date">11/05/2024</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</main>
<?php
include("./front-end/fe_footer.php")
?>