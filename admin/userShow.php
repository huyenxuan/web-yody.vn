<?php
include('view/header.php');
include('view/sidebar.php');
include('class/userClass.php');
$user = new user;
$showUser = $user->show_user();


?>
<title>Danh sách người dùng</title>
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
    tr {
        height: 40px;
    }
    tr:nth-child(even) {
        background-color: #cfe2f3;
    }

    form {
        padding-bottom: 30px;
    }

    a {
        text-decoration: none;
    }

    .action a,
    .action span {
        text-decoration: none;
        font-size: 15px;
        cursor: pointer;
        color: black;
    }
</style>
<div class="main-content" style="height: 100%;">
    <h2>Danh sách sản phẩm</h2>
    <form action="" method="POST">
        <table>
            <tr>
                <th>STT</th>
                <th>Mã người dùng</th>
                <th>Tên người dùng</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Thẩm quyền</th>
                <th>Hành động</th>
            </tr>
            <?php
            if ($showUser) {
                $i = 0;
                while ($result = $showUser->fetch_assoc()) {
                    $i++;
            ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $result['user_id'] ?></td>
                        <td><?php echo $result['fullName'] ?></td>
                        <td><?php echo $result['email'] ?></td>
                        <td><?php echo $result['phoneNumber'] ?></td>
                        <td><?php echo $result['address'] ?></td>
                        <?php if ($result['role'] == 1) : ?>
                            <td><?php echo 'Admin' ?></td>
                        <?php else : ?>
                            <td><?php echo 'Khách hàng' ?></td>
                        <?php endif; ?>
                        <td class="action">
                            <a href="userEdit.php?user_id=<?php echo $result['user_id'] ?>">Sửa</a>
                            <span>|</span>
                            <a onclick="return confirm('Bạn có muốn xóa sản phẩm này không?')" href="userDel.php?user_id=<?php echo $result['user_id'] ?>">Xóa</a>
                        </td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </form>
</div>