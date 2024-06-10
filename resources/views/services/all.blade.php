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

    <!-- services-area -->
    <section class="services__area-two section-pt-120 section-pb-95">
        <div class="container">
            <div class="row gutter-24 justify-content-center">
                @forelse ($Services as $Service)
                    <div class="col-lg-4 col-md-6">
                        <div class="services__item-two shine__animate-item">
                            <div class="services__thumb-two">
                                <a href="{{ route('services.single' , [ $Service->id, $Service->slug ]) }}" class="shine__animate-link">
                                    <img src="{{ $Service->imagePath }}" alt="{{ $Service->title }}">
                                </a>
                            </div>
                            <div class="services__content-two">
                                <h4 class="title"><a href="{{ route('services.single' , [ $Service->id, $Service->slug ]) }}">{{ $Service->title }}</a></h4>
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
    <!-- services-area-end -->

    <x-CTA />
@endsection
