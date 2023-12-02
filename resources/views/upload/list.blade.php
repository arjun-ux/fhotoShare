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
            <div class="col-md-8">
                <h1>Daftar Foto Pengunjung</h1>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            {{-- <th>Pict</th> --}}
                            <th>Kode Download</th>
                            <th>Tanggal Upload</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fotos as $f)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            {{-- <td><img src="/storage/img/{{$f->foto}}" alt="" width="50"></td> --}}
                            <td>{{ $f->name }}</td>
                            <td>{{ $f->created_at }}</td>
                            <td>
                                <a href="{{ route('downloadFoto', $f->id) }}">Download</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
