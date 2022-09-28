<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Useradmin extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes;

    protected $table = 'useradmins';
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
