@extends('layouts.index')
@section('content')
<div class="mainContent withImage">
    <div class="imageHeader">
        <div class="container">
            <h1 class="pageTitle">Shaxmat</h1>                <nav aria-label="breadcrumb"><ol id="w5" class="breadcrumb"><li class="breadcrumb-item"><a href="/">Asosiy</a></li>
<li class="breadcrumb-item"><a href="/uz/services/index/1">O'quvchilarga</a></li>
<li class="breadcrumb-item active" aria-current="page">Shaxmat</li>
</ol></nav>
            <div class="imageBox">
                <img alt="." src="/uploads/2022/04/KqcEMN3UlMLcUSFT-SFzhV21ayoQpzzj.jpg">
            </div>
        </div>
    </div>

    <div class="container">
        <p><img alt="" height="165" src="/public/sport/images/{{ $sport->img }}" width="220"></p>

<p><strong><span style="font-size:48px;">@lang('words.time')</span></strong></p>

<p><span style="font-size:48px;">{{ $sport['days_' . \App::getLocale()]  }}</span></p>

<p><span style="font-size:48px;">{{ $sport->time }}</span></p>

<p><strong><span style="font-size:48px;">@lang('words.teacher')</span></strong></p>

<p><span style="font-size:48px;">{{ $sport['coach_' . \App::getLocale()]  }}</span></p>

<p><span style="font-size:48px;">{{ $sport->class }} @lang('words.class')</span></p>
    </div>
</div>
@endsection
