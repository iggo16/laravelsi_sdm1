<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Pengajuan extends Model
{
    use HasFactory;
    protected $table = 'pengajuan';
    protected $primaryKey = 'id_pengajuan';
    protected $fillable = ['pegawai_id','ijin_id','tanggal_mulai','tanggal_selesai'];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class,'pegawai_id');
    }
    public function ijin()
    {
        return $this->belongsTo(Ijin::class,'ijin_id');
    }
}