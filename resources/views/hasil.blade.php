@foreach($fotos as $f)
<div class="col-md-3 mt-3">
    <div class="d-flex" >
        <div class="card" style="width: 500px; ">
            <img src="{{ asset('storage/img/'.$f->foto) }}" class="flex img-thumbnail card-img-top" alt="{{ $f->name}}" width="900px" height="400px">
            <div class="card-body text-center">
                <div class="card-title">
                    <h6><b>{{ $f->name }}</b></h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
