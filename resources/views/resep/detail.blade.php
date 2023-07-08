@extends('template/home')
@section('isi')
<div class="row">
    @foreach ($results as $item)
    <?php 
    $bahan = $item->bahan;
    $array = explode("|", $bahan);
    $langkah = $item->langkah;
    $arrayy = explode("|", $langkah);
    // dd(count($array));
    // $array = array_slice(explode(',', $bahan), 0, 3)
    ?>
        <div class="row mb-5">
            <div style="max-height: 350px; overflow: hidden;">
                <img src="{{ asset('storage/'.$item->foto) }}" alt="foto">
            </div>
        </div>
        <div class="row mb-3">
            <h3>{{ $item->judul }}</h3>
            <label>{{ $item->diskripsi }}</label>
        </div>
        <div class="row mb-3">
            <div class="container">
                <h3>Bahan - Bahan</h3>
                <ol>
                    @for ($i = 0; $i < count($array); $i++)
                    <li>{{ $array[$i] }}</li>
                    @endfor
                </ol>
            </div>
        </div>
        <div class="row mb-3">
            <div class="container">
                <h3>Bahan - Bahan</h3>
                <ol>
                    @for ($i = 0; $i < count($arrayy); $i++)
                    <li>{{ $arrayy[$i] }}</li>
                    @endfor
                </ol>
            </div>
        </div>
    @endforeach
</div>
@endsection
