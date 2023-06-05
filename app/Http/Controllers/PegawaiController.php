<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

use PDF;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('pegawai.index', compact('pegawai'));
    }

    public function create()
    {
        return view('pegawai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'tanggal_lahir' => 'required|date',
        ]);

        Pegawai::create($request->all());

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan');
    }

    public function show($id)
    {
        $pegawai = Pegawai::find($id);
        return view('pegawai.show', compact('pegawai'));
    }

    public function edit($id)
    {
        $pegawai = Pegawai::find($id);
        return view('pegawai.edit', compact('pegawai'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
            'tanggal_lahir' => 'required|date',
        ]);

        $pegawai = Pegawai::find($id);
        $pegawai->update($request->all());

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil diperbarui');
    }

    public function destroy($id)
    {
        Pegawai::find($id)->delete();

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil dihapus');
    }
    public function cetak_pdf()
    {
    	$pegawai = Pegawai::all();
 
    	$pdf = PDF::loadview('pegawai.pegawai_pdf',['pegawai.index'=>$pegawai]);
    	return $pdf->download('laporan-pegawai-pdf');
    }
    public function printPDF()
{
    $pegawai = Pegawai::all(); // Ganti YourModel dengan model yang sesuai

    $pdf = PDF::loadView('pegawai.printPDF', compact('pegawai')); // Ganti "pegawai.print" dengan view yang sesuai

    return $pdf->stream('Data Pengguna.pdf');
}
}
