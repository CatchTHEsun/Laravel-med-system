<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorsToPatient extends Model
{
    use HasFactory;

    protected $fillable = [
        'doctors_id',
        'patients_id',
    ];
}
