@extends('layout')
@section('tieudetrang')
    Giỏ hàng
@endsection
@section('noidung')
    <div class="container px-0 pt-3 pb-3">
        <a class="text-decoration-none text-dark" href="">
            Trang chủ
        </a> /
        <small>Giỏ hàng</small>
    </div>
    
    <div class="container pt-3 pb-3 px-0">
        
            
        <h4 class="mb-4">Giỏ hàng</h4>
        <div class="container px-0">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <div class="row">
            <div class=" p-3">
                @if ($giohang->Count()>0)
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 5%">#</th>
                            <th scope="col" style="width: 10%">Hình ảnh</th>
                            <th scope="col" style="width: 40%">Sản phẩm</th>
                            <th scope="col" style="width: 10%">Số lượng</th>
                            <th scope="col" style="width: 10%">Giá</th>
                            <th scope="col" style="width: 10%">Tổng</th>
                            <th scope="col" style="width: 5%">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($giohang as $item)
                            
                        
                                <tr data-id="{{ $id }}">
                                    <th scope="row">{{ $item['id'] }}</th>
                                    <td><img src="/uploads/{{ $item['img'] }}" alt="" width="50px" height="50px"></td>
                                    <td>{{ $item['name'] }}</td>
                                    <td> 
                                        <input type="number" value="{{ $item['quanlity'] }}" class="form-control quantity cart-update" min="1">
                                    </td>
                                    <td>{{number_format($item['price']) }}₫</td>
                                    <td>{{number_format ($item['price'] * $item['quanlity']) }}₫</td>
                                    <td><button class="btn btn-danger btn-sm cart-remove">Xóa</button></td>
                                </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
            <div class="col-lg-3 p-3 hg">
                <div class="p-2">
                    <input class="mx-1" type="checkbox" name="" id=""> Xuất hóa đơn
                </div>
                <div class="p-2">
                    <div class="row">
                        <div class="col-6">
                            <h5>Tổng cộng: {{Cart::instance('giohang')->total()}}</h5>
                        </div>
                        <div class="col-6">
                            <h5 class="text-end text-danger">₫</h5>
                        </div>
                    </div>
                </div>
                <div class="p-2">
                    <button class="btn btn-primary w-100">
                        <a href="{{ url("/thanhtoan") }}" class="text-light text-decoration-none">
                            Tiến hành thanh toán
                        </a>
                    </button>
                </div>
            </div>
            @else
                <table class="table table-hover">
                    <thead>
                        <h2>Giỏ hàng của bạn đang trống!</h2>
                        <h5 class="mt-3">Thêm sản phẩm vào ngay!!</h5>
                        <a href="{{route('cuahang')}}" class="btn btn-warning mt-5">Mua ngay</a>
                    </thead>
                </table>
             @endif
        </div>
    </div>
@endsection
