<?php

namespace App\Models;

use Alert;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    use HasFactory;
    protected $table = "keluhans";
    protected $visible = ['nama_keluhan'];

    protected $fillable = ['nama_keluhan'];

    public $timestamps = true;

    public function pendaftaran()
    {
        return $this->hasMany('App\Models\Pendaftaran', 'id_keluhan');
    }

    public static function boot()
    {
        parent::boot();
        self::deleting(function ($keluhan) {
            if ($keluhan->pendaftaran->count() > 0) {
                Alert::error('Failed', 'Data not deleted');
                return false;
            }
        });
    }
}
