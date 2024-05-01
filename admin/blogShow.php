<?php
include("view/header.php");
include("view/sidebar.php");
include("class/blogClass.php");

$blog = new blog;
$show_blog = $blog->show_blog();
?>
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
    /* img {
        display: flex;
        align-items: center;
        justify-content: center;
    } */
</style>
<div class="main-content" style="height: 100%;">
    <h2>Danh sách bài viết</h2>
    <form action="" method="POST">
        <table>
            <tr>
                <th>STT</th>
                <th>ID</th>
                <th>Tên danh mục</th>
                <th>Tên bài viết</th>
                <th>Nội dung</th>
                <th>Ảnh đại diện</th>
                <th>Hành động</th>
            </tr>
            <?php
            if ($show_blog) {
                $i = 0;
                while ($result = $show_blog->fetch_assoc()) {
                    $i++;
            ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['blog_id'] ?></td>
                        <td><?php echo $result['categorySub_name'] ?></td>
                        <td><?php echo $result['blog_name'] ?></td>
                        <td><?php echo $result['blog_content'] ?></td>
                        <td>
                            <img src="uploads/<?php echo $result['blog_img'] ?>" alt="" width="35px">
                        </td>
                        <td>
                            <a href="blogEdit.php?blog_id=<?php echo $result['blog_id'] ?>">Sửa</a>
                            <span>|</span>
                            <a href="blogDel.php?blog_id=<?php echo $result['blog_id'] ?>">Xóa</a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </form>
</div>