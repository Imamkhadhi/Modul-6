<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class bukuModels extends Model
{
    //
    use HasFactory;
    protected $table = "buku";
    protected $fillable = ["Judul_Buku", "Penulis", "Penerbit", "Tahun_Terbit"];

    public function perpustakaanModel()
    {
        return $this->belongsTo(perpustakaanModel::class);
    }
}
