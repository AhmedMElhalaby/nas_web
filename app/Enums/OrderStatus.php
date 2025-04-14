<?php

namespace App\Enums;

enum OrderStatus: int
{
    case Draft = 0;
    case Active = 1;
    case Completed = 2;
    case Cancelled = 3;

    public function label(): string
    {
        return match ($this) {
            self::Draft => __('enums.order_statuses.draft'),
            self::Active => __('enums.order_statuses.active'),
            self::Completed => __('enums.order_statuses.completed'),
            self::Cancelled => __('enums.order_statuses.cancelled'),
        };
    }
}
