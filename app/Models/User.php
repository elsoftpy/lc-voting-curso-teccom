<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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
        'name',
        'email',
        'password',
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

    public function ideas()
    {
        return $this->hasMany(Idea::class);
    }

    /**
     * The votos that belong to the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function votos(): BelongsToMany
    {
        return $this->belongsToMany(Idea::class, Voto::class);
    }

    public function avatar(): Attribute
    {
        return Attribute::make(
            get: fn() => $this->getAvatar()
        );
    }

    protected function getAvatar(): string
    {
        $primeraLetra = $this->email[0];

        if (is_numeric($primeraLetra)) {
            $indiceAvatar = ord(strtolower($primeraLetra)) - 21;
        } else {
            $indiceAvatar = ord(strtolower($primeraLetra)) - 96;
        }

        return 'https://www.gravatar.com/avatar/'
            .md5($this->email)
            .'?s=200'
            .'&d=https://s3.amazonaws.com/laracasts/images/forum/avatars/default-avatar-'
            .$indiceAvatar
            .'.png';
    }

}
