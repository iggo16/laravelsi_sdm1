<?php

namespace App\Http\Controllers;

use App\Models\Tunjangan;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

use PDF;

class TunjanganController extends Controller
{
    public function index()
    {
        
        $tunjangan = Tunjangan::all();
        return view('tunjangan.index', compact('tunjangan'));
    }

    public function create()
    {
        return view('tunjangan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'jenis_tunjangan' => 'required',
            'jumlah_tunjangan' => 'required',
        ]);

        Tunjangan::create($request->all());

        return redirect()->route('tunjangan.index')->with('success', 'tunjangan berhasil ditambahkan');
    }

    public function show($id)
    {
        $tunjangan = Tunjangan::find($id);
        return view('tunjangan.show', compact('tunjangan'));
    }

    public function edit($id)
    {
        $tunjangan = Tunjangan::find($id);
        return view('tunjangan.edit', compact('tunjangan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jenis_tunjangan' => 'required',
            'jumlah_tunjangan' => 'required',
        ]);

        $tunjangan = Tunjangan::find($id);
        $tunjangan->update($request->all());

        return redirect()->route('tunjangan.index')->with('success', 'tunjangan berhasil diperbarui');
    }

    public function destroy($id)
    {
        Tunjangan::find($id)->delete();

        return redirect()->route('tunjangan.index')->with('success', 'tunjangan berhasil dihapus');
    }
    public function cetak_pdf()
    {
    	$tunjangan = Tunjangan::all();
 
    	$pdf = PDF::loadview('tunjangan.tunjangan_pdf',['tunjangan.index'=>$tunjangan]);
    	return $pdf->download('laporan-tunjangan-pdf');
    }
    public function printPDF()
{
    $tunjangan = Tunjangan::all(); // Ganti YourModel dengan model yang sesuai

    $pdf = PDF::loadView('tunjangan.printPDF', compact('tunjangan')); // Ganti "tunjangan.print" dengan view yang sesuai

    return $pdf->stream('Data Pengguna.pdf');
}
}
