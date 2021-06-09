<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Type;

final class SzczDaneJednostki
{
    private float $dlGeogr;
    private GodzinyPracy $godzinyPracy;
    private ?string $miejscowosc;
    private ?string $nrDomu;
    private ?string $nrLokalu;
    private ?string $pna;
    private float $szerGeogr;
    private ?string $ulica;

    public function __construct(float $dlGeogr, GodzinyPracy $godzinyPracy, string $miejscowosc, string $nrDomu, string $nrLokalu, string $pna, float $szerGeogr, string $ulica)
    {
        $this->dlGeogr = $dlGeogr;
        $this->godzinyPracy = $godzinyPracy;
        $this->miejscowosc = $miejscowosc;
        $this->nrDomu = $nrDomu;
        $this->nrLokalu = $nrLokalu;
        $this->pna = $pna;
        $this->szerGeogr = $szerGeogr;
        $this->ulica = $ulica;
    }

    public function getDlGeogr(): float
    {
        return $this->dlGeogr;
    }

    public function getGodzinyPracy(): GodzinyPracy
    {
        return $this->godzinyPracy;
    }

    public function getMiejscowosc(): string
    {
        return $this->miejscowosc;
    }

    public function getNrDomu(): string
    {
        return $this->nrDomu;
    }

    public function getNrLokalu(): string
    {
        return $this->nrLokalu;
    }

    public function getPna(): string
    {
        return $this->pna;
    }

    public function getSzerGeogr(): float
    {
        return $this->szerGeogr;
    }

    public function getUlica(): string
    {
        return $this->ulica;
    }
}
