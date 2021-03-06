<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Type;

/**
 * @internal
 */
final class ListaPrzesylek
{
    /**
     * @var Przesylka[]
     */
    private array $przesylka;

    /**
     * @param Przesylka[] $przesylka
     */
    public function __construct(array $przesylka)
    {
        $this->przesylka = $przesylka;
    }

    /**
     * @return Przesylka[]
     */
    public function getPrzesylka(): array
    {
        return $this->przesylka;
    }
}
