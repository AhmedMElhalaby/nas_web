<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    protected $fillable = [
        'worker_id',
        'order_id',
        'order_item_id',
        'rate',
        'review',
        'reviewed_at'
    ];

    protected $casts = [
        'reviewed_at' => 'datetime'
    ];

    public function Worker(): BelongsTo
    {
        return $this->belongsTo(User::class, 'worker_id');
    }

    public function Order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
    
    public function OrderItem(): BelongsTo
    {
        return $this->belongsTo(OrderItem::class);
    }
}
