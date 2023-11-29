@extends('admin.layoutadmin')
@section('tieudetrang')
Dashboard - Quản Trị Website
@endsection

@section('noidung')
<div class="container">
    <h2 class="mt-4 mb-4">Danh sách Sản Phẩm - Admin</h2>
    <a href="{{url('admin/add')}}" class="btn btn-success mb-4">Thêm sản phẩm</a>
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
    </div>
    @endif
    <table class="table table-striped">
        <thead style="background-color: #1a5fc7; text-align:center;color:white">
            <tr>
                <th>ID</th>
                <th style="width:50%;">Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Giá sản phẩm</th>
                <th>Giảm giá</th>
                <th>Nhà cung cấp</th>
                <th>Nhà xuất bản</th>
                <th>Tác giả</th>
                <th>Ngày đăng</th>
                <th style="width:500px">Tóm tắt</th>
                <th>Danh mục</th>
                <th>Chuc nang</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $data)
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->name}}</td>
                <td><img src="{{$data->img}}" style="height:60px;width:50px"></td>
                <td>{{$data->price}}</td>
                <td>{{$data->priceSale}}</td>
                <td>{{$data->nhacungcap}}</td>
                <td>{{$data->nhaxuatban}}</td>
                <td>{{$data->tacgia}}</td>
                <td>{{$data->ngayDang}}</td>
                <td>{{$data->moTa}}</td>
                <td>{{$data->idCategory}}</td>
                <td>
                    <a href="{{url('admin/edit/'.$data->id)}}" title="Sua"><button type="button" class="btn btn-success"
                            style="margin-bottom:20px ">Sửa</button></a>
                    <a href="{{url('del/'.$data->id)}}" onclick="return confirm('Ban muon xoa san pham?')"
                        title="Xoa"><button type="button" class="btn btn-info">Xóa</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection