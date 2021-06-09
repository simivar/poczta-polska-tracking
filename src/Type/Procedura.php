<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Type;

final class Procedura
{
    private string $kod;
    private string $kopertaFirmowa;
    private string $nazwa;
    private ListaPrzesylekPowiazanych $przesylkiPowiazane;

    public function __construct(string $kod, string $kopertaFirmowa, string $nazwa, ListaPrzesylekPowiazanych $przesylkiPowiazane)
    {
        $this->kod = $kod;
        $this->kopertaFirmowa = $kopertaFirmowa;
        $this->nazwa = $nazwa;
        $this->przesylkiPowiazane = $przesylkiPowiazane;
    }

    public function getKod(): string
    {
        return $this->kod;
    }

    public function getKopertaFirmowa(): string
    {
        return $this->kopertaFirmowa;
    }

    public function getNazwa(): string
    {
        return $this->nazwa;
    }

    public function getPrzesylkiPowiazane(): ListaPrzesylekPowiazanych
    {
        return $this->przesylkiPowiazane;
    }
}
