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

    public function withKod(string $kod): self
    {
        $new = clone $this;
        $new->kod = $kod;

        return $new;
    }

    public function getKopertaFirmowa(): string
    {
        return $this->kopertaFirmowa;
    }

    public function withKopertaFirmowa(string $kopertaFirmowa): self
    {
        $new = clone $this;
        $new->kopertaFirmowa = $kopertaFirmowa;

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

    public function getPrzesylkiPowiazane(): ListaPrzesylekPowiazanych
    {
        return $this->przesylkiPowiazane;
    }

    public function withPrzesylkiPowiazane(ListaPrzesylekPowiazanych $przesylkiPowiazane): self
    {
        $new = clone $this;
        $new->przesylkiPowiazane = $przesylkiPowiazane;

        return $new;
    }
}
