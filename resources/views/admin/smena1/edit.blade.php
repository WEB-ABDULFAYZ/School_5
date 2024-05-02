@extends('layouts.admin')
@include('layouts.sidebar')
@section('content')
    <div class="main-content">
        <h1>smena1</h1>
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-.header">
                        <a href="{{ route('admin.smena1.index') }}" class="btn btn-primary">Orqaga</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.smena1.update', $class->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="classname">classname</label>
                                <input type="text" id="classname" class="form-control" name="classname" placeholder="classname kiriting" value="{{ $class->classname }}">
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
