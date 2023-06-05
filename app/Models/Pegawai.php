<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'pegawai';
    protected $primaryKey = 'id_pegawai';
    protected $fillable = ['nama', 'alamat', 'no_hp','tanggal_lahir'];

    public function absensi()
    {
        return $this->hasMany(Absensi::class,'pegawai_id');
    }
    public function pengajuan()
    {
        return $this->hasMany(Pengajuan::class,'pegawai_id');
    }
    public function pengembangan()
    {
        return $this->hasMany(Pengembangan::class,'pegawai_id');
    }


}