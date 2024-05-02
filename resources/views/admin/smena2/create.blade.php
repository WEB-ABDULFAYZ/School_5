    @extends('layouts.admin')
    @include('layouts.sidebar')
    
    @section('content')
        <div class="main-content">
            <section class="section">
                <div class="row">
                    <div class="col-12">
                        <form action="{{ route('admin.smena2.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <h4>2-smena</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>classname</label>
                                        <input type="text" class="form-control" name="classname"
                                            value="{{ old('classname') }}">
                                        @error('classname')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Rasm </label>
                                        <input type="file" class="form-control" name="image">
                                        @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </div>
    
                                </div>
                                <div class="card-footer text-right">
                                    <button class="btn btn-primary mr-1" type="submit">Save</button>
                                </div>
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
    