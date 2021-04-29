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

    public function getDanePrzesylki(): DanePrzesylki
    {
        return $this->danePrzesylki;
    }

    public function withDanePrzesylki(DanePrzesylki $danePrzesylki): self
    {
        $new = clone $this;
        $new->danePrzesylki = $danePrzesylki;

        return $new;
    }

    public function getNumer(): string
    {
        return $this->numer;
    }

    public function withNumer(string $numer): self
    {
        $new = clone $this;
        $new->numer = $numer;

        return $new;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function withStatus(int $status): self
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }
}
