<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedType;

use Simivar\PocztaPolskaTracking\Type\Przesylka;

/**
 * @see Przesylka
 */
final class Shipment
{
    private ?ShipmentData $shipmentData;
    private ?string $trackingNumber;
    private int $status;

    public function __construct(?ShipmentData $danePrzesylki, string $numer, int $status)
    {
        $this->shipmentData = $danePrzesylki;
        $this->trackingNumber = $numer;
        $this->status = $status;
    }

    public function getShipmentData(): ?ShipmentData
    {
        return $this->shipmentData;
    }

    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public static function fromPrzesylka(Przesylka $przesylka): self
    {
        $shipmentData = null;
        if ($przesylka->getDanePrzesylki()) {
            $shipmentData = ShipmentData::fromDanePrzesylki($przesylka->getDanePrzesylki());
        }

        return new self(
            $shipmentData,
            $przesylka->getNumer(),
            $przesylka->getStatus()
        );
    }
}
