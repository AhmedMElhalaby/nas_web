<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkerContact extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'relationship_id',
        'phone',
    ];

    public function user(): BelongsTo 
    {
        return $this->belongsTo(User::class);
    }

    public function relationship(): BelongsTo 
    {
        return $this->belongsTo(Relationship::class);
    }
}

