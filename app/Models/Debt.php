<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Debt extends Model
{

    protected $table    = 'debts';
    protected $guarded  = ['id'];

    public function entity()
    {
        return $this->belongsTo(Entity::class, 'entity_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }

    public function interestType()
    {
        return $this->hasOne(InterestType::class, 'id', 'interest_type');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class, 'debt_id', 'id');
    }

    public function latestPayment()
    {
        return $this->payments()->orderBy('payment_date', 'asc')->first();
    }

    public function charges()
    {
        return $this->hasMany(Charge::class, 'debt_id', 'id');
    }

}
