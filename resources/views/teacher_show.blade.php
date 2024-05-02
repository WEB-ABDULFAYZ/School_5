@extends('layouts.index')

@section('content')
<div class="mainContent ">
    <div class="imageHeader">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol id="w5" class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">@lang('words.home')</a></li>
                    <li class="breadcrumb-item active" aria-current="page">@lang('words.teacher')</li>
                </ol>
            </nav>
            <div class="imageBox">
                <img alt="." src="">
            </div>
        </div>
    </div>

    <div class="container">
        
<div class="leaderInfo mini">
<div class="photo">
    <img alt="image" src="/public/teacher/images/{{ $teacher->img }}" class="teach_img">
</div>

<div class="description">
    <h1 class="staffTitle">{{ $teacher['name_' . \App::getLocale()] }}</h1>

    <h2>{{ $teacher['role_' . \App::getLocale()] }}</h2>

    <div class="contactInfo">
        

        <div>
            <i class="fas fa-phone-alt"></i>
            <a href="tel:{{ $teacher->phone }}">+998 {{ $teacher->phone }}</a>
        </div>

        <div>
            <i class="far fa-envelope-open"></i>
            <a href="mailto:{{ $teacher->email }}">{{ $teacher->email }}</a>
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
    .teach_img{
    
    }

</style>
