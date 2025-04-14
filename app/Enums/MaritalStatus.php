<?php

namespace App\Enums;

enum MaritalStatus: int
{
    case Single = 1;
    case Married = 2;
    case Divorced = 3;
    case Widowed = 4;

    public function label(): string
    {
        return match ($this) {
            self::Single => __('enums.marital_status.single'),
            self::Married => __('enums.marital_status.married'),
            self::Divorced => __('enums.marital_status.divorced'),
            self::Widowed => __('enums.marital_status.widowed'),
        };
    }

}
