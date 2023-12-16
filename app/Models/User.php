<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'avatar',
        'name',
        'lastname',
        'email',
        'password',
        'role',
        'id_subscription',
        'downloads_used'
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
        'password' => 'hashed',
    ];

    public function photos()
    {
        return $this->hasMany(Photo::class, 'id_user');
    }

    public function newsArticles()
    {
        return $this->hasMany(NewsArticle::class, 'id_user');
    }

    public function subscription()
    {
        return $this->belongsTo(Subscription::class, 'id_subscription');
    }
}
