<?php 

    include('../config/db_connect.php');

    session_start();

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }

    $IDNV = '';

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
    <title>Xóa nhân viên</title>
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
            position: relative;
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
        .mb-16 {
            margin-bottom: 16px;
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
            justify-content: flex-end;
        }
        .custom-control-label:hover {
            cursor: pointer;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
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
        .modal {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            display: none;
            animation: fadeIn linear 0.2s;
        }
        .modal__overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
        }
        .modal__body {
            --growth-from: 0.7;
            --growth-to: 1;
            margin: auto;
            position: relative;
            z-index: 1;
            border-radius: 5px;
            animation: growth linear 0.2s;
        }
        .confirm-form {
            width: 505px;
            background-color: #fff;
            border-radius: 5px;
            overflow: hidden;
        }
        .confirm-form__container {
            padding: 0 32px;
        }
        .confirm-form__heading {
            display: block;
            font-size: 3rem;
            font-weight: 500;
            color: #000;
            text-align: center;
            margin: 24px 0 12px;
        }
        .confirm-form__body {
            font-size: 1.05rem;
            line-height: 2rem;
            text-align: center;
            padding: 0 12px;
        }
        .confirm-form__controls {
            margin-top: 16px;
            display: flex;
            justify-content: center;
            padding-bottom: 24px;
        }
        .confirm-form__controls > * {
            margin: 0 16px;
        }
    </style>
</head>
<body>
    <div id="main">
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
        <?php elseif(isset($_SESSION['status_error'])) : ?>
            <div class="alert alert-danger alert-dismissible show-message" style="margin: 16px 3.5%;">
                <button class="close" data-dismiss="alert" aria-label="close">&times;</button>
                <strong>
                    <?php 
                        echo $_SESSION['status_error'];
                        unset($_SESSION['status_error']);
                    ?>
                </strong>
            </div>  
        <?php endif; ?>
        <div class="container mt-16 table-responsive">
            <?php if (count($listEmployees) == 0) : ?>
                <h4 class="center">Chưa có nhân viên trong hệ thống!</h4>
            <?php  else : ?>
                <!-- <form action="xulyxoaNV.php?idnv=" method="POST" name="form_delete"> -->
                    <table class="table table-striped table-hover table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th>IDNV</th>
                                <th>Tên nhân viên</th>
                                <th>Địa chỉ</th>
                                <th>
                                    Xóa
                                    <i class="fa-solid fa-trash-can" style="color: #fff; margin: 1px 0 0 8px;"></i>
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
                                        <input type="button" class="btn btn-danger" id="btn_delete_<?php echo $index ;?>" 
                                            value="Xóa" name="<?php echo htmlspecialchars($employee['IDNV']); ?>">
                                        <a href="xulyxoaNV.php?idnv=<?php echo htmlspecialchars($employee['IDNV']); ?>" 
                                            id="emp<?php echo $index; ?>"></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <!-- </form> -->
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
    </div>

    <!-- Modal delete -->
    <div class="modal">
        <div class="modal__overlay"></div>
        <div class="modal__body">

            <!-- Confirm delete form -->
            <div class="confirm-form">

                <div class="confirm-form__container">
                    <!-- <h2 class="confirm-form__heading">Xóa nhân viên</h2> -->
                    <i class="fa-solid fa-trash-can confirm-form__heading"></i>
                    <p class="confirm-form__body">Xóa sẽ không thể khôi phục dữ liệu. Xác nhận tiếp tục?</p>
                    <div class="confirm-form__controls">
                        <button class="btn btn-secondary" id="btn_confirm_close">Hủy</button>
                        <button class="btn btn-danger" id="btn_confirm_delete" >Xác nhận</button>
                    </div>
                </div>
            </div>

        </div>
    </div>  
    <script>
        setTimeout(() => {
            $('.close').click();
        }, 2200);

        var empID = '';
        var IDNV = '';
        var submit = (empId, idnv) => {
            $('a[id="emp' + empId + '"]').click(() => {
                window.location = "xulyxoaNV.php?idnv=" + idnv;
            });
            $('a[id="emp' + empId + '"]').click();
        }

        $('input[type="button"]').click((event) => {
            btnIndex = event.target.id;
            IDNV = event.target.name;       


            empID = btnIndex.slice(-1);
            $('.modal').css('display', 'flex');
        });

        $('#btn_confirm_close').click(() => {
            $('.modal').css('display', 'none');
        });

        $('.modal').click(() => {
            $('.modal').css('display', 'none');
        });

        $('.modal__body').click((event) => {
            event.stopPropagation();
        });

        $('#btn_confirm_delete').click(() => {
            submit(empID, IDNV);
        });
    </script>
</body>
</html>