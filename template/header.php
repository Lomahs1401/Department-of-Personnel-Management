<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <style>
        .welcome {
            display: flex;
            justify-content: center;
        }
        .welcome img {
            width: 80px;
            height: 80px;
            padding-right: 20px;
        }
        .welcome p {
            font-size: 24px;
            font-weight: 600;
            margin-block-start: 8px;
            margin-block-end: 8px;
        }
        .welcome p:nth-of-type(1) {
            color: #155180;
        }
        .welcome p:nth-of-type(2) {
            color: #1C4461;
        }
        .nav {
            margin-top: 8px;
            min-width: 42px;
            display: flex;
            background-color: #4D90FE;
            justify-content: center;
        }

        .nav-list {
            padding-left: 0px;
            margin: auto 16px;
        }

        .nav-item {
            list-style: none;
            margin: 0 8px;
            display: inline-block;
        }

        .nav-item a {
            text-decoration: none;
            color: white;
            font-size: 16px;
            display: block;
            padding-top: 4px;
            padding-bottom: 6px;
        }

        .nav-item a:hover {
            text-decoration: solid 1px #075794;
            color: #075794;
        }
    </style>
</head>
<body>
    <div class="welcome">
        <img src="../img/Logodhbk.jpg" alt="logo Bach Khoa Da Nang">
        <div class="welcome_info">
            <p>TRƯỜNG ĐẠI HỌC BÁCH KHOA</p>
            <p>KHOA CÔNG NGHỆ THÔNG TIN </p>
        </div>
    </div>
    <div class="nav">
        <ul class="nav-list">
            <li class="nav-item">
                <a href="#" class="nav-item">HOME</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-item">GIỚI THIỆU</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-item">TUYỂN SINH</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-item">ĐÀO TẠO</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-item">NGHIÊN CỨU KHOA HỌC</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-item">HỢP TÁC</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-item">SINH VIÊN</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-item">CỰU SINH VIÊN</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-item">LIÊN HỆ</a>
            </li>
        </ul>
    </div>
</body>
</html>