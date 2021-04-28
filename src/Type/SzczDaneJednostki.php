<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaWebservice\Type;

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

    public function withDlGeogr(float $dlGeogr): self
    {
        $new = clone $this;
        $new->dlGeogr = $dlGeogr;

        return $new;
    }

    public function getGodzinyPracy(): GodzinyPracy
    {
        return $this->godzinyPracy;
    }

    public function withGodzinyPracy(GodzinyPracy $godzinyPracy): self
    {
        $new = clone $this;
        $new->godzinyPracy = $godzinyPracy;

        return $new;
    }

    public function getMiejscowosc(): string
    {
        return $this->miejscowosc;
    }

    public function withMiejscowosc(string $miejscowosc): self
    {
        $new = clone $this;
        $new->miejscowosc = $miejscowosc;

        return $new;
    }

    public function getNrDomu(): string
    {
        return $this->nrDomu;
    }

    public function withNrDomu(string $nrDomu): self
    {
        $new = clone $this;
        $new->nrDomu = $nrDomu;

        return $new;
    }

    public function getNrLokalu(): string
    {
        return $this->nrLokalu;
    }

    public function withNrLokalu(string $nrLokalu): self
    {
        $new = clone $this;
        $new->nrLokalu = $nrLokalu;

        return $new;
    }

    public function getPna(): string
    {
        return $this->pna;
    }

    public function withPna(string $pna): self
    {
        $new = clone $this;
        $new->pna = $pna;

        return $new;
    }

    public function getSzerGeogr(): float
    {
        return $this->szerGeogr;
    }

    public function withSzerGeogr(float $szerGeogr): self
    {
        $new = clone $this;
        $new->szerGeogr = $szerGeogr;

        return $new;
    }

    public function getUlica(): string
    {
        return $this->ulica;
    }

    public function withUlica(string $ulica): self
    {
        $new = clone $this;
        $new->ulica = $ulica;

        return $new;
    }
}
