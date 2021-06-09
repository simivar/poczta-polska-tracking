<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Type;

final class ListaZdarzen
{
    /**
     * @var Zdarzenie[]
     */
    private array $zdarzenie;

    /**
     * @param Zdarzenie[] $zdarzenie
     */
    public function __construct(array $zdarzenie)
    {
        $this->zdarzenie = $zdarzenie;
    }

    /**
     * @return Zdarzenie[]
     */
    public function getZdarzenie(): array
    {
        return $this->zdarzenie;
    }
}
