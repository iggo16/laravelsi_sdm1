<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
//---------
use App\Http\Controllers\FormController;
use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PgwController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\IjinController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\TunjanganController;
use App\Http\Controllers\PengembanganController;
use App\Http\Controllers\PendidikanController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/pegawai/print-pdf', [PegawaiController::class, 'printPDF'])->name('pegawai.printPDF');
Route::resource('pegawai', PegawaiController::class);

Route::get('/absensi/print-pdf', [AbsensiController::class, 'printPDF'])->name('absensi.printPDF');
Route::resource('absensi', AbsensiController::class);

Route::get('/pengajuan/print-pdf', [PengajuanController::class, 'printPDF'])->name('pengajuan.printPDF');
Route::resource('pengajuan', PengajuanController::class);

Route::get('/ijin/print-pdf', [IjinController::class, 'printPDF'])->name('ijin.printPDF');
Route::resource('ijin', IjinController::class);

Route::get('/gaji/print-pdf', [GajiController::class, 'printPDF'])->name('gaji.printPDF');
Route::resource('gaji', GajiController::class);

Route::get('/tunjangan/print-pdf', [TunjanganController::class, 'printPDF'])->name('tunjangan.printPDF');
Route::resource('tunjangan', TunjanganController::class);

Route::get('/pengembangan/print-pdf', [PengembanganController::class, 'printPDF'])->name('pengembangan.printPDF');
Route::resource('pengembangan', PengembanganController::class);

Route::get('/pendidikan/print-pdf', [PendidikanController::class, 'printPDF'])->name('pendidikan.printPDF');
Route::resource('pendidikan', PendidikanController::class);

/*Route::get('/pegawai', [CategoryController::class, 'index']);
Route::get('/pegawai/tambah', [CategoryController::class, 'create']);
Route::post('/pegawai/store', [CategoryController::class, 'store']);
*/
//LOGIN
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

//REGISTER
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

//tambah

//


//Data Pengguna
Route::get('/pengguna', [FormController::class, 'showForm'])->name('form.show');
//------------
Route::get('/master', function () {
    return view('master');
});
//Route::get('/pegawai', function () {
  //  return view('pegawai');
//});
//Route::get('/pengguna', function () {
    //return view('pengguna');
//});
//Route::get('/absensi', function () {
  //  return view('absensi');
//});
/*Route::get('/pengajuan', function () {
    return view('pengajuan');
});
Route::get('/ijin', function () {
    return view('jenis_ijin');
});
Route::get('/gaji', function () {
    return view('gaji');
});
Route::get('/tunjangan', function () {
    return view('tunjangan');
});

Route::get('/pendidikan', function () {
    return view('pendidikan');
});

Route::get('/pendidikan', function () {
    return view('pendidikan');
});
*/
