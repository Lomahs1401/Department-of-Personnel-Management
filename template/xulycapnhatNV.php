<?php 

    include('../config/db_connect.php');

    session_start();

    if (isset($_GET['idnv'])) {
        $idnv = mysqli_real_escape_string($connection, $_GET['idnv']);
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $idpb = mysqli_real_escape_string($connection, $_POST['idpb']);
        $address = mysqli_real_escape_string($connection, $_POST['address']);

        $sql = "UPDATE nhanvien SET HoTen = '$name', IDPB = '$idpb', DiaChi = '$address' WHERE IDNV = '$idnv';";

        try {
            mysqli_query($connection, $sql);
            $_SESSION['status_success'] = 'Cập nhật thành công';
            mysqli_close($connection);
            header('Location: capnhatNV.php');
        } catch (Exception $e) {
            $_SESSION['status_error'] = 'Cập nhật thất bại. Vui lòng thử lại';
            mysqli_close($connection);
            header('Location: formcapnhatNV.php');
        }
    }

?>