@extends('layouts.index')
@section('content')
    <div class="mainContent withImage">
        <div class="imageHeader">
            <div class="container">
                <h1 class="pageTitle">{{ $lesson['title_' . \App::getLocale()]  }}</h1>
                <nav aria-label="breadcrumb">
                    <ol id="w5" class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">@lang('words.home')</a></li>
                        <li class="breadcrumb-item"><a href="/uz/services/index/1">@lang('words.pupils')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $lesson['title_' . \App::getLocale()]  }}</li>
                    </ol>
                </nav>
                <div class="imageBox">
                    <img alt="." src="/uploads/2022/04/KqcEMN3UlMLcUSFT-SFzhV21ayoQpzzj.jpg">
                </div>
            </div>
        </div>

        <div class="container">
            <p><img alt="" height="225" src="/uploads/content/ScKLfpe4nm8z-65JeoSt-SDisMFKsRnF.png"
                    width="225"></p>

            <p><strong><span style="font-size:48px;">@lang('words.time')</span></strong></p>

            <p><span style="font-size:48px;">{{ $lesson['day_' . \App::getLocale()]  }}</span></p>

            <p><span style="font-size:48px;">{{ $lesson->time }}</span></p>

            <p><strong><span style="font-size:48px;">@lang('words.teacher')</span></strong></p>

            <p><span style="font-size:48px;">{{ $lesson['teachname_' . \App::getLocale()]  }}</span></p>

            <p><span style="font-size:48px;">{{ $lesson->class }} @lang('words.class')</span></p>
        </div>
    </div>
@endsection
