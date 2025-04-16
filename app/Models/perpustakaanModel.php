<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\HasMany;
use App\Models\bukuModels;

class perpustakaanModel extends Model
{
    //
    use HasFactory;
    protected $table = 'perpustakaan';
    protected $fillable = ['Nama_Perpustakaan', 'Alamat', 'Nomor_Telepon'];

    public function bukuModel()
    {
        return $this->hasMany(bukuModels::class, 'perpustakaan_id', 'id');
    }
}
