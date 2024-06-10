@extends('layout.master', [
    'PageTitle' => __('contact.contact_title')
])
@section('content')
    <!-- breadcrumb-area -->
    <div class="breadcrumb__area breadcrumb__bg" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__content headline-breadcrumb">
                        <h2 class="title">@lang('contact.contact_title')</h2>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="{{ route('home') }}">@lang('contact.home')</a>
                            </span>
                            <span class="breadcrumb-separator">/</span>
                            <span property="itemListElement" typeof="ListItem">@lang('contact.contact_title')</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- contact-area -->
    <section class="contact__area section-py-120">
        <div class="container">
            <div class="row gutter-24">
                <div class="col-lg-4">
                    <div class="contact__info-wrap">
                        <div class="contact__info-item">
                            <div class="contact__info-thumb">
                                <img src="{{ asset('assets/img/images/contact_img01.jpg') }}" alt="img">
                            </div>
                            <div class="contact__info-content">
                                <div class="icon">
                                    <i class="renova-map"></i>
                                </div>
                                <div class="content">
                                    <span>@lang('contact.location_title')</span>
                                    <h2 class="title">@lang('contact.location')</h2>
                                </div>
                            </div>
                        </div>
                        <div class="contact__info-item">
                            <div class="contact__info-thumb">
                                <img src="{{ asset('assets/img/images/contact_img02.jpg') }}" alt="img">
                            </div>
                            <div class="contact__info-content">
                                <div class="icon">
                                    <i class="renova-envelope-open"></i>
                                </div>
                                <div class="content">
                                    <span>@lang('contact.email')</span>
                                    <h2 class="title"><a href="mailto:info@almuahada.com">info@almuahada.com</a></h2>
                                </div>
                            </div>
                        </div>
                        <div class="contact__info-item">
                            <div class="contact__info-thumb">
                                <img src="{{ asset('assets/img/images/contact_img03.jpg') }}" alt="img">
                            </div>
                            <div class="contact__info-content">
                                <div class="icon">
                                    <i class="renova-headphone"></i>
                                </div>
                                <div class="content">
                                    <span>@lang('contact.call')</span>
                                    <h2 class="title"><a href="tel:00+966544782477">+966544782477</a></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <!-- contact-map -->
                    <div class="contact-map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d2696.3960861991773!2d8.942548784373768!3d47.482196779176626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDfCsDI4JzU1LjkiTiA4wrA1NicyNS4zIkU!5e0!3m2!1sar!2siq!4v1715031929144!5m2!1sar!2siq" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- contact-map-end -->
                    <div class="contact__form-wrap">
                        <div class="section__title section__title-three mb-40">
                            <span class="sub-title">@lang('contact.form_sub_title')</span>
                            <h2 class="title">@lang('contact.form_title')
                            </h2>
                        </div>
                        <form action="{{ route('contactRequest.store') }}" method="POST" class="contact__form">
                            @csrf
                            <div class="row gutter-20">
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="text" name="name" placeholder="@lang('contact.name')">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="email" name="email" placeholder="@lang('contact.email')">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <input type="number" name="phone_number" placeholder="@lang('contact.phone_number')">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-grp">
                                        <select name="service_id" id="select" class="orderby">
                                            <option value="Select your subject">@lang('contact.services_select')</option>
                                            @forelse(getServices() as $Service)
                                                <option value="{{ $Service->id }}">{{ $Service->title }}</option>
                                            @empty
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-grp">
                                <textarea name="message" placeholder="@lang('contact.message_placeholder')"></textarea>
                            </div>
                            <button type="submit" class="btn btn-two">@lang('contact.submit_form')</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-area-end -->
@endsection
