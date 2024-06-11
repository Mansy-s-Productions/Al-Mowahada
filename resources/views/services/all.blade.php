@extends('layout.master', [
    'PageTitle' => __('services.services_title')
])
@section('content')
    <!-- breadcrumb-area -->
    <div class="breadcrumb__area breadcrumb__bg" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__content headline-breadcrumb">
                        <h2 class="title">@lang('services.services_title')</h2>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="{{ route('home') }}">@lang('services.home')</a>
                            </span>
                            <span class="breadcrumb-separator">/</span>
                            <span property="itemListElement" typeof="ListItem">@lang('services.services_title')</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <section class="services__area-two section-pt-120 section-pb-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project__menu-nav">
                        <button class="active" data-filter="*">ALL SERVICES</button>
                        <button class="" data-filter=".contracting-service">COVTRACTING SERVICES</button>
                        <button class="" data-filter=".trading-service">TRADING SERVICES</button>
                    </div>
                </div>
            </div>
            <div class="row gutter-24 project-active-two">
                @forelse ($Services as $Service)
                <div class="col-lg-4 col-md-6 grid-item grid-sizer {{$Service->main_category}}">
                    <div class="services__item-two shine__animate-item">
                        <div class="services__thumb-two">
                            <img src="{{ $Service->imagePath }}" alt="{{ $Service->title }}">
                        </div>
                        <div class="services__content-two">
                            <h4 class="title">{{ $Service->title }}</h4>
                            <p>{{ $Service->description }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <p>@lang('services.no_services')</p>
            @endforelse
            </div>
        </div>
    </section>
    <x-CTA />
@endsection
