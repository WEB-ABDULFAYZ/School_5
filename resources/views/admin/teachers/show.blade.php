@extends('layouts.admin')
@include('layouts.sidebar')

@section('content')
    <div class="main-content">
        <div class="header">
            <h1>O'qituvchi haqida</h1>
            <a href="{{ route('admin.teachers.index') }}" class="btn btn-dark">Orqaga</a>
        </div>
            
        <section class="section center">
            <img src="/public/teacher/images/{{ $teachers->img }}" width="330px" height="500px" alt="">
            <div class="d">
                <h1>{{$teachers->name_uz}}</h1>
            <h2>+998 {{$teachers->phone}}</h2>
            <h3>{{$teachers->email}}</h3>
            <hr>
            <h6>{{$teachers->role_uz}}</h6>

            </div>

        </section>
    </div>
@endsection

<style>
    .center{
        display: flex;
        align-items: center;
        justify-content: center;
        column-gap: 50px;
    }
    .d{
        row-gap: 15px;
    }
    .header{
        display: flex;
        padding: 20px 50px;
        margin: -58px -30px;
        align-items: center;
        justify-content: space-between;
        background-color: rgba(174, 173, 173, 0.502);
        margin-bottom: 40px;
    }
</style>
