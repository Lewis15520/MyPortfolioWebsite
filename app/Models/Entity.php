<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\{User, Debt, InterestType};

class Entity extends Model
{

    protected $table    = 'entities';
    protected $guarded  = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }

    public function debts()
    {
        return $this->hasMany(Debt::class, 'entity_id', 'id');
    }

    public function interestType()
    {
        return $this->hasOne(InterestType::class, 'id', 'interest_type');
    }

}
