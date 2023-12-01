@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>Upload Fhoto</h1>
                <form action="{{ route('upload.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    {{-- <div class="col-auto">
                        <label for="inputPassword6" class="col-form-label">Password</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="inputPassword6" class="form-control">
                    </div> --}}
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Upload Fhoto</label>
                        <input class="form-control" type="file" id="formFile" name="foto">
                    </div>
                    <button class="btn btn-outline-primary" type="submit">Upload</button>
                </form>
            </div>
        </div>
    </div>
@endsection
