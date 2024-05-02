@extends('layouts.admin')
@include('layouts.sidebar')

@section('content')
    <div class="main-content">
        <section class="section">
            @if (session('success'))
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
                            <h3>O'qituchilar</h3>
                            <a href="{{ route('admin.teachers.create') }}" class="btn btn-success"><i class="fa-solid fa-plus"></i> Qo'shish</a>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-md">
                                    <tbody>
                                        <tr>
                                            <th class="text-center">
                                                T/R
                                            </th>
                                            <th>Ismi</th>
                                            <th>Raqami</th>
                                            <th>Email</th>
                                            <th>Roli</th>
                                            <th>Rasm</th>
                                            <th>Action</th>
                                        </tr>
                                        @foreach ($teachers as $teacher)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $teacher->name_uz }}</td>
                                                <td>{{ $teacher->phone }}</td>
                                                <td>{{ $teacher->email }}</td>
                                                <td>{{ $teacher->role_uz }}</td>
                                                <td>
                                                    <img src="/public/teacher/images/{{ $teacher->img }}" width="50px" height="50px" alt="">
                                                  </td>
                                                <td>

                                                    <a href="{{ route('admin.teachers.edit', $teacher->id) }}"
                                                        class="btn btn-primary">O'zgartirish <i class="fa-solid fa-pen"></i></a>
                                                        <a href="{{ route('admin.teachers.show', $teacher->id) }}"
                                                            class="btn btn-warning">Ko'rish <i class="fa-solid fa-eye"></i></a>
                                                    <form style="display: inline"action="{{ route('admin.teachers.destroy', $teacher->id) }}"method="POST">
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
                        {{-- Pagination --}}

                        <div class="card-footer text-right">
                            <nav class="d-inline-block">
                                <ul class="pagination mb-0">
                                    {{-- {{ $categories->links() }} --}}
                                </ul>
                            </nav>
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
