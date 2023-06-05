<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

use PDF;

class PendidikanController extends Controller
{
    public function index()
    {
        $pendidikan = Pendidikan::all();
        return view('pendidikan.index', compact('pendidikan'));
    }

    public function create()
    {
        return view('pendidikan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pendidikan_terakhir' => 'required',
        ]);

        Pendidikan::create($request->all());

        return redirect()->route('pendidikan.index')->with('success', 'pendidikan berhasil ditambahkan');
    }

    public function show($id)
    {
        $pendidikan = Pendidikan::find($id);
        return view('pendidikan.show', compact('pendidikan'));
    }

    public function edit($id)
    {
        $pendidikan = Pendidikan::find($id);
        return view('pendidikan.edit', compact('pendidikan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pendidikan_terakhir' => 'required',
        ]);

        $pendidikan = Pendidikan::find($id);
        $pendidikan->update($request->all());

        return redirect()->route('pendidikan.index')->with('success', 'pendidikan berhasil diperbarui');
    }

    public function destroy($id)
    {
        Pendidikan::find($id)->delete();

        return redirect()->route('pendidikan.index')->with('success', 'pendidikan berhasil dihapus');
    }
    public function cetak_pdf()
    {
    	$pendidikan = Pendidikan::all();
 
    	$pdf = PDF::loadview('pendidikan.pendidikan_pdf',['pendidikan.index'=>$pendidikan]);
    	return $pdf->download('laporan-pendidikan-pdf');
    }
    public function printPDF()
{
    $pendidikan = Pendidikan::all(); // Ganti YourModel dengan model yang sesuai

    $pdf = PDF::loadView('pendidikan.printPDF', compact('pendidikan')); // Ganti "pendidikan.print" dengan view yang sesuai

    return $pdf->stream('Data Pengguna.pdf');
}
}
