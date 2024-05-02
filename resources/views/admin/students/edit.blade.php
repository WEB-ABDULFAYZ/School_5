@extends('layouts.admin')
@include('layouts.sidebar')
@section('content')
    <div class="main-content">
        
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('admin.students.index') }}" class="btn btn-primary"><i class="fa-solid fa-arrow-left"></i> Orqaga </a>

                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.students.update', $student->id)  }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="student">O'quvchilar</label>
                                <input type="student" id="student" class="form-control" name="student" placeholder="student sonini kiriting" value="{{ $student->student }}">
                            </div>
                            <div class="form-group">
                                <label for="graduates">Bitiruvchilar</label>
                                <input type="graduates" id="graduates" class="form-control" name="graduates" placeholder="graduates" value="{{ $student->graduates }}">
                            </div>
                            <div class="form-group">
                                <label for="classes">Sinflar</label>
                                <input type="classes" id="adclassesdress" class="form-control" name="classes" placeholder="classes sonini kiritng" value="{{ $student->classes }}">
                            </div>
                            <div class="form-group">
                                <label for="teachers">O'qituvchilar</label>
                                <input type="teachers" id="adclassesdress" class="form-control" name="teachers" placeholder="O'qituvchilar sonini kiritng" value="{{ $student->teachers }}">
                            </div>
                            <div class="form-group">
                                <label for="sequence">Navbatliligi</label>
                                <input type="sequence" id="adclassesdress" class="form-control" name="sequence" placeholder="Navbatliligini kiritng" value="{{ $student->sequence }}">
                            </div>
                            <div class="form-group">
                                <label for="first_class">1-sinf qabul soni</label>
                                <input type="first_class" id="adclassesdress" class="form-control" name="first_class" placeholder="Birinchi sinflarning sonini kiritng" value="{{ $student->first_class }}">
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-success mr-1" type="submit">O'zgartirish <i class="fa-solid fa-pen"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
