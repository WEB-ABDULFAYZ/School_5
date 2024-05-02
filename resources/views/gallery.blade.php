@extends('layouts.index')
@section('content')
<div class="mainContent withImage">
    <div class="imageHeader">
        <div class="container">
            <h1 class="pageTitle">@lang('words.gallery')</h1>
            <nav aria-label="breadcrumb">
                <ol id="w5" class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">@lang('words.home')</a></li>
                    <li class="breadcrumb-item"><a href="{{route('news')}}">@lang('words.axborotMarkaz')</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@lang('words.gallery')</li>
                </ol>
            </nav>
            <div class="imageBox">
                <img alt="." src="/img/schoolGirlWhite.jpg">
            </div>
        </div>
    </div>

    <div class="container">
        
        <div class="galleryFolders">
            @foreach ($galleries as $gallery)
                <div class="item">
                <a href="#" data-fancybox="group_12">
                    <div class="imageBox">
                        <img src="/public/gallery/images/{{$gallery->img}}">
                    </div>
                    <div class="descriptionBox">
                        <h1>{{ $gallery['title_' . \App::getLocale()]  }}</h1>

                        <span>{{ $gallery->created_at->format('H:i')}} / {{ $gallery->created_at->format('d.m.Y')}}</span>
                        
                    </div>
                </a>

                <a href="/uploads/media//f5d99b2b-e730-519a-cfd5-9e4d1b6b40d5.jpg" data-fancybox="group_12"
                    class="hidden"><img src="/uploads/media//f5d99b2b-e730-519a-cfd5-9e4d1b6b40d5_mini.jpg"></a>

                </div>
            @endforeach
            
        </div>
    </div>
</div>
@endsection
  
@section('js')
    <script>
        jQuery(function($) {

            $("document").ready(function() {
                $("[data-fancybox]").fancybox({
                    baseClass: "awesome-gally",
                    protect: true,
                    thumbs: {
                        autoStart: true,
                        axis: "x"
                    },
                    zoomOpacity: false,
                    animationEffect: false,
                    buttons: [
                        "close"
                    ],
                });
            });
        });
    </script>
@endsection
