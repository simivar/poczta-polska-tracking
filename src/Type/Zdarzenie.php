<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Type;

final class Zdarzenie
{
    private string $czas;
    private Jednostka $jednostka;
    private string $kod;
    private bool $konczace;
    private string $nazwa;
    private ?Przyczyna $przyczyna;

    public function __construct(string $czas, Jednostka $jednostka, string $kod, bool $konczace, string $nazwa, Przyczyna $przyczyna)
    {
        $this->czas = $czas;
        $this->jednostka = $jednostka;
        $this->kod = $kod;
        $this->konczace = $konczace;
        $this->nazwa = $nazwa;
        $this->przyczyna = $przyczyna;
    }

    public function getCzas(): string
    {
        return $this->czas;
    }

    public function withCzas(string $czas): self
    {
        $new = clone $this;
        $new->czas = $czas;

        return $new;
    }

    public function getJednostka(): Jednostka
    {
        return $this->jednostka;
    }

    public function withJednostka(Jednostka $jednostka): self
    {
        $new = clone $this;
        $new->jednostka = $jednostka;

        return $new;
    }

    public function getKod(): string
    {
        return $this->kod;
    }

    public function withKod(string $kod): self
    {
        $new = clone $this;
        $new->kod = $kod;

        return $new;
    }

    public function isKonczace(): bool
    {
        return $this->konczace;
    }

    public function withKonczace(bool $konczace): self
    {
        $new = clone $this;
        $new->konczace = $konczace;

        return $new;
    }

    public function getNazwa(): string
    {
        return $this->nazwa;
    }

    public function withNazwa(string $nazwa): self
    {
        $new = clone $this;
        $new->nazwa = $nazwa;

        return $new;
    }

    public function getPrzyczyna(): Przyczyna
    {
        return $this->przyczyna;
    }

    public function withPrzyczyna(Przyczyna $przyczyna): self
    {
        $new = clone $this;
        $new->przyczyna = $przyczyna;

        return $new;
    }
}
