<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory,HasApiTokens;

    protected $primaryKey = 'patient_id';
    protected $fillable=[
        'name',
        'gender',
        'password',
        'DOB',
        'weight',
        'phone',
        'email',
        'medical_history',
        'emergency_contact_information',
        'hospital_id'
    ];
}
