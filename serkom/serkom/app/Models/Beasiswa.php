<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    use HasFactory;

    protected $table = 'beasiswas';

    // array kolom pada table database
    protected $fillable = [
        'nama',
        'email',
        'hp',
        'semester',
        'ipk',
        'beasiswa',
        'berkas',
        'status',
    ];
}
