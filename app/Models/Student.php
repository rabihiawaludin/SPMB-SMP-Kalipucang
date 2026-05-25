<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [

        'registration_number',
        'fullname',
        'nik',
        'nisn',
        'birth_date',
        'birth_place',
        'gender',
        'religion',
        'phone',
        'address',
        'school_origin',
        'father_name',
        'mother_name',
        'parent_phone',
        'photo',
        'verification_status',
        'accepted_status',
    ];
}