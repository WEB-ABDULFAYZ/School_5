@extends('layouts.index')

@section('content')
<div class="mainContent ">
    <div class="imageHeader">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol id="w5" class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">@lang('words.home')</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@lang('words.administration')</li>
                </ol>
            </nav>
            <div class="imageBox">
                <img alt="." src="">
            </div>
        </div>
    </div>

    <div class="container">
        
<div class="leaderInfo">
<div class="photo">
    <img alt="image" src="/public/leader/images/{{ $leader->img }}">
</div>

<div class="description">
    <h1 class="staffTitle">{{ $leader['name_' . \App::getLocale()] }}</h1>

    <h2>{{ $leader['role_' . \App::getLocale()] }}</h2>

    <div class="contactInfo">
        

        <div>
            <i class="fas fa-phone-alt"></i>
            <a href="tel:{{ $leader->phone }}">+998 {{ $leader->phone }}</a>
        </div>

        <div>
            <i class="far fa-envelope-open"></i>
            <a href="mailto:{{ $leader->email }}">{{ $leader->email }}</a>
        </div>
    </div>

    <div class="selfSocialLinks">
        <a href="{{route('index')}}" target="_blank"><i class="fas fa-globe"></i></a>                                                        </div>

    
</div>
</div>

</div>
</div>
@endsection
<style>
    .staffTitle{
        width: 200px
    }
</style>