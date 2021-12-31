@extends("layouts.client")
@section("content")
    <div class="banner">
        <div class="breadcrumbs">
            <div class="container">
                <ul>
                    <li><a href="{{route("index")}}">Trang chủ</a></li>
                    <li><a href="{{route("blogs")}}">Tin tức</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container container_category_new">
        <div class="row">
            <div class="col-lg-8 clearfix">
                @if(isset($posts))
                    @foreach($posts as $post)
                        <div class="post2 clearfix">
                            <a class="img hv-scale hv-over cnv-img-3x2" href="{{route("blog",$post->slug)}}" title="">
                                <img src="{{$post->thumbnail}}" alt="" title="" />
                            </a>
                            <div class="ct">
                                <h2 class="title"><a class="smooth" href="{{route("blog",$post->slug)}}" title="">{{$post->name}}</a></h2>
                                <div class="des">
                                    {{$post->name}}
                                </div>
                                <a class="more" href="{{route("blog",$post->slug)}}" title="">Xem chi tiết</a>
                            </div>
                        </div>
                    @endforeach
                @endif

                <div class="col-md-12 clearfix text-center">

                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar">
                    {{--                    <div class="bor-box cate-box">--}}
                    {{--                        <h2 class="i-title">Danh mục</h2>--}}
                    {{--                        <ul class="parent_cate">--}}
                    {{--                            <li class="sub">--}}
                    {{--                                <a href="../index.html?id=1" title="">Tin tức</a>--}}
                    {{--                            </li>--}}
                    {{--                        </ul>--}}
                    {{--                    </div>--}}
                    {{--                    <div class="bor-box post-box">--}}
                    {{--                        <h2 class="i-title">Tin tức</h2>--}}

                    {{--                        <div class="sb-post clearfix">--}}
                    {{--                            <a class="img cnv-img-3x2 hv-scale hv-over" href="tin-tuc/nha-hang-xay-dung-website-chuan-seo-nham-phat-trien-kinh-doanh.html" title="">--}}
                    {{--                                <img src="../storage/cnvdigital.png" alt="" title="" />--}}
                    {{--                            </a>--}}
                    {{--                            <h3 class="title"><a class="smooth" href="tin-tuc/nha-hang-xay-dung-website-chuan-seo-nham-phat-trien-kinh-doanh.html" title="">NHÀ HÀNG - XÂY DỰNG WEBSITE CHUẨN SEO NHẰM PHÁT TRIỂN KINH DOANH</a></h3>--}}
                    {{--                        </div>--}}

                </div>
            </div>
        </div>


    </div>
    </div>
@endsection
