<?php 

    include('../config/db_connect.php');

    session_start();

    $idnv = mysqli_real_escape_string($connection, $_POST['idnv']);
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $idpb = mysqli_real_escape_string($connection, $_POST['idpb']);
    $address = mysqli_real_escape_string($connection, $_POST['address']);

    $sql = "INSERT INTO nhanvien(IDNV, HoTen, IDPB, DiaChi) VALUES ('$idnv', '$name', '$idpb', '$address');";
    
    try {
        mysqli_query($connection, $sql);
        $_SESSION['status_success'] = 'Thêm nhân viên mới thành công';
        header('Location: xemthongtinNV.php');
    } catch (Exception $e) {
        $_SESSION['status_error'] = 'Thêm thất bại. Vui lòng thử lại';
        header('Location: themNV.php');
    }
?>