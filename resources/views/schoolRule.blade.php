@extends('layouts.index')
@section('content')

    <div class="mainContent ">
        <div class="imageHeader">
            <div class="container">
                <h1 class="pageTitle">@lang('words.rules')</h1>
                <nav aria-label="breadcrumb">
                    <ol id="w5" class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">@lang('words.home')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@lang('words.rules')</li>
                    </ol>
                </nav>
                <div class="imageBox">
                    <img alt="." src="">
                </div>
            </div>
        </div>

        <div class="container">
            <img class="cHeadImage" src="/img/placeholder.jpg" alt="" style="display: none">
            <div class="page_content"><b></b>
                @lang('words.rules1')
            </div>
        </div>
    </div>

@endsection
