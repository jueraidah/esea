<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Positionholder extends Model
{
    use HasFactory;

    protected $table = 'positionholders';

    protected $fillable = [
        'license_id',
        'ph_name',
        'ph_position',
        'ph_noic',
        'ph_citizenship',
        'ph_job',
        'ph_address'
    ];

    public function company()
    {
        return $this->belongsTo(License::class, 'license_id', 'id');
    }
}
