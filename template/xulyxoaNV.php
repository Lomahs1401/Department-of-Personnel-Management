<?php 

    include ('../config/db_connect.php');

    session_start();

    if(isset($_GET['idnv'])) {
        $idnv = $_GET['idnv'];
        $sql = "DELETE FROM nhanvien WHERE IDNV = '$idnv'";
        try {
            $result = mysqli_query($connection, $sql);
            $_SESSION['status_success'] = 'Xóa thành công';
        } catch (Exception $e) {
            $_SESSION['status_error'] = 'Xóa thất bại. Vui lòng thử lại';
        } finally {
            mysqli_close($connection);
            header('Location: xoaNV.php');
        }        
    } else {
        echo 'Hello :)';
    }

?>