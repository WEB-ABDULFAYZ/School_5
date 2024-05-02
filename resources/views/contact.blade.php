@extends('layouts.index')
@section('content')
    <div class="mainContent withImage">
        <div class="imageHeader">
            <div class="container">
                <h1 class="pageTitle">@lang('words.contactUs')</h1>
                <nav aria-label="breadcrumb">
                    <ol id="w5" class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">@lang('words.home')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@lang('words.contactUs')</li>
                    </ol>
                </nav>
                <div class="imageBox">
                    <img alt="." src="/img/newSchool3d.jpg">
                </div>
            </div>
        </div>

        <div class="container">

            <div class="contactsBox">
                <div class="addressBox">
                    <div>
                        <i class="fas fa-phone-alt"></i>

                        <div>
                            <h1>@lang('words.phone')</h1>
                            <a href="tel:+99891-191-84-48">+99891-191-84-48</a>
                        </div>
                    </div>

                    <div>
                        <i class="far fa-envelope-open"></i>

                        <div>
                            <h1>@lang('words.email')</h1>
                            <a href="mailto:info@maktab.uz">info@maktab.uz</a>
                        </div>
                    </div>

                    <div>
                        <i class="far fa-clock"></i>

                        <div>
                            <h1>@lang('words.workHour')</h1>
                            <span>Du-Ju 9:00 dan 18:00 gacha</span>
                        </div>
                    </div>

                    <div>
                        <i class="fas fa-location-arrow"></i>

                        <div>
                            <h1>@lang('words.addressName')</h1>
                            <span>@lang('words.address')</span>
                        </div>
                    </div>
                </div>

                <div class="cMaps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3034.061663942611!2d68.76770857640527!3d40.49601945080913!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38b206f36dd77f1d%3A0x21a6169e377855c1!2z0KjQutC-0LvQsCDihJYgNQ!5e0!3m2!1sru!2s!4v1708847223398!5m2!1sru!2s" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" ></iframe>
                </div>
                
            </div>
        </div>
    </div>

        
@endsection
