<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Type;

/**
 * @internal
 */
final class Komunikat
{
    private ?ListaPrzesylek $przesylki;
    private int $status;

    public function __construct(?ListaPrzesylek $przesylki, int $status)
    {
        $this->przesylki = $przesylki;
        $this->status = $status;
    }

    public function getPrzesylki(): ?ListaPrzesylek
    {
        return $this->przesylki;
    }

    public function getStatus(): int
    {
        return $this->status;
    }
}
