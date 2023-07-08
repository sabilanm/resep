@extends('template/home')
@section('isi')
<h3>Resep Terbaru</h3>
<div class="col-lg-12">
    <div class="row">
        @foreach ($results as $item)
        <div class="col-md-4 mb-3">
            <div class="card">
                <img src="{{ $item->foto }}" height="200" width="300" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $item->judul }}</h5>
                  <p class="card-text">{{ $item->diskripsi }}</p>
                  <a href="/detail/{{ $item->id_resep }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
