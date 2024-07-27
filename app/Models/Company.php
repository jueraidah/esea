<?php

namespace App\Models;

use App\Models\Permit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    protected $table = 'companies';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'namekeluarga',
        'birthdate',
        'birthplace',
        'tel',
        'license_number',
        'date_enter',
        'date_exit',
        'mod',
        'telefon',
        'email',
        'identification',
        'kewarganegaraan',
        'address1',
        'address2',
        'address3',
        'wilayah',
        'negeri',
        'lokasi',
        'ketibaan',
        'alamat',
        'justifikasi',
        'documents' // Store paths to uploaded documents
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function licenses()
    {
        return $this->hasMany(License::class, 'co_id', 'id');
    }

    public function iklans()
    {
        return $this->hasMany(Iklan::class, 'co_id', 'id');
    }

    public function permits()
    {
        return $this->hasMany(Permit::class);
    }

    public function district()
    {
        return $this->hasOne(District::class, 'id', 'co_id');
    }
}
