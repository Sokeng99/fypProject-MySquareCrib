<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Model
{
    use HasFactory, HasRoles, HasApiTokens;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    protected $guard_name = 'web';
}
