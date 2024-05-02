@extends('layouts.admin')
@include('layouts.sidebar')
@section('content')
    <div class="main-content">
        <h1>Teacher Qo'shmoq</h1>
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-.header">
                        <a href="{{ route('admin.sports.index') }}" class="btn btn-primary">Orqaga</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.sports.update', $sport->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">name</label>
                                <input type="name" id="name" class="form-control" name="name" placeholder="name kiriting" value="{{ $sport->name }}">
                            </div>
                            <div class="form-group">
                                <label for="days">days</label>days
                                <input type="text" id="days" class="form-control" name="days" placeholder="days" value="{{ $sport->days }}">
                            </div>
                            <div class="form-group">
                                <label for="time">Time</label>
                                <input type="text" id="time" class="form-control" name="time" placeholder="time kiritng" value="{{ $sport->time }}">
                            </div>  
                             <div class="form-group">
                                <label for="coach">coach</label>
                                <input type="text" id="coach" class="form-control" name="coach" placeholder="coach kiritng" value="{{ $sport->coach }}">
                            </div>
                            <div class="form-group">
                                <label for="number">number</label>
                                <input type="text" id="number" class="form-control" name="number" placeholder="number kiritng" value="{{ $sport->number }}">
                            </div>
                            <div class="form-group">
                                <label for="class">Class</label>
                                <input type="text" id="role" class="form-control" name="class" placeholder="class kiritng" value="{{ $sport->class }}">
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
