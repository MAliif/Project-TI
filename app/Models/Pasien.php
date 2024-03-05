<?php

namespace App\Models;

use App\Models\TandaVital;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Relations\HasOne;

class Pasien extends Model
{
    use HasFactory;
    protected $primaryKey = 'noreg';
    protected $fillable = [
        'noreg',        
        'nama',
        'jenis_kelamin',
        'alamat',
        'no_tlp'
    ];

    public function tandaVital()
    {
        return $this->hasOne(TandaVital::class, 'pasien_id');
    }
}
