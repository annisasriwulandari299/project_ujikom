<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $fillable = 
    ['nama','catatan'];

    public function anggarans()
    {
        return $this->hasMany(Anggaran::class, 'kategori_id');
    }
}
