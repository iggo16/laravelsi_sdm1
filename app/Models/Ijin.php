<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
class ijin extends Model
{
    use HasFactory;
    protected $table = 'ijin';
    protected $primaryKey = 'id_ijin';
    protected $fillable = ['keterangan'];

    public function pengajuan()
    {
        return $this->hasMany(Pengajuan::class,'ijin_id');
    }


}