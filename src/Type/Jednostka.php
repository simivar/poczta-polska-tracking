<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Type;

/**
 * @internal
 */
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

    public function getNazwa(): ?string
    {
        return $this->nazwa;
    }
}
