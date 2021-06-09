<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Type;

final class Przesylka
{
    private ?DanePrzesylki $danePrzesylki;
    private ?string $numer;
    private int $status;

    public function __construct(DanePrzesylki $danePrzesylki, string $numer, int $status)
    {
        $this->danePrzesylki = $danePrzesylki;
        $this->numer = $numer;
        $this->status = $status;
    }

    public function getDanePrzesylki(): ?DanePrzesylki
    {
        return $this->danePrzesylki;
    }

    public function getNumer(): string
    {
        return $this->numer;
    }

    public function getStatus(): int
    {
        return $this->status;
    }
}
