<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\Type;

use DateTimeInterface;

/**
 * @internal
 */
final class DanePrzesylki
{
    private DateTimeInterface $dataNadania;
    private ?string $format;
    private string $kodKrajuNadania;
    private string $kodKrajuPrzezn;
    private string $kodRodzPrzes;
    private string $krajNadania;
    private string $krajPrzezn;
    private ?float $masa;
    private string $numer;
    private ?Procedura $proceduraSerwis;
    private string $rodzPrzes;
    private Jednostka $urzadNadania;
    private Jednostka $urzadPrzezn;
    private bool $zakonczonoObsluge;
    private ListaZdarzen $zdarzenia;

    public function __construct(
        DateTimeInterface $dataNadania,
        ?string $format,
        string $kodKrajuNadania,
        string $kodKrajuPrzezn,
        string $kodRodzPrzes,
        string $krajNadania,
        string $krajPrzezn,
        ?float $masa,
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

    public function getFormat(): ?string
    {
        return $this->format;
    }

    public function getKodKrajuNadania(): string
    {
        return $this->kodKrajuNadania;
    }

    public function getKodKrajuPrzezn(): string
    {
        return $this->kodKrajuPrzezn;
    }

    public function getKodRodzPrzes(): string
    {
        return $this->kodRodzPrzes;
    }

    public function getKrajNadania(): string
    {
        return $this->krajNadania;
    }

    public function getKrajPrzezn(): string
    {
        return $this->krajPrzezn;
    }

    public function getMasa(): ?float
    {
        return $this->masa;
    }

    public function getNumer(): string
    {
        return $this->numer;
    }

    public function getProceduraSerwis(): ?Procedura
    {
        return $this->proceduraSerwis;
    }

    public function getRodzPrzes(): string
    {
        return $this->rodzPrzes;
    }

    public function getUrzadNadania(): Jednostka
    {
        return $this->urzadNadania;
    }

    public function getUrzadPrzezn(): Jednostka
    {
        return $this->urzadPrzezn;
    }

    public function isZakonczonoObsluge(): bool
    {
        return $this->zakonczonoObsluge;
    }

    public function getZdarzenia(): ListaZdarzen
    {
        return $this->zdarzenia;
    }
}
