<?php

namespace App\Models;

use App\Enums\OrderStatus;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order extends Model
{
    protected $fillable = [
        'client_id',
        'work_period_id',
        'scheduled_date',
        'time_slot',
        'notes',
        'tax_amount',
        'total_price',
        'status',
    ];

    protected $casts = [
        'status' => OrderStatus::class
    ];

    public function client(): BelongsTo 
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function workPeriod(): BelongsTo 
    {
        return $this->belongsTo(WorkPeriod::class);
    }
}
