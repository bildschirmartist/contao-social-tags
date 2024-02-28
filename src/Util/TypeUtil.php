<?php

declare(strict_types=1);

namespace Hofff\Contao\SocialTags\Util;

use function is_string;

final class TypeUtil
{
    public static function isStringWithContent(mixed $value): bool
    {
        if (! is_string($value)) {
            return false;
        }

        return $value !== '';
    }
}
