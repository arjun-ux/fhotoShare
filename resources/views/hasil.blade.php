
{{-- <h1>{{ $fotos->name }}</h1> --}}
@extends('layouts.main')
@section('content')
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-6 mb-4 text-center">
                @foreach($fotos as $f)
                <h5>Semoga Foto Sesuai Dengan Expextasi Anda.</h5>
                        <div class="card">

                            <img src="{{ asset('storage/img/'.$f->foto) }}" class="flex img-thumbnail card-img-top" alt="{{ $f->name}}" width="900px" height="400px">
                            <div class="card-body text-center">
                                <div class="card-title">
                                    <h6><b>{{ $f->name }}</b></h6>
                                    <a class="btn btn-outline-warning" href="{{ route('home') }}">Back</a>
                                    <a class="btn btn-outline-primary" href="{{ route('downloadFoto', $f->id) }}">Download</a>
                                </div>
                            </div>
                        </div>

                @endforeach
            </div>
        </div>
    </div>
@endsection
