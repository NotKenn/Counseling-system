<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblPrestasi extends Model
{
    use HasFactory;
    protected $fillable = [
        'NISN',
        'tglPrestasi',
        'namaPrestasi',
        'tingkatPrestasi',
        'peringkatPrestasi'
    ];
    public $timestamps = false;
}
