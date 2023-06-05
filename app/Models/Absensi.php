<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;
    protected $table = 'absensi';
    protected $primaryKey = 'id_absensi';
    protected $fillable = ['jam_masuk','jam_istirahat', 'tanggal_kerja','pegawai_id',];


    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class,'pegawai_id');
    }
}