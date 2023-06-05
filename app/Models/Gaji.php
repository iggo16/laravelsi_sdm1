<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
class gaji extends Model
{
    use HasFactory;
    protected $table = 'gaji';
    protected $primaryKey = 'id_gaji';
    protected $fillable = ['jumlah_gaji', 'total_gaji','tanggal_gaji'];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class,'pegawai_id');
    }

    public function tunjangan()
    {
        return $this->belongsTo(tunjangan::class,'tunjangan_id');
    }
}