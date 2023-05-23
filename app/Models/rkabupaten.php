<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rkabupaten extends Model
{
    use HasFactory;
    public function rprovinsi()
    {
       return $this->belongsTo(Rprovinsi::class, 'kd_prop', 'kd_prop');
    }
    public function rkecamatan()
    {
       return $this->belongsTo(Rkecamatan::class, 'kd_kec', 'kd_kec');
    }
}
