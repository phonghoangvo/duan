@extends('layout')

@section('tieudetrang')
    Trang liên hệ
@endsection

@section('noidung')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/gioithieu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


</head>

<body>
    <section class="card-header pt-1 pb-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <a href="index.html">
                        <img class="w-100" src="/img/logo.png" alt="">
                    </a>
                </div>
                <div class="col-lg-7">
                    <form class="form-control d-flex mt-2 p-1" role="search">
                        <input class="form-control" type="search" placeholder="Tim kiem san pham" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit"><i class="bi bi-search"></i></button>
                    </form>
                </div>
                <div class="col-lg-2">
                    <div class="mt-3 mb-3 text-center">
                        <a class="text-decoration-none text-dark" href="#">
                            <i class="bi bi-cart"></i>
                            Giỏ hàng
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <sectionc class="menu">
        <nav class="navbar navbar-expand-lg bg-danger">
            <div class="container">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown text-light" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            DANH MỤC SẢN PHẨM
                            <i class="bi bi-list"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">SÁCH TIẾNG VIỆT</a></li>
                            <li><a class="dropdown-item" href="#">VĂN PHÒNG PHẨM</a></li>
                            <li><a class="dropdown-item" href="#">LỊCH</a></li>
                            <li><a class="dropdown-item" href="#">TẬP</a></li>
                        </ul>
                    </li>
                </ul>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end bg-primary" tabindex="-1" id="offcanvasNavbar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Offcanvas</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1">
                            <li class="nav-item mx-4">
                                <a class="nav-link active text-light" href="#">Trang chủ</a>
                            </li>
                            <li class="nav-item mx-4">
                                <a class="nav-link text-light" href="#">Cửa hàng</a>
                            </li>
                            <li class="nav-item mx-4">
                                <a class="nav-link text-light" href="#">Giới thiệu</a>
                            </li>
                            <li class="nav-item mx-4">
                                <a class="nav-link text-light" href="#">Liên hệ</a>
                            </li>
                            <li class="nav-item mx-4">
                                <a class="nav-link text-light" href="#">Blog</a>
                            </li>
                            <li class="nav-item mx-3">
                                <a class="nav-link text-light" href="#">Sản phẩm sale</a>
                            </li>
                            <li class="nav-item dropdown mx-3">
                                <a class="nav-link dropdown-toggle text-light" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Đăng nhập
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Đăng nhập</a></li>
                                    <li><a class="dropdown-item" href="#">Đăng ký</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Quên mật khẩu</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </sectionc>
    <main>
        <div class="container px-0 pt-3 pb-3">
            <a class="text-decoration-none text-dark" href="">
                Trang chủ
            </a> /
            <small>Liên hệ</small>
        </div>
        <div class="container pb-3 pt-3 px-0">
            <h2 class="text-center mb-5">Liên hệ với chúng tôi</h2>
            <div class="row">
                <div class="col-md-3 mb-3"> 
                    <div class="text-center">
                        <div class="icon">
                            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/oaflahpk.json" trigger="hover"
                                colors="primary:#4bb3fd" state="hover-spin" style="width:60px;height:60px">
                            </lord-icon>
                        </div>
                        <div class="text">
                            <b>Địa chỉ:</b>Tân Chánh Hiệp - Công viên phần mềm Quang Trung
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="text-center">
                        <div class="icon">
                            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/tftaqjwp.json" trigger="morph"
                                colors="primary:#3080e8" state="morph-phone-ring-signal-finish"
                                style="width:60px;height:60px">
                            </lord-icon>
                        </div>
                        <div class="text">
                            <b>Số điện thoại:</b> 012345678</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="text-center">
                        <div class="icon">
                            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/ehfubvwr.json" trigger="hover"
                                colors="primary:#3080e8" state="intro" style="width:60px;height:60px">
                            </lord-icon>
                        </div>
                        <div class="text">
                            <b>Email:</b> fightingtogether@gmail.com
                        </div>
                    </div>
                </div>
                <div class="col mb-3">
                    <div class="text-center">
                        <div class="icon">
                            <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
                            <lord-icon src="https://cdn.lordicon.com/oqhlhtfq.json" trigger="hover"
                                colors="primary:#4bb3fd,secondary:#ebe6ef" state="hover-2"
                                style="width:60px;height:60px">
                            </lord-icon>
                        </div>
                        <div class="text">
                            <b>Website:</b> fightingtogetherBook
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <iframe class="w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4436614899205!2d106.62525347488366!3d10.8538210892997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752bee0b0ef9e5%3A0x5b4da59e47aa97a8!2sQuang%20Trung%20Software%20City!5e0!3m2!1sen!2s!4v1694710912578!5m2!1sen!2s"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="col-md-6">
                        <form method="post" class="loginform">
                            <div class="mb-0 p-3">
                                <label for="Name"><b>Họ và tên</b></label>
                                <input type="text" class="form-control" id="name" placeholder="Họ và tên">
                            </div>
                            <div class="mb-0 p-3">
                                <label for="Email"><b>Email</b></label>
                                <input type="email" class="form-control" id="email" placeholder="Email">
                            </div>
                            <div class="mb-0 p-3">
                                <label for="Name"><b>Chủ đề</b></label>
                                <input type="text" class="form-control" id="name" placeholder="Họ và tên">
                            </div>
                            <div class="mb-0 p-3">
                                <label for="Name"><b>Nội dung</b></label>
                                <textarea name="message" class="form-control" id="message"></textarea>
                            </div>
                            <div class="mb-0 p-3">
                                <button class="btn btn-primary" type="submit">Gửi lời nhắn</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer Start -->
    <footer>
        <section>
            <div class="container pt-5">
                <div class="row">
                    <div class="col-lg-5 text-start">
                        <a href="#">
                            <img class="w-75 mb-3" src="/img/logo.png" alt="">
                        </a>
                        <p>
                            <i class="bi bi-geo-alt"></i>
                            <strong>Địa chỉ: </strong>
                            <span style="color: rgb(48, 48, 48);">Cong vien phan mem Quang Trung</span>
                        </p>
                        <p>
                            <i class="bi bi-telephone"></i>
                            <strong>Số điện thoại: </strong>
                            <span style="color: rgb(48, 48, 48);"> 0123456789</span>
                        </p>
                        <p>
                            <i class="bi bi-envelope"></i>
                            <strong>Email: </strong>
                            <span style="color: rgb(48, 48, 48);">fightingtogether@gmail.com</span>
                        </p>
                    </div>
                    <div class="col-lg-4 p-3">
                        <h5>Về Fighting Together</h5>
                        <div>
                            <p>
                                <a class="text-decoration-none text-dark" href="#" title="Home">Trang chủ</a>
                            </p>
                            <p>
                                <a class="text-decoration-none text-dark" href="#" title="Shop">Cửa hàng</a>
                            </p>
                            <p>
                                <a class="text-decoration-none text-dark" href="#" title="Contact">Liên hệ</a>
                            </p>
                            <p>
                                <a class="text-decoration-none text-dark" href="#" title="About">Giới thiệu</a>
                            </p>
                            <p>
                                <a class="text-decoration-none text-dark" href="#">Chính sách</a>
                            </p>

                        </div>
                    </div>
                    <div class="col-lg-3 p-3">
                        <h5>Tổng đài hỗ trợ</h5>
                        <p>Gọi mua hàng: <b>0123456789</b> (7h30-17h00)</p>
                        <p>Gọi khiếu nại: <b>0123456789</b> (7h30-17h00)</p>
                        <h5>Phương thức thanh toán</h5>
                        <p><img class="w-75" src="/img/footer-pay.jpg" alt=""></p>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid text-center bg-dark text-light">
                <span>Bản quyền © 2023 . Thiết kế Khavd</span>
            </div>
        </section>
    </footer>
    <!-- Footer End -->


    <script src="js/script.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
@endsection