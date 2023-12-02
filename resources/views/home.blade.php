@extends('layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-3 text-center mb-3 mt-3">
                {{-- <img class='img-fluid' src="img/pondo.png" alt="logo" width='120'> --}}
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 text-center">
                <h5>Masukan Kode Yang Diberikan Fotografer</h5>
                <form class="form d-flex" method="GET" action="{{ route('hasilFoto') }}" role="search">
                    <input class="form-control form-control-sm" type="search" id="input" name='name'
                    style="height: 20px;" placeholder="Kode 6 Huruf Kombinasi Angka">
                    <button class="btn btn-outline-success btn-sm" type="submit">Cari</button>
                </form>
            {{-- input ke ajax dengan id=input --}}
            </div>
        </div>
    </div>
    {{-- @include('hasil') --}}
@endsection
