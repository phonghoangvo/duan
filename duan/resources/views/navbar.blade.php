<section>
    <nav class="navbar navbar-expand-lg bg-transparent">
        <div class="container px-0">
            <!-- Logo -->
            <a class="navbar-brand" href="/">
                <img src="/img/logo.png" alt="" style="width: 180px;">
            </a>
            <!-- Toggle Btn -->
            <button class="navbar-toggler shadow-none border-" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- SideBar -->
            <div class="sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <!-- SideBar Header -->
                <div class="offcanvas-header text-dark border-bottom">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Fighting Together</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <!-- SideBar Body -->
                <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
                    <ul class="navbar-nav justify-content-center align-items-center flex-grow-1">
                        <div class="input-group w-50 mx-5">
                                                     
                            <form action="{{route('timkiem')}}" method="GET">
                                <div class="row">
                                    <div class="col-md-10">
                                    <input type="text" name="timkiem" class="form-control" placeholder="Tìm kiếm sản phẩm" aria-label="Tìm kiếm sản phẩm" aria-describedby="button-addon2">
                                    </div>
                                    <div class="col-md-2">
                                    <button class="btn btn-primary border-0" type="submit" id="button-addon2"><i class="bi bi-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="/cuahang">Cửa hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="lienhe.html">Liên hệ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" href="gioithieu.html">Giới thiệu</a>
                        </li>
                        <li class="nav-item d-flex">
                            <a class="nav-link text-primary" href="{{ url("/giohang") }}">
                                <button class="btn ">
                                    <i class="bi bi-cart-check-fill"></i>
                                    {{ count((array) session('cart')) }}
                                </button>
                            </a>
                        </li>
                    </ul>
                    <!-- Login/Logout -->
                    <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center gap-3">
                        <a href="dangnhap.html" class="text-dark text-decoration-none px-3 py-1 rounded-4" style="background-color: antiquewhite;">Đăng nhập</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</section>