<?php

namespace App\Models;

use App\Models\Company;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Permit extends Model
{
    use HasFactory;

    protected $casts = ['ads' => 'array', 'documents' => 'array', 'expired' => 'datetime:Y-m-d', 'renew_date' => 'datetime'];

    protected $fillable = [
        'username', 'nama', 'birthdate', 'birthplace', 'tel',
        'license_number', 'lokasi', 'identification', 'kewarganegaraan',
        'gender', 'address1', 'address2', 'address3', 'wilayah', 'negeri'
    ];


    public function getStatus()
    {
        $now = Carbon::now();

        if(!empty($this->expired) && $now > $this->expired && empty($this->renew_date)){
            return 'Tamat Tempoh';
        }

        return config('data.permit_status')[$this->status];
    }


}
