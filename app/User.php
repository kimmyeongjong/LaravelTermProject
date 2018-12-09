<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','push_member','icon',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function friendsOfMine()
    {
        return $this->belongsToMany('App\User','friends','user_id','friend_id');
    }

    public function friendsOf()
    {
        return $this->belongsToMany('App\User','friends','friend_id','user_id');
    }

    public function friends()
    {
        return $this->friendsOfMine->merge($this->friendsOf);
    }

    public function routeNotificationForSlack()
    {
        return 'https://hooks.slack.com/services/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';
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
}
