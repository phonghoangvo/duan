@extends('admin.layoutadmin')
@section('tieudetrang')
Dashboard - Quản Trị Website
@endsection

@section('noidung')
                <div class="container">
                    <h2 class="mt-4 mb-4">Danh sách bình luận - Admin</h2>
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                    @endif
                    <table class="table table-striped">
                        <thead  style="background-color: #1a5fc7; text-align:center;color:white">
                            <tr>
                                <th>ID</th>
                                <th>ID user</th>
                                <th>ID Product</th>
                                <th>Content</th>
                                <th>Time</th>
                                <th>Chức Năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comment as $comment)
                            <tr>
                                <td>{{$comment->id}}</td>
                                <td>{{$comment->id_user}}</td>
                                <td>{{$comment->id_product}}</td>
                                <td>{{$comment->content}}</td>
                                <td>{{$comment->time}}</td>
                                <td>
                                   <center> <a href="{{url('del/'.$comment->id)}}"
                                        onclick="return confirm('Ban muốn xóa bình luận ?')" title="Xoa"><button
                                            type="button" class="btn btn-info">Xóa</button></a></center>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endsection