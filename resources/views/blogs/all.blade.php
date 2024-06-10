@extends('layout.master', [
    'PageTitle' => __('blog.blog_title'),
    'PageDescription' => __('blog.blog_description')
])
@section('content')
    <!-- breadcrumb-area -->
    <div class="breadcrumb__area breadcrumb__bg" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__content headline-breadcrumb">
                        <h2 class="title">@lang('blog.blog_title')</h2>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="{{ route('home') }}">@lang('blog.home')</a>
                            </span>
                            <span class="breadcrumb-separator">/</span>
                            <span property="itemListElement" typeof="ListItem">@lang('blog.blog_title')</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- blog-post-area -->
    <section class="blog__post-area-three section-py-120">
        <div class="container">
            <div class="row gutter-24">
                <div class="col-lg-8">
                    @forelse($Blogs as $Article)
                        <div class="blog__post-item-two">
                            <div class="blog__post-thumb-two">
                                <a href="{{ route('blog.single' , [$Article->id, $Article->slug]) }}"><img src="{{ $Article->imagePath }}" alt="{{ $Article->title }}"></a>
                            </div>
                            <div class="blog__post-content-two">
                                <div class="blog__post-meta">
                                    <ul class="list-wrap">
                                        <li>@lang('blog.by') <a href="{{ route('blog.single' , [ $Article->id, $Article->slug ]) }}">{{ $Article->User->name }}</a></li>
                                        <li>{{ $Article->created_at->format('D M, Y') }}</li>
                                    </ul>
                                </div>
                                <h2 class="title"><a href="{{ route('blog.single' , [$Article->id, $Article->slug]) }}">{{ $Article->title }}</a></h2>
                                <p>{{ $Article->description }}</p>
                                <a href="{{ route('blog.single' , [$Article->id, $Article->slug]) }}" class="btn btn-two">@lang('blog.blog_details')</a>
                            </div>
                        </div>
                    @empty
                        <p>@lang('blog.no_articles')</p>
                    @endforelse
                </div>
                <div class="col-lg-4">
                    <aside class="blog__sidebar">
                        <div class="blog__widget">
                            <h4 class="blog__widget-title">@lang('blog.recent_posts')</h4>
                            <div class="blog__rc-post-wrap">
                                @forelse($Blogs->take(3) as $Article)
                                    <div class="blog__rc-post-item">
                                        <div class="thumb">
                                            <a href="{{ route('blog.single' , [ $Article->id, $Article->slug ]) }}"><img src="{{ $Article->imagePath }}" alt="{{ $Article->title }}"></a>
                                        </div>
                                        <div class="content">
                                            <span class="date"><i class="renova-clock"></i>{{ $Article->created_at->format('D M, Y') }}</span>
                                            <h2 class="title"><a href="{{ route('blog.single' , [ $Article->id, $Article->slug ]) }}">{{ $Article->title }}</a></h2>
                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-post-area-end -->
    <x-CTA />
@endsection
