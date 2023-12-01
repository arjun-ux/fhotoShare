@extends('layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-3 text-center mb-3 mt-3">
                {{-- <img class='img-fluid' src="img/pondo.png" alt="logo" width='120'> --}}
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4">
                <form class="form d-flex" method="GET" action="{{ route('hasilFoto') }}" role="search">
                    <input class="form-control form-control-sm" type="search" id="input" name='name'
                    style="height: 20px;" placeholder="Search...">
                </form>
            {{-- input ke ajax dengan id=input --}}
            </div>
        </div>
    </div>
@endsection
