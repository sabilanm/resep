<?php

namespace App\Http\Controllers;

use App\Models\resepModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class resepContoroller extends Controller
{
    //
    function inputResep(Request $request) {
        $judul = $request->input('judul');
        $diskripsi = $request->input('diskripsi');
        $bahan = $request->input('bahan');
        $langkah = $request->input('langkah');
        $foto = $request->file('foto')->store('fotoResep');
        $fotoo = $request->file('foto')->move('fotoResep',$foto);
        $bhn = json_encode($bahan);
        $lang = json_encode($langkah);
        $bhann= implode('|', $bahan);
        $langg= implode('|', $langkah);
        // dd($bhann);

        $sql = resepModel::create([
            'judul' => $judul,
            'diskripsi' => $diskripsi,
            'bahan' => $bhann,
            'langkah' => $langg,
            'foto' => $fotoo,
            // 'suka'=>''
        ]);
        if ($sql) {
            return redirect('/input')->with(['berhasil' => 'Resep Berhasil ditambah']);
        }else {
            return redirect('/input')->with(['gagal' => 'Resep gagal ditambah']);
        }
    }

    function home() {
        $query = DB::table('resep')->orderByRaw('id_resep DESC')->get();
        return view('resep/home', ['results'=>$query]);
    }

    function detail($id) {
        $query = DB::table('resep')->where('id_resep','=',$id)->get();
        // dd($query);
        return view('resep/detail', ['results'=>$query]);
    }
}
