
@extends('admin.layoutadmin')
@section('tieudetrang')
Dashboard - Quản Trị Website
@endsection

@section('noidung')
<div class="container">
  <div class="row mt-3">
      <div class="col-12">
          <a href="{{ url('admin/themtin') }}" class="btn btn-primary">Thêm</a>
      </div>
  </div>

  <div class="row mt-3">
      <div class="col-12">
          <div class="card">
              <div class="card-body p-0">
                  <table class="table table-striped mb-0 text-center">
                      <thead>
                          <tr>
                              <th scope="col">STT</th>
                              <th scope="col">Tiêu Đề</th>
                              <th scope="col">Ảnh</th>
                              <th scope="col" class="col-lg-3">Tóm tắt</th>
                              <th scope="col" class="col-lg-3">Nội dung</th>
                              <th scope="col">Thời gian</th>
                              <th scope="col">Ẩn hiện</th>
                              <th scope="col">Chức năng</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($listtintuc as $loadtin)
                              <tr>
                                  <th scope="row">{{ $loadtin->id }}</th>
                                  <td>{{ $loadtin->title }}</td>
                                  <td><img src="upload/{{ $loadtin->img }}" alt="" style="max-width: 50px;"></td>
                                  <td>{{ $loadtin->summary }}</td>
                                  <td>{{ $loadtin->content }}</td>
                                  <td>{{ $loadtin->time }}</td>
                                  <td>{{ $loadtin->hidden }}</td>
                                  <td>
                                      <a href="{{ url("xoa/{$loadtin->id}") }}" class="btn btn-danger w-100" onclick="return confirm('Xoa ha')">Xóa</a>

                                      <a href="{{ url("/tin/suatin/{$loadtin->id}") }}" class="btn btn-info w-100">Cập nhật</a>
                                  </td>
                              </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
</div>

@endsection