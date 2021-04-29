<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedType;

use Simivar\PocztaPolskaTracking\Type\DanePrzesylki;
use Simivar\PocztaPolskaTracking\Type\Przesylka;

/**
 * @see Przesylka
 */
final class Shipment
{
    private ?ShipmentData $shipmentData;
    private ?string $trackingNumber;
    private int $status;

    public function __construct(ShipmentData $danePrzesylki, string $numer, int $status)
    {
        $this->shipmentData = $danePrzesylki;
        $this->trackingNumber = $numer;
        $this->status = $status;
    }

    public function getShipmentData(): ShipmentData
    {
        return $this->shipmentData;
    }

    public function withShipmentData(ShipmentData $danePrzesylki): self
    {
        $new = clone $this;
        $new->shipmentData = $danePrzesylki;

        return $new;
    }

    public function getTrackingNumber(): string
    {
        return $this->trackingNumber;
    }

    public function withNumer(string $numer): self
    {
        $new = clone $this;
        $new->trackingNumber = $numer;

        return $new;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function withStatus(int $status): self
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }

    public static function fromPrzesylka(Przesylka $przesylka): self
    {
        return new self(
            ShipmentData::fromDanePrzesylki($przesylka->getDanePrzesylki()),
            $przesylka->getNumer(),
            $przesylka->getStatus()
        );
    }
}