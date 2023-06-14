<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tpendaftaran extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function rkelurahan()
    {
        return $this->belongsTo(Rkelurahan::class, 'kd_kel', 'kd_kel')->where([
            ['kd_kec', '=', $this->kd_kec],
            ['kd_kab', '=', $this->kd_kab],
            ['kd_prop', '=', $this->kd_prop]
        ]);
    }

    public function rkecamatan()
    {
        return $this->belongsTo(Rkecamatan::class, 'kd_kec', 'kd_kec')->where([
            ['kd_kab', '=', $this->kd_kab],
            ['kd_prop', '=', $this->kd_prop]
        ]);
    }

    public function rkabupaten()
    {
        return $this->belongsTo(Rkabupaten::class, 'kd_kab', 'kd_kab')->where([
            ['kd_prop', '=', $this->kd_prop]
        ]);
    }
    
    public function rprovinsi()
    {
       return $this->belongsTo(Rprovinsi::class, 'kd_prop', 'kd_prop');
    }
}
