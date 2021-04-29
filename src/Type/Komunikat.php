<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Type;

final class Komunikat
{
    private ?ListaPrzesylek $przesylki;
    private int $status;

    public function __construct(ListaPrzesylek $przesylki, int $status)
    {
        $this->przesylki = $przesylki;
        $this->status = $status;
    }

    public function getPrzesylki(): ListaPrzesylek
    {
        return $this->przesylki;
    }

    public function withPrzesylki(ListaPrzesylek $przesylki): self
    {
        $new = clone $this;
        $new->przesylki = $przesylki;

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
