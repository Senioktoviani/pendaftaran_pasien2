<?php

namespace App\Models;

use Alert;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;
    protected $table = "kamars";
    protected $visible = ['nama_kamar'];

    protected $fillable = ['nama_kamar'];

    public $timestamps = true;

    public function pendaftaran()
    {
        return $this->hasMany('App\Models\Pendaftaran', 'id_kamar');
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($kamar) {
            if ($kamar->pendaftaran->count() > 0) {
                Alert::error('Failed', 'Data not deleted');
                return false;
            }
        });
    }
}
