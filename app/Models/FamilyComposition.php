<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use \Znck\Eloquent\Traits\BelongsToThrough;

class FamilyComposition extends Model
{

    use HasFactory, BelongsToThrough;
    protected $guarded = [];


    public function applicantInfo()
    {
        return $this->belongsToThrough(
            ApplicantsInfo::class,
            Applicant::class,
            null,
            '',
            [ApplicantsInfo::class => 'applicant_info_id']
        );
    }

    public function applicant()
    {
        return $this->belongsTo(Applicant::class, 'applicant_info_id', 'id');
    }


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
