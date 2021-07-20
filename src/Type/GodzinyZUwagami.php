<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Type;

/**
 * @internal
 */
final class GodzinyZUwagami
{
    private ?string $godziny;
    private ?string $uwagi;

    public function __construct(?string $godziny, ?string $uwagi)
    {
        $this->godziny = $godziny;
        $this->uwagi = $uwagi;
    }

    public function getGodziny(): ?string
    {
        return $this->godziny;
    }

    public function getUwagi(): ?string
    {
        return $this->uwagi;
    }
}
