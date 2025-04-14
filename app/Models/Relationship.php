<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Relationship extends Model
{
    use HasFactory;


    protected $fillable = [
         'name',
    ];

    public function workerContacts(): HasMany
    {
        return $this->hasMany(WorkerContact::class);
    }
}
