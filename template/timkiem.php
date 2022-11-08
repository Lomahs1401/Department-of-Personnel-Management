<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
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
        .list-criteria {
            margin-top: 20px;
            vertical-align: middle;
            text-align: center;
            display: flex;
            justify-content: center;
        }
        .list-criteria input {
            margin: 0 12px;
        }
        .list-criteria label {
            margin-top: 4px;
        }
        .controls {
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }
        .controls__input {
            margin-right: 32px;
        }
        .controls__input input {
            margin-left: 16px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            background-position: 12px 14px;
            background-image: url('https://www.w3schools.com/css/searchicon.png');
            background-repeat: no-repeat;
            padding: 12px 20px 12px 40px;
        }
        #btn_search {
            margin-top: 6px;
            height: 40px;
        }
        .toast {
            position: absolute;
            bottom: 40px;
            left: 40%;
        }
    </style>
</head>
<body>
    <div id="main">
        <h4 class="center mt-16">Tìm kiếm nhân viên</h4>
        <div class="container mt-16">
            <form action="xulytimkiem.php" method="POST" name="form_search">
                <div class="list-criteria">
                    <input type="radio" name="criteria" id="IDNV" value="idnv" checked="checked">
                    <label for="IDNV">IDNV</label>
                    <input type="radio" name="criteria" id="Name" value="name">
                    <label for="Name">Họ và tên</label>
                    <input type="radio" name="criteria" id="IDPB" value="idpb">
                    <label for="IDPB">Mã phòng ban</label>
                    <input type="radio" name="criteria" id="Address" value="address">
                    <label for="Address">Địa chỉ</label>
                </div>
                <div class="controls">
                    <div class="controls__input">
                        <label for="search_key">Nhập thông tin: </label>
                        <input type="text" id="search_key" name="search_key" placeholder="Nhập thông tin">
                    </div>
                    <div id="btn_container">
                        <button type="button" id="btn_search" class="btn btn-primary controls__submit">Tìm kiếm</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="toast" data-autohide="false">
            <button type="button" id="btn_close" class="ml-2 mb-1 close text-danger" style="margin: 8px 12px 0;" data-dismiss="toast">&times;</button>
            <div class="toast-body text-danger" style="font-weight: bold;">
                <p>Hãy điền thông tin cần tìm!</p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script>
        var showToast = () => {
            $('.toast').toast('show');
            setTimeout(() => {
                $('#btn_close').click();
            }, 2000);
        }

        $(document).ready(() => {
            $('#btn_search').click(() => {
                var input = $('#search_key').val().trim();
                if (input === '') {
                    showToast();
                } else {
                    var btnSubmit = $('#btn_search').attr('type', 'submit');
                    btnSubmit.click();
                }
            })
        })
    </script>
</body>
</html>