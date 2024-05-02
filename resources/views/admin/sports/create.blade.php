@extends('layouts.admin')
@include('layouts.sidebar')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    
                    <form action="{{ route('admin.sports.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('admin.sports.index') }}" class="btn btn-primary"><i
                                        class="fa-solid fa-arrow-left"></i> Orqaga </a>
                            </div>
                            <div class="card-body">
                               
                               
                                <div class="form-group">
                                    <label>Name (Uz)</label>
                                    <input type="text" class="form-control" name="name_uz"
                                        value="{{ old('name_uz') }}">
                                    @error('name_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Name (Ru)</label>
                                    <input type="text" class="form-control" name="name_ru"
                                        value="{{ old('name_ru') }}">
                                    @error('name_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Name (En)</label>
                                    <input type="text" class="form-control" name="name_en"
                                        value="{{ old('name_en') }}">
                                    @error('name_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                         
                                <div class="form-group">
                                    <label>O'qituvchi (Uz)</label>
                                    <input type="text" class="form-control" name="coach_uz"
                                        value="{{ old('coach_uz') }}">
                                    @error('coach_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>O'qituvchi (Ru)</label>
                                    <input type="text" class="form-control" name="coach_ru"
                                        value="{{ old('coach_ru') }}">
                                    @error('coach_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>O'qituvchi (En)</label>
                                    <input type="text" class="form-control" name="coach_en"
                                        value="{{ old('coach_en') }}">
                                    @error('coach_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                              
                                <div class="form-group">
                                    <label>Sinf</label>
                                    <input type="text" class="form-control" name="class"
                                        value="{{ old('class') }}">
                                    @error('class_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                {{-- Add Product DESC --}}
                              
                               
                                <div class="form-group">
                                    <label>Hafta kun (UZ)</label>
                                    <input type="text" class="form-control" name="days_uz"
                                        value="{{ old('days_uz') }}">
                                    @error('days_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Hafta kun (RU)</label>
                                    <input type="text" class="form-control" name="days_ru"
                                        value="{{ old('days_ru') }}">
                                    @error('days_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Hafta kun (EN)</label>
                                    <input type="text" class="form-control" name="days_en"
                                        value="{{ old('days_en') }}">
                                    @error('days_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Soat</label>
                                    <input type="text" class="form-control" name="time"
                                        value="{{ old('time') }}">
                                    @error('time')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="form-group">
                                    <label>Telefon Raqam</label>
                                    <input type="tel" class="form-control" name="number"
                                        value="{{ old('number') }}">
                                    @error('number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                               
                                <div class="form-group">
                                    <label>Rasm </label>
                                    <input type="file" class="form-control" name="img">
                                    @error('img')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                </div>

                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary mr-1" type="submit">Saqlash</button>
                            </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('js')
<script src="/admin/assets/bundles/select2/dist/js/select2.full.min.js"></script>
@endsection
