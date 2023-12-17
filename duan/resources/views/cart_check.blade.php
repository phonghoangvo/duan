@extends('layout')
@section('tieudetrang')
    Thanh toán
@endsection
@section('noidung')
    <div class="container px-0 pt-3 pb-3">
        <a class="text-decoration-none text-dark" href="trangchu.html">
            Trang chủ
        </a> /
        <small>Thanh toán</small>
    </div>
    <div class="container pt-3 pb-3 px-0">
        <h2>Trang Thanh Toán</h2>
        <div class="row">
            <div class="col-lg-6 p-5 left">
                <h5>Thông tin giao hàng</h5>
                <form>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="hoTen" placeholder="Họ và Tên" required>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 mb-3">
                            <input type="email" class="form-control" id="email" placeholder="Email" required>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <input type="tel" class="form-control" id="soDienThoai" placeholder="Số điện thoại"
                                required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="diaChi" placeholder="Địa chỉ" required>
                    </div>


                    <div class="mb-3">
                        <label for="" class="form-label">Phương thức giao hàng:</label>
                        <div class="form-control">
                            <input type="radio" checked>
                            <span> Giao hàng tận nơi</span>
                            <span class="text-end">30.000 Đ</span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="phuongThucThanhToan" class="form-label">Phương Thức Thanh Toán:</label>
                        <div class="">
                            <input type="radio" name="phuongthucthanhtoan" value="tructiep" id="thanhtoan1">
                            <label for="thanhtoan1" class="form-check-label">Trực tiếp</label>
                        </div>
                        <div class="">
                            <input type="radio" name="phuongthucthanhtoan" value="thetindung" id="thanhtoan2">
                            <label for="thanhtoan2" class="form-check-label">Thẻ tín dụng</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="ghiChu" class="form-label">Ghi Chú:</label>
                        <textarea class="form-control" id="ghiChu" rows="3"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <a class="text-decoration-none" href="{{ url('/gio-hang') }}">Giỏ Hàng</a>
                        </div>
                        <div class="col-lg-6 text-end">
                            <button type="submit" class="btn btn-primary">Hoàn tất đơn hàng</button>
                        </div>

                    </div>
                </form>
            </div>
            <div class="col-lg-6 p-5">
                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Hình ảnh</th>
                                <th scope="col">Sản phẩm</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Thành tiền</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $total = 0
                        @endphp
                        @if (session('cart'))
                            @foreach (session('cart') as $id => $details)
                                @php
                                    $total += $details['price'] * $details['quanlity']
                                @endphp
                                <tr>
                                    <td scope="row"><img src="/uploads/{{ $details['img'] }}" width="80px" height="80px" alt=""></td>
                                    <td>{{ $details['name'] }}</td>
                                    <td> 
                                        <input type="number" value="{{ $details['quanlity'] }}" class="form-control quanlity cart-update" min="1">
                                    </td>
                                    <td>{{number_format( $details['price']) }}₫</td>
                                    <td class="col-2">{{number_format( $details['price'] * $details['quanlity'] )}}₫</td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="input-group d-flex">
                    <input type="text" name="" id="" class="form-control" placeholder="Mã giảm giá">
                    <button type="button" class="btn btn-secondary">Sử dụng</button>
                </div>
                <hr>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>Tạm tính</p>
                        </div>
                        <div class="col-lg-6 text-end">
                            <p>{{number_format( $total) }}₫</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <p>Phí vận chuyển</p>
                        </div>
                        <div class="col-lg-6 text-end">
                            <p>30.000₫</p>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-lg-6">
                            <p>Tổng cộng</p>
                        </div>
                        <div class="col-lg-6 text-end">
                            <span>{{number_format ($total + 30000) }}₫</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
