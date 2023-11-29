@extends('admin.layoutadmin')
@section('tieudetrang')
Dashboard - Quản Trị Website
@endsection

@section('noidung')
<div class="container">
    <h2 class="mt-4 mb-4">Danh sách Danh Mục - Admin</h2>
    <a href="{{url('admin/addcate')}}" class="btn btn-success mb-4">Thêm danh mục</a>
    @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{Session::get('success')}}
    </div>
    @endif
    <table class="table table-striped">
        <thead style="background-color: #1a5fc7; text-align:center;color:white">
            <tr>
                <th>ID</th>
                <th style="width:50%;">Tên danh mục</th>
                <th>Ẩn - Hiện</th>
                <th>Thứ tự</th>
                <th>Slug</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cate as $cate)
            <tr>
                <td>{{$cate->id}}</td>
                <td>{{$cate->name}}</td>
                <td>{{$cate->hidden}}</td>
                <td>{{$cate->thutu}}</td>
                <td>{{$cate->slug}}</td>
                <td>
                    <a href="{{url('/admin/editcate/'.$cate->id)}}" title="Sua"><button type="button" class="btn btn-success"
                            style="margin-bottom:20px ">Sửa</button></a>
                    <a href="{{url('del/'.$cate->id)}}" onclick="return confirm('Bạn muốn xóa danh mục?')"
                        title="Xoa"><button type="button" class="btn btn-info">Xóa</button></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection