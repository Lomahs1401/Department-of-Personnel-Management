<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm phòng ban</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <style>
        html {
            font-size: 62,5%;
        }
        #main {
            margin: 8px 40px;
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
            justify-content: center;
        }
        .controls > * {
            margin: 0 4px;
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
        <h4 class="center mt-16">Thêm mới phòng ban</h4>
        <?php if(isset($_SESSION['status_error'])) : ?>
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
        <form action="xulythemPB.php" method="POST" name="form_add" class="mt-16 needs-validation" novalidate>
            <div class="form-group">
                <label for="idpb">Mã phòng ban:</label>
                <input type="text" class="form-control" placeholder="Nhập ID" id="idnv" name="idpb" required>
                <div class="valid-feedback">Hợp lệ</div>
                <div class="invalid-feedback">Trường này không được để trống</div>
            </div>
            <div class="form-group">
                <label for="name">Tên phòng ban:</label>
                <input type="text" class="form-control" placeholder="Nhập tên" id="name" name="name" required>
                <div class="valid-feedback">Hợp lệ</div>
                <div class="invalid-feedback">Trường này không được để trống</div>
            </div>
            <div class="form-group">
                <label for="desc">Mô tả:</label>
                <input type="text" class="form-control" placeholder="Nhập địa chỉ" id="address" name="desc" required>
                <div class="valid-feedback">Hợp lệ</div>
                <div class="invalid-feedback">Trường này không được để trống</div>
            </div>
            <div class="controls">
                <a href="xemthongtinPB.php" type="button" class="btn btn-primary">Back</a>
                <button type="reset" class="btn btn-secondary">Hủy</button> 
                <button type="submit" class="btn btn-success" style="margin-right: 8px">Xác nhận</button>
            </div>
        </form>
    </div>
    
    <script>
        (() => {
            'use strict';
            window.addEventListener('load', function() {
                // Get the forms we want to add validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
        $(document).ready(() => {
            setTimeout(() => {
                $('.close').click();
            }, 2200);
        });
    </script>
</body>
</html>