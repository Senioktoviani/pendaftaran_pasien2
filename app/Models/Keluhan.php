<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluhan extends Model
{
    use HasFactory;
    protected $table = "keluhans";
    protected $visible = ['nama_keluhan'];

    protected $fillable = ['nama_keluhan'];

    public $timestamps = true;

}
