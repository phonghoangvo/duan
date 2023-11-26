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
                            <form action="{{route('save_cate')}}" id="formadd" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="formbold-input-flex">
                                    <div>
                                        <input type="text" style="width:550px" name="name" id="name"
                                            placeholder="Nhập Tên Sản Phẩm" class="formbold-form-input"
                                            value="{{old('name')}}" />
                                        <label for="name" class="formbold-form-label"> Tên Danh Mục </label>
                                    </div>
                                </div>
                                @error('name')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror

                                <div class="formbold-input-flex">
                                    <div>
                                        <input type="name" name="slug" id="slug" value="{{old('slug')}}"
                                             class="formbold-form-input" />
                                        <label for="slug" class="formbold-form-label">Slug</label>
                                    </div>
                                    @error('slug')
                                    <div class="alert alert-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="formbold-input-flex">
                                    <div>
                                        <input type="text" style="width:550px" name="thutu" id="thutu"
                                            placeholder="Nhập thứ tự" class="formbold-form-input"
                                            value="{{old('thutu')}}" />
                                        <label for="thutu" class="formbold-form-label"> Tên Danh Mục </label>
                                    </div>
                                </div>
                                @error('thutu')
                                <div class="alert alert-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                                <input type="submit" value="Save" class="formbold-btn">
                                <button class="formbold-btn">
                                    <a style="text-decoration: none;color:white" href="{{url('/admin/listcate')}}">Danh sách sản
                                        phẩm </a>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            {{-- </div> --}}
            <!-- End of Main Content -->

           
@endsection