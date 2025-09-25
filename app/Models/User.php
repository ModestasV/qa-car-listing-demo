<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;use Filament\Models\Contracts\FilamentUser;
use Illuminate\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements FilamentUser
{
    use SoftDeletes;
    use HasFactory, MustVerifyEmail, Notifiable;

    protected $fillable = [
        'name', 
        'email', 
        'email_verified_at', 
        'password', 
        'remember_token', 
        'roles'
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function canAccessPanel(\Filament\Panel $panel): bool
    {
        return true;
    }
}