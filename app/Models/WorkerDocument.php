<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class WorkerDocument extends Model
{
    protected $fillable = [
        'user_id',
        'id_front_image',
        'id_back_image',
        'personal_photo',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
