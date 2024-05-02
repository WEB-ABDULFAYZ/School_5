@extends('layouts.admin')
@include('layouts.sidebar')
@section('content')
    <div class="main-content">
        <h1>O'qituvchi ozgartirmoq</h1>
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-.header">
                        <a href="{{ route('admin.teachers.index') }}" class="btn btn-primary">Orqaga</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.teachers.update', $teacher->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name (uz)</label>
                                <input type="name" id="name" class="form-control" name="name_uz" placeholder="name kiriting" value="{{ $teacher->name_uz }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Name (ru)</label>
                                <input type="name" id="name" class="form-control" name="name_ru" placeholder="name kiriting" value="{{ $teacher->name_ru }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Name (en)</label>
                                <input type="name" id="name" class="form-control" name="name_en" placeholder="name kiriting" value="{{ $teacher->name_en }}">
                            </div>
                            <div class="form-group">
                                <label for="name">Rasm</label>
                                <input type="file" id="name" class="form-control" name="image" placeholder="rasm yuklang" value="{{ $teacher->img }}">
                            </div>
                            <div class="form-group">
                                <label for="phone">Telefon</label>
                                <input type="number" id="phone" class="form-control" name="phone" placeholder="phone" value="{{ $teacher->phone }}">
                            </div>
                            <div class="form-group">
                                <label for="email">Pochta</label>
                                <input type="email" id="email" class="form-control" name="email" placeholder="email kiritng" value="{{ $teacher->email }}">
                            </div>
                            <div class="form-group">
                                <label for="role">Role (uz)</label>
                                <input type="text" id="role" class="form-control" name="role_uz" placeholder="role kiritng" value="{{ $teacher->role_uz }}">
                            </div>
                            <div class="form-group">
                                <label for="role">Role (ru)</label>
                                <input type="text" id="role" class="form-control" name="role_ru" placeholder="role kiritng" value="{{ $teacher->role_ru }}">
                            </div>
                            <div class="form-group">
                                <label for="role">Role (en)</label>
                                <input type="text" id="role" class="form-control" name="role_en" placeholder="role kiritng" value="{{ $teacher->role_en }}">
                            </div>
                            
                            <div class="card-footer text-right">
                                <button class="btn btn-primary mr-1" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    @endsection

