<?php

namespace App\Enums;

enum UserRole: int
{
    case Admin = 0;
    case Client = 1;
    case Worker = 2;

    public function label(): string
    {
        return match($this) {
            self::Admin => __('enums.user_roles.admin'),
            self::Client => __('enums.user_roles.client'),
            self::Worker => __('enums.user_roles.worker'),
        };
    }

}
