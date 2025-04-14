<?php

namespace App\Models;

use App\Enums\UserRole;
use App\Enums\UserStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
        'role',
        'status',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
    
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'role' => UserRole::class,
        'status' => UserStatus::class,
    ];

    public function workerProfile(): HasMany
    {
        return $this->hasMany(WorkerProfile::class);
    }

    public function workerDocuments(): HasMany
    {
        return $this->hasMany(WorkerDocument::class);
    }

    public function workerContacts(): HasMany
    {
        return $this->hasMany(WorkerContact::class);
    }

    public function workerAccounts(): HasMany
    {
        return $this->hasMany(WorkerAccount::class);
    }

    public function workerSpecializations(): HasMany
    {
        return $this->hasMany(WorkerSpecialization::class);
    }

    public function workerDays(): HasMany
    {
        return $this->hasMany(WorkerDay::class);
    }

    public function workerPeriods(): HasMany
    {
        return $this->hasMany(WorkerPeriod::class);
    }

    public function workerTimes(): HasMany
    {
        return $this->hasMany(WorkerTime::class);
    }
    public function orders(): HasMany
    {
        return $this->hasMany(Order::class,'client_id');
    }

    public function orderApplications(): HasMany
    {
        return $this->hasMany(OrderApplication::class,'worker_id');
    }
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class,'worker_id');
    }
    public function favorites(): HasMany
    {
        return $this->hasMany(Favorite::class,'client_id');
    }
    public function blacklists(): HasMany
    {
        return $this->hasMany(Blacklist::class,'client_id');
    }
    public function violations(): HasMany
    {
        return $this->hasMany(Violation::class,'worker_id');
    }
    public function payments(): HasMany
    {
        return $this->hasMany(Payment::class,'client_id');
    }
    public function notifications(): HasMany
    {
        return $this->hasMany(Notification::class);
    }
    public function adminLogs(): HasMany
    {
        return $this->hasMany(AdminLog::class,'admin_id');
    }
}