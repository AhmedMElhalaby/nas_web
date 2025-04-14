<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkerAccount extends Model
{
    protected $fillable = [
        'user_id',
        'holder_name',
        'institution_name',
        'wallet_number',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
