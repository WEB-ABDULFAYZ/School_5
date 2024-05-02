@extends('layouts.index')
@section('content')
    <div class="mainContent withImage">
        <div class="imageHeader">
            <div class="container">
                <h1 class="pageTitle">@lang('words.news')</h1>
                <nav aria-label="breadcrumb">
                    <ol id="w5" class="breadcrumb">
                        <li class="breadcrumb-item">@lang('words.home')</a></li>
                        <li class="breadcrumb-item">@lang('words.axborotMarkaz')</a></li>
                        <li class="breadcrumb-item">@lang('words.news')</a></li>
                    </ol>
                </nav>
                <div class="imageBox">
                    <img alt="." src="">
                </div>
            </div>
        </div>

        <div class="container">

            <div class="headerArea">
                <div class="titleBox">
                    <h1>{{ $new['title_' . \App::getLocale()]  }}</h1>
                    <span>{{ $new->created_at->format('H:i')}} / {{ $new->created_at->format('d.m.Y')}}</span>
                </div>

                <img alt="image" src="/public/news/images/{{ $new->img }}">
            </div>

            <div class="contentArea">
                
                {{ $new['text_' . \App::getLocale()]  }}

                <div class="shareBox">
                    <!--noindex-->
                    <ul class="social-share">
                        <li><a href="http://www.facebook.com/sharer.php?u=http%3A%2F%2F329.maktab.uz%2Fuz%2Fnews%2F29"
                                rel="noopener" target="_blank"><i class="fab fa-facebook-f" data-toggle="tooltip"
                                    title="Facebook"></i></a></li>
                        <li><a href="http://twitter.com/share?url=http%3A%2F%2F329.maktab.uz%2Fuz%2Fnews%2F29&amp;text=%3Cp%3E5-7-oktyabr+kunlari+Toshkent+shahrida+%26ldquo%3BRossiya+ta%CA%BClimi.+Toshkent-2021%26rdquo%3B+xalqaro+ko%CA%BBrgazmasi+bo%CA%BBlib+o%CA%BBtadi.%3C%2Fp%3E%0D%0A"
                                rel="noopener" target="_blank"><i class="fab fa-twitter" data-toggle="tooltip"
                                    title="Twitter"></i></a></li>
                        <li><a href="https://telegram.me/share/url?url=http%3A%2F%2F329.maktab.uz%2Fuz%2Fnews%2F29"
                                rel="noopener" target="_blank"><i class="fab fa-telegram-plane"
                                    data-toggle="tooltip" title="Telegram"></i></a></li>
                    </ul><!--/noindex-->
                    <a id="printBtn" href="" onclick="window.print();">
                        <i class="fas fa-print" data-toggle="tooltip" data-original-title="Печать"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection