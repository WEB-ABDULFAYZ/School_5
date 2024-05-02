@extends('layouts.admin')
@include('layouts.sidebar')
@section('content')
    <div class="main-content">
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('admin.lessons.index') }}" class="btn btn-primary"><i
                            class="fa-solid fa-arrow-left"></i> Orqaga</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.lessons.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>To'garak nomi (Uz)</label>
                                <input type="text" class="form-control" name="title_uz"
                                    value="{{ old('title_uz') }}">
                                @error('title_uz')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>To'garak nomi (Ru)</label>
                                <input type="text" class="form-control" name="title_ru"
                                    value="{{ old('title_ru') }}">
                                @error('title_ru')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>To'garak nomi (En)</label>
                                <input type="text" class="form-control" name="title_en"
                                    value="{{ old('title_en') }}">
                                @error('title_en')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="day_uz">Kuni (uz)</label>
                                <input type="text" id="day_uz" class="form-control" name="day_uz">
                            </div>
                            <div class="form-group">
                                <label for="day_ru">Kuni (ru)</label>
                                <input type="text" id="day_ru" class="form-control" name="day_ru">
                            </div>
                            <div class="form-group">
                                <label for="day_en">Kuni (en)</label>
                                <input type="text" id="day" class="form-control" name="day_en">
                            </div>
                            <div class="form-group">
                                <label for="time">Vaqti</label>
                                <input type="text" id="time" class="form-control" name="time">
                            </div>
                            <div class="form-group">
                                <label for="teachname_uz">O'qituvchi (Uz)</label>
                                <input type="text" id="teachname_uz" class="form-control" name="teachname_uz">
                            </div>
                            <div class="form-group">
                                <label for="teachname_ru">O'qituvchi (Ru)</label>
                                <input type="text" id="teachname_ru" class="form-control" name="teachname_ru">
                            </div>
                            <div class="form-group">
                                <label for="teachname_en">O'qituvchi (En)</label>
                                <input type="text" id="teachname_en" class="form-control" name="teachname_en">
                            </div>
                            <div class="form-group">
                                <label for="class">Sinflar</label>
                                <input type="text" id="class" class="form-control" name="class">
                            </div>
                            <div class="form-group">
                                <label>Rasm </label>
                                <input type="file" class="form-control" name="img">
                                @error('img')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            </div>
                            <div class="card-footer text-right">    
                                <button class="btn btn-primary mr-1" type="submit">Saqlash</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    @endsection
