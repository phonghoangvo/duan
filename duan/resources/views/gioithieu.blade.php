@extends('layout')
@section('tieudetrang')
    Trang giới thiệu
@endsection

@section('noidung')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('tieudetrang')</title>
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

    <section class="introduce">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 left p-4">
                    <img src="/img/bannergioithieu.jpg" alt="">
                    <img class="img2" src="/img/anhnengioithieu.jpg" alt="">
                    <h2 class="text">350+<br></h2>
                    <h4 class="text2">Happy Cilent<br></h4>
                </div>
                <div class="col-lg-6 right p-4">
                    <h3>About Us</h3>
                    <h4 class="content1">Chúng Tôi Là Một Đội Ngũ Lập Trình
                        Của Trường Cao Đẳng FPT POLYTECHNIC</h4>
                    <h4 class="content2">Là một ngôi trường với nhiều giảng viên giỏi và đạo tạo
                        nhiều sinh viên xuất sắc bậc nhất Sài Gòn.</h4>

                    <div class="row contentintro p-4">
                        <div class="col-lg-6 p-2">
                            <i class="fas fa-star mx-2"></i>Chúng tôi có đủ khả năng
                        </div>
                        <div class="col-lg-6 p-2">
                            <i class="fas fa-star mx-2"></i>Thiết bị công nghệ hiện đại
                        </div>
                        <div class="col-lg-6 p-2">
                            <i class="fas fa-star mx-2"></i>Sáng tạo và năng động
                        </div>
                        <div class="col-lg-6 p-2">
                            <i class="fas fa-star mx-2"></i>Mày mò và không ngừng học hỏi
                        </div>
                        <div class="row button">
                            <div class="col-lg-6"></div>
                            <div class="col-lg-6"><Button>Liên hệ cho chúng tôi</Button></div>
                        </div>
                    </div>
                    <!-- <div class="row orange">
                        <div class="col-md-6">
                            <img src="img/anhnengioithieu.jpg" alt="">
                        </div>
                        <div class="col-md-6">

                        </div>
                    </div> -->
                </div>

                
            </div>

            <div class="row bg-dark mt-5 mb-5">
                <div class="col-4 text-center" style="color: white;">
                    <i class="bi bi-0-circle"></i>
                    <h3>4+ Năm</h3>
                    <h6>Hơn 4 năm kinh nghiệm</h6>
                </div>
                <div class="col-4 text-center" style="color: white;">
                    <i class="bi bi-0-circle"></i>
                    <h3>6+ Nhân viên</h3>
                    <h6>Đội ngũ hơn 6 nhân viên</h6>
                </div>
                <div class="col-4 text-center"style="color: white;">
                    <i class="bi bi-0-circle"></i>
                    <h3>11+ Chứng nhận </h3>
                    <h6>Hơn 11 huân chương và chứng nhận</h6>
                </div>
            </div>
        


            <div class="row mb-5">
                <div class="col-4">
                    <div class="box1-1">
                        <div class="left-content">
                            <img src="/img/product-1.jpg" alt="Ảnh của bạn">
                        </div>
                        <div class="right-content">
                            <h5>Đắc nhân tâm...</h5>
                            <h6>By admin</h6>
                            <p>
                            <h6>Tháng 10,2023</h6>
                            </p>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-4">
                    <div class="box1-1">
                        <div class="left-content">
                            <img src="/img/product-1.jpg" alt="Ảnh của bạn">
                        </div>
                        <div class="right-content">
                            <h5>Đắc nhân tâm...</h5>
                            <h6>By admin</h6>
                            <p>
                            <h6>Tháng 10, 2023</h6>
                            </p>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-4">
                    <div class="box1-1">
                        <div class="left-content">
                            <img src="/img/product-1.jpg" alt="Ảnh của bạn">
                        </div>
                        <div class="right-content">
                            <h5>Đắc nhân tâm...</h5>
                            <h6>By admin</h6>
                            <p>
                            <h6>Tháng 10, 2023</h6>
                            </p>
                        </div>
                        <br>
                    </div>
                </div>

                <div class="col-4">
                    <div class="box1-5">
                        <div class="left-content">
                            <img src="/img/product-1.jpg" alt="Ảnh của bạn">
                        </div>
                        <div class="right-content">
                            <h5>Đắc nhân tâm...</h5>
                            <h6>By admin</h6>
                            <p>
                            <h6>Tháng 10, 2023</h6>
                            </p>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-4">
                    <div class="box1-5">
                        <div class="left-content">
                            <img src="/img/product-1.jpg" alt="Ảnh của bạn">
                        </div>
                        <div class="right-content">
                            <h5>Đắc nhân tâm...</h5>
                            <h6>By admin</h6>
                            <p>
                            <h6>Tháng 10, 2023</h6>
                            </p>
                        </div>
                        <br>
                    </div>
                </div>
                <div class="col-4">
                    <div class="box1-5">
                        <div class="left-content">
                            <img src="/img/product-1.jpg" alt="Ảnh của bạn">
                        </div>
                        <div class="right-content">
                            <h5>Đắc nhân tâm...</h5>
                            <h6>By admin</h6>
                            <p>
                            <h6>Tháng 10, 2023</h6>
                            </p>
                        </div>
                        <br>
                    </div>
                </div>
                
                
            </div>
        </div>
        </div>
    </section>






    <!-- Footer Start -->
    <footer>
        <section class="bg-secondary-subtle">
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
                    <div class="col-lg-3 p-3">
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
                    <div class="col-lg-4 p-3">
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



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
@endsection 