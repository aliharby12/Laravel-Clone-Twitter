<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function timeline()
    {

      return \App\Tweet::where('user_id', $this->id)->latest()->get();

    }

    public function follow(User $user)
    {
       return $this->follows()->save($user);

    }

    public function follows()
    {

      return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');

    }

}
