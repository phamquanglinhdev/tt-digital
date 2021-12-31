@extends("layouts.client")
@section("content")
    <div class="banner">
        <div class="breadcrumbs">
            <div class="container">
                <ul>
                    <li><a href="{{route("index")}}">Trang chủ</a></li>
                    <li><a href="{{route("blogs")}}">Tin tức</a></li>
                    <li><a href="{{route("blog",$post->slug)}}">{{$post->name}}</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="single">
                    <h1 class="s-title">{{$post->name}}</h1>


                    <time><i class="fa fa-calendar"></i>{{$post->updated_at}}</time>

                    <div class="row">
                        <div class="s-content fv-content col-lg-12 content_post">
                            {!! $post->contents !!}
                        </div>
                    </div>

                    {{--                    <div class="row">--}}
                    {{--                        <div class="s-social col-lg-12">--}}
                    {{--                            <span class="text">Chia sẻ:</span>--}}
                    {{--                            <div class="ctrl">--}}
                    {{--                                <ul class="cnv-social-icons list-inline">--}}
                    {{--                                    <li class="list-inline-item"><a--}}
                    {{--                                            href="https://www.facebook.com/sharer/sharer.php?u=https://cnvdigital.com/blogs/tin-tuc/25-thuat-ngu-co-ban-trong-quang-cao-google-ads"--}}
                    {{--                                            onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;"--}}
                    {{--                                            class="facebook"><i class="fa fa-facebook"></i></a></li>--}}
                    {{--                                    <li class="list-inline-item"><a--}}
                    {{--                                            href="https://twitter.com/intent/tweet?text=25+Thu%E1%BA%ADt+Ng%E1%BB%AF+C%C6%A1+B%E1%BA%A3n+Trong+Qu%E1%BA%A3ng+C%C3%A1o+Google+Ads&amp;url=https://cnvdigital.com/blogs/tin-tuc/25-thuat-ngu-co-ban-trong-quang-cao-google-ads"--}}
                    {{--                                            onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;"--}}
                    {{--                                            class="twitter"><i class="fa fa-twitter"></i></a></li>--}}
                    {{--                                    <li class="list-inline-item"><a--}}
                    {{--                                            href="https://plus.google.com/share?url=https://cnvdigital.com/blogs/tin-tuc/25-thuat-ngu-co-ban-trong-quang-cao-google-ads"--}}
                    {{--                                            onclick="window.open(this.href, 'google-plus-share', 'width=490,height=530');return false;""--}}
                    {{--                                        class="instagram"><i class="fa fa-google-plus"></i></a></li>--}}
                    {{--                                </ul>--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}

                    <div class="bor-box lpost-box">
                        <h2 class="i-title">Bài viết liên quan</h2>
                        <ul class="post_list_related">
                            @foreach($posts as $item)
                                @if($post->id !== $item->id)
                                    <li><a href="{{route("blog",$item->slug)}}">{{$item->name}}</a></li>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="bor-box cate-box">
                        <h2 class="i-title">Danh mục</h2>
                        <ul class="parent_cate">
                            <li class="sub">
                                <a href="{{route("blogs")}}" title="">Tin tức</a>
                            </li>
                        </ul>
                    </div>
                    <div class="bor-box post-box">
                        <h2 class="i-title">Tin tức</h2>
                        @foreach($posts as $item)
                            <div class="sb-post clearfix">
                                <a class="img cnv-img-3x2 hv-scale hv-over"
                                   href="{{route("blog",$item->slug)}}" title="">
                                    <img src="{{env("APP_URL")."/".$item->thumbnail}}" alt="" title=""/>
                                </a>
                                <h3 class="title"><a class="smooth"
                                                     href="{{route("blog",$item->slug)}}"
                                                     title="">{{$item->name}}</a></h3>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
