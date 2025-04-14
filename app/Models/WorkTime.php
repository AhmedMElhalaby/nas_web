<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class WorkTime extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function workers(): BelongsToMany
    {
        return $this->belongsToMany(WorkerProfile::class, 'worker_times');
    }
}
