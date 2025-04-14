<?php

namespace App\Enums;

enum NotificationType: int
{
    case System = 0;
    case Job = 1;
    case Violation = 2;
    case Application = 3;

    public function label(): string
    {
        return match($this) {
            self::System => __('enums.notification_types.system'),
            self::Job => __('enums.notification_types.job'),
            self::Violation => __('enums.notification_types.violation'),
            self::Application => __('enums.notification_types.application'),
        };
    }
}
