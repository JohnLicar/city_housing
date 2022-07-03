<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicantsInfo extends Model
{
    use HasFactory;
    // protected $appends = ['full_name'];

    protected $casts = [
        'income_per_month' => 'integer',
    ];

    protected $fillable = [
        'first_name',
        'middle_name', // nullable
        'last_name',
        'suffix',
        'brgy_origin',
        'birth_date',
        'place_of_birth',
        'citizenship',
        'contact',
        'tin_no',
        'govt_id',
        'civil_status',
        'office',
        'income_per_month',
    ];

    public function getFullNameAttribute()
    {
        return sprintf(
            '%s %s',
            $this->first_name,
            $this->middle_name,
            $this->last_name
        );
    }
}
