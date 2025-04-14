<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkerPeriod extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'work_period_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function workPeriod(): BelongsTo
    {
        return $this->belongsTo(WorkPeriod::class);
    }
}
