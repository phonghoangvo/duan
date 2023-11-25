@extends('admin.layoutadmin')
@section('tieudetrang')
Dashboard - Quản Trị Website
@endsection

@section('noidung')


                <div class="container-fluid" style="background: white">
                    <div class="formbold-main-wrapper">
                        <div class="formbold-form" width="1000px">
                            @if(Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                {{Session::get('success')}}
                            </div>
                            @endif
                            <form action="{{route('save_add')}}" id="formadd" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="formbold-input-flex">
                                    <div>
                                        <input type="text" style="width:550px" name="name" id="name"
                                            placeholder="Nhập Tên Sản Phẩm" class="formbold-form-input"
                                            value="{{old('name')}}" />
                                        <label for="name" class="formbold-form-label"> Tên Sản Phẩm </label>
                                    </div>
                                </div>
                                @error('name')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror

                                <div class="formbold-input-flex">
                                    <div>
                                        <input type="number" name="price" id="price" value="{{old('price')}}"
                                            placeholder="Nhập Giá Sản Phẩm" class="formbold-form-input" />
                                        <label for="email" class="formbold-form-label"> Giá Sản Phẩm </label>
                                    </div>
                                    @error('price')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                    <div>
                                        <input type="number" name="priceSale" id="priceSale"
                                            value="{{old('priceSale')}}" placeholder="Nhập Giảm giá (nếu có)"
                                            class="formbold-form-input" />
                                        <label for="phone" class="formbold-form-label"> Giảm giá </label>
                                    </div>
                                    @error('priceSale')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="formbold-input-flex">
                                    <div>
                                        <input type="text" name="nhacungcap" id="nhacungcap"
                                            value="{{old('nhacungcap')}}" placeholder="Nhập Nhà Cung Cấp"
                                            class="formbold-form-input" />
                                        <label for="name" class="formbold-form-label"> Nhà cung cấp</label>
                                        @error('nhacungcap')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div>
                                        <input type="text" name="nhaxuatban" id="nhaxuatban"
                                            value="{{old('nhaxuatban')}}" placeholder="Nhập nhà xuất bản"
                                            class="formbold-form-input" />
                                        <label for="name" class="formbold-form-label"> Nhà xuất bản </label>
                                        @error('nhaxuatban')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="formbold-input-flex">
                                    <div>
                                        <input type="text" name="tacgia" id="tacgia" value="{{old('tacgia')}}"
                                            placeholder="Nhập Tên tác giả" class="formbold-form-input" />
                                        <label for="name" class="formbold-form-label"> Tác giả</label>
                                        @error('tacgia')
                                        <div class="alert alert-danger">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                    <div>
                                        <input type="date" name="ngayDang" id="ngayDang" value="{{old('ngayDang')}}"
                                            placeholder="Nhập ngày đăng" class="formbold-form-input" />
                                        <label for="name" class="formbold-form-label"> Ngày đăng </label>
                                    </div>
                                </div>
                                <div class="formbold-textarea">
                                    <textarea rows="6" name="moTa" id="moTa" value="{{old('moTa')}}"
                                        placeholder="Viết mô tả sản phẩm" class="formbold-form-input">
                                    </textarea>
                                    <label for="message" class="formbold-form-label">Mô tả sản phẩm </label>
                                    @error('moTa')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="formbold-form-label">
                                    <label>Danh mục:</label><br>
                                    <select name="idCategory" value="{{old('idCategory')}}" required
                                        class="form-control">
                                        <option value="1">--Danh Muc--</option>
                                        @foreach ($category as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('idCategory')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div><br>
                                <label class="formbold-form-label">Hình ảnh sản phẩm</label><br>
                                <input type="file" name="img" value="{{old('img')}}" id="img"><br>
                                @error('img')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                                <input type="submit" value="Save" class="formbold-btn">
                                <button class="formbold-btn">
                                    <a style="text-decoration: none;color:white" href="{{url('admin/list')}}">Danh sách sản
                                        phẩm </a>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            {{-- </div> --}}
            <!-- End of Main Content -->

           
@endsection