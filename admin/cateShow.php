<?php
include("view/header.php");
include("view/sidebar.php");
include("class/cateSubClass.php");

$categorySub = new categorySub;
$show_categorySub = $categorySub->show_categorySub();
?>
<style>
    .main-content {
        height: 100%;
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
</style>
<div class="main-content">
    <h2>Danh sách danh mục</h2>
    <form action="" method="POST">
        <table>
            <tr>
                <th>STT</th>
                <th>ID</th>
                <th>Danh Mục Cha</th>
                <th>Danh Mục Con</th>
                <th>Hành động</th>
            </tr>
            <?php
            if ($show_categorySub) {
                $i = 0;
                while ($result = $show_categorySub->fetch_assoc()) {
                    $i++;
            ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['category_id'] ?></td>
                        <td><?php echo $result['category_name'] ?></td>
                        <td><?php echo $result['categorySub_name'] ?></td>
                        <td>
                            <a href="cateEdit.php?categorySub_id=<?php echo $result['categorySub_id'] ?>">Sửa</a>
                            <span>|</span>
                            <a onclick="return confirm('Bạn có muốn xóa danh mục này không?')" href="cateDel.php?categorySub_id=<?php echo $result['categorySub_id'] ?>">Xóa</a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>

    </form>
</div>