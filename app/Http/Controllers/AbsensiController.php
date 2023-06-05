<?php

namespace App\Http\Controllers;
use App\Models\Absensi;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use PDF;

class AbsensiController extends Controller
{
    public function index()
    {
        $absensi = Absensi::with('pegawai')->get();
    return view('absensi.index', compact('absensi'));
    }

    public function create()
    {
        $peg = Pegawai::all();
        return view('absensi.create', compact('peg'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jam_masuk' => 'required',
            'jam_istirahat' => 'required',
            'tanggal_kerja' => 'required|date',
        ]);

        Absensi::create($request->all());

        return redirect()->route('absensi.index')->with('success', 'absensi berhasil ditambahkan');
    }

    public function show($id)
    {
        $absensi = Absensi::find($id);
        return view('absensi.show', compact('absensi'));
    }

    public function edit($id)
    {
        $peg = Pegawai::all();
        $absensi = Absensi::with('pegawai')->find($id);   
        return view('absensi.edit',compact(['absensi', 'peg']));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jam_masuk' => 'required',
            'jam_istirahat' => 'required',
            'tanggal_kerja' => 'required|date',
        ]);

        $absensi = Absensi::find($id);
        $absensi->update($request->all());

        return redirect()->route('absensi.index')->with('success', 'absensi berhasil diperbarui');
    }

    public function destroy($id)
    {
        Absensi::find($id)->delete();

        return redirect()->route('absensi.index')->with('success', 'absensi berhasil dihapus');
    }
    public function cetak_pdf()
    {
    	$absensi = Absensi::all();
 
    	$pdf = PDF::loadview('absensi.absensi_pdf',['absensi.index'=>$absensi]);
    	return $pdf->download('laporan-absensi-pdf');
    }
    public function printPDF()
{
    $absensi = Absensi::all(); // Ganti YourModel dengan model yang sesuai

    $pdf = PDF::loadView('absensi.printPDF', compact('absensi')); // Ganti "absensi.print" dengan view yang sesuai

    return $pdf->stream('Data Pengguna.pdf');
}
}
