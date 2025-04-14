<?php

namespace App\Models;

use App\Enums\NotificationType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Notification extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'type',
        'title',
        'body',
        'read_at'
    ];
    
    protected $casts = [
        'data' => 'json',
        'read_at' => 'datetime',
        'type' => NotificationType::class,
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
