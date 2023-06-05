<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
class pendidikan extends Model
{
    use HasFactory;
    protected $table = 'pendidikan';
    protected $primaryKey = 'id_pendidikan';
    protected $fillable = ['pendidikan_terakhir'];

    public function pengembangan()
    {
        return $this->hasMany(Pengembangan::class,'pendidikan_id');
    }
}