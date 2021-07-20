<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedType;

use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\InvalidTrackingNumberException;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\NoEventsException;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\OtherPackagesException;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\PackageNotFoundException;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\UnknownException;
use Simivar\PocztaPolskaTracking\Type\Przesylka;
use Simivar\PocztaPolskaTracking\Validator\ShipmentStatusValidator;

/**
 * @see Przesylka
 */
final class Shipment
{
    private ?ShipmentData $shipmentData;
    private string $trackingNumber;
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

    /**
     * @throws InvalidTrackingNumberException
     * @throws NoEventsException
     * @throws OtherPackagesException
     * @throws PackageNotFoundException
     * @throws UnknownException
     */
    public static function fromPrzesylka(Przesylka $przesylka): self
    {
        ShipmentStatusValidator::validate($przesylka->getStatus());

        $shipmentData = null;
        if ($przesylka->getDanePrzesylki() !== null) {
            $shipmentData = ShipmentData::fromDanePrzesylki($przesylka->getDanePrzesylki());
        }

        return new self(
            $shipmentData,
            $przesylka->getNumer(),
            $przesylka->getStatus()
        );
    }
}
