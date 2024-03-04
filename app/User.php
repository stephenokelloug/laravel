<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


use Delgont\Cms\Notifications\Auth\ResetPassword as ResetPasswordNotification;

use Delgont\Auth\Concerns\HasUserTypes;
use Delgont\Auth\Concerns\ModelHasPermissions;
use Delgont\Auth\Concerns\ModelHasSingleRole;
use Delgont\Auth\Concerns\ModelHasRoles;



class User extends Authenticatable
{
    use Notifiable, HasUserTypes, ModelHasPermissions, ModelHasSingleRole;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }

}
