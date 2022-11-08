<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            margin: 0;
        }

        .navbar {
            display: flex;
            background-color: #0A67AF;
            justify-content: space-around;
        }

        .navbar__list {
            display: flex;
            margin: 10px 16px;
        }

        .navbar__list li {
            list-style: none;
            margin: 8px 16px 0;
            color: white;
            font-size: 16px;
            vertical-align: middle;
        }

        .navbar__item a {
            text-decoration: none;
            color: white
        }

        .navbar__item a:hover {
            color: #e8e8e8
        }

        .navbar__button {
            background-color: #0A5A99;
            border: none;
            border-radius: 5px;
            color: white;
            padding: 2px 20px;
            font-size: 16px;
        }

        .searching {
            display: flex;
            justify-content: space-around;
        }

        .searching button {
            border: none;
            background-color: white;
            margin-top: 8px;
        }

        .searching button:hover {
            cursor: pointer;
        }

        #main {
            margin: 10px 0;
        }

        .navbar__info {
            margin: 8px;
            display: flex;
            justify-content: space-between;
        }

        .navbar__info div input {
            display: block;
            margin-top: 25px;
        }

        .navbar__support__list {
            margin-top: 20px;
            display: flex;
            justify-content: space-around;
        }

        .navbar__support__list__item {
            list-style: none;
        }

        .navbar__support__list__item a {
            text-decoration: none;
            color: black;
            font-size: 16px;
            font-weight: bold;
        }

        .navbar__support__list__item a:hover {
            color: #0A67AF;
        }

        .navbar__support__list__item div:hover .line{
            height: 4px;
            background-color: #0A67AF;
        }
        .navbar__support__list__item div:hover .home {
            margin-top: -15px;
        }
        .home {
            display: flex;
            background-color: #e8e8e8;
            justify-content: start;
            margin: 18px 0 12px;
            border-radius: 4px;
            font-size: 14px;
        }
        .home p {
            margin-left: 20px;
            background-color: #e8e8e8;
            color: #000;
        }
        .main__body {
            display: flex;
            justify-content: space-between;
        }
        .blogs__section {
            border: 1px solid #e8e8e8;
            margin: 6px 12px 0 0;
        }
        .blogs__section__list {
            padding-left: 0px;
            /* padding: 14px; */
            color: #0A67AF;
        }
        .blogs__section__list__items {
            list-style: none;
            margin: 16px 0;
        }
        .blogs__section__list__items a {
            text-decoration: none;
            color: black;
            font-weight: bold;
            font-size: 16px;
            display: block;
        }
        .blogs__section__list__items a:hover {
            background-color: #0A67AF;
            color: white;
        }
        .blogs__section__list__items div {
            height: 16px;
            border-bottom: red
        }
        hr {
            margin-block-start: 0;
            margin-block-end: 0;
        }
        .blogs__items:hover {

            background-color: #0A67AF;
            color: white;
        }
        .blogs__news {
            border: 1px solid #e8e8e8;
            margin-top: 6px;
            padding: 6px 56px;
        }
        .blogs__news__list__items {
            list-style: none;
        }
        .notification__content a {
            text-decoration: none;
            font-size: 16px;
            font-weight: bold;
            color: black;
        }
        .blogs__news__list__items {
            padding: 16px 0;
        }
        .references {
            border: 1px solid #e8e8e8;
            margin: 6px 12px 0 6px;
        }
        .references h3 {
            padding: 0 12px;
        }
        .notification {
            display: flex;
            justify-content: flex-start;
        }
        .notification__date {
            margin-right: 8px;
            text-align: center;
            border: 1px solid #ccc;
        }
        .date {
            color: white;
            background-color: #0A67AF;
            padding: 16px;
            margin-block-start: 0;
            margin-inline-end: 0;
        }
        .year {
            color: #ccc;
            margin-block-start: 0;
            margin-inline-end: 0;
        }
        .notification__content {
            margin: 18px 12px 0;
        }
        .notification__content a:hover {
            color: #0A67AF;
        }
        .image__container {
            display: flex;
            flex-flow: column nowrap;
        }
        .image__container a {
            margin: 6px;
        }
        .footer__container, p {
            background-color: #075794;
        }
        .footer__container {
            display: flex;
            justify-content: center;
            height: inherit;
        }
        p {
            margin: 0;
            color: #B9C7D8;
            padding-left: 12.5% !important;
            padding-bottom: 4px;
        }
        .footer__info-list {
            list-style-type: none;
            margin-right: 100px !important;
        }
        .footer__info-list:last-child {
            margin-right: 0;
        }
        .footer__info-list > li {
            color: #D7E1EC;
            font-size: 1.2rem;
            padding: 3px 0;
        }
        .footer__info-list > li:first-child {
            border-bottom: 1px dashed #B9C7D8;
            padding-bottom: 16px;
        }
        .footer__info-list-item > a {
            color: #B9C7D8;
            font-size: 0.95rem;
            text-decoration: none;
        }
        .footer__info-list-item-social {
            color: #B9C7D8;
            font-size: 2.2rem !important;
            text-decoration: none;
        }
        .footer__info-list > li:nth-of-type(2) {
            margin-top: 16px;
        }
        .footer__info-list-item-link:hover,
        .footer__info-list-item-link-social:hover {
            color: #FFFFFF !important;
        }
        .fa-brands {
            margin: 4px 2px;
        }
    </style>
