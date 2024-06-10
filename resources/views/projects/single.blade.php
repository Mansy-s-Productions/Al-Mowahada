@extends('layout.master', [
    'PageTitle' => $Project->title
])
@section('content')
    <!-- breadcrumb-area -->
    <div class="breadcrumb__area breadcrumb__bg" data-background="{{ $Project->imagePath }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__content">
                        <h2 class="title">{{ $Project->title }}</h2>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="{{ route('home') }}">@lang('projects.home')</a>
                            </span>
                            <span class="breadcrumb-separator">/</span>
                            <span property="itemListElement" typeof="ListItem">@lang('projects.projects_details')</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- project-details-area -->
    <section class="project__details-area section-py-120">
        <div class="container">
            <div class="project__details-top-content">
                <div class="row">
                    <div class="col-29">
                        <div class="project__details-info">
                            <h3 class="info-title">@lang('projects.projects_information')</h3>
                            <div class="project__info-item-wrap">
                                @if($Project->clients)
                                    <div class="project__info-item">
                                        <div class="icon">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <div class="content">
                                            <span>@lang('projects.clients')</span>
                                            <h4 class="title">{{ $Project->clients }}</h4>
                                        </div>
                                    </div>
                                @endif
                                <div class="project__info-item">
                                    <div class="icon">
                                        <i class="fas fa-layer-group"></i>
                                    </div>
                                    <div class="content">
                                        <span>@lang('projects.category')</span>
                                        <h4 class="title">{{ $Project->Category->title }}</h4>
                                    </div>
                                </div>
                                @if($Project->date)
                                    <div class="project__info-item">
                                        <div class="icon">
                                            <i class="fas fa-calendar-alt"></i>
                                        </div>
                                        <div class="content">
                                            <span>@lang('projects.date')</span>
                                            <h4 class="title">{{ $Project->date->format('d F, Y') }}</h4>
                                        </div>
                                    </div>
                                @endif
                                @if($Project->address)
                                    <div class="project__info-item">
                                        <div class="icon">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <div class="content">
                                            <span>@lang('projects.address')</span>
                                            <h4 class="title">{{ $Project->address }}</h4>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-71">
                        <div class="project__details-content">
                            <span class="sub-title">{{ $Project->Category->title }}</span>
                            {!! $Project->content !!}
                        </div>
                    </div>
                </div>
            </div>
            @if($Project->Gallery)
                <div class="project__details-img">
                    <div class="row">
                        <div class="blog__post-thumb-two">
                        <div class="fix blog-thumb-active">
                            <div class="owl-carousel owl-theme">
                                @foreach($Project->Gallery as $Image)
                                    <div class="swiper-slide">
                                        <a href="#"><img src="{{ $Image->imagePath }}" alt="img"></a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            @endif
        </div>

    </section>
    <!-- project-details-area-end -->
    <x-CTA />
@endsection
