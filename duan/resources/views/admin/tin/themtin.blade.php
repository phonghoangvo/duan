@extends('admin.layoutadmin')
@section('tieudetrang')
Dashboard - Quản Trị Website
@endsection

@section('noidung')
<div class="container">
    <form action="{{ route('themtin_') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Tiêu đề:</label>
            <input type="text" name="title" class="form-control" id="title" required>
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Hình ảnh:</label>
            <input type="text" name="img" class="form-control" id="img" required>
        </div>
        <div class="mb-3">
            <label for="summary" class="form-label">Tóm tắt:</label>
            <input type="text" name="summary" class="form-control" id="summary" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Nội dung:</label>
            <input type="text" name="content" class="form-control" id="content" required>
        </div>
        <div class="mb-3">
            <label for="hidden" class="form-label">Ẩn hiện:</label>
            <input type="text" name="hidden" class="form-control" id="hidden" required>
        </div>
        <button type="submit" class="btn btn-warning">Thêm tin</button>
    </form>
</div>
@endsection
