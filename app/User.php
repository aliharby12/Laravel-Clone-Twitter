<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Tweet;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username', 'name', 'email', 'password', 'avatar', 'cover'
    ];

    protected $appends = ['avatar_path'];

    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function timeline()
    {
      $ids = $this->follows()->pluck('id');
      $ids->push($this->id);

      return Tweet::whereIn('user_id', $ids)->latest()->paginate(5);
    }


    public function tweets()
    {
      return $this->hasMany(Tweet::class);
    } //end of tweets


    public function follow(User $user)
    {
      return $this->follows()->save($user);
    } //end of follow

    public function unfollow(User $user)
    {
      return $this->follows()->detach($user);
    } //end of unfollow

    public function follows()
    {
      return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    } //end of follws

    public function followers()
    {
      return $this->belongsToMany(User::class, 'follows', 'following_user_id', 'user_id');
    } //end of follws

    public function following(User $user)
    {
      return $this->follows()->where('following_user_id', $user->id)->exists();
    } //end of following

    public function getRouteKeyName()
    {
      return 'name';
    } //end of getRouteKeyName


    public function getNameAttribute($value)
    {
        return ucfirst($value);
    } //end of getNameAttribute

    public function getAvatarPathAttribute()
    {
        return asset('uploads/avatars/' . $this->avatar);
    }

    public function getCoverPathAttribute()
    {
        return asset('uploads/covers/' . $this->cover);
    }
}
