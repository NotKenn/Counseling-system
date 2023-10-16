<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tblKasus extends Model
{
    use HasFactory;
    protected $fillable = [
        'NISN',
        'tglKasus',
        'penjelasan',
        'penanganan',
        'status',
    ];
    public $timestamps = false;
}
