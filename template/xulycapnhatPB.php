<?php 

    include('../config/db_connect.php');

    session_start();

    if (isset($_GET['idpb'])) {
        $idpb = mysqli_real_escape_string($connection, $_GET['idpb']);
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $desc = mysqli_real_escape_string($connection, $_POST['desc']);
    
        $sql = "UPDATE phongban SET TenPB = '$name', MoTa = '$desc' WHERE IDPB = '$idpb';";
    
        try {
            mysqli_query($connection, $sql);
            $_SESSION['status_success'] = 'Cập nhật thành công';
            mysqli_close($connection);
            header('Location: capnhatPB.php');
        } catch (Exception $e) {
            $_SESSION['status_error'] = 'Cập nhật thất bại. Vui lòng thử lại';
            mysqli_close($connection);
            header('Location: formcapnhatPB.php');
        }
    }

?>