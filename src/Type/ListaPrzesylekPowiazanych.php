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

    /**
     * @param PrzesylkaPowiazana[] $przesylkaPowiazana
     */
    public function withPrzesylkaPowiazana(array $przesylkaPowiazana): self
    {
        $new = clone $this;
        $new->przesylkaPowiazana = $przesylkaPowiazana;

        return $new;
    }
}
