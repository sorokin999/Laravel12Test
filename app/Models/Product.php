<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public const TYPE_NEW = 1;        // 001
    public const TYPE_SALE = 2;       // 010
    public const TYPE_BESTSELLER = 4; // 100

    // Геттеры/сеттеры
    public function hasType($type): bool
    {
        return ($this->type_flags & $type) === $type;
    }

    public function addType($type): void
    {
        $this->type_flags |= $type;
    }

    public function removeType($type): void
    {
        $this->type_flags &= ~$type;
    }

    public function toggleType($type): void
    {
        $this->type_flags ^= $type;
    }

    // Список типов для отображения
    public function getTypesAttribute(): array
    {
        $types = [];
        if ($this->hasType(self::TYPE_NEW)) $types[] = 'new';
        if ($this->hasType(self::TYPE_SALE)) $types[] = 'sale';
        if ($this->hasType(self::TYPE_BESTSELLER)) $types[] = 'bestseller';
        return $types;
    }

    // Хелперы
    public function isNew(): bool { return $this->hasType(self::TYPE_NEW); }
    public function isOnSale(): bool { return $this->hasType(self::TYPE_SALE); }
    public function isBestseller(): bool { return $this->hasType(self::TYPE_BESTSELLER); }

}
