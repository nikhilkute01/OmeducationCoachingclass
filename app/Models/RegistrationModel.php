<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegistrationModel extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'email',
        'number',
        'course',
        'gender',
        'class',
];

protected $table="registration_models";

}
