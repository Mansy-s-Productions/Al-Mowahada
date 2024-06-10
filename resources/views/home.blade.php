@extends('layout.master')
@section('content')
<!-- slider-area -->
<section class="slider__area-two">
    <div class="swiper swiper-landing">
        <div class="swiper-wrapper swiper-landing-page">
            <div class="swiper-slide slider__bg-two" data-background="{{ asset('assets/img/slider/image-000.jpg') }}">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-xl-7 col-lg-7">
                            <div class="slider__content-two">
                                {{-- <span class="sub-title">@lang('home.hero_sec_slide_2_sub_title')</span> --}}
                                <h2 class="title">@lang('home.hero_sec_slide_2_title')</h2>
                                <div class="slider__btn">
                                    <a href="{{ route('services') }}" class="btn btn-two">@lang('home.view_services_btn') <img src="{{ asset('assets/img/icons/right_arrow.svg') }}" alt=""  class="injectable"></a>
                                    <a href="{{ route('contact') }}" class="btn">@lang('home.contact_btn')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider__shape" data-background="{{ asset('assets/img/slider/slider_shape.png') }}"></div>
            </div>
            <div class="swiper-slide slider__bg-two" data-background="{{ asset('assets/img/slider/image-209.jpg') }}">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-xl-7 col-lg-7">
                            <div class="slider__content-two">
                                {{-- <span class="sub-title">@lang('home.hero_sec_slide_3_sub_title')</span> --}}
                                <h2 class="title">@lang('home.hero_sec_slide_3_title')</h2>
                                <div class="slider__btn">
                                    <a href="{{ route('services') }}" class="btn btn-two">@lang('home.view_services_btn') <img src="{{ asset('assets/img/icons/right_arrow.svg') }}" alt=""  class="injectable"></a>
                                    <a href="{{ route('contact') }}" class="btn">@lang('home.contact_btn')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider__shape" data-background="{{ asset('assets/img/slider/slider_shape.png') }}"></div>
            </div>
            <div class="swiper-slide slider__bg-two" data-background="{{ asset('assets/img/slider/image-026.jpg') }}">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-xl-7 col-lg-7">
                            <div class="slider__content-two">
                                {{-- <span class="sub-title">@lang('home.hero_sec_slide_1_sub_title')</span> --}}
                                <h2 class="title">@lang('home.hero_sec_slide_1_title')</h2>
                                <div class="slider__btn">
                                    <a href="{{ route('services') }}" class="btn btn-two">@lang('home.view_services_btn') <img src="{{ asset('assets/img/icons/right_arrow.svg') }}" alt=""  class="injectable"></a>
                                    <a href="{{ route('contact') }}" class="btn">@lang('home.contact_btn')</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider__shape" data-background="{{ asset('assets/img/slider/slider_shape.png') }}"></div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>
<!-- slider-area-end -->
<!-- about-area -->
<section class="about__area section-pb-60 section-py-120">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-9">
                <div class="about__img-wrap wow img-custom-anim-left animated"  data-wow-duration="1.5s" data-wow-delay="0.1s">
                    <img src="{{ asset('assets/img/images/aboutus.jpg') }}" alt="img">
                    <div class="about__img-content">
                        <h4 class="title">@lang('home.about_area_sub_title')</h4>
                        <a href="{{ route('contact') }}" class="btn">@lang('home.contact_btn') <img src="{{ asset('assets/img/icons/right_arrow.svg') }}" alt="" class="injectable"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__content">
                    <div class="section__title mb-20">
                        <h2 class="title">@lang('home.about_area_title')</h2>
                        <h4 class="number">01</h4>
                    </div>
                    <p>
                        @lang('home.about_area_text')
                    </p>
                    <div class="about__content-bottom about__content-bottom-two">
                        <div class="about__customer-box">
                            <h4 class="title">@lang('home.about_area_cta_title')</h4>
                        </div>
                        <a href="{{route('about')}}" class="btn btn-two">@lang('home.learn_more_btn')<img src="{{ asset('assets/img/icons/right_arrow.svg') }}" alt="" class="injectable"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-area-end -->
<!-- brand-area -->
<section class="brand__area section-py-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-7 col-lg-8">
                <div class="section__title section__title-three mb-60">
                    <span class="sub-title">@lang('home.brand_area_sub_title')</span>
                    <h2 class="title">@lang('home.brand_area_title')</h2>
                </div>
            </div>
        </div>
        <div class="owl-carousel owl-theme">

                <div class="item">
                    <div class="brand__item">
                        <img class="small-logo" src="{{ asset('assets/img/brand/brand_img04.png') }}" alt="img">
                    </div>
                </div>
                <div class="item">
                    <div class="brand__item">
                        <img class="small-logo" src="{{ asset('assets/img/brand/brand_img05.png') }}" alt="img">
                    </div>
                </div>
                <div class="item">
                    <div class="brand__item">
                        <img src="{{ asset('assets/img/brand/brand_img06.png') }}" alt="img">
                    </div>
                </div>
                <div class="item">
                    <div class="brand__item">
                        <img src="{{ asset('assets/img/brand/brand-7.jpg') }}" alt="img">
                    </div>
                </div>
                <div class="item">
                    <div class="brand__item">
                        <img src="{{ asset('assets/img/brand/brand-8.png') }}" alt="img">
                    </div>
                </div>


        </div>
    </div>
