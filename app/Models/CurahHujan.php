<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CurahHujan extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'curah_hujan';

    protected $fillable = [
        'tanggal',
        'nilai'
    ];

    protected $hidden = [

    ];
}
