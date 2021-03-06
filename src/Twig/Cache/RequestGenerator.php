<?php

declare(strict_types=1);

namespace App\Twig\Cache;

use Twig\CacheExtension\CacheStrategy\KeyGeneratorInterface;

final class RequestGenerator implements KeyGeneratorInterface
{
    /**
     * {@inheritdoc}
     */
    public function generateKey($filters): string
    {
        return sha1(serialize($filters));
    }
}
