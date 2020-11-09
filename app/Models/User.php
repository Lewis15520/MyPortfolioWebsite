<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\{Entity, Debt};

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'settings'
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

    public function firstName(): string
    {
        return explode(' ', $this->name)[0];
    }

    public function lastName(): string
    {
        return array_reverse(explode(' ', $this->name))[0];
    }

    public function settings()
    {
        return json_decode($this->settings);
    }

    public function entity()
    {
        return $this->hasOne(Entity::class, 'user_id', 'id');
    }

    public function debts()
    {
        return $this->hasMany(Debt::class, 'user_id', 'id');
    }

}
