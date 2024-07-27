<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;

    protected $table = 'districts';

    public function company()
    {
        return $this->belongsTo(Company::class, 'id', 'co_id');
    }
}
