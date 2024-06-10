@extends('layout.master', [
    'PageTitle' => $Service->title,
    'PageDescription' => $Service->description
])
@section('content')
    <!-- breadcrumb-area -->
    <div class="breadcrumb__area breadcrumb__bg" data-background="{{ $Service->imagePath }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__content">
                        <h2 class="title">{{ $Service->title }}</h2>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="{{ route('home') }}">@lang('services.home')</a>
                            </span>
                            <span class="breadcrumb-separator">/</span>
                            <span property="itemListElement" typeof="ListItem">{{ $Service->title }}</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- services-details-area -->
    <section class="services__details-area section-py-120">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-9 order-0 order-lg-2">
                    <div class="about__img-three services__details-img">
                        <img src="{{ $Service->imagePath }}" alt="img" class="wow img-custom-anim-right animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about__content-three services__details-content">
                        {!! $Service->upper_content !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- services-details-area-end -->



    <!-- choose-area -->
    <section class="choose__area-two section-py-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="section__title section__title-three text-center mb-60 ">
                        <span class="sub-title">@lang('services.services_title')</span>
                        <h2 class="title">@lang('services.sub_services')</h2>
                    </div>
                </div>
            </div>
            <div class="choose__tab-wrap">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    @forelse($Service->SubServices as $key => $SubService)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link @if($key == 0) active @endif" id="service-{{ $SubService->id }}-button" data-bs-toggle="tab" data-bs-target="#service-{{ $SubService->id }}" type="button" role="tab" aria-controls="service-{{ $SubService->id }}" aria-selected="true">{{ $SubService->title }}</button>
                        </li>
                    @empty
                    @endforelse
                </ul>
                <div class="tab-content" id="myTabContent">
                    @forelse($Service->SubServices as $key => $SubService)
                        <div class="tab-pane fade @if($key == 0) show active @endif" id="service-{{ $SubService->id }}" role="tabpanel" aria-labelledby="expertise-tab" tabindex="0">
                            <div class="choose__item shine__animate-item">
                                <div class="choose__item-thumb shine__animate-link">
                                    <img src="{{ $SubService->imagePath }}" alt="{{ $SubService->title }}">
                                    <p>{{ $SubService->image_description }}</p>
                                </div>
                                <div class="choose__item-content">
                                    <h2 class="title">{{ $SubService->title }}</h2>
                                    <p>{{ $SubService->description }}</p>
                                    <a href="{{ route('contact') }}" class="btn">@lang('services.email')</a>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
            <div class="project__details-bottom-content">
                {!! $Service->lower_content !!}
            </div>
        </div>
    </section>
    <!-- choose-area-end -->
    <x-CTA />
@endsection
