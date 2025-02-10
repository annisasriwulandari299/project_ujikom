<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemasukan extends Model
{
    use HasFactory;

    protected $fillable = 
    ['jumlah','deskripsi','anggaran_id'];

    public function anggaran()
    {
        return $this->belongsTo(Anggaran::class, 'anggaran_id');
    }
}
