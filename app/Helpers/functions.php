<?php

if (!function_exists('enum_values')){
    function enum_values($enum)
    {
        return array_column($enum::cases(), 'value');
    }
}

if (!function_exists('enum_comment')){
    function enum_comment(string $enumClass): string
    {
        if (!enum_exists($enumClass)) {
            throw new InvalidArgumentException("The provided class [$enumClass] is not a valid Enum.");
        }

        $commentParts = [];

        foreach ($enumClass::cases() as $case) {
            if (!method_exists($case, 'label')) {
                throw new LogicException("The enum case [" . get_class($case) . "] does not have a 'label' method.");
            }

            $commentParts[] = $case->value . ' ' . $case->label();
        }

        return implode(', ', $commentParts);
    }
}