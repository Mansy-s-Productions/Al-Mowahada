@extends('layout.master', [
    'PageTitle' => $Blog->title,
    'PageDescription' => $Blog->description
])
@section('content')
    <!-- blog-details-area -->
    <section class="blog__details-area section-py-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog__details-thumb">
                        <img src="{{ $Blog->imagePath }}" alt="{{ $Blog->title }}">
                    </div>
                    <div class="blog__details-content">
                        <div class="blog__post-meta">
                            <ul class="list-wrap">
                                <li>@lang('blog.by') <a href="#">{{ $Blog->User->name }}</a></li>
                                <li>{{ $Blog->created_at->format('D M, Y') }}</li>
                            </ul>
                        </div>
                        <h2 class="title">{{ $Blog->title }}</h2>
                        {!! $Blog->content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-details-area-end -->

    <x-CTA />
@endsection
