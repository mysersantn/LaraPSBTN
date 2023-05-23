<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rkecamatan extends Model
{
    use HasFactory;
    public function rprovinsi()
    {
       return $this->belongsTo(Rprovinsi::class, 'kd_prop', 'kd_prop');
    }
    public function rkabupaten()
    {
       return $this->belongsTo(Rkabupaten::class, 'kd_kab', 'kd_kab');
    }
}
