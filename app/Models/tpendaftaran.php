<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tpendaftaran extends Model
{
    use HasFactory;
    protected $table ='tpedaftarans';
    protected $primaryKey = 'kd_daftar';
}
