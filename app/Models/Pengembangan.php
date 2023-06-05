<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
class pengembangan extends Model
{
    use HasFactory;
    protected $table = 'pengembangan';
    protected $primaryKey = 'id_pengembangan';
    protected $fillable = ['pengembangan_diri'];


    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class,'pegawai_id');
    }

    public function pendidikan()
    {
        return $this->belongsTo(Pendidikan::class,'pendidikan_id');
    }

}