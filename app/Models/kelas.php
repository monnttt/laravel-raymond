<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;
    protected $table = 'kelases_tables';

    protected $fillable = [
        'nama_kelas',
        'kompentesi_keahlian',
    ];
}
