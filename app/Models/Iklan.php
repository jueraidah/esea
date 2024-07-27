<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Iklan extends Model
{
    use HasFactory;

    protected $table = 'iklans';

    protected $fillable = [

        'license_type',
        'co_id',
        'no_lesen',
        'jenis_iklan',
        'address',
        'dokumen_sokog'

    ];


    public function company()
    {
        return $this->belongsTo(Company::class, 'co_id', 'id');
    }

}
