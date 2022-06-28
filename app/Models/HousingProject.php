<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HousingProject extends Model
{
    use HasFactory;


    // protected $fillable = [
    //     'location',
    //     'project',
    //     'description',

    // ];

    protected $guarded = [];


    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('project', 'like', '%' . $search . '%')
            ->OrWhere('location', 'like', '%' . $search . '%')
            ->OrWhere('description', 'like', '%' . $search . '%');
    }
}