</head>
<body>
    <div class="navbar">
        <ul class="navbar__list">
            <li class="navbar__item">
                <a href="#">Tin tức & sự kiện</a>
            </li>
            <li class="navbar__item">
                <a href="#">Thông báo</a>
            </li>
            <li class="navbar__item">
                <a href="#">Văn bản</a>
            </li>
            <li class="navbar__item">
                <a href="#">Lịch tuần</a>
            </li>
            <li class="navbar__item">
                <a href="#">Danh bạ</a>
            </li>
            <li class="navbar__item">
                <a href="#">Liên hệ</a>
            </li>
        </ul>
        <ul class="navbar__list">
            <li class="navbar__item">
                <button type="button" class="navbar__button">Khoa</button>
            </li>
            <li class="navbar__item">
                <button type="button" class="navbar__button">Phòng</button>
            </li>
            <li class="navbar__item">
                <img src="../img/english-flag.png" alt="English Flag" width="40px" height="25px">
                <span style="padding: 0 6px 8px ">English</span>
            </li>
        </ul>
    </div>
    <div id="main">
        <div class="navbar__info">
            <a href="http://dut.udn.vn/khoacntt">
                <img src="../img/logo-k_cntt.png" alt="Logo Da Nang University of Technology">
            </a>
            <div class="searching">
                <div>
                    <input type="text" name="searching" placeholder="Tìm kiếm thông tin"
                        style="border-radius: 5px; border-color: #ccc;" />
                </div>
                <button type="button">
                    <i class="fas fa-search" style="margin-bottom: 5px;"></i>
                </button>
            </div>
        </div>
        <div class="navbar__support">
            <ul class="navbar__support__list">
                <li class="navbar__support__list__item">
                    <div>
                        <a href="#">HOME</a>
                        <div class="line"></div>
                    </div>
                </li>
                <li class="navbar__support__list__item">
                    <div>
                        <a href="#">GIỚI THIỆU</a>
                        <div class="line"></div>
                    </div>
                </li>
                <li class="navbar__support__list__item">
                    <div>
                        <a href="#">TUYỂN SINH</a>
                        <div class="line"></div>
                    </div>
                </li>
                <li class="navbar__support__list__item">
                    <div>
                        <a href="#">ĐÀO TẠO</a>
                        <div class="line"></div>
                    </div>
                </li>
                <li class="navbar__support__list__item">
                    <div>
                        <a href="#">NGHIÊN CỨU KHOA HỌC</a>
                        <div class="line"></div>
                    </div>
                </li>
                <li class="navbar__support__list__item">
                    <div>
                        <a href="#">HỢP TÁC</a>
                        <div class="line"></div>
                    </div>
                </li>
                <li class="navbar__support__list__item">
                    <div>
                        <a href="#">SINH VIÊN</a>
                        <div class="line"></div>
                    </div>
                </li>
                <li class="navbar__support__list__item">
                    <div>
                        <a href="#">CỰU SINH VIÊN</a>
                        <div class="line"></div>
                    </div>
                </li>
                <li class="navbar__support__list__item">
                    <div>
                        <a href="#">LIÊN HỆ</a>
                        <div class="line"></div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="home">
            <div>
                <p>Trang chủ</p>
            </div>
        </div>
        <div class="image">
            <img src="../img/Slider_KhoaCNTT_KN40namCB.jpg" alt="Ảnh Khoa CNTT" width="100%" height="45%">
        </div>
        <div class="main__body">
            <div class="blogs__section">
                <ul class="blogs__section__list">
                    <h3 style="text-align: center">K. CÔNG NGHỆ THÔNG TIN</h3>
                    <li class="blogs__section__list__items">
                        <div class="blogs__items">
                            <a href="#">Thông báo</a>
                        </div>
                    </li>
                    <hr />
                    <li class="blogs__section__list__items">
                        <div class="blogs__items">
                            <a href="#">Tin tức hoạt động</a>
                        </div>
                    </li>
                    <hr />
                    <li class="blogs__section__list__items">
                        <div class="blogs__items">
                            <a href="#">Đào tạo đại học</a>
                        </div>
                    </li>
                    <hr />
                    <li class="blogs__section__list__items">
                        <div class="blogs__items">
                            <a href="#">Đào tạo sau đại học</a>
                        </div>
                    </li>
                    <hr />
                    <li class="blogs__section__list__items">
                        <div class="blogs__items">
                            <a href="#">Nghiên cứu khoa học</a>
                        </div>
                    </li>
                    <hr />
                    <li class="blogs__section__list__items">
                        <div class="blogs__items">
                            <a href="#">Biểu mẫu của Khoa</a>
                        </div>
                    </li>
                    <hr />
                    <li class="blogs__section__list__items">
                        <div class="blogs__items">
                            <a href="#">Góp ý với Khoa</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="blogs__news">
                <h3>THÔNG TIN - THÔNG BÁO</h3>
                <ul class="blogs__news__list">
                    <li class="blogs__news__list__items">
                        <div class="notification">
                            <div class="notification__date">
                                <p class="date">29/09</p>
                                <p class="year">2022</p>
                            </div>
                            <div class="notification__content">
                                <a href="http://dut.udn.vn/KhoaCNTT/Thongbao/id/7649" target="_blank" alt="[ KHOA CNTT TUYỂN DỤNG GIẢNG VIÊN/TRỢ GIẢNG Đợt 2 năm 2022 ]">
                                    [ KHOA CNTT TUYỂN DỤNG GIẢNG VIÊN/TRỢ GIẢNG Đợt 2 năm 2022 ]
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="blogs__news__list__items">
                        <div class="notification">
                            <div class="notification__date">
                                <p class="date">04/09</p>
                                <p class="year">2022</p>
                            </div>
                            <div class="notification__content">
                                <a href="http://dut.udn.vn/KhoaCNTT/Thongbao/id/7562" target="_blank" alt="Triển khai ĐATN Học kỳ 1, năm học 2022-2023">
                                    Triển khai ĐATN Học kỳ 1, năm học 2022-2023
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="blogs__news__list__items">
                        <div class="notification">
                            <div class="notification__date">
                                <p class="date">18/07</p>
                                <p class="year">2022</p>
                            </div>
                            <div class="notification__content">
                                <a href="http://dut.udn.vn/KhoaCNTT/Thongbao/id/7459" target="_blank" alt="Hội đồng bảo vệ DATN học kỳ 2, năm học 2021-2022">
                                    Hội đồng bảo vệ DATN học kỳ 2, năm học 2021-2022
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="references">
                <h3 style="text-align: center;">LIÊN KẾT NHANH</h3>
                <div class="image__container">
                    <a href="http://sv.dut.udn.vn/" target="_blank">
                        <img src="../img/home_HTTTSV.jpg" alt="Hệ thống thông tin sinh viên" width="250px" height="60px">
                    </a>
                    <a href="http://cb.dut.udn.vn/" target="_blank">
                        <img src="../img/home_tacnghiep.jpg" alt="Tác nghiệp" width="250px" height="60px">
                    </a>
                    <a href="http://lms.dut.udn.vn/" target="_blank">
                        <img src="../img/home_elearning.jpg" alt="E_Learning" width="250px" height="60px">
                    </a>
                    <a href="https://khcn.dut.udn.vn/" target="_blank">
                        <img src="../img/home_quanlykhoahoc.jpg" alt="Quản lý khoa học" width="250px" height="60px">   
                    </a>
                    <a href="http://dut.udn.vn/VanbanPhapquy" target="_blank">
                        <img src="../img/home_tracuuvanban.jpg" alt="Tra cứu văn bản" width="250px" height="60px">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="footer__container">
            <div class="footer__info">
                <ul class="footer__info-list">
                    <li class="footer__info-list-item">Tuyển sinh & đào tạo</li>
                    <li class="footer__info-list-item">
                        <a class="footer__info-list-item-link" target="blank" href="http://dut.udn.vn/TuyenSinh2022">Tuyển sinh đào tạo</a>
                    </li>
                    <li class="footer__info-list-item">
                        <a class="footer__info-list-item-link" target="blank" href="http://dut.udn.vn/TrangDaoTao">Đào tạo đại học</a>
                    </li>
                    <li class="footer__info-list-item">
                        <a class="footer__info-list-item-link" target="blank" href="http://dut.udn.vn/TrangDaoTaoSDH">Đào tạo sau đại học</a>
                    </li>
                    <li class="footer__info-list-item">
                        <a class="footer__info-list-item-link" target="blank" href="http://dut.udn.vn/TrangDaotaoTX">Đào tạo thường xuyên</a>
                    </li>
                    <li class="footer__info-list-item">
                        <a class="footer__info-list-item-link" target="blank" href="http://dut.udn.vn/VanBanPhapQuy">Văn bản pháp quy</a>
                    </li>
                </ul>
            </div>
            <div class="footer__info">
                <ul class="footer__info-list">
                    <li class="footer__info-list-item">Các liên kết khác</li>
                    <li class="footer__info-list-item">
                        <a class="footer__info-list-item-link" target="blank" href="http://lib.dut.udn.vn/primo-explore/search?vid=dut">Thư viện</a>
                    </li>
                    <li class="footer__info-list-item">
                        <a class="footer__info-list-item-link" target="blank" href="http://lms.dut.udn.vn/">E-Learning</a>
                    </li>
                    <li class="footer__info-list-item">
                        <a class="footer__info-list-item-link" target="blank" href="https://www.office.com/?auth=2">Email</a>
                    </li>
                    <li class="footer__info-list-item">
                        <a class="footer__info-list-item-link" target="blank" href="http://sv.dut.udn.vn/">Hệ thống thông tin sinh viên</a>
                    </li>
                    <li class="footer__info-list-item">
                        <a class="footer__info-list-item-link" target="blank" href="http://cb.dut.udn.vn/">Hệ thống tác nghiệp</a>
                    </li>
                </ul>
            </div>
            <div class="footer__info">
                <ul class="footer__info-list">
                    <li class="footer__info-list-item">Kết nối</li>
                    <li class="footer__info-list-item" style="margin: 12px 0 16px;">
                        <a class="footer__info-list-item-link-social" href="https://www.facebook.com/watch/bachkhoaDUT/" target="blank">
                            <i class="fa-brands fa-facebook" style="color: #5c7dc4;"></i>
                            Facebook
                        </a>
                    </li>
                    <li class="footer__info-list-item" style="margin: 12px 0 16px;">
                        <a class="footer__info-list-item-link-social" href="https://www.youtube.com/channel/UCDEvOrrx6-cJfcMQGOHHysg" target="blank">
                            <i class="fa-brands fa-youtube" style="color: #ff4646;"></i>
                            Youtube
                        </a>
                    </li>
                    <li class="footer__info-list-item" style="margin: 12px 0 16px;">
                        <a class="footer__info-list-item-link-social" href="https://twitter.com/Bachkhoa_Danang" target="blank">
                            <i class="fa-brands fa-twitter" style="color: #3ab3ff;"></i>
                            Twitter
                        </a>
                    </li>
                </ul>
            </div>
            <div class="footer__info">
                <ul class="footer__info-list">
                    <li class="footer__info-list-item">Lượt truy cập</li>
                    <li class="footer__info-list-item" style="font-size: 0.95rem;">
                        Tổng số lượt: <strong>2.327.162</strong>
                    </li>
                    <li class="footer__info-list-item" style="font-size: 0.95rem;">
                        Đang online: 37
                    </li>
                    <li class="footer__info-list-item" style="font-size: 0.95rem;">
                        Webmaster: WebAdmin@dut.udn.vn
                    </li>
                </ul>
            </div>
        </div>
        <p>© Bản quyền Trường Đại học Bách khoa - Đại học Đà Nẵng</p>
    </footer>
</body>
</html>