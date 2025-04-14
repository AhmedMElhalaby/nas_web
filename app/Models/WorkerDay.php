<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkerDay extends Model
{
    protected $fillable = [
        'user_id',
        'work_day_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function workDay(): BelongsTo
    {
        return $this->belongsTo(WorkDay::class);
    }
}
