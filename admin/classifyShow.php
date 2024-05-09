<?php
include("view/header.php");
include("view/sidebar.php");
include ("class/classifyClass.php");

$classify = new classify;
$show_classify = $classify->show_classify();
?>
<!-- main content -->
<style>
    .main-content {
        height: 100%;
    }
    table {
        width: 95%;
        text-align: center;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid black;
    }
    tr:nth-child(even) {
        background-color: #cfe2f3;
    }
    form {
        padding-bottom: 30px;
    }
</style>
<div class="main-content">
    <h2>Danh sách phân loại sản phẩm</h2>
    <form action="" method="POST">
        <table>
            <tr>
                <th>STT</th>
                <th>ID</th>
                <th>Danh mục cha</th>
                <th>Danh mục con</th>
                <th>Loại sản phẩm</th>
                <th>Hành động</th>
            </tr>
            <?php
            if ($show_classify) {
                $i = 0;
                while ($result = $show_classify->fetch_assoc()) {
                    $i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['classify_id'] ?></td>
                        <td><?php echo $result['category_name'] ?></td>
                        <td><?php echo $result['categorySub_name'] ?></td>
                        <td><?php echo $result['classify_name'] ?></td>
                        <td>
                            <a href="classifyEdit.php?classify_id=<?php echo $result['classify_id'] ?>">Sửa</a>
                            <span>|</span>
                            <a onclick="return confirm('Bạn có muốn xóa loại sản phẩm này không?')" href="classifyDel.php?classify_id=<?php echo $result['classify_id'] ?>">Xóa</a>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
        </table>
    </form>
</div>