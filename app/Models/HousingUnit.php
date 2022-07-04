<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HousingUnit extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function housingproject()
    {
        return $this->belongsTo(HousingProject::class, 'housing_project_id', 'id');
    }
}
