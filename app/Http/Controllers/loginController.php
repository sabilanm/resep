<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //registrasi akun
    function simpan(Request $request) {
        $sql = User::create([
            'nama'=>$request->input('nama'),
            'username'=>$request->input('username'),
            'password'=>bcrypt($request->input('password'))
        ]);
        if ($sql) {
            return redirect('/register')->with(['berhasil' => 'Hak akses Berhasil ditambah']);
        }
        else {
            return redirect('/register')->with(['gagal' => 'Hak akses gagal']);
        }
    }

    // login
    function masuk(Request $request) {

        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }
        return back()->with('gagal','login gagal');
    }

    function logout(Request $request) {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
