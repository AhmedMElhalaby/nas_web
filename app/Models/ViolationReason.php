<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ViolationReason extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function violations(): HasMany
    {
        return $this->hasMany(Violation::class);
    }
}
