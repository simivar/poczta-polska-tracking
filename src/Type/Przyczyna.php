<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaWebservice\Type;

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

    public function withKod(string $kod): self
    {
        $new = clone $this;
        $new->kod = $kod;

        return $new;
    }

    public function getNazwa(): string
    {
        return $this->nazwa;
    }

    public function withNazwa(string $nazwa): self
    {
        $new = clone $this;
        $new->nazwa = $nazwa;

        return $new;
    }
}

