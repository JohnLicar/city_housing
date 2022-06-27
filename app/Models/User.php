<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'gender',
        'address',
        'contact',
        'email',
        'password',
        'approve',
        'avatar'
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',

    ];




    public static function search($search)
    {
        return empty($search) ? static::query()
            : static::query()->where('first_name', 'like', '%' . $search . '%')
            ->OrWhere('last_name', 'like', '%' . $search . '%')
            ->OrWhere('email', 'like', '%' . $search . '%');
    }

    public function scopeGetTrashed($query)
    {
        $query->onlyTrashed();
    }

    public function getFullNameAttribute()
    {
        return sprintf(
            '%s %s',
            $this->first_name,
            $this->last_name
        );
    }

    protected static function booted()
    {
        static::creating(function ($user) {
            $user->password = Hash::make($user->last_name);
        });
    }
}
