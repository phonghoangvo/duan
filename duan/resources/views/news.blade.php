@extends('layout')
@section('tieudetrang')
 Trang tin tức
@endsection

@section('noidung')

    <section class="main pt-5 pb-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 col-sm-12">
                @foreach ($news as $news)
                    <div class="boxright">
                        <div class="left-content">
                            <img src="{{$news->img}}" alt="Ảnh của bạn">
                        </div>
                        <div class="right-content">
                            <h5>{{$news->title}}</h5>
                            <p>Tháng 10, 2023 - 1 bình luận</p>

                            <p class="content">{{$news->content}}</p>

                            <h5 class="xemthem">Xem thêm -></h5>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <br>
            </div>
        </div>
    </section>
@endsection