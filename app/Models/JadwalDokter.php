<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwaldokter extends Model
{
    use HasFactory;

    protected $visible = ['nama_dokter', 'waktu_mulai', 'waktu_akhir'];

    protected $fillable = ['nama_dokter', 'waktu_mulai', 'waktu_akhir'];

    public $timestamps = true;

}
