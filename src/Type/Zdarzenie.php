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

    public function __construct(string $czas, Jednostka $jednostka, string $kod, bool $konczace, string $nazwa, ?Przyczyna $przyczyna)
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

    public function getJednostka(): Jednostka
    {
        return $this->jednostka;
    }

    public function getKod(): string
    {
        return $this->kod;
    }

    public function isKonczace(): bool
    {
        return $this->konczace;
    }

    public function getNazwa(): string
    {
        return $this->nazwa;
    }

    public function getPrzyczyna(): ?Przyczyna
    {
        return $this->przyczyna;
    }
}
