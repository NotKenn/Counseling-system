<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class noteKelompok extends Model
{
    use HasFactory;
    protected $fillable =[
        'NISN',
        'konselor',
        'targetKonseling',
        'tglRencanaPelaksanaan',
        'materi',
        'tglRealisasi',
        'evaluasiProses',
        'evaluasiAkhir',
        'status',
        'descHambatan',
        'descAltSolusi',
        'descRTL'
    ];
    public $timestamps = false;
}
