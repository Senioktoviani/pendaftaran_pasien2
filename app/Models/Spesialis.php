<?php

namespace App\Models;

use Alert;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spesialis extends Model
{
    use HasFactory;
    protected $table = "spesialis";
    protected $visible = ['nanma_spesialis'];

    protected $fillable = ['nanma_spesialis'];

    public $timestamps = true;

    public function dokter()
    {
        return $this->hasMany('App\Models\DataDokter', 'id_spesialis');
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($spesialis) {
            if ($spesialis->dokter->count() > 0) {
                Alert::error('Failed', 'Data not deleted');
                return false;
            }
        });
    }
}
