<?php

namespace App\Http\Controllers;

use App\Models\Pengembangan;
use App\Models\Pegawai;
use App\Models\Pendidikan;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

use PDF;

class PengembanganController extends Controller
{
    public function index()
    {
        $pengembangan = Pengembangan::with('pegawai')->get();
        $pengembangan = Pengembangan::with('pendidikan')->get();
        return view('pengembangan.index', compact('pengembangan'));
    }

    public function create()
    {
        $peg = Pegawai::all();
        $pd = Pendidikan::all();
        return view('pengembangan.create', compact(['peg','pd']));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pengembangan_diri' => 'required',
        ]);

        Pengembangan::create($request->all());

        return redirect()->route('pengembangan.index')->with('success', 'pengembangan berhasil ditambahkan');
    }

    public function show($id)
    {
        $pengembangan = Pengembangan::find($id);
        return view('pengembangan.show', compact('pengembangan'));
    }

    public function edit($id)
    {
        $pd = Pendidikan::all();
        $peg = Pegawai::all();
        $pengembangan = Pengembangan::with('pegawai')->find($id);
        $pengembangan = Pengembangan::with('pendidikan')->find($id);
        return view('pengembangan.edit',compact(['pengembangan', 'peg','pd']));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pengembangan_diri' => 'required',
        ]);

        $pengembangan = Pengembangan::find($id);
        $pengembangan->update($request->all());

        return redirect()->route('pengembangan.index')->with('success', 'pengembangan berhasil diperbarui');
    }

    public function destroy($id)
    {
        Pengembangan::find($id)->delete();

        return redirect()->route('pengembangan.index')->with('success', 'pengembangan berhasil dihapus');
    }
    public function cetak_pdf()
    {
    	$pengembangan = Pengembangan::all();
 
    	$pdf = PDF::loadview('pengembangan.pengembangan_pdf',['pengembangan.index'=>$pengembangan]);
    	return $pdf->download('laporan-pengembangan-pdf');
    }
    public function printPDF()
{
    $pengembangan = Pengembangan::all(); // Ganti YourModel dengan model yang sesuai

    $pdf = PDF::loadView('pengembangan.printPDF', compact('pengembangan')); // Ganti "pengembangan.print" dengan view yang sesuai

    return $pdf->stream('Data Pengguna.pdf');
}
}
