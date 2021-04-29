<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedType;

use Simivar\PocztaPolskaTracking\Type\PrzesylkaPowiazana;

/**
 * @see PrzesylkaPowiazana
 */
final class RelatedShipment
{
    private string $trackingNumber;

    public function __construct(string $trackingNumber)
    {
        $this->trackingNumber = $trackingNumber;
    }

    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }

    public function withTrackingNumber(string $trackingNumber): self
    {
        $new = clone $this;
        $new->trackingNumber = $trackingNumber;

        return $new;
    }

    public static function fromPrzesylkaPowiazana(PrzesylkaPowiazana $przesylkaPowiazana)
    {
        return new self($przesylkaPowiazana->getNrPrzesylkiPowiazanej());
    }
}
