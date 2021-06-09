<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Type;

final class ListaPrzesylekPowiazanych
{
    /**
     * @var PrzesylkaPowiazana[]
     */
    private array $przesylkaPowiazana;

    /**
     * @param PrzesylkaPowiazana[] $przesylkaPowiazana
     */
    public function __construct(array $przesylkaPowiazana)
    {
        $this->przesylkaPowiazana = $przesylkaPowiazana;
    }

    /**
     * @return PrzesylkaPowiazana[]
     */
    public function getPrzesylkaPowiazana(): array
    {
        return $this->przesylkaPowiazana;
    }
}
