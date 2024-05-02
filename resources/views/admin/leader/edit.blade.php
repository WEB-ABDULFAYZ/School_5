@extends('layouts.admin')
@include('layouts.sidebar')
@section('content')
    <div class="main-content">
        <h1>Direktor o'zgartirmoq</h1>
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('admin.leaders.index') }}" class="btn btn-primary">Orqaga</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.leaders.update', $leader->id)  }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name_uz">Ism (UZ)</label>
                                <input type="text" id="name_uz" class="form-control" name="name_uz" placeholder="ism kiriting" value="{{ $leader->name_uz }}">
                            </div>
                            <div class="form-group">
                                <label for="name_ru">Имя (RU)</label>
                                <input type="text" id="name_en" class="form-control" name="name_ru" placeholder="ism kiriting" value="{{ $leader->name_ru }}">
                            </div>
                            <div class="form-group">
                                <label for="name_en">Name (EN)</label>
                                <input type="text" id="name_en" class="form-control" name="name_en" placeholder="ism kiriting" value="{{ $leader->name_en }}">
                            </div>
                            <div class="form-group">
                                <label for="phone">Telefon raqam</label>
                                <input type="number" id="phone" class="form-control" name="phone" placeholder="phone" value="{{ $leader->phone }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Pochta</label>
                                <input type="email" id="email" class="form-control" name="email" placeholder="email kiritng" value="{{ $leader->email }}">
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary mr-1" type="submit">O'zgartirish</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    @endsection
