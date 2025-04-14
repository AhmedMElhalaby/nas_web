<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Enums\Gender;
use App\Enums\MaritalStatus;

class WorkerProfile extends Model
{
    protected $fillable = [
        'user_id',
        'first_name',
        'second_name',
        'third_name',
        'last_name',
        'referral_source',
        'birthdate',
        'governorate',
        'district',
        'location',
        'location_lat',
        'location_long',
        'nationality_id',
        'national_id',
        'gender',
        'marital_status',
        'avg_rate',
        'total_worked_hours'
    ];
    protected $casts = [
        'gender' => Gender::class, 
        'marital_status' => MaritalStatus::class
    ];
    
    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
