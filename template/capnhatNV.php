<?php 

    include('../config/db_connect.php');

    session_start();

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    $fileName = basename(__FILE__);

    $num_per_page = 05;
    $start_from = ($page - 1) * $num_per_page;

    $sql = "SELECT IDNV, HoTen, DiaChi FROM nhanvien LIMIT $start_from, $num_per_page;";
    $result = mysqli_query($connection, $sql);
    $listEmployees = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật nhân viên</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <style>
        html {
            font-size: 62,5%;
            height: 100%;
        }
        body {
            height: inherit;
        }
        #main {
            margin: 8px;
            height: inherit;
        }
        .center {
            text-align: center;
            font-size: 1.6rem;
        }
        .mt-8 {
            margin-top: 8px;
        }
        .mt-16 {
            margin-top: 16px;
        }
        #main > div {
            vertical-align: middle;
            text-align: center;
        }
        @keyframes fadeOut {
            from {
                opacity: 1;
            }
            to {
                opacity: 0;
            }
        }
        .show-message {
            animation: fadeOut 2.2s linear;
        }
    </style>
</head>
<body>
    <div id="main">
        <?php if (isset($_SESSION['user'])) : ?>
            <h1>CHưa đăng nhập</h1>
        <?php else : ?>
            <h4 class="center mt-16">Danh sách nhân viên</h4>
            <?php if(isset($_SESSION['status_success'])) : ?>
                <div class="alert alert-success alert-dismissible show-message" style="margin: 16px 3.5%;">
                    <button class="close" data-dismiss="alert" aria-label="close">&times;</button>
                    <strong>
                        <?php 
                            echo $_SESSION['status_success'];
                            unset($_SESSION['status_success']);
                        ?>
                    </strong>
                </div>         
            <?php endif; ?>
            <div class="container mt-16 table-responsive">
                <?php if (count($listEmployees) == 0) : ?>
                    <h4 class="center">Chưa có nhân viên trong hệ thống!</h4>
                <?php  else : ?>
                    <table class="table table-striped table-hover table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>IDNV</th>
                                <th>Họ và tên</th>
                                <th>Địa chỉ</th>
                                <th>
                                    Cập nhật
                                    <i class="fa-solid fa-pen-to-square" style="color: #fff; margin: 1px 0 0 8px;"></i>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($listEmployees as $index => $employee) : ?>
                                <tr>
                                    <td><?php echo htmlspecialchars($employee['IDNV']); ?></td>
                                    <td><?php echo htmlspecialchars($employee['HoTen']); ?></td>
                                    <td><?php echo htmlspecialchars($employee['DiaChi']); ?></td>
                                    <td>
                                        <a href="formcapnhatNV.php?idnv=<?php echo htmlspecialchars($employee['IDNV']) ?>">Cập nhật</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <ul class="pagination justify-content-end">
                        <?php 
                            $pagination_query = "SELECT IDNV, HoTen, DiaChi FROM nhanvien;";
                            $pagination_result = mysqli_query($connection, $pagination_query);
                            $total_record = mysqli_num_rows($pagination_result);
                            $total_page = ceil($total_record / $num_per_page);
                            mysqli_close($connection);

                            if ($page > 1) {
                                echo '<li class="page-item"><a class="page-link" href="' . $fileName . '?page='. ($page - 1) .'">Trước</a></li>';
                            }

                            for ($i = 1; $i < $total_page; $i++) {
                                if ($i == $page) {
                                    echo '<li class="page-item active"><a class="page-link" href="' . $fileName . '?page='. $i . '">' . $i . '</a></li>';
                                } else {
                                    echo '<li class="page-item"><a class="page-link" href="' . $fileName . '?page='. $i . '">' . $i . '</a></li>';
                                }
                            }

                            if ($i > $page) {
                                echo '<li class="page-item"><a class="page-link" href="' . $fileName . '?page='. ($page + 1) .'">Sau</a></li>';
                            }
                        ?>
                    </ul>
                <?php endif; ?> 
            </div>
        <?php endif; ?>
    </div>
    <script>
        setTimeout(() => {
            $('.close').click();
        }, 2200);
    </script>
</body>
</html>