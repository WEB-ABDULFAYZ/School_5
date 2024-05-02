@extends('layouts.index')

@section('content')
<div class="mainContent">
    <div class="imageHeader">
        <div class="container">
            <h1 class="pageTitle">@lang('words.administration')</h1>
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

        <a href="{{route('leader_show',$leader->id)}}" class="mainLeader">
            <img alt="image" src="/public/leader/images/{{ $leader->img }}">
            <div class="details">
                <h1>{{ $leader['name_' . \App::getLocale()] }}</h1>

                <span>{{ $leader['role_' . \App::getLocale()] }}</span>
            </div>
        </a>

        <div class="leadersList">
        </div>
    </div>
</div>
@endsection

   

 