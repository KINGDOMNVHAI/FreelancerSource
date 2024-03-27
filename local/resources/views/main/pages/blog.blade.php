@extends('main.master-main')

@section('content-head')
<link rel="stylesheet" href="{{asset('frontend/css/home-grid.css')}}">
@endsection

@section('content')

<section class="inner-section single-banner" style="background: url({{asset('frontend/images/single-banner.jpg')}}) no-repeat center;">
    <div class="container">
        <h2>{{$title}}</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Bài viết</li>
        </ol>
    </div>
</section>
<section class="inner-section blog-grid">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-12">
                        {{-- <div class="top-filter">
                            <div class="filter-show"><label class="filter-label">Show :</label><select
                                    class="form-select filter-select">
                                    <option value="1">12</option>
                                    <option value="2">24</option>
                                    <option value="3">36</option>
                                </select></div>
                            <div class="filter-short">
                                <label class="filter-label">Short by :</label><select
                                    class="form-select filter-select">
                                    <option selected>default</option>
                                    <option value="3">recent</option>
                                    <option value="1">featured</option>
                                    <option value="2">recommend</option>
                                </select>
                            </div>
                            <div class="filter-action">
                                <a href="blog-grid.html" class="active" title="Two Column">
                                    <i class="fas fa-th-large"></i>
                                </a>
                                <a href="blog-standard.html" title="One Column">
                                    <i class="fas fa-th-list"></i>
                                </a>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="row">

                    @foreach($listPost as $post)
                    <div class="col-md-6 col-lg-6">
                        <div class="blog-card">
                            <div class="blog-media">
                                <a class="blog-img" href="{{route('post', $post->url_post)}}"><img src="{{asset('upload/images/thumbnail/posts/' . $post->thumbnail_post)}}" alt="{{$post->name_post}}" width="100%"></a>
                            </div>
                            <div class="blog-content">
                                <ul class="blog-meta">
                                    {{-- <li><i class="fas fa-user"></i><span>admin</span></li> --}}
                                    <li><i class="fas fa-calendar-alt"></i><span>{{$post->date_post}}</span></li>
                                </ul>
                                <h4 class="blog-title"><a href="{{route('post', $post->url_post)}}">{{$post->name_post}}</a></h4>
                                <p class="blog-desc">{{$post->present_post}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                {{-- <div class="row">
                    <div class="col-lg-12">
                        <div class="bottom-paginate">
                            <p class="page-info">Showing 12 of 60 Results</p>
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="fas fa-long-arrow-alt-left"></i></a></li>
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">...</li>
                                <li class="page-item"><a class="page-link" href="#">60</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="fas fa-long-arrow-alt-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="col-md-7 col-lg-4">
                <div class="blog-widget">
                    <h3 class="blog-widget-title">Tìm bài viết</h3>
                    <form class="blog-widget-form">
                        <input type="text" placeholder="Search blogs">
                        <button class="icofont-search-1"></button>
                    </form>
                </div>
                <div class="blog-widget">
                    <h3 class="blog-widget-title">Đề xuất</h3>
                    <ul class="blog-widget-feed">

                        @foreach($listRandomPost as $post)
                        <li>
                            <a class="blog-widget-media" href="{{route('post', $post->url_post)}}"><img src="{{asset('upload/images/thumbnail/posts/' . $post->thumbnail_post)}}" alt="{{$post->name_post}}" width="100%"></a>
                            <h6 class="blog-widget-text">
                                <a href="{{route('post', $post->url_post)}}">{{$post->name_post}}</a>
                                <span>{{$post->date_post}}</span>
                            </h6>
                        </li>
                        @endforeach

                    </ul>
                </div>
                <div class="blog-widget">
                    <a href="#"><img src="{{asset('frontend/images/promo/shop/01.jpg')}}" alt="promo" width="90%"></a>
                </div>
                <div class="blog-widget">
                    <h3 class="blog-widget-title">Sản phẩm</h3>
                    <ul class="blog-widget-category">
                        <li><a href="#">farming <span>22</span></a></li>
                        <li><a href="#">agriculture <span>14</span></a></li>
                        <li><a href="#">organic food <span>35</span></a></li>
                        <li><a href="#">vegetables <span>67</span></a></li>
                        <li><a href="#">healthy life <span>89</span></a></li>
                    </ul>
                </div>
                <div class="blog-widget">
                    <a href="#"><img class="img-fluid" src="{{asset('frontend/images/promo/blog/01.jpg')}}" alt="promo"></a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
