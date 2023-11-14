<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory,HasApiTokens;

    protected $primaryKey = 'doctor_id';
    protected $fillable=[
        'doctor_name',
        'gender',
        'DOB',
        'specialty',
        'phone',
        'email',
        'Years_of_experience',
        'password',
        'hospital_id'
    ];
}
