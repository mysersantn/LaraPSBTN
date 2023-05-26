<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mwilayah extends Model
{
    use HasFactory;
    public function mkantor()
    {
       return $this->belongsTo(Mkantor::class, 'kd_cabang', 'kd_kantor');
    }
}