</section>
<!-- brand-area-end -->
<!-- cta-area -->
<section class="cta__area cta__area-two fix">
    <div class="cta__bg" data-background="{{ asset('assets/img/bg/cta_bg.jpg') }}"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="cta__content-two">
                    <h2 class="title">@lang('home.cta_area_title')</h2>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="cta__btn">
                    <a href="{{ route('services') }}" class="btn btn-two">@lang('home.view_services_btn') <img src="{{ asset('assets/img/icons/right_arrow.svg') }}" alt="" class="injectable"></a>
                    <a href="{{ route('contact') }}" class="btn transparent-btn popup-video">@lang('home.contact_btn')</a>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- cta-area-end -->

<!-- services-area -->
<section class="services__area section-pt-120 section-pb-90">
<div class="container">
<div class="row">
    <div class="col-lg-6">
        <div class="section__title mb-60">
            <h2 class="title">@lang('home.services_area_title').</h2>
            <h1 class="number">02</h1>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="section__title view-service-btn mb-60">
            <a href="{{ route('contact') }}" class="btn btn-two">@lang('home.view_services_btn') <img src="{{ asset('assets/img/icons/right_arrow.svg') }}" alt="" class="injectable"></a>
        </div>
    </div>
</div>
<div class="row-custom">
    @forelse(getFeaturedServices(6) as $Service)
        <div class="col-custom">
            <div class="services__item">
                <div class="services__arrow">
                    <i class="renova-top-right"></i>
                </div>
                <div class="services__content">
                    <h4 class="title">{{ $Service->title }}</h4>
                </div>
            </div>
            <div class="services__item-hidden">
                <div class="services__thumb">
                    <a href="{{ route('services.single', [$Service->id, $Service->slug]) }}"><img src="{{ $Service->imagePath }}" alt="{{ $Service->title }}"></a>
                </div>
                <div class="services__content-hidden">
                    <h2 class="title"><a href="{{ route('services.single', [$Service->id, $Service->slug]) }}">{{ $Service->title }}</a></h2>
                    <p>{{ $Service->description }}</p>
                    <div class="services__btn">
                        <a href="{{ route('services.single', [$Service->id, $Service->slug]) }}" class="btn">@lang('home.learn_more_btn') <img src="{{ asset('assets/img/icons/right_arrow.svg') }}" alt=""  class="injectable"></a>
                    </div>
                </div>
            </div>
        </div>
    @empty
    @endforelse
</div>
</div>
</section>
<!-- services-area-end -->

<!-- project-area -->
<section class="project__area project__bg" data-background="{{ asset('assets/img/bg/project__bg.jpg') }}">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6 col-md-8">
                <div class="section__title white-title mb-70">
                    <h2 class="title">@lang('home.projects_area_title')</h2>
                    <h1 class="number">03</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-4">
                <div class="section__title Project-section mb-60">
                    <a href="{{ route('projects') }}" class="btn btn-two">@lang('home.view_projects_btn') <img src="{{ asset('assets/img/icons/right_arrow.svg') }}" alt="" class="injectable"></a>
                    <div class="project__nav">
                        <button class="project-button-prev"><i class="renova-left-arrow"></i></button>
                        <button class="project-button-next"><i class="renova-right-arrow"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper project-active">
            <div class="swiper-wrapper">
                @forelse ($FeaturedProjects as $Project)
                <div class="swiper-slide">
                    <div class="project__item">
                        <div class="project__thumb">
                            <a href="{{ route('projects.single', [$Project->id, $Project->slug]) }}"><img src="{{ $Project->imagePath }}" alt="{{ $Project->title }}"></a>
                        </div>
                        <div class="project__content">
                            <div class="content">
                                <h2 class="title"><a href="{{ route('projects.single', [$Project->id, $Project->slug]) }}">{{ $Project->title }}</a></h2>
                                <span>{{ $Project->date }}</span>
                            </div>
                            <div class="project__icon">
                                <a href="{{ route('projects.single', [$Project->id, $Project->slug]) }}"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="project__item">
                        <div class="project__thumb">
                            <a href="{{ route('projects.single', [$Project->id, $Project->slug]) }}"><img src="{{ $Project->imagePath }}" alt="{{ $Project->title }}"></a>
                        </div>
                        <div class="project__content">
                            <div class="content">
                                <h2 class="title"><a href="{{ route('projects.single', [$Project->id, $Project->slug]) }}">{{ $Project->title }}</a></h2>
                                <span>{{ $Project->date }}</span>
                            </div>
                            <div class="project__icon">
                                <a href="{{ route('projects.single', [$Project->id, $Project->slug]) }}"><i class="fas fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
