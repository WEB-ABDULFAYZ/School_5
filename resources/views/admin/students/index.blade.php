@extends('layouts.admin')
@include('layouts.sidebar')

@section('content')
    <div class="main-content">
        <section class="section">
            @if(session('success')) 
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                  <button class="close" data-dismiss="alert">
                    <span>×</span>
                  </button>
                  {{ session('success') }}
                </div>
              </div>
            @endif
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Barchasi</h3>
                            <a href="{{ route('admin.students.create') }}" class="btn btn-success"><i class="fa-solid fa-plus"></i> Qo'shish</a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tbody>
                                        <tr>
                                            <th class="text-center">
                                                T/R
                                            </th>
                                            <th>O'quvchilar</th>
                                            <th>Bitiruvchilar</th>
                                            <th>Sinflar</th>
                                            <th>O'qituvchilar</th>
                                            <th>Navbatliligi</th>
                                            <th>Birinchi sinf o'quvchilari</th>
                                            <th>Xolat</th>
                                            
                                        </tr>
                                        @foreach ($students as $student)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $student->student }}</td>
                                            <td>{{ $student->graduates }}</td>
                                            <td>{{ $student->classes }}</td>
                                            <td>{{ $student->teachers }}</td>
                                            <td>{{ $student->sequence }}</td>
                                            <td>{{ $student->first_class }}</td>

                                            <td>
                                                <a href="{{ route('admin.students.edit', $student->id) }}" class="btn btn-primary">O'zgartirish <i class="fa-solid fa-pen"></i></a>
                                                <form style="display: inline"
                                                    action="{{ route('admin.students.destroy', $student->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('O\'chirishni xohlaysizmi')">O'chirish <i class="fa-solid fa-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
<style>
    .card-header{
        display: flex;
        justify-content: space-between; 
    }
</style>