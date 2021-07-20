<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedType;

use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\InvalidTrackingNumberException;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\NoEventsException;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\OtherPackagesException;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\PackageNotFoundException;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\UnknownException;
use Simivar\PocztaPolskaTracking\Type\ListaPrzesylek;

/**
 * @see ListaPrzesylek
 */
final class ShipmentsList
{
    /**
     * @var Shipment[]
     */
    private array $shipments;

    /**
     * @param Shipment[] $shipments
     */
    public function __construct(array $shipments)
    {
        $this->shipments = $shipments;
    }

    /**
     * @return Shipment[]
     */
    public function getShipments(): array
    {
        return $this->shipments;
    }

    /**
     * @throws InvalidTrackingNumberException
     * @throws NoEventsException
     * @throws OtherPackagesException
     * @throws PackageNotFoundException
     * @throws UnknownException
     */
    public static function fromListaPrzesylek(ListaPrzesylek $listaPrzesylek): self
    {
        $przesylki = $listaPrzesylek->getPrzesylka();
        $shipments = [];
        foreach ($przesylki as $przesylka) {
            $shipments[] = Shipment::fromPrzesylka($przesylka);
        }

        return new self($shipments);
    }
}
