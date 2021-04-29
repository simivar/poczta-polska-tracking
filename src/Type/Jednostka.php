<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Type;

final class Jednostka
{
    private ?SzczDaneJednostki $daneSzczegolowe;
    private ?string $nazwa;

    public function __construct(?SzczDaneJednostki $daneSzczegolowe, ?string $nazwa)
    {
        $this->daneSzczegolowe = $daneSzczegolowe;
        $this->nazwa = $nazwa;
    }

    public function getDaneSzczegolowe(): ?SzczDaneJednostki
    {
        return $this->daneSzczegolowe;
    }

    public function withDaneSzczegolowe(?SzczDaneJednostki $daneSzczegolowe): self
    {
        $new = clone $this;
        $new->daneSzczegolowe = $daneSzczegolowe;

        return $new;
    }

    public function getNazwa(): ?string
    {
        return $this->nazwa;
    }

    public function withNazwa(?string $nazwa): self
    {
        $new = clone $this;
        $new->nazwa = $nazwa;

        return $new;
    }
}
