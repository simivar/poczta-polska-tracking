<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Type;

final class GodzinyZUwagami
{
    private ?string $godziny;
    private ?string $uwagi;

    public function __construct(string $godziny, string $uwagi)
    {
        $this->godziny = $godziny;
        $this->uwagi = $uwagi;
    }

    public function getGodziny(): string
    {
        return $this->godziny;
    }

    public function withGodziny(string $godziny): self
    {
        $new = clone $this;
        $new->godziny = $godziny;

        return $new;
    }

    public function getUwagi(): string
    {
        return $this->uwagi;
    }

    public function withUwagi(string $uwagi): self
    {
        $new = clone $this;
        $new->uwagi = $uwagi;

        return $new;
    }
}
