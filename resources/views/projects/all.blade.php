@extends('layout.master', [
    'PageTitle' => __('projects.projects_title')
])
@section('content')
    <!-- breadcrumb-area -->
    <div class="breadcrumb__area breadcrumb__bg" data-background="{{ asset('assets/img/bg/breadcrumb_bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__content headline-breadcrumb">
                        <h2 class="title">@lang('projects.projects_title')</h2>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="{{ route('home') }}">@lang('proejcts.home')</a>
                            </span>
                            <span class="breadcrumb-separator">/</span>
                            <span property="itemListElement" typeof="ListItem">@lang('projects.projects_title')</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area-end -->

    <!-- project-area -->
    <section class="project__area-two">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="project__menu-nav">
                        @forelse($Categories as $key => $Category)
                            <button class="@if($key == 0) active @endif" data-filter=".{{ $Category->id }}">{{ $Category->title }}</button>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="row gutter-24 project-active-two">
                @forelse($Projects as $Project)
                    <div class="col-lg-4 col-md-6 grid-item grid-sizer cat-three {{ $Project->category_id }}">
                        <div class="project__item-two">
                            <div class="project__thumb-two">
                                <a href="{{ route('projects.single', [$Project->id, $Project->slug]) }}"><img src="{{ $Project->imagePath }}" alt="{{ $Project->title }}"></a>
                                <span class="shape"></span>
                            </div>
                            <div class="project__content-two">
                                <h2 class="title"><a href="{{ route('projects.single', [$Project->id, $Project->slug]) }}">{{ $Project->title }}</a></h2>
                                <span>{{ $Project->created_at->format('F Y') }}</span>
                            </div>
                            <div class="project__icon-two">
                                <a href="{{ route('projects.single', [$Project->id, $Project->slug]) }}"><i class="renova-plus"></i></a>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>
    <!-- project-area-end -->

    <x-CTA />
@endsection
