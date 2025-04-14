<?php

namespace App\Enums;

enum PaymentMethod: int
{
    case Cash = 0;
    case Card = 1;
    case BankTransfer = 2;

    public function label(): string
    {
        return match ($this) {
            self::Cash => __('enums.payment_methods.cash'),
            self::Card => __('enums.payment_methods.card'),
            self::BankTransfer => __('enums.payment_methods.bank_transfer'),
        };
    }
}
