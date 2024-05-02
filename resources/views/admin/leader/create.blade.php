@extends('layouts.admin')
@include('layouts.sidebar')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('admin.leaders.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                                <div class="card-header">
                                    <a href="{{ route('admin.leaders.index') }}" class="btn btn-primary"><i
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
                                    <label>email</label>
                                    <input type="email" class="form-control" name="email"
                                        value="{{ old('email') }}">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>role (Ru)</label>
                                    <input type="text" class="form-control" name="role_ru"
                                        value="{{ old('role_ru') }}">
                                    @error('role_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>role (Uz)</label>
                                    <input type="text" class="form-control" name="role_uz"
                                        value="{{ old('role_uz') }}">
                                    @error('role_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>role (En)</label>
                                    <input type="text" class="form-control" name="role_en"
                                        value="{{ old('role_en') }}">
                                    @error('role_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Telefon Raqam</label>
                                    <input type="tel" class="form-control" name="phone"
                                        value="{{ old('phone') }}">
                                    @error('phone')
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

