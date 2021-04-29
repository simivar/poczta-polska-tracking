<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Type;

use DateTimeInterface;

final class DanePrzesylki
{
    private DateTimeInterface $dataNadania;
    private string $format;
    private string $kodKrajuNadania;
    private string $kodKrajuPrzezn;
    private string $kodRodzPrzes;
    private string $krajNadania;
    private string $krajPrzezn;
    private float $masa;
    private string $numer;
    private ?Procedura $proceduraSerwis;
    private string $rodzPrzes;
    private Jednostka $urzadNadania;
    private Jednostka $urzadPrzezn;
    private bool $zakonczonoObsluge;
    private ListaZdarzen $zdarzenia;

    public function __construct(
        DateTimeInterface $dataNadania,
        string $format,
        string $kodKrajuNadania,
        string $kodKrajuPrzezn,
        string $kodRodzPrzes,
        string $krajNadania,
        string $krajPrzezn,
        float $masa,
        string $numer,
        ?Procedura $proceduraSerwis,
        string $rodzPrzes,
        Jednostka $urzadNadania,
        Jednostka $urzadPrzezn,
        bool $zakonczonoObsluge,
        ListaZdarzen $zdarzenia
    ) {
        $this->dataNadania = $dataNadania;
        $this->format = $format;
        $this->kodKrajuNadania = $kodKrajuNadania;
        $this->kodKrajuPrzezn = $kodKrajuPrzezn;
        $this->kodRodzPrzes = $kodRodzPrzes;
        $this->krajNadania = $krajNadania;
        $this->krajPrzezn = $krajPrzezn;
        $this->masa = $masa;
        $this->numer = $numer;
        $this->proceduraSerwis = $proceduraSerwis;
        $this->rodzPrzes = $rodzPrzes;
        $this->urzadNadania = $urzadNadania;
        $this->urzadPrzezn = $urzadPrzezn;
        $this->zakonczonoObsluge = $zakonczonoObsluge;
        $this->zdarzenia = $zdarzenia;
    }

    public function getDataNadania(): DateTimeInterface
    {
        return $this->dataNadania;
    }

    public function withDataNadania(DateTimeInterface $dataNadania): self
    {
        $new = clone $this;
        $new->dataNadania = $dataNadania;

        return $new;
    }

    public function getFormat(): string
    {
        return $this->format;
    }

    public function withFormat(string $format): self
    {
        $new = clone $this;
        $new->format = $format;

        return $new;
    }

    public function getKodKrajuNadania(): string
    {
        return $this->kodKrajuNadania;
    }

    public function withKodKrajuNadania(string $kodKrajuNadania): self
    {
        $new = clone $this;
        $new->kodKrajuNadania = $kodKrajuNadania;

        return $new;
    }

    public function getKodKrajuPrzezn(): string
    {
        return $this->kodKrajuPrzezn;
    }

    public function withKodKrajuPrzezn(string $kodKrajuPrzezn): self
    {
        $new = clone $this;
        $new->kodKrajuPrzezn = $kodKrajuPrzezn;

        return $new;
    }

    public function getKodRodzPrzes(): string
    {
        return $this->kodRodzPrzes;
    }

    public function withKodRodzPrzes(string $kodRodzPrzes): self
    {
        $new = clone $this;
        $new->kodRodzPrzes = $kodRodzPrzes;

        return $new;
    }

    public function getKrajNadania(): string
    {
        return $this->krajNadania;
    }

    public function withKrajNadania(string $krajNadania): self
    {
        $new = clone $this;
        $new->krajNadania = $krajNadania;

        return $new;
    }

    public function getKrajPrzezn(): string
    {
        return $this->krajPrzezn;
    }

    public function withKrajPrzezn(string $krajPrzezn): self
    {
        $new = clone $this;
        $new->krajPrzezn = $krajPrzezn;

        return $new;
    }

    public function getMasa(): float
    {
        return $this->masa;
    }

    public function withMasa(float $masa): self
    {
        $new = clone $this;
        $new->masa = $masa;

        return $new;
    }

    public function getNumer(): string
    {
        return $this->numer;
    }

    public function withNumer(string $numer): self
    {
        $new = clone $this;
        $new->numer = $numer;

        return $new;
    }

    public function getProceduraSerwis(): ?Procedura
    {
        return $this->proceduraSerwis;
    }

    public function withProceduraSerwis(?Procedura $proceduraSerwis): self
    {
        $new = clone $this;
        $new->proceduraSerwis = $proceduraSerwis;

        return $new;
    }

    public function getRodzPrzes(): string
    {
        return $this->rodzPrzes;
    }

    public function withRodzPrzes(string $rodzPrzes): self
    {
        $new = clone $this;
        $new->rodzPrzes = $rodzPrzes;

        return $new;
    }

    public function getUrzadNadania(): Jednostka
    {
        return $this->urzadNadania;
    }

    public function withUrzadNadania(Jednostka $urzadNadania): self
    {
        $new = clone $this;
        $new->urzadNadania = $urzadNadania;

        return $new;
    }

    public function getUrzadPrzezn(): Jednostka
    {
        return $this->urzadPrzezn;
    }

    public function withUrzadPrzezn(Jednostka $urzadPrzezn): self
    {
        $new = clone $this;
        $new->urzadPrzezn = $urzadPrzezn;

        return $new;
    }

    public function isZakonczonoObsluge(): bool
    {
        return $this->zakonczonoObsluge;
    }

    public function withZakonczonoObsluge(bool $zakonczonoObsluge): self
    {
        $new = clone $this;
        $new->zakonczonoObsluge = $zakonczonoObsluge;

        return $new;
    }

    public function getZdarzenia(): ListaZdarzen
    {
        return $this->zdarzenia;
    }

    public function withZdarzenia(ListaZdarzen $zdarzenia): self
    {
        $new = clone $this;
        $new->zdarzenia = $zdarzenia;

        return $new;
    }
}
