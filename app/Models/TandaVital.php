<?php

namespace App\Models;

use App\Models\Pasien;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TandaVital extends Model
{
    use HasFactory;
    // protected $primaryKey = '';
    protected $fillable = [
        'tinggi_badan',
        'berat_badan',
        'tekanan_darah',
        'nadi',
        'pernapasan',
        'suhu',
        'pasien_id'
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class, 'noreg', 'pasien_id');
    }
}
