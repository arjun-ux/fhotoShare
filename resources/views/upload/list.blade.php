@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <a class="btn btn-primary" href="{{ route('upload') }}">Upload</a>

            </div>
            @foreach ($fotos as $f)
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-title">{{ $f->name }}</div>
                        <div class="card-body">
                            <img src="{{ asset('storage/img/'.$f->foto) }}" alt="foto" width="150px" height="150px">
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
