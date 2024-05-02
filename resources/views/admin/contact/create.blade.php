@extends('layouts.admin')
@include('layouts.sidebar')
@section('content')
    <div class="main-content">
        <h1>Contact Qo'shmoq</h1>
        <div class="row">
            <div class="col-8">
                <div class="card">
                    <div class="card-.header">
                        <a href="{{ route('admin.contact.index') }}" class="btn btn-primary">Orqaga</a>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.contact.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="number">Number</label>
                                <input type="number" id="number" class="form-control" name="number" placeholder="number">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control" name="email" placeholder="email">
                            </div>
                            <div class="form-group">
                                <label for="address_uz">Manzil Uz</label>
                                <input type="text" id="address" class="form-control" name="address" placeholder="address_uz">
                            </div>
                            <div class="form-group">
                                <label for="address_ru">Manzil Ru</label>
                                <input type="text" id="address_ru" class="form-control" name="address_ru" placeholder="address_ru">
                            </div>
                            <div class="form-group">
                                <label for="address_en">Manzil En</label>
                                <input type="text" id="address_en" class="form-control" name="address_en" placeholder="address_en">
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
