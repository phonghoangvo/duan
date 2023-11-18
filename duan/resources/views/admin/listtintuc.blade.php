
@extends('admin.layoutadmin')
@section('tieudetrang')
Dashboard - Quản Trị Website
@endsection

@section('noidung')
<td><button type="submit"><a href="{{url('tin/themtin')}}">Thêm</a></button></td>

                <div class="container-fluid">

                    <section class="intro" style="float:left">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-12">
                                    <div class="card-body p-0">
                                        <div class="bangsp">
                                            <table border="1px" class="table table-striped mb-0" style="width: 500px">
                                              <thead>
                                                <tr>
                                                  <th scope="col">ID</th>
                                                  <th scope="col">title</th>
                                                  <th scope="col">img</th>
                                                  <th scope="col">description</th>
                                                  <th scope="col">chuc nang</th>
                                                </tr>
                                              </thead>
                                                <tbody>
                                                  @foreach ($listtintuc as $loadtin)
                                                    <tr>
                                                      <tr>
                                                        <th scope="row">{{$loadtin->id}}</th>
                                                        <td>{{$loadtin->title}}</td>
                                                        <td><img src="{{$loadtin->img}}" alt=""></td>
                                                        <td>{{$loadtin->description}}</td>
                                                        <td><a href="xoa/{{$loadtin->id}}"><button type="submit" onclick="return confirm('Xoa ha')">Xóa</button></a></td>
                                                        <td> <button type="submit" class=""><a href="/tin/suatin/{{$loadtin->id}}">Cập nhật</a></button></td>
                                                      </tr>
                                                    </tr>
                                                  @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>  
@endsection