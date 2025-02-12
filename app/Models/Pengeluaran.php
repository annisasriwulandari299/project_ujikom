<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengeluaran extends Model
{
    use HasFactory;

    protected $fillable =
    ['jumlah_pengeluaran','deskripsi','anggaran_id', 'kategori_id'];

    public function anggaran()
    {
        return $this->belongsTo(Anggaran::class, 'anggaran_id');
    }

    public function kategori()
    {
         return $this->belongsTo(Kategori::class, 'kategori_id');
    }

}
