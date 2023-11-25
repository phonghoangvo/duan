@extends('admin.layoutadmin')
@section('tieudetrang')
Dashboard - Quản Trị Website
@endsection

@section('noidung')
<div class="container-fluid" style="background: white">
    <div class="formbold-main-wrapper">
        <div class="formbold-form-wrapper">
            @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{Session::get('success')}}
            </div>
            @endif
            <form action="{{url('update/'.$product->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="formbold-input-flex">
                    <div>
                        <input type="hidden" name="id" value="{{$product->id}}">
                        <input type="text" style="width:550px" name="name" id="name" placeholder="Nhập Tên Sản Phẩm"
                            class="formbold-form-input" value="{{$product->name}}" />
                        <label for="name" class="formbold-form-label"> Tên Sản Phẩm </label>
                    </div>
                </div>

                <div class="formbold-input-flex">
                    <div>
                        <input type="number" name="price" id="price" placeholder="Nhập Giá Sản Phẩm"
                            class="formbold-form-input" value="{{$product->price}}" />
                        <label for="email" class="formbold-form-label"> Giá Sản Phẩm </label>
                    </div>
                    <div>
                        <input type="number" name="priceSale" id="priceSale" placeholder="Nhập Giảm giá (nếu có)"
                            class="formbold-form-input" value="{{$product->priceSale}}" />
                        <label for="phone" class="formbold-form-label"> Giảm giá </label>
                    </div>
                </div>
                <div class="formbold-input-flex">
                    <div>
                        <input type="text" name="nhacungcap" value="{{$product->nhacungcap}}" id="nhacungcap"
                            placeholder="Nhập Nhà Cung Cấp" class="formbold-form-input" />
                        <label for="name" class="formbold-form-label"> Nhà cung cấp</label>
                    </div>
                    <div>
                        <input type="text" name="nhaxuatban" id="nhaxuatban" value="{{$product->nhaxuatban}}"
                            placeholder="Nhập nhà xuất bản" class="formbold-form-input" />
                        <label for="name" class="formbold-form-label"> Nhà xuất bản </label>
                    </div>
                </div>
                <div class="formbold-input-flex">
                    <div>
                        <input type="text" name="tacgia" id="tacgia" value="{{$product->tacgia}}"
                            placeholder="Nhập Tên tác giả" class="formbold-form-input" />
                        <label for="name" class="formbold-form-label"> Tác giả</label>
                    </div>
                    <div>
                        <input type="date" name="ngayDang" id="ngayDang" value="{{$product->ngayDang}}"
                            placeholder="Nhập ngày đăng" class="formbold-form-input" />
                        <label for="name" class="formbold-form-label"> Ngày đăng </label>
                    </div>
                </div>
                <div class="formbold-textarea">
                    <textarea rows="6" name="moTa" id="moTa" placeholder="Viết tóm tắt sản phẩm"
                        class="formbold-form-input">
                        {{$product->moTa}}
                    </textarea>
                    <label for="message" class="formbold-form-label"> Tóm tắt sản phẩm </label>
                </div>
                <div class="formbold-form-label">
                    <label>Danh mục:</label><br>
                    <select name="idCategory" required class="form-control">
                        <option value="1">--Danh Mục--</option>
                        @foreach ($category as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div><br>
                <label for="upload" class="formbold-input-label">
                    Thêm Ảnh Sản Phẩm

                    <input type="file" name="img" value="{{$product->img}}" class="form-control" id="customFile" />
                </label>
                @if($product->img)
                <img src="{{$product->img}}">
                @endif
                <div class="button">
                    <input type="submit" value="Cập Nhật" class="formbold-btn">
                    <button class="formbold-btn">
                        <a style="text-decoration: none;color:white" href="{{url('admin/list')}}">Danh sách sản phẩm </a>
                    </button>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection