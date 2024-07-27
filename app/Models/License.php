<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class License extends Model
{
    use HasFactory;

    protected $table = 'licenses';

    protected $fillable = [
        'license_type',
        'co_id',
        'modal_allowed',
        'modal_issued',
        'modal_paid_cash',
        'modal_paid_other'
    ];

    public function company()
    {
        return $this->belongsTo(Company::class, 'co_id', 'id');
    }

    public function positionholders()
    {
        return $this->hasMany(Positionholder::class, 'license_id', 'id');
    }
}
