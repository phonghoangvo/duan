@extends('layout')
@section('tieudetrang')
    Cửa hàng
@endsection

@section('noidung')
<div class="container pt-3 pb-3 px-0">
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
                    @foreach ($results as $result)
                    <div class="col-md-6 col-xl-3 p-2 sanpham ">
                        <div class="boxsanpham  p-2">
                            <div class="img">
                                <img src="uploads/{{$result->img}}"
                                    alt="{{$result->img}}" width="200px" height="200px">
                            </div>
                            <div class="title">
                                <h3>
                                    <a href="">{{$result->name}}</a>
                                </h3>
                            </div>
                            <div class="gia">
                                <span>{{number_format($result->price)}} đ</span><br>
                                <p><del>{{number_format($result->priceSale)}} đ</del></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                    {{ $results->links() }}
                    
                    
        </section>
    </div>
</div>
@endsection
