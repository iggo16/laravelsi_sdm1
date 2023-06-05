<?php

namespace App\Http\Controllers;

use App\Models\Ijin;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

use PDF;

class ijinController extends Controller
{
    public function index()
    {
        $ijin = Ijin::all();
        return view('ijin.index', compact('ijin'));
    }

    public function create()
    {
        $peg = Pegawai::all();
        return view('ijin.create', compact(peg));
    }

    public function store(Request $request)
    {
        $request->validate([
            'keterangan' => 'required'
        ]);

        Ijin::create($request->all());

        return redirect()->route('ijin.index')->with('success', 'ijin berhasil ditambahkan');
    }

    public function show($id)
    {
        $ijin = Ijin::find($id);
        return view('ijin.show', compact('ijin'));
    }

    public function edit($id)
    {
        $ijin = Ijin::find($id);
        return view('ijin.edit', compact('ijin'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'keterangan' => 'required',
        ]);

        $ijin = Ijin::find($id);
        $ijin->update($request->all());

        return redirect()->route('ijin.index')->with('success', 'ijin berhasil diperbarui');
    }

    public function destroy($id)
    {
        Ijin::find($id)->delete();

        return redirect()->route('ijin.index')->with('success', 'ijin berhasil dihapus');
    }
    public function cetak_pdf()
    {
    	$ijin = Ijin::all();
 
    	$pdf = PDF::loadview('ijin.ijin_pdf',['ijin.index'=>$ijin]);
    	return $pdf->download('laporan-ijin-pdf');
    }
    public function printPDF()
{
    $ijin = Ijin::all(); // Ganti YourModel dengan model yang sesuai

    $pdf = PDF::loadView('ijin.printPDF', compact('ijin')); // Ganti "ijin.print" dengan view yang sesuai

    return $pdf->stream('Data Pengguna.pdf');
}
}
