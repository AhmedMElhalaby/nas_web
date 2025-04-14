<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Favorite extends Model
{
    protected $fillable = [
        'client_id',
        'worker_id',
    ];

    public function Client(): BelongsTo
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function Worker(): BelongsTo
    {
        return $this->belongsTo(User::class, 'worker_id');
    }
}
