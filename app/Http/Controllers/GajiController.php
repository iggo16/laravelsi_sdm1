<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use App\Models\Pegawai;
use App\Models\Tunjangan;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

use PDF;

class GajiController extends Controller
{
    public function index()
    {
        $gaji = Gaji::with('tunjangan')->get();
        $gaji = Gaji::with('pegawai')->get();
        return view('gaji.index', compact('gaji'));
    }

    public function create()
    {
        $peg = Pegawai::all();
        $tj = Tunjangan::all();
        return view('gaji.create', compact(['peg','tj']));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jumlah_gaji' => 'required',
            'total_gaji' => 'required',
            'tanggal_gaji' => 'required|date',
        ]);

        Gaji::create($request->all());

        return redirect()->route('gaji.index')->with('success', 'gaji berhasil ditambahkan');
    }

    public function show($id)
    {
        $gaji = Gaji::find($id);
        return view('gaji.show', compact('gaji'));
    }

    public function edit($id)
    {

        $tj = tunjangan::all();
        $peg = Pegawai::all();
        $gaji = gaji::with('pegawai')->find($id); 
        $gaji = gaji::with('tunjangan')->find($id);   
        return view('gaji.edit',compact(['gaji', 'peg','tj']));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jumlah_gaji' => 'required',
            'total_gaji' => 'required',
            'tanggal_gaji' => 'required|date',
        ]);

        $gaji = Gaji::find($id);
        $gaji->update($request->all());

        return redirect()->route('gaji.index')->with('success', 'gaji berhasil diperbarui');
    }

    public function destroy($id)
    {
        Gaji::find($id)->delete();

        return redirect()->route('gaji.index')->with('success', 'gaji berhasil dihapus');
    }
    public function cetak_pdf()
    {
    	$gaji = Gaji::all();
 
    	$pdf = PDF::loadview('gaji.gaji_pdf',['gaji.index'=>$gaji]);
    	return $pdf->download('laporan-gaji-pdf');
    }
    public function printPDF()
{
    $gaji = Gaji::all(); // Ganti YourModel dengan model yang sesuai

    $pdf = PDF::loadView('gaji.printPDF', compact('gaji')); // Ganti "gaji.print" dengan view yang sesuai

    return $pdf->stream('Data Pengguna.pdf');
}
}
