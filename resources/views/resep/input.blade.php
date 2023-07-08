@extends('template/home')
@section('isi')

    {{-- session alert --}}
    @if ($message = Session::get('berhasil'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ $message }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if(session()->has('gagal'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('gagal') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h5>Tulis Resepmu ...</h5>

    <form action="/inputResep" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row py-3">
            <div class="col-12">
                <label for="exampleDataList" class="form-label"><b>Judul</b></label>
                <input class="form-control" id="judul" name="judul">
            </div>
        </div>
        <div class="row py-3">
            <div class="col-12">
                <label for="exampleDataList" class="form-label"><b>Diskripsi</b></label>
                <textarea class="form-control" id="diskripsi" name="diskripsi" rows="3" style="height: 220px"></textarea>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-12 mb-3" id="id">
                <label for="exampleDataList" class="form-label"><b>Bahan - Bahan</b></label>
                <input type="text" name="bahan[]" class="form-control" />
            </div>
            <div class="col-12">
                <button id="tambah" type="button" name="tambah" class="btn btn-light"><b>+ tambah item</b></button>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-12 mb-3" id="lkh">
                <label for="exampleDataList" class="form-label"><b>Langkah Pembuatan</b></label>
                <input type="text" name="langkah[]" class="form-control" />
            </div>
            <div class="col-12">
                <button id="item" type="button" name="item" class="btn btn-light"><b>+ tambah item</b></button>
            </div>
        </div>
        <div class="row py-3">
            <div class="col-12">
                <label for="exampleDataList" class="form-label"><b>Foto</b></label>
                <input class="form-control" type="file" name="foto" id="foto">
            </div>
        </div>
        <div class="row py-3">
            <button class="btn btn-secondary" type="submit"><b>Terbitkan Resep</b></button>
        </div>
    </form>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            var html = '<input type="text" name="bahan[]" class="form-control" />';
            var lk = '<input type="text" name="langkah[]" class="form-control" />';
            var max = 30;
            var x = 1;
    
            $("#tambah").click(function(){
            if(x <= max){
    
                $("#id").append(html);
    
                x++;
    
            }
    
            });

            $("#item").click(function(){
            if(x <= max){
    
                $("#lkh").append(lk);
    
                x++;
    
            }
    
            });
        });
    </script>
@endsection