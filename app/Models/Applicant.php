<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Dyrynda\Database\Support\CascadeSoftDeletes;

class Applicant extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'applicant_info_id',
        'spouse_id',
        'housing_project_id',
        // 'real_holding_id',
        'application_status'
    ];
    protected $cascadeDeletes = ['info', 'spouse', 'family_composition'];

    public function info()
    {
        return $this->belongsTo(ApplicantsInfo::class, 'applicant_info_id', 'id');
    }

    public function spouse()
    {
        return $this->belongsTo(Spouse::class, 'spouse_id', 'id');
    }


    public function family_composition()
    {
        return $this->hasManyThrough(
            FamilyComposition::class,
            Applicant::class,
            'applicant_info_id', // Foreign key on the environments table...
            'applicant_id', // Foreign key on the deployments table...
            'id', // Local key on the projects table...
            'id' // Local key on the environments table...
        ); //Rule alp
    }

    public function housing_project()
    {
        return $this->belongsTo(HousingProject::class, 'housing_project_id', 'id');
    }

    public function real_holding()
    {
        return $this->belongsTo(RealHolding::class, 'real_holding_id', 'id');
    }

    public function requirements()
    {
        return $this->belongsToMany(Requirement::class, 'applicants_requirments');
    }

    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()
            ->whereRelation('info', 'first_name', 'like', '%' . $search . '%')
            ->orWhereRelation('info', 'last_name', 'like', '%' . $search . '%');
    }

    public function scopeGetTrashed($query)
    {
        $query->onlyTrashed();
    }
}
