<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Type;

final class PrzesylkaPowiazana
{
    private string $nrPrzesylkiPowiazanej;

    public function __construct(string $nrPrzesylkiPowiazanej)
    {
        $this->nrPrzesylkiPowiazanej = $nrPrzesylkiPowiazanej;
    }

    public function getNrPrzesylkiPowiazanej(): string
    {
        return $this->nrPrzesylkiPowiazanej;
    }
}
