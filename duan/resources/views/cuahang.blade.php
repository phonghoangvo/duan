@extends('layout')
@section('tieudetrang')
    Cửa hàng
@endsection
@section('noidung')
<div class="container px-0 pt-3 pb-3">
    <a class="text-decoration-none text-dark" href="">
        Trang chủ
    </a> /
    <small>Cửa hàng</small>
</div>
<div class="container pt-3 pb-3 px-0">

    {{-- <div class="arrange pt-2">
        <h6>Sắp Xếp: <a class="p-2" href="">Tên A->Z</a> <a class="p-2" href="">Tên A->Z</a> <a class="p-2"
                href="">Giá Tăng</a> <a class="p-2" href="">Giá Giảm</a></h6>
        <div class="row">
            @foreach ($data as $cuahang)
            <div class="col-xl-3 col-sm-4 p-1 px-1">
                <div class="card border-1">
                    <img class="card-img-top" src="uploads/{{$cuahang->img}}" alt="" width="400px" height="400px">
                    <div class="middle">
                        <a href="ctsp.html" class="btn btn-light zoom border-0">
                            <i class=" bi bi-zoom-in"></i>
                        </a>
                    </div>
                    <div class="card-body">
                        <a href="#" class="text-decoration-none " style="font-size: 20px; color: gray;">{{$cuahang->name}}</a>
                        <div class="row d-flex">
                            <div class="col-8 pt-2">
                                <p>
                                    <span><b class="text-danger">{{number_format($cuahang->priceSale)}} ₫</sup></b></span><br>
                                    <span><del class="text-secondary">{{number_format($cuahang->price)}} ₫</del></span>
                                </p>
                            </div>
                            <div class="col-4 pt-3">
                                <button type="button" class="btn btn-primary float-end px-2"
                                    style="padding: 5px 10px;border-radius: 50%;">
                                    <i class="bi bi-bag-plus-fill"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
    </div> --}}
    <div class="row">
        <section class="col-3">
            <div class=" boxloai bg-white">
                <h3 class="p-2">Sản phẩm theo loại</h3>
                <div class="">
                    <?php
                    $danhmuc = DB::table('category')->select('id','name')
                    ->orderby('thutu','asc')
                    ->where('hidden','=','1')
                    ->get();
                    ?>
                    <ul>
                        @foreach ($danhmuc as $dm)
                        <li>
                            <a href="{{ route('cuahang', ['id' => $dm->id]) }}"><span>{{$dm->name}}</span></a>
                        </li>
                        @endforeach


                    </ul>
                </div>
            </div>

            <div class=" boxloai bg-white mt-5">
                <h3 class="p-2">Nhà Xuất Bản</h3>
                <div class="">
                    <ul>
                        <?php
                        $nhaxuatban = DB::table('product')->select('nhaxuatban')
                        ->distinct()
                        ->get();
                        ?>
                        @foreach ($nhaxuatban as $nxb)
                        <li>
                            <label for="{{$nxb->nhaxuatban}}">
                                <input type="checkbox" name="{{$nxb->nhaxuatban}}" id="{{$nxb->nhaxuatban}}"> <span>{{$nxb->nhaxuatban}}</span>
                            </label>
                        </li>
                        @endforeach
                       
                    </ul>
                </div>
            </div>
        </section>
        <section class="col-9 bg-white">
            <div class="thanhchucnang mt-3">
                <div class="row p-3">
                    <div class="col-2 mt-2"> <label>Sắp xếp theo: </label></div>
                    <div class="col-3">
                        <select class="form-select thanhsapxep" aria-label="Default select example">
                            <option selected>Bán chạy tuần</option>
                            <option value="1">Bán chạy tháng</option>
                            <option value="2">Bán chạy năm</option>
                            <option value="3">Giá từ cao đến thấp</option>
                            <option value="3">Giá từ thấp đến cao</option>
                        </select>
                    </div>
                </div>
            </div>
            <hr>
            <div class="box">
                <div class="row p-3">
                    @foreach ($products as $sanpham)
                    <div class="col-md-6 col-xl-3 p-2 sanpham ">
                        <div class="boxsanpham  p-2">
                            <div class="img">
                                <img src="uploads/{{$sanpham->img}}"
                                    alt="{{$sanpham->img}}" width="200px" height="200px">
                            </div>
                            <div class="title">
                                <h3>
                                    <a href="">{{$sanpham->name}}</a>
                                </h3>
                            </div>
                            <div class="gia">
                                <span>{{number_format($sanpham->price)}} đ</span><br>
                                <p><del>{{number_format($sanpham->priceSale)}} đ</del></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    {{ $products->links() }}
        </section>
    </div>
</div>

{{-- <div class="pagination">
    <a href="#">1</a>
    <a href="#">2</a>
    <a href="#">3</a>
    <a class="justify-content-center" href=""><i class="bi bi-chevron-right"></i></i></a>
</div> --}}
</div>
@endsection