<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class ArticleType extends Enum
{
    const Blog = 1;
    const Note = 2;

    public static $descriptions = [
        self::Blog => '博客',
        self::Note => '笔记',
    ];

    /**
     * Get the description for an enum value
     *
     * @param  int $value
     * @return string
     */
    public static function getDescription($value): string
    {
        return self::$descriptions[$value] ?? self::getKey($value);
    }
}
