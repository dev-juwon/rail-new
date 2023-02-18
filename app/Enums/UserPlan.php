<?php

namespace App\Enums;

enum UserPlan: string implements Arrayable {
    case AFFILIATE = 'affiliate';
    case CREATOR = 'creator';

    /**
     * @return string
     */
    public function background(): string
    {
        return match ($this) {
            self::AFFILIATE => 'red',
            self::CREATOR => 'green',
        };
    }

    /**
     * @return array
     */
    public static function toArray(): array
    {
        return array_column(self::cases(), 'value');
    }
}
