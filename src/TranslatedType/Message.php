<?php

declare(strict_types=1);

namespace Simivar\PocztaPolskaTracking\TranslatedType;

use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\InvalidTrackingNumberException;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\NoEventsException;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\OtherPackagesException;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\PackageNotFoundException;
use Simivar\PocztaPolskaTracking\Exception\ShipmentStatus\UnknownException;
use Simivar\PocztaPolskaTracking\Type\Komunikat;

/**
 * @see Komunikat
 */
final class Message
{
    private ShipmentsList $shipmentsList;
    private int $status;

    public function __construct(ShipmentsList $shipmentsList, int $status)
    {
        $this->shipmentsList = $shipmentsList;
        $this->status = $status;
    }

    public function getShipmentsList(): ShipmentsList
    {
        return $this->shipmentsList;
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
    public static function fromKomunikat(Komunikat $komunikat): self
    {
        $shipmentsList = new ShipmentsList([]);
        if ($komunikat->getPrzesylki() !== null) {
            $shipmentsList = ShipmentsList::fromListaPrzesylek($komunikat->getPrzesylki());
        }

        return new self($shipmentsList, $komunikat->getStatus());
    }
}
