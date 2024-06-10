@extends('layout.master', [
    'PageTitle' => __('about.about_title')
])
@section('content')

        <!-- breadcrumb-area -->
        <div class="breadcrumb__area breadcrumb__bg" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb__content headline-breadcrumb">
                            <h2 class="title">@lang('about.about_title')</h2>
                            <nav class="breadcrumb">
                                <span property="itemListElement" typeof="ListItem">
                                    <a href="{{ route('home') }}">@lang('about.home')</a>
                                </span>
                                <span class="breadcrumb-separator">/</span>
                                <span property="itemListElement" typeof="ListItem">@lang('about.about_title')</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->
        <!-- services-area -->
        <section class="services__area-three section-py-120">
            <div class="container">
                <div class="row gutter-24 justify-content-center">
                    <div class="col-xl-7 col-lg-6 col-md-8">
                        <div class="services__thumb-three">
                            <img src="{{ asset('assets/img/about/about_01.jpg') }}" alt="img" class="wow img-custom-anim-left animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="section__title section__title-three mb-25">
                            <span class="sub-title">@lang('about.about_sub_title')</span>
                            <h2 class="title">@lang('about.about_title')</h2>
                        </div>
                        <div class="services__content-three">
                            <h2 class="title">@lang('about.services_content_title')</h2>
                            @lang('about.services_content_decription')
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-area-end -->
       <!-- about-area -->
       {{-- <section class="about__area-two section-pt-120">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-10">
                        <div class="about__img-wrap-two">
                            <img src="{{ asset('assets/img/about/wissam-photo.jpg') }}" alt="img" class="wow img-custom-anim-right animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                            <img src="{{ asset('assets/img/logo/preloader.svg') }}" alt="img" class="wow img-custom-anim-top animated" data-wow-duration="1.5s" data-wow-delay="0.6s">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content-two">
                            <h2 class="title sub-title title-ceo">@lang('about.about_ceo_title')</h2>
                            @lang('about.about_ceo_message')
                            <h5 class="name-ceo">@lang('about.about_ceo_name')</h5>
                            <p class="fw-bolder fs-6 ceo-position">@lang('about.about_ceo_position')</p>
                        </div>
                    </div>
                </div>
            </div>
       </section> --}}
       <!-- about-area-end -->

       <!-- about-area -->
       <section class="about__area-three section-py-120">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 col-md-9 order-0 order-lg-2">
                        <div class="about__img-three">
                            <img src="{{ asset('assets/img/about/inner_project01.jpg') }}" alt="img" class="wow img-custom-anim-right animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about__content-three">
                            <div class="section__title section__title-three mb-30">
                                <span class="sub-title">@lang('about.about_sub_title')</span>
                                <h2 class="title">@lang('about.about_section_2_title')</h2>
                            </div>
                            @lang('about.about_section_2_content')
                        </div>
                    </div>
                </div>
            </div>
       </section>
       <!-- about-area-end -->
        <!-- services-area -->
        <section class="services__area-three section-py-120">
            <div class="container">
                <div class="row gutter-24 justify-content-center">
                    <div class="col-xl-7 col-lg-6 col-md-8">
                        <div class="services__thumb-three">
                            <img src="{{ asset('assets/img/about/about_01.jpg') }}" alt="img" class="wow img-custom-anim-left animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="services__content-three">
                            <h2 class="title">@lang('about.about_section_3_title')</h2>
                            @lang('about.about_section_3_content')


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- services-area-end -->
@endsection
