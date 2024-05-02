@extends('layouts.index')
@section('content')

    <div class="mainContent withImage">
        <div class="imageHeader">
            <div class="container">
                <h1 class="pageTitle">@lang('words.pupils')</h1>
                <nav aria-label="breadcrumb">
                    <ol id="w5" class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">@lang('words.home')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@lang('words.pupils')</li>
                    </ol>
                </nav>
                <div class="imageBox">
                    <img alt="." src="/uploads/2021/10/KqcEMN3UlMLcUSFT-SFzhV21ayoQpzzj.jpg">
                </div>
            </div>
        </div>

        <div class="container">

            <div class='serviceTabs'>
                <ul class='nav nav-tabs' id='myTab' role='tablist'>

                    <li class="nav-item" role="presentation">
                        <a class="nav-link " data-toggle="tab" href="#tab1" role="tab"
                            aria-selected="true">1-@lang('words.shift')</a>
                    </li>

                    <li class="nav-item" role="presentation">
                        <a class="nav-link " data-toggle="tab" href="#tab2" role="tab"
                            aria-selected="true">2-@lang('words.shift')</a>
                    </li>

                    <li class="nav-item" role="presentation">
                        <a class="nav-link show active" data-toggle="tab" href="#tab3" role="tab"
                            aria-selected="true">@lang('words.extralessons')</a>
                    </li>

                    <li class="nav-item" role="presentation">
                        <a class="nav-link " data-toggle="tab" href="#tab4" role="tab"
                            aria-selected="true">@lang('words.sports')</a>
                    </li>

                </ul>
            </div>
            <div class='tab-content'>
                <div class='tab-pane fade ' id='tab1' role='tabpanel'>
                    <div class='servicesList'>
                        @foreach ($services1 as $service)
                        <a href="/public/smena1/images/{{$service->image}}">
                            <div>
                                <div class="icon">
                                    <img alt="icon" src="https://329.maktab.uz/uploads/2021/10/LndzkRNjthNcSHN5805syg4hkvVHGXV6.jpg">
                                </div>  
                                <span>{{$service->classname}}-@lang('words.class')</span>
                            </div>
                            <span>{{$service->classname}}-@lang('words.class')</span>
                        </a>
                        @endforeach
                        
                    </div>
                </div>
                <div class='tab-pane fade ' id='tab2' role='tabpanel'>
                    <div class='servicesList'>
                        @foreach ($services2 as $service)
                        <a href="/public/smena2/images/{{$service->image}}">
                            <div>
                                <div class="icon">
                                    <img alt="icon" src="https://329.maktab.uz/uploads/2021/10/LndzkRNjthNcSHN5805syg4hkvVHGXV6.jpg">
                                </div>
                                <span>{{$service->classname}}-@lang('words.class')</span>
                            </div>
                            <span>{{$service->classname}}-@lang('words.class')</span>
                        </a>
                        @endforeach
                        
                    </div>
                </div>
                <div class='tab-pane fade show active' id='tab3' role='tabpanel'>
                    <div class='servicesList'>
                        @foreach ($lessons as $lesson)
                        <a href="{{ route('lesson_show', $lesson->id) }}">
                            <div>
                                <div class="icon">
                                    <img alt="icon" src="/public/lessons/images/{{ $lesson->img }}">
                                </div>
                                <span>{{ $lesson['title_' . \App::getLocale()]  }}</span>
                            </div>
                            <span>{{ $lesson['title_' . \App::getLocale()]  }}</span>
                        </a>
                        @endforeach
                        

                        
                    </div>
                </div>
                <div class='tab-pane fade ' id='tab4' role='tabpanel'>
                    <div class='servicesList'>
                        @foreach ($sports as $sport)
                        <a href="{{ route('sport_show',$sport->id) }}">
                            <div>
                                <div class="icon">
                                    <img alt="icon" src="/public/sport/images/{{ $sport->img }}">
                                </div>
                                <span>{{ $sport['name_' . \App::getLocale()]  }}</span>
                            </div>
                            <span>{{ $sport['name_' . \App::getLocale()]  }}</span>
                        </a>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script>
        jQuery(function($) {
            var hash = location.hash.replace(/^#/, '');
            hash = hash.replace("-hash", '');
            if (hash) {
                $('.nav-tabs a[href="#' + hash + '"]').tab('show');
            }

            $('.nav-tabs a').on('shown.bs.tab', function(e) {
                var hash = e.target.hash + "-hash";
                window.location.hash = hash;
            })
        });
    </script>
@endsection
