<?php

namespace App\Http\Controllers;

use App\Models\Pengajuan;
use App\Models\Pegawai;
use App\Models\Ijin;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use PDF;

class PengajuanController extends Controller
{
    public function index()
    {
        $pengajuan = Pengajuan::with('ijin')->get();
        $pengajuan = Pengajuan::with('pegawai')->get();
        return view('pengajuan.index', compact('pengajuan'));
    }

    public function create()
    {
        $peg = Pegawai::all();
        $ij = Ijin::all();
        return view('pengajuan.create', compact(['peg','ij']));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
        ]);

        Pengajuan::create($request->all());

        return redirect()->route('pengajuan.index')->with('success', 'pengajuan berhasil ditambahkan');
    }

    public function show($id)
    {
        $pengajuan = Pengajuan::find($id);
        return view('pengajuan.show', compact('pengajuan'));
    }

    public function edit($id)
    {
        $ij = Ijin::all();
        $peg = Pegawai::all();
        $pengajuan = Pengajuan::with('pegawai')->find($id); 
        $pengajuan = Pengajuan::with('ijin')->find($id);   
        return view('pengajuan.edit',compact(['pengajuan', 'peg','ij']));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal_mulai' => 'required|date',
            'tanggal_selesai' => 'required|date',
        ]);

        $pengajuan = Pengajuan::find($id);
        $pengajuan->update($request->all());

        return redirect()->route('pengajuan.index')->with('success', 'pengajuan berhasil diperbarui');
    }

    public function destroy($id)
    {
        Pengajuan::find($id)->delete();

        return redirect()->route('pengajuan.index')->with('success', 'pengajuan berhasil dihapus');
    }
    public function cetak_pdf()
    {
    	$pengajuan = Pengajuan::all();
 
    	$pdf = PDF::loadview('pengajuan.pengajuan_pdf',['pengajuan.index'=>$pengajuan]);
    	return $pdf->download('laporan-pengajuan-pdf');
    }
    public function printPDF()
{
    $pengajuan = Pengajuan::all(); 

    $pdf = PDF::loadView('pengajuan.printPDF', compact('pengajuan')); // Ganti "pengajuan.print" dengan view yang sesuai

    return $pdf->stream('Data Pengguna.pdf');
}
}
