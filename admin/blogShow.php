<?php
include("view/header.php");
include("view/sidebar.php");
include("class/blogClass.php");
include("format.php");

$blog = new blog;
$format = new format;
$show_blog = $blog->show_blog();
?>
<title>Danh sách bài viết</title>
<!-- main content -->
<style>
    .main-content {
        height: 100% !important;
    }

    table {
        width: 95%;
        text-align: center;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid black;
    }

    tr:nth-child(even) {
        background-color: #cfe2f3;
    }

    form {
        padding-bottom: 30px;
    }

    .blog_content img:first-child {
        width: 50%;
        height: auto;
    }

    .blog_content p {
        margin: 0;
    }

    .blog_img img {
        width: 100%;
        padding: 0 5px;
        margin: auto;
        box-sizing: border-box;
    }
</style>
<div class="main-content" style="height: 100%;">
    <h2>Danh sách bài viết</h2>
    <form action="" method="POST">
        <table>
            <tr>
                <th>STT</th>
                <th>Tên danh mục</th>
                <th>Tên bài viết</th>
                <th style="width: 300px">Nội dung</th>
                <th>Ảnh đại diện</th>
                <th style="width: 70px">Hành động</th>
            </tr>
            <?php
            if ($show_blog) {
                $i = 0;
                while ($result = $show_blog->fetch_assoc()) {
                    $i++;
            ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['categorySub_name'] ?></td>
                        <td><?php echo $result['blog_name'] ?></td>
                        <td class="blog_content"><?php echo $format->textShorten($result['blog_content'], 400) ?></td>
                        <td class="blog_img" style="width: 130px">
                            <img src="uploads/<?php echo $result['blog_img'] ?>" alt="" width="35px">
                        </td>
                        <td>
                            <a href="blogEdit.php?blog_id=<?php echo $result['blog_id'] ?>">Sửa</a>
                            <span>|</span>
                            <a onclick="return confirm('Bạn có muốn xóa bài viết này không?')" href="blogDel.php?blog_id=<?php echo $result['blog_id'] ?>">Xóa</a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </form>
</div>