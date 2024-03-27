@extends('main.master-main')

@section('content-head')
<link rel="stylesheet" href="{{asset('frontend/css/blog-details.css')}}">
@endsection

@section('content')

<section class="inner-section single-banner" style="background: url({{asset('frontend/images/single-banner.jpg')}}) no-repeat center;">
    <div class="container">
        <h2>{{$post->name_post}}</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="{{ route('blog', 'all') }}">Bài viết</a></li>
        </ol>
    </div>
</section>
<section class="inner-section blog-details-part">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xl-10">
                <article class="blog-details">
                    <div class="blog-details-content">
                        <h3 class="blog-details-title">{{$post->present_post}}</h3>

                        <ul class="blog-details-meta">
                            <li><i class="icofont-ui-calendar"></i><span>{{$post->date_post}}</span></li>
                        </ul>

                        {!! $post->content_post !!}

                        <div class="blog-details-footer">
                            {{-- <ul class="blog-details-share">
                                <li><span>share:</span></li>
                                <li><a href="#" class="icofont-facebook"></a></li>
                                <li><a href="#" class="icofont-twitter"></a></li>
                            </ul>
                            <ul class="blog-details-tag">
                                <li><span>tags:</span></li>
                                <li><a href="#">farming</a></li>
                                <li><a href="#">organic</a></li>
                                <li><a href="#">health</a></li>
                            </ul> --}}
                        </div>
                    </div>
                </article>
                <div class="blog-details-navigate">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-slider slider-arrow">
                                @foreach($listPost as $post)
                                <div class="blog-card">
                                    <div class="blog-media">
                                        <a class="blog-img" href="{{route('post', $post->url_post)}}"><img src="{{asset('upload/images/thumbnail/posts/' . $post->thumbnail_post)}}" alt="{{$post->name_post}}" width="100%"></a>
                                    </div>
                                    <div class="blog-content">
                                        <ul class="blog-meta">
                                            <li><i class="fas fa-calendar-alt"></i><span>{{$post->date_post}}</span></li>
                                        </ul>
                                        <h4 class="blog-title">
                                            <a href="{{route('post', $post->url_post)}}">{{$post->name_post}}</a>
                                        </h4>
                                        <p class="blog-desc">{{$post->present_post}}</p>
                                        <a class="blog-btn" href="{{route('post', $post->url_post)}}"><span>Tìm hiểu ngay</span><i class="icofont-arrow-right"></i></a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="blog-details-navigate">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="blog-slider slider-arrow">
                                @foreach($listPost as $post)
                                <div class="blog-card">
                                    <div class="blog-media">
                                        <a class="blog-img" href="{{route('post', $post->url_post)}}"><img src="{{asset('upload/images/thumbnail/posts/' . $post->thumbnail_post)}}" alt="{{$post->name_post}}" width="100%"></a>
                                    </div>
                                    <div class="blog-content">
                                        <ul class="blog-meta">
                                            <li><i class="fas fa-calendar-alt"></i><span>{{$post->date_post}}</span></li>
                                        </ul>
                                        <h4 class="blog-title">
                                            <a href="{{route('post', $post->url_post)}}">{{$post->name_post}}</a>
                                        </h4>
                                        <p class="blog-desc">{{$post->present_post}}</p>
                                        <a class="blog-btn" href="{{route('post', $post->url_post)}}"><span>Tìm hiểu ngay</span><i class="icofont-arrow-right"></i></a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>

@endsection
