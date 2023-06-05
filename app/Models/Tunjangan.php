<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
class tunjangan extends Model
{
    use HasFactory;
    protected $table = 'tunjangan';
    protected $primaryKey = 'id_tunjangan';
    protected $fillable = ['jenis_tunjangan', 'jumlah_tunjangan'];


    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }


}