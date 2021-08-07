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
        'username',
        'email',
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

    protected static function boot()
    {
        parent::boot();
        static::created(function ($user){
            $user->groups()->create([
                'id'=>1,
                'name'=>'No Group',
                'user_id'=>$user->id,
            ]);
        });
    }
    public function posts()
    {
        return $this->hasMany(GroupPost::class)->orderBy('created_at','DESC');
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_users');
    }

    public function manga()
    {
        return $this->hasMany(Manga::class)->orderBy('created_at','DESC');
    }
}
