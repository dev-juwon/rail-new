<?php

namespace App\Enums;

enum ProductStatus: string implements Arrayable
{
    case DRAFT = 'draft';
    case APPROVED = 'approved';
    case ARCHIVED = 'archived';

    /**
     * @return bool
     */
    public function isPubliclyAccessible(): bool
    {
        return match ($this) {
            self::DRAFT, self::ARCHIVED => false,
            self::APPROVED => true,
        };
    }

    /**
     * @return bool
     */
    public function isAPPROVED(): bool
    {
        return $this === self::APPROVED;
    }

    /**
     * @return string
     */
    public function background(): string
    {
        return match ($this) {
            self::DRAFT => 'bg-gray-400',
            self::APPROVED => 'bg-green-400',
            self::ARCHIVED => 'bg-red-400',
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
