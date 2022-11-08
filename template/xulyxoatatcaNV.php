<?php 

    include ('../config/db_connect.php');

    session_start();

    if( isset($_POST['delete_option']) && is_array($_POST['delete_option']) ) {
        $check = TRUE;
        foreach($_POST['delete_option'] as $option) {
            $sql = "DELETE FROM nhanvien WHERE IDNV = '$option'";
            try {
                $result = mysqli_query($connection, $sql);
                if ($result === FALSE) {
                    $check = FALSE;
                }
            } catch (Exception $e) {
                $check = FALSE;
                break;
            }
        }
        if ($check === TRUE) {
            $_SESSION['status_success'] = 'Xóa thành công';
        } else {
            $_SESSION['status_error'] = 'Xóa thất bại. Vui lòng thử lại';
        }
        mysqli_close($connection);
        header('Location: xoatatcaNV.php');
    }

?>