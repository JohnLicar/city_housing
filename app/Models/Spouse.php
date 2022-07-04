<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Spouse extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'spouse_first_name',
        'spouse_middle_name', // nullable
        'spouse_last_name',
        'spouse_birth_date',
        'spouse_place_of_birth',
    ];

    public function getFullNameAttribute()
    {
        return sprintf(
            '%s %s',
            $this->spouse_first_name,
            $this->spouse_middle_name,
            $this->spouse_last_name
        );
    }
}
