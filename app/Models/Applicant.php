<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Applicant extends Model
{
    use HasFactory, SoftDeletes;

    public function info()
    {
        return $this->belongsTo(ApplicantsInfo::class, 'applicants_info_id', 'id');
    }

    public function spouse()
    {
        return $this->belongsTo(Spouse::class, 'spouse_id', 'id');
    }

    public function family_composition()
    {
        return $this->hasMany(FamilyComposition::class);
    }

    public function housing_project()
    {
        return $this->belongsTo(HousingProject::class, 'housing_project_id', 'id');
    }

    public function real_holding()
    {
        return $this->belongsTo(RealHolding::class, 'real_holding_id', 'id');
    }
}
