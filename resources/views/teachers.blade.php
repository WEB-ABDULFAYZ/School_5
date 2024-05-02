@extends('layouts.index')
@section('content')
    <div class="mainContent withImage">
        <div class="imageHeader">
            <div class="container">
                <h1 class="pageTitle">@lang('words.teachers')</h1>
                <nav aria-label="breadcrumb">
                    <ol id="w5" class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">@lang('words.home')</a></li>
                        <li class="breadcrumb-item active" aria-current="page">@lang('words.teachers')</li>
                    </ol>
                </nav>
                <div class="imageBox">
                    <img alt="." src="/uploads/2021/10/2ByJDMr48qjDTWgnB9gVMCnN2N-jgE35.jpg">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="leadersList">
            @foreach ($teachers as $teacher)            

                <a href="{{ route('teacher_show',$teacher->id) }}">
                    <img alt="image" src="/public/teacher/images/{{ $teacher->img }}">
                    <div class="details">
                        <h1>{{ $teacher['name_' . \App::getLocale()]  }}</h1>
                        <span>{{ $teacher['role_' . \App::getLocale()]  }}</span>
                    </div>
                </a>
                
            @endforeach

            </div>
        </div>
    </div>

   @endsection

   <style>
    .leadersList{
        display: flex;
    }
   </style>