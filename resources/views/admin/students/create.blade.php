@extends('layouts.admin')
@include('layouts.sidebar')
@section('content')
    <div class="main-content">

        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('admin.students.index') }}" class="btn btn-primary"><i
                                class="fa-solid fa-arrow-left"></i> Orqaga </a>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.students.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="student">O'quvchilar soni</label>
                                <input type="text" id="student" class="form-control" name="student"
                                    placeholder="O'quvchilar sonini kiriting">
                                @error('student')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="graduates">Bitiruvchilar soni</label>
                                <input type="text" id="graduates" class="form-control" name="graduates"
                                    placeholder="Bitiruvchilar sonini kiritng">
                                @error('graduates')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="classes">Sinflar soni</label>
                                <input type="text" id="adclassesdress" class="form-control" name="classes"
                                    placeholder="Sinflar sonini kiritng">
                                @error('classes')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="teachers">O'qituvchilar soni</label>
                                <input type="text" id="adclassesdress" class="form-control" name="teachers"
                                    placeholder="O'qituvchilar sonini kiritng">
                                @error('teachers')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="sequence">Navbatliligi</label>
                                <input type="text" id="adclassesdress" class="form-control" name="sequence"
                                    placeholder="Navbatliligini kiritng">
                                @error('sequence')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="first_class">Birinchi sinf qabul soni</label>
                                <input type="text" id="adclassesdress" class="form-control" name="first_class"
                                    placeholder="Birinchi sinflarning sonini kiritng">
                                @error('first_class')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-success" type="submit"><i class="fa-solid fa-plus"></i> Saqlash
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    @endsection
