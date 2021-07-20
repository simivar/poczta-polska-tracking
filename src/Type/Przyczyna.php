<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Type;

/**
 * @internal
 */
final class Przyczyna
{
    private string $kod;
    private string $nazwa;

    public function __construct(string $kod, string $nazwa)
    {
        $this->kod = $kod;
        $this->nazwa = $nazwa;
    }

    public function getKod(): string
    {
        return $this->kod;
    }

    public function getNazwa(): string
    {
        return $this->nazwa;
    }
}
