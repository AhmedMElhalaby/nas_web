<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class OrderItem extends Model
{
    protected $fillable = [
        'order_id',
        'specialization_id',
        'quantity',
        'gender_preference',
        'nationality_preference'
    ];


    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function specialization()
    {
        return $this->belongsTo(Specialization::class);
    }
    
    public function nationality()
    {
        return $this->belongsTo(Nationality::class);
    }

}