</section>
<!-- project-area-end -->
<section class="faq__area section-py-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7">
                <div class="section__title mb-70">
                    <h2 class="title">@lang('home.faq_area_title')</h2>
                    <h1 class="number">04</h1>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="faq__img wow img-custom-anim-left animated"  data-wow-duration="1.5s" data-wow-delay="0.1s">
                    <img src="{{ asset('assets/img/images/faq_img.jpg') }}" alt="img">
                    <div class="faq__img-content">
                        <h5 class="title">@lang('home.faq_area_sub_title')</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq__wrap">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    @lang('home.faq_1_title')
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>@lang('home.faq_1_content')</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    @lang('home.faq_2_title')
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>@lang('home.faq_2_content').</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    @lang('home.faq_3_title')
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>@lang('home.faq_3_content')</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    @lang('home.faq_4_title')
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>@lang('home.faq_4_content')</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFour">
                                    @lang('home.faq_5_title')
                                </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>@lang('home.faq_5_content')</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- consultation-area -->
<section class="consultation__area grey-bg section-py-120">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-7">
                <div class="section__title mb-40 img-custom-anim-top animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                    <h2 class="title">@lang('home.consultation_area_title')</h2>
                </div>
                <div class="consultation__img img-custom-anim-right animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                    <img src="{{ asset('assets/img/images/history_img01.jpg') }}" alt="img" class="wow">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="consultation__form-wrap">
                    <h2 class="title">@lang('home.consultation__form_title')</h2>
                    <form action="{{ route('contactRequest.store') }}" method="POST" class="consultation__form">
                        @csrf
                        <input type="hidden" name="source" value="HOMEPAGE">
                        <div class="form-grp">
                            <label for="name">@lang('home.name_field')</label>
                            <input name="name" required type="text" id="name">
                        </div>
                        <div class="form-grp">
                            <label for="email">@lang('home.email_field')</label>
                            <input name="email" required type="email" id="email">
                        </div>
                        <div class="form-grp">
                            <label for="number">@lang('home.phone_field')</label>
                            <input name="phone_number" required type="number" id="number">
                        </div>
                        <div class="form-grp select-grp">
                            <label for="select">@lang('home.service_field_title')</label>
                            <select name="service_id" id="select" class="orderby" required>
                                <option value="dasdsa">@lang('home.service_field')</option>
                                @forelse(getServices() as $Service)
                                    <option value="{{ $Service->id }}">{{ $Service->title }}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                        <div class="form-grp">
                            <label for="message">@lang('home.message_field')</label>
                            <textarea name="message" id="message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-two">@lang('home.submit_form')</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- consultation-area-end -->
<!-- blog-post-area -->
<section class="blog__post-area-four section-pt-120 section-pb-90">
    <div class="container">
        <div class="row justify-content-center gutter-24">
            <div class="col-lg-4">
                <div class="blog__post-content-four">
                    <div class="section__title section__title-three mb-20">
                        <span class="sub-title">@lang('home.blog_area_sub_title')</span>
                        <h2 class="title">@lang('home.blog_area_title')</h2>
                    </div>
                    <p>@lang('home.blog_area_description')</p>
                    <a href="{{ route('blog') }}" class="btn border-btn">@lang('home.all_blogs_btn')</a>
                </div>
            </div>
            @forelse($FeaturedArticles as $Article)
                <div class="col-lg-4 col-md-6">
                    <div class="blog__post-item shine__animate-item">
                        <div class="blog__post-thumb">
                            <a href="{{ route('blog.single', [$Article->id, $Article->slug]) }}" class="shine__animate-link">
                                <img src="{{ $Article->imagePath }}" alt="{{ $Article->title }}">
                            </a>
                        </div>
                        <div class="blog__post-content">
                            <div class="blog__post-meta">
                                <ul class="list-wrap">
                                    <li>{{ $Article->created_at->format('d M Y') }}</li>
                                </ul>
                            </div>
                            <h4 class="title"><a href="{{ route('blog.single', [$Article->id, $Article->slug]) }}">{{ $Article->title }}</a></h4>
                            <a href="{{ route('blog.single', [$Article->id, $Article->slug]) }}" class="btn">Read Details</a>
                        </div>
                    </div>
                </div>
            @empty
            @endforelse
        </div>
    </div>
</section>
<!-- blog-post-area-end -->
@endsection
