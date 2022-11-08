<?php 
    include('../config/db_connect.php');

    session_start();

    $idpb = mysqli_real_escape_string($connection, $_POST['idpb']);
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $desc = mysqli_real_escape_string($connection, $_POST['desc']);

    $sql = "INSERT INTO phongban(IDPB, TenPB, MoTa) VALUES ('$idpb', '$name', '$desc');";

    try {
        mysqli_query($connection, $sql);
        $_SESSION['status_success'] = 'Thêm phòng ban mới thành công';
        header('Location: xemthongtinPB.php');
    } catch (Exception $e) {
        $_SESSION['status_error'] = 'Thêm thất bại. Vui lòng thử lại';
        header('Location: themPB.php');
    }
?>