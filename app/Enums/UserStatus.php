<?php

namespace App\Enums;

enum UserStatus: int
{
    case Deleted = 0;
    case Active = 1;
    case Suspended = 2;

    public function label(): string
    {
        return match($this) {
            self::Deleted => __('enums.user_statuses.deleted'),
            self::Active => __('enums.user_statuses.active'),
            self::Suspended => __('enums.user_statuses.suspended'),
        };
    }

}
