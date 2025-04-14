<?php

namespace App\Enums;

enum OrderApplicationStatus: int
{
    
    case Pending = 0;
    case Approved = 1;
    case Rejected = 2;
    case Cancelled = 3;

    public function label(): string
    {
        return match ($this) {
            self::Pending => __('enums.order_application_statuses.pending'),
            self::Approved => __('enums.order_application_statuses.approved'),
            self::Rejected => __('enums.order_application_statuses.rejected'),
            self::Cancelled => __('enums.order_application_statuses.cancelled'),
        };
    }
}
