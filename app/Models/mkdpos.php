<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mkdpos extends Model
{
    use HasFactory;

    public function rkelurahan()
    {
       return $this->belongsTo(Rkelurahan::class, 'kd_kel', 'kd_kel','kd_kec', 'kd_kec','kd_kab', 'kd_kab','kd_prop', 'kd_prop');
    }
    public function rkecamatan()
    {
       return $this->belongsTo(Rkecamatan::class, 'kd_kec', 'kd_kec','kd_kab', 'kd_kab','kd_prop', 'kd_prop');
    }
    public function rkabupaten()
    {
       return $this->belongsTo(Rkabupaten::class, 'kd_kab', 'kd_kab','kd_prop', 'kd_prop');
    }
    public function rprovinsi()
    {
       return $this->belongsTo(Rprovinsi::class, 'kd_prop', 'kd_prop');
    }
}
