<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resepModel extends Model
{
    use HasFactory;
    protected $table = 'resep';
    protected $fillable = [
        'judul',
        'diskripsi',
        'bahan',
        'langkah',
        'foto',
    ];
}
