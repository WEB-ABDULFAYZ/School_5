@extends('layouts.admin')
@include('layouts.sidebar')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="row">
                <div class="col-9">
                    <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h4>Yangiliklar</h4>
                            </div>
                            <div class="card-body">


                                <div class="form-group">
                                    <label>Title (Uz)</label>
                                    <input type="text" class="form-control" name="title_uz"
                                        value="{{ old('title_uz') }}">
                                    @error('title_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Title (Ru)</label>
                                    <input type="text" class="form-control" name="title_ru"
                                        value="{{ old('title_ru') }}">
                                    @error('title_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Title (En)</label>
                                    <input type="text" class="form-control" name="title_en"
                                        value="{{ old('title_en') }}">
                                    @error('title_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Text (Ru)</label>
                                    <textarea type="text" class="form-control" name="text_ru" value="{{ old('text_ru') }}" id="editor3" rows="50" cols="100"></textarea>
                                    @error('text_ru')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <script>
                                    ClassicEditor
                                        .create(document.querySelector('#editor3'))
                                        .then(editor => {
                                            console.log(editor);
                                        })
                                        .catch(error => {
                                            console.error(error);
                                        });
                                </script>
                                <div class="form-group">
                                    <label>Text (Uz)</label>
                                    <textarea class="form-control" name="text_uz" value="{{ old('text_uz') }}" id="editor1" rows="50" cols="100">
                                    </textarea>

                                    @error('text_uz')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <script>
                                    ClassicEditor
                                        .create(document.querySelector('#editor1'))
                                        .then(editor => {
                                            console.log(editor);
                                        })
                                        .catch(error => {
                                            console.error(error);
                                        });
                                </script>

                                <div class="form-group">
                                    <label>Text (En)</label>
                                    <textarea type="text" class="form-control" name="text_en" value="{{ old('text_en') }}" id="editor2"></textarea>
                                    @error('text_en')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <script>
                                    ClassicEditor
                                        .create(document.querySelector('#editor2'))
                                        .then(editor => {
                                            console.log(editor);
                                        })
                                        .catch(error => {
                                            console.error(error);
                                        });
                                </script>
                                <div class="form-group">
                                    <label>Rasm </label>
                                    <input type="file" class="form-control" name="img">
                                    @error('img')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                            <div class="card-footer text-right">
                                <button class="btn btn-primary mr-1" type="submit">Save</button>
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
<style>

</style>
