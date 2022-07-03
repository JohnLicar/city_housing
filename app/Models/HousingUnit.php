<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HousingUnit extends Model
{
    use HasFactory;

    protected $fillable = [
        'housing_project_id',
        'block_no',
        'lot_no',
        'phase_no',
        'remark',
    ];
    protected $table = 'housing_unit';

    public function housingproject()
    {
        return $this->belongsTo(HousingProject::class, 'housing_project_id', 'id');
    }
}
