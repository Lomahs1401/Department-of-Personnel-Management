<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar left</title>
    <style>
        html {
            height: 100%;
        }
        body {
            height: inherit;
        }
        .container {
            display: flex;
            height: inherit;
            flex-direction: column;
            justify-content: center;
        }
        .container ul {
            margin-top: 4px;
            padding: 0 16px 0 24px;
        }
        .container ul li {
            list-style: none;
        }
        .container a {
            margin: 16px 0 16px 0px ;
            display: block;
            text-align: center;
            text-decoration: none;
            font-size: 20px;
            font-style: italic;
            color: black;
        }
        .container a:hover {
            color: #0471AF;
        }
    </style>
</head>
<body>
    <div class="container">
        <ul>
            <li>
                <a href="content.php" target="if3">Trang chủ</a>
            </li>
            <li>
                <a href="xemthongtinNV.php" target="if3">Nhân viên</a>
            </li>
            <li>
                <a href="xemthongtinPB.php" target="if3">Phòng ban</a>
            </li>
            <li>
                <a href="timkiem.php" target="if3">Tìm kiếm</a>
            </li>
            <?php if (isset($_SESSION['login'])) : ?>
                <li>
                    <a href="capnhatNV.php" target="if3">Cập nhật nhân viên</a>
                </li>
                <li>
                    <a href="capnhatPB.php" target="if3">Cập nhật phòng ban</a>
                </li>
                <li>
                    <a href="xoaNV.php" target="if3">Xóa nhân viên</a>
                </li>
                <li>
                    <a href="xoatatcaNV.php" target="if3">Xóa tất cả nhân viên</a>
                </li>
                <li>
                    <a href="xulylogout.php" target="if2">Đăng xuất</a>
                </li>
            <?php else : ?>
                <li>
                    <a href="login.php" target="if3">Đăng nhập</a>
                </li>
            <?php endif; ?>            
        </ul>
    </div>
</body>
</html>