<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;
    protected $table = "pendaftarans";
    protected $visible = ['nama_pasien', 'id_keluhan', 'tanggal_daftar', 'no_telepon', 'id_dokter', 'jk', 'jadwal_periksa', 'id_ruang', 'cara_bayar'];

    protected $fillable = ['nama_pasien', 'id_keluhan', 'tanggal_daftar', 'no_telepon', 'id_dokter', 'jk', 'jadwal_periksa', 'id_ruang', 'cara_bayar'];

    public $timestamps = true;

    public function keluhan()
    {
        return $this->belongsTo('App\Models\Keluhan', 'id_keluhan');
    }
    public function ruang()
    {
        return $this->belongsTo('App\Models\Ruang', 'id_ruang');
    }

    public function jadwal()
    {
        return $this->belongsTo('App\Models\JadwalDokter', 'id_dokter');
    }

    public function kamar()
    {
        return $this->belongsTo('App\Models\Kamars', 'id_kamar');
    }
}
