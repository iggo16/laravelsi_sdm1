<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Mpegawai;
use Session;

class EmployeesController extends Controller
{
    public function Tpegawai()
    {
        return view('Tpegawai');
    }
    
    public function actionTpegawai(Request $request)
    {
        $Mpegawai = Mpegawai::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
        ]);
        Session::flash('message', 'Register Berhasil. Akun Anda sudah Aktif silahkan Login menggunakan name dan password.');
        return redirect('Tpegawai');
    }
}