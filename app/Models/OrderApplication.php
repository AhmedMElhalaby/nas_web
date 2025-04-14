<?php

namespace App\Models;

use App\Enums\OrderApplicationStatus;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderApplication extends Model
{
    use HasFactory;

    protected $fillable = [
        'worker_id',
        'order_id',
        'order_item_id',
        'status',
        'applied_at',
    ];

    protected $casts = [
        'status' => OrderApplicationStatus::class,
        'applied_at' => 'datetime',
    ];

    public function worker(): BelongsTo 
    { 
        return $this->belongsTo(User::class,'worker_id');
    }

    public function order(): BelongsTo 
    { 
        return $this->belongsTo(Order::class);
    }

    public function orderItem(): BelongsTo 
    { 
        return $this->belongsTo(OrderItem::class);
    }

}
