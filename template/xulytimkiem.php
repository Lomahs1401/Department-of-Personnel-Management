<?php 

    include ('../config/db_connect.php');

    $option = $_POST['criteria'];
    $value = $_POST['search_key'];
    $sql = '';

    if ($option == 'idnv') {
        $sql = "SELECT IDNV, HoTen, DiaChi FROM nhanvien WHERE IDNV = '$value'";
    } else if ($option == 'name') {
        $sql = "SELECT IDNV, HoTen, DiaChi FROM nhanvien WHERE HoTen LIKE '%$value%'";
    } else if ($option == 'idpb') {
        $sql = "SELECT IDNV, HoTen, DiaChi FROM nhanvien WHERE IDPB = '$value'";
    } else if ($option == 'address') {
        $sql = "SELECT IDNV, HoTen, DiaChi FROM nhanvien WHERE DiaChi LIKE '%$value%'";
    }

    $result = mysqli_query($connection, $sql);
    $listEmployees = mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_free_result($result);
    mysqli_close($connection);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xử lý tìm kiếm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <style>
        html {
            font-size: 62,5%;
        }
        #main {
            margin: 8px;
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
        .mr-44 {
            margin-right: 44px;
        }
        #main > div {
            vertical-align: middle;
            text-align: center;
        }
        .controls {
            display: flex;
        }
    </style>
</head>
<body>
    <div id="main">
        <div class="container mt-16 table-responsive">
            <?php if (count($listEmployees) == 0) : ?>
                <h4 class="center">Không tìm thấy</h4>
            <?php else : ?>
                <h4 class="center">Danh sách nhân viên</h4>
                <table class="table table-striped table-hover table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>IDNV</th>
                            <th>Tên nhân viên</th>
                            <th>Địa chỉ</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($listEmployees as $employee) : ?>
                            <tr>
                                <td><?php echo htmlspecialchars($employee['IDNV']); ?></td>
                                <td><?php echo htmlspecialchars($employee['HoTen']); ?></td>
                                <td><?php echo htmlspecialchars($employee['DiaChi']); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
        <div class="controls" style="margin-left: 40px; justify-content: <?php echo (count($listEmployees) == 0) ? "center" : "flex-end"; ?>">
            <a type="button" href="timkiem.php" class="btn btn-primary mt-16 mr-44">Back</a>
        </div>
    </div>
</body>
</html>