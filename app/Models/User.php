<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_id',
        'branch_id',
        'name',
        'email',
        'username',
        'gender',
        'address',
        'city',
        'state',
        'zip_code',
        'country',
        'description',
        'phone',
        'image',
        'status',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo('App\Models\Role');
    }

    public function branch()
    {
        return $this->belongsTo('App\Models\Branch');
    }

    public function isAdmin()
    {
        if ($this->role->name == 'Admin' && $this->status == 1) {
            return true;
        }
        return false;
    }
}
