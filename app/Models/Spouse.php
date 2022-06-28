<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spouse extends Model
{
    use HasFactory;

    protected $fillable = [
        'spouse_first_name',
        'spouse_middle_name', // nullable
        'spouse_last_name',
        'spouse_birth_date',
        'spouse_place_of_birth',

    ];
}
